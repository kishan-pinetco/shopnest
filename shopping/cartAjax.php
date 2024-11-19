<?php

include "../include/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json_data = file_get_contents('php://input');

    $data = json_decode($json_data, true);

    if (isset($_COOKIE['Cart_products'])) {
        // Decode the cart products from the cookie
        $cartProducts = json_decode($_COOKIE['Cart_products'], true);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Cart is empty']);
        exit;
    }

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid JSON format']);
        exit;
    }

    if (!isset($data['items']) || !isset($data['user_id']) || !isset($data['product_id']) || !isset($data['vendor_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
        exit;
    }

    $response = ['status' => 'success', 'message' => 'Order placed successfully'];

    if (isset($data['items'])) {
        include '../pages/mail.php';
        foreach ($data['items'] as $item) {
            $order_title = $item['cart_title'];
            $order_image = $item['cart_image'];
            $order_price = $item['cart_price'];
            $order_color = $item['cart_color'];
            $order_size = $item['cart_size'];
            $product_qty = $item['cart_qty'];

            $user_id = $data['user_id'];
            $product_id = $data['product_id'];
            $vendor_id = $data['vendor_id'];
            $FirstName = $data['FirstName'];
            $lastName = $data['lastName'];
            $user_email = $data['user_email'];
            $Phone_number = $data['Phone_number'];
            $Address = $data['Address'];
            $state = $data['state'];
            $city = $data['city'];
            $pin = $data['pin'];

            $paymentType = $data['paymentType'];
            $formattedTotal = $data['formattedTotal'];
            $shipping = $data['shipping'];

            $bac = str_replace(",", "", $order_price);
            $bac = (int)$bac;

            $totalProductPrice = number_format($bac + $shipping);

            if ($bac <= 1299) {
                $shippings = 40;
            } else {
                $shippings = 0;
            }

            $orders_prices = str_replace(",", "", $order_price);

            $admin_profit = 20 + $shippings;
            $vendor_profit = number_format($orders_prices - $admin_profit);
            $date = date('d-m-Y');

            // insert order into database
            $order_insert_sql = "INSERT INTO orders (order_title, order_image, order_price, order_color, order_size, qty, user_id, product_id, vendor_id, user_first_name, user_last_name, user_email, user_mobile, user_address, user_state, user_city, user_pin, payment_type, total_price, vendor_profit, admin_profit, date) VALUES ('$order_title', '$order_image', '$order_price', '$order_color', '$order_size', '$product_qty', '$user_id', '$product_id', '$vendor_id', '$FirstName', '$lastName', '$user_email', '$Phone_number', '$Address', '$state', '$city', '$pin', '$paymentType', '$totalProductPrice', '$vendor_profit', '$admin_profit', '$date')";
            $order_insert_query = mysqli_query($con, $order_insert_sql);

            // calculate Quantity
            $get_qty = "SELECT * FROM products WHERE product_id = '$product_id'";
            $get_qty_query = mysqli_query($con, $get_qty);
            
            $qty = mysqli_fetch_assoc($get_qty_query);
            $product_quty = $qty['Quantity'];
            $qty_replace = str_replace(",", "", $product_quty);
            $remove_quty = $qty_replace - $product_qty;
            
            // update product Quantity
            $update_qty = "UPDATE products SET Quantity='$remove_quty' WHERE product_id = '$product_id'";
            $update_qty_quary = mysqli_query($con, $update_qty);


            if($update_qty_quary){
    
                // Add recipient and other email properties
                $mail->addAddress($user_email);
                $mail->isHTML(true);
    
                $retrieve_order = "SELECT * FROM orders WHERE product_id = '$product_id'";
                $retrieve_order_query = mysqli_query($con, $retrieve_order);
                $res = mysqli_fetch_assoc($retrieve_order_query);
            
                $username = $res['user_first_name'] .' '. $res['user_last_name'];
                $order_id = $res['order_id'];
                $order_date = $res['date'];
    
                $order_title = $res['order_title'];
                $order_image = '../src/product_image/product_profile/' . $res['order_image'];
                $order_price = $res['order_price'];
                $order_color = $res['order_color'];
                $order_size = $res['order_size'];
                $order_qty = $res['qty'];
            
                $user_email = $res['user_email'];
                $user_mobile = $res['user_mobile'];
                $user_address = $res['user_address'];
            
                $total_price = $res['total_price'];
                $today = date('d-m-Y', strtotime($res['date']));
                $delivery_date = date('d-m-Y', strtotime('+5 days', strtotime($today)));
    
                $mail->Subject = "New Order Confirmation - #$order_id";
                $mail->Body = "<html>
                <head>
                    <title>Order Confirmation</title>
                </head>
                <body>
                    <p>Dear $username,</p>
                    <p>Thank you for placing an order with us! We are excited to confirm the details of your purchase. Below are the specifics of your order:</p>
                    <p><strong>Order Number:</strong> $order_id<br>
                    <strong>Order Date:</strong> $order_date</p>
                    <h3>Items Ordered:</h3>
                    <table border='1' cellpadding='10'>
                        <tr>
                            <td><strong>Product Name:</strong></td>
                            <td>$order_title</td>
                        </tr>
                        <tr>
                            <td><strong>Image:</strong></td>
                            <td><img src='$order_image' alt='Product Image' width='100'></td>
                        </tr>
                        <tr>
                            <td><strong>Price:</strong></td>
                            <td>$order_price</td>
                        </tr>
                        <tr>
                            <td><strong>Quantity:</strong></td>
                            <td>$order_qty</td>
                        </tr>
                        <tr>
                            <td><strong>Color:</strong></td>
                            <td>$order_color</td>
                        </tr>
                        <tr>
                            <td><strong>Size:</strong></td>
                            <td>$order_size</td>
                        </tr>
                    </table>
                    <p><strong>Mobile Number:</strong> $user_mobile</p>
                    <p><strong>Billing E-mail:</strong> $user_email</p>
                    <p><strong>Billing Address:</strong> $user_address</p>
                    <p><strong>Order Total Price:</strong> $total_price</p>
                    <p><strong>Estimated Delivery Date:</strong> $delivery_date</p>
                    <p>We will send you an update when your order is on its way. If you have any questions or need further assistance, please do not hesitate to contact us.</p>
                    <p>Thank you for choosing shopNest. We look forward to serving you again!</p>
                    <p>Best regards,<br>
                    shopNest<br>
                    shopnest2603@gmail.com</p>
                </body>
                </html>";
    
                // Send the email
                if ($mail->send()) {
                    $response = ['status' => 'success', 'message' => 'Order placed successfully'];
                } else {
                    $response = ['status' => 'error', 'message' => 'Failed to send confirmation email'];
                }


                $productIdToRemove = $item['cart_id'];

                $productExists = false;
                foreach ($cartProducts as $key => $cartItem) {
                    if ($cartItem['cart_id'] == $productIdToRemove) {
                        $productExists = true;
                        // Remove the product from the cart array
                        unset($cartProducts[$key]);
                        break;
                    }
                }

                // Re-index the array after removing the item to avoid gaps
                $cartProducts = array_values($cartProducts);

                // If the product was found and removed, update the cookie
                if ($productExists) {
                    // If cart is empty after removal, delete the cookie
                    if (empty($cartProducts)) {
                        setcookie('Cart_products', '', time() - 3600, '/'); // Expire the cookie
                    } else {
                        // Update the cookie with the new cart data
                        setcookie('Cart_products', json_encode($cartProducts), time() + (86400 * 30), '/'); // Expire in 30 days
                    }
                }

            } else {
                $response = ['status' => 'error', 'message' => 'Failed to update product quantity'];
                break; // If update fails, stop further processing and return the error
            }
        }

    }
}
echo json_encode($response);
?>

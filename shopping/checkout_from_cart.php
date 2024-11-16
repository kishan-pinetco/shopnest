<?php

if (!isset($_GET['totalPrice']) || !isset($_COOKIE['user_id'])) {
    header("Location: /shopnest/index.php");
    exit;
}

if (isset($_COOKIE['vendor_id'])) {
    header("Location: /shopnest/vendor/vendor_dashboard.php");
    exit;
}

if (isset($_COOKIE['adminEmail'])) {
    header("Location: /shopnest/admin/dashboard.php");
    exit;
}
?>

<?php
include "../include/connect.php";

if (isset($_COOKIE['user_id'])) {
    $totalPrice = $_GET['totalPrice'];
    $myCookie = $_COOKIE['user_id'];
    if (isset($_COOKIE['Cart_products'])) {
        $cookie_value = $_COOKIE['Cart_products'];

        $cart_products = json_decode($cookie_value, true);
        if (!empty($cart_products) && is_array($cart_products)) {
            foreach ($cart_products as $Cproducts) {
                $cart_products_id = $Cproducts['cart_id'];
                $cart_products_image = $Cproducts['cart_image'];
                $cart_products_title = $Cproducts['cart_title'];
                $cart_products_price = $Cproducts['cart_price_per_unit'];
                $cart_products_color = $Cproducts['cart_color'];
                $cart_products_size = $Cproducts['cart_size'];
                $cart_products_qty = $Cproducts['cart_qty'];
            }
        }
    }

    $product_find = "SELECT * FROM products WHERE product_id = '$cart_products_id'";
    $product_query = mysqli_query($con, $product_find);

    $row = mysqli_fetch_assoc($product_query);

    $qty = $_GET['qty'];

    $cleaned_string = trim($qty, '[]');
    $array = explode(',', $cleaned_string);
    $numbers = array_map('intval', $array);
    $quantityMap = array_combine(array_keys($cart_products), $numbers);

    $vendor_id = $row['vendor_id'];

    $vendor_find = "SELECT * FROM vendor_registration WHERE vendor_id  = '$vendor_id'";
    $vendor_query = mysqli_query($con, $vendor_find);
    $ven = mysqli_fetch_assoc($vendor_query);

    $user_id = $_COOKIE['user_id'];

    $get_user = "SELECT * FROM user_registration WHERE user_id = '$user_id'";
    $user_query = mysqli_query($con, $get_user);

    $us = mysqli_fetch_assoc($user_query);
}

if (isset($_POST['placeOrder'])) {
    $_SESSION['placeOrders'] = 1;
}

?>

<?php

if (isset($_POST['placeOrder'])) {
    if (isset($_COOKIE['Cart_products'])) {
        $cookie_value = $_COOKIE['Cart_products'];
        $cart_products = json_decode($cookie_value, true);
        // sending email
        include "../pages/mail.php";
        if (!empty($cart_products) && is_array($cart_products)) {
            foreach ($cart_products as $index => $Cproducts) {
                // Escape special characters
                $order_image = mysqli_real_escape_string($con, $Cproducts['cart_image']);
                $order_title = mysqli_real_escape_string($con, $Cproducts['cart_title']);
                $order_price = mysqli_real_escape_string($con, $Cproducts['cart_price']);
                $order_color = mysqli_real_escape_string($con, $Cproducts['cart_color']);
                $order_size = mysqli_real_escape_string($con, $Cproducts['cart_size']);


                $user_id = mysqli_real_escape_string($con, $_COOKIE['user_id']);
                $product_id = mysqli_real_escape_string($con, $Cproducts['cart_id']);
                $vendor_id = mysqli_real_escape_string($con, $row['vendor_id']);

                $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
                $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
                $Phone_number = mysqli_real_escape_string($con, $_POST['Phone_number']);
                $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
                $Address = mysqli_real_escape_string($con, $_POST['Address']);
                $state = mysqli_real_escape_string($con, $_POST['state']);
                $city = mysqli_real_escape_string($con, $_POST['city']);
                $pin = mysqli_real_escape_string($con, $_POST['pin']);

                if (isset($_POST['payment'])) {
                    $paymentType = mysqli_real_escape_string($con, $_POST['payment']);
                }

                $bac = str_replace(",", "", $order_price);
                $bac = (int)$bac;

                if ($bac <= 599) {
                    $shipping = 40;
                } else {
                    $shipping = 0;
                }

                $totalProductPrice = number_format($bac + $shipping);

                $orders_prices = str_replace(",", "", $Cproducts['cart_price']);

                $admin_profit = 20 + $shipping;
                $vendor_profit = number_format($orders_prices - $admin_profit);

                $review_insert_Date = date('d-m-Y');

                if (!empty($FirstName) && !empty($lastName) && !empty($Phone_number) && !empty($user_email) && !empty($Address) && !empty($state) && !empty($city) && !empty($pin) && !empty($paymentType)) {
                    // remove quantity of products
                    $product_id = mysqli_real_escape_string($con, $Cproducts['cart_id']);

                    $product_qty = $product_quantity = isset($quantityMap[$index]) ? $quantityMap[$index] : 'N/A';

                    $get_qty = "SELECT * FROM products WHERE product_id = '$product_id'";
                    $get_qty_query = mysqli_query($con, $get_qty);

                    $qty = mysqli_fetch_assoc($get_qty_query);
                    $product_quty = $qty['Quantity'];
                    $qty_replace = str_replace(",", "", $product_quty);
                    $remove_quty = $qty_replace - $product_qty;

                    $order_insert_sql = "INSERT INTO orders (order_title, order_image, order_price, order_color, order_size, qty, user_id, product_id, vendor_id, user_first_name, user_last_name, user_email, user_mobile, user_address, user_state, user_city, user_pin, payment_type, total_price, vendor_profit, admin_profit, date) VALUES ('$order_title', '$order_image', '$order_price', '$order_color', '$order_size', '$product_qty', '$user_id', '$product_id', '$vendor_id', '$FirstName', '$lastName', '$user_email', '$Phone_number', '$Address', '$state', '$city', '$pin', '$paymentType', '$totalProductPrice', '$vendor_profit', '$admin_profit', '$review_insert_Date')";
                    $order_insert_query = mysqli_query($con, $order_insert_sql);

                    $update_qty = "UPDATE products SET Quantity='$remove_quty' WHERE product_id = '$product_id'";
                    $update_qty_quary = mysqli_query($con, $update_qty);

                    if ($update_qty_quary) {
                        $product_id = mysqli_real_escape_string($con, $Cproducts['cart_id']);

                        $retrieve_order = "SELECT * FROM orders WHERE product_id = '$product_id'";
                        $retrieve_order_query = mysqli_query($con, $retrieve_order);
                        $res = mysqli_fetch_assoc($retrieve_order_query);

                        $mail->addAddress($user_email);
                        $mail->isHTML(true);

                        if ($res) {
                            $username = $res['user_first_name'] . ' ' . $res['user_last_name'];
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

                            $mail->send();
                        }

?>
                        <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
                            <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Your order has been placed.</span>
                                </div>
                            </div>
                        </div>

                        <script>
                            let popUp = document.getElementById('popUp');
                            popUp.style.display = 'flex';
                            popUp.style.opacity = '100';
                            setTimeout(() => {
                                popUp.style.display = 'none';
                                popUp.style.opacity = '0';
                                window.location.href = '../index.php';
                            }, 1500);
                        </script>
                    <?php

                        ob_start();

                        if (isset($_COOKIE['Cart_products'])) {
                            setcookie('Cart_products', '', time() - 3600, "/");
                            unset($_COOKIE['Cart_products']);
                        }

                        ob_end_flush();

                        if (isset($_SESSION['placeOrders'])) {
                            unset($_SESSION['placeOrders']);
                        }
                    }
                } else {
                    // Log missing field for debugging
                    ?>
                    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
                        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Missing fields in the order data.</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        let EpopUp = document.getElementById('EpopUp');
                        EpopUp.style.display = 'flex';
                        EpopUp.style.opacity = '100';
                        setTimeout(() => {
                            EpopUp.style.display = 'none';
                            EpopUp.style.opacity = '0';
                            window.location.href = '';
                        }, 1500);
                    </script>
<?php
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- alpine CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- link to css -->
    <link rel="stylesheet" href="">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">

    <!-- title -->
    <title>Check Out Page</title>
    <style>
        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body style="font-family: 'Outfit', sans-serif;">


    <form class="max-w-screen-xl m-auto" action="" method="post">
        <div class="grid lg:grid-cols-2">
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order summary</p>
                <p class="text-gray-400">Check your items. And select a suitable payment method.</p>
                <?php
                if (isset($_COOKIE['Cart_products'])) {
                    $cookie_value = $_COOKIE['Cart_products'];

                    $cart_products = json_decode($cookie_value, true);

                    if (!empty($cart_products) && is_array($cart_products)) {
                        foreach ($cart_products as $index => $Cproducts) {
                            $cart_products_id = $Cproducts['cart_id'];
                            $cart_products_image = $Cproducts['cart_image'];
                            $cart_products_title = $Cproducts['cart_title'];
                            $cart_products_price = $Cproducts['cart_price_per_unit'];
                            $cart_products_color = $Cproducts['cart_color'];
                            $cart_products_size = $Cproducts['cart_size'];

                            $product_quantity = isset($quantityMap[$index]) ? $quantityMap[$index] : 'N/A';
                            $cart_price = str_replace(',', '', $cart_products_price);

                            $total_price = (int)$product_quantity * (int)$cart_price;
                ?>
                            <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                                <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                                    <img class="m-2 h-full md:h-32 rounded-md object-cover object-center" src="<?php echo isset($myCookie) ? '../src/product_image/product_profile/' . $cart_products_image : '../src/sample_images/product_1.jpg' ?>" alt="" />
                                    <div class="flex w-full flex-col px-4 py-4 gap-y-3">
                                        <span class="font-semibold line-clamp-2"><?php echo isset($myCookie) ? $cart_products_title : 'product title' ?></span>
                                        <p class="text-lg font-semibold text-green-500">₹<?php echo isset($myCookie) ? number_format($total_price) : 'MRP' ?></p>
                                        <div class="flex item-center justify-between">
                                            <div class="flex item-center gap-1">
                                                <span class="text-lg font-semibold">Color:</span>
                                                <div class="my-auto"><?php echo isset($myCookie) ? htmlspecialchars($cart_products_color) : 'product color' ?></div>
                                            </div>
                                            <div class="flex item-center gap-1">
                                                <span class="text-lg font-semibold">Size:</span>
                                                <p class="my-auto"><?php echo isset($myCookie) ? $cart_products_size : 'product Size' ?></p>
                                            </div>
                                        </div>
                                        <div class="flex item-center gap-1">
                                            <span class="text-lg font-semibold">QTY:</span>
                                            <p class="my-auto"><?php echo isset($myCookie) ? $product_quantity : 'product Quantity'; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>

                <p class="mt-8 text-xl font-medium">Payment methods</p>
                <p class="text-gray-400">Complete your order by providing your payment details.</p>
                <div class="mt-5 grid space-y-3 border bg-white rounded-lg px-2 py-4 sm:px-6">
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="UPI" value="Other UPI" class="cursor-pointer text-gray-600 focus:ring-gray-600">
                        <label class="cursor-pointer text-base font-medium" for="UPI">UPI</label>
                    </div>
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="COD" value="Cash on delivery" class="cursor-pointer text-gray-600 focus:ring-gray-600">
                        <label class="cursor-pointer text-base font-medium" for="COD">Cash on delivery</label>
                    </div>
                </div>
            </div>
            <div class="mt-10 px-4 pt-8 lg:mt-0">
                <p class="text-xl font-medium">Billing details</p>
                <div class="">
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="FirstName" class="mt-4 mb-2 block text-sm font-medium require">First name:</label>
                            <div class="relative">
                                <input type="text" id="FirstName" name="FirstName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['first_name'] : 'User First Name' ?>" />
                            </div>
                        </div>
                        <div>
                            <label for="lastName" class="mt-4 mb-2 block text-sm font-medium require">Last name:</label>
                            <div class="relative">
                                <input type="text" id="lastName" name="lastName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['last_name'] : 'User Last Name' ?>" />
                            </div>
                        </div>
                    </div>
                    <label for="Phone_number" class="mt-4 mb-2 block text-sm font-medium require">Phone number:</label>
                    <div class="relative">
                        <input type="number" id="Phone_number" name="Phone_number" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base uppercase shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['phone'] : 'User Phone Number' ?>" />
                    </div>
                    <label for="user_email" class="mt-4 mb-2 block text-sm font-medium require">Email:</label>
                    <div class="relative">
                        <input type="email" id="user_email" name="user_email" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['email'] : 'User email' ?>" />
                    </div>
                    <label for="Address" class="mt-4 mb-2 block text-sm font-medium require">Shipping address:</label>
                    <div class="relative">
                        <input type="text" id="Address" name="Address" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['Address'] : 'User Address' ?>" />
                    </div>
                    <label for="state" class="mt-4 mb-2 block text-sm font-medium require">State:</label>
                    <div class="relative">
                        <input type="text" id="state" name="state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['state'] : 'User state' ?>" />
                    </div>
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="city" class="mt-4 mb-2 block text-sm font-medium require">City:</label>
                            <div class="relative">
                                <input type="text" id="city" name="city" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($myCookie) ? $us['city'] : 'User city' ?>" />
                            </div>
                        </div>
                        <div>
                            <label for="pin" class="mt-4 mb-2 block text-sm font-medium require">Pincode:</label>
                            <div class="relative">
                                <input type="tel" id="pin" name="pin" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" maxlength="6" value="<?php echo isset($myCookie) ? $us['pin'] : 'User Pin' ?>" />
                            </div>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="mt-6 border-t border-b py-2">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Subtotal</p>
                            <?php
                            if (isset($myCookie)) {
                                $product_mrp = $totalPrice;
                                $products_price = explode(",", $product_mrp);

                                $productPrice = implode("", $products_price);
                            }
                            ?>
                            <p class="font-semibold text-gray-900">₹<?php echo isset($myCookie) ? number_format($totalPrice) : 'MRP' ?></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Shipping</p>
                            <p class="font-semibold text-gray-900">₹<?php echo isset($myCookie) ? ($productPrice <= 599 ? $shipping = 40 : $shipping = 0) : $shipping = 0 ?></p>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <p class="text-base font-medium text-gray-900">Total</p>
                        <label for="totalPrice">
                            <h1 class="float-right text-2xl font-semibold text-green-500">₹
                                <?php
                                if (isset($myCookie)) {
                                    $product_mrp = $totalPrice;
                                    $products_price = explode(",", $product_mrp);

                                    $productPrice = implode("", $products_price);

                                    $total = $totalPrice + $shipping;

                                    $formattedTotalPriceWithQty = number_format($totalPrice, 0);
                                    $formattedTotal = number_format($total, 0);

                                    echo $formattedTotal;
                                } else {
                                    echo 'Total Amount';
                                }
                                ?>
                            </h1>
                        </label>
                        <input type="text" id="totalPrice" class="hidden float-right bg-transparent border-none text-2xl font-semibold text-gray-900" name="totalProductPrice" value="₹<?php
                                                                                                                                                                                        if (isset($myCookie)) {
                                                                                                                                                                                            $product_mrp = $totalPrice;
                                                                                                                                                                                            $products_price = explode(",", $product_mrp);

                                                                                                                                                                                            $productPrice = implode("", $products_price);

                                                                                                                                                                                            $total = $totalPrice + $shipping;

                                                                                                                                                                                            $formattedTotalPriceWithQty = number_format($totalPrice, 0);
                                                                                                                                                                                            $formattedTotal = number_format($total, 0);

                                                                                                                                                                                            echo $formattedTotal;
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo 'Total Amount';
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>" dir="rtl">
                    </div>
                </div>
                <div>
                    <input type="submit" name="placeOrder" value="Place order" <?php echo isset($_SESSION['placeOrders']) ? 'disabled' : '' ?> class="<?php echo isset($_SESSION['placeOrders']) ? 'cursor-not-allowed opacity-50' : 'cursor-pointer hover:bg-gray-800' ?> mt-4 mb-8 w-full rounded-tl-xl rounded-br-xl bg-gray-700 px-6 py-3 font-medium text-white transition duration-200">
                </div>
            </div>
        </div>
    </form>

    <br><br>

    <!-- footer -->
    <?php
    include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>
<?php
    include "../include/connect.php";

    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        $product_find = "SELECT * FROM items WHERE product_id = '$product_id'";
        $product_query = mysqli_query($con,$product_find);

        $pimg = '';

        while($res = mysqli_fetch_assoc($product_query)){
            $color = $_GET['color'];
             
            $json_img = $res['image'];

            $color_img = json_decode($json_img, true);

            $product_imge = isset($color_img[$color]) ? $color_img[$color] :'';

            $pimg = $product_imge['img1'];
        }

        $title = $_GET['title'];

        $color = $_GET['color'];

        if($_GET['size'] == ''){
            $size = '-';
        }else{
            $size = $_GET['size'];
        }

        $qty = $_GET['qty'];

        $product_find = "SELECT * FROM items WHERE product_id = '$product_id'";
        $product_query = mysqli_query($con,$product_find);
        
        $row = mysqli_fetch_assoc($product_query);

        if(isset($product_id)){

            $product_mrp = $row['MRP'];
            $products_price = explode(",", $product_mrp);

            $productPrice = implode("", $products_price);

            $totalPriceWithQty = number_format($productPrice * $qty);
        }

        $vendor_id = $row['vendor_id'];

        $vendor_find = "SELECT * FROM vendor_registration WHERE vendor_id  = '$vendor_id'";
        $vendor_query = mysqli_query($con,$vendor_find);
        $ven = mysqli_fetch_assoc($vendor_query);

        $user_id = $_COOKIE['user_id'];

        $get_user = "SELECT * FROM user_registration WHERE user_id = '$user_id'";
        $user_query = mysqli_query($con,$get_user);

        $us = mysqli_fetch_assoc($user_query);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

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
</head>
<body style="font-family: 'Outfit', sans-serif;">
    

    <form class="max-w-screen-xl m-auto" action="" method="post">
        <div class="grid lg:grid-cols-2">
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order Summary</p>
                <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
                <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                    <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                        <img class="m-2 h-full md:h-32 rounded-md object-cover object-center" src="<?php echo isset($product_id) ? '../src/product_image/product_profile/' . $pimg : '../src/sample_images/product_1.jpg' ?>" alt="" />
                        <div class="flex w-full flex-col px-4 py-4 gap-y-3">
                            <span class="font-semibold line-clamp-2"><?php echo isset($product_id) ? $title : 'product title' ?></span>
                            <p class="text-lg font-semibold text-gray-600">₹<?php echo isset($product_id) ? $totalPriceWithQty : 'MRP' ?></p>
                            <div class="flex item-center justify-between">
                                <div class="flex item-center gap-1">
                                    <h1 class="text-lg font-semibold">Color:</h1>
                                    <span class="my-auto"><?php echo isset($product_id) ? $color : 'product color' ?></span>
                                </div>
                                <div class="flex item-center gap-1">
                                    <?php
                                        if(isset($size) == null){
                                            echo "";
                                        }else{
                                            ?>
                                                <span class="text-lg font-semibold">Size:</span>
                                                <p class="my-auto"><?php echo isset($product_id) ? $size : 'product Size' ?></p>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="flex item-center gap-1">
                                <span class="text-lg font-semibold">QTY:</span>
                                <p class="my-auto"><?php echo isset($product_id) ? $qty : 'product Quantity';?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-xl font-medium">Payment Methods</p>
                <p class="text-gray-400">Complete your order by providing your payment details.</p>
                <div class="mt-5 grid space-y-3 border bg-white rounded-lg px-2 py-4 sm:px-6">
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="UPI" value="Other UPI" class="cursor-pointer text-gray-600 focus:ring-gray-600">
                        <label class="cursor-pointer text-base font-medium" for="UPI">UPI</label>
                    </div>
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="COD" value="Cash On delivery" class="cursor-pointer text-gray-600 focus:ring-gray-600">
                        <label class="cursor-pointer text-base font-medium" for="COD">Cash On delivery</label>
                    </div>
                </div>
            </div>
            <div class="mt-10 px-4 pt-8 lg:mt-0">
                <p class="text-xl font-medium">Billing Address</p>
                <div class="">
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="FirstName" class="mt-4 mb-2 block text-sm font-medium">First Name</label>
                            <div class="relative">
                                <input type="text" id="FirstName" name="FirstName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['first_name'] : 'User First Name'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="lastName" class="mt-4 mb-2 block text-sm font-medium">Last Name</label>
                            <div class="relative">
                                <input type="text" id="lastName" name="lastName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['last_name'] : 'User Last Name'?>" />
                            </div>
                        </div>
                    </div>
                    <label for="Phone_number" class="mt-4 mb-2 block text-sm font-medium">Phone Number</label>
                    <div class="relative">
                        <input type="number" id="Phone_number" name="Phone_number" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base uppercase shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['phone'] : 'User Phone Number'?>" />
                    </div>
                    <label for="user_email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                    <div class="relative">
                        <input type="email" id="user_email" name="user_email" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['email'] : 'User email'?>" />
                    </div>
                    <label for="Address" class="mt-4 mb-2 block text-sm font-medium">Shipping Address</label>
                    <div class="relative">
                        <input type="text" id="Address" name="Address" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['Address'] : 'User Address'?>"/>
                    </div>
                    <label for="state" class="mt-4 mb-2 block text-sm font-medium">State</label>
                    <div class="relative">
                        <input type="text" id="state" name="state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['state'] : 'User state'?>" />
                    </div>
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="city" class="mt-4 mb-2 block text-sm font-medium">City</label>
                            <div class="relative">
                                <input type="text" id="city" name="city" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" value="<?php echo isset($product_id) ? $us['city'] : 'User city'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="pin" class="mt-4 mb-2 block text-sm font-medium">Pincode</label>
                            <div class="relative">
                                <input type="tel" id="pin" name="pin" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-gray-500" maxlength="6" value="<?php echo isset($product_id) ? $us['pin'] : 'User Pin'?>"/>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total -->
                    <div class="mt-6 border-t border-b py-2">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Subtotal</p>
                            <?php
                                if(isset($product_id)){
                                    $product_mrp = $row['MRP'];
                                    $products_price = explode(",", $product_mrp);

                                    $productPrice = implode("", $products_price);
                                }
                            ?>
                            <p class="font-semibold text-gray-900">₹<?php echo isset($product_id) ? $totalPriceWithQty : 'MRP' ?></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Shipping</p>
                            <p class="font-semibold text-gray-900">₹<?php
                                if (isset($product_id)) {
                                    $totalPriceWithQty = str_replace(',', '', $totalPriceWithQty);
                                    $totalPriceWithQty = (int) $totalPriceWithQty;
                                    if ($totalPriceWithQty <= 599) {
                                        $shipping = 40;
                                    } else {
                                        $shipping = 0;
                                    }
                                } else {
                                    $shipping = 0;
                                }

                                // Output the shipping value
                                echo $shipping;
                            ?></p>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <p class="text-base font-medium text-gray-900">Total</p>
                        <label for="totalPrice">
                            <h1 class="float-right text-2xl font-semibold text-gray-900">₹
                            <?php
                                if(isset($product_id)){
                                    $productPrice = (float)$productPrice;
                                    $qty = (int)$qty;
                                                            
                                    $totalPriceWithQty = $productPrice * $qty;
                                                                
                                    $total = $totalPriceWithQty + $shipping;
                                                            
                                    $formattedTotalPriceWithQty = number_format($totalPriceWithQty, 0);
                                    $formattedTotal = number_format($total, 0);
                                                                
                                    echo $formattedTotal;
                                }else{
                                    echo 'Total Amount';
                                }
                            ?>
                            </h1>
                        </label>
                        <input type="text" id="totalPrice" class="hidden float-right bg-transparent border-none text-2xl font-semibold text-gray-900" name="totalProductPrice" value="₹<?php
                                if(isset($product_id)){
                                    $productPrice = (float)$productPrice;
                                    $qty = (int)$qty;
                                                            
                                    $totalPriceWithQty = $productPrice * $qty;
                                                                
                                    $total = $totalPriceWithQty + $shipping;
                                                            
                                    $formattedTotalPriceWithQty = number_format($totalPriceWithQty, 0);
                                    $formattedTotal = number_format($total, 0);
                                                                
                                    echo $formattedTotal;
                                }else{
                                    echo 'Total Amount';
                                }
                            ?>" dir="rtl">
                    </div>
                </div>
                <input type="submit" name="placeOrder" value="Place Order" class="mt-4 mb-8 w-full rounded-tl-xl rounded-br-xl bg-gray-700 px-6 py-3 font-medium text-white cursor-pointer hover:bg-gray-800 transition duration-200">
            </div>
        </div>
    </form>

    

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>
</html>

<?php
    if(isset($_POST['placeOrder'])){
        $order_title = mysqli_real_escape_string($con, $title);
        $order_image = mysqli_real_escape_string($con, $pimg);
        $order_price = mysqli_real_escape_string($con, $totalPriceWithQty);
        $order_color = mysqli_real_escape_string($con, $color);
        $order_size = mysqli_real_escape_string($con, $size);

        $product_qty = $qty;

        $user_id = mysqli_real_escape_string($con, $_COOKIE['user_id']);
        $product_id = mysqli_real_escape_string($con, $_GET['product_id']);
        $vendor_id = mysqli_real_escape_string($con, $row['vendor_id']);

        $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
        $Phone_number = mysqli_real_escape_string($con, $_POST['Phone_number']);
        $Address = mysqli_real_escape_string($con, $_POST['Address']);
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $pin = mysqli_real_escape_string($con, $_POST['pin']);

        if(isset($_POST['payment'])){
            $paymentType = mysqli_real_escape_string($con, $_POST['payment']);
        }

        $bac = str_replace(",", "", $order_price);
        $bac = (int)$bac;
    
        $totalProductPrice = number_format($bac + $shipping);

        
        $orders_prices = str_replace("," , "", $order_price);
    
        $admin_profit = 20 + $shipping;
        $vendor_profit = number_format($orders_prices - $admin_profit);

        $review_insert_Date = date('d-m-Y');

        if(!empty($FirstName) && !empty($lastName) && !empty($Phone_number) && !empty($user_email) && !empty($Address) && !empty($state) && !empty($city) && !empty($pin) && !empty($paymentType)){
            
            // remove quantity of products
            $get_qty = "SELECT * FROM items WHERE product_id = '$product_id'";
            $get_qty_query = mysqli_query($con, $get_qty);

            $qty = mysqli_fetch_assoc($get_qty_query);
            $product_quty = $qty['Quantity'];

            $qty_replace = str_replace(",", "",$product_quty);
            
            $remove_quty = $qty_replace - $product_qty;
            
            $order_insert_sql = "INSERT INTO orders (order_title, order_image, order_price, order_color, order_size, qty, user_id, product_id, vendor_id, user_first_name, user_last_name, user_email, user_mobile, user_address, user_state, user_city, user_pin, payment_type, total_price, vendor_profit, admin_profit, date) VALUES ('$order_title', '$order_image', '$order_price', '$order_color', '$order_size', '$product_qty', '$user_id', '$product_id', '$vendor_id', '$FirstName', '$lastName', '$user_email', '$Phone_number', '$Address', '$state', '$city', '$pin', '$paymentType', '$totalProductPrice', '$vendor_profit', '$admin_profit', '$review_insert_Date')";                        
            $order_insert_query = mysqli_query($con, $order_insert_sql);

            $update_qty = "UPDATE items SET Quantity='$remove_quty' WHERE product_id = '$product_id'";
            $update_qty_quary = mysqli_query($con, $update_qty);

            if(!$order_insert_query){
                // Log error for debugging
                error_log("MySQL Error: " . mysqli_error($con));
            }
        } else {
            // Log missing field for debugging
            error_log("Missing fields in the order data.");
        }


        // sending email

        include "../pages/mail.php";
        $mail->addAddress($user_email);
        $mail->isHTML(true);

        // order information
        if(isset($_GET['product_id'])){
            $product_id = $_GET['product_id'];

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
        }
        
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

        if(isset($order_insert_query) && isset($update_qty_quary)){

            ?>
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Your Order Has been Placed.</span>
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
        } else {
            ?>
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Order Not Placed Please try again.</span>
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
                    }, 1500);
                </script>
            <?php
        }
    }
?>
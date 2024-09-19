<?php
include "../include/connect.php";

if (isset($_COOKIE['user_id'])) {
    $order_id = $_GET['order_id'];

    $retrieve_order = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $retrieve_order_query = mysqli_query($con, $retrieve_order);

    $res = mysqli_fetch_assoc($retrieve_order_query);

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
    <title>Return Order</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">
    
<div class="max-w-screen-lg m-auto px-4 py-12">
        <div class="grid grid-col-1 gap-y-4">
            <h2 class="font-bold text-2xl text-black">Return Order</h2>
            <div class="flex flex-col items-center gap-5 md:flex-row">
                <div>
                    <img class="w-full h-32 object-contain" src="<?php echo isset($_COOKIE['user_id']) ? '../src/product_image/product_profile/' . $res['order_image'] : '../src/sample_images/product_1.jpg' ?>" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-7 line-clamp-2"><?php echo isset($_COOKIE['user_id']) ? $res['order_title'] : 'product title' ?></h2>
                    <div>
                        <div class="flex items-center">
                            <p class="font-medium text-base leading-7 text-black pr-4 mr-4 border-r border-gray-200"> Qty: <span class="text-gray-500"><?php echo isset($_COOKIE['user_id']) ? $res['qty'] : 'qty' ?></span></p> 
                            <p class="font-medium text-base leading-7 text-black">Price: <span class="text-gray-500">₹<?php echo isset($_COOKIE['user_id']) ? $res['total_price'] : 'total_price' ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <form action="" method="post">
            <div>
                <div class="headline">
                    <p class="cursor-default font-semibold text-2xl">Billing Email</p>
                    <input class="w-full h-12 border-2 border-[#cccccc] rounded-md focus:border-black focus:ring-0 mt-2" type="email" id="billingEmail" name="billingEmail" value="<?php echo isset($_COOKIE['user_id']) ? $res['user_email'] : 'user_email' ?>" required>
                </div>
                <hr class="my-6">
                <div>
                    <p class="cursor-default font-semibold text-2xl">Receive Payment Via?</p>
                    <div class="flex flex-col gap-2 px-3 mt-3">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="Preceive" id="type_1" value="UPI">
                            <label for="type_1">
                                <p>UPI</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="Preceive" id="type_2" value="Net Banking">
                            <label for="type_2">
                                <p>Net Banking</p>
                            </label>
                        </div>
                    </div>
                </div>
                <hr class="my-6">
                <div class="review">
                    <p class="cursor-default font-semibold text-2xl">Why are you Retrun the order?</p>
                    <div class="flex flex-col gap-2 px-3 mt-3">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_1" value="Received Incorrect Item (Does Not Match Description or Order Specifications)">
                            <label for="Return_1">
                                <p>Received Incorrect Item (Does Not Match Description or Order Specifications)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_2" value="Product Arrived Defective (Functional Problems or Faults)">
                            <label for="Return_2">
                                <p>Product Arrived Defective (Functional Problems or Faults)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_3" value="Return or Exchange Due to Change in Preferences or Priorities">
                            <label for="Return_3">
                                <p>Return or Exchange Due to Change in Preferences or Priorities</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_4" value="Quality Issues (Poor Construction, Subpar Materials, or Below-Expected Performance)">
                            <label for="Return_4">
                                <p>Quality Issues (Poor Construction, Subpar Materials, or Below-Expected Performance)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_5" value="Wrong Size or Fit (Does Not Meet Expected Measurements or Specifications)">
                            <label for="Return_5">
                                <p>Wrong Size or Fit (Does Not Meet Expected Measurements or Specifications)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_6" value="Inaccurate or Misleading Product Description">
                            <label for="Return_6">
                                <p>Inaccurate or Misleading Product Description</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_7" value="Multiple Orders of the Same Item by Mistake (Duplicates Received)">
                            <label for="Return_7">
                                <p>Multiple Orders of the Same Item by Mistake (Duplicates Received)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_8" value="Shipping Problems (Delays, Missing Packages, or Delivery Issues)">
                            <label for="Return_8">
                                <p>Shipping Problems (Delays, Missing Packages, or Delivery Issues)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_9" value="Found Better Price After Purchase (Request for Return or Adjustment)">
                            <label for="Return_9">
                                <p>Found Better Price After Purchase (Request for Return or Adjustment)</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderReturn" id="Return_10" value="Unwanted Gift (Prompting Return or Exchange Request)">
                            <label for="Return_10">
                                <p>Unwanted Gift (Prompting Return or Exchange Request)</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="submit mt-6">
                    <input name="ReturnProduct" class="rounded-tl-xl rounded-br-xl text-center bg-gray-600 py-3 px-6 text-white hover:bg-gray-700 cursor-pointer transition duration-300 group-invalid:pointer-events-none group-invalid:opacity-30" type="submit" value="Return Order">
                </div>
            </div>
        </form>
    </div>

    <!-- success Message -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="successMessage"></div>
        </div>
    </div>

    <!-- Error message container -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="errorMessage"></div>
        </div>
    </div>

    <script>

        // displaly error msg
        function displayErrorMessage(message) {
            let EpopUp = document.getElementById('EpopUp');
            let errorMessage = document.getElementById('errorMessage');
        
            errorMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            EpopUp.style.display = 'flex';
            EpopUp.style.opacity = '100';
        
            setTimeout(() => {
                EpopUp.style.display = 'none';
                EpopUp.style.opacity = '0';
            }, 1500);
        }

        // displaly success msg
        function displaySuccessMessage(message) {
            let SpopUp = document.getElementById('SpopUp');
            let successMessage = document.getElementById('successMessage');
        
            successMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            SpopUp.style.display = 'flex';
            SpopUp.style.opacity = '100';
        
            setTimeout(() => {
                SpopUp.style.display = 'none';
                SpopUp.style.opacity = '0';
                window.location.href = "../user/show_return_order.php";
            }, 1500);
        }
    </script>
            

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>
</html>

<?php 

    if(isset($_POST['ReturnProduct'])){
        $order_id = $_GET['order_id'];
        $product_id  = $res['product_id'];
        $user_id = $res['user_id'];
        $vendor_id = $res['vendor_id'];
        $user_name = $res['user_first_name'];
        $user_email = $_POST['billingEmail'];
        $user_phone = $res['user_mobile'];
        if(isset($_POST['Preceive'])){
            $receive_payment = $_POST['Preceive'];
        }
        $return_order_title = $res['order_title'];
        $return_order_image = $res['order_image'];
        $return_order_price = $res['total_price'];
        $return_order_qty = $res['qty'];
        $return_order_color = $res['order_color'];
        $return_order_size = $res['order_size'];
        if(isset($_POST['OrderReturn'])){
            $reason = $_POST['OrderReturn'];
        }
        $date = date('d-m-Y');

        if(empty($user_email)){
            echo '<script>displayErrorMessage("Please enter your email address");</script>';
        }else if(empty($reason)){
            echo '<script>displayErrorMessage("Please enter the reason for Returning your order");</script>';
        }else if(empty($receive_payment)){
            echo '<script>displayErrorMessage("Please Select Receive Payment method");</script>';
        }else{

            $insert_return_order = "INSERT INTO return_orders(order_id, product_id, user_id, vendor_id, user_name, user_email, user_phone, return_order_image, return_order_title, return_order_price, return_order_color, return_order_size, return_order_qty, payment_type, reason, date) VALUES ('$order_id','$product_id','$user_id','$vendor_id','$user_name','$user_email','$user_phone','$return_order_image','$return_order_title','$return_order_price','$return_order_color','$return_order_size','$return_order_qty','$receive_payment','$reason','$date')";
            $return_order_query = mysqli_query($con, $insert_return_order);

            $delete_order = "DELETE FROM orders WHERE order_id = '$order_id'";
            $delete_query = mysqli_query($con, $delete_order);

            // insert quantity of items

            $get_qty = "SELECT * FROM items WHERE product_id = '$product_id'";
            $get_qty_query = mysqli_query($con, $get_qty);
 
            $qty = mysqli_fetch_assoc($get_qty_query);
            $product_quty = $qty['Quantity'];
 
            $qty_replace = str_replace(",", "",$product_quty);
 
            $remove_quty = number_format($qty_replace + $return_order_qty);
 
            $update_qty = "UPDATE items SET Quantity='$remove_quty' WHERE product_id = '$product_id'";
            $update_qty_quary = mysqli_query($con, $update_qty);

            // sending email

            include "../pages/mail.php";
            if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $mail->addAddress($user_email);
            } else {
                echo 'Invalid email address.';
            }
            $mail->isHTML(true);

            // order information
            if(isset($_GET['order_id'])){
                $order_id = $_GET['order_id'];

                $retrieve_order = "SELECT * FROM return_orders WHERE order_id = '$order_id'";
                $retrieve_order_query = mysqli_query($con, $retrieve_order);
                $retPr = mysqli_fetch_assoc($retrieve_order_query);
            
                $username = $retPr['user_name'];
                $order_id = $retPr['order_id'];
                $cancle_date = $retPr['date'];

                $return_order_title = $retPr['return_order_title'];
                $return_order_image = '../src/product_image/product_profile/' . $retPr['return_order_image'];
                $return_order_price = $retPr['return_order_price'];
                $return_order_color = $retPr['return_order_color'];
                $return_order_size = $retPr['return_order_size'];
                $return_order_qty = $retPr['return_order_qty'];
                $payment_type = $retPr['payment_type'];
                $reason = $retPr['reason'];
            
                $user_email = $retPr['user_email'];
                $user_phone = $retPr['user_mobile'];
            
                $return_order_price = $retPr['return_order_price'];
            }


            $mail->Subject = "Return Request for Your Order";
            $mail->Body = "<html>
            <head>
                <title>Return Request</title>
            </head>
            <body>
                <h1>Return Request Received</h1>
                <p>Dear $username,</p>
                <p>We have received your request to return the following order:</p>
                <p><strong>Order Number:</strong> #$order_id</p>
                <p><strong>Order Cancle Date:</strong> $cancle_date</p>
                <h3>Items Ordered:</h3>
                <table border='1' cellpadding='10'>
                    <tr>
                        <td><strong>Product Name:</strong></td>
                        <td>$return_order_title</td>
                    </tr>
                    <tr>
                        <td><strong>Image:</strong></td>
                        <td><img src='$return_order_image' alt='Product Image' width='100'></td>
                    </tr>
                    <tr>
                        <td><strong>Price:</strong></td>
                        <td>$order_price</td>
                    </tr>
                    <tr>
                        <td><strong>Quantity:</strong></td>
                        <td>$return_order_qty</td>
                    </tr>
                    <tr>
                        <td><strong>Color:</strong></td>
                        <td>$return_order_color</td>
                    </tr>
                    <tr>
                        <td><strong>Size:</strong></td>
                        <td>$return_order_size</td>
                    </tr>
                    <tr>
                        <td><strong>Reason:</strong></td>
                        <td>$reason</td>
                    </tr>
                    <tr>
                        <td><strong>payment Type:</strong></td>
                        <td>$payment_type</td>
                    </tr>
                </table>
                <p><strong>Mobile Number:</strong> $user_phone</p>
                <p><strong>Billing E-mail:</strong> $user_email</p>
                <p><strong>Order Total Price:</strong> $return_order_price</p>
                <p>Our team will process your return request and get back to you within 2-3 business days.</p>
                <p>Thank you for shopping with us!</p>
                <p>Best regards,<br>shopNest</p>
            </body>
            </html>";

            $mail->send();
            
            if($return_order_query){
                echo '<script>displaySuccessMessage("Your order has been successfully Return.");</script>';
            }

            
        }
    }

?>
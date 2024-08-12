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
    <title>Cancel Order</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">
    
<div class="max-w-screen-lg m-auto px-4 py-12">
        <div class="grid grid-col-1 gap-y-4">
            <h2 class="font-bold text-2xl text-black">Cancel Order</h2>
            <div class="flex flex-col items-center gap-5 md:flex-row">
                <div>
                    <img class="w-full h-32 object-contain" src="<?php echo isset($_COOKIE['user_id']) ? '../src/product_image/product_profile/' . $res['order_image'] : '../src/sample_images/product_1.jpg' ?>" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-7 line-clamp-2"><?php echo isset($_COOKIE['user_id']) ? $res['order_title'] : 'product title' ?></h2>
                    <div>
                        <div class="flex items-center">
                            <p class="font-medium text-base leading-7 text-black pr-4 mr-4 border-r border-gray-200"> Qty: <span class="text-gray-500"><?php echo isset($_COOKIE['user_id']) ? $res['qty'] : 'qty' ?></span></p> 
                            <p class="font-medium text-base leading-7 text-black">Price: <span class="text-indigo-500">₹<?php echo isset($_COOKIE['user_id']) ? $res['total_price'] : 'total_price' ?></span></p>
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
                    <p class="cursor-default font-semibold text-2xl">Why are you cancelling the order?</p>
                    <div class="flex flex-col gap-2 px-3 mt-3">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_1" value="Found a better option elsewhere">
                            <label for="Cancle_1">
                                <p>Found a better option elsewhere</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_2" value="Budget constraints">
                            <label for="Cancle_2">
                                <p>Budget constraints</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_3" value="Changed mind about the purchase">
                            <label for="Cancle_3">
                                <p>Changed mind about the purchase</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_4" value="Delivery taking too long">
                            <label for="Cancle_4">
                                <p>Delivery taking too long</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_5" value="Concerns about product quality">
                            <label for="Cancle_5">
                                <p>Concerns about product quality</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_6" value="Difficulty with payment processing">
                            <label for="Cancle_6">
                                <p>Difficulty with payment processing</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_7" value="Unexpected shipping costs">
                            <label for="Cancle_7">
                                <p>Unexpected shipping costs</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_8" value="Found a more suitable product">
                            <label for="Cancle_8">
                                <p>Found a more suitable product</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_9" value="Accidentally ordered the wrong item">
                            <label for="Cancle_9">
                                <p>Accidentally ordered the wrong item</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_10" value="Unforeseen personal circumstances">
                            <label for="Cancle_10">
                                <p>Unforeseen personal circumstances</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="submit mt-6">
                    <input name="CancelProduct" class="rounded-md text-center bg-indigo-600 py-3 px-6 text-white hover:bg-indigo-700 cursor-pointer transition duration-300 group-invalid:pointer-events-none group-invalid:opacity-30" type="submit" value="Cancel Order">
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
                window.location.href = "../user/cancled_product.php";
            }, 1500);
        }
    </script>
            


</body>
</html>

<?php 

    if(isset($_POST['CancelProduct'])){
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
        $cancle_order_title = $res['order_title'];
        $cancle_order_image = $res['order_image'];
        $cancle_order_price = $res['total_price'];
        $cancle_order_qty = $res['qty'];
        $cancle_order_color = $res['order_color'];
        $cancle_order_size = $res['order_size'];
        if(isset($_POST['OrderCancle'])){
            $reason = $_POST['OrderCancle'];
        }
        $date = date('d-m-Y');

        if(empty($user_email)){
            echo '<script>displayErrorMessage("Please enter your email address");</script>';
        }else if(empty($reason)){
            echo '<script>displayErrorMessage("Please enter the reason for canceling your order");</script>';
        }else if(empty($receive_payment)){
            echo '<script>displayErrorMessage("Please Select Receive Payment method");</script>';
        }else{
            $insert_cancle_order = "INSERT INTO cancel_orders(order_id, product_id, user_id, vendor_id, user_name, user_email, user_phone, receive_payment, cancle_order_title, cancle_order_image, cancle_order_price, cancle_order_color, cancle_order_size, reason, date) VALUES ('$order_id','$product_id','$user_id','$vendor_id','$user_name','$user_email','$user_phone','$receive_payment','$cancle_order_title','$cancle_order_image','$cancle_order_price','$cancle_order_color','$cancle_order_size','$reason','$date')";
            $cancle_order_query = mysqli_query($con, $insert_cancle_order);

            $delete_order = "DELETE FROM orders WHERE order_id = '$order_id'";
            $delete_query = mysqli_query($con, $delete_order);

            // insert quantity of products

            $get_qty = "SELECT * FROM products WHERE product_id = '$product_id'";
            $get_qty_query = mysqli_query($con, $get_qty);
 
            $qty = mysqli_fetch_assoc($get_qty_query);
            $product_quty = $qty['Quantity'];
 
            $qty_replace = str_replace(",", "",$product_quty);
 
            $remove_quty = number_format($qty_replace + $cancle_order_qty);
 
            $update_qty = "UPDATE products SET Quantity='$remove_quty' WHERE product_id = '$product_id'";
            $update_qty_quary = mysqli_query($con, $update_qty);

            if($cancle_order_query){
                echo '<script>displaySuccessMessage("Your order has been successfully canceled.");</script>';
            }

            
        }
    }

?>
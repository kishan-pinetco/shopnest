<?php
    include "../include/connect.php";


    $product_id = $_GET['product_id'];
    if(isset($product_id)){
        $product_find = "SELECT * FROM products WHERE product_id = '$product_id'";
        $product_query = mysqli_query($con,$product_find);
        
        $res = mysqli_fetch_assoc($product_query);
        if($_GET['color'] == ''){
            $product_colors[] = $res['color'];
            foreach ($product_colors as $colors){
                $color_array = explode(',', $colors);
                
                foreach($color_array as $clrs){
                    $color = trim($clrs);
                    break;
                }
            }
        }else{
            $color = $_GET['color'];
        }

        if($_GET['size'] == ''){
            $size = null;
        }else{
            $size = $_GET['size'];
        }

        $qty = $_GET['qty'];

        $product_find = "SELECT * FROM products WHERE product_id = '$product_id'";
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
                        <img class="m-2 h-full md:h-32 rounded-md object-cover object-center" src="<?php echo isset($product_id) ? '../src/product_image/product_profile/' . $row['image_1'] : '../src/sample_images/product_1.jpg' ?>" alt="" />
                        <div class="flex w-full flex-col px-4 py-4 gap-y-3">
                            <span class="font-semibold line-clamp-2"><?php echo isset($product_id) ? $row['title'] : 'product title' ?></span>
                            <p class="text-lg font-semibold text-indigo-600">₹<?php echo isset($product_id) ? $totalPriceWithQty : 'MRP' ?></p>
                            <div class="flex item-center justify-between">
                                <div class="flex item-center gap-1">
                                    <span class="text-lg font-semibold">Color:</span>
                                    <div class="h-4 w-8 my-auto border" style="background-color: <?php echo isset($product_id) ? htmlspecialchars($color) : 'product color' ?>"></div>
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
                                <p class="my-auto"><?php echo $qty;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-xl font-medium">Payment Methods</p>
                <p class="text-gray-400">Complete your order by providing your payment details.</p>
                <div class="mt-5 grid space-y-3 border bg-white rounded-lg px-2 py-4 sm:px-6">
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="UPI" value="Other UPI" class="cursor-pointer">
                        <label class="cursor-pointer text-base font-medium" for="UPI">UPI</label>
                    </div>
                    <div class="flex items-center gap-3 cursor-pointer w-max">
                        <input type="radio" name="payment" id="COD" value="Cash On delivery" class="cursor-pointer">
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
                                <input type="text" id="FirstName" name="FirstName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['first_name'] : 'User First Name'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="lastName" class="mt-4 mb-2 block text-sm font-medium">Last Name</label>
                            <div class="relative">
                                <input type="text" id="lastName" name="lastName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['last_name'] : 'User Last Name'?>" />
                            </div>
                        </div>
                    </div>
                    <label for="Phone_number" class="mt-4 mb-2 block text-sm font-medium">Phone Number</label>
                    <div class="relative">
                        <input type="number" id="Phone_number" name="Phone_number" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base uppercase shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['phone'] : 'User Phone Number'?>" />
                    </div>
                    <label for="user_email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                    <div class="relative">
                        <input type="email" id="user_email" name="user_email" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['email'] : 'User email'?>" />
                    </div>
                    <label for="Address" class="mt-4 mb-2 block text-sm font-medium">Shipping Address</label>
                    <div class="relative">
                        <input type="text" id="Address" name="Address" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['Address'] : 'User Address'?>"/>
                    </div>
                    <label for="state" class="mt-4 mb-2 block text-sm font-medium">State</label>
                    <div class="relative">
                        <input type="text" id="state" name="state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['state'] : 'User state'?>" />
                    </div>
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="city" class="mt-4 mb-2 block text-sm font-medium">City</label>
                            <div class="relative">
                                <input type="text" id="city" name="city" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($product_id) ? $us['city'] : 'User city'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="pin" class="mt-4 mb-2 block text-sm font-medium">Pincode</label>
                            <div class="relative">
                                <input type="tel" id="pin" name="pin" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" maxlength="6" value="<?php echo isset($product_id) ? $us['pin'] : 'User Pin'?>"/>
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
                            <p class="font-semibold text-gray-900">₹<?php echo isset($product_id) ? ($productPrice <= 599 ? $shipping = 40 : $shipping = 0) : $shipping = 0?></p>
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
                <input type="submit" name="placeOrder" value="Place Order" class="mt-4 mb-8 w-full rounded-md bg-indigo-600 px-6 py-3 font-medium text-white cursor-pointer hover:bg-indigo-700 transition duration-200">
            </div>
        </div>
    </form>

    

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>
</body>
</html>

<?php
    if(isset($_POST['placeOrder'])){
        $order_title = $row['title'];
        $order_image = $row['image_1'];
        $order_price = $row['MRP'];
        $order_color = $color;
        $order_size = $size;

        $user_id = $_COOKIE['user_id'];
        $product_id = $_GET['product_id'];
        $vendor_id = $row['vendor_id'];

        $FirstName = $_POST['FirstName'];
        $lastName = $_POST['lastName'];
        $Phone_number = $_POST['Phone_number'];
        $user_email = $_POST['user_email'];
        $Address = $_POST['Address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];

        $paymentType = $_POST['payment'];
        $totalProductPrice = $_POST['totalProductPrice'];

        $status = 'pending';
        
        // $adming_profit
        // $vendor_profit

        // order id
        $product_qty = $qty;

        $review_insert_Date = date('d-m-Y');
    }
?>
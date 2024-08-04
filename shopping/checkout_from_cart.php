<?php
    include "../include/connect.php";

    if(isset($_COOKIE['user_id'])){
        $totalPrice = $_GET['totalPrice'];
        $myCookie = $_COOKIE['user_id'];
        if(isset($_COOKIE['Cart_products'])){
            $cookie_value = $_COOKIE['Cart_products'];

            $cart_products = json_decode($cookie_value, true);
            if (!empty($cart_products) && is_array($cart_products)) {
                foreach($cart_products as $Cproducts){
                    $cart_products_id = $Cproducts['cart_id'];
                    $cart_products_image = $Cproducts['cart_image'];
                    $cart_products_title = $Cproducts['cart_title'];
                    $cart_products_price = $Cproducts['cart_price'];
                }
            }
        }

        $product_find = "SELECT * FROM products WHERE product_id = '$cart_products_id'";
        $product_query = mysqli_query($con,$product_find);

        $row = mysqli_fetch_assoc($product_query);

        $qty = $_GET['qty'];

        $cleaned_string = trim($qty, '[]');
        $array = explode(',', $cleaned_string);
        $numbers = array_map('intval', $array);
        $quantityMap = array_combine(array_keys($cart_products), $numbers);

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
                    <?php
                        if(isset($_COOKIE['Cart_products'])){
                            $cookie_value = $_COOKIE['Cart_products'];
                
                            $cart_products = json_decode($cookie_value, true);
                            $cart_products_ids = [];
                            if (!empty($cart_products) && is_array($cart_products)) {
                                foreach($cart_products as $index => $Cproducts){
                                    $cart_products_id = $Cproducts['cart_id'];
                                    $cart_products_image = $Cproducts['cart_image'];
                                    $cart_products_title = $Cproducts['cart_title'];
                                    $cart_products_price = $Cproducts['cart_price'];

                                    $product_quantity = isset($quantityMap[$index]) ? $quantityMap[$index] : 'N/A'; // Get the quantity for the product
                                    $cart_price = str_replace(',', '', $cart_products_price);

                                    $total_price = $product_quantity * $cart_price;

                                    $product_find = "SELECT * FROM products WHERE product_id = '$cart_products_id'";
                                    $product_query = mysqli_query($con,$product_find);

                                    $row = mysqli_fetch_assoc($product_query);

                                    $colors = $row['color'];
                                    $color_array = explode(',', $colors);
                                    
                                    $array = [];
                                    if (!empty($color_array)) {
                                        $first_color = trim($color_array[0]);
                                        $array[] = $first_color;
                                    }
                                    
                                    // for color
                                    $size = $row['size'];
                                    $size_array = explode(',', $size);

                                    if(!empty($size_array)){
                                        $first_size = trim($size_array[0]);
                                    }else{
                                        $first_size = '-';
                                    }

                                    ?>
                                       <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                                            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                                                <img class="m-2 h-full md:h-32 rounded-md object-cover object-center" src="<?php echo isset($myCookie) ? '../src/product_image/product_profile/' . $cart_products_image : '../src/sample_images/product_1.jpg' ?>" alt="" />
                                                <div class="flex w-full flex-col px-4 py-4 gap-y-3">
                                                    <span class="font-semibold line-clamp-2"><?php echo isset($myCookie) ? $cart_products_title : 'product title' ?></span>
                                                    <p class="text-lg font-semibold text-indigo-600">₹<?php echo isset($myCookie) ? number_format($total_price) : 'MRP' ?></p>
                                                    <div class="flex item-center justify-between">
                                                        <div class="flex item-center gap-1">
                                                            <span class="text-lg font-semibold">Color:</span>
                                                            <div class="h-4 w-8 my-auto border" style="background-color: <?php echo isset($myCookie) ? htmlspecialchars($first_color) : 'product color' ?>"></div>
                                                        </div>
                                                        <div class="flex item-center gap-1">
                                                            <?php
                                                                if(isset($size) == null){
                                                                    echo "";
                                                                }else{
                                                                    ?>
                                                                        <span class="text-lg font-semibold">Size:</span>
                                                                        <p class="my-auto"><?php echo isset($myCookie) ? $first_size : 'product Size' ?></p>
                                                                    <?php
                                                                }
                                                            ?>
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
                                <input type="text" id="FirstName" name="FirstName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['first_name'] : 'User First Name'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="lastName" class="mt-4 mb-2 block text-sm font-medium">Last Name</label>
                            <div class="relative">
                                <input type="text" id="lastName" name="lastName" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['last_name'] : 'User Last Name'?>" />
                            </div>
                        </div>
                    </div>
                    <label for="Phone_number" class="mt-4 mb-2 block text-sm font-medium">Phone Number</label>
                    <div class="relative">
                        <input type="number" id="Phone_number" name="Phone_number" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base uppercase shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['phone'] : 'User Phone Number'?>" />
                    </div>
                    <label for="user_email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                    <div class="relative">
                        <input type="email" id="user_email" name="user_email" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['email'] : 'User email'?>" />
                    </div>
                    <label for="Address" class="mt-4 mb-2 block text-sm font-medium">Shipping Address</label>
                    <div class="relative">
                        <input type="text" id="Address" name="Address" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['Address'] : 'User Address'?>"/>
                    </div>
                    <label for="state" class="mt-4 mb-2 block text-sm font-medium">State</label>
                    <div class="relative">
                        <input type="text" id="state" name="state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['state'] : 'User state'?>" />
                    </div>
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <div>
                            <label for="city" class="mt-4 mb-2 block text-sm font-medium">City</label>
                            <div class="relative">
                                <input type="text" id="city" name="city" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" value="<?php echo isset($myCookie) ? $us['city'] : 'User city'?>"/>
                            </div>
                        </div>
                        <div>
                            <label for="pin" class="mt-4 mb-2 block text-sm font-medium">Pincode</label>
                            <div class="relative">
                                <input type="tel" id="pin" name="pin" class="w-full rounded-md border border-gray-200 px-4 py-3 text-base shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" maxlength="6" value="<?php echo isset($myCookie) ? $us['pin'] : 'User Pin'?>"/>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total -->
                    <div class="mt-6 border-t border-b py-2">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Subtotal</p>
                            <?php
                                if(isset($myCookie)){
                                    $product_mrp = $totalPrice;
                                    $products_price = explode(",", $product_mrp);

                                    $productPrice = implode("", $products_price);
                                }
                            ?>
                            <p class="font-semibold text-gray-900">₹<?php echo isset($myCookie) ? number_format($totalPrice) : 'MRP' ?></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Shipping</p>
                            <p class="font-semibold text-gray-900">₹<?php echo isset($myCookie) ? ($productPrice <= 5999 ? $shipping = 40 : $shipping = 0) : $shipping = 0?></p>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <p class="text-base font-medium text-gray-900">Total</p>
                        <label for="totalPrice">
                            <h1 class="float-right text-2xl font-semibold text-gray-900">₹
                            <?php
                                if(isset($myCookie)){
                                    $product_mrp = $totalPrice;
                                    $products_price = explode(",", $product_mrp);

                                    $productPrice = implode("", $products_price);
                                                            
                                    $totalPriceWithQty = $productPrice * $product_quantity;
                                                                
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
                                if(isset($myCookie)){
                                    $product_mrp = $totalPrice;
                                    $products_price = explode(",", $product_mrp);

                                    $productPrice = implode("", $products_price);
                                                            
                                    $totalPriceWithQty = $productPrice * $product_quantity;
                                                                
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

    <br><br>

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>
</body>
</html>

<?php
    if(isset($_POST['placeOrder'])){


        if(isset($_COOKIE['Cart_products'])){
            $cookie_value = $_COOKIE['Cart_products'];
            $cart_products = json_decode($cookie_value, true);
            if (!empty($cart_products) && is_array($cart_products)) {
                foreach($cart_products as $Cproducts){
                    $order_image = $Cproducts['cart_image'];
                    $order_title = $Cproducts['cart_title'];
                    $order_price = $Cproducts['cart_price'];

                    $order_color = $first_color;
                    $order_size = $first_size;

                    $user_id = $_COOKIE['user_id'];
                    $product_id = $Cproducts['cart_id'];
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
                    $product_qty = $product_quantity;

                    $review_insert_Date = date('d-m-Y');

                    echo "<h2>Order Details</h2>";
echo "<p><strong>Product Image:</strong> $order_image</p>";
echo "<p><strong>Product Title:</strong> $order_title</p>";
echo "<p><strong>Product Price:</strong> $order_price</p>";
echo "<p><strong>Color:</strong> $order_color</p>";
echo "<p><strong>Size:</strong> $order_size</p>";
echo "<p><strong>User ID:</strong> $user_id</p>";
echo "<p><strong>Product ID:</strong> $product_id</p>";
echo "<p><strong>Vendor ID:</strong> $vendor_id</p>";
echo "<p><strong>First Name:</strong> $FirstName</p>";
echo "<p><strong>Last Name:</strong> $lastName</p>";
echo "<p><strong>Phone Number:</strong> $Phone_number</p>";
echo "<p><strong>Email:</strong> $user_email</p>";
echo "<p><strong>Address:</strong> $Address</p>";
echo "<p><strong>State:</strong> $state</p>";
echo "<p><strong>City:</strong> $city</p>";
echo "<p><strong>Pin Code:</strong> $pin</p>";
echo "<p><strong>Payment Type:</strong> $paymentType</p>";
echo "<p><strong>Total Product Price:</strong> $totalProductPrice</p>";
echo "<p><strong>Status:</strong> $status</p>";
echo "<p><strong>Product Quantity:</strong> $product_qty</p>";
echo "<p><strong>Review Insert Date:</strong> $review_insert_Date</p>";
                }
            }
        }
    }
?>
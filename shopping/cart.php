<?php
    include "../include/connect.php";
    session_start();
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
    <title>Cart</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">


    <!-- navbar -->
    <?php
        include "../pages/_navbar.php";
    ?>

    <!-- shopping cart -->
    <section class="bg-gray-100 py-8 antialiased  md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        <?php
                            $quantities = [];
                            $totalCartPrice = 0;
                            if(isset($_COOKIE['Cart_products'])){
                                $cookie_value = $_COOKIE['Cart_products'];

                                $cart_products = json_decode($cookie_value, true);
                                if (!empty($cart_products) && is_array($cart_products)) {
                                    foreach($cart_products as $Cproducts){
                                        $cart_products_id = $Cproducts['cart_id'];
                                        $cart_products_image = $Cproducts['cart_image'];
                                        $cart_products_title = $Cproducts['cart_title'];
                                        $cart_products_price = $Cproducts['cart_price'];
                                        $cart_price_per_unit = $Cproducts['cart_price_per_unit'];
                                        $cart_products_color = $Cproducts['cart_color'];
                                        $cart_products_size = $Cproducts['cart_size'];
                                        $cart_products_qty = $Cproducts['cart_qty'];

                                        if (!isset($_SESSION['selected_qty'][$cart_products_id])) {
                                            $_SESSION['selected_qty'][$cart_products_id] = (int)$cart_products_qty;
                                        }
                                    
                                        // Update quantity if form is submitted
                                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                            if (isset($_POST['qty']) && isset($_POST['cart_products_id'])) {
                                                $submitted_product_id = (int)$_POST['cart_products_id'];
                                                $qty = (int)$_POST['qty'];
                                                $_SESSION['selected_qty'][$submitted_product_id] = $qty;
                                            }
                                        }
                                        
                                        
                                        // Retrieve the selected value from session
                                        $selected_qty = isset($_SESSION['selected_qty'][$cart_products_id]) ? $_SESSION['selected_qty'][$cart_products_id] : 1;

                                        $quantities[] = $selected_qty;
                                        $price = (float) $cart_price_per_unit;
                                        $result = $selected_qty * $price;

                                        // Update the total cart price
                                        $resultNumeric = intval($result);
                                        $totalCartPrice = isset($totalCartPrice) ? $totalCartPrice + $resultNumeric : $resultNumeric;

                                        ?>
                                        <div class="rounded-lg bg-white p-4 shadow-md md:p-6">
                                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                                <a href="" class="shrink-0 md:order-1">
                                                    <img class="md:h-20 w-full" src="<?php echo isset($_COOKIE['Cart_products']) ? '../src/product_image/product_profile/' . $cart_products_image : ''?>" alt="imac image" />
                                                </a>

                                                <label for="counter-input" class="sr-only">Choose quantity:</label>
                                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                                    <form method="post" action="">
                                                        <select name="qty" id="qty_<?php echo $cart_products_id; ?>" class="border mt-1 rounded pr-9 pl-4 bg-gray-50" onchange="this.form.submit()">
                                                            <?php
                                                                for ($i = 1; $i <= 10; $i++) {
                                                                    $selected = ($i == $selected_qty) ? 'selected' : '';
                                                                    echo "<option value=\"$i\" $selected>$i</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <input type="hidden" name="cart_products_id" value="<?php echo $cart_products_id; ?>">
                                                    </form>
                                                    <div class="text-end md:order-4 md:w-32">
                                                        <p class="text-base font-bold">₹<?php echo isset($_COOKIE['Cart_products']) ? number_format($selected_qty * $price) : ''?></p>
                                                    </div>
                                                </div>

                                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                                    <div class="flex flex-col gap-y-2">
                                                        <a href="../product/product_detail.php?product_id=<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_id : '' ?>" class="text-base font-medium hover:underline line-clamp-2"><?php echo isset($_COOKIE['Cart_products']) ? $cart_products_title : ''?></a>
                                                        <h1>Color: <?php echo isset($_COOKIE['Cart_products']) ? $cart_products_color : '' ?></h1>
                                                        <h1>Size: <?php echo isset($_COOKIE['Cart_products']) ? $cart_products_size : '' ?></h1>
                                                    </div>
                                                    <div class="flex items-center gap-4">            
                                                        <div class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500 cursor-pointer">
                                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" /></svg>
                                                            <a href="remove_from_cart.php?product_id=<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_id : '' ?>">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <?php
                                    }
                                }
                            }else{
                                ?>
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M10.29 8.293a1 1 0 011.42 0L12 9.414l.29-.29a1 1 0 011.42 1.42L13.414 12l.293.293a1 1 0 01-1.42 1.42L12 13.414l-.293.293a1 1 0 01-1.42-1.42L10.586 12l-.293-.293a1 1 0 010-1.42z"/>
                                        </svg>
                                        <h1 class="text-3xl font-semibold text-gray-800">Your Cart is Empty</h1>
                                        <p class="text-gray-600 mt-2">Looks like you haven’t added any products to your cart yet.</p>
                                    </div>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg bg-white p-4 shadow-md sm:p-6">

                        <div class="space-y-4">
                            <dl class="flex items-center justify-between gap-4 border-b pt-2">
                                <dt class="text-base font-bold">Total</dt>
                                <dd class="text-base font-bold">₹<?php echo isset($_COOKIE['Cart_products']) ? number_format($totalCartPrice) : '0'?></dd>
                            </dl>  
                        </div>

                        <?php
                            $quantity_josn = json_encode($quantities);
                            $encode_josn = urldecode($quantity_josn);

                            if(isset($_COOKIE['user_id'])){
                                $color = 'color';
                                $size = 'size';
                                $url = 'checkout_from_cart.php?totalPrice=' . urlencode($totalCartPrice) .'&qty=' . urlencode($encode_josn);
                            }else{
                                $url = '../authentication/user_auth/user_login.php';
                            }
                        ?>
                        <?php
                            if (isset($_COOKIE['Cart_products'])) {
                                $cookie_value = $_COOKIE['Cart_products'];

                                $cart_products = json_decode($cookie_value, true);
                                if (!empty($cart_products) && is_array($cart_products)) {
                                    $totalCartItems = count($cart_products);
                                }
                            }

                            if(isset($_COOKIE['Cart_products']) && $totalCartPrice > 0){
                                ?>
                                    <a href="<?php echo $url?>" class="flex w-full items-center justify-center rounded-tl-xl rounded-br-xl bg-gray-600 hover:bg-indigo-700 transition duration-200 text-white px-5 py-2.5 text-sm font-medium cursor-pointer">Proceed to Checkout</a>
                                <?php
                            }else{
                                ?>
                                    <h1 class="flex w-full items-center justify-center rounded-tl-xl rounded-br-xl bg-gray-600 text-white px-5 py-2.5 text-sm font-medium select-none opacity-20">Proceed to Checkout</h1>
                                <?php       
                            }
                        ?>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="../index.php" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="py-12 max-w-screen-xl m-auto px-6">
        <span class="text-2xl font-medium">People Also Search</span>
    </div>
    
    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>
</html>
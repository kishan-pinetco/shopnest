<?php
    include "../include/connect.php";
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
        <form method="post" action="" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        <?php
                            if(isset($_COOKIE['Cart_products'])){
                                $cookie_value = $_COOKIE['Cart_products'];

                                $cart_products = json_decode($cookie_value, true);
                                if (!empty($cart_products) && is_array($cart_products)) {
                                    foreach($cart_products as $Cproducts){
                                        $cart_products_id = $Cproducts['cart_id'];
                                        $cart_products_image = $Cproducts['cart_image'];
                                        $cart_products_title = $Cproducts['cart_title'];
                                        $cart_products_price = $Cproducts['cart_price'];
                                        ?>
                                        <div class="rounded-lg bg-white p-4 shadow-md md:p-6">
                                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                                <a href="" class="shrink-0 md:order-1">
                                                    <img class="md:h-20 w-full" src="<?php echo isset($_COOKIE['Cart_products']) ? '../src/product_image/product_profile/' . $cart_products_image : ''?>" alt="imac image" />
                                                </a>

                                                <label for="counter-input" class="sr-only">Choose quantity:</label>
                                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                                    <div class="flex items-center">
                                                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300  focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 ">
                                                            <svg class="h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" /></svg>
                                                        </button>
                                                        <p class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium focus:outline-none focus:ring-0 ">1</p>
                                                        <button type="submit" name="increase" id="increment-button" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300  focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 " >
                                                            <svg class="h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" /></svg>
                                                        </button>
                                                    </div>
                                                    <div class="text-end md:order-4 md:w-32">
                                                        <p class="text-base font-bold">₹<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_price : ''?></p>
                                                    </div>
                                                </div>

                                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                                    <a href="../product/product_detail.php?product_id=<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_id : '' ?>" class="text-base font-medium hover:underline "><?php echo isset($_COOKIE['Cart_products']) ? $cart_products_title : ''?></a>
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
                            }
                        ?>
                        
                    </div>
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg bg-white p-4 shadow-md sm:p-6">

                        <div class="space-y-4">
                            <dl class="flex items-center justify-between gap-4 border-b pt-2">
                                <dt class="text-base font-bold">Total</dt>
                                <?php
                                    if(isset($_COOKIE['Cart_products'])){
                                        $cookie_value = $_COOKIE['Cart_products'];

                                        $cart_products = json_decode($cookie_value, true);
                                        $total_price = 0;
                                        foreach($cart_products as $Cprice){
                                            $cart_price = str_replace(',', '', $Cprice['cart_price']);
                                            if(is_numeric($cart_price)){
                                                $total_price += $cart_price;
                                            }
                                        }

                                        $sumPrice = number_format($total_price);

                                        ?>
                                            <dd class="text-base font-bold">₹<?php echo $sumPrice?></dd>
                                        <?php
                                    }
                                ?>
                            </dl>  
                        </div>

                        <?php
                            if(isset($_COOKIE['user_id'])){
                                $color = 'color';
                                $size = 'size';
                                $url = 'checkout_from_cart.php?totalPrice=' . urlencode($sumPrice) . '&color=' . $color .'&size=' . $size .'&qty=' . urlencode(1);
                            }else{
                                $url = '../authentication/user_auth/user_login.php';
                            }

                            ?>

                            <?php
                        ?>
                        <a href="<?php echo $url?>" class="flex w-full items-center justify-center rounded-lg bg-indigo-600 hover:bg-indigo-700 transition duration-200 text-white px-5 py-2.5 text-sm font-medium cursor-pointer">Proceed to Checkout</a>

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
        </form>
    </section>

    <div class="py-12 max-w-screen-xl m-auto px-6">
        <span class="text-2xl font-medium">People Also Search</span>
    </div>
    
    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>
</body>
</html>
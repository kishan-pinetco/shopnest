<?php
    if(isset($_COOKIE['vendor_id'])){
        header("Location: /vendor/vendor_dashboard.php");
        exit;
    }

    if(isset($_COOKIE['adminEmail'])){
        header("Location: /admin/dashboard.php");
        exit;
    }
?>

<?php
include "../include/connect.php";
session_start();

if(isset($_SESSION['searchWord'])){
    unset($_SESSION['searchWord']);
}

if(isset($_SESSION['selectedSize'])){
    unset($_SESSION['selectedSize']);
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
                        if (isset($_COOKIE['Cart_products'])) {
                            $cookie_value = $_COOKIE['Cart_products'];

                            $cart_products = json_decode($cookie_value, true);
                            if (!empty($cart_products) && is_array($cart_products)) {
                                foreach ($cart_products as $Cproducts) {
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
                                                <img class="md:h-32 w-full" src="<?php echo isset($_COOKIE['Cart_products']) ? '../src/product_image/product_profile/' . $cart_products_image : '' ?>" alt="imac image" />
                                            </a>

                                            <label for="counter-input" class="sr-only">Choose quantity:</label>
                                            <div class="flex items-center justify-between md:order-3 md:justify-end">
                                                <form method="post" action="">
                                                    <select name="qty" id="qty_<?php echo $cart_products_id; ?>" class="border mt-1 rounded pr-9 pl-4 bg-gray-50 focus:border-gray-600 focus:ring-gray-600" onchange="this.form.submit()">
                                                    <?php
                                                        $forQty = "SELECT * FROM products WHERE product_id = '$cart_products_id'";
                                                        $qty_query = mysqli_query($con, $forQty);

                                                        $row = mysqli_fetch_assoc($qty_query);
                                                        $product_qty = $row['Quantity'];

                                                        $max_qty = ($product_qty > 10) ? 10 : $product_qty;

                                                        for ($i = 1; $i <= $max_qty; $i++) {
                                                            $selected = ($i == $selected_qty) ? 'selected' : '';
                                                            echo "<option value=\"$i\" $selected>$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <input type="hidden" name="cart_products_id" value="<?php echo $cart_products_id; ?>">
                                                </form>
                                                <div class="text-end md:order-4 md:w-32">
                                                    <p class="text-base font-bold">₹<?php echo isset($_COOKIE['Cart_products']) ? number_format($selected_qty * $price) : '' ?></p>
                                                </div>
                                            </div>

                                            <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                                <div class="flex flex-col gap-y-2">
                                                    <a href="../product/product_detail.php?product_id=<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_id : '' ?>" class="text-base font-medium hover:underline line-clamp-2"><?php echo isset($_COOKIE['Cart_products']) ? $cart_products_title : '' ?></a>
                                                    <h1>Color: <?php echo isset($_COOKIE['Cart_products']) ? $cart_products_color : '' ?></h1>
                                                    <h1>Size: <?php echo isset($_COOKIE['Cart_products']) ? $cart_products_size : '' ?></h1>
                                                </div>
                                                <div class="flex items-center gap-4">
                                                    <a class="inline-flex items-center gap-1 text-sm font-medium text-red-600 hover:underline dark:text-red-500 cursor-pointer" href="remove_from_cart.php?product_id=<?php echo isset($_COOKIE['Cart_products']) ? $cart_products_id : '' ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="h-4 w-4">
                                                            <g>
                                                                <path d="M436 60h-75V45c0-24.813-20.187-45-45-45H196c-24.813 0-45 20.187-45 45v15H76c-24.813 0-45 20.187-45 45 0 19.928 13.025 36.861 31.005 42.761L88.76 470.736C90.687 493.875 110.385 512 133.604 512h244.792c23.22 0 42.918-18.125 44.846-41.271l26.753-322.969C467.975 141.861 481 124.928 481 105c0-24.813-20.187-45-45-45zM181 45c0-8.271 6.729-15 15-15h120c8.271 0 15 6.729 15 15v15H181V45zm212.344 423.246c-.643 7.712-7.208 13.754-14.948 13.754H133.604c-7.739 0-14.305-6.042-14.946-13.747L92.294 150h327.412l-26.362 318.246zM436 120H76c-8.271 0-15-6.729-15-15s6.729-15 15-15h360c8.271 0 15 6.729 15 15s-6.729 15-15 15z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                                                                <path d="m195.971 436.071-15-242c-.513-8.269-7.67-14.558-15.899-14.043-8.269.513-14.556 7.631-14.044 15.899l15 242.001c.493 7.953 7.097 14.072 14.957 14.072 8.687 0 15.519-7.316 14.986-15.929zM256 180c-8.284 0-15 6.716-15 15v242c0 8.284 6.716 15 15 15s15-6.716 15-15V195c0-8.284-6.716-15-15-15zM346.927 180.029c-8.25-.513-15.387 5.774-15.899 14.043l-15 242c-.511 8.268 5.776 15.386 14.044 15.899 8.273.512 15.387-5.778 15.899-14.043l15-242c.512-8.269-5.775-15.387-14.044-15.899z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                                                            </g>
                                                        </svg>
                                                        Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M10.29 8.293a1 1 0 011.42 0L12 9.414l.29-.29a1 1 0 011.42 1.42L13.414 12l.293.293a1 1 0 01-1.42 1.42L12 13.414l-.293.293a1 1 0 01-1.42-1.42L10.586 12l-.293-.293a1 1 0 010-1.42z" />
                                    </svg>
                                    <h1 class="text-3xl font-semibold text-gray-800">Your cart is empty</h1>
                                    <p class="text-gray-600 mt-2">Looks like you haven't added any products to your cart yet.</p>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M10.29 8.293a1 1 0 011.42 0L12 9.414l.29-.29a1 1 0 011.42 1.42L13.414 12l.293.293a1 1 0 01-1.42 1.42L12 13.414l-.293.293a1 1 0 01-1.42-1.42L10.586 12l-.293-.293a1 1 0 010-1.42z" />
                                </svg>
                                <h1 class="text-3xl font-semibold text-gray-800">Your cart is empty</h1>
                                <p class="text-gray-600 mt-2">Looks like you haven't added any products to your cart yet.</p>
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
                                <dd class="text-base font-bold">₹<?php echo isset($_COOKIE['Cart_products']) ? number_format($totalCartPrice) : '0' ?></dd>
                            </dl>
                        </div>

                        <?php
                        $quantity_josn = json_encode($quantities);
                        $encode_josn = urldecode($quantity_josn);

                        if (isset($_COOKIE['user_id'])) {
                            $color = 'color';
                            $size = 'size';
                            $url = 'checkout_from_cart.php?totalPrice=' . urlencode($totalCartPrice) . '&qty=' . urlencode($encode_josn);
                        } else {
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

                        if (isset($_COOKIE['Cart_products']) && $totalCartPrice > 0) {
                        ?>
                            <a href="<?php echo $url ?>" class="flex w-full items-center justify-center rounded-tl-xl rounded-br-xl bg-gray-600 hover:bg-gray-700 transition duration-200 text-white px-5 py-2.5 text-sm font-medium cursor-pointer">Proceed to checkout</a>
                        <?php
                        } else {
                        ?>
                            <h1 class="flex w-full items-center justify-center rounded-tl-xl rounded-br-xl bg-gray-600 text-white px-5 py-2.5 text-sm font-medium select-none opacity-40 cursor-not-allowed">Proceed to checkout</h1>
                        <?php
                        }
                        ?>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="../index.php" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Continue shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="py-12 max-w-screen-xl m-auto px-6">
        <span class="text-2xl font-medium">People also search</span>
        <div class="product-container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 mt-4">
            <?php
            $product_find = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
            $product_query = mysqli_query($con, $product_find);
        
            if ($product_query) {
        
                while ($res = mysqli_fetch_assoc($product_query)) {
                    $product_id = $res['product_id'];
                    
                    $MRP = $res['vendor_mrp'];

                    // for qty
                    if($res['Quantity'] > 0){
                        $qty = 1;
                    }else{
                        $qty = 0;
                    }
        
                    // for the size
                    $size = $res['size'];
                    $filter_size = explode(',', $size);
                    foreach ($filter_size as $product_size) {
                        $product_size;
                        break;
                    }
                    ?>
        
                    <div class="swiper-slide">
                        <div class=" flex justify-center">
                            <div class="product-card card flex flex-col items-center ring-2 ring-gray-300 rounded-tl-2xl rounded-br-2xl w-64 hover:ring-none overflow-hidden">
                                <div class="p-2" onclick="window.location.href = 'product/product_detail.php?product_id=<?php echo $res['product_id']; ?>'">
                                    <img src="<?php echo '/src/product_image/product_profile/' . $res['profile_image_1']; ?>" alt="" class="product-card__hero-image css-1fxh5tw h-56 w-64 object-cover rounded-tl-xl rounded-br-xl" loading="lazy" sizes="">
                                </div>
                                <div class="mt-2 space-y-3" onclick="window.location.href = 'product/product_detail.php?product_id=<?php echo $res['product_id']; ?>'">
                                    <a href="product/product_detail.php?product_id=<?php echo $res['product_id'] ?>" class="text-sm font-medium line-clamp-2 cursor-pointer px-2"><?php echo $res['title'] ?></a>
                                    <div class="flex justify-between px-2">
                                        <p class="space-x-1">
                                            <span class="text-lg font-medium text-gray-900">₹<?php echo number_format($MRP) ?></span>
                                            <del class="text-xs font-medium">₹<?php echo number_format($res['vendor_price']) ?></del>
                                        </p>
                                        <div class="flex items-center">
                                            <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                                <h1 class="font-semibold text-xs text-white"><?php echo isset($res['avg_rating']) ? $res['avg_rating'] : '0.0' ?></h1>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm ml-2 text-gray-900 tracking-wide">(<?php echo $res['total_reviews'] ?>)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-600 w-full mt-2 py-1.5 flex justify-center">
                                    <?php
                                        if($qty > 0){
                                            ?>
                                                <a href="<?php echo $qty > 0 ? '/shopping/add_to_cart.php?product_id=' . urlencode($product_id) . '&size=' . $product_size . '&qty=' . $qty . '&MRP=' . $MRP : '#'; ?>" class="bg-white border-2 border-gray-800 text-gray-900 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                                            <?php
                                        }else{
                                            ?>
                                                <h1 class="bg-white border-2 border-gray-800 text-red-600 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center cursor-default select-none">Out of Stock</h1>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                }
            } else {
                echo "Error " . mysqli_errno($con);
            }
            ?>
        </div>
    </div>

    <!-- footer -->
    <?php
    include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>
</body>

</html>
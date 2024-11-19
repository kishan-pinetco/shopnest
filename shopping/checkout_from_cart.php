<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- alpine CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <?php
        include "../include/connect.php";

        $cookie_value = isset($_COOKIE['Cart_products']) ? $_COOKIE['Cart_products'] : '';
        $myCookie = $_COOKIE['user_id'];

        $totalPrice = $_GET['totalPrice'];
        if (isset($_COOKIE['Cart_products'])) {
            $cookie_value = $_COOKIE['Cart_products'];

            $cart_products = json_decode($cookie_value, true);
            if (!empty($cart_products) && is_array($cart_products)) {
                foreach ($cart_products as $Cproducts) {
                    $cart_products_id = $Cproducts['cart_id'];
                    $cart_products_qty = $Cproducts['cart_qty'];
                }
            }
        }

        $product_find = "SELECT * FROM products WHERE product_id = '$cart_products_id'";
        $product_query = mysqli_query($con, $product_find);

        $row = mysqli_fetch_assoc($product_query);

        $vendor_id = $row['vendor_id'];

        $qty = $_GET['qty'];

        $cleaned_string = trim($qty, '[]');
        $array = explode(',', $cleaned_string);
        $numbers = array_map('intval', $array);
        $quantityMap = array_combine(array_keys($cart_products), $numbers);


        $user_id = $_COOKIE['user_id'];

        $get_user = "SELECT * FROM user_registration WHERE user_id = '$user_id'";
        $user_query = mysqli_query($con, $get_user);

        $us = mysqli_fetch_assoc($user_query);

    ?>

    <!-- Full screen overlay -->
    <div id="overlay" class="overlay fixed top-0 left-0 w-full h-full bg-black bg-opacity-70 text-white flex items-center justify-center text-xl font-semibold z-50 hidden">
        <div>
            <div class="text-gray-200 w-12 h-12 border-4 border-white border-opacity-30 border-t-4 border-t-black rounded-full animate-spin mx-auto"></div>
            <p class="mt-4">Sending Email... Please Wait.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-600">
        <div class="flex items-center justify-center">
            <a class="flex items-center" href="cart.php">
                <!-- icon logo div -->
                <div class="mr-2">
                    <img class="w-7 sm:w-14" src="/src/logo/black_cart_logo.svg" alt="Cart Logo">
                </div>
                <!-- text logo -->
                <div>
                    <img class="w-20 sm:w-36" src="/src/logo/black_text_logo.svg" alt="Shopnest Logo">
                </div>
            </a>
        </div>
        <div class="flex items-center">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative block w-8 h-8 md:w-10 md:h-10 overflow-hidden rounded-full shadow-lg focus:outline-none transition-transform transform hover:scale-105">
                    <img class="object-cover w-full h-full" src="<?php echo isset($_COOKIE['user_id']) ? '/src/user_dp/' . $us['profile_image'] : 'https://cdn-icons-png.freepik.com/512/3682/3682323.png'; ?>" alt="Your avatar">
                </button>
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl ring-2 ring-gray-300 divide-y-2 divide-gray-300" style="display: none;">
                    <a href="/user/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Profile</a>
                    <a href="/user/show_orders.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Orders</a>
                    <a href="/user/user_logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <form id="formData" class="max-w-screen-xl m-auto" action="" method="post">
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
                            <p class="font-semibold text-gray-900">₹<?php echo isset($myCookie) ? ($productPrice <= 1299 ? $shipping = 40 : $shipping = 0) : $shipping = 0 ?></p>
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

     <!-- Successfully message container -->
     <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="Successfully"></div>
        </div>
    </div>

    <!-- Error message container -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="errorMessage"></div>
        </div>
    </div>

    <script>
        function displayErrorMessage(message) {
            let popUp = document.getElementById('popUp');
            let errorMessage = document.getElementById('errorMessage');

            errorMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            popUp.style.display = 'flex';
            popUp.style.opacity = '100';

            setTimeout(() => {
                popUp.style.display = 'none';
                popUp.style.opacity = '0';
            }, 1800);
        }

        function displaySuccessMessage(message) {
            let SpopUp = document.getElementById('SpopUp');
            let Successfully = document.getElementById('Successfully');

            Successfully.innerHTML = '<span class="font-medium">' + message + '</span>';
            SpopUp.style.display = 'flex';
            SpopUp.style.opacity = '100';

            setTimeout(() => {
                SpopUp.style.display = 'none';
                SpopUp.style.opacity = '0';
                document.getElementById('overlay').style.display = 'none';
                window.location.href = "../user/show_orders.php";
            }, 1500);
        }
    </script>

    <script>
        
        $(document).ready(function() {
            $("#formData").on("submit",function(e){
                e.preventDefault();

                var cartItems = <?php echo json_encode($cookie_value); ?>;
                var items = JSON.parse(cartItems);
        
                var user_id = <?php echo $user_id ?>;
                var product_id = <?php echo $cart_products_id ?>;
                var vendor_id = <?php echo $vendor_id ?>;

                let FirstName = $('#FirstName').val().trim();
                let lastName = $('#lastName').val().trim();
                let Phone_number = $('#Phone_number').val().trim();
                let user_email = $('#user_email').val().trim();
                let Address = $('#Address').val().trim();
                let state = $('#state').val().trim();
                let city = $('#city').val().trim();
                let pin = $('#pin').val().trim();
                let paymentType = $('input[name="payment"]:checked').val();

                var formattedTotal = "<?php echo $formattedTotal ?>";
                var shipping = <?php echo $shipping ?>;

                var dataToSend = { 
                    items: items,
                    user_id: user_id,
                    product_id: product_id,
                    vendor_id: vendor_id,
                    FirstName: FirstName,
                    lastName: lastName,
                    Phone_number: Phone_number,
                    user_email: user_email,
                    Address: Address,
                    state: state,
                    city: city,
                    pin: pin,
                    paymentType: paymentType,
                    formattedTotal: formattedTotal,
                    shipping: shipping,
                };

                if (FirstName === '' || lastName === '' || Phone_number === '' || user_email === '' || Address === '' || state === '' || city === '' || pin === '') {
                    displayErrorMessage('Please fill out all fields.')
                    return
                }else if(!paymentType){
                    displayErrorMessage('Please select payment method.')
                    return
                }else{
                    document.getElementById('overlay').style.display = 'flex';
                }

                $.ajax({
                    url: 'cartAjax.php',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(dataToSend),
                    dataType: 'json',
                    success: function(response) {
                        console.log("AJAX Success:", response); 
                        if (response.status === 'success') {
                            $('input[name="payment"]:checked').prop('checked', false);
                            displaySuccessMessage("Order Placed Successfully");
                        } else {
                            displayErrorMessage(response.message || 'An error occurred.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:", error);  // Check for errors
                        console.log("Response Text:", xhr.responseText);  // Log the response text to debug
                        displayErrorMessage('An unexpected error occurred. Please try again.');
                    }
                });
            });
        });
    </script>


    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>

</body>
</html>

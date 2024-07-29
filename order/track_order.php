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
    <title>Track Order</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <!-- navbar -->
    <?php
        include "../pages/_navbar.php";
    ?>
    
    <section class="max-w-screen-lg m-auto bg-white py-8 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div>
                <!-- <h2 class="text-xl font-semibold sm:text-2xl">Your Order is Delivered</h2> -->
                <h2 class="text-xl font-semibold sm:text-2xl">Your Order is Confirmed</h2>
                <div>
                    <h3 class="mt-7 text-xl font-medium">Hi Abhijeet!</h3>
                    <!-- <span>Your Order is Delivered</span> -->
                    <span>Your Order has been confirmed and will be shipping soon</span>
                </div>
            </div>
            <hr class="my-10">
            <div>
                <h3 class="text-xl font-medium sm:text-2xl">Order #35784</h3>
                <div class="grid grid-cols-1 mt-12 gap-7 w-full md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12">
                    <div>
                        <h4 class="font-semibold mb-2">Devliery Address</h4>
                        <p>103 madhav flat gajanand park soc.</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Billing Address</h4>
                        <p>103 madhav flat gajanand park soc.</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Contact Help</h4>
                        <p>mottacompany09@gmail.com</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Payment Information</h4>
                        <p>Other UPI</p>
                    </div>
                </div>
            </div>
            <hr class="my-10">
            <div class="flex flex-col items-center gap-5 md:flex-row">
                <div>
                    <img class="w-full h-32 object-contain" src="https://m.media-amazon.com/images/I/5197bOnxfWL._SL1500_.jpg" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-7 line-clamp-2">ZEBRONICS Zeb-Sound Bomb 1 TWS Earbuds with BT5.0, Up to 12H Playback, Touch Controls, Voice Assistant, Splash Proof with Type C Portable Charging Case (Black)</h2>
                    <div>
                        <div class="flex items-center">
                            <p class="font-medium text-base leading-7 text-black pr-4 mr-4 border-r border-gray-200"> Qty: <span class="text-gray-500">1</span></p> 
                            <p class="font-medium text-base leading-7 text-black">Price: <span class="text-indigo-500">₹799</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border my-10 px-3 py-4 hidden md:block">
                <div>
                    <!-- <h2 class="font-semibold text-2xl">Your Order is Delivered</h2> -->
                    <h2 class="font-semibold text-2xl">Shipped on: 21-7-2024</h2>
                </div>
                <div class="relative">
                    <div class="relative w-[100%] h-2 bg-gray-200 rounded-full my-5"></div>
                    <div class="absolute -top-5 left-0 w-[100%] h-2 bg-indigo-600 rounded-full my-5"></div>
                </div>
                <div class="flex items-center justify-between w-[100%]">
                    <p class="">order Place</p>
                    <p class="">Product in the warehouse</p>
                    <p class="">Devlivery Progress</p>
                    <p class="">Product Delivered</p>
                </div>
            </div>

            <div class="border my-10 px-3 py-4 block md:hidden">
                <div>
                    <!-- <h2 class="font-semibold text-2xl">Your Order is Delivered</h2> -->
                    <h2 class="font-semibold text-2xl">Shipped on: 21-7-2024</h2>
                </div>
                <div class="flex items-start justify-center gap-7 mt-8">
                    <div class="flex flex-col items-start justify-between h-[80vh]">
                        <p class="flex flex-col">order Place
                            <div class="text-gray-400 -mt-6">
                                16-07-2024
                            </div>
                        </p>
                        <p class="flex flex-col">Product in the warehouse 
                            <div class="text-gray-400 -mt-6">
                                17-07-2024
                            </div>
                        </p>
                        <p class="flex flex-col">Devlivery Progress 
                            <div class="text-gray-400 -mt-6">
                                18-07-2024
                            </div>
                        </p>
                        <p class="flex flex-col">Product Delivered 
                            <div class="text-gray-400 -mt-6">
                                21-07-2024
                            </div>
                        </p>
                    </div>
                    <div class="relative">
                        <div class="relative top-0 w-[10px] h-[80vh] bg-gray-200 rounded-full"></div>
                        <div class="absolute -top-5 left-0 w-[10px] h-[80vh] bg-indigo-600 rounded-full my-5"></div>
                    </div>
                </div>
            </div>
            <div class="flex  items-center gap-5 flex-row">

                <!-- <h1 class="px-3 py-1.5 bg-gray-900 text-white rounded-md max-w-max cursor-pointer opacity-50">Cancle Order</h1> -->
                <a href="" class="px-3 py-2 bg-indigo-600 text-white rounded max-w-max cursor-pointer">Return Order</a>
            
    
                <a href="" class="px-3 py-2 bg-gray-900 text-white rounded max-w-max cursor-pointer">Cancle Order</a>
                <!-- <h1 class="px-3 py-1.5 bg-indigo-600 text-white rounded-md max-w-max cursor-pointer opacity-50">Return Order</h1> -->

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

</body>
</html>
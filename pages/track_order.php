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

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">

    <!-- title -->
    <title>Track Order</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <!-- navbar -->
    <?php
        include "_navbar.php";
    ?>

    
    <!-- track order -->
    <div class="flex flex-col items-center justify-center px-3 py-8 m-auto w-[100%] md:px-8 lg:w-[70%] xl:w-[50%]">
        <div class="header text-center mt-8 flex flex-col gap-2">
            <h1 class="text-3xl font-bold md:text-5xl">Track Your Order</h1>
            <p class="text-base font-normal m-auto">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
        </div>
        <div class="tracker_form flex flex-col gap-8 border mt-8 p-8 w-full lg:p-12">
            <div class="order_id">
                <p>Order ID</p>
                <input class="w-[100%] h-14 border rounded-md mt-2 focus:border-gray-500 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Found in your order confirmation email.">
            </div>
            <div class="billing_email">
                <p>Billing email</p>
                <input class="w-[100%] h-14 border rounded-md mt-2 focus:border-gray-500 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Email you see during checkout.">
            </div>
            <button class="bg-gray-700 hover:bg-gray-800 text-white font-semibold h-14 rounded-tl-xl rounded-br-xl">Track Order</button>
        </div>
    </div>

    <!-- footer -->
    <?php
        include "_footer.php";
    ?>
    
    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>
</html>
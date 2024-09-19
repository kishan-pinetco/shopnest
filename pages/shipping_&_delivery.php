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
    <title>Shipping & Delivery</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <!-- navbar -->
    <?php
        include "_navbar.php";
    ?>


    <div class="max-w-screen-lg m-auto px-6 py-12">
        <div class="title mb-8">
            <h1 class="text-4xl md:text-6xl font-bold text-center">Shipping & Delivery</h1>
        </div>
        <div>
            <p class="text-lg font-medium mb-4">Shipping and delivery are crucial aspects of the e-commerce experience. Here's a detailed description to include on an e-commerce website:</p>

            <div class="mt-7">
                <div>
                    <h1 class="text-2xl font-bold">Shipping Information</h1>
                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Shipping Methods:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>We offer a variety of shipping methods to suit your needs, including standard, expedited, and express shipping options.</li>
                            <li>Each shipping method provides an estimated delivery time, which will be displayed at checkout.</li>
                        </ul>
                    </div>

                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Shipping Costs:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>Shipping costs are calculated based on the weight of your order, the shipping method selected, and the delivery destination.</li>
                            <li>We offer free shipping on orders over a certain amount. Details of this offer can be found on our promotions page.</li>
                        </ul>
                    </div>

                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Order Processing Time:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>Orders are typically processed within 1-2 business days.</li>
                            <li>You will receive a confirmation email once your order has been shipped, including a tracking number to monitor your shipment.</li>
                        </ul>
                    </div>
                </div>


                <div class="mt-7">
                    <h1 class="text-2xl font-bold">Delivery Information</h1>
                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Estimated Delivery Times:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>Standard Shipping: 5-7 business days</li>
                            <li>Expedited Shipping: 2-3 business days</li>
                            <li>Express Shipping: 1-2 business days</li>
                            <li>Please note that delivery times may vary based on your location and unforeseen circumstances such as weather conditions or carrier delays.</li>
                        </ul>
                    </div>

                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">International Shipping:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>We offer international shipping to select countries. Shipping times and costs for international orders will vary.</li>
                            <li>Customers are responsible for any customs duties or taxes imposed by their country.</li>
                        </ul>
                    </div>

                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Delivery Tracking:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>Track your order in real-time with the tracking number provided in your shipping confirmation email.</li>
                            <li>You can also track your order status by logging into your account on our website.</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-7">
                    <h1 class="text-2xl font-bold">Returns and Exchanges</h1>
                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Easy Returns:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>If you are not completely satisfied with your purchase, you can return it within 30 days of receipt for a full refund or exchange</li>
                            <li>Please visit our Returns & Exchanges page for detailed instructions on how to process a return.</li>
                        </ul>
                    </div>

                    <div class="pl-6">
                        <h2 class="text-lg font-semibold mt-3">Shipping Costs:</h2>
                        <ul class="list-disc pl-6 mt-3">
                            <li>Refunds will be processed within 5-7 business days after we receive and inspect your returned item.</li>
                            <li>You will be notified via email once your refund has been issued.</li>
                        </ul>
                    </div>
                </div>

            </div>
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
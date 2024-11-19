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
    <title>About Us</title>
</head>

<body style="font-family: 'Outfit', sans-serif;">

    <!-- navbar -->
    <?php
    include "_navbar.php";
    ?>

    <div class="max-w-screen-xl m-auto mt-12 flex flex-col items-center my-5 px-5">
        <h1 class="text-gray-900 mb-7 text-2xl font-bold text-center leading-tight max-w-5xl md:text-6xl">Exploring possibilities, embracing convenience: Discover our E-commerce journey</h1>
        <img class="rounded-md shadow-2xl" src="https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/05/about-us-v1.jpg" alt="">
    </div>

    <div class="bg-amber-100 py-12">
        <div class=" max-w-screen-xl m-auto px-5">
            <span class="text-gray-500 text-lg font-medium">Our story</span>
            <h1 class="text-gray-900 text-3xl font-bold mt-3">From vision to reality: Our E-commerce journey</h1>
            <p class="text-lg text-gray-700 mt-4">Welcome to <a href="../index.php" class="text-blue-500 font-medium underline">shopNest</a>, where our journey in e-commerce began with a vision to revolutionize how people shop and connect online. Founded on principles of innovation and customer-centricity, we embarked on this adventure to redefine convenience and accessibility in the digital marketplace.</p>
            <p class="text-lg text-gray-700 mt-7">Our story is one of perseverance and passion, starting from humble beginnings to becoming a trusted destination for millions of shoppers worldwide. From the early days of navigating technological advancements to crafting intuitive user experiences, every milestone has been a testament to our commitment to excellence.</p>
        </div>
    </div>


    <div class="max-w-screen-xl m-auto px-5 py-12 flex flex-col items-center gap-7 md:flex-row">
        <div>
            <img src="https://govtech.justica.gov.pt/wp-content/uploads/2023/02/govtechw_home-img-8.png" alt="">
        </div>
        <div class="text-gray-900 flex flex-col gap-5">
            <span class="text-lg text-gray-500">Technology at shopNest</span>
            <h2 class="text-4xl font-semibold uppercase">Innovation</h2>
            <p class="text-lg">shopNest technology drives path-breaking, customer-focused innovation that makes high quality products accessible to Indian shoppers, besides making the online shopping experience convenient, intuitive and seamless.</p>
        </div>
    </div>

    <!-- partner -->
    <div class="w-full flex flex-col items-center mt-12 mb-8">
        <h1 class="text-2xl mt-3">Trending brands</h1>
        <?php
            include "../src/company_partner/_company.php";
        ?>
    </div>

    <!-- footer -->
    <?php
        include "_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>

</body>

</html>
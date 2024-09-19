<?php  
  
include "../include/connect.php";

if(isset($_COOKIE['adminEmail'])){

    // top seller Vendors
    $topVendors = "
        SELECT 
            vr.vendor_id,
            vr.username,
            vr.name,
            vr.email,
            vr.dp_image,
            COUNT(DISTINCT p.product_id) AS total_products,
            COUNT(DISTINCT o.order_id) AS total_sales
        FROM vendor_registration vr
        LEFT JOIN products p ON vr.vendor_id = p.vendor_id
        LEFT JOIN orders o ON vr.vendor_id = o.vendor_id
        GROUP BY vr.vendor_id
        ORDER BY total_products DESC
        LIMIT 10
    ";
    
    $vendor_query = mysqli_query($con,$topVendors);

    // top buyer
    $topBuyer = "
    SELECT 
        ur.user_id,
        ur.first_name,
        ur.last_name,
        ur.email,
        ur.profile_image,
        COUNT(DISTINCT o.order_id) AS total_buy
    FROM user_registration ur
    LEFT JOIN orders o ON ur.user_id = o.user_id
    GROUP BY ur.user_id, ur.first_name, ur.last_name, ur.email, ur.profile_image
    ORDER BY total_buy DESC
    LIMIT 10
    ";

    $buyer_queyr = mysqli_query($con, $topBuyer);
    
    
    // top rated product
    $topRated = "SELECT 
            product_id, 
            COUNT(*) AS totalRatings,
            AVG(Rating) AS averageRating
        FROM user_review
        GROUP BY product_id
        ORDER BY averageRating DESC
        LIMIT 10";

    $topRated_query = mysqli_query($con,$topRated);

    // top buying products
    $topBuying = "
        SELECT order_title, order_image, total_price, product_id, COUNT(*) AS totalProducts
        FROM orders
        GROUP BY product_id
        ORDER BY totalProducts DESC
        LIMIT 10";
    $topBuying_query = mysqli_query($con,$topBuying); 
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
    <title>Tables</title>
</head>

<body style="font-family: 'Outfit', sans-serif;">

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8 mr-2">
                    <a class="flex w-fit" href="">
                        <!-- icon logo div -->
                        <div>
                            <img class="w-7 sm:w-14 mt-0.5" src="../../../shopnest/src/logo/white_cart_logo.svg" alt="">
                        </div>
                        <!-- text logo -->
                        <div>
                            <img class="w-16 sm:w-36" src="../../shopnest/src/logo/white_text_logo.svg" alt="">
                        </div>
                    </a>
                </div>
                <nav class="mt-10">
                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="dashboard.php">
                        <svg class="w-6 h-6 text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="tables.php">
                        <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21.5 23h-19A2.503 2.503 0 0 1 0 20.5v-17C0 2.122 1.122 1 2.5 1h19C22.878 1 24 2.122 24 3.5v17c0 1.378-1.122 2.5-2.5 2.5zM2.5 2C1.673 2 1 2.673 1 3.5v17c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-17c0-.827-.673-1.5-1.5-1.5z" fill="" opacity="1" data-original="#000000" class=""></path><path d="M23.5 8H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 13H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 18H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1z" fill="" opacity="1" data-original="#000000" class=""></path><path d="M6.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM12 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM17.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5z" fill="" opacity="1" data-original="#000000" class=""></path></g></svg>
                        <span class="mx-3">Tables</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_users.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="" opacity="1" data-original="#000000" class=""></path></g></svg>
                        <span class="mx-3">Users</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_vendors.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M17.898 27.921a2.951 2.951 0 0 1-.648.071C14.171 28 8.087 28 5.007 28a3.001 3.001 0 0 1-2.998-2.855l-.001-.028a39.881 39.881 0 0 1 .5-7.195c.255-1.546 1.578-3.49 2.926-4.311l.163-.098a.998.998 0 0 1 1.1.05C7.941 14.467 9.472 15 11.126 15s3.185-.533 4.429-1.437a1 1 0 0 1 1.094-.053l.169.101c.684.417 1.37 1.115 1.905 1.909A7.504 7.504 0 0 1 30 22a7.495 7.495 0 0 1-3.718 6.477A7.465 7.465 0 0 1 22.5 29.5a7.463 7.463 0 0 1-4.602-1.579zm-.757-11.167a5.187 5.187 0 0 0-1.004-1.175A9.497 9.497 0 0 1 11.126 17a9.499 9.499 0 0 1-5.012-1.422c-.782.643-1.482 1.757-1.632 2.669a37.847 37.847 0 0 0-.474 6.824c.038.522.472.929.998.929 2.747 0 7.885 0 11.147-.005a7.47 7.47 0 0 1-1.035-5.324 7.493 7.493 0 0 1 2.023-3.917zm1.648 9.303A5.476 5.476 0 0 0 22.5 27.5a5.473 5.473 0 0 0 3.045-.92 5.5 5.5 0 1 0-6.518-8.843 5.501 5.501 0 0 0-1.786 5.879 5.51 5.51 0 0 0 1.548 2.441zm2.713-.384a4.267 4.267 0 0 1-1.367-.581 1 1 0 0 1 1.119-1.658 2.415 2.415 0 0 0 1.564.368c.251-.034.488-.14.488-.442 0-.041-.041-.051-.072-.069a1.784 1.784 0 0 0-.313-.132c-.388-.13-.832-.216-1.235-.334-1.163-.339-1.992-.962-1.992-2.173 0-.611.18-1.091.458-1.464.323-.435.795-.734 1.352-.887a1 1 0 0 1 1.994.021c.508.126.992.336 1.38.607a1 1 0 0 1-1.145 1.64 2.322 2.322 0 0 0-1.546-.37c-.254.035-.493.148-.493.453 0 .041.041.051.072.069.093.054.2.094.313.132.388.13.832.216 1.235.334 1.163.339 1.992.962 1.992 2.173 0 1.237-.668 1.948-1.592 2.275-.07.025-.143.047-.218.066a1.001 1.001 0 0 1-1.994-.028zM11.126 2a5.455 5.455 0 0 1 5.453 5.452c0 3.01-2.444 5.453-5.453 5.453s-5.452-2.443-5.452-5.453A5.455 5.455 0 0 1 11.126 2zm0 2a3.454 3.454 0 0 0-3.452 3.452 3.454 3.454 0 0 0 3.452 3.453 3.454 3.454 0 0 0 3.453-3.453A3.454 3.454 0 0 0 11.126 4z" fill="" opacity="1" data-original="#000000"></path></g></svg>
                        <span class="mx-3">Vendors</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_product.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m90.895 25.211-42-21a2.004 2.004 0 0 0-1.789 0l-42 21A2 2 0 0 0 4 27v42a2 2 0 0 0 1.105 1.789l42 21a1.998 1.998 0 0 0 1.79 0l42-21A2 2 0 0 0 92 69V27a2 2 0 0 0-1.105-1.789zM48 8.236 85.528 27 77.5 31.014 39.973 12.25zm13.5 30.778L23.972 20.25 35.5 14.486 73.028 33.25zm1.5 3.722 12-6v14.877l-3.838-2.741a2.006 2.006 0 0 0-1.506-.343 2.007 2.007 0 0 0-1.301.832L63 57.098zm-43.5-20.25L57.027 41.25 48 45.764 10.472 27zM8 30.236l38 19v37.527l-38-19zm42 56.528V49.236l9-4.5V63.5a2 2 0 0 0 3.645 1.139l7.845-11.331 5.349 3.82A1.997 1.997 0 0 0 79 55.5V34.736l9-4.5v37.527z" fill="" opacity="1" data-original="#000000"></path></g></svg>
                        <span class="mx-3">Products</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="logout.php">
                        <svg class="w-5 h-5 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="ARROW 48"><path d="M307.69 347.47a24 24 0 0 0-24 24v58.47a33.93 33.93 0 0 1-33.89 33.9H82.06a33.93 33.93 0 0 1-33.89-33.9V82.06a33.93 33.93 0 0 1 33.89-33.9H249.8a33.93 33.93 0 0 1 33.89 33.9v50.54a24 24 0 0 0 48 0V82.06A82 82 0 0 0 249.8.16H82.06A82 82 0 0 0 .17 82.06v347.88a82 82 0 0 0 81.89 81.9H249.8a82 82 0 0 0 81.89-81.9v-58.47a24 24 0 0 0-24-24z" fill="" opacity="1" data-original="#000000" class=""></path><path d="m504.77 238.53-85.41-85.35a24 24 0 0 0-33.6-.33c-9.7 9.33-9.47 25.13.05 34.65l44.47 44.5h-208a24 24 0 0 0-24 24 24 24 0 0 0 24 24h208l-44.9 44.9a24 24 0 0 0 33.94 33.95l85.45-85.41a24.66 24.66 0 0 0 0-34.91z" fill="" opacity="1" data-original="#000000" class=""></path></g></g></svg>
                        <span class="mx-3">Log Out</span>
                    </a>
                </nav>
            </div>

            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <h1 class="text-2xl font-semibold">Hello Admin !</h1>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80" alt="Your avatar">
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Dashboard</a>
                                <a href="view_product.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Products</a>
                                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="overflow-y-auto">
                    <?php
                        if(isset($_COOKIE['adminEmail'])){
                        ?>
                            <!-- top seller -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Seller Vendors</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Vendor Profile</th>
                                                    <th class="px-4 py-3">UserName</th>
                                                    <th class="px-4 py-3">Vendor Name</th>
                                                    <th class="px-4 py-3">Vendor Email</th>
                                                    <th class="px-4 py-3">Total Products</th>
                                                    <th class="px-4 py-3">Total Sale Products</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($top = mysqli_fetch_array($vendor_query)) {
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-10 w-10 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/vendor_images/vendor_profile_image/' . $top['dp_image'] : 'Vendor_profile Img'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['username'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['name'] : 'name'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['email'] : 'email'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['total_products'] : 'totalProducts'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['total_sales'] : 'totalSales'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top buyers -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Buyers</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">User Profile</th>
                                                    <th class="px-4 py-3">User Name</th>
                                                    <th class="px-4 py-3">User Email</th>
                                                    <th class="px-4 py-3">Buying Products</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($buyers = mysqli_fetch_array($buyer_queyr)) {
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-10 w-10 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/user_dp/' . $buyers['profile_image'] : 'profile_image'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['first_name'] . ' ' . $buyers['last_name'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['email'] : 'email'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['total_buy'] : 'total_buy'; ?></td>
                                                                <!-- <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['total_sales'] : 'totalSales'; ?></td> -->
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top rated product -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Rated Products</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Product Profile</th>
                                                    <th class="px-4 py-3 w-96">Product Title</th>
                                                    <th class="px-4 py-3">Seller</th>
                                                    <th class="px-4 py-3">Total Rating</th>
                                                    <th class="px-4 py-3">Total Reviews</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($tr = mysqli_fetch_array($topRated_query)) {
                                                    $product_id = $tr['product_id'];
                                                    $selectProducts = "SELECT * FROM items WHERE product_id = '$product_id'";
                                                    $pQeury = mysqli_query($con, $selectProducts);
                                                
                                                    $row = mysqli_fetch_assoc($pQeury);

                                                    // for image
                                                    $json_img = $row['image'];
                                                    $decode_img = json_decode($json_img, true);

                                                    foreach ($decode_img as $key => $value) {
                                                        $first_color = $key;
                                                        break;
                                                    }
                                                
                                                    $first_photo = isset($decode_img[$first_color]) ? $decode_img[$first_color] : '';
                                                    $first_image = $first_photo['img1'];
                                                
                                                    // for the title
                                                    $json_title = $row['title'];
                                                    $decode_title = json_decode($json_title, true);
                                                
                                                    foreach ($decode_title as $key => $value) {
                                                        $first_color_title = $key;
                                                        break;
                                                    }

                                                    $first_image_title = isset($decode_title[$first_color_title]) ? $decode_title[$first_color_title] : '';
                                                    $first_title = $first_image_title['product_name'];
                                                
                                                    // for seller
                                                    $vendor_id = $row['vendor_id'];
                                                    $seller = "SELECT * FROM vendor_registration WHERE vendor_id = '$vendor_id'";
                                                    $sQuery = mysqli_query($con, $seller);
                                                    $ven = mysqli_fetch_assoc($sQuery); 
                                                
                                                    // for avrage reviews
                                                    $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
                                                    $review_query = mysqli_query($con,$get_reviews);
                                                
                                                    if($totalReviews = mysqli_num_rows($review_query)){
                                                        $sum = 0;
                                                        $count = 0;
                                                    
                                                        while ($data = mysqli_fetch_assoc($review_query)) {
                                                            $rating = str_replace(",", "", $data['Rating']);
                                                            $sum += (float)$rating;
                                                            $count++;
                                                        }
                                                    
                                                        $average = $sum / $count;
                                                        $formatted_average = number_format($average, 1);
                                                    
                                                    }
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-20 w-20 object-cover m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/product_image/product_profile/' . $first_image : 'product Img'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 leading-9 line-clamp-2"><?php echo isset($_COOKIE['adminEmail']) ? $first_title : 'title'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $ven['username'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $formatted_average : 'formatted_average'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tr['totalRatings'] : 'totalRatings'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top buying products -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Buying Products</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Product Profile</th>
                                                    <th class="px-4 py-3 w-96">Product Title</th>
                                                    <th class="px-4 py-3">Product Price</th>
                                                    <th class="px-4 py-3">Total Buying</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while($tb = mysqli_fetch_assoc($topBuying_query)){
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-14 w-14 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/product_image/product_profile/' . $tb['order_image'] : 'order_image'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 leading-9 line-clamp-2"><?php echo isset($_COOKIE['adminEmail']) ? $tb['order_title'] : 'order_title'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tb['total_price'] : 'total_price'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tb['totalProducts'] : 'totalProducts'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        <?php  
                        }else{
                            
                        }
                    ?>
                   
                </main>
            </div>
        </div>
    </div>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>


</body>
</html>
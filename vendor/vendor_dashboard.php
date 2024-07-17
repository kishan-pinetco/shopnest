<?php
$chart_data = "";

$data = [
    ["year" => 2007, "profit" => 550000, "purchase" => 800000, "sale" => 250000],
    ["year" => 2008, "profit" => 678000, "purchase" => 1065000, "sale" => 387000],
    ["year" => 2009, "profit" => 787000, "purchase" => 1278500, "sale" => 491500],
    ["year" => 2010, "profit" => 895600, "purchase" => 1456000, "sale" => 560400],
    ["year" => 2011, "profit" => 967150, "purchase" => 1675600, "sale" => 708450],
    ["year" => 2012, "profit" => 1065850, "purchase" => 1701542, "sale" => 635692],
    ["year" => 2013, "profit" => 1105600, "purchase" => 1895000, "sale" => 789400],
    ["year" => 2014, "profit" => 1465000, "purchase" => 2256500, "sale" => 791500],
    ["year" => 2015, "profit" => 1674500, "purchase" => 2530000, "sale" => 855500],
    ["year" => 2016, "profit" => 2050000, "purchase" => 3160000, "sale" => 1110000],
];

foreach ($data as $row) {
    $chart_data .= "{ year:'" . $row["year"] . "', profit:" . $row["profit"] . ", purchase:" . $row["purchase"] . ", sale:" . $row["sale"] . "}, ";
}

$chart_data = substr($chart_data, 0, -2);
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

    <!-- chart CDN -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- link to css -->
    <link rel="stylesheet" href="">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.png">

    <!-- title -->
    <title>Vendor Deshboard</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <a href="../index.php" class="flex items-center">
                        <svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path></svg>
                        <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
                    </a>
                </div>    
                <nav class="mt-10">
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="vendor_dashboard.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="choose_product.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        <span class="mx-3">Add Product</span>
                    </a>
        
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_orders.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path></svg>
                        <span class="mx-3">Orders</span>
                    </a>
        
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_products.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <span class="mx-3">Products</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="vendor_logout.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" ><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                        <span class="mx-3">Log Out</span>
                    </a>
                </nav>
            </div>

            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <h1 class="text-2xl font-semibold">Hello Abhijeet !</h1>
                        </div>
                    </div>
        
                    <div class="flex items-center">
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80" alt="Your avatar">
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="vendor_dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                <a href="view_products.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                                <a href="vendor_logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 px-4 md:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-5">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="bg-white shadow-xl rounded-md px-4 py-7 flex items-center justify-between gap-2">
                                <div class="flex flex-col flex-wrap gap-1">
                                    <span class="text-gray-700">Total Sale</span>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                        <h1 class="text-2xl font-medium">143.35</h1>
                                    </div>
                                </div>
                                <img class="border w-32" src="bar.png" alt="">
                            </div>
                            <div class="bg-white shadow-xl rounded-md px-4 py-7 flex items-center justify-between gap-2">
                                <div class="flex flex-col flex-wrap gap-1">
                                    <span class="text-gray-700">Total Earning</span>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                        <h1 class="text-2xl font-medium">143.35</h1>
                                    </div>
                                </div>
                                <img class="border w-32" src="bar.png" alt="">
                            </div>
                            <div class="bg-white shadow-xl rounded-md px-4 py-7 flex items-center justify-between gap-2">
                                <div class="flex flex-col flex-wrap gap-1">
                                    <span class="text-gray-700">Total View</span>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                        <h1 class="text-2xl font-medium">143.35</h1>
                                    </div>
                                </div>
                                <img class="border w-32" src="bar.png" alt="">
                            </div>
                            <div class="bg-white shadow-xl rounded-md px-4 py-7 flex items-center justify-between gap-2">
                                <div class="flex flex-col flex-wrap gap-1">
                                    <span class="text-gray-700">Total Order</span>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                        <h1 class="text-2xl font-medium">143.35</h1>
                                    </div>
                                </div>
                                <img class="border w-32" src="bar.png" alt="">
                            </div>
                        </div>
                        <div class="w-full bg-white rounded-md px-8 py-8">
                            <h1 class="text-3xl font-bold">This Month Sale</h1>
                            <div id="chart"></div>
                        </div>
                    </div>
                    
                </main>
            </div>
        </div>
    </div>


    <script>
        Morris.Line({
            element: 'chart',
            data: [<?php echo $chart_data; ?>],
            xkey: 'year',
            ykeys: ['profit', 'Purchase', 'Sale'],
            labels: ['Profit', 'Purchase', 'Sale'],
            hideHover: 'auto',
            stacked: true,
            lineColors: ['red', 'green', 'blue']
        });
    </script>

</body>
</html>
<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /index.php");
    exit;
}

if (isset($_COOKIE['vendor_id'])) {
    header("Location: /vendor/vendor_dashboard.php");
    exit;
}
?>

<?php

include "../include/connect.php";

if (isset($_COOKIE['adminEmail'])) {
    // for views
    $views = "SELECT * FROM page_count";
    $views_query = mysqli_query($con, $views);

    $Cview = mysqli_num_rows($views_query);

    $views = "SELECT view_date, COUNT(view_count) as total_count FROM page_count GROUP BY view_date ORDER BY view_date";
    $view_query = mysqli_query($con, $views);

    $data = array();
    while ($row = mysqli_fetch_assoc($view_query)) {
        $data[] = array(
            'date' => $row['view_date'],
            'count' => (int) $row['total_count']
        );
    }

    $data_json = json_encode($data);

    // for profit
    $earning_orders = "SELECT * FROM orders";
    $earning_query = mysqli_query($con, $earning_orders);

    $totalEarnings = 0;
    foreach ($earning_query as $earnings) {
        $trimEarnings = str_replace(",", "", $earnings['admin_profit']);
        $totalEarnings += $trimEarnings;
    }


    // for total products
    $products = "SELECT * FROM products";
    $products_query = mysqli_query($con, $products);

    $products = mysqli_num_rows($products_query);



    // for total users
    $users = "SELECT * FROM user_registration";
    $users_query = mysqli_query($con, $users);

    $user = mysqli_num_rows($users_query);


    // for total vendors
    $vendors = "SELECT * FROM vendor_registration";
    $vendors_query = mysqli_query($con, $vendors);

    $vendor = mysqli_num_rows($vendors_query);
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- link to css -->
    <link rel="stylesheet" href="">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">

    <!-- title -->
    <title>Dashboard</title>
    <style>
        .scrollBar::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e6e6e6;
        }

        .scrollBar::-webkit-scrollbar {
            width: 10px;
            height: 5px;
            background-color: #F5F5F5;
        }

        .scrollBar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #bfbfbf;
        }
    </style>
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
                            <img class="w-7 sm:w-14 mt-0.5" src="/src/logo/white_cart_logo.svg" alt="">
                        </div>
                        <!-- text logo -->
                        <div>
                            <img class="w-16 sm:w-36" src="/src/logo/white_text_logo.svg" alt="">
                        </div>
                    </a>
                </div>
                <nav class="mt-10">
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="dashboard.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="tables.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M21.5 23h-19A2.503 2.503 0 0 1 0 20.5v-17C0 2.122 1.122 1 2.5 1h19C22.878 1 24 2.122 24 3.5v17c0 1.378-1.122 2.5-2.5 2.5zM2.5 2C1.673 2 1 2.673 1 3.5v17c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-17c0-.827-.673-1.5-1.5-1.5z" fill="" opacity="1" data-original="#000000" class=""></path>
                                <path d="M23.5 8H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 13H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 18H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1z" fill="" opacity="1" data-original="#000000" class=""></path>
                                <path d="M6.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM12 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM17.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5z" fill="" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <span class="mx-3">Tables</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_users.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <span class="mx-3">Users</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_vendors.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class="">
                            <g>
                                <path d="M17.898 27.921a2.951 2.951 0 0 1-.648.071C14.171 28 8.087 28 5.007 28a3.001 3.001 0 0 1-2.998-2.855l-.001-.028a39.881 39.881 0 0 1 .5-7.195c.255-1.546 1.578-3.49 2.926-4.311l.163-.098a.998.998 0 0 1 1.1.05C7.941 14.467 9.472 15 11.126 15s3.185-.533 4.429-1.437a1 1 0 0 1 1.094-.053l.169.101c.684.417 1.37 1.115 1.905 1.909A7.504 7.504 0 0 1 30 22a7.495 7.495 0 0 1-3.718 6.477A7.465 7.465 0 0 1 22.5 29.5a7.463 7.463 0 0 1-4.602-1.579zm-.757-11.167a5.187 5.187 0 0 0-1.004-1.175A9.497 9.497 0 0 1 11.126 17a9.499 9.499 0 0 1-5.012-1.422c-.782.643-1.482 1.757-1.632 2.669a37.847 37.847 0 0 0-.474 6.824c.038.522.472.929.998.929 2.747 0 7.885 0 11.147-.005a7.47 7.47 0 0 1-1.035-5.324 7.493 7.493 0 0 1 2.023-3.917zm1.648 9.303A5.476 5.476 0 0 0 22.5 27.5a5.473 5.473 0 0 0 3.045-.92 5.5 5.5 0 1 0-6.518-8.843 5.501 5.501 0 0 0-1.786 5.879 5.51 5.51 0 0 0 1.548 2.441zm2.713-.384a4.267 4.267 0 0 1-1.367-.581 1 1 0 0 1 1.119-1.658 2.415 2.415 0 0 0 1.564.368c.251-.034.488-.14.488-.442 0-.041-.041-.051-.072-.069a1.784 1.784 0 0 0-.313-.132c-.388-.13-.832-.216-1.235-.334-1.163-.339-1.992-.962-1.992-2.173 0-.611.18-1.091.458-1.464.323-.435.795-.734 1.352-.887a1 1 0 0 1 1.994.021c.508.126.992.336 1.38.607a1 1 0 0 1-1.145 1.64 2.322 2.322 0 0 0-1.546-.37c-.254.035-.493.148-.493.453 0 .041.041.051.072.069.093.054.2.094.313.132.388.13.832.216 1.235.334 1.163.339 1.992.962 1.992 2.173 0 1.237-.668 1.948-1.592 2.275-.07.025-.143.047-.218.066a1.001 1.001 0 0 1-1.994-.028zM11.126 2a5.455 5.455 0 0 1 5.453 5.452c0 3.01-2.444 5.453-5.453 5.453s-5.452-2.443-5.452-5.453A5.455 5.455 0 0 1 11.126 2zm0 2a3.454 3.454 0 0 0-3.452 3.452 3.454 3.454 0 0 0 3.452 3.453 3.454 3.454 0 0 0 3.453-3.453A3.454 3.454 0 0 0 11.126 4z" fill="" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Vendors</span>
                    </a>


                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_product.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="m90.895 25.211-42-21a2.004 2.004 0 0 0-1.789 0l-42 21A2 2 0 0 0 4 27v42a2 2 0 0 0 1.105 1.789l42 21a1.998 1.998 0 0 0 1.79 0l42-21A2 2 0 0 0 92 69V27a2 2 0 0 0-1.105-1.789zM48 8.236 85.528 27 77.5 31.014 39.973 12.25zm13.5 30.778L23.972 20.25 35.5 14.486 73.028 33.25zm1.5 3.722 12-6v14.877l-3.838-2.741a2.006 2.006 0 0 0-1.506-.343 2.007 2.007 0 0 0-1.301.832L63 57.098zm-43.5-20.25L57.027 41.25 48 45.764 10.472 27zM8 30.236l38 19v37.527l-38-19zm42 56.528V49.236l9-4.5V63.5a2 2 0 0 0 3.645 1.139l7.845-11.331 5.349 3.82A1.997 1.997 0 0 0 79 55.5V34.736l9-4.5v37.527z" fill="" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Products</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="contact_page.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M255.986 368.994c69.385 0 125.834-56.437 125.834-125.807a125.977 125.977 0 0 0-125.834-125.834c-69.37 0-125.806 56.449-125.806 125.834a126.3 126.3 0 0 0 33.62 85.588l-13.013 48.547a15 15 0 0 0 21.993 16.872l50.895-29.408a125.582 125.582 0 0 0 32.311 4.208zm-41.747-33.4-25.091 14.5 5.868-21.89a15 15 0 0 0-4.268-14.863 94.89 94.89 0 0 1-30.568-70.149 95.775 95.775 0 1 1 66.2 91.128 15 15 0 0 0-12.141 1.271zM503.8 253.9c.163-6.138.332-12.485.039-19.093a71.337 71.337 0 0 0-71.782-68.279C402.4 98.677 334.645 51.136 255.986 51.136S109.6 98.676 79.942 166.527a71.339 71.339 0 0 0-71.779 68.257c-.294 6.632-.125 12.98.038 19.119.173 6.486.351 13.193.018 20.73a71.432 71.432 0 0 0 68.18 74.36q1.678.078 3.349.078a70.393 70.393 0 0 0 27.415-5.54 14.973 14.973 0 0 0 8.114-19.377 8.044 8.044 0 0 0-.824-2.021 162.3 162.3 0 0 1-20.491-78.946c0-89.355 72.684-162.051 162.024-162.051s162.052 72.7 162.052 162.051a161.532 161.532 0 0 1-132.157 159.287 41.584 41.584 0 1 0 1.328 30.209 192.361 192.361 0 0 0 130.075-85.231 70.237 70.237 0 0 0 14.951 1.62q1.653 0 3.315-.076a71.366 71.366 0 0 0 68.23-74.383c-.332-7.513-.153-14.226.02-20.713zM77.733 319.023a41.405 41.405 0 0 1-39.543-43.085c.379-8.579.178-16.151 0-22.833-.156-5.875-.3-11.423-.055-17.014a41.394 41.394 0 0 1 31.274-38.35 192.359 192.359 0 0 0 8.3 116.877l-.018.007q.876 2.232 1.809 4.443-.877-.004-1.767-.045zm170.118 111.841a11.589 11.589 0 1 1 11.588-11.593v.022a11.6 11.6 0 0 1-11.588 11.571zm225.958-154.947a41.366 41.366 0 0 1-39.591 43.108q-.864.041-1.724.044a.255.255 0 0 0 .011-.177 192.27 192.27 0 0 0 10.086-121.15 41.391 41.391 0 0 1 31.275 38.371c.247 5.568.1 11.116-.056 16.99-.178 6.682-.38 14.255-.001 22.814zm-252.869-34.2a14.464 14.464 0 0 1 .07 1.47 14.661 14.661 0 0 1-.07 1.48c-.05.48-.13.97-.22 1.45s-.22.96-.36 1.43-.31.93-.5 1.38-.4.9-.63 1.33-.48.85-.75 1.26a12.819 12.819 0 0 1-.87 1.18c-.31.39-.65.75-.99 1.1a14.668 14.668 0 0 1-1.1.99c-.38.31-.78.6-1.18.88-.41.26-.83.52-1.27.75a13.2 13.2 0 0 1-1.32.62 14.253 14.253 0 0 1-1.38.5c-.47.14-.95.26-1.43.36a14.512 14.512 0 0 1-1.45.22 15.681 15.681 0 0 1-2.96 0 14.512 14.512 0 0 1-1.45-.22c-.48-.1-.96-.22-1.43-.36a14.253 14.253 0 0 1-1.38-.5 13.2 13.2 0 0 1-1.32-.62c-.44-.23-.86-.49-1.27-.75-.4-.28-.8-.57-1.18-.88a14.668 14.668 0 0 1-1.1-.99c-.34-.35-.68-.71-.99-1.1a12.819 12.819 0 0 1-.87-1.18q-.4-.615-.75-1.26c-.23-.43-.44-.88-.63-1.33s-.35-.91-.5-1.38-.26-.95-.36-1.43a14.086 14.086 0 0 1-.29-2.93c0-.49.03-.98.07-1.47s.13-.98.22-1.46.22-.95.36-1.42.31-.93.5-1.38.4-.9.63-1.33a15.584 15.584 0 0 1 1.62-2.45c.31-.38.65-.75.99-1.09a14.668 14.668 0 0 1 1.1-.99c.38-.31.78-.61 1.18-.88a14.6 14.6 0 0 1 1.27-.75q.645-.345 1.32-.63c.45-.18.92-.35 1.38-.49a14.242 14.242 0 0 1 1.43-.36 14.718 14.718 0 0 1 5.86 0 14.242 14.242 0 0 1 1.43.36c.46.14.93.31 1.38.49s.89.4 1.32.63a14.6 14.6 0 0 1 1.27.75c.4.27.8.57 1.18.88a14.668 14.668 0 0 1 1.1.99c.34.34.68.71.99 1.09a15.584 15.584 0 0 1 1.62 2.45c.23.43.44.88.63 1.33s.35.91.5 1.38.26.95.36 1.42.17.966.22 1.456zm20.06 1.47a14.988 14.988 0 0 1 14.986-15h.028a15 15 0 1 1-15.014 15zm50.06 1.476a14.661 14.661 0 0 1-.07-1.48 14.464 14.464 0 0 1 .07-1.47c.05-.49.13-.98.22-1.46s.22-.95.36-1.42a13.353 13.353 0 0 1 .5-1.38c.18-.45.4-.9.62-1.33a16.64 16.64 0 0 1 1.63-2.45c.31-.38.65-.75.99-1.09a14.668 14.668 0 0 1 1.1-.99 12.913 12.913 0 0 1 1.18-.88q.615-.4 1.26-.75c.43-.23.88-.44 1.33-.63s.92-.35 1.38-.49a14.242 14.242 0 0 1 1.43-.36 14.684 14.684 0 0 1 4.4-.22 14.277 14.277 0 0 1 1.46.22 13.41 13.41 0 0 1 1.42.36c.47.14.94.31 1.39.49s.89.4 1.32.63a14.6 14.6 0 0 1 1.27.75c.4.27.8.57 1.18.88a12.8 12.8 0 0 1 1.09.99c.35.34.68.71 1 1.09.3.38.6.78.87 1.19a14.425 14.425 0 0 1 .75 1.26c.23.43.44.88.63 1.33a13.294 13.294 0 0 1 .49 1.38 11.812 11.812 0 0 1 .36 1.42 11.959 11.959 0 0 1 .22 1.46 14.479 14.479 0 0 1 .08 1.47 14.676 14.676 0 0 1-.08 1.48 12.1 12.1 0 0 1-.22 1.45 11.967 11.967 0 0 1-.36 1.43 14.174 14.174 0 0 1-.49 1.38c-.19.45-.4.9-.63 1.33s-.48.85-.75 1.26-.57.81-.87 1.18c-.32.39-.65.75-1 1.1a12.8 12.8 0 0 1-1.09.99c-.38.31-.78.6-1.18.87a14.692 14.692 0 0 1-1.27.76 13.2 13.2 0 0 1-1.32.62 13.525 13.525 0 0 1-1.39.5c-.46.14-.94.26-1.42.36a14.461 14.461 0 0 1-2.93.29 14.661 14.661 0 0 1-1.48-.07 14.512 14.512 0 0 1-1.45-.22c-.48-.1-.96-.22-1.43-.36a14.253 14.253 0 0 1-1.38-.5 13.359 13.359 0 0 1-1.33-.62c-.43-.23-.85-.49-1.26-.76a12.819 12.819 0 0 1-1.18-.87 14.668 14.668 0 0 1-1.1-.99c-.34-.35-.68-.71-.99-1.1a12.819 12.819 0 0 1-.87-1.18c-.27-.41-.53-.83-.76-1.26s-.44-.88-.62-1.33a14.253 14.253 0 0 1-.5-1.38c-.14-.47-.26-.95-.36-1.43s-.17-.97-.22-1.45z" fill="" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Contacts</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="logout.php">
                        <svg class="w-5 h-5 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g data-name="ARROW 48">
                                    <path d="M307.69 347.47a24 24 0 0 0-24 24v58.47a33.93 33.93 0 0 1-33.89 33.9H82.06a33.93 33.93 0 0 1-33.89-33.9V82.06a33.93 33.93 0 0 1 33.89-33.9H249.8a33.93 33.93 0 0 1 33.89 33.9v50.54a24 24 0 0 0 48 0V82.06A82 82 0 0 0 249.8.16H82.06A82 82 0 0 0 .17 82.06v347.88a82 82 0 0 0 81.89 81.9H249.8a82 82 0 0 0 81.89-81.9v-58.47a24 24 0 0 0-24-24z" fill="" opacity="1" data-original="#000000" class=""></path>
                                    <path d="m504.77 238.53-85.41-85.35a24 24 0 0 0-33.6-.33c-9.7 9.33-9.47 25.13.05 34.65l44.47 44.5h-208a24 24 0 0 0-24 24 24 24 0 0 0 24 24h208l-44.9 44.9a24 24 0 0 0 33.94 33.95l85.45-85.41a24.66 24.66 0 0 0 0-34.91z" fill="" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
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
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl divide-y-2 divide-gray-300 ring-2 ring-gray-400" style="display: none;">
                                <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Dashboard</a>
                                <a href="view_product.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Products</a>
                                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main id="main" class="px-4 md:px-12 py-12 overflow-y-scroll scrollBar overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-4">
                        <div class="flex items-center gap-4 bg-white shadow-xl rounded-md px-4 py-3">
                            <div class="bg-gray-50 rounded-md max-w-max p-2">
                                <svg class="w-8 h-8 fill-gray-600" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" fill="" opacity="1" data-original="#000000"></path>
                                        <path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" fill="" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-950"><?php echo isset($_COOKIE['adminEmail']) ? $Cview : '0' ?></h3>
                                <span class="text-sm font-medium text-gray-500">Total view</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white shadow-xl rounded-md px-4 py-3">
                            <div class="bg-gray-50 rounded-md max-w-max p-2">
                                <svg class="w-8 h-8 fill-gray-600" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 511 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M216.5 366c5.52 0 10-4.48 10-10s-4.48-10-10-10-10 4.48-10 10 4.48 10 10 10zm0 0" fill="" opacity="1" data-original="#000000"></path>
                                        <path d="m3.43 389.07 120 120a9.996 9.996 0 0 0 14.14 0l66-66a9.996 9.996 0 0 0 0-14.14l-2.93-2.93h144.15c12.66 0 24.741-4.746 34.058-13.395l121.316-113.699c11.613-10.785 15.461-27.918 9.57-42.629a38.492 38.492 0 0 0-23.851-22.355 38.492 38.492 0 0 0-32.453 3.957c-.063.039-26.934 17.672-26.934 17.672-.183-54.207-32.945-112.012-78.043-138.035a30.088 30.088 0 0 0 5.887-10.375c5.16-15.7-3.418-32.692-19.14-37.883-.493-.164-.985-.309-1.477-.461l25.742-46.242a9.989 9.989 0 0 0 .512-8.664 9.984 9.984 0 0 0-6.457-5.801C335.063 2.723 315.879 0 296.5 0c-19.375 0-38.562 2.723-57.02 8.086a9.997 9.997 0 0 0-5.945 14.469l25.742 46.242c-.5.156-1 .305-1.5.469-15.699 5.183-24.273 22.171-19.113 37.882a30.052 30.052 0 0 0 5.91 10.36C198.804 143.918 166.5 202.316 166.5 256c0 1.465.035 2.91.082 4.344-17.91 4.886-34.562 13.789-48.566 26.05l-30.391 26.59-4.055-4.054a9.996 9.996 0 0 0-14.14 0l-66 66a9.996 9.996 0 0 0 0 14.14zM257.332 24.184C270.145 21.402 283.27 20 296.5 20s26.355 1.402 39.172 4.184L313.387 64.21a121.925 121.925 0 0 0-33.77 0zm6.688 64.082c20.52-6.715 42.89-7.223 64.933-.008 5.246 1.73 8.11 7.402 6.387 12.637a9.94 9.94 0 0 1-8.887 6.855c-19.719-6.27-40.2-6.281-59.91-.02h-.004c-4.11-.257-7.598-2.945-8.879-6.832-1.723-5.242 1.14-10.914 6.36-12.632zm5.53 39.55c17.34-6.246 35.305-6.394 52.688-.421C368.7 143.37 406.5 201.063 406.5 256c0 4.656-.293 9.094-.871 13.242l-48.067 31.535C350.123 291.56 338.844 286 326.5 286h-20v-11.719c11.64-4.129 20-15.246 20-28.281 0-16.543-13.457-30-30-30-5.512 0-10-4.484-10-10s4.488-10 10-10c3.543 0 7.281 1.809 10.816 5.227 3.97 3.84 10.301 3.734 14.141-.23 3.84-3.97 3.734-10.302-.234-14.142-5.075-4.914-10.153-7.69-14.723-9.207V166c0-5.523-4.477-10-10-10s-10 4.477-10 10v11.719c-11.637 4.129-20 15.246-20 28.281 0 16.543 13.457 30 30 30 5.516 0 10 4.484 10 10s-4.484 10-10 10c-4.273 0-8.883-2.688-12.984-7.566-3.555-4.227-9.864-4.774-14.09-1.22-4.227 3.556-4.774 9.864-1.219 14.09 5.344 6.36 11.633 10.79 18.293 13.024V286h-3.328c-4.914 0-7.121-3.203-10.582-5.441-21.13-15.836-47.3-24.559-73.7-24.559-4.128 0-8.265.215-12.382.633 0-.211-.008-.418-.008-.633 0-54.168 37.258-111.668 83.05-128.184zM131.189 301.441C149.977 284.988 174.12 276 198.89 276c22.101 0 44.011 7.3 61.691 20.555 2.55 1.492 9.652 9.445 22.586 9.445H326.5c11.383 0 20 9.254 20 20 0 11.027-8.973 20-20 20h-70c-5.523 0-10 4.477-10 10s4.477 10 10 10h70c22.055 0 40-17.945 40-40 0-2.293-.203-4.555-.586-6.781l98.2-64.43a18.573 18.573 0 0 1 15.558-1.86 18.562 18.562 0 0 1 11.492 10.778c2.887 7.203 1.074 15.27-4.644 20.578L365.207 397.98a29.917 29.917 0 0 1-20.418 8.02H180.641l-78.84-78.844zm-54.688 28.7L182.36 436l-51.86 51.86L24.64 382zm0 0" fill="" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-950"><?php echo isset($_COOKIE['adminEmail']) ? '₹' . number_format($totalEarnings) : '0' ?></h3>
                                <span class="text-sm font-medium text-gray-500">Total profit</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white shadow-xl rounded-md px-4 py-3">
                            <div class="bg-gray-50 rounded-md max-w-max p-2">
                                <svg class="w-8 h-8 fill-gray-600" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="m90.895 25.211-42-21a2.004 2.004 0 0 0-1.789 0l-42 21A2 2 0 0 0 4 27v42a2 2 0 0 0 1.105 1.789l42 21a1.998 1.998 0 0 0 1.79 0l42-21A2 2 0 0 0 92 69V27a2 2 0 0 0-1.105-1.789zM48 8.236 85.528 27 77.5 31.014 39.973 12.25zm13.5 30.778L23.972 20.25 35.5 14.486 73.028 33.25zm1.5 3.722 12-6v14.877l-3.838-2.741a2.006 2.006 0 0 0-1.506-.343 2.007 2.007 0 0 0-1.301.832L63 57.098zm-43.5-20.25L57.027 41.25 48 45.764 10.472 27zM8 30.236l38 19v37.527l-38-19zm42 56.528V49.236l9-4.5V63.5a2 2 0 0 0 3.645 1.139l7.845-11.331 5.349 3.82A1.997 1.997 0 0 0 79 55.5V34.736l9-4.5v37.527z" fill="" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-950"><?php echo isset($_COOKIE['adminEmail']) ? $products : '0' ?></h3>
                                <span class="text-sm font-medium text-gray-500">Total product</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white shadow-xl rounded-md px-4 py-3">
                            <div class="bg-gray-50 rounded-md max-w-max p-2">
                                <svg class="w-8 h-8 fill-gray-600" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-950"><?php echo isset($_COOKIE['adminEmail']) ? $user : '0' ?></h3>
                                <span class="text-sm font-medium text-gray-500">Total users</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white shadow-xl rounded-md px-4 py-3">
                            <div class="bg-gray-50 rounded-md max-w-max p-2">
                                <svg class="w-8 h-8 fill-gray-600" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M30 20V9.657c.182-.087.358-.186.525-.305 1.167-.83 1.652-2.371 1.205-3.833-.32-1.049-.881-2.54-1.295-3.606A2.977 2.977 0 0 0 27.639 0H4.359C3.113 0 2.017.75 1.566 1.91 1.155 2.966.6 4.444.279 5.499-.204 7.082.478 8.931 2 9.655V20c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v3c0 1.654 1.346 3 3 3h22c1.654 0 3-1.346 3-3v-3c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2zM2.192 6.08c.304-.996.84-2.423 1.237-3.446A.991.991 0 0 1 4.36 2h23.28a.99.99 0 0 1 .93.636c.33.847.93 2.426 1.25 3.468.19.627.004 1.292-.454 1.619a1.518 1.518 0 0 1-1.732.001c-.936-.666-2.313-.677-3.266 0-.508.36-1.226.36-1.734 0a2.856 2.856 0 0 0-3.266 0c-.508.36-1.226.36-1.734 0a2.853 2.853 0 0 0-3.265 0c-.51.361-1.227.36-1.735 0a2.853 2.853 0 0 0-3.265 0c-.51.361-1.227.36-1.735 0a2.853 2.853 0 0 0-3.265 0 1.507 1.507 0 0 1-1.538.116c-.58-.293-.853-1.05-.638-1.76zM4 9.948a3.483 3.483 0 0 0 1.526-.594.84.84 0 0 1 .949 0c1.19.845 2.86.846 4.051 0a.84.84 0 0 1 .949 0c1.19.845 2.86.846 4.051 0a.84.84 0 0 1 .949 0c1.19.846 2.86.846 4.05 0a.84.84 0 0 1 .95 0c1.19.846 2.86.846 4.05 0a.84.84 0 0 1 .95 0c.457.325.977.53 1.525.608V20h-6.356a6.003 6.003 0 0 0-3.761-3.683A2.982 2.982 0 0 0 19 14c0-1.654-1.346-3-3-3s-3 1.346-3 3c0 .938.441 1.766 1.117 2.317A6.002 6.002 0 0 0 10.357 20H4zM12.534 20c.699-1.207 2.009-2 3.466-2s2.768.793 3.467 2zM16 15c-.551 0-1-.449-1-1s.449-1 1-1 1 .449 1 1-.449 1-1 1zm12 14a1 1 0 0 1-1 1H5c-.551 0-1-.448-1-1v-3h24zm2-5H2v-2h18.9l.006-.001h8.085L29 22l.01-.002H30z" fill="" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-950"><?php echo isset($_COOKIE['adminEmail']) ? $vendor : '0' ?></h3>
                                <span class="text-sm font-medium text-gray-500">Total vendors</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-md px-4 py-3 mt-12">
                        <h1 class="text-2xl font-bold text-gray-950">Visitors analytics</h1>
                        <div id="chart" style="height: 250px;"></div>
                        <script>
                            $(document).ready(function() {
                                var chartData = <?php echo $data_json; ?>;

                                new Morris.Bar({
                                    element: 'chart',
                                    data: chartData,
                                    xkey: 'date',
                                    ykeys: ['count'],
                                    labels: ['View Count'],
                                    barColors: ['#00a65a'],
                                    hideHover: 'auto',
                                    resize: true,
                                    xLabelAngle: 60, // Optional: rotate x-axis labels to avoid overlapping
                                    xLabels: 'day', // Optional: set format to day if needed
                                    dateFormat: function(x) {
                                        var d = new Date(x);
                                        return (d.getDate() < 10 ? '0' : '') + d.getDate() + '-' + (d.getMonth() < 9 ? '0' : '') + (d.getMonth() + 1) + '-' + d.getFullYear();
                                    } // Optional: custom date formatting
                                });
                            });
                        </script>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>


</body>

</html>
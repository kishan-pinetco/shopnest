<?php

include "../include/connect.php";

if (isset($_GET['Category'])) {
    $Category = $_GET['Category'];

    // for brands
    $brand_find = "SELECT company_name FROM products WHERE Category = '$Category'";
    $brand_query = mysqli_query($con, $brand_find);

    // for color
    $color_find = "SELECT color FROM products WHERE Category = '$Category'";
    $color_query = mysqli_query($con, $color_find);

    // for size
    $size_find = "SELECT size FROM products WHERE Category = '$Category'";
    $size_query = mysqli_query($con, $size_find);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category</title>

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- alpinejs CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="/shopnest/src/logo/favicon.svg">

    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        [x-cloak] {
            display: none;
        }

        @keyframes openFilterSidebar {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .filter-sidebar-open {
            animation: openFilterSidebar 0.4s ease-in-out;
        }

        @keyframes closeFilterSidebar {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .filter-sidebar-close {
            animation: closeFilterSidebar 0.4s ease-in-out;
        }

        .sidebarScroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e6e6e6;
        }

        .sidebarScroll::-webkit-scrollbar {
            width: 6px;
            height: 5px;
            background-color: #F5F5F5;
        }

        .sidebarScroll::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #bfbfbf;
        }
    </style>

    <script>
        function filterSideBarOpen() {
            // $("#sidebarContainer").addClass('block');
            activePopup = 'filterSidebarContainer';
            let sidebarContainer = $('#filterSidebarContainer');
            sidebarContainer.show();
            sidebarContainer.addClass('filter-sidebar-open');

            $('body').css('overflowY', 'hidden');
            // $('body').fadeTo(700, 0.5);
            event.preventDefault();
        }

        // close sidebarContainer using Esc key
        $(document).keydown(function(event) {
            if (event.key === 'Escape') {
                if (activePopup === 'filterSidebarContainer') {
                    filterSideBarClose();
                }
            }
        });

        function filterSideBarClose() {
            let closeSidebar = $('#filterSidebarContainer');
            closeSidebar.addClass('filter-sidebar-close');

            $('body').css('overflow', 'visible');

            setTimeout(function() {
                closeSidebar.removeClass('filter-sidebar-close').hide();
            }, 300);
            // $('body').fadeTo(800,1);   
        }
    </script>
</head>

<body class="outfit">
    <div class="p-1 flex justify-between items-center gap-3 px-5">
        <div class="flex items-center gap-1">
            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                <g>
                    <path d="M60.8 15.19H7.21C3.79 15.19 1 17.98 1 21.4v25.21c0 3.42 2.79 6.2 6.21 6.2H60.8c3.42 0 6.2-2.78 6.2-6.2V21.4c0-3.42-2.78-6.21-6.2-6.21zM65 46.61a4.2 4.2 0 0 1-4.2 4.2H7.21c-2.32 0-4.21-1.88-4.21-4.2V21.4c0-2.32 1.89-4.21 4.21-4.21H60.8c2.32 0 4.2 1.89 4.2 4.21z" fill="#000000" opacity="1" data-original="#000000"></path>
                    <path d="M61 25.27a4.08 4.08 0 0 1-4.07-4.07c0-.55-.45-1-1-1H12.07c-.55 0-1 .45-1 1A4.08 4.08 0 0 1 7 25.27c-.55 0-1 .45-1 1v15.47c0 .55.45 1 1 1 2.24 0 4.07 1.82 4.07 4.07 0 .55.45 1 1 1h43.86c.55 0 1-.45 1-1 0-2.25 1.83-4.07 4.07-4.07.55 0 1-.45 1-1V26.27c0-.55-.45-1-1-1zm-1 15.55c-2.55.42-4.56 2.44-4.99 4.99H12.99A6.099 6.099 0 0 0 8 40.82V27.19a6.099 6.099 0 0 0 4.99-4.99h42.02A6.099 6.099 0 0 0 60 27.19z" fill="#000000" opacity="1" data-original="#000000"></path>
                    <path d="M17.963 30.066A3.938 3.938 0 0 0 14.03 34a3.941 3.941 0 0 0 3.933 3.94 3.945 3.945 0 0 0 3.94-3.94 3.941 3.941 0 0 0-3.94-3.934zm0 5.874A1.939 1.939 0 0 1 16.03 34c0-1.067.867-1.934 1.933-1.934 1.07 0 1.94.867 1.94 1.934 0 1.07-.87 1.94-1.94 1.94zM49.917 30.066A3.938 3.938 0 0 0 45.984 34a3.941 3.941 0 0 0 3.933 3.94 3.945 3.945 0 0 0 3.94-3.94 3.941 3.941 0 0 0-3.94-3.934zm0 5.874A1.939 1.939 0 0 1 47.984 34c0-1.067.867-1.934 1.933-1.934 1.07 0 1.94.867 1.94 1.934 0 1.07-.87 1.94-1.94 1.94zM40.26 30.53c0 .55-.44 1-1 1h-1.89a5.257 5.257 0 0 1-5.15 4.24h-1.45l4.14 5.35c.33.43.25 1.06-.18 1.4a1.002 1.002 0 0 1-1.41-.18l-5.38-6.95c-.33-.44-.25-1.07.18-1.41.18-.14.39-.21.6-.21h3.5c1.44 0 2.65-.94 3.08-2.24h-6.56c-.56 0-1-.45-1-1 0-.56.44-1 1-1h6.56c-.43-1.31-1.64-2.25-3.08-2.25h-3.48a.96.96 0 0 1-.68-.28.952.952 0 0 1-.32-.72c0-.55.44-1 1-1h10.52c.56 0 1 .45 1 1s-.44 1-1 1h-2.95c.52.64.89 1.4 1.06 2.25h1.89c.56 0 1 .44 1 1z" fill="#000000" opacity="1" data-original="#000000"></path>
                </g>
            </svg>
            <p class="text-xs font-semibold"> -INR</p>
        </div>
        <div class="flex items-center">
            <a class="flex items-center text-xs gap-2 px-2 h-10" href="">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M492.522 118.3 266.433 3.743l-.094-.047c-10.067-5.012-22.029-4.9-32.002.3L137.368 55.46c-.788.334-1.545.739-2.27 1.205L18.896 118.337C7.24 124.44 0 136.398 0 149.559V362.44c0 13.161 7.24 25.118 18.896 31.221l215.345 114.292.097.051a35.255 35.255 0 0 0 16.297 3.981 35.232 35.232 0 0 0 15.704-3.682l226.183-114.604C504.538 387.69 512 375.618 512 362.18V149.82c0-13.439-7.462-25.512-19.478-31.52zM248.237 30.569a5.26 5.26 0 0 1 4.705-.042l211.629 107.23-82.364 41.005L175.308 69.275l72.929-38.706zM235.424 474.63 32.91 367.147l-.097-.051a5.237 5.237 0 0 1-2.824-4.656V163.091l205.435 107.124V474.63zm15.153-230.335L46.272 137.76l97.024-51.493L349.171 195.21l-98.594 49.085zm231.432 117.883a5.22 5.22 0 0 1-2.911 4.703L265.414 475.152V270.408l98.386-48.982v51.355c0 8.281 6.714 14.995 14.995 14.995s14.995-6.714 14.995-14.995v-66.286l88.219-43.92v199.603z" fill="#000000" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>Track Order
            </a>

            <a class="flex items-center text-xs gap-2 px-2 h-10" href="">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M256 0C114.509 0 0 114.496 0 256c0 141.489 114.496 256 256 256 141.491 0 256-114.496 256-256C512 114.509 397.504 0 256 0zm0 476.279c-121.462 0-220.279-98.816-220.279-220.279S134.538 35.721 256 35.721c121.463 0 220.279 98.816 220.279 220.279S377.463 476.279 256 476.279z" fill="#000000" opacity="1" data-original="#000000"></path>
                        <path d="M248.425 323.924c-14.153 0-25.61 11.794-25.61 25.946 0 13.817 11.12 25.948 25.61 25.948s25.946-12.131 25.946-25.948c0-14.152-11.794-25.946-25.946-25.946zM252.805 127.469c-45.492 0-66.384 26.959-66.384 45.155 0 13.142 11.12 19.208 20.218 19.208 18.197 0 10.784-25.948 45.155-25.948 16.848 0 30.328 7.414 30.328 22.915 0 18.196-18.871 28.642-29.991 38.077-9.773 8.423-22.577 22.24-22.577 51.22 0 17.522 4.718 22.577 18.533 22.577 16.511 0 19.881-7.413 19.881-13.817 0-17.522.337-27.631 18.871-42.121 9.098-7.076 37.74-29.991 37.74-61.666s-28.642-55.6-71.774-55.6z" fill="#000000" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>Help Center
            </a>
        </div>
    </div>
    <?php
    include "../include/connect.php";
    include "../pages/_navbar.php";
    ?>

    <div class="px-3 sm:px-16 outfit mt-5">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-lg sm:text-3xl"><?php echo isset($_GET['Category']) ? $_GET['Category'] : 'New Arrivals' ?></h1>
            </div>
            <div class="flex gap-3 relative cursor-pointer">
                <?php
                $selectedValue = isset($_POST['itemSelect']) ? $_POST['itemSelect'] : '';
                ?>
                <form action="" method="POST" id="autoSubmitForm">
                    <select name="itemSelect" onchange="this.form.submit()" class="cursor-pointer rounded-md w-max border-none focus:outline-none focus:ring-0 focus-visible:ring-0 focus-visible:outline-none text-left">
                        <option value="Newest" <?php if ($selectedValue === 'Newest') echo 'selected'; ?>>Newest</option>
                        <option value="Best Rating" <?php if ($selectedValue === 'Best Rating') echo 'selected'; ?>>Best Rating</option>
                        <option value="Low to High" <?php if ($selectedValue === 'Low to High') echo 'selected'; ?>>Price: Low to High</option>
                        <option value="High to Low" <?php if ($selectedValue === 'High to Low') echo 'selected'; ?>>Price: High to Low</option>
                    </select>
                </form>

                <!-- sidebar button -->
                <button onclick="filterSideBarOpen()" class="lg:hidden focus:outline-none">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M53.39 8H10.61a5.61 5.61 0 0 0-4.15 9.38L25 37.77V57a2 2 0 0 0 1.13 1.8 1.94 1.94 0 0 0 .87.2 2 2 0 0 0 1.25-.44l3.75-3 6.25-5A2 2 0 0 0 39 49V37.77l18.54-20.39A5.61 5.61 0 0 0 53.39 8z" fill="#808080" opacity="1" data-original="#808080"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mt-2">
        <div class="flex jutify-center">
            <div class="mt-7 w-64 hidden lg:block">
                <form action="" method="post">
                    <div>
                        <!-- price -->
                        <div x-data="{ open: true }" class="border-b border-gray-200 pb-4 mt-3">
                            <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                                <span class="text-sm">Price</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                                <ul class="space-y-2 pl-2">
                                    <label for="price_1" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="₹1000" name="price_1" id="price_1">
                                        <div class="text-sm">₹1000</div>
                                    </label>
                                    <label for="price_2" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="₹2000" name="price_2" id="price_2">
                                        <div class="text-sm">₹2000</div>
                                    </label>
                                    <label for="price_3" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="₹3000" name="price_3" id="price_3">
                                        <div class="text-sm">₹3000</div>
                                    </label>
                                    <label for="price_4" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="₹4000" name="price_4" id="price_4">
                                        <div class="text-sm">₹4000</div>
                                    </label>
                                    <label for="price_5" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="₹5000" name="price_5" id="price_5">
                                        <div class="text-sm">₹5000</div>
                                    </label>
                                </ul>
                            </div>
                        </div>
                        <!-- Brands -->
                        <div x-data="{ open: true }" class="border-b border-gray-200 pb-4 mt-3">
                            <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                                <span class="text-sm">Brands</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                                <ul class="space-y-2">
                                    <?php
                                    $display_brands = array();
                                    $selected_brands = isset($_POST['brands']) ? $_POST['brands'] : array();
                                    while ($row = mysqli_fetch_array($brand_query)) {
                                        $all_brands = $row['company_name'];

                                        if (!in_array($all_brands, $display_brands)) {
                                            $is_checked = in_array($all_brands, $selected_brands) ? 'checked' : '';
                                    ?>
                                            <li class="flex items-center gap-2 pl-2">
                                                <label class="text-sm flex items-center w-full gap-1 cursor-pointer" for="brands-<?php echo htmlspecialchars($all_brands); ?>">
                                                    <input type="checkbox" class="rounded h-[15px] w-[15px]" value="<?php echo htmlspecialchars($all_brands); ?>" name="brands[]" id="brands-<?php echo htmlspecialchars($all_brands); ?>" <?php echo $is_checked; ?>>
                                                    <div class="select-none"><?php echo htmlspecialchars($all_brands); ?></div>
                                                </label>
                                            </li>
                                    <?php
                                            $display_brands[] = $all_brands;
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- color -->
                        <div x-data="{ open: true }" class="border-b border-gray-200 pb-4 mt-3">
                            <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                                <span class="text-sm">Colour</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                                <ul class="flex flex-wrap gap-3 pl-2" x-data="{ selectedColor: '' }">
                                    <?php
                                    $display_color = array();
                                    while ($color = mysqli_fetch_assoc($color_query)) {
                                        $color_array = explode(',', $color['color']);

                                        foreach ($color_array as $clr) {
                                            $clr = trim($clr);
                                            if (!in_array($clr, $display_color)) {
                                                $display_color[] = $clr;
                                            }
                                        }
                                    }

                                    $i = 1;
                                    foreach ($display_color as $clr) {
                                        $unique_id = 'color_' . $i;
                                    ?>
                                        <li>
                                            <label for="<?php echo $unique_id ?>" @click="selectedColor = '<?php echo $clr ?>'">
                                                <div :class="{'ring-4': selectedColor === '<?php echo $clr ?>'}" class="h-7 w-7 rounded-full cursor-pointer border" style="background-color: <?php echo $clr ?>;"></div>
                                            </label>
                                            <input type="radio" class="hidden" name="products_colors" value="<?php echo $clr ?>" id="<?php echo $unique_id ?>">
                                        </li>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- size -->
                        <div x-data="{ open: true }" class="border-b border-gray-200 pb-4 mt-3">
                            <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                                <span class="text-sm">Size</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                                <ul class="space-y-2">
                                    <?php
                                    $display_size = [];
                                    while ($size = mysqli_fetch_assoc($size_query)) {
                                        $size_array = explode(',', $size['size']);

                                        foreach ($size_array as $size) {
                                            $size = trim($size);
                                            if (!in_array($size, $display_size)) {
                                                $display_size[] = $size;
                                            }
                                        }
                                    }

                                    $j = 1;
                                    foreach ($display_size as $size) {
                                        $unique_id = 'size' . $j;
                                    ?>
                                        <li class="flex items-center gap-2 pl-2">
                                            <label class="text-sm flex items-center w-full gap-1 cursor-pointer" for="<?php echo $unique_id ?>">
                                                <input type="checkbox" class="rounded h-[15px] w-[15px]" value="<?php echo htmlspecialchars($size); ?>" name="sizes[]" id="<?php echo $unique_id ?>">
                                                <div class="select-none"><?php echo htmlspecialchars($size); ?></div>
                                            </label>
                                        </li>
                                    <?php
                                        $j++;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Customer Rating -->
                        <div x-data="{ open: true }" class="border-b border-gray-200 pb-4 mt-3">
                            <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                                <span class="text-sm">Customer Rating</span>
                                <span class="ml-6 flex items-center">
                                    <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                    </svg>
                                    <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" x-transition class="mt-2 text-gray-600 pl-2" style="display: none;">
                                <ul class="space-y-2">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        $unique_rating = 'rating_' . $i;
                                    ?>
                                        <label for="<?php echo $unique_rating ?>" class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="rounded h-[15px] w-[15px]" value="<?php echo $i; ?>" name="stars[]" id="<?php echo $unique_rating ?>">
                                            <div class="text-sm"><?php echo $i; ?></div>
                                        </label>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <input type="submit" name="filter" class="mt-4 mb-7 py-3 w-full rounded-md bg-indigo-500 hover:bg-indigo-600 transition duration-200 cursor-pointer text-white px-4" value="Submit">
                        </div>
                    </div>
                </form>
            </div>

            <?php
            $product_brand = '';
            $product_colors = '';
            $product_size = '';
            $product_rating = '';
            if (isset($_POST['filter'])) {
                // Price
                // if (!empty($_POST['price_1'])) {
                //     echo "Selected Prices: " . $_POST['price_1'] . "<br>";
                // }

                // Brands
                if (!empty($_POST['brands'])) {
                    $product_brand = implode(", ", $_POST['brands']);
                }

                // Colors
                if (isset($_POST['products_colors'])) {
                    $product_colors = htmlspecialchars($_POST['products_colors']);
                }

                // Sizes
                if (!empty($_POST['sizes'])) {
                    $product_size = implode(", ", $_POST['sizes']);
                }

                // Ratings
                if (!empty($_POST['stars'])) {
                    $product_rating = implode(", ", $_POST['stars']);
                }
            }


            $size_condition = array();
            $color_condition = '';
            $brand_condition = array();
            $rating_condition = array();

            $product_filter_array = array(
                $product_brand,
                $product_colors,
                $product_size,
                $product_rating
            );


            $product_filter = implode(",", array_filter($product_filter_array, 'strlen'));
            $filter_array = explode(',', $product_filter);

            $range_pattern = '/^\d+GB-\d+GB$/';
            $numeric_with_unit_pattern = '/^\d+ \w+$/';
            $simple_size_pattern = '/^(XS|S|M|L|XL|XXL)$/';

            foreach ($filter_array as $filter) {
                $filter = trim($filter);
                $filter = mysqli_real_escape_string($con, $filter);

                if (strlen($filter) > 0) {
                    if (strpos($filter, '#') === 0) {

                        $color_condition = "color LIKE '%$filter%'";
                    } elseif (is_numeric($filter)) {

                        $rating_condition[] = "rating LIKE '%$filter%'";
                    } elseif (preg_match($range_pattern, $filter)) {

                        $size_condition[] = "size LIKE '%$filter%'";
                    } elseif (preg_match($numeric_with_unit_pattern, $filter)) {

                        $size_condition[] = "size LIKE '%$filter%'";
                    } elseif (preg_match($simple_size_pattern, $filter)) {

                        $size_condition[] = "size LIKE '%$filter%'";
                    } else {
                        $brand_condition[] = "company_name LIKE '%$filter%'";
                    }
                }
            }

            $size_condition_query = implode(' OR ', $size_condition);
            $brand_condition_query = implode(' OR ', $brand_condition);
            $rating_condition_query = implode(' OR ', $rating_condition);

            if ($selectedValue === 'High to Low') {
                $product_find = "SELECT * FROM products WHERE Category = '$Category' ORDER BY MRP ASC";
            } elseif ($selectedValue === "Low to High") {
                $product_find = "SELECT * FROM products WHERE Category = '$Category' ORDER BY MRP DESC";
            } elseif ($selectedValue === 'Best Rating') {
                $product_find = "SELECT p.*, AVG(r.Rating) AS AverageRating
                    FROM products p
                    LEFT JOIN user_review r ON p.product_id = r.product_id
                    WHERE p.Category = '$Category'
                    GROUP BY p.product_id
                    ORDER BY AverageRating DESC";
            } elseif ($selectedValue === 'Newest') {
                $product_find = "SELECT * FROM products WHERE Category = '$Category'";
            } else {
                if ($size_condition_query) {
                    $product_find = "SELECT * FROM products WHERE ($size_condition_query)"
                        . ($color_condition ? " AND $color_condition" : '')
                        . ($brand_condition_query ? " AND $brand_condition_query" : '')
                        . ($rating_condition_query ? " AND $rating_condition_query" : '');
                } else {
                    $product_find = "SELECT * FROM products WHERE Category = '$Category'"
                        . ($color_condition ? " AND $color_condition" : '')
                        . ($brand_condition ? ($color_condition ? " AND $brand_condition_query" : " AND $brand_condition_query") : '')
                        . ($rating_condition ? ($color_condition || $brand_condition ? " AND $rating_condition_query" : " AND $rating_condition_query") : '');


                    // $product_find = "SELECT * FROM products"
                    // . ($color_condition ? " AND $color_condition" : '')
                    // . ($brand_condition ? ($color_condition ? " AND $brand_condition_query" : " AND $brand_condition_query") : '')
                    // . ($rating_condition ? ($color_condition || $brand_condition ? " AND $rating_condition_query" : " AND $rating_condition_query") : '');       
                }
            }
            $product_query = mysqli_query($con, $product_find);
            ?>


            <!-- card div -->
            <div class="flex justify-center lg:ml-10 mt-2 w-full p-5">
                <!-- include card here -->
                <?php
                if (mysqli_num_rows($product_query) > 0) {
                ?>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 w-full">
                        <?php
                        while ($product = mysqli_fetch_assoc($product_query)) {


                            $product_id = $product['product_id'];
                            $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
                            $review_query = mysqli_query($con, $get_reviews);
                            $totalReviews = mysqli_num_rows($review_query);


                            if ($totalRatings = mysqli_num_rows($review_query)) {
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
                            <div class="p-3 border rounded-lg h-fit hover:shadow-xl transition cursor-pointer" onclick="window.location.href = '../product/product_detail.php?product_id=<?php echo $product['product_id']; ?>'">
                                <div>
                                    <img src="<?php echo '../src/product_image/product_profile/' . $product['image_1']; ?>" alt="" class="product-card__hero-image css-1fxh5tw h-56 w-56 object-cover" loading="lazy" sizes="">
                                </div>
                                <div class="mt-2 translate-x-2">
                                    <a href="../product/product_detail.php?product_id=<?php echo $product['product_id'] ?>" class="text-base font-medium line-clamp-2 cursor-pointer"><?php echo $product['title'] ?></a>
                                    <p class="space-x-2">
                                        <span class="text-lg font-medium text-indigo-500">₹<?php echo $product['MRP'] ?></span>
                                        <del class="text-xs font-normal">₹<?php echo $product['Your_Price'] ?></del>
                                    </p>
                                    <div class="flex items-center mt-3">
                                        <span class="bg-indigo-400 rounded-md px-2 py-0.5 flex items-center gap-1">
                                            <h1 class="font-semibold text-base text-white"><?php echo isset($formatted_average) ? $formatted_average : '0.0' ?></h1>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-3 h-3 m-auto fill-current text-white">
                                                <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                            </svg>
                                        </span>
                                        <span class="text-sm ml-2 mt-0.5">(<?php echo $totalReviews ?>) Peoples</span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="text-center w-96 mt-24">
                            <svg class="w-40 h-40 m-auto" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 36 36" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path fill="#efefef" d="M8.377 4.167c6.917 0 11.667-3.583 15-3.583S33.71 2.5 33.71 17.833s-9.417 17.583-13.083 17.583C3.46 35.417-3.873 4.167 8.377 4.167z" opacity="1" data-original="#efefef" class=""></path>
                                    <path fill="#a4afc1" d="M2.5 14c-.827 0-1.5-.673-1.5-1.5S1.673 11 2.5 11s1.5.673 1.5 1.5S3.327 14 2.5 14zm0-2a.5.5 0 1 0 .002 1.002A.5.5 0 0 0 2.5 12z" opacity="1" data-original="#a4afc1"></path>
                                    <path fill="#f3f3f1" d="M27.25 27.25H8.75a2 2 0 0 1-2-2v-15h22.5v15a2 2 0 0 1-2 2z" opacity="1" data-original="#f3f3f1" class=""></path>
                                    <path fill="#2fdf84" d="M29.25 10.25H6.75v-1.5a2 2 0 0 1 2-2h18.5a2 2 0 0 1 2 2z" opacity="1" data-original="#2fdf84"></path>
                                    <path fill="#d5dbe1" d="M9.25 25.25v-15h-2.5v15a2 2 0 0 0 2 2h2.5a2 2 0 0 1-2-2z" opacity="1" data-original="#d5dbe1"></path>
                                    <path fill="#00b871" d="M11 6.75H8.75a2 2 0 0 0-2 2v1.5H9v-1.5a2 2 0 0 1 2-2z" opacity="1" data-original="#00b871" class=""></path>
                                    <path d="M30 21.25h-1.5V8.75c0-.689-.561-1.25-1.25-1.25H8.75c-.689 0-1.25.561-1.25 1.25v12.5H6V8.75A2.752 2.752 0 0 1 8.75 6h18.5A2.752 2.752 0 0 1 30 8.75z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    <path d="M14.25 22a.751.751 0 0 1-.656-.386l-1.094-1.97V22H11v-5.25a.75.75 0 0 1 1.406-.365l1.094 1.97V16H15v5.25a.75.75 0 0 1-.75.75zM18.25 22h-.5c-.965 0-1.75-.785-1.75-1.75v-2.5c0-.965.785-1.75 1.75-1.75h.5c.965 0 1.75.785 1.75 1.75v2.5c0 .965-.785 1.75-1.75 1.75zm-.5-4.5a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25zM22.25 16h1.5v6h-1.5z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    <path d="M21 16h4v1.5h-4zM28.25 30h-1.5a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 1 .75-.75h1.5c.965 0 1.75.785 1.75 1.75v2.5c0 .965-.785 1.75-1.75 1.75zm-.75-1.5h.75a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25h-.75zM7.5 30H6v-4.25c0-.965.785-1.75 1.75-1.75H10v1.5H7.75a.25.25 0 0 0-.25.25z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    <path d="M6 26.5h4V28H6zM24.25 30a.751.751 0 0 1-.656-.386l-1.094-1.97V30H21v-5.25a.75.75 0 0 1 1.406-.365l1.094 1.97V24H25v5.25a.75.75 0 0 1-.75.75zM13.25 30h-.5c-.965 0-1.75-.785-1.75-1.75v-2.5c0-.965.785-1.75 1.75-1.75h.5c.965 0 1.75.785 1.75 1.75v2.5c0 .965-.785 1.75-1.75 1.75zm-.5-4.5a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25zM18.25 30h-.5c-.965 0-1.75-.785-1.75-1.75V24h1.5v4.25c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25V24H20v4.25c0 .965-.785 1.75-1.75 1.75zM6.75 9.5h22.5V11H6.75z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            <h1 class="text-3xl font-semibold text-gray-800">No products found matching your criteria.</h1>
                            <p class="text-gray-600 mt-2">It seems there are no products that match your search criteria. Please try adjusting your filters or check back later.</p>
                        </div>
                    <?php
                    }

                    ?>
                    </div>
            </div>
        </div>
    </div>
    <!-- sidebar -->
    <!-- add hidden in container -->
    <div id="filterSidebarContainer" class="hidden bg-gray-50 pb-3 font-medium fixed top-0 right-0 w-fit h-[100vh] overflow-y-auto z-50 sidebarScroll" x-cloak>
        <div id="filterSidebarHeader" class="p-2 bg-gray-200 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <h1 class="text-black px-2 font-bold text-2xl"><a href=""><?php echo isset($_GET['Category']) ? $_GET['Category'] : 'New Arrivals' ?></a></h1>
            </div>
            <div>
                <button onclick="filterSideBarClose()" class="focus:outline-none"><svg class="relative top-0.5 right-0.5 text-[#ff0000] transition rounded-md" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: currentColor;">
                        <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                    </svg></button>
            </div>
        </div>
        <div id="sidebarBody" class="felx justify-center px-4">
            <div class="mt-7 w-60">
                <div>
                    <ul class="space-y-2 text-sm">
                        <li><a href="">Totes</a></li>
                        <li>Backpacks</li>
                        <li>Travel Bags</li>
                        <li>Hip Bags</li>
                        <li>Laptop Sleeves</li>
                    </ul>
                </div>
                <hr class="mt-3">
                <div>
                    <!-- color -->
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4 mt-3">
                        <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                            <span class="text-sm">Colour</span>
                            <span class="ml-6 flex items-center">
                                <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                </svg>
                                <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="White" id="White"><label class="text-xs" for="White">White</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Beige" id="Beige"><label class="text-xs" for="Beige">Beige</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Blue" id="Blue"><label class="text-xs" for="Blue">Blue</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Brown" id="Brown"><label class="text-xs" for="Brown">Brown</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Green" id="Green"><label class="text-xs" for="Green">Green</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Purple" id="Purple"><label class="text-xs" for="Purple">Purple</label></li>
                            </ul>
                        </div>
                    </div>
                    <!-- category -->
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4 mt-3">
                        <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                            <span class="text-sm">Category</span>
                            <span class="ml-6 flex items-center">
                                <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                </svg>
                                <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="New Arrivals" id="New Arrivals"><label class="text-xs" for="New Arrivals">New Arrivals</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Sale" id="Sale"><label class="text-xs" for="Sale">Sale</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Travel" id="Travel"><label class="text-xs" for="Travel">Travel</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Organization" id="Organization"><label class="text-xs" for="Organization">Organization</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="Accessories" id="Accessories"><label class="text-xs" for="Accessories">Accessories</label></li>
                            </ul>
                        </div>
                    </div>

                    <!-- size -->
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4 mt-3">
                        <button @click="open = !open" type="button" class="flex w-full justify-between items-center text-left text-gray-800 font-medium text-lg">
                            <span class="text-sm">Size</span>
                            <span class="ml-6 flex items-center">
                                <svg class="h-5 w-5" x-show="!open" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                </svg>
                                <svg class="h-5 w-5" x-show="open" viewBox="0 0 20 20" fill="currentColor" style="display: none;">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size2L" id="size2L"><label class="text-xs" for="size2L">2L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size6L" id="size6L"><label class="text-xs" for="size6L">6L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size12L" id="size12L"><label class="text-xs" for="size12L">12L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size18L" id="size18L"><label class="text-xs" for="size18L">18L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size20L" id="size20L"><label class="text-xs" for="size20L">20L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px]" name="size40L" id="size40L"><label class="text-xs" for="size40L">40L</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
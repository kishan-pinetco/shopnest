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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@latest/dist/cdn.min.js" defer></script>

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

        .card:hover {
            box-shadow: 1px 1px 10px #4b5563;
            /* card shadow transition */
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 0.2s;
        }

        .opacityTransition {
            transition: opacity 0.4s ease;
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


        .product-card {
            display: none;
            /* Hide all cards initially */
            box-sizing: border-box;
            /* Include padding and border in the element's total width and height */
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination-btn {
            background-color: #4b5563;
            border: none;
            width: 1.5rem;
            height: 1.5rem;
            margin: 0 5px;
            cursor: pointer;
            font-weight: 500;
            color: white;
            border-top-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .pagination-btn:hover {
            background-color: #586474;
        }

        .pagination-btn:focus {
            background-color: #586474;
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

            $('#header, #main-content, #topBar').addClass('disabled-content opacityTransition');

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

            $('#header, #main-content, #topBar').removeClass('disabled-content');

            setTimeout(function() {
                closeSidebar.removeClass('filter-sidebar-close').hide();
            }, 300);
            // $('body').fadeTo(800,1);   
        }
    </script>
</head>

<body class="outfit">
    <div id="topBar" class="p-1 flex justify-between items-center gap-3 px-5">
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
            <a class="flex items-center text-xs gap-2 px-2 h-10" href="/shopnest/pages/track_order.php">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M492.522 118.3 266.433 3.743l-.094-.047c-10.067-5.012-22.029-4.9-32.002.3L137.368 55.46c-.788.334-1.545.739-2.27 1.205L18.896 118.337C7.24 124.44 0 136.398 0 149.559V362.44c0 13.161 7.24 25.118 18.896 31.221l215.345 114.292.097.051a35.255 35.255 0 0 0 16.297 3.981 35.232 35.232 0 0 0 15.704-3.682l226.183-114.604C504.538 387.69 512 375.618 512 362.18V149.82c0-13.439-7.462-25.512-19.478-31.52zM248.237 30.569a5.26 5.26 0 0 1 4.705-.042l211.629 107.23-82.364 41.005L175.308 69.275l72.929-38.706zM235.424 474.63 32.91 367.147l-.097-.051a5.237 5.237 0 0 1-2.824-4.656V163.091l205.435 107.124V474.63zm15.153-230.335L46.272 137.76l97.024-51.493L349.171 195.21l-98.594 49.085zm231.432 117.883a5.22 5.22 0 0 1-2.911 4.703L265.414 475.152V270.408l98.386-48.982v51.355c0 8.281 6.714 14.995 14.995 14.995s14.995-6.714 14.995-14.995v-66.286l88.219-43.92v199.603z" fill="#000000" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>Track Order
            </a>

            <a class="flex items-center text-xs gap-2 px-2 h-10" href="/shopnest/pages/help_center.php">
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
    include "../pages/_navbar.php";
    ?>
    <div class="px-3 sm:px-16 outfit mt-5" id="main-content">
        <div class="flex justify-between items-center border-b-2 border-gray-300 pb-3">
            <div>
                <h1 class="text-lg sm:text-3xl text-gray-800">New Arrivals</h1>
            </div>
            <div class="flex gap-2 relative">
                <div x-data="{ open: false, selected: 'Sort' }" class="relative inline-block text-sm text-gray-800">
                    <!-- Dropdown Button -->
                    <button @click="open = !open" class="w-fit focus:outline-none cursor-pointer">
                        <span x-text="selected"></span>
                        <svg class="inline w-5 h-5 ml-2" fill="none" stroke="#808080" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @keydown.escape.window="open = false" @click.outside="open = false" class="transition absolute right-0 mt-2 w-40 bg-white border-2 border-gray-300 text-gray-700 rounded-xl shadow-lg z-10 overflow-hidden text-sm divide-y-2 divide-gray-300" x-cloak>
                        <a @click="selected = 'All'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">All</a>
                        <a @click="selected = 'Most Popular'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">Most Popular</a>
                        <a @click="selected = 'Best Rating'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">Best Rating</a>
                        <a @click="selected = 'Newest'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">Newest</a>
                        <a @click="selected = 'Low to High'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">Price: Low to High</a>
                        <a @click="selected = 'High to Low'; open = false" class="block px-4 py-2 hover:bg-gray-200 cursor-pointer">Price: High to Low</a>
                    </div>
                </div>


                <!-- sidebar button -->
                <button onclick="filterSideBarOpen()" class="lg:hidden focus:outline-none">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M53.39 8H10.61a5.61 5.61 0 0 0-4.15 9.38L25 37.77V57a2 2 0 0 0 1.13 1.8 1.94 1.94 0 0 0 .87.2 2 2 0 0 0 1.25-.44l3.75-3 6.25-5A2 2 0 0 0 39 49V37.77l18.54-20.39A5.61 5.61 0 0 0 53.39 8z" fill="#4b5563" opacity="1" data-original="#4b5563"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex jutify-center">
            <div class="mt-7 w-64 hidden lg:block">
                <div class="border-b-2 border-gray-300 pb-4">
                    <ul class="space-y-2 text-sm text-gray-800">
                        <li><a href="">Totes</a></li>
                        <li><a href="">Backpacks</a></li>
                        <li><a href="">Travel Bags</a></li>
                        <li><a href="">Hip Bags</a></li>
                        <li><a href="">Laptop Sleeves</a></li>
                    </ul>
                </div>
                <div>
                    <!-- color -->
                    <div class="border-b-2 border-gray-300 pb-4 mt-3">
                        <h1 class="text-gray-800 font-medium text-sm">Colour</h1>
                        <div class="mt-3 text-gray-600">
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="White1" id="White1"><label class="text-sm" for="White1">White</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Beige1" id="Beige1"><label class="text-sm" for="Beige1">Beige</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Blue1" id="Blue1"><label class="text-sm" for="Blue1">Blue</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Brown1" id="Brown1"><label class="text-sm" for="Brown1">Brown</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Green1" id="Green1"><label class="text-sm" for="Green1">Green</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Purple1" id="Purple1"><label class="text-sm" for="Purple1">Purple</label></li>
                            </ul>
                        </div>
                    </div>
                    <!-- category -->
                    <div class="border-b-2 border-gray-300 pb-4 mt-3">
                        <h1 class="text-gray-800 font-medium text-sm">Category</h1>
                        <div class="mt-2 text-gray-700">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="New Arrivals" id="New Arrivals"><label class="text-sm" for="New Arrivals">New Arrivals</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Sale" id="Sale"><label class="text-sm" for="Sale">Sale</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Travel" id="Travel"><label class="text-sm" for="Travel">Travel</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Organization" id="Organization"><label class="text-sm" for="Organization">Organization</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="Accessories" id="Accessories"><label class="text-sm" for="Accessories">Accessories</label></li>
                            </ul>
                        </div>
                    </div>

                    <!-- size -->
                    <div class="border-b-2 border-gray-300 pb-4 mt-3">
                        <h1 class="text-gray-800 font-medium text-sm">Size</h1>
                        <div class="mt-2 text-gray-700">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size2L" id="size2L"><label class="text-sm" for="size2L">2L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size6L" id="size6L"><label class="text-sm" for="size6L">6L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size12L" id="size12L"><label class="text-sm" for="size12L">12L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size18L" id="size18L"><label class="text-sm" for="size18L">18L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size20L" id="size20L"><label class="text-sm" for="size20L">20L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-gray-700 focus:ring-gray-700" name="size40L" id="size40L"><label class="text-sm" for="size40L">40L</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card div -->
            <div class="flex flex-col items-center mt-10 lg:ml-10 w-full">
                <div class="product-container grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10">
                    <!-- Product cards will be displayed here -->
                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-indigo-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-card ring-2 ring-gray-300  rounded-tl-xl rounded-br-xl h-fit w-60 overflow-hidden">
                        <div class="p-2 flex justify-center">
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="product-card__hero-image css-1fxh5tw sm:w-56 rounded-tl-xl rounded-br-xl" loading="lazy" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e80796-373d-46fe-a161-088d7a1ca383/air-force-1-07-shoes-VWCc04.png">
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="px-2">
                                <p class="font-medium">Nike Air Force 1 '07</p>
                            </div>
                            <div class="px-2 flex justify-between items-center">
                                <p class="font-medium space-x-1.5"><span class="text-gray-900">₹1,23,566</span><del class="text-xs">₹1,23,566</del></p>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 rounded-tl-md rounded-br-md px-2 py-0.5 flex items-center gap-1">
                                        <h1 class="font-semibold text-xs text-white">0.0</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-2.5 h-2.5 m-auto fill-current text-white">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm ml-2 text-gray-700 tracking-wide font-semibold">(0)</span>
                                </div>
                            </div>
                            <div class="bg-gray-600 py-1.5 flex justify-center">
                                <a href="" class="bg-white text-gray-900 border-2 border-gray-800 rounded-tl-xl rounded-br-xl w-40 py-1 text-sm font-semibold text-center">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more product cards as needed -->
                </div>

                <div class="pagination flex justify-center items-center gap-2">
                    <button class=" bg-gray-600 h-6 w-6 flex justify-center items-center text-white rounded-tl-md rounded-br-md cursor-pointer" id="prev-page"><svg class="w-3" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                            </g>
                        </svg></button> <!-- Left Arrow -->

                    <div class="pagination-buttons"></div>

                    <button class="bg-gray-600 h-6 w-6 flex justify-center items-center text-white rounded-tl-md rounded-br-md cursor-pointer" id="next-page"><svg class="w-3" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                            </g>
                        </svg>
                    </button> <!-- Right Arrow -->
                </div>
            </div>
        </div>
    </div>

    <!-- pagination js -->
    <script>
        $(document).ready(function() {
            var rowsPerPage = 2; // Always show 2 rows per page
            var currentPage = 1;
            var totalPages = 0;
            var maxVisiblePages = 3; // Maximum number of visible pages

            function getCardsPerRow() {
                if (window.innerWidth >= 1536) {
                    return 4; // 2xl:grid-cols-4
                } else if (window.innerWidth >= 1280) {
                    return 3; // xl:grid-cols-3
                } else if (window.innerWidth >= 1024) {
                    return 2; // lg:grid-cols-2
                } else {
                    return 1; // sm:grid-cols-1
                }
            }

            function showPage(page) {
                var cardsPerRow = getCardsPerRow();
                var itemsPerPage = cardsPerRow * rowsPerPage;
                var $productCards = $('.product-card');
                var totalItems = $productCards.length;

                // Recalculate total pages when columns per row changes
                totalPages = Math.ceil(totalItems / itemsPerPage);

                // Ensure the current page is within the valid range
                if (page > totalPages) {
                    page = totalPages;
                    currentPage = page;
                }

                // Hide all product cards
                $productCards.hide();

                // Calculate the range of product cards to show
                var startIndex = (page - 1) * itemsPerPage;
                var endIndex = startIndex + itemsPerPage;

                // Show product cards for the current page
                $productCards.slice(startIndex, endIndex).show();

                // Update pagination buttons
                createPagination();

                // Update arrow buttons
                $('#prev-page').prop('disabled', page === 1);
                $('#next-page').prop('disabled', page === totalPages);
            }

            function createPagination() {
                var $paginationButtons = $('.pagination-buttons');
                $paginationButtons.empty(); // Clear existing pagination buttons

                if (totalPages <= maxVisiblePages) {
                    // Show all pages if total pages are less than or equal to maxVisiblePages
                    for (var i = 1; i <= totalPages; i++) {
                        $paginationButtons.append('<button class="pagination-btn" data-page="' + i + '">' + i + '</button>');
                    }
                } else {
                    // Show pagination with dots
                    if (currentPage <= Math.floor(maxVisiblePages / 2) + 1) {
                        // Show first few pages and last page with dots
                        for (var i = 1; i <= maxVisiblePages - 1; i++) {
                            $paginationButtons.append('<button class="pagination-btn" data-page="' + i + '">' + i + '</button>');
                        }
                        $paginationButtons.append('<span class="dots">...</span>');
                        $paginationButtons.append('<button class="pagination-btn" data-page="' + totalPages + '">' + totalPages + '</button>');
                    } else if (currentPage > Math.floor(maxVisiblePages / 2) && currentPage <= totalPages - Math.floor(maxVisiblePages / 2)) {
                        // Show first page, dots, current page, dots, and last page
                        $paginationButtons.append('<button class="pagination-btn" data-page="1">1</button>');
                        $paginationButtons.append('<span class="dots">...</span>');

                        // Ensure three pages around the current page
                        var startPage = Math.max(currentPage - 1, 2);
                        var endPage = Math.min(currentPage + 1, totalPages - 1);
                        for (var i = startPage; i <= endPage; i++) {
                            $paginationButtons.append('<button class="pagination-btn" data-page="' + i + '">' + i + '</button>');
                        }

                        $paginationButtons.append('<span class="dots">...</span>');
                        $paginationButtons.append('<button class="pagination-btn" data-page="' + totalPages + '">' + totalPages + '</button>');
                    } else {
                        // Show first page, dots, and last few pages
                        $paginationButtons.append('<button class="pagination-btn" data-page="1">1</button>');
                        $paginationButtons.append('<span class="dots">...</span>');

                        // Ensure last few pages are shown
                        for (var i = totalPages - (maxVisiblePages - 2); i <= totalPages; i++) {
                            $paginationButtons.append('<button class="pagination-btn" data-page="' + i + '">' + i + '</button>');
                        }
                    }
                }

                // Add event listeners for pagination buttons
                $('.pagination-btn').on('click', function() {
                    var page = $(this).data('page');
                    currentPage = page;
                    showPage(page);
                });
            }

            // Initialize pagination
            showPage(1);

            // Recalculate layout on window resize
            $(window).on('resize', function() {
                showPage(currentPage); // Show the correct page after resizing
            });

            // Add event listeners for arrows
            $('#prev-page').on('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            $('#next-page').on('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });
        });
    </script>

    <!-- sidebar -->
    <!-- add hidden in container -->
    <div id="filterSidebarContainer" class="hidden bg-gray-50 pb-3 font-medium fixed top-0 right-0 w-fit h-[100vh] overflow-y-auto z-50 sidebarScroll" x-cloak>
        <div id="filterSidebarHeader" class="p-2 bg-gray-200 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <h1 class="text-black"><a href="">Hello, User</a></h1>
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
                        <li><a href="">Backpacks</a></li>
                        <li><a href="">Travel Bags</a></li>
                        <li><a href="">Hip Bags</a></li>
                        <li><a href="">Laptop Sleeves</a></li>
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
                        <div x-show="open" class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="White2" id="White2"><label class="text-xs" for="White2">White</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Beige2" id="Beige2"><label class="text-xs" for="Beige2">Beige</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Blue2" id="Blue2"><label class="text-xs" for="Blue2">Blue</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Brown2" id="Brown2"><label class="text-xs" for="Brown2">Brown</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Green2" id="Green2"><label class="text-xs" for="Green2">Green</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Purple2" id="Purple2"><label class="text-xs" for="Purple2">Purple</label></li>
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
                        <div x-show="open" class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="New Arrivals2" id="New Arrivals2"><label class="text-xs" for="New Arrivals2">New Arrivals</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Sale2" id="Sale2"><label class="text-xs" for="Sale2">Sale</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Travel2" id="Travel2"><label class="text-xs" for="Travel2">Travel</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Organization2" id="Organization2"><label class="text-xs" for="Organization2">Organization</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="Accessories2" id="Accessories2"><label class="text-xs" for="Accessories2">Accessories</label></li>
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
                        <div x-show="open" class="mt-2 text-gray-600" style="display: none;">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size2L2" id="size2L2"><label class="text-xs" for="size2L2">2L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size6L2" id="size6L2"><label class="text-xs" for="size6L2">6L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size12L2" id="size12L2"><label class="text-xs" for="size12L2">12L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size18L2" id="size18L2"><label class="text-xs" for="size18L2">18L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size20L2" id="size20L2"><label class="text-xs" for="size20L2">20L</label></li>
                                <li class="flex items-center gap-2"><input type="checkbox" class="rounded h-[15px] w-[15px] text-indigo-600 focus:ring-indigo-600" name="size40L2" id="size40L2"><label class="text-xs" for="size40L2">40L</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include "../pages/_footer.php";
    ?>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>
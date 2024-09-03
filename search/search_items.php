<?php

    include "../include/connect.php";

    if(isset($_GET['searchName'])){
        $searchName = $_GET['searchName'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $searchName;?></title>

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
                <h1 class="text-lg sm:text-3xl"><?php echo isset($_GET['Category']) ? $_GET['Category'] : $searchName ?></h1>
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
            </div>
        </div>
        <hr class="mt-2">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:ml-10 mt-2 w-full p-5 z-40">
            <?php 
                if ($selectedValue === 'High to Low') {
                    $find_items = "SELECT * FROM products WHERE keywords LIKE '%$searchName%' ORDER BY MRP ASC";
                }elseif ($selectedValue === "Low to High") { 
                    $find_items = "SELECT * FROM products WHERE keywords LIKE '%$searchName%' ORDER BY MRP DESC";
                }elseif ($selectedValue === 'Newest'){
                    $find_items = "SELECT * FROM products WHERE keywords LIKE '%$searchName%'";
                }elseif ($selectedValue === 'Best Rating'){
                    $find_items = "SELECT p.*, AVG(r.Rating) AS AverageRating
                        FROM products p
                        LEFT JOIN user_review r ON p.product_id = r.product_id
                       WHERE p.keywords LIKE '%$searchName%'
                        GROUP BY p.product_id
                        ORDER BY AverageRating DESC";
                }else{
                    $find_items = "SELECT * FROM products WHERE keywords LIKE '%$searchName%'";
                }
                $find_query = mysqli_query($con, $find_items);

                if(mysqli_num_rows($find_query) > 0){
                    
                    while ($item = mysqli_fetch_array($find_query)) {
                        $product_id = $item["product_id"];
                        $find_rating = "SELECT * FROM user_review WHERE product_id = '$product_id'";
                        $review_query = mysqli_query($con, $find_rating);
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
                            <div class="p-3 border rounded-lg h-fit hover:shadow-xl transition cursor-pointer" onclick="window.location.href = '../product/product_detail.php?product_id=<?php echo $item['product_id']; ?>'">
                                <div>
                                    <img src="<?php echo '../src/product_image/product_profile/' . $item['image_1']; ?>" alt="" class="product-card__hero-image css-1fxh5tw h-56 w-56 object-cover m-auto" loading="lazy" sizes="">
                                </div>
                                <div class="mt-2 translate-x-2">
                                    <a href="../product/product_detail.php?product_id=<?php echo $item['product_id'] ?>" class="text-base font-medium line-clamp-2 cursor-pointer"><?php echo $item['title'] ?></a>
                                    <p class="space-x-2">
                                        <span class="text-lg font-medium text-indigo-500">₹<?php echo $item['MRP'] ?></span>
                                        <del class="text-xs font-normal">₹<?php echo $item['Your_Price'] ?></del>
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
                }else{
                    echo "Product Wasn't Found";
                }
            ?>
        </div>
    </div>
</body>
</html>
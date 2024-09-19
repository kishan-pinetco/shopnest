<?php
    session_start();

    include "../include/connect.php";

    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        
        $product_find = "SELECT * FROM items WHERE product_id = '$product_id'";
        $product_query = mysqli_query($con,$product_find);
        
        $res = mysqli_fetch_assoc($product_query);

        $select = "SELECT * FROM items WHERE product_id = '$product_id'";
        $query = mysqli_query($con, $select);

        $first_img = '';

        $first_img1 = '';
        $first_img2 = '';
        $first_img3 = '';
        $first_img4 = '';

        $Color_of_image = '';
        $first_title = '';

        while($row = mysqli_fetch_array($query)) {

            $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
            $review_query = mysqli_query($con, $get_reviews);

            $totalReviews = mysqli_num_rows($review_query);

            $sum = 0;
            $count = 0;
            if ($totalReviews > 0) {         
                while ($data = mysqli_fetch_assoc($review_query)) {
                    $rating = str_replace(",", "", $data['Rating']);
                    $sum += (float)$rating;
                    $count++;
                }

                $average = $sum / $count;
                $formatted_average = number_format($average, 1);
            }else {
                $formatted_average = "0.0";
            }
            
            // for image
            $json_img = $row["image"];

            $color_img = json_decode($json_img, true);

            foreach($color_img as $key => $value) {
                $first_color = $key;
                break;
            }

            $first_img = isset($color_img[$first_color]) ? $color_img[$first_color] : '';

            $first_img1 = $first_img['img1'];
            $first_img2 = $first_img['img2'];
            $first_img3 = $first_img['img3'];
            $first_img4 = $first_img['img4'];

            $colors = $row['color'];

            // for the title
            $json_title = $row['title'];
            $title_json = json_decode($json_title, true);

            foreach($title_json as $key => $value) {
                $first_color_title = $key;
                break;
            }

            $first_name = isset($title_json[$first_color_title]) ? $title_json[$first_color_title] : ''; 
            $first_title = $first_name['product_name'];

        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['colorName'])) {
                $colorName = htmlspecialchars($_POST['colorName'], ENT_QUOTES, 'UTF-8');
                
                $first_img = isset($color_img[$colorName]) ? $color_img[$colorName] : '';
                
                $Color_of_image = $_POST['colorName'];

                $first_img1 = $first_img['img1'];
                $first_img2 = $first_img['img2'];
                $first_img3 = $first_img['img3'];
                $first_img4 = $first_img['img4'];

                $first_name = isset($title_json[$colorName]) ? $title_json[$colorName] : ''; 
                $first_title = $first_name['product_name'];
            }
        }

        $defaultColor = '';

        foreach($color_img as $key => $value) {
            $defaultColor = $key;
            break;
        }
        
        // for buy button
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['colorChoice'])) {
                $_SESSION['selectedColors'] = htmlspecialchars($_POST['colorChoice'], ENT_QUOTES, 'UTF-8');
                $_SESSION['product_titles'] = $first_title;
            } else {
                if (!isset($_SESSION['selectedColors'])) {
                    $_SESSION['selectedColors'] = $defaultColor;
                    $_SESSION['product_titles'] = $first_title; 
                }
            }
        
            $selectedColor = $_SESSION['selectedColors'];
            $product_first_name = $_SESSION['product_titles'];
            
            if (isset($_POST['buyBtn'])) {
                $myColor = isset($_SESSION['selectedColors']) ? $_SESSION['selectedColors'] : $defaultColor;
                $myTitle = isset($_SESSION['product_titles']) ? $_SESSION['product_titles'] : '';

                $size = isset($_POST['size']) ? $_POST['size'] : null;
                $qty = isset($_POST['qty']) ? $_POST['qty'] : null;

                if(isset($_COOKIE['user_id'])){
                    $encoded_product_id = urlencode($product_id);
                    $encoded_size = urlencode($size);
                    $encoded_qty = urlencode($qty);

                    ?>
                        <?php
                            unset($_SESSION['selectedColors']);
                            unset($_SESSION['product_titles']);
                        ?>
                        <!-- <script>window.location.href = 'checkout.php?product_id=<?php echo urlencode($product_id); ?>&title=<?php echo $myTitle; ?>&color=<?php echo $myColor; ?>&size=<?php echo $size; ?>&qty=<?php echo $qty;?>'</script> -->
                    <?php

                }else{
                    
                    ?>
                        <?php
                            unset($_SESSION['selectedColors']);
                            unset($_SESSION['product_titles']);
                        ?>
                        <!-- <script>window.location.href = '../authentication/user_auth/user_login.php'</script> -->
                    <?php
                }
            }
        }

        // for add to cart
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['colorChoice'])) {
                $_SESSION['selectedColor'] = htmlspecialchars($_POST['colorChoice'], ENT_QUOTES, 'UTF-8');
                $_SESSION['product_title'] = $first_title;
            } else {
                if (!isset($_SESSION['selectedColor'])) {
                    $_SESSION['selectedColor'] = $defaultColor;
                    $_SESSION['product_title'] = $first_title; 
                }
            }
        
            $selectedColor = $_SESSION['selectedColor'];
            $products_first_name = $_SESSION['product_title'];
            
            if (isset($_POST['AddtoCart'])) {
                $myColor = isset($_SESSION['selectedColor']) ? $_SESSION['selectedColor'] : $defaultColor;
                $myTitle = isset($_SESSION['product_title']) ? $_SESSION['product_title'] : $first_title;

                $size = isset($_POST['size']) ? $_POST['size'] : null;
                $qty = isset($_POST['qty']) ? $_POST['qty'] : null;
                
                $encoded_product_id = urlencode($product_id);
                $encoded_size = urlencode($size);
                $encoded_qty = urlencode($qty);

                unset($_SESSION['selectedColor']);
                unset($_SESSION['product_titles']);
                ?>
                    <!-- <script>window.location.href = '../shopping/add_to_cart.php?product_id=<?php echo urlencode($product_id); ?>&title=<?php echo $myTitle; ?>&color=<?php echo $myColor; ?>&size=<?php echo $encoded_size; ?>&qty=<?php echo $qty;?>'</script> -->
                <?php
            }
        }


        $vendor_id = $res['vendor_id'];

        $vendor_find = "SELECT * FROM vendor_registration WHERE vendor_id  = '$vendor_id'";
        $vendor_query = mysqli_query($con,$vendor_find);
        $ven = mysqli_fetch_assoc($vendor_query);

        $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
        $review_query = mysqli_query($con,$get_reviews);

        $rev = mysqli_fetch_assoc($review_query);
        $totalReviews = mysqli_num_rows($review_query);
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
    <title><?php echo isset($_GET['product_id']) ? $first_title : 'Product Details' ?></title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- swiper css -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mySwiper .swiper-slide {
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .zoom-container {
            position: relative;
            overflow: hidden;
            cursor: zoom-in;
        }

        .zoom-image {
            transition: transform 0.1s ease;
        }

        /* When zooming in */
        .zoom-container.zoomed-in .zoom-image {
            transform: scale(2.5);
            /* Adjust this value for zoom intensity */
            cursor: zoom-out;
        }
    </style>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <!-- navbar -->
    <?php
        include "../pages/_navbar.php";
    ?>
    
    <!-- product -->
    <div class="max-w-screen-xl m-auto grid grid-cols-1 md:grid-cols-2 gap-y-1 mt-12 px-8 lg:px-0">
        <div class="">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 w-auto h-auto md:h-96">
                <div class="swiper-wrapper h-52 md:h-full">
                    <div class="swiper-slide w-auto h-auto zoom-container">
                        <img class="h-full zoom-image" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img1 : '../src/sample_images/product_1.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto zoom-container">
                        <img class="h-full zoom-image" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img2 : '../src/sample_images/product_2.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto zoom-container">
                        <img class="h-full zoom-image" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img3 : '../src/sample_images/product_3.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto zoom-container">
                        <img class="h-full zoom-image" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img4 : '../src/sample_images/product_4.jpg' ?>" />
                    </div>
                </div>
            </div>
            <!-- image zoom effect js -->
            <script>
                document.querySelectorAll('.zoom-container').forEach(function(container) {
                    const zoomImage = container.querySelector('.zoom-image');

                    // Handle zoom on hover
                    container.addEventListener('mouseenter', function() {
                        container.classList.add('zoomed-in');
                    });

                    // Handle zoom out on mouse leave
                    container.addEventListener('mouseleave', function() {
                        container.classList.remove('zoomed-in');
                        zoomImage.style.transformOrigin = 'center center'; // Reset zoom origin
                    });

                    // Handle cursor move and zoom positioning
                    container.addEventListener('mousemove', function(e) {
                        // Get the position of the container
                        const containerRect = container.getBoundingClientRect();
                        const xPercent = ((e.clientX - containerRect.left) / containerRect.width) * 100;
                        const yPercent = ((e.clientY - containerRect.top) / containerRect.height) * 100;

                        // Set the transform origin of the image based on mouse position
                        zoomImage.style.transformOrigin = `${xPercent}% ${yPercent}%`;
                    });
                });
            </script>
            <div thumbsSlider="" class="swiper mySwiper md:w-80 h-auto mt-6 px-2">
                <div class="swiper-wrapper flex item-center justify-center">
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img1 : '../src/sample_images/product_1.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img2 : '../src/sample_images/product_2.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img3 : '../src/sample_images/product_3.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $first_img4 : '../src/sample_images/product_4.jpg' ?>" />
                    </div>
                </div>
            </div>
        </div>
        <form action="" Method="post">
            <div class="flex flex-col gap-3 w-full mt-12 px-2">
                <div class="flex flex-col gap-2">
                    <h1 class="text-base font-medium text-[#1d2128] leading-6 md:leading-10 md:font-medium md:text-[28px]"><?php echo isset($_GET['product_id']) ? $first_title : 'Product title' ?></h1>
                </div>
                <!-- vendor Store -->
                <a href="../vendor/vendor_store.php?vendor_id=<?php echo $ven['vendor_id'];?>" class="text-lg text-gray-600 font-bold hover:underline cursor-pointer max-w-max">Visit a <span><?php echo isset($product_id) ? $ven['username'] : 'vendor store Name';?></span> Store</a>
                <!-- price -->
                <div class="flex items-center justify-between flex-wrap gap-y-3 mt-3">
                    <div class="flex items-baseline gap-2">
                        <span class="text-2xl font-medium">₹<?php echo isset($_GET['product_id']) ? $res['MRP'] : 'MRP' ?></span>
                        <del class="text-sm font-normal">₹<?php echo isset($_GET['product_id']) ? $res['Your_Price'] : 'Product price' ?></del>
                    </div>
                    <?php 
                    
                        $product_qty = $res['Quantity'];

                        if($product_qty > 5){
                            ?>
                                <p class="text-[#13bc96] text-sm font-medium">Available in stock</p>
                            <?php
                        }else{
                            ?>
                                <p class="text-red-500 text-sm font-medium">Only Few Product in stock</p>
                            <?php
                        }
                    
                    ?>
                </div>
                <!-- color -->
                <div class="mt-3">
                    <h1 class="text-xl font-medium">Colors:</h1>
                    <div class="flex item-center gap-4 mt-2">
                    <?php
                        $filter_pcolor = explode(',', $colors);
                        foreach($filter_pcolor as $index => $pcolor){
                           ?>
                                <form method="post" action="" style="display: inline;">
                                    <input type="hidden" name="colorName" value="<?php echo htmlspecialchars($pcolor, ENT_QUOTES, 'UTF-8'); ?>">
                                    <button type="submit" style="display: none;"></button>
                                    <label for="submit_<?php echo $index; ?>" class="border-2 border-black flex items-center gap-2 py-1 px-2 rounded-tl-xl rounded-br-xl text-center cursor-pointer hover:bg-gray-200">
                                        <h1 class="text-lg"><?php echo htmlspecialchars($pcolor, ENT_QUOTES, 'UTF-8'); ?>black</h1>
                                    </label>
                                    <input type="radio" id="submit_<?php echo $index; ?>" name="colorChoice" value="<?php echo htmlspecialchars($pcolor, ENT_QUOTES, 'UTF-8'); ?>" onclick="this.form.submit();" style="display: none;">
                                </form>
                            <?php
                        }
                    ?>
                    </div>
                </div>
                <!-- size -->
                <div>
                    <div class="md:col-span-2 mt-3">
                        <?php
                            if(isset($product_id)){
                                if($res['size'] == '-'){
                                    echo '';
                                }else{
                                    ?>
                                        <label for="size" class="text-xl font-medium">Size:</label>
                                        <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-500 focus:ring-2 focus:ring-gray-500" value="">
                                            <?php
                                                $product_size[] = $res['size'];
                                                foreach($product_size as $productSize){
                                                    $size_array = explode(',', $productSize);
                                                    foreach($size_array as $size){
                                                        $sz = trim($size);
                                                        ?>
                                                            <option value="<?php echo $sz?>"><?php echo $sz?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    <?php
                                }
                            }else{
                                echo "size of products";
                            }
                        ?>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <label for="qty">QTY:</label>
                    <div class="flex items-center flex-wrap gap-2">
                        <select name="qty" id="qty" class="h-10 border mt-1 rounded px-4 w-16 bg-gray-50 focus:border-gray-500 focus:ring-2 focus:ring-gray-500" value="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-6">
                    <div class="flex item-center gap-1">
                        <span class="bg-gray-900 rounded-tl-lg rounded-br-lg px-2 py-1 flex items-center gap-1">
                            <h1 class="font-semibold text-base text-white"><?php echo $formatted_average?></h1>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-3 h-3 m-auto fill-current text-white">
                                <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                            </svg>
                        </span>
                        <span class="text-sm ml-2 mt-1">(<?php echo $totalReviews ?>)</span>
                    </div>
                    <p class="text-sm font-medium text-[red]">Free Delivery</p>
                </div>
                <hr>
                <div class="mt-4 flex flex-col gap-3 md:flex-row">
                    <input type="submit" name="AddtoCart" value="Add To Cart" class="text-sm font-medium text-white bg-gray-700 px-12 py-4 rounded-tl-xl rounded-br-xl cursor-pointer hover:bg-gray-800 transition duration-200">
                    <input type="submit" name="buyBtn" value="Buy now" class="text-sm font-medium text-gray-700 border-2 border-gray-700 px-12 py-4 rounded-tl-xl rounded-br-xl text-center cursor-pointer">
                </div>
            </div>
        </form>

        
    </div>

    <!-- product Details -->
    <div class="py-12 px-2 xl:px-52">
        <div class="border rounded-md p-8">
            <div>
                <h1 class="text-3xl font-semibold md:text-5xl"><?php echo isset($_GET['product_id']) ? $res['Type'] : 'Product Name' ?></h1>
                <hr class="my-6">
                <div class="">
                    <span class="text-xl font-medium"><?php echo isset($_GET['product_id']) ? $first_title : 'Product Name' ?></span>
                </div>
                <div class="grid grid-cols-1 mt-8 gap-2 md:grid-cols-1 m-auto">
                    <img class="border w-full h-full object-cover m-auto" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_cover/' . $res['cover_image_1'] : '../src/sample_images/cover_1.jpg' ?>" alt="">
                    <img class="border w-full h-full object-cover m-auto" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_cover/' . $res['cover_image_2'] : '../src/sample_images/cover_2.jpg' ?>" alt="">
                    <img class="border w-full h-full object-cover m-auto" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_cover/' . $res['cover_image_3'] : '../src/sample_images/cover_3.jpg' ?>" alt="">
                    <img class="border w-full h-full object-cover m-auto" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_cover/' . $res['cover_image_4'] : '../src/sample_images/cover_4.jpg' ?>" alt="">
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-medium">More information</h2>
                    <div class="mt-3 flex flex-col gap-y-3">
                        <div class="flex">
                            <li></li>
                            <div>
                                <p><?php echo isset($_GET['product_id']) ? $res['Description'] : 'Product Description' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-12">
            <div class="grid grid-cols-1 gap-16 lg:grid-cols-3">
                <div class="col-span-2 md:col-span-1">
                    <span class="text-2xl font-medium">Rating</span>
                    <div class="border p-5 mt-3">
                        <div class="flex flex-col items-center my-6 md:items-start md:flex-row">
                            <?php
                                if(isset($product_id)){
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
                                }
                            ?>
                            <h1 class="text-7xl font-medium"><?php echo isset($formatted_average) ? $formatted_average : '0.0'?></h1>
                        </div>
                        <div>
                            <?php
                                $get_rev = "SELECT Rating, COUNT(*) AS count FROM user_review WHERE product_id = '$product_id' GROUP BY Rating";
                                $get_query = mysqli_query($con, $get_rev);

                                $ratings = [
                                    5 => 0,
                                    4 => 0,
                                    3 => 0,
                                    2 => 0,
                                    1 => 0
                                ];
                                $totalReviews = 0;

                                // Fetch the review counts and update the ratings array
                                while ($avg = mysqli_fetch_assoc($get_query)) {
                                    $ratings[$avg['Rating']] = $avg['count'];
                                    $totalReviews += $avg['count'];
                                }

                                function calculateRating($count, $total) {
                                    return ($total > 0) ? round(($count / $total) * 100, 2) : 0;
                                }
                            ?>
                            <?php
                                foreach(range(5, 1) as $star){
                                    ?>
                                        <div class="flex items-center justify-between text-gray-600 text-sm font-medium">
                                            <div class="flex items-center gap-1">
                                                <p><?php echo isset($product_id) ? $star : '0' ; ?></p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                                            </div>
                                            <div class="relative w-full h-2 mx-3 m-auto rounded-md bg-gray-200">
                                                <div class="absolute top-0 left-0 w-full h-2 rounded-md bg-yellow-400" style="width: <?php echo calculateRating($ratings[$star], $totalReviews); ?>%;"></div>
                                            </div>
                                            <span><?php echo isset($product_id) ? $ratings[$star] : '0';?></span>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <hr class="my-6">
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-lg font-medium">Review this product</h1>
                            <span class="text-sm font-normal">Share your thoughts with other customers</span>

                            <?php
                                if (isset($_POST['colorChoice'])) {
                                    $_SESSION['selectedColors'] = htmlspecialchars($_POST['colorChoice'], ENT_QUOTES, 'UTF-8');
                                    $_SESSION['product_titles'] = $first_title;
                                } else {
                                    if (!isset($_SESSION['selectedColors'])) {
                                        $_SESSION['selectedColors'] = $defaultColor;
                                        $_SESSION['product_titles'] = $first_title; 
                                    }
                                }

                                $selectedColor = $_SESSION['selectedColors'];
                                $products_first_name = $_SESSION['product_titles'];

                                if(isset($_COOKIE['user_id'])){
                                    $myColor = isset($_SESSION['selectedColors']) ? $_SESSION['selectedColors'] : $defaultColor;
                                    $myTitle = isset($_SESSION['product_titles']) ? $_SESSION['product_titles'] : '';
                                    
                                    $encoded_product_id = urlencode($product_id);
                                    $encoded_product_id = urlencode($product_id);
                
                                    ?>
                                        <?php
                                            unset($_SESSION['selectedColors']);
                                            unset($_SESSION['product_titles']);
                                        ?>
                                        <a href="add_review.php?product_id=<?php echo $product_id; ?>&title=<?php echo urlencode($myTitle); ?>&color=<?php echo urlencode($myColor); ?>" class="text-sm font-medium text-white text-center bg-gray-700 py-3 hover:bg-gray-800 rounded-tl-xl rounded-br-xl transition duration-200">Write a review</a>
                                    <?php
                
                                }else{
                                    
                                    ?>
                                        <?php
                                            unset($_SESSION['selectedColors']);
                                            unset($_SESSION['product_titles']);
                                        ?>
                                        <a href="../authentication/user_auth/user_login.php" class="text-sm font-medium text-white text-center bg-gray-700 py-3 hover:bg-gray-800 rounded-tl-xl rounded-br-xl transition duration-200">Write a review</a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <?php
                        if(isset($product_id)){

                            ?>
                                <span class="text-2xl font-medium">Customer Reviews (<?php echo isset($totalReviews) ? $totalReviews : '0' ?>)</span>
                                <hr class="mt-3">
                            <?php
                            if(!$rev){
                                ?>
                                    <h1 class="text-gray-700 text-sm font-medium bg-gray-100 text-center py-3 border mt-3">Ther are no review yet.</h1>
                                <?php
                            }
                            ?>
                                <div class="mt-7 flex flex-col gap-8 overflow-y-scroll py-4 h-[60vh] md:px-4">
                                    <?php
                                        $retrive_reivew = "SELECT * FROM user_review WHERE product_id = '$product_id'";
                                        $retrive_reivew_query = mysqli_query($con, $retrive_reivew);

                                        while($row = mysqli_fetch_assoc($retrive_reivew_query)){
                                            ?>
                                                <div>
                                                    <div class="flex flex-col gap-y-4 items-start justify-between md:flex-row">
                                                        <div class="flex item-center justify-center gap-3">
                                                            <img class="w-12 h-12 rounded-full object-cover" src="<?php echo isset($_GET['product_id']) ? '../src/user_dp/' . $row['profile_image'] : 'profile_image' ?>" alt="">
                                                            <div class="flex flex-col gap-0">
                                                                <h2 class="font-medium text-base text-neutral-800"><?php echo isset($_GET['product_id']) ? $row['public_name'] : 'user Name' ?></span></h2>
                                                                <p class="font-medium text-sm text-gray-500"><?php echo isset($_GET['product_id']) ? $row['date'] : 'review date' ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex item-center gap-1">
                                                            <span class="bg-gray-900 rounded-tl-lg rounded-br-lg px-2 py-1 flex items-center gap-1">
                                                                <h1 class="font-semibold text-sm text-white"><?php echo isset($_GET['product_id']) ? floatval($row['Rating']) : 'Rating' ?></h1>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-3 h-3 m-auto fill-current text-white">
                                                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6">
                                                        <h1 class="font-medium mb-3"><?php echo isset($_GET['product_id']) ? $row['Headline'] : 'headline' ?></h1>
                                                        <p><?php echo isset($_GET['product_id']) ? $row['description'] : 'reivew details' ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                            <?php
                                        }
                                    ?>

                                </div>
                            <?php
                        }else{
                            ?>
                                <span class="text-2xl font-medium">Customer Reviews (<?php echo isset($totalReviews) ? $totalReviews : '0' ?>)</span>
                                <hr class="mt-3">
                                <h1 class="text-gray-700 text-sm font-medium bg-gray-100 text-center py-3 border mt-3">Ther are no review yet.</h1>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>
</html>
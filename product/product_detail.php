<?php
    include "../include/connect.php";

    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        
        $product_find = "SELECT * FROM products WHERE product_id = '$product_id'";
        $product_query = mysqli_query($con,$product_find);
        
        $res = mysqli_fetch_assoc($product_query);

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
    <title>Product Details</title>

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
                    <div class="swiper-slide w-auto h-auto">
                        <img class="h-full" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_1'] : '../src/sample_images/product_1.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_2'] : '../src/sample_images/product_2.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_3'] : '../src/sample_images/product_3.jpg' ?>" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_4'] : '../src/sample_images/product_4.jpg' ?>" />
                    </div>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper md:w-80 h-auto mt-6 px-2">
                <div class="swiper-wrapper flex item-center justify-center">
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_1'] : '../src/sample_images/product_1.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_2'] : '../src/sample_images/product_2.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_3'] : '../src/sample_images/product_3.jpg' ?>" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="<?php echo isset($_GET['product_id']) ? '../src/product_image/product_profile/' . $res['image_4'] : '../src/sample_images/product_4.jpg' ?>" />
                    </div>
                </div>
            </div>
        </div>
        <form action="" Method="post">
            <div class="flex flex-col gap-3 w-full mt-12 px-2">
                <div class="flex flex-col gap-2">
                    <h1 class="text-base font-medium text-[#1d2128] leading-6 md:leading-10 md:font-medium md:text-[28px]"><?php echo isset($_GET['product_id']) ? $res['title'] : 'Product title' ?></h1>
                </div>
                <!-- vendor Store -->
                <a href="../vendor/vendor_store.php?vendor_id=<?php echo $ven['vendor_id'];?>" class="text-lg text-indigo-600 font-bold hover:underline cursor-pointer max-w-max">Visit a <span><?php echo isset($product_id) ? $ven['username'] : 'vendor store Name';?></span> Store</a>
                <!-- price -->
                <div class="flex items-center justify-between flex-wrap gap-y-3">
                    <div class="flex items-baseline gap-1">
                        <span class="text-xl font-medium">₹<?php echo isset($_GET['product_id']) ? $res['MRP'] : 'MRP' ?></span>
                        <del class="text-sm font-normal">₹<?php echo isset($_GET['product_id']) ? $res['Your_Price'] : 'Product price' ?></del>
                    </div>
                    <p class="text-[#13bc96] text-sm font-medium">Available in stock</p>
                </div>
                <!-- color -->
                <div class="mt-3">
                    <h1 class="text-xl font-medium">Colors:</h1>
                    <div class="flex item-center gap-4 mt-2" x-data="{ selectedColor: '' }">
                        <?php
                            if(isset($product_id)){
                                $product_colors = [];
                                $product_colors[] = $res['color'];
                                foreach ($product_colors as $colors){
                                    $color_array = explode(',', $colors);

                                    $i = 0;
                                    foreach($color_array as $color){
                                        $clr = trim($color);
                                        $unique_id = 'color-' . $i;
                                        ?>
                                            <div>
                                                <label for="<?php echo $unique_id; ?>" @click="selectedColor = '<?php echo $clr?>'">
                                                    <div :class="{'ring-2': selectedColor === '<?php echo $clr?>'}" class="h-7 w-7 rounded-full cursor-pointer border" style="background-color: <?php echo htmlspecialchars($clr) ?>;"></div>
                                                </label>
                                                <input type="radio" class="hidden" name="products_colors" value="<?php echo htmlspecialchars($clr)?>" id="<?php echo $unique_id; ?>">
                                            </div>
                                        <?php
                                        $i++; 
                                    }
                                }
                            }else{
                                echo "Colors of products";
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
                                        <label for="size">Size</label>
                                        <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
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
                        <select name="qty" id="qty" class="h-10 border mt-1 rounded px-4 w-16 bg-gray-50" value="">
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
                <div class="flex justify-between items-center mt-1">
                    <!-- rating -->
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                        <span class="text-base font-medium text-[#7c818b]">(<?php echo isset($totalReviews) ? $totalReviews : '0' ?>)</span>
                    </div>
                    <p class="text-sm font-medium text-[red]">Free Delivery</p>
                </div>
                <hr>
                <div class="mt-4 flex flex-col gap-3 md:flex-row">
                    <a href="../shopping/add_to_cart.php?product_id=<?php echo $product_id?>" class="text-sm font-medium text-white bg-indigo-600 px-12 py-4 rounded-md cursor-pointer hover:bg-indigo-700 transition duration-200">Add To Cart</a>
                    <input type="submit" name="buyBtn" value="Buy now" class="text-sm font-medium text-indigo-500 border-2 border-indigo-500 px-12 py-4 rounded-md text-center cursor-pointer">
                </div>
            </div>
        </form>

        <?php
            if(isset($_POST['buyBtn'])){
                $color = $_POST['products_colors'];
                if(isset($size)){
                    $size = $_POST['size'];
                }else{
                    $size = null;
                }

                $encoded_color = urlencode($color);
                $encoded_size = urlencode($size);

                $qty = $_POST['qty'];

                if(isset($_COOKIE['user_id'])){
                    ?>
                        <script>window.location.href = 'checkout.php?product_id=<?php echo urlencode($product_id); ?>&color=<?php echo $encoded_color; ?>&size=<?php echo $encoded_size; ?>&qty=<?php echo $qty;?>'</script>
                    <?php
                }else{
                    ?>
                        <script>window.location.href = '../authentication/user_auth/user_login.php'</script>
                    <?php
                }
                
            }
        ?>
    </div>

    <!-- product Details -->
    <div class="py-12 px-2 xl:px-52">
        <div class="border rounded-md p-8">
            <div>
                <h1 class="text-3xl font-semibold md:text-5xl"><?php echo isset($_GET['product_id']) ? $res['Type'] : 'Product Name' ?></h1>
                <hr class="my-6">
                <div class="">
                    <span class="text-xl font-medium"><?php echo isset($_GET['product_id']) ? $res['title'] : 'Product Name' ?></span>
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
                            <h1 class="text-7xl font-medium">0</h1>
                        </div>
                        <div class="flex items-center gap-5 justify-between text-[#7c818b] text-sm font-medium">
                            <div class="flex items-center">
                                <p>5</p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                            </div>
                            <div class="relative w-full h-2 m-auto rounded-sm bg-gray-200"></div>
                            <span>0</span>
                        </div>
                        <div class="flex items-center gap-5 justify-between text-[#7c818b] text-sm font-medium">
                            <div class="flex items-center">
                                <p>4</p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                            </div>
                            <div class="relative w-full h-2 m-auto rounded-sm bg-gray-200"></div>
                            <span>0</span>
                        </div>
                        <div class="flex items-center gap-5 justify-between text-[#7c818b] text-sm font-medium">
                            <div class="flex items-center">
                                <p>3</p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                            </div>
                            <div class="relative w-full h-2 m-auto rounded-sm bg-gray-200"></div>
                            <span>0</span>
                        </div>
                        <div class="flex items-center gap-5 justify-between text-[#7c818b] text-sm font-medium">
                            <div class="flex items-center">
                                <p>2</p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                            </div>
                            <div class="relative w-full h-2 m-auto rounded-sm bg-gray-200"></div>
                            <span>0</span>
                        </div>
                        <div class="flex items-center gap-5 justify-between text-[#7c818b] text-sm font-medium">
                            <div class="flex items-center">
                                <p>1</p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                            </div>
                            <div class="relative w-full h-2 m-auto rounded-sm bg-gray-200"></div>
                            <span>0</span>
                        </div>
                        <hr class="my-6">
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-lg font-medium">Review this product</h1>
                            <span class="text-sm font-normal">Share your thoughts with other customers</span>
                            <a href="<?php echo isset($_COOKIE['user_id']) ? 'add_review.php?product_id=' . htmlspecialchars($product_id) : '../authentication/user_auth/user_login.php'; ?>" class="text-sm font-medium text-white text-center bg-indigo-600 py-4 hover:bg-indigo-700 transition duration-200">Write a review</a>
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
                                    <h1 class="text-[#0f86ff] text-sm font-medium bg-[#ecf6ff] text-center py-3 border mt-3">Ther are no review yet.</h1>
                                <?php
                            }
                            ?>
                                <div class="mt-7 flex flex-col gap-8 overflow-scroll h-[60vh] md:px-4">
                                    <?php
                                        if($rev){
                                            ?>
                                                <div>
                                                    <div class="flex flex-col gap-y-4 items-start justify-between md:flex-row">
                                                        <div class="flex item-center justify-center gap-3">
                                                            <img class="w-12 h-12" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                                                            <div class="flex flex-col gap-0">
                                                                <h2 class="font-medium text-base text-neutral-800">Abhijeet Dabhi</span></h2>
                                                                <p class="font-medium text-sm text-gray-500">16-07-2024</p>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <i class="fa-sharp fa-solid fa-star text-yellow-400 text-sm"></i>
                                                            <i class="fa-sharp fa-solid fa-star text-yellow-400 text-sm"></i>
                                                            <i class="fa-sharp fa-solid fa-star text-yellow-400 text-sm"></i>
                                                            <i class="fa-sharp fa-solid fa-star text-yellow-400 text-sm"></i>
                                                            <i class="fa-sharp fa-solid fa-star text-yellow-400 text-sm"></i>
                                                        </p>
                                                    </div>
                                                    <div class="mt-6">
                                                        <h1 class="font-medium mb-3">Nice Product</h1>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, natus accusantium sed id consequatur sint rem ab sapiente assumenda facilis?</p>
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
                                <h1 class="text-[#0f86ff] text-sm font-medium bg-[#ecf6ff] text-center py-3 border mt-3">Ther are no review yet.</h1>
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
</body>
</html>


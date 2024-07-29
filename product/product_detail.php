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
                        <img class="h-full" src="https://m.media-amazon.com/images/I/81Os1SDWpcL._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="https://m.media-amazon.com/images/I/51UtwJ0576L._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="https://m.media-amazon.com/images/I/71lmRVkniLL._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide h-auto">
                        <img class="h-full" src="https://m.media-amazon.com/images/I/71TSx9D2BVL._SL1500_.jpg" />
                    </div>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper md:w-80 h-auto mt-6">
                <div class="swiper-wrapper flex item-center justify-center">
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="https://m.media-amazon.com/images/I/81Os1SDWpcL._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="https://m.media-amazon.com/images/I/51UtwJ0576L._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="https://m.media-amazon.com/images/I/71lmRVkniLL._SL1500_.jpg" />
                    </div>
                    <div class="swiper-slide border border-black p-1">
                        <img class="w-full h-full m-auto aspect-square" src="https://m.media-amazon.com/images/I/71TSx9D2BVL._SL1500_.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3 w-full mt-12">
            <div class="flex flex-col gap-2">
                <h1 class="text-base font-medium text-[#1d2128] leading-6 md:leading-10 md:font-medium md:text-[28px]">Apple iPhone 15 Pro Max (256 GB) - Black Titanium</h1>
            </div>
            <!-- price -->
            <div class="flex items-center justify-between flex-wrap gap-y-3">
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-medium">₹1,48,900</span>
                    <del class="text-sm font-normal">₹1,59,900</del>
                </div>
                <p class="text-[#13bc96] text-sm font-medium">Available in stock</p>
            </div>
            <!-- color -->
            <div class="mt-3">
                <h1 class="text-xl font-medium">Colors:</h1>
                <div class="flex item-center gap-1">
                    <div>
                        <input type="radio" class="hidden" name="colors" id="color-1">
                        <label for="color-1">
                            <div class="h-7 w-7 rounded-full bg-red-500 cursor-pointer"></div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="hidden" name="colors" id="color-2">
                        <label for="color-2">
                            <div class="h-7 w-7 rounded-full bg-green-500 cursor-pointer"></div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="hidden" name="colors" id="color-3">
                        <label for="color-3">
                            <div class="h-7 w-7 rounded-full bg-blue-500 cursor-pointer"></div>
                        </label>
                    </div>

                </div>
            </div>
            <!-- size -->
            <div>
                <div class="md:col-span-2 mt-3">
                    <label for="size">Size</label>
                    <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                        <option value="4GB-32GB">4 GB RAM, 32 GB ROM</option>
                        <option value="4GB-64GB">4 GB RAM, 64 GB ROM</option>
                        <option value="6GB-64GB">6 GB RAM, 64 GB ROM</option>
                        <option value="6GB-128GB">6 GB RAM, 128 GB ROM</option>
                        <option value="8GB-128GB">8 GB RAM, 128 GB ROM</option>
                        <option value="8GB-256GB">8 GB RAM, 256 GB ROM</option>
                        <option value="12GB-256GB">12 GB RAM, 256 GB ROM</option>
                        <option value="12GB-512GB">12 GB RAM, 512 GB ROM</option>
                        <option value="16GB-512GB">16 GB RAM, 512 GB ROM</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-between items-center mt-3">
                <!-- rating -->
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffc107" d="m23.363 8.584-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 0 0-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 0 0 1.103.777L12 20.245l6.59 3.643a.75.75 0 0 0 1.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 0 0-.423-1.266z" opacity="1" data-original="#ffc107" class=""></path></g></svg>
                    <span class="text-base font-medium text-[#7c818b]">(0)</span>
                </div>
                <p class="text-sm font-medium text-[red]">Free Delivery</p>
            </div>
            <hr>
            <div class="mt-4 flex flex-col gap-3 md:flex-row">
                <input class="text-sm font-medium text-white bg-indigo-600 px-12 py-4 rounded-md cursor-pointer hover:bg-indigo-700 transition duration-200" type="submit" name="addToCart" value="Add To Cart">
                <a href="?id=" class="text-sm font-medium text-indigo-500 border-2 border-indigo-500 px-12 py-4 rounded-md text-center">Buy now</a>
            </div>
        </div>
    </div>

    <!-- product Details -->
    <div class="py-12 px-2 xl:px-52">
        <div class="border rounded-md p-8">
            <div>
                <h1 class="text-3xl font-semibold md:text-5xl">Phone</h1>
                <hr class="my-6">
                <div class="">
                    <span class="text-xl font-medium">Apple iPhone 15 Pro Max (256 GB) - Black Titanium</span>
                </div>
                <div class="grid grid-cols-1 mt-8 gap-3 md:grid-cols-2 m-auto">
                    <img class="border m-auto" src="https://m.media-amazon.com/images/I/61lfdF60sRL._SL1500_.jpg" alt="">
                    <img class="border m-auto" src="https://m.media-amazon.com/images/I/81MDZsYTIoL._SL1500_.jpg" alt="">
                    <img class="border m-auto" src="https://m.media-amazon.com/images/G/31/img21/Wireless/Madhav/september/Apple/River15pro/R1AEBB1._CB575355692_.jpg" alt="">
                    <img class="border m-auto" src="https://m.media-amazon.com/images/G/31/img21/Wireless/Madhav/september/Apple/River15pro/R1809_4._CB575355692_.jpg" alt="">
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-medium">More information</h2>
                    <div class="mt-3 flex flex-col gap-y-3">
                        <div class="flex">
                            <li></li>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nobis laboriosam amet facilis fugiat, excepturi sint repudiandae, nemo aliquam similique officia aliquid corrupti beatae aut rerum quod quibusdam minus id.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <li></li>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nobis laboriosam amet facilis fugiat, excepturi sint repudiandae, nemo aliquam similique officia aliquid corrupti beatae aut rerum quod quibusdam minus id..</p>
                            </div>
                        </div>
                        <div class="flex">
                            <li></li>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nobis laboriosam amet facilis fugiat, excepturi sint repudiandae, nemo aliquam similique officia aliquid corrupti beatae aut rerum quod quibusdam minus id..</p>
                            </div>
                        </div>
                        <div class="flex">
                            <li></li>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nobis laboriosam amet facilis fugiat, excepturi sint repudiandae, nemo aliquam similique officia aliquid corrupti beatae aut rerum quod quibusdam minus id.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <li></li>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nobis laboriosam amet facilis fugiat, excepturi sint repudiandae, nemo aliquam similique officia aliquid corrupti beatae aut rerum quod quibusdam minus id..</p>
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
                            <h1 class="text-7xl font-medium"><?php if(isset($average)){echo $average;}else{echo '0';}  ?></h1>
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
                            <button class="text-sm font-medium text-white bg-indigo-600 py-4 hover:bg-indigo-700 transition duration-200"><a href="">Write a review</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <span class="text-2xl font-medium">Customer Reviews (1)</span>
                    <hr class="mt-3">
                    <!-- <h1 class="text-[#0f86ff] text-sm font-medium bg-[#ecf6ff] text-center py-3 border mt-3">Ther are no review yet.</h1> -->
                    <div class="mt-7 flex flex-col gap-8 overflow-scroll h-[60vh] md:px-4">
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
                    </div>
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
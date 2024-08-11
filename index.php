<?php
include "include/connect.php";

function displayRandomProducts($con, $limit)
{
    $product_find = "SELECT * FROM products ORDER BY RAND() LIMIT $limit";
    $product_query = mysqli_query($con, $product_find);

    if ($product_query) {
        while ($res = mysqli_fetch_assoc($product_query)) {
?>
            <div class="card w-72 flex-shrink-0 p-4 cursor-pointer" onclick="window.location.href = 'product/product_detail.php?product_id=<?php echo $res['product_id']; ?>'">
                <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                    <div>
                        <img src="<?php echo 'src/product_image/product_profile/' . $res['image_1']; ?>" alt="" class="w-full px-2 h-52 object-cover object-center rounded" loading="eager" sizes>
                    </div>
                    <div class="mt-2">
                        <div class="space-y-1">
                            <a href="product/product_detail.php?product_id=<?php echo $res['product_id'] ?>" class="text-base font-medium line-clamp-2 cursor-pointer"><?php echo $res['title'] ?></a>
                            <p class="space-x-2">
                                <span class="text-lg font-medium text-indigo-500">₹<?php echo $res['MRP'] ?></span>
                                <del class="text-xs font-normal">₹<?php echo $res['Your_Price'] ?></del>
                            </p>
                        </div>
                        <div class="flex items-center mt-3">
                            <span class="bg-indigo-400 rounded-md px-2 py-0.5 flex items-center gap-1">
                                <h1 class="font-semibold text-base text-white">0.0</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-3 h-3 m-auto fill-current text-white">
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                </svg>
                            </span>
                            <span class="text-sm ml-2 mt-0.5">0 Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo "Error " . mysqli_errno($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

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
    <link rel="shortcut icon" href="src/logo/favicon.svg">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- splide link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>


    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .custom-hover-bg {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .custom-hover-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease-in-out;
            z-index: 0;
        }

        .custom-hover-bg:hover::before {
            transform: scale(1.05);
        }

        .custom-hover-bg>div {
            position: relative;
            z-index: 1;
        }

        /* change this below css and pest test.html page */

        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .card-slider {
            display: flex;
            transition: transform 0.3s ease-in-out;
            width: max-content;
        }

        .card {
            width: 288px;
            margin-right: 16px;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <?php
    include "pages/_navbar.php";
    ?>
    <div class="p-2 flex flex-col max-w-screen-xl m-auto outfit">
        <div>
            <div class="hidden xl:block xl:grid xl:grid-cols-8 gap-9 text-sm py-5 px-6">
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-homegarden.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Furniture</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full border" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2022/09/1-57.jpg?resize=300%2C300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Electronics</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-15off-Headphones.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">15% off Headphone</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-think-outside-the-box.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Think Outside The Box</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full border" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/07/homev1-toys.jpg?w=400&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ... ">Toys</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-sports.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Sports</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-New-From-Apple.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">New From Apple</span></a>
                </div>
                <div>
                    <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-beauty.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Beauty & Heathy</span></a>
                </div>
            </div>
            <!-- categorySplider2 -->
            <div class="splide xl:hidden" id="categorySplide1">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-homegarden.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Furniture</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full border" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2022/09/1-57.jpg?resize=300%2C300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Electronics</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-15off-Headphones.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">15% off Headphone</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-think-outside-the-box.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Think Outside The Box</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full border" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/07/homev1-toys.jpg?w=400&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ... ">Toys</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-sports.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Sports</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-New-From-Apple.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">New From Apple</span></a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev3-beauty.jpg?resize=150%2C150&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Beauty & Heathy</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Repeat the above structure for splide2, splide3, splide4 as needed -->

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new Splide('#categorySplide1', {
                        perPage: 6,
                        perMove: 1,
                        gap: '1rem', // Adjust gap between slides
                        rewind: false, // Do not loop back to the start
                        arrows: true,
                        pagination: false,
                        breakpoints: {
                            1200: {
                                perPage: 4,
                                gap: '0.75rem'
                            },
                            992: {
                                perPage: 3,
                                gap: '0.5rem'
                            },
                            768: {
                                perPage: 2,
                                gap: '0.25rem'
                            },
                            500: {
                                perPage: 1,
                                gap: '0.25rem'
                            }
                        }
                    }).mount();
                });
            </script>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper w-full h-full rounded-lg mt-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center">
                    <img class="relative w-full h-[30vh] rounded-md md:h-[60vh] object-cover" src="https://i.pinimg.com/originals/db/12/fe/db12fea16a6836ac1a7580921983fa06.jpg" alt="">
                    <div class="bg-gradient-to-r from-black/95 to-black/10 h-full absolute bottom-4 left-0 px-7 md:px-20 top-0 max-w-max flex justify-center flex-col gap-1 text-white">
                        <h1 class="text-base md:text-3xl font-bold">Timeless Elegance Awaits</h1>
                        <p class="text-sm md:text-lg font-normal my-2 w-full md:w-[60%]">Discover the perfect watch to elevate your style and keep you on time.</p>
                        <button class="bg-indigo-600 text-white text-sm md:text-base py-1 px-2 md:py-2 md:px-5 rounded-md max-w-max font-semibold tracking-wider">Click here</button>
                    </div>
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img class="relative w-full h-[30vh] rounded-md md:h-[60vh] object-cover" src="https://rog.asus.com/Microsite/ROG-X-INTEL-UNLEASH-THE-LEGEND-INSIDE/in/assets/img/list/ROG-STRIX-SCAR-15-17.jpg" alt="">
                    <div class="bg-gradient-to-r from-black/95 to-black/10 h-full absolute bottom-4 left-0 px-7 md:px-20 top-0 max-w-max flex justify-center flex-col gap-1 text-white">
                        <h1 class="text-base md:text-3xl font-bold">Unleash Your Productivity</h1>
                        <p class="text-sm md:text-lg font-normal my-2 w-full md:w-[60%]">Experience unparalleled performance and style with our cutting-edge laptops.</p>
                        <button class="bg-indigo-600 text-white text-sm md:text-base py-1 px-2 md:py-2 md:px-5 rounded-md max-w-max font-semibold tracking-wider">Click here</button>
                    </div>
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img class="relative w-full h-[30vh] rounded-md md:h-[60vh] object-cover" src="https://global.hisense.com/dam/jcr:3beab097-18ec-497a-acef-b5660937c0fb/uled-8k-tv-u80g-banner.jpg" alt="">
                    <div class="bg-gradient-to-r from-black/95 h-full absolute bottom-4 left-0 px-7 md:px-20 top-0 max-w-max flex justify-center flex-col gap-1 text-white">
                        <h1 class="text-base md:text-3xl font-bold">Elevate Your Viewing Experience</h1>
                        <p class="text-sm md:text-lg font-normal my-2 w-full md:w-[60%]">Immerse yourself in stunning clarity and vibrant colors with our latest TVs.</p>
                        <button class="bg-indigo-600 text-white text-sm md:text-base py-1 px-2 md:py-2 md:px-5 rounded-md max-w-max font-semibold tracking-wider">Click here</button>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-white rounded-full prev-button w-8 h-8 z-50 absolute top-[50%] text-center flex items-center justify-center left-3">
                    <svg class="w-4 h-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </div>
                <div class="bg-white rounded-full next-button w-8 h-8 z-50 absolute top-[50%] text-center flex items-center justify-center right-3">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z" fill="#000000" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".next-button ",
                    prevEl: ".prev-button",
                },
            });
        </script>


        <!-- slider 1 -->
        <div class="slider-container mt-10">
            <h1 class="text-2xl">You Might Also Like</h1>
            <div id="slider1" class="card-slider">
                <?php
                displayRandomProducts($con, 10);
                ?>
            </div>
            <!-- slider contorl -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button id="prev1" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="next1" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            const slider1 = document.getElementById('slider1');
            const next1 = document.getElementById('next1');
            const prev1 = document.getElementById('prev1');

            let currentIndex1 = 0;
            const cardWidth1 = 18 * 16; // 18rem in pixels (1rem = 16px)
            const visibleCards1 = Math.floor(document.querySelector('.slider-container').offsetWidth / cardWidth1);
            const totalCards1 = slider1.children.length;

            function updateButtons1() {
                prev1.disabled = currentIndex1 === 0;
                next1.disabled = currentIndex1 >= totalCards1 - visibleCards1;
            }

            next1.addEventListener('click', () => {
                if (currentIndex1 < totalCards1 - visibleCards1) {
                    currentIndex1++;
                    slider1.style.transform = `translateX(-${currentIndex1 * cardWidth1}px)`;
                    updateButtons1();
                }
            });

            prev1.addEventListener('click', () => {
                if (currentIndex1 > 0) {
                    currentIndex1--;
                    slider1.style.transform = `translateX(-${currentIndex1 * cardWidth1}px)`;
                    updateButtons1();
                }
            });

            // Initial button state
            updateButtons1();
        </script>



        <!-- tranding deals -->
        <div class="mt-12 flex flex-col items-center">
            <h1 class="mb-5 text-2xl">Trending Deals</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                <div class="overflow-hidden w-52">
                    <div class="relative bg-[url('https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-gamerdays.jpg')] text-center h-[350px] bg-center bg-cover py-5 cursor-pointer custom-hover-bg rounded">
                        <a href="">
                            <div class="relative z-10">
                                <h1 class="text-[#36e318] text-center text-xs font-semibold">LIMITED TIME OFFER</h1>
                                <span class="flex justify-center my-3">
                                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 81 32">
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M11.084 3.833v7.741h6.407v-4.283h1.961v6.128h-10.329v-11.431h10.329v1.845h-8.368z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M31.7 1.988v11.438h-1.961v-4.623h-6.407v4.623h-1.954v-11.438h10.322zM29.74 6.952v-3.118h-6.407v3.118h6.407z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M46.393 1.988h1.961v11.438h-1.961v-8.613l-4.099 4.317 2.975 3.118-1.341 1.368-2.928-3.091-2.941 3.091-1.341-1.375 2.975-3.118-4.099-4.317v8.613h-1.961v-11.431h1.961l5.406 5.719 5.392-5.719z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M60.003 3.833h-7.762v2.792h7.666v1.845h-7.666v3.105h7.762v1.845h-9.723v-11.431h9.723v1.845z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M69.644 3.833h-6.291v9.593h-1.961v-11.438h10.213v6.536h-1.961v-4.691zM66.832 6.856l5.263 5.392-1.355 1.369-5.263-5.392 1.355-1.369z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M28.14 18.328v5.426l-6.257 6.012h-4.364v-11.438h10.621zM26.179 22.965v-2.791h-6.7v7.741h1.539l5.161-4.95z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M40.116 18.328v11.438h-1.961v-4.623h-6.407v4.623h-1.961v-11.438h10.329zM38.155 23.292v-3.118h-6.407v3.118h6.407z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M51.867 18.131l1.355 1.375-10.179 10.451-1.341-1.375 4.214-4.33-4.609-4.752 1.341-1.375 4.609 4.739 4.609-4.732z"></path>
                                        <path fill="#36e318" style="fill: var(--color2, #36e318)" d="M63.503 20.174h-7.714v2.73h7.714v6.863h-9.675v-1.852h7.714v-3.173h-7.714v-6.42h9.675v1.852z"></path>
                                    </svg>
                                </span>
                                <p class="text-[#36e318] text-center underline underline-offset-4 text-sm">Shop Now</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-2">Exclusive limited-time offers & experiences</p>
                    </div>
                </div>


                <div class="overflow-hidden w-52">
                    <div class="relative bg-[url('https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-neoqled.jpg')] text-center h-[350px] bg-center bg-cover py-5 cursor-pointer custom-hover-bg rounded">
                        <a href="">
                            <div class="relative z-10">
                                <h1 class="text-black text-center text-xs font-semibold">BEST TV DEALS</h1>
                                <span class="flex justify-center my-3">
                                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 81 32">
                                        <path d="M24.579 12.957v-11.391h2.24l5.46 7.074v-7.074h2.437v11.391h-2.056l-5.644-7.271v7.271h-2.437z"></path>
                                        <path d="M36.276 12.957v-11.391h7.775v2.288h-5.263v2.138h4.916v2.24h-4.916v2.437h5.379v2.288h-7.891z"></path>
                                        <path d="M46.604 3.105c1.191-1.144 2.628-1.716 4.317-1.716 1.682 0 3.118 0.572 4.296 1.716 1.191 1.144 1.784 2.533 1.784 4.18s-0.586 3.057-1.763 4.201c-1.178 1.13-2.614 1.702-4.317 1.702-1.682 0-3.118-0.572-4.317-1.702-1.178-1.144-1.763-2.546-1.763-4.201s0.586-3.037 1.763-4.18zM48.388 9.866c0.688 0.688 1.532 1.028 2.533 1.028 0.994 0 1.831-0.34 2.519-1.049 0.701-0.701 1.048-1.566 1.048-2.567 0-0.994-0.34-1.845-1.028-2.546-0.694-0.701-1.546-1.055-2.54-1.055s-1.845 0.361-2.533 1.062c-0.688 0.701-1.028 1.552-1.028 2.546-0.007 1.028 0.34 1.879 1.028 2.58z"></path>
                                        <path d="M22.046 20.119c1.192-1.144 2.648-1.716 4.33-1.716s3.105 0.572 4.283 1.716c1.178 1.13 1.763 2.519 1.763 4.167 0 1.389-0.477 2.614-1.423 3.677l1.049 1.226-1.682 1.423-1.096-1.273c-0.803 0.524-1.763 0.783-2.894 0.783-1.682 0-3.139-0.558-4.33-1.682-1.192-1.13-1.784-2.519-1.784-4.153 0-1.648 0.592-3.037 1.784-4.167zM27.67 27.574l-1.423-1.634 1.682-1.437 1.457 1.682c0.34-0.524 0.524-1.157 0.524-1.893 0-0.994-0.34-1.831-1.028-2.533s-1.518-1.062-2.499-1.062c-0.994 0-1.845 0.34-2.546 1.049-0.701 0.701-1.049 1.552-1.049 2.546s0.34 1.845 1.028 2.533c0.701 0.667 1.552 1.014 2.567 1.014 0.497-0.007 0.926-0.088 1.287-0.266z"></path>
                                        <path d="M33.45 29.978v-11.391h2.519v9.103h4.446v2.288h-6.965z"></path>
                                        <path d="M41.294 29.978v-11.391h7.782v2.288h-5.263v2.138h4.916v2.24h-4.916v2.437h5.379v2.288h-7.898z"></path>
                                        <path d="M50.397 29.978v-11.391h4.317c1.927 0 3.418 0.524 4.46 1.586 1.062 1.049 1.586 2.417 1.586 4.133s-0.524 3.105-1.566 4.133c-1.028 1.028-2.519 1.539-4.46 1.539h-4.337zM52.909 27.69h1.648c2.683 0 3.663-1.294 3.663-3.384 0-1.062-0.279-1.913-0.831-2.519-0.538-0.606-1.484-0.912-2.846-0.912h-1.634v6.815z"></path>
                                    </svg>
                                </span>
                                <p class="text-black text-center underline underline-offset-4 text-sm">Shop Now</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-2">Save up to $700 on select 4K QLED Tvs</p>
                    </div>
                </div>

                <div class="overflow-hidden w-52">
                    <div class="relative bg-[url('https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-getinspired.jpg')] text-center h-[350px] bg-center bg-cover py-5 cursor-pointer custom-hover-bg rounded">
                        <a href="">
                            <div class="relative z-10">
                                <h1 class="text-black text-center text-xs font-semibold">NEW ARRIVALS</h1>
                                <span class="flex justify-center my-3">
                                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 32">
                                        <path d="M26.12 13.267c-0.727 0-1.307-0.22-1.747-0.653-0.44-0.44-0.653-1.020-0.653-1.747v-6.4c0-0.727 0.22-1.307 0.653-1.747 0.44-0.44 1.020-0.653 1.747-0.653h6.080v2.080l-0.88 0.96h-3.92v5.12h1.6v-3.36h3.68v6.4h-6.56z"></path>
                                        <path d="M42.92 4.147l-0.96 0.96h-3.84v1.12h3.2v2.88h-3.2v1.12h4.8v3.040h-8.48v-11.2h8.48v2.080z"></path>
                                        <path d="M43.48 2.067h9.12v2.24l-0.96 0.96h-1.76v8h-3.68v-8h-2.72v-3.2z"></path>
                                        <path d="M3.8 29.933v-11.2h3.68v11.2h-3.68z"></path>
                                        <path d="M14.84 29.933l-1.92-4.96h-0.16l0.32 3.36v1.6h-3.68v-11.2h3.84l1.92 4.96h0.16l-0.32-3.36v-1.6h3.68v11.2h-3.84z"></path>
                                        <path d="M20.12 21.133c0-0.727 0.22-1.307 0.653-1.747 0.44-0.44 1.020-0.653 1.747-0.653h6.080v2.080l-0.96 0.96h-3.84v0.72l2.88 0.56c0.64 0.127 1.173 0.413 1.6 0.867 0.427 0.447 0.64 1.013 0.64 1.693v1.92c0 0.727-0.22 1.307-0.653 1.747-0.44 0.44-1.020 0.653-1.747 0.653h-6.4v-3.040h5.12v-0.88l-2.88-0.56c-0.64-0.127-1.173-0.413-1.6-0.867s-0.64-1.013-0.64-1.693v-1.76z"></path>
                                        <path d="M30.36 29.933v-11.2h6.72c0.727 0 1.307 0.22 1.747 0.653s0.653 1.020 0.653 1.747v3.36c0 0.727-0.22 1.307-0.653 1.747-0.44 0.44-1.020 0.653-1.747 0.653h-3.040v3.040h-3.68zM34.040 21.773v2.080h1.76v-2.080h-1.76z"></path>
                                        <path d="M40.92 29.933v-11.2h3.68v11.2h-3.68z"></path>
                                        <path d="M46.52 29.933v-11.2h6.72c0.727 0 1.307 0.22 1.747 0.653 0.44 0.44 0.653 1.020 0.653 1.747v2.72c0 0.36-0.067 0.667-0.2 0.913s-0.28 0.44-0.44 0.593c-0.193 0.173-0.407 0.307-0.64 0.413l1.6 2.56v1.6h-3.68l-1.36-3.68h-0.72v3.68h-3.68zM50.2 21.773v1.44h1.76v-1.44h-1.76z"></path>
                                        <path d="M65.88 20.813l-0.96 0.96h-3.84v1.12h3.2v2.88h-3.2v1.12h4.8v3.040h-8.48v-11.2h8.48v2.080z"></path>
                                        <path d="M76.2 27.533c0 0.727-0.22 1.307-0.653 1.747s-1.020 0.653-1.747 0.653h-6.56v-11.2h6.56c0.727 0 1.307 0.22 1.747 0.653s0.653 1.020 0.653 1.747v6.4zM70.92 21.773v5.12h1.6v-5.12h-1.6z"></path>
                                    </svg>
                                </span>
                                <p class="text-black text-center underline underline-offset-4 text-sm">Shop Now</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-2">Low prices on computers to succeed in the office</p>
                    </div>
                </div>

                <div class="overflow-hidden w-52">
                    <div class="relative bg-[url('https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-triphard.jpg')] text-center h-[350px] bg-center bg-cover py-5 cursor-pointer custom-hover-bg rounded">
                        <a href="">
                            <div class="relative z-10">
                                <h1 class="text-[#80f8ff] text-center text-xs font-semibold">BLACK FRIDAY</h1>
                                <span class="flex justify-center my-3">
                                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 81 32">
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M27.615 5.263h-7.074v8.286h-3.595v-8.286h-7.074v-3.152h17.75v3.152z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M29.249 2.111h12.766c2.928 0 4.854 1.974 4.854 4.412 0 1.716-0.967 3.2-2.546 3.935l2.029 3.091h-4.167l-1.552-2.614h-7.762v2.614h-3.608v-11.438zM42.015 7.782c0.688 0 1.26-0.558 1.26-1.26s-0.572-1.26-1.26-1.26h-9.151v2.519h9.151z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M48.306 2.111h3.595v11.438h-3.595v-11.438z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M71.149 6.523c0 2.437-1.927 4.412-4.854 4.412h-9.164v2.614h-3.595v-11.438h12.766c2.921 0 4.848 1.974 4.848 4.412zM67.554 6.523c0-0.701-0.572-1.26-1.26-1.26h-9.164v2.519h9.171c0.681 0 1.253-0.558 1.253-1.26z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M20.276 18.451v11.438h-3.595v-4.248h-10.655v4.248h-3.595v-11.438h3.595v4.003h10.655v-4.003h3.595z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M36.582 28.078h-10.9l-0.477 1.811h-3.629l3.023-11.438h13.072l3.023 11.438h-3.643l-0.47-1.811zM35.745 24.892l-0.851-3.282h-7.544l-0.851 3.282h9.246z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M41.675 18.451h12.766c2.928 0 4.854 1.974 4.854 4.412 0 1.716-0.967 3.2-2.546 3.935l2.029 3.091h-4.174l-1.552-2.614h-7.762v2.614h-3.608v-11.438zM54.441 24.123c0.688 0 1.26-0.558 1.26-1.26s-0.572-1.26-1.26-1.26h-9.151v2.519h9.151z"></path>
                                        <path fill="#80f8ff" style="fill: var(--color3, #80f8ff)" d="M78.591 24.17c0 3.527-2.71 5.719-6.291 5.719h-11.568v-11.438h11.568c3.581 0 6.291 2.172 6.291 5.719zM74.934 24.17c0-1.471-1.11-2.58-2.628-2.58h-8v5.161h7.993c1.518-0.034 2.635-1.123 2.635-2.58z"></path>
                                    </svg>
                                </span>
                                <p class="text-[#80f8ff] text-center underline underline-offset-4 text-sm">Shop Now</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-2">Save up to $80 on select camcorder models.</p>
                    </div>
                </div>

                <div class="overflow-hidden w-52">
                    <div class="relative bg-[url('https://motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-bestinclass.jpg')] text-center h-[350px] bg-center bg-cover py-5 cursor-pointer custom-hover-bg rounded">
                        <a href="">
                            <div class="relative z-10">
                                <h1 class="text-[#fff] text-center text-xs font-semibold">BACK TO SCHOOL</h1>
                                <span class="flex justify-center my-3">
                                    <svg class="w-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 32">
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M19.227 10.32c0 1.633-0.8 3.12-3.667 3.12h-4.227v-10.88h4.227c2.433 0 3.347 1.267 3.347 2.653 0 1.12-0.573 2.173-2.173 2.287v0.253c1.867 0.12 2.493 1.16 2.493 2.567zM13.413 6.64h2.067c0.96 0 1.347-0.24 1.347-1.007 0-0.753-0.387-0.993-1.347-0.993h-2.067v2zM17.147 9.953c0-0.993-0.467-1.233-1.587-1.233h-2.147v2.48h2.147c1.12 0 1.587-0.24 1.587-1.247z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M22.827 4.64v2.24h4.127v2.080h-4.127v2.4h5.247v2.080h-7.167v-10.88h7.167v2.080h-5.247z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M29.753 9.793c1.507 1.027 3.407 1.567 4.847 1.567 1.427 0 2.253-0.127 2.253-1.027 0-0.927-0.893-1.040-2.96-1.52-2.893-0.653-3.987-1.487-3.987-3.267 0-2.080 1.633-2.993 4.113-2.993 1.293 0 2.973 0.387 4.047 0.913v2.113c-1.6-0.593-3.233-0.947-4.253-0.947-1.040 0-1.827 0.093-1.827 0.847 0 0.767 0.833 0.947 2.467 1.313 3.087 0.707 4.48 1.267 4.48 3.473 0 2.227-1.793 3.167-4.333 3.167-1.533 0-3.747-0.573-4.847-1.427v-2.213z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M47.707 4.64h-3.107v8.8h-2.080v-8.8h-3.107v-2.080h8.287v2.080z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M55.54 2.56h2.080v10.88h-2.080v-10.88z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M68.667 2.56v10.88h-2.080l-4.707-6.847h-0.253v6.847h-2.080v-10.88h2.080l4.707 6.847h0.253v-6.847h2.080z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M20.107 18.56c3.053 0 4.573 1.907 4.673 4.147h-2.080c-0.273-1.487-0.813-2.067-2.593-2.067-1.907 0-2.833 0.707-2.833 3.36s0.927 3.36 2.833 3.36c1.773 0 2.32-0.573 2.593-2.067h2.080c-0.093 2.24-1.613 4.147-4.673 4.147-3.567 0-4.913-2.72-4.913-5.44s1.34-5.44 4.913-5.44z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M32.587 27.36v2.080h-6.207v-10.88h2.080v8.8h4.127z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M41.047 27.36h-4.173l-0.627 2.080h-2.227l3.327-10.88h3.213l3.313 10.88h-2.207l-0.62-2.080zM40.427 25.28l-1.347-4.433h-0.253l-1.327 4.433h2.927z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M44.92 25.793c1.507 1.027 3.407 1.567 4.847 1.567 1.427 0 2.253-0.127 2.253-1.027 0-0.927-0.893-1.040-2.96-1.52-2.893-0.653-3.987-1.487-3.987-3.267 0-2.080 1.633-2.993 4.113-2.993 1.293 0 2.973 0.387 4.047 0.913v2.113c-1.6-0.593-3.233-0.947-4.253-0.947-1.040 0-1.827 0.093-1.827 0.847 0 0.767 0.833 0.947 2.467 1.313 3.087 0.707 4.48 1.267 4.48 3.473 0 2.227-1.793 3.167-4.333 3.167-1.533 0-3.747-0.573-4.847-1.427v-2.213z"></path>
                                        <path fill="#fff" style="fill: var(--color1, #fff)" d="M55.467 25.793c1.507 1.027 3.407 1.567 4.847 1.567 1.427 0 2.253-0.127 2.253-1.027 0-0.927-0.893-1.040-2.96-1.52-2.893-0.653-3.987-1.487-3.987-3.267 0-2.080 1.633-2.993 4.113-2.993 1.293 0 2.973 0.387 4.047 0.913v2.113c-1.6-0.593-3.233-0.947-4.253-0.947-1.040 0-1.827 0.093-1.827 0.847 0 0.767 0.833 0.947 2.467 1.313 3.087 0.707 4.48 1.267 4.48 3.473 0 2.227-1.793 3.167-4.333 3.167-1.533 0-3.747-0.573-4.847-1.427v-2.213z"></path>
                                    </svg>
                                </span>
                                <p class="text-[#fff] text-center underline underline-offset-4 text-sm">Shop Now</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-2">Gear essentials for preschool</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider 2 -->
        <div class="slider-container mt-12">
            <h1 class="text-2xl">More to Discover</h1>
            <div id="slider2" class="card-slider">
                <?php
                displayRandomProducts($con, 10);
                ?>
            </div>
            <!-- slider contorl -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button id="prev2" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="next2" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            const slider2 = document.getElementById('slider2');
            const next2 = document.getElementById('next2');
            const prev2 = document.getElementById('prev2');

            let currentIndex2 = 0;
            const cardWidth2 = 18 * 16; // 18rem in pixels (1rem = 16px)
            const visibleCards2 = Math.floor(document.querySelector('.slider-container').offsetWidth / cardWidth2);
            const totalCards2 = slider2.children.length;

            function updateButtons2() {
                prev2.disabled = currentIndex2 === 0;
                next2.disabled = currentIndex2 >= totalCards2 - visibleCards2;
            }

            next2.addEventListener('click', () => {
                if (currentIndex2 < totalCards2 - visibleCards2) {
                    currentIndex2++;
                    slider2.style.transform = `translateX(-${currentIndex2 * cardWidth2}px)`;
                    updateButtons2();
                }
            });

            prev2.addEventListener('click', () => {
                if (currentIndex2 > 0) {
                    currentIndex2--;
                    slider2.style.transform = `translateX(-${currentIndex2 * cardWidth2}px)`;
                    updateButtons2();
                }
            });

            // Initial button state
            updateButtons2();
        </script>

        <div class="my-5 mt-12 ">
            <h1 class="text-2xl mb-4">Explore More Categories</h1>
            <div class="xl:flex w-full gap-10 hidden xl:block">
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-cellphones.jpg?w=640&ssl=1" alt="">
                        <p>Cell Phones</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-ipadtablets.jpg?w=640&ssl=1" alt="">
                        <p>iPads & Tablets</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-laptops.jpg?w=640&ssl=1" alt="">
                        <p>Laptops</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-cameras.jpg?w=640&ssl=1" alt="">
                        <p>Cameras</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-wearabletech.jpg?w=640&ssl=1" alt="">
                        <p>Wearable Tech</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-headphones.jpg?w=640&ssl=1" alt="">
                        <p>Headphones</p>
                    </a>
                </div>
                <div>
                    <a class="flex flex-col items-center space-y-2 w-36" href="">
                        <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-accessories.jpg?w=640&ssl=1" alt="">
                        <p>Accessories</p>
                    </a>
                </div>
            </div>

            <!-- categorySplider2 -->
            <div class="splide xl:hidden" id="categorySplide2">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-cellphones.jpg?w=640&ssl=1" alt="">
                                    <p>Cell Phones</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-ipadtablets.jpg?w=640&ssl=1" alt="">
                                    <p>iPads & Tablets</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-laptops.jpg?w=640&ssl=1" alt="">
                                    <p>Laptops</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-cameras.jpg?w=640&ssl=1" alt="">
                                    <p>Cameras</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-wearabletech.jpg?w=640&ssl=1" alt="">
                                    <p>Wearable Tech</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-headphones.jpg?w=640&ssl=1" alt="">
                                    <p>Headphones</p>
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center">
                            <div class="categoryCard flex-shrink-0 p-4">
                                <a class="flex flex-col items-center space-y-2 w-36" href="">
                                    <img class="rounded-full" src="https://i0.wp.com/motta.uix.store/wp-content/uploads/2022/08/homev9-accessories.jpg?w=640&ssl=1" alt="">
                                    <p>Accessories</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Repeat the above structure for splide2, splide3, splide4 as needed -->

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new Splide('#categorySplide2', {
                        perPage: 5,
                        perMove: 1,
                        gap: '1rem', // Adjust gap between slides
                        rewind: false, // Do not loop back to the start
                        arrows: true,
                        pagination: false,
                        breakpoints: {
                            1200: {
                                perPage: 3,
                                gap: '0.75rem'
                            },
                            992: {
                                perPage: 2,
                                gap: '0.5rem'
                            },
                            768: {
                                perPage: 1,
                                gap: '0.25rem'
                            }
                        }
                    }).mount();
                });
            </script>

        </div>

        <!-- slider 2 -->
        <div class="slider-container mt-12">
            <h1 class="text-2xl">More to Discover</h1>
            <div id="slider3" class="card-slider">
                <?php
                displayRandomProducts($con, 10);
                ?>
            </div>
            <!-- slider contorl -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button id="prev3" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="next3" class="bg-white p-2 rounded-full shadow-lg focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            const slider3 = document.getElementById('slider3');
            const next3 = document.getElementById('next3');
            const prev3 = document.getElementById('prev3');

            let currentIndex3 = 0;
            const cardWidth3 = 18 * 16; // 18rem in pixels (1rem = 16px)
            const visibleCards3 = Math.floor(document.querySelector('.slider-container').offsetWidth / cardWidth3);
            const totalCards3 = slider3.children.length;

            function updateButtons3() {
                prev3.disabled = currentIndex3 === 0;
                next3.disabled = currentIndex3 >= totalCards3 - visibleCards3;
            }

            next3.addEventListener('click', () => {
                if (currentIndex3 < totalCards3 - visibleCards3) {
                    currentIndex3++;
                    slider3.style.transform = `translateX(-${currentIndex3 * cardWidth3}px)`;
                    updateButtons3();
                }
            });

            prev3.addEventListener('click', () => {
                if (currentIndex3 > 0) {
                    currentIndex3--;
                    slider3.style.transform = `translateX(-${currentIndex3 * cardWidth3}px)`;
                    updateButtons3();
                }
            });

            // Initial button state
            updateButtons3();
        </script>

        <!-- partner -->
        <div class="w-full flex flex-col items-center mt-12 mb-8">
            <h1 class="text-2xl mt-3">Trending Brands</h1>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-x-20 gap-y-10 px-10">
                <!-- asus -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path fill="#000000" fill-rule="evenodd" d="M252.448 235.16v-26.617h-85.785c-12.663 0-23.368 8.803-26.299 20.593v-20.462H89.159l-17.45 26.475h67.865zm30.995-26.484h-26.747v26.473h26.747zm83.556 0h-26.742v26.473h26.742zM26.022 304.457h33.085l42.296-65.913-30.761-1.776zm368.354-95.914c-14.738 0-26.824 11.927-27.09 26.605l118.691.012v-26.617zm64.506 37.887-5.065-.223c-28.724-1.264-57.361-2.711-86.049-4.191 2.232 11.256 11.732 20.628 26.608 22.641l62.534 3.836c2.575 0 4.676 2.104 4.676 4.675s-2.101 4.676-4.676 4.676h-89.911v-35.867l-26.742-1.38v30.677c0 4.297-3.514 7.805-7.805 7.805h-41.204c-4.297 0-7.805-3.508-7.805-7.805v-33.607l-26.747-1.38v30.409c-3.057-11.504-13.676-19.797-26.21-19.797L112.7 239.198v65.261h117.786c13.138 0 24.167-9.474 26.598-21.929 2.145 12.414 13.002 21.929 25.975 21.929h57.582c12.864 0 23.654-9.361 25.918-21.626v21.626h92.323c14.902 0 27.096-12.188 27.096-27.096v-3.836c0-14.904-12.194-27.097-27.096-27.097zm-230.364 31.413h-88.154v-34.461c2.709 10.64 12.032 19.344 26.299 21.274l61.855 3.836c2.572 0 4.676 2.104 4.676 4.675s-2.104 4.676-4.676 4.676z" clip-rule="evenodd" opacity="1" data-original="#1b1b1b"></path>
                        </g>
                    </svg>
                </div>

                <!-- sony -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M466.75 215.982v9.994h6.83a1.914 1.914 0 0 1 1.639 3.072c-.144.204-18.944 22.312-19.18 22.528-.236.215-.389.163-.563-.072-.174-.236-18.749-22.456-18.749-22.456-1.311-1.608-.287-3.072 1.249-3.072h6.656v-9.994h-55.194v10.015h9.779c4.27 0 7.076 2.693 8.673 4.433 1.28 1.434 29.44 33.362 30.116 34.202.676.839.676.849.676 1.382v15.821a11.269 11.269 0 0 1-.215 2.16 3.45 3.45 0 0 1-2.171 1.925c-.924.116-1.854.174-2.785.174l-9.789-.01V296.1h54.907v-10.015h-10.332a20.299 20.299 0 0 1-2.765-.174 3.413 3.413 0 0 1-2.161-1.925 11.202 11.202 0 0 1-.225-2.161v-15.81c-.061-.52.07-1.044.369-1.474l30.464-34.755c2.796-3.113 4.25-3.788 7.915-3.788H512v-10.015h-45.25zM89.088 250.757a59.383 59.383 0 0 0-9.953-3.471c-6.492-1.587-21.074-3.574-28.047-4.27-7.311-.758-19.999-1.812-25.068-3.379-1.536-.482-4.669-1.966-4.669-5.602 0-2.59 1.434-4.782 4.26-6.553 4.495-2.816 13.568-4.567 23.03-4.567a66.774 66.774 0 0 1 26.685 5.212 29.1 29.1 0 0 1 6.349 3.789 19.093 19.093 0 0 1 6.257 10.465h10.107v-27.453H86.774v3.184c0 1.024-1.024 2.376-3.072 1.26-5.079-2.642-19.354-8.356-36.854-8.428-9.922 0-21.197 1.864-30.72 6.144C7.24 221.061 0 227.441 0 238.019a21.687 21.687 0 0 0 5.888 14.909c2.57 2.376 6.717 6.41 17.551 8.786 4.843 1.024 15.196 2.673 25.508 3.758 10.312 1.086 20.306 2.048 24.402 3.144 3.256.829 8.735 1.956 8.735 8.1s-5.765 7.987-6.768 8.387c-1.004.4-7.926 3.574-20.357 3.574a86.573 86.573 0 0 1-24.238-4.168c-4.639-1.659-9.503-3.84-14.039-9.379a16.108 16.108 0 0 1-2.918-8.889H2.499v31.539h12.513v-4.27a1.783 1.783 0 0 1 2.704-1.536 98.589 98.589 0 0 0 18.309 5.919c6.574 1.372 10.824 2.365 18.995 2.365a81.047 81.047 0 0 0 25.457-3.594 44.428 44.428 0 0 0 15.124-7.465 20.725 20.725 0 0 0 8.1-16.599 23.228 23.228 0 0 0-6.543-16.323 28.801 28.801 0 0 0-8.07-5.52zM229.765 226.785c-12.012-10.895-27.73-15.841-47.36-15.841-17.746 0-36.587 6.144-47.237 15.821a39.332 39.332 0 0 0-12.851 29.174 38.76 38.76 0 0 0 12.851 29.276c11.469 10.312 28.672 15.841 47.237 15.841 18.596 0 36.168-5.468 47.36-15.841a40.612 40.612 0 0 0 12.677-29.276 38.967 38.967 0 0 0-12.677-29.154zm-22.006 52.664c-6.38 6.349-15.514 9.749-25.354 9.749-9.769 0-19.098-3.471-25.395-9.749a32.943 32.943 0 0 1-9.216-23.552c0-9.032 3.144-17.541 9.216-23.552 6.298-6.226 15.688-9.687 25.395-9.687s19.057 3.492 25.354 9.687c6.093 6.001 9.277 14.479 9.277 23.552.001 9.504-2.897 17.204-9.277 23.552zM332.667 225.987h10.342c4.751 0 5.55 1.833 5.611 6.226l.563 33.444-55.05-49.674H254.77v10.015h8.765c6.328 0 6.758 3.522 6.758 6.594v46.868c0 2.806.164 6.656-3.871 6.656h-10.813v10.004h46.172v-10.004h-11.264c-4.495 0-4.7-2.059-4.751-6.431v-40.151l63.416 56.586h16.128l-.85-63.908c.082-4.67.369-6.226 5.202-6.226h10.107v-10.005h-47.104v10.006z" fill="#000000" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>

                <!-- canon -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M83.379 249.554c-.895 1.438.683 3.153 2.091 2.271l35.801-22.43a1.661 1.661 0 0 0 .472-2.329c-11.06-15.86-31.227-26.686-56.103-26.686C29.386 200.381 0 225.282 0 256c0 30.827 29.503 55.62 65.64 55.62 22.545 0 42.731-9.111 54.268-24.283.698-.918.144-1.898-.341-3.546-.366-1.244-1.911-1.556-2.683-.536-4.429 5.851-17.025 19.784-36.557 19.784-16.732 0-31.767-9.434-39.966-23.497-23.058-39.41 14.617-89.961 58.425-62.24.744.471.958 1.499.483 2.262l-15.89 29.99zM124.37 281.701c0 15.526 15.438 28.111 34.483 28.111 15.917 0 29.316-8.792 33.287-20.746l5.244 18.348c.407 1.423 1.658 2.398 3.078 2.398h24.218c1.769 0 3.04-1.781 2.536-3.556L206.82 234.38s-8.093-23.054-33.628-13.334c-13.09 4.983-20.983 8.361-25.567 10.47-1.417.652-.963 2.864.585 2.864h25.445c1.692 0 3.184 1.162 3.669 2.858l7.397 25.875c-6.319-5.84-15.566-9.523-25.869-9.523-18.947 0-34.482 12.498-34.482 28.111zm48.181-17.558c9.522 0 17.296 8.063 17.296 18.096 0 10.322-8.261 18.627-18.244 18.07-9.837-.549-17.704-10.017-16.157-20.783 1.252-8.707 8.433-15.383 17.105-15.383zM285.013 306.636c0 1.754 1.359 3.176 3.035 3.176h25.27c1.504 0 2.724-1.276 2.724-2.85v-72.464c-.235-8.756-7.09-15.779-15.515-15.779-7.622 0-18.477 7.08-29.624 13.513a1.849 1.849 0 0 1-2.729-1.209c-1.625-7.067-7.204-12.303-14.477-12.303-6.382 0-21.717 8.688-29.128 13.122-1.157.692-.685 2.538.649 2.538h10.986c1.093 0 1.979.927 1.979 2.07v71.298c0 1.139.883 2.063 1.972 2.063h26.03c1.354 0 2.451-1.148 2.451-2.564 0-.029-.002-67.198.003-67.227 3.373-9.031 16.374-6.669 16.374 3.631v62.985zM370.773 311.619c24.678 0 44.687-20.928 44.687-46.752 0-25.821-20.006-46.751-44.687-46.751-30.487 0-51.959 31.269-42.448 61.399 5.877 18.649 22.66 32.104 42.448 32.104zm-7.902-88.814c5.876 0 10.717 4.643 11.351 10.615 17.739 63.432 16.638 59.101 16.638 60.601 0 6.599-5.113 11.948-11.421 11.948-6.17 0-11.197-5.121-11.28-11.52l-17.363-60.069c.708-5.887 6.256-11.575 12.075-11.575zM480.971 306.636c0 1.754 1.359 3.176 3.035 3.176h25.27c1.504 0 2.724-1.276 2.724-2.85v-72.464c-.235-8.756-7.09-15.779-15.515-15.779-7.622 0-18.477 7.08-29.624 13.513a1.849 1.849 0 0 1-2.729-1.209c-1.625-7.067-7.204-12.303-14.477-12.303-6.382 0-21.717 8.688-29.128 13.122-1.157.692-.685 2.538.649 2.538h10.986c1.093 0 1.979.927 1.979 2.07v71.298c0 1.139.883 2.063 1.972 2.063h26.03c1.354 0 2.451-1.148 2.451-2.564 0-.029-.002-67.199.003-67.227 3.373-9.031 16.374-6.669 16.374 3.631v62.985z" fill="#000000" data-original="#e85454" class="" opacity="1"></path>
                            <path d="M256.728 307.41v-83.014c0-1.331-.886-2.411-1.979-2.411h-10.986c-.183 0-.346-.047-.494-.119-6.618 2.934-14.15 7.253-18.699 9.975-1.158.693-.685 2.538.649 2.538h10.986c1.093 0 1.979.927 1.979 2.07v71.298c0 1.139.883 2.063 1.972 2.063H258.7c-1.09.002-1.972-1.074-1.972-2.4zM452.686 307.41v-83.014c0-1.331-.886-2.411-1.979-2.411h-10.986c-.183 0-.346-.047-.495-.119-6.618 2.934-14.15 7.253-18.699 9.975-1.157.693-.684 2.538.649 2.538h10.986c1.093 0 1.979.927 1.979 2.07v71.298c0 1.139.883 2.063 1.972 2.063h18.544c-1.089.002-1.971-1.074-1.971-2.4zM20.605 256c0-27.791 24.054-50.818 55.485-54.954a82.127 82.127 0 0 0-10.45-.665C29.386 200.381 0 225.282 0 256c0 30.827 29.503 55.62 65.64 55.62 3.521 0 6.975-.248 10.357-.68-31.303-4.165-55.392-27.087-55.392-54.94zM169.15 254.875a41.68 41.68 0 0 0-10.296-1.285c-18.927 0-34.483 12.482-34.483 28.111 0 15.526 15.438 28.111 34.483 28.111 3.577 0 7.015-.465 10.258-1.289-31.985-8.191-32.348-45.387.038-53.648zM148.211 234.38h20.605c-1.548 0-2.003-2.212-.585-2.864 4.584-2.109 12.477-5.487 25.567-10.47.267-.102.521-.179.784-.273-5.123-2.453-12.096-3.264-21.388.273-13.09 4.983-20.983 8.361-25.567 10.47-1.418.652-.964 2.864.584 2.864zM348.93 279.516c-4.253-13.471-2.298-27.161 3.872-38.191l-2.007-6.945c.708-5.887 6.256-11.575 12.075-11.575 2.16 0 4.177.632 5.9 1.721a42.868 42.868 0 0 1 12.28-5.154 42.907 42.907 0 0 0-10.277-1.257c-30.487 0-51.96 31.269-42.448 61.399 5.876 18.648 22.66 32.103 42.448 32.103 3.542 0 6.984-.444 10.288-1.259-15.142-3.743-27.309-15.541-32.131-30.842z" fill="#000000" data-original="#d84848" class="" opacity="1"></path>
                        </g>
                    </svg>
                </div>

                <!-- casio -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M111.407 267.979c.836 0 1.514.678 1.514 1.514v1.376c0 10.797-.172 20.533-11.806 28.037-11.635 7.368-25.834 7.237-40.72 7.237C25.493 306.143 0 304.829 0 268.767v-25.532c0-32.638 22.756-37.376 60.394-37.376 38.107 0 51.914 3.612 52.344 34.664a1.514 1.514 0 0 1-1.515 1.528H79.018a1.514 1.514 0 0 1-1.514-1.514v-2.176c0-.085-.006-.172-.018-.256-1.258-8.693-9.278-9.347-20.855-9.347-19.504 0-21.386 4.605-21.386 18.688v15.398c0 14.741.856 20.397 21.386 20.397 14.201 0 21.044-.788 21.044-12.372v-1.376c0-.836.678-1.514 1.514-1.514h32.218zM149.843 288.376l-5.964 15.989a1.514 1.514 0 0 1-1.418.985h-32.32a1.514 1.514 0 0 1-1.41-2.064l37.315-95.673a1.514 1.514 0 0 1 1.41-.964h49.947c.621 0 1.179.38 1.408.957l37.812 95.673c.393.993-.34 2.07-1.408 2.07H203.57a1.515 1.515 0 0 1-1.409-.96l-5.918-15.054a1.514 1.514 0 0 0-1.409-.96l-44.991.001zm23.267-61.987h-.342l-14.831 40.743a1.514 1.514 0 0 0 1.422 2.031h27.483a1.514 1.514 0 0 0 1.419-2.041l-15.151-40.733zM295.771 245.341c37.981 2.105 47.392 5.789 47.392 28.425 0 16.322.856 32.378-55.606 32.378-32.152 0-53.705-.51-54.389-31.37a1.512 1.512 0 0 1 1.515-1.535h29.844c.807 0 1.466.639 1.508 1.445.463 8.925 5.577 9.878 21.521 9.878 16.082 0 21.389-.794 21.389-9.085 0-8.552-1.883-8.422-17.966-9.21l-7.527-.397c-31.653-1.712-50.129-1.581-50.129-29.873 0-28.297 20.7-30.139 54.233-30.139 28.061 0 52.014.397 52.014 27.637 0 2.013.345 4.078-1.514 4.078h-29.872a1.518 1.518 0 0 1-1.507-1.435c-.523-8.695-6.111-8.695-19.121-8.695-18.475 0-20.016 2.893-20.016 8.422 0 9.434 6.158 8.246 28.231 9.476zM385.564 305.35h-32.703a1.514 1.514 0 0 1-1.514-1.514v-95.673c0-.836.678-1.514 1.514-1.514h31.19c.836 0 1.514.678 1.514 1.514v97.187h-.001zM393.264 269.951v-27.9c0-30.4 24.637-36.192 59.367-36.192 34.732 0 59.37 5.792 59.37 36.192v27.901c0 30.4-24.637 36.192-59.37 36.192-34.73-.001-59.367-5.793-59.367-36.193zm83.492-2.896v-22.242c0-14.608-6.331-16.056-24.125-16.056s-23.61 1.448-24.122 16.056v22.242c.512 14.741 6.328 16.186 24.122 16.186s24.125-1.445 24.125-16.186z" fill="#000000" data-original="#579add" class="" opacity="1"></path>
                            <path d="M20.605 268.767v-25.532c0-29.676 18.816-36.285 50.523-37.24a372.368 372.368 0 0 0-10.734-.136C22.756 205.859 0 210.596 0 243.235v25.532c0 36.062 25.493 37.376 60.394 37.376 3.467 0 6.894.003 10.263-.079-29.478-.551-50.052-4.906-50.052-37.297zM129.335 303.286l37.315-95.674a1.515 1.515 0 0 1 1.41-.964h-20.605c-.624 0-1.183.383-1.41.964l-37.315 95.674a1.514 1.514 0 0 0 1.41 2.064h20.605a1.514 1.514 0 0 1-1.41-2.064zM253.773 274.773a1.512 1.512 0 0 1 1.515-1.535h-20.605c-.843 0-1.534.692-1.515 1.535.684 30.86 22.236 31.37 54.388 31.37 2.748 0 5.355-.039 7.838-.113-24.969-.619-41.033-4.69-41.621-31.257zM254.443 243.319l.009-.002c-.22-1.471-.538-4.423-.502-5.743l.011.005c-.699-26.886 16.172-31.065 44.455-31.635-3.519-.075-7.152-.084-10.86-.084-33.533 0-54.233 1.842-54.233 30.139 0 23.995 13.308 27.542 36.656 29.111-14.765-7.863-15.536-21.791-15.536-21.791zM371.952 303.836v-95.673c0-.836.678-1.514 1.514-1.514h-20.605c-.836 0-1.514.678-1.514 1.514v95.673c0 .836.678 1.514 1.514 1.514h20.605a1.514 1.514 0 0 1-1.514-1.514zM462.963 282.884c2.869.282 6.264.357 10.272.357 17.794 0 24.125-1.445 24.125-16.186v-22.242c0-14.608-6.331-16.056-24.125-16.056-4.008 0-7.403.076-10.272.356 9.987.966 13.792 4.382 13.792 15.699v22.242c0 11.422-3.805 14.86-13.792 15.83zM413.868 269.951V242.05c0-27.295 19.869-34.748 49.065-35.986a243.266 243.266 0 0 0-10.303-.206c-34.729 0-59.367 5.792-59.367 36.192v27.901c0 30.4 24.637 36.192 59.367 36.192 3.547 0 6.982-.065 10.303-.206-29.196-1.238-49.065-8.69-49.065-35.986z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                        </g>
                    </svg>
                </div>

                <!-- Bose -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 719.713 87.336">
                        <path d="M495.793 87.336L547.129 0h172.008v14.4H590.111l-12.744 22.032h68.113l-8.209 14.4H568.8l-13.105 22.032h68.473L615.6 87.336H495.793zM372.312 64.584h51.623c-1.727 2.52-2.52 5.04-1.439 6.624 1.871 2.808 8.496 1.439 10.225.864 3.455-1.08 5.328-3.24 6.982-6.12l8.641-15.12h-52.631c-11.018 0-11.377-6.552-6.912-14.4L405 8.928C409.824 1.008 416.305 0 424.584 0h91.512c9.289 0 9.289 7.56 5.545 14.4l-5.184 9.288h-51.912c1.584-3.024 1.654-5.688.432-7.344-2.016-2.736-7.344-2.16-10.152-.72-2.232 1.224-4.104 3.312-6.121 6.696l-8.279 14.112h50.904c10.729 0 12.385 7.849 9 14.4l-15.48 25.848c-4.176 6.84-11.375 10.656-19.656 10.656H374.33c-8.928 0-12.023-5.904-8.209-12.384l6.191-10.368zM263.592 14.4C271.872 0 285.624 0 296.28 0h77.761c8.207 0 15.119 6.84 10.654 14.4l-34.343 58.464c-7.272 11.664-13.104 14.472-22.392 14.472h-90.504c-8.928 0-13.032-6.552-8.208-14.472L263.592 14.4zm45.144 7.92l-26.208 43.632c-.864 1.584-1.224 3.023-.72 4.176 1.656 3.6 11.808 2.952 15.336 2.232 5.04-1.152 6.336-4.752 7.416-6.408l25.848-43.632c1.8-3.096 1.584-5.112 0-6.336-2.304-1.8-9.36-1.944-13.248-.864-3.312.936-6.048 3.024-8.424 7.2zM138.024 0h99.792c7.92 0 14.112 7.2 8.928 15.84l-10.296 17.496C231.984 41.256 224.424 45 218.88 45c5.544 3.096 5.544 8.567 2.736 13.392L211.32 76.319c-2.736 4.824-6.912 11.017-19.584 11.017H0V72.864h95.04L138.024 0zm29.952 36.432h25.416c5.904 0 8.28-3.096 9.648-5.832l5.184-8.28c2.088-3.744 2.088-7.92-2.376-7.92h-24.84l-13.032 22.032zm-21.672 36.432h25.416c5.904 0 8.28-3.097 9.647-5.832l5.185-8.28c2.088-3.816 2.088-7.92-2.448-7.92h-24.768l-13.032 " fill="#000000" />
                    </svg>
                </div>

                <!-- hyperX -->
                <div>
                    <svg class="pt-3" height="100" viewBox="0 0 144.2302965042822 43.685725513049505" width="100" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.58 14.68H34l1.08-3.59 9.35-5.35 1-3.17H41l-.47 1.59-6.92 3.91-4.35-3.76.53-1.75h-4.42l-.9 3L30.69 11zm37.19-4.92l-1.47 4.91h20l1-3.19H71.07l6.69-2.81-5.23-2.91H88l1-3.2H69l-1.51 4.78 2.15 1.23zM8.01 2.57H3.63L0 14.68h4.38zm15.18 0h-4L17.85 7h-10l-1 3.2h10l-1.34 4.46H20l3.6-12.09zm27.17 3.19h11.18l-.31 1-3.76 1.58h-6.74l-1 3.19h8.41l6.89-2.9 1.87-6.06h-20l-3.63 12.11h4.41zm38.23 4.87l-1.22 4.05h4.41s.75-2.52.93-3.07c-1.33-.37-2.71-.69-4.12-.98zm14.19.75l6.36-2.59L111 2.57H91l-1.9 6.36a46.92 46.92 0 0 1 13.68 2.45zm-8.32-5.62h11.17c-.14.47-.28.94-.34 1.13l-3.43 1.45h-8.18c.17-.54.68-2.24.78-2.58z" fill="#000000" />
                        <path d="M130.58 38.5c-3-8.9-7.54-15.22-12.69-19.69 4.61-4.49 7.76-10.58 8.33-18.81 0 0-1.88 8.19-12 16-15-10.23-33-7.32-33-7.32a61.3 61.3 0 0 1 29.3 9.91c-9.46 6-24.46 11.2-48.09 11.37 0 0 33.83 5.1 52.25-8.44a66.93 66.93 0 0 1 15.9 16.98z" fill="#ff0000" />
                    </svg>
                </div>

                <!-- tissot -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 192.756 192.756">
                        <g fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M94.909 86.932h-26.32V61.679h26.32v25.253z" />
                            <path fill="#ff0000" d="M124.877 86.932h-26.32V61.679h26.32v25.253z" />
                            <path d="M8.504 93.466h30.173v7.878H28.559v24.176h-9.938v-24.176H8.504v-7.878zM42.448 93.466h9.938v32.054h-9.938V93.466zM56.762 114.627h9.49c.204 1.541.617 2.418 1.244 3.223 1.018 1.293 2.473 1.939 4.367 1.939 1.414 0 2.501-.328 3.27-.988.762-.654 1.147-1.422 1.147-2.303 0-.834-.368-1.58-1.1-2.234-.734-.645-2.435-1.26-5.101-1.846-4.368-.979-7.482-2.281-9.342-3.908-1.875-1.609-2.811-3.676-2.811-6.197 0-1.643.478-3.191 1.438-4.658.96-1.465 2.4-2.619 4.324-3.462 1.926-.84 4.568-1.264 7.919-1.264 4.116 0 7.251.765 9.411 2.29 2.161 1.524 3.446 4.227 3.857 7.557h-9.402c-.25-1.432-.769-2.205-1.562-2.859-.796-.662-1.89-.988-3.289-.988-1.151 0-2.019.248-2.603.736-.581.49-.871 1.086-.871 1.785 0 .498.236.949.719 1.359.465.426 1.576.822 3.332 1.186 4.354.938 7.471 1.881 9.353 2.83 1.883.947 3.254 2.133 4.111 3.549.857 1.418 1.287 2.996 1.287 4.73 0 2.057-.57 3.955-1.713 5.684-1.141 1.732-2.735 3.045-4.782 3.936-2.049.889-4.633 1.334-7.749 1.334-5.472 0-9.26-1.051-11.367-3.145-2.109-2.097-3.301-5.058-3.577-8.286zM88.108 114.627h9.49c.205 1.541.621 2.418 1.248 3.223 1.018 1.293 2.473 1.939 4.367 1.939 1.412 0 2.5-.328 3.268-.988.764-.654 1.146-1.422 1.146-2.303 0-.834-.365-1.58-1.1-2.234-.732-.645-2.436-1.26-5.1-1.846-4.369-.979-7.482-2.281-9.344-3.908-1.875-1.609-2.811-3.676-2.811-6.197 0-1.643.478-3.191 1.438-4.658.96-1.465 2.4-2.619 4.326-3.462 1.925-.84 4.565-1.264 7.917-1.264 4.115 0 7.252.765 9.414 2.29 2.158 1.524 3.443 4.227 3.854 7.557h-9.398c-.25-1.432-.771-2.205-1.564-2.859-.795-.662-1.889-.988-3.287-.988-1.154 0-2.021.248-2.604.736-.582.49-.873 1.086-.873 1.785 0 .498.238.949.719 1.359.465.426 1.576.822 3.332 1.186 4.354.938 7.471 1.881 9.355 2.83 1.883.947 3.254 2.133 4.107 3.549.857 1.418 1.287 2.996 1.287 4.73 0 2.057-.57 3.955-1.711 5.684-1.143 1.732-2.734 3.045-4.785 3.936-2.047.889-4.629 1.334-7.746 1.334-5.473 0-9.262-1.051-11.369-3.145-2.105-2.097-3.298-5.058-3.576-8.286zM132.783 102.562c1.211-1.41 2.818-2.113 4.82-2.113 2.086 0 3.74.693 4.959 2.078 1.221 1.383 1.83 3.58 1.83 6.584 0 3.574-.582 6.053-1.75 7.434-1.17 1.389-2.822 2.08-4.953 2.08-2.072 0-3.713-.709-4.918-2.121-1.207-1.412-1.807-3.732-1.807-6.955.001-3.252.606-5.582 1.819-6.987zm-9.543 16.309c1.475 2.494 3.404 4.316 5.779 5.463 2.375 1.148 5.375 1.723 9 1.723 3.564 0 6.545-.662 8.936-1.994 2.389-1.334 4.213-3.197 5.479-5.598 1.266-2.398 1.896-5.469 1.896-9.217 0-5.146-1.445-9.154-4.34-12.02-2.895-2.864-7.016-4.3-12.365-4.3-5.221 0-9.291 1.459-12.215 4.369-2.926 2.908-4.385 6.984-4.385 12.219 0 3.742.739 6.863 2.215 9.355zM154.078 93.466h30.174v7.878h-10.117v24.176h-9.938v-24.176h-10.119v-7.878z" />
                            <path fill="#fff" d="M72.012 63.942h19.42v5.544h-6.253v15.533h-6.912V69.486h-6.255v-5.544zM108.914 77.078h-6.713v-5.51h6.713v-6.663h5.529v6.663h6.686v5.51h-6.686v6.693h-5.529v-6.693z" />
                        </g>
                    </svg>
                </div>

                <!-- asis -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="1 2 139.114 45.168">
                        <path d="M15.037 34.034c-2.576 0-3.813-1.981-3.169-4.274 1.336-4.75 9.917-11.79 15.764-11.79 4.269 0 3.941 3.815 1.442 7.071l-1.382 1.528c-4.957 4.866-9.553 7.465-12.655 7.465zM35.939 2c-7.463.003-15.684 4.569-20.843 8.894l.407.59c8.009-5.615 19.126-9.268 22.191-3.79 1.618 2.891-1.13 8.726-4.998 13.34.928-2.038.316-5.949-5.077-5.949C18.65 15.084 1 26.964 1 39.119c0 4.871 3.377 8.049 8.94 8.049 14.895 0 35.097-24.416 35.097-36.679C45.036 6.158 42.544 2 35.939 2zM55.114 34.034c-.865 0-1.587-.305-2.038-.854-.471-.58-.611-1.399-.387-2.248.493-1.841 2.476-3.282 4.513-3.282h4.792l-1.71 6.385-5.17-.001zm13.78-19.144c-1.373-1.686-3.59-2.439-5.18-2.439h-8.712l-1.479 5.515h8.215l.786.083c.009 0 .757.087 1.17.648.338.467.386 1.164.145 2.075l-.389 1.45h-5.175c-4.456 0-10.666 3.195-12.049 8.358-.689 2.575-.086 4.805 1.252 6.444 1.328 1.626 3.831 2.521 6.537 2.521h4.793l-.002.002H64.9l2.857-10.672 2.104-7.845c.826-3.081-.069-5.041-.967-6.14zM128.73 12.451c-2.356 0-4.544.697-6.327 2.018-1.798 1.332-2.79 2.934-3.381 5.14-1.281 4.782 2.475 7.09 5.498 8.725 2.165 1.175 4.036 2.187 3.633 3.687-.288 1.077-.757 2.018-3.422 2.018h-8.134l-1.477 5.516h9.002c2.414 0 4.643-.504 6.438-1.882 1.799-1.382 2.812-3.31 3.442-5.661.602-2.239.193-4.376-1.245-5.973-1.199-1.337-2.928-2.268-4.449-3.09-1.949-1.05-3.787-2.04-3.465-3.241.194-.724.918-1.738 2.491-1.738h7.91l1.479-5.515h-7.995v-.004zM81.523 12.451c-2.356 0-4.545.697-6.327 2.018-1.798 1.332-2.789 2.934-3.384 5.14-1.281 4.782 2.479 7.09 5.499 8.725 2.166 1.175 4.038 2.187 3.635 3.687-.289 1.077-.758 2.018-3.424 2.018h-8.131l-1.479 5.516h9.003c2.416 0 4.645-.504 6.438-1.882 1.8-1.382 2.813-3.31 3.442-5.661.602-2.239.192-4.376-1.243-5.973-1.198-1.337-2.929-2.268-4.453-3.09-1.947-1.05-3.785-2.04-3.462-3.241.193-.724.918-1.738 2.488-1.738h7.908l1.48-5.515h-7.991v-.004zM93.808 12.451L86.747 39.55h5.965l7.057-27.099zM115.642 12.451C105.14 12.489 99.645 19.484 97.898 26c-2.069 7.727 2.044 13.551 9.566 13.551h5.042l1.477-5.516h-5.039c-2.816 0-6.688-2.217-5.127-8.035 1.239-4.626 5.746-8.034 10.697-8.034h3.199l1.479-5.515h-3.55zM136.306" />
                    </svg>
                </div>

                <!-- msi -->
                <div>
                    <svg width="100" height="100" viewBox="0 0 120 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2168 36.9429C24.0994 36.9689 23.9574 37.1316 23.9721 37.2964C23.9932 37.5169 24.2686 37.62 24.5129 37.6056C24.8452 37.5869 25.2023 37.4269 25.3499 37.2673C24.8905 37.3826 24.5664 36.8696 24.2168 36.9429Z" fill="white" />
                        <path d="M21.1032 40.7982C20.9497 40.6024 20.5853 40.6549 20.5394 40.9016C20.493 41.1549 20.7141 41.4137 20.868 41.5729C21.053 41.764 21.2347 41.9326 21.4667 41.9909C21.4811 41.9885 21.4862 42.0093 21.4911 41.9909C21.3867 41.8698 21.2912 41.6813 21.2442 41.4338C21.199 41.1923 21.2109 40.9331 21.1032 40.7982Z" fill="white" />
                        <path d="M16.8195 41.8231C16.4584 42.1451 16.3331 42.7896 16.4266 43.4904C16.5146 43.1418 16.6995 42.9681 16.95 42.7524C17.1032 42.6188 17.3436 42.4454 17.3892 42.2636C17.4665 41.9606 17.1474 41.6685 16.8195 41.8231Z" fill="white" />
                        <path d="M13.762 41.1602C13.394 41.4928 13.1732 42.1835 13.2111 42.8431C13.3041 42.4664 13.5895 42.3195 13.9204 42.1064C14.1065 41.9867 14.4892 41.8028 14.5556 41.6143C14.6227 41.4279 14.5349 41.1726 14.4208 41.077C14.2112 40.9016 13.8905 41.0436 13.762 41.1602Z" fill="white" />
                        <path d="M11.7842 39.2668C11.2277 39.5441 10.7877 40.1428 10.7271 40.8774C10.8657 40.5514 11.2197 40.4159 11.5845 40.2636C11.7993 40.1723 12.1859 40.0713 12.254 39.8917C12.3107 39.7438 12.3061 39.5115 12.2309 39.4051C12.151 39.2943 11.8981 39.2101 11.7842 39.2668Z" fill="white" />
                        <path d="M10.1463 36.1431C9.47367 36.4992 9.08191 37.1946 8.99469 38.0897C9.12519 37.7345 9.49557 37.5512 9.88733 37.3708C10.1424 37.2555 10.5874 37.1414 10.6629 36.9084C10.7208 36.7281 10.7073 36.4356 10.6166 36.3182C10.5183 36.19 10.3509 36.1476 10.1463 36.1431Z" fill="white" />
                        <path d="M112.504 40.3899L118.164 24.7821C118.164 24.7821 113.933 24.7821 109.703 25.6309L104.352 40.3903H112.504V40.3899ZM111.538 20.5665L110.451 23.5636C114.708 22.7148 118.913 22.7148 118.913 22.7148L120 19.7172C120 19.7172 115.769 19.7172 111.538 20.5665ZM82.0263 36.6857C84.5712 37.1503 87.1953 37.3923 89.8743 37.3923H89.8751C92.6247 37.3923 94.6217 36.7796 94.8368 34.9118C94.9421 34.0234 94.1019 33.3836 92.5628 32.5346C90.8013 31.5632 89.3216 31.0775 87.7915 30.0541C86.2607 29.0299 85.6012 27.4189 86.1179 25.7127C86.7196 23.7186 88.1185 22.564 90.2525 21.4742C92.7532 20.1976 94.7344 19.7175 99.5577 19.7175C102.595 19.7175 105.566 20.0109 108.44 20.5667L107.405 23.4202C104.859 22.9563 102.237 22.7149 99.5577 22.7149C96.8066 22.7149 94.809 23.3283 94.5935 25.1947C94.4903 26.0853 95.3292 26.7268 96.8699 27.5735C98.63 28.5441 100.111 29.0292 101.641 30.0534C103.174 31.0768 103.832 32.6878 103.316 34.3958C102.713 36.3862 101.312 37.5423 99.1801 38.6328C96.6791 39.9099 94.6977 40.3892 89.8751 40.3892H89.8743C86.838 40.3892 83.8668 40.0956 80.9929 39.5388L82.0263 36.6857ZM69.7368 40.3899L74.4584 27.3666C76.0337 23.0245 70.2551 24.6112 68.9638 25.6097C67.9498 26.3923 66.1022 28.1782 65.4212 30.0519L61.6735 40.3899H61.6727H53.5213L58.2426 27.3666C59.8161 23.0245 54.0396 24.6112 52.7473 25.6097C51.733 26.3923 49.8833 28.1782 49.2035 30.0542L45.4573 40.3899H37.3031L44.7992 19.7172C47.395 19.7172 48.7998 20.3147 49.9798 21.4755C50.4099 21.8992 50.6794 22.4491 50.8266 23.0345C52.3561 22.1097 53.7078 21.417 54.6177 21.0618C56.3132 20.3974 58.4188 19.7164 61.0159 19.7176C63.6108 19.7176 65.0163 20.3151 66.1948 21.4758C66.6275 21.8996 66.8973 22.4495 67.0442 23.0349C68.5727 22.1101 69.9259 21.4174 70.8358 21.0622C72.5295 20.3978 74.6366 19.7168 77.2325 19.718C79.8287 19.718 81.2334 20.3155 82.4121 21.4762C83.5903 22.6319 83.5638 24.7464 83.1366 25.9186L77.8897 40.3907H69.7368V40.3899Z" fill="#000000" />
                        <path d="M28.1691 36.4577C27.2562 38.552 25.2896 42.4456 22.35 45.0537C20.6791 46.633 18.6038 47.955 16.3291 48.8939C16.2865 48.9099 16.2429 48.9191 16.1986 48.9191C16.1533 48.9191 16.1078 48.9103 16.065 48.8923C13.7647 47.9176 11.8512 46.6994 10.0435 45.0604C7.75011 42.9801 5.68076 39.9231 4.21573 36.452C2.04358 31.3027 0.978304 25.3311 0.95357 18.4492C0.95241 18.3381 1.00935 18.2339 1.10391 18.1735C5.53428 15.2898 11.522 12.7815 16.11 11.9362C16.1513 11.9286 16.1934 11.9286 16.2353 11.9362C18.1603 12.295 20.2027 12.8886 22.4959 13.7586C25.8138 15.0172 28.9607 16.5725 31.3234 18.153C31.4157 18.2134 31.4712 18.3162 31.4712 18.4255C31.4487 25.1893 30.3468 31.1825 28.1691 36.4577Z" fill="#ff0000" />
                        <path d="M26.2735 33.6182C26.0624 33.7562 25.6315 33.5437 25.4512 33.7276C25.3531 34.4296 26.2102 33.9128 26.2997 33.6495C26.2988 33.6306 26.2966 33.6113 26.2735 33.6182Z" fill="white" />
                        <path d="M26.0567 31.0636C25.9543 31.2047 25.7309 31.2209 25.5817 31.3161C25.5495 31.851 26.1343 31.2908 26.0567 31.0636Z" fill="white" />
                        <path d="M24.6095 35.8683C24.8835 35.4713 24.9719 34.8271 25.0686 34.224C25.1184 33.9002 25.1605 33.6074 25.2554 33.3681C25.3586 33.1108 25.5351 32.9099 25.596 32.6484C25.6547 32.3998 25.5547 32.2153 25.4672 32.0123C25.263 31.5428 25.0603 31.0823 24.68 30.843C24.232 30.5597 23.5298 30.6405 22.8934 30.6918C22.5939 30.716 22.2936 30.7458 22.002 30.7847C21.6878 30.8262 21.3712 30.8597 21.0732 30.8537C19.7978 30.8321 19.0622 30.214 18.9236 29.0592C18.9224 29.0516 18.922 29.0456 18.9118 29.0472C18.7339 30.1985 19.384 30.8841 20.3221 31.086C20.3941 31.2452 20.5635 31.3868 20.5099 31.607C20.4455 31.8695 20.0142 31.8809 19.7102 31.8376C19.3826 31.7938 19.1361 31.6496 18.9464 31.5141C18.5011 31.1928 18.2032 30.7534 17.948 30.3452C18.1648 30.9679 18.5729 31.5087 19.0645 31.8738C19.5598 32.242 20.2894 32.5428 21.1199 32.4876C21.6793 32.4504 22.1892 32.3239 22.6364 32.1522C21.9899 32.1482 21.1282 32.1715 20.9446 31.7228C20.885 31.5763 20.9173 31.3462 21.0155 31.2134C21.5609 31.2795 22.0497 31.1624 22.5077 31.1326C22.8895 31.108 23.3091 31.1704 23.6234 31.2722C23.9456 31.376 24.219 31.553 24.3749 31.7814C24.6927 32.248 24.7306 32.9329 24.6105 33.5986C24.5035 34.1971 24.2833 34.7447 24.0822 35.2435C23.6518 36.3159 22.7912 37.9444 22.1087 38.5448C21.2847 39.2388 20.2612 39.64 19.0653 39.9457C18.5844 40.0682 18.0433 40.1664 17.5259 40.1883C16.3003 40.2423 15.3103 40.0717 14.6596 39.4935C14.3597 39.226 14.1277 38.8542 13.9551 38.4288C13.5616 37.4575 13.4025 36.2575 13.5323 34.8849C13.4917 34.8746 13.4601 34.9222 13.4389 34.9428C13.4006 34.9754 13.3692 35.0151 13.3322 35.0474C12.8997 35.4299 11.9961 35.9917 11.1943 35.6149C11.0471 35.5466 10.909 35.4335 10.8299 35.2784C10.6091 34.8539 10.9404 34.49 11.1943 34.2941C11.3852 34.1464 11.6394 33.9614 11.9581 34.0395C12.1453 34.0854 12.4402 34.3273 12.4398 34.5254C12.4394 34.6385 12.1828 34.8518 11.9816 34.8502C11.7771 34.8475 11.6426 34.6858 11.5468 34.583C11.5236 34.5588 11.4879 34.485 11.4409 34.5137C11.2245 35.488 12.5925 35.4504 13.0617 34.9874C13.467 34.5884 13.6205 33.75 13.2503 33.2163C13.0335 32.9054 12.6229 32.7913 12.1689 32.8574C11.7615 32.9172 11.2221 33.0279 10.9713 33.2218C10.6176 33.494 10.5698 34.0655 10.4308 34.5137C10.2991 34.9379 10.123 35.333 9.90166 35.6482C9.87435 35.6878 9.82166 35.7212 9.83107 35.7756C10.373 35.8106 10.8344 35.9512 10.9951 36.3432C11.0563 36.4973 11.0742 36.7344 11.0411 36.8879C10.9649 37.2425 10.7631 37.5332 10.9243 37.9531C11.1872 38.6457 12.1932 38.7794 12.5094 39.4119C12.6395 39.6722 12.6126 40.0373 12.7799 40.2925C12.9872 40.6076 13.4747 40.5691 13.9316 40.651C14.1856 40.6968 14.4408 40.7553 14.6361 40.8708C15.0085 41.0924 15.0207 41.6059 15.4707 41.7633C15.7432 41.857 15.9706 41.7233 16.1995 41.6591C16.3734 41.6095 16.5591 41.5817 16.7277 41.5531C17.1175 41.4918 17.4048 41.581 17.7731 41.6934C18.1416 41.8048 18.5129 41.8107 18.8192 41.6934C19.118 41.5791 19.334 41.3744 19.5709 41.1843C20.0415 40.8073 20.5081 40.4484 21.1451 40.2473C21.788 40.0425 22.5551 39.9409 22.9082 39.4934C23.0932 39.2589 23.1767 38.9044 23.2598 38.5208C23.4211 37.7833 23.6605 37.1173 24.0005 36.5984C24.1726 36.3338 24.4325 36.1255 24.6095 35.8683Z" fill="white" />
                        <path d="M21.7834 29.9106C22.2015 29.9436 22.7695 30.0719 22.9231 30.316C22.8217 29.9837 22.1907 28.1407 19.2457 28.267C19.8342 28.4431 20.5041 28.6445 21.0089 28.9616C21.1645 29.0597 21.3877 29.2019 21.3613 29.436C21.3317 29.6939 20.8427 29.9439 20.4914 29.9687C20.1108 29.9956 19.822 29.8179 19.5988 29.7023C19.9723 30.1784 20.5842 30.5354 21.4554 30.4435C21.4339 30.3358 21.2838 30.2066 21.3487 30.0381C21.3924 29.9262 21.5814 29.8943 21.7834 29.9106Z" fill="white" />
                        <path d="M17.4534 34.7336C17.6531 34.7551 17.8493 34.866 18.0063 34.9189C18.0205 34.8615 17.951 34.8361 17.912 34.8032C17.4656 34.4212 16.427 34.5763 16.1969 35.0455C16.2375 35.1263 16.3787 35.1353 16.397 35.2315C16.4166 35.3415 16.2619 35.4942 16.1855 35.579C15.9774 35.8038 15.7804 35.9321 15.5513 36.0881C15.4354 36.1651 15.3356 36.2983 15.1985 36.2847C15.2672 36.0098 15.4144 35.9005 15.5394 35.6594C15.6207 35.5001 15.8291 35.0805 15.7152 34.906C15.6445 34.7996 15.3003 34.8566 15.245 34.7327C15.2001 34.6321 15.2835 34.5029 15.3379 34.4426C15.5017 34.2678 15.8378 34.1686 16.1374 34.1061C15.6823 34.1069 14.8529 34.2565 14.6577 34.6399C14.5272 34.8949 14.6429 35.2552 14.9277 35.2879C15.0371 35.6422 14.7519 36.0823 14.5398 36.2487C14.4927 36.287 14.4249 36.3336 14.3636 36.341C14.0096 36.3897 14.1086 35.979 14.0235 35.7284C13.9913 35.6345 13.9309 35.5622 13.8818 35.4956C13.7819 36.4028 13.9797 37.302 14.1877 38.0201C14.1643 37.7667 14.2093 37.5173 14.364 37.4413C14.725 37.2654 15.2105 37.5342 15.6325 37.5562C16.0718 37.5815 16.3256 37.3096 16.6316 37.3022C16.7899 37.2988 16.9068 37.4078 17.0545 37.3722C17.1514 37.3478 17.2371 37.1651 17.3242 37.0485C17.4114 36.9319 17.52 36.8103 17.6301 36.7469C18.0511 36.5057 18.4831 36.8379 18.7583 36.9906C18.5148 36.5367 17.6926 36.1869 17.0664 36.4926C16.9385 36.5544 16.8295 36.7175 16.6785 36.8054C16.4386 36.9429 16.1193 36.9045 15.8094 36.8854C15.7031 36.8791 15.5867 36.9107 15.5038 36.8395C15.5829 36.4426 15.9629 36.4297 16.2425 36.2603C16.6476 36.0168 17.0352 35.6481 17.0776 35.0678C17.0834 34.9919 17.0508 34.8806 17.1133 34.8017C17.1713 34.7295 17.3164 34.7181 17.4534 34.7336Z" fill="white" />
                        <path d="M6.5984 24.4241C6.68561 24.6063 6.59569 24.8515 6.61051 25.0266C6.8853 24.2892 7.4104 23.7052 7.91437 23.1971C7.94219 23.1684 8.0155 23.1005 7.9726 23.1156C7.7076 23.2409 7.55687 23.4781 7.19706 23.51C6.99196 23.2803 6.9939 22.5813 7.26766 22.4326C7.60286 22.5387 7.82406 22.2438 7.78464 21.9354C7.72113 21.4429 7.11242 21.1146 6.83312 20.9157C6.98101 21.1004 7.26392 21.2709 7.32653 21.5404C7.3492 21.6383 7.34353 21.8255 7.24498 21.8534C7.08833 21.898 6.99712 21.7256 6.84446 21.7491C6.71073 21.7705 6.64903 22.0039 6.62172 22.1656C6.59402 22.3255 6.57766 22.5928 6.58629 22.7802C6.59028 22.881 6.62738 23.0371 6.55125 23.1152C6.46004 23.0705 6.43917 22.9508 6.3982 22.861C6.2525 22.5394 5.99922 22.1079 6.10409 21.679C6.16902 21.6541 6.29269 21.6875 6.33933 21.6445C6.36071 21.3781 6.17108 21.1308 5.99871 20.9612C5.76089 20.7263 5.29312 20.5655 4.91784 20.6954C5.16378 20.7371 5.71194 20.7806 5.7167 21.0534C5.71864 21.1548 5.59689 21.2951 5.5643 21.3774C5.37299 21.8525 5.59187 22.4612 5.82196 22.7672C5.95619 22.9447 6.14634 23.1103 6.03336 23.439C5.88611 23.4311 5.74865 23.3291 5.61094 23.254C5.41473 23.146 5.20938 23.0426 5.11675 22.8712C5.01691 22.6855 5.0097 22.4943 4.88203 22.3503C4.55301 21.9798 3.8393 21.7197 3.31897 22.0365C3.75853 22.02 4.16756 22.0516 4.34147 22.3382C4.41748 22.4643 4.46682 22.6779 4.48241 22.8712C4.48846 22.9467 4.46682 23.0506 4.50598 23.114C4.57426 23.2269 4.78438 23.2068 4.90599 23.2762C5.07038 23.3715 5.16764 23.6269 5.35199 23.7862C5.39605 23.8249 5.45402 23.871 5.50414 23.9017C5.78601 24.0722 6.45836 24.1335 6.5984 24.4241Z" fill="white" />
                        <path d="M15.9742 18.4175C16.1103 18.5328 16.3654 18.729 16.5181 18.7254C16.7607 18.72 16.8829 18.5029 17.0525 18.4035C16.2098 18.0292 15.437 17.4898 14.6814 17.0446C14.7933 17.2197 14.9481 17.3715 15.0993 17.5476C15.3732 17.8678 15.6497 18.1397 15.9742 18.4175Z" fill="white" />
                        <path d="M9.35822 34.8348C8.89766 34.1241 6.57517 31.1207 8.39034 26.6974C10.8682 20.6594 17.569 22.3027 18.2003 22.5489C18.2738 22.0441 18.4998 21.5212 19.0866 21.392C19.332 21.3383 19.5755 21.3601 19.8003 21.395C19.1956 21.6186 18.5472 21.8923 18.5779 22.5303C18.6042 23.0972 19.1872 23.5021 19.6715 23.5906H19.6693C19.6693 23.5906 20.0537 23.6733 20.3328 23.4994C20.3388 23.4962 20.3419 23.4929 20.3467 23.4907C20.4227 23.4458 20.4911 23.3964 20.5875 23.3669C20.7883 23.3043 20.9924 23.2886 21.2004 23.3381C21.2604 23.3515 21.3687 23.4458 21.465 23.4405C21.529 23.4372 21.6237 23.3511 21.711 23.3342C21.9479 23.2925 22.1755 23.4199 22.3886 23.5076C22.5391 23.5689 22.9337 23.6259 22.9571 23.8243C22.9746 23.9662 22.7503 24.1344 22.6361 24.2205C22.4785 24.3398 22.335 24.411 22.141 24.4903C22.7958 24.435 24.1025 23.9342 23.9046 24.777C23.8836 24.8682 23.8356 24.9421 23.8522 24.9841C24.5274 24.756 24.7401 24.1854 24.6391 23.3851C24.5476 23.4131 24.4767 23.584 24.4023 23.6367C24.4023 23.6354 24.4023 23.633 24.4011 23.6295C24.4 23.4002 24.4175 23.0585 24.2603 22.9131C24.3354 23.3327 24.1167 23.5349 23.8148 23.6783C23.5741 23.2618 23.3025 22.8845 23.0064 22.5418C22.975 22.6738 22.9921 22.8431 22.951 22.9708C22.8645 22.7329 22.6766 22.5958 22.4409 22.5643C22.2887 22.543 22.1229 22.5936 21.9425 22.5649C21.7106 22.529 21.4403 22.362 21.4235 22.1825C21.3937 21.8932 21.9173 21.7576 22.1805 21.6884C22.2367 21.8741 22.3155 22.0306 22.3766 22.2108C22.6214 22.021 23.0091 21.725 23.502 21.7093C23.6194 21.7064 23.8839 21.754 23.9241 21.8369C24.0186 22.0309 23.7758 22.2572 23.7009 22.3368C23.6596 22.3786 23.5903 22.4306 23.6114 22.455C24.0658 22.3395 24.2746 22.0441 24.5869 21.8241C24.7536 22.0416 24.8171 22.5111 24.793 22.8259C25.1522 22.4724 25.1608 21.8628 25.1275 21.2209C25.5005 21.3438 25.7516 21.6274 26.0006 21.9147C25.7986 21.5359 25.5309 21.236 25.2071 21.0337C25.0928 20.962 24.9445 20.9239 24.8568 20.8386C24.7786 20.7612 24.6805 20.4867 24.5776 20.4686C24.4431 20.4441 24.271 20.5937 24.1105 20.6059C23.8344 20.6255 23.6834 20.4333 23.6292 20.1595C22.9534 20.3508 22.6918 19.9325 22.5364 19.4257C22.5097 19.3358 22.5097 19.2173 22.4683 19.119C22.4167 19.0007 22.1494 18.8763 22.0093 18.8223C21.8184 18.7482 21.5877 18.7155 21.369 18.7502C21.1737 18.7816 21.0262 18.8773 20.7967 18.8902C20.2431 18.9218 19.6639 18.6778 19.2142 18.4609C17.8713 17.8117 16.7668 16.8317 15.8471 15.6651C15.8105 15.6185 15.7848 15.5501 15.721 15.5308C15.8618 15.9802 16.1237 16.3531 16.3671 16.7026C17.1089 17.7644 18.0787 18.5444 19.0259 19.2836C18.6413 19.3229 18.3477 19.1857 18.0887 19.0432C17.8269 18.8993 17.56 18.7437 17.3293 18.5546C16.34 19.4011 14.3651 19.4998 12.7703 19.8764C13.4347 19.8573 14.4219 20.0673 15.0005 20.1625C14.9945 20.1633 14.9894 20.1646 14.9837 20.1656V20.1648C12.2035 20.2748 9.80203 21.0912 8.13758 22.6678C8.56993 22.5074 8.96169 22.3077 9.44144 22.1936C8.75364 22.8216 8.07265 23.4734 7.52681 24.231C6.98149 24.9885 6.39751 25.7827 6.37484 27.0341C6.71263 26.7109 7.05157 26.2876 7.51458 26.0499C7.12668 26.8352 6.7934 27.7393 6.5284 28.6901C6.29458 29.5254 5.95383 30.9214 6.5038 31.7C6.54038 31.4198 6.54038 31.1033 6.7277 30.9708C7.05299 31.7403 7.61029 33.2969 9.35822 34.8348ZM21.7107 19.615C21.8686 19.6508 22.0558 19.6463 22.1387 19.6929C22.2969 19.7861 22.2978 20.0124 22.4012 20.1944C21.7727 20.2988 21.5673 19.8444 21.2683 19.5135C21.3733 19.5211 21.5355 19.5752 21.7107 19.615Z" fill="white" />
                        <path d="M14.048 27.4386C13.8419 27.4386 13.1514 27.3259 13.1314 27.5547C13.1197 27.6943 13.4172 27.802 13.5782 27.8438C14.1928 28.0028 15.0377 27.9454 15.6576 27.8904C16.5321 27.8111 17.4045 27.6024 18.1013 27.3457C19.2561 26.922 20.1947 26.322 20.9592 25.5446C21.1708 25.3292 21.1498 25.2696 20.9247 25.4616C20.3418 25.9597 19.6398 26.3493 18.8644 26.6635C17.497 27.2158 15.9282 27.4386 14.048 27.4386Z" fill="white" />
                        <path d="M17.1607 30.3225C16.1195 30.4041 15.1819 30.2881 14.3655 30.1016C13.56 29.9182 12.8277 29.5559 12.3205 29.0954C12.1092 28.9024 11.9782 28.549 11.6267 28.6312C11.5945 28.8873 11.8001 29.0751 11.9449 29.2331C12.3989 29.7307 13.0718 30.0591 13.7768 30.2754C14.7503 30.5752 16.1096 30.6029 17.1607 30.3225Z" fill="white" />
                        <path d="M19.8862 27.2298C18.6745 27.8811 17.3305 28.4565 15.5748 28.5616C14.86 28.6046 14.1551 28.4495 13.6366 28.2611C13.3894 28.1702 13.1093 28.0493 12.8733 27.9135C12.6902 27.8084 12.2749 27.6087 12.2848 27.3801C12.2977 27.0961 12.9628 27.0314 13.2372 27.0225C19.3667 26.8187 20.5648 24.1459 20.56 24.0367C20.5561 23.9416 20.4551 24.0525 20.4551 24.0525C18.847 26.1228 14.7055 26.3499 14.7055 26.3499C13.6802 26.4937 12.6493 26.2601 12.121 25.7366C12.006 25.6224 11.9117 25.4627 11.8737 25.2848C11.7547 25.4239 11.6744 25.5737 11.534 25.7239C11.3979 25.8698 10.9985 26.3029 10.9704 25.7938C10.948 25.4156 11.0581 25.3376 11.205 25.111C11.2817 24.9927 11.3626 24.8738 11.4281 24.7871C11.8646 24.2136 12.2269 23.6246 12.7365 23.1538C12.7798 23.1127 12.8634 23.0648 12.842 23.0267C9.86623 24.328 8.95091 26.6917 8.62072 27.8782C8.45132 28.4851 8.34967 29.1796 8.34967 29.882C8.34967 30.6065 8.44719 31.2925 8.5965 31.92C8.89487 33.1725 9.24863 34.0442 9.79795 35.0209C9.98127 34.7753 10.0525 34.4481 10.1572 34.1467C10.2698 33.8234 10.3498 33.3992 10.5088 33.1351C10.8823 32.5139 12.927 32.6735 12.3681 32.2452C12.2068 32.1203 12.0531 31.9742 11.9099 31.8275C11.6274 31.538 11.3629 31.1951 11.1231 30.855C10.6455 30.1771 10.2442 29.3609 10.2059 28.296C10.7518 29.703 11.5773 30.8859 12.8973 31.5267C13.3361 31.74 13.8476 31.9661 14.4364 31.9548C12.8774 31.658 11.9221 30.4549 11.2756 29.1869C11.1742 28.9894 11.0295 28.8015 10.9821 28.6318C10.9631 28.5635 10.9548 28.4762 10.9712 28.4113C11.0638 28.0216 11.5363 28.2133 11.8168 28.3192C11.9887 28.3852 12.1771 28.4392 12.3335 28.4804C13.4307 28.7777 14.6309 28.9681 16.0112 28.8292C16.8323 28.7454 17.5563 28.5389 18.1954 28.2733C18.8321 28.0062 19.4063 27.6692 19.8862 27.2298Z" fill="white" />
                        <path d="M32.1741 17.6199C28.5357 15.1158 21.8868 12.0351 16.3708 11.0187C16.2216 10.9932 16.146 10.9944 16.0151 11.0187C10.6223 11.9993 4.08135 15.0321 0.212023 17.6199C0.0973667 17.691 0.000231347 17.8697 0.000231347 18.0086C-0.0208963 25.9455 1.40728 32.2088 3.38156 36.8764C4.64587 39.8859 6.71406 43.3509 9.43103 45.797C11.4407 47.6393 13.4832 48.884 16.0154 49.9205C16.1178 49.9616 16.2746 49.9602 16.3711 49.9205C19.0551 48.8588 21.2696 47.3914 22.9561 45.797C25.7054 43.356 27.7612 39.729 29.0052 36.8764C31.2289 31.4878 32.4084 25.1764 32.3866 18.0086C32.3866 17.8625 32.2966 17.6967 32.1741 17.6199ZM28.1691 36.4577C27.2562 38.552 25.2895 42.4456 22.35 45.0537C20.6791 46.633 18.6038 47.955 16.3291 48.8939C16.2864 48.9099 16.2429 48.9192 16.1986 48.9192C16.1532 48.9192 16.1078 48.9103 16.065 48.8924C13.7647 47.9177 11.8512 46.6995 10.0435 45.0604C7.75009 42.9801 5.68074 39.9232 4.21572 36.452C2.04356 31.3027 0.978288 25.3312 0.953553 18.4492C0.952393 18.3382 1.00934 18.2339 1.10389 18.1735C5.53426 15.2898 11.522 12.7816 16.11 11.9362C16.1513 11.9286 16.1934 11.9286 16.2353 11.9362C18.1602 12.295 20.2027 12.8886 22.4959 13.7586C25.8137 15.0172 28.9607 16.5726 31.3234 18.153C31.4157 18.2134 31.4712 18.3162 31.4712 18.4255C31.4486 25.1893 30.3468 31.1825 28.1691 36.4577Z" fill="#A6A8AB" />
                    </svg>
                </div>

                <!-- louis phillipe -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" width="100" height="100" viewBox="0 0 476.11 117.43">
                        <g>
                            <path class="cls-1" d="M271.17,253.09l-.79,0c-13.89,0-27.76,0-41.64,0l.1-5.58,43.18,0,.09,5.47Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M135.68,307c-.94,0-2,0-1.19-.42a2.5,2.5,0,0,0,1.46-2.37c-.15-7.65-.08-15.33,0-23a13.13,13.13,0,0,0-.2-1.67c-.08-.39-.65-.48-1-.71-.72-.54,0-.85.89-.82,1.91,0,3.66,0,5.55,0,.7,0,1.06.52.43.86l-.71.37a12.27,12.27,0,0,0-.36,2c0,7.64,0,15.34,0,23a3.39,3.39,0,0,0,.2.79c.06.93,1.33,1.66,2.08,2C140.45,307,138.06,307,135.68,307Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M228.55,241.82a42.12,42.12,0,0,0-13.21-34.06c3-.72,5.44.38,7.9,2.19,3.18-3.21,6.48-4.72,10.54-2.08-2.88.77-5.4,2.14-5.83,5.24-.28,2,1.79,4.34,3.61,4.89a5,5,0,0,0,5.69-2.52c1-1.72.08-3.54-.43-5.2l2-1.12c.52.12.21,1,.31,1.57a6.46,6.46,0,0,1-.27,2.5c.74,2,2.26,3.81,4.55,3.93,2.44.12,4.29-1.95,5-4,.87-2.74-.45-6.56-3.37-7.39a6.13,6.13,0,0,0-4.66.75c-1.56-2.21.33-5.45,2.28-6.47,1.77-1,3.7-.33,5.48.12.08-3.16.15-6.13,2-8.84,2.43,2.39,2.42,6,2.1,9.16,2.46-1,3.21-1.63,5.51-.53,2.58,1.22,3.15,3.93,2.9,6.55-2.93-1.61-6.33-1.07-8,1.89-1.79,3.25-.58,5.78,1.88,8a5.69,5.69,0,0,0,3.17.75,6.2,6.2,0,0,0,3.52-2.4,4.27,4.27,0,0,0,.09-3.17,5.37,5.37,0,0,1,0-2l1.69.08c.17.37.35.74.51,1.13a4.93,4.93,0,0,0,.46,5.63c1,1.43,3.25,1.94,4.86,1.79,2.41-.23,3.64-3.07,3.72-5,.12-3-3.34-4.47-5.77-5,3.62-3.19,8-1.13,10.74,2.13,1.71-2,3.9-2.57,6.36-3.12l.58,1.42c-8.9,8.62-12.57,19.18-12.43,31.48a9.68,9.68,0,0,1-.19,1.77Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M362,307.12l1.86-1.78a11.22,11.22,0,0,0,.13-1.91c-.34-7.61-.08-15.37,0-23,0-.73-.68-1.14-1.12-1.59s-.39-.87.29-.86l5.91,0c.37,0,.42.58.63.88l-1.06,1v25.71a3.14,3.14,0,0,1,1.76,1.36Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M285.3,307.1l2-1.5.06-11.48H268.23q-.06,5.06,0,10.11a4.12,4.12,0,0,0,.48,1.66l1.46,1.14h-8.31l1.59-1.66.05-25.64-1.09-.86c-.72-.57-.07-.95.84-.88a36.7,36.7,0,0,0,5.55,0c.74,0,1.18.45.54.86-1,.61-1.06.44-1.14,1.59-.23,3.24,0,6.66,0,10l19.26,0c0-3.31,0-6.61,0-9.91a3.53,3.53,0,0,0-.29-.94c-.1-.32-.51-.44-.77-.65-.62-.52-.12-.86.68-.84,1.91.06,3.63,0,5.55,0,.79,0,1.35.59.59.89a1.43,1.43,0,0,0-1,1.59c0,7.65.06,15.31,0,23,0,.67.05,1.51.11,2.2l2,1.47Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M101.61,306.77a8.71,8.71,0,0,1-7.89-8.09c-.46-5.77-.12-11.67-.2-17.43-.06-1.41,0-.2-.07-1.59l-.92-.79c-.5-.45-.32-.87.37-.84,1.9.1,3.64.06,5.54,0,1,0,1.8.22,1,.86l-1,.79a13.82,13.82,0,0,0-.13,1.59c0,4.69-.87,15.17.62,19,1.44,3.66,10.69,3.15,13.71,2.27a5,5,0,0,0,3.23-2.27c1.16-1.67.74-16.71.74-19.8a2.87,2.87,0,0,0-.21-.8c-.1-.38-.57-.53-.86-.79-.74-.68.06-.9,1.06-.84l5.11-.08c.37,0,.41.61.62.92l-1,1.08c.07,6.72.59,13.65-.32,20.31C119.94,308.3,107.29,307.21,101.61,306.77Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M485.9,307c-8.43.06-16.86,0-25.28,0a3.32,3.32,0,0,0,1.55-2.76c-.14-7.66-.1-15.32,0-23,0-.11-.12-1.49-.14-1.59l-1.52-1.46a14.76,14.76,0,0,1,1.63-.17c7.11,0,14.26-.06,21.39.05a13.93,13.93,0,0,0,1.58-.08l1.39-1a42.81,42.81,0,0,1,.18,5.07c0,.95-.12,1.67-.77,1-.32-.32-.63-.65-.94-1a4.63,4.63,0,0,0-1.44-.25c-5.54.09-11.08,0-16.61,0l0,8.52c3.7,0,7.39,0,11.08,0a4.32,4.32,0,0,0,1.47-.45l1.53-1.78c0,2.19,0,4.39-.06,6.58,0,.81-.13,1.64-.56.93l-.91-1.44-12.57-.08,0,9.08c6.08,0,12.18,0,18.26,0a13.46,13.46,0,0,0,1.41-.14c.32-.55.64-1.09,1-1.63.52-.88.54.21.57,1.22v5.69C487.58,307.87,486.7,307,485.9,307Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M349.61,307c-7.43-.07-14.8-.09-22.18,0-.87,0-1.73-.07-2.59-.1l1.66-1.3a19.77,19.77,0,0,0,.15-2.16c0-7.39,0-14.8,0-22.18,0-.5,0-1-.07-1.49-.35-.29-.69-.59-1-.89-.81-.69,0-.93,1.09-.9,1.87,0,3.72.08,5.62.09.67,0,.67.69,0,.88-.81.25-1,1.65-1,2.31.28,7.32.11,14.69.05,22l18.91,0,.85-.76,1.28-1.54,0,7.25C351.15,307.47,350.86,307.06,349.61,307Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M305.43,307l1.62-1.67c0-8-.13-16.07,0-24.09a8.35,8.35,0,0,0-.17-1.66c-.07-.35-.5-.49-.75-.72-.59-.55-.14-.81.67-.84,1.8,0,3.73,0,5.54,0,.74,0,1.23.55.53.85-1,.41-.94.71-.94,1.59,0,7.91.05,15.84,0,23.77a3.18,3.18,0,0,0,.42,1.59l1.09.67c.35.17-.68.48-1.06.5C310.16,307.12,307.68,307,305.43,307Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M36.64,307c-8.24,0-16.47-.1-24.69.06,1.65-1.18,2-1.65,2-3.62-.17-7.38-.05-14.8,0-22.18,0-.34-.12-1.34-.16-1.65s-.68-.49-1-.73c-.76-.55,0-.91.95-.8,1.6.2,3.15-.17,4.76,0,1.09.08,2,.11,1.21.82l-.93.79c-.05,1-.12,2.14-.11,3.17,0,6.83,0,13.65,0,20.47q9-.12,18-.09A8,8,0,0,0,38,303c.33-.53.66-1,1-1.57.53-.83.56.19.57,1.18l0,6.08A3.37,3.37,0,0,0,36.64,307Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M164.21,306.91a24.88,24.88,0,0,1-8.43-3,5.59,5.59,0,0,1-2.34.39l3.28-6.9c.2.43.41.85.62,1.28-.46,1.29,1.92,2.61,2.91,3.07,4.65,2.19,10.44,2.66,15.05.45a4.56,4.56,0,0,0,2.44-5.11A3.4,3.4,0,0,0,175.3,295c-4.58-.66-9.64-.76-14.26-1.05a7.18,7.18,0,0,1-6.38-6.36c-.28-3.91,2.11-6.76,5.59-8.27a23,23,0,0,1,9.5-1.63c3.38.09,6.3,1.4,9.51,2.16.52-.23,1.05-.45,1.59-.67s.81,0,.56.48l-2.86,5.93c-.15.29-.61-.23-.91-.35-.33-1.55-.88-1.85-2.34-2.48-3.88-1.71-8.72-1.44-12.68-.15a4.66,4.66,0,0,0-3.3,4.18c0,1.31,1.53,2.06,2.51,2.48a2.29,2.29,0,0,0,.79.12c4.55.16,9.85.13,14.26,1.11,3.88.86,6,4.47,5.72,8.18-.32,4.72-5.57,7.42-9.68,8.12A29.92,29.92,0,0,1,164.21,306.91Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M64.37,307.17c-5.7,0-11.69-2.52-14.35-7.7-3.24-6.36-1.38-15.36,4.85-19.15s15.42-3.39,21.39.58c5.72,3.81,6.34,11.89,4.29,17.78C78.38,304.92,70.49,307.34,64.37,307.17Zm-4-4.49c3,.79,6.56,1.08,9.51,0a10.2,10.2,0,0,0,6.73-9.53c0-2.86-.53-6.2-2.77-8.26a13.38,13.38,0,0,0-13.47-2.5,10.28,10.28,0,0,0-6.87,10C53.49,296.58,55.84,301.63,60.41,302.68Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M223.63,307c-.95.11-2.08,0-1.21-.41a2.45,2.45,0,0,0,1.22-2.37c0-7.92,0-15.87.08-23.77a2.58,2.58,0,0,0-.22-.8c-.1-.36-.52-.53-.77-.79-.68-.69-.07-.95.9-.91,6,.15,12.15.09,18.23.07,3.82,0,8.94,1.9,9.1,6.39s-1.05,9.06-5.93,9.78c-5.33.78-11.06.41-16.43.3,0,3.5,0,7-.07,10.52.16.29.34.59.51.89l1.38,1.29A34.23,34.23,0,0,0,223.63,307Zm5-16.24c3.22.13,15,.66,16.9-1.6,1.17-1.37,1.61-4.28.39-5.67a4.1,4.1,0,0,0-3.27-1.44c-4.68,0-9.39,0-14.07-.12A78.84,78.84,0,0,0,228.63,290.77Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M381.34,307l2-1.57-.05-25.74a2.35,2.35,0,0,0-1.07-.85c-.71-.32-.13-.81.66-.81,6.06,0,12.14-.16,18.23,0,4.38.1,8.71,1.63,9.43,6.39.64,4.24-1.13,8.93-5.47,9.75-4.54.84-12.27.42-17,.24v11.25l1.63.84a5.12,5.12,0,0,1-1.24.48C386.19,307.13,383.6,307,381.34,307Zm6.72-16.18c3.82-.12,7.64-.06,11.47-.06a17.59,17.59,0,0,0,4-.5,4.41,4.41,0,0,0,2.78-5.08,3.58,3.58,0,0,0-1.5-2.38c-3.41-1.6-12.51-.78-16.72-.79Q387.93,286.45,388.06,290.85Z" transform="translate(-11.95 -191.28)" />
                            <path class="cls-1" d="M421,306.91l1.72-1.43c0-.94.07-1.9.06-2.84-.05-7.67-.08-15.34,0-23l-1.18-.77c-.7-.46-.07-.84.77-.81,6.39.16,12.81.07,19.22,0,3.68-.05,7.47,1.84,8.36,5.55a9,9,0,0,1-3.61,9.82c-2.43,1.65-15,1.07-18.64,1.08q0,4.85,0,9.71a4,4,0,0,0,.38,1.61l1.72,1.14Zm6.72-16.06c4.09-.08,8.17,0,12.25-.08,2.27,0,4.83-.66,5.65-3.18.39-1.25.26-3.7-.9-4.53a5.89,5.89,0,0,0-3.16-1c-4.64-.06-9.25,0-13.87,0Q427.51,286.47,427.69,290.85Z" transform="translate(-11.95 -191.28)" />
                        </g>
                    </svg>
                </div>

                <!-- lenovo -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M214.592 225.828c19.399 0 32.613 13.401 32.613 31.869v47.546a2.231 2.231 0 0 1-2.231 2.231h-17.589a2.231 2.231 0 0 1-2.231-2.231v-43.461c0-10.619-9.441-16.965-18.564-16.965-11.805 0-18.182 8.741-18.182 16.965v43.461a2.231 2.231 0 0 1-2.231 2.231h-17.584a2.231 2.231 0 0 1-2.231-2.231v-75.837c0-1.232.999-2.231 2.231-2.231h17.588c1.232 0 2.231.999 2.231 2.232l-.004 9.274.004-.004-.004.017c6.425-8.58 16.939-12.866 26.184-12.866" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="M236.487 305.244v-43.461c0-10.619-9.441-16.965-18.564-16.965a20.89 20.89 0 0 0-5.784.792c7.037 1.996 13.016 7.725 13.016 16.173v43.461c0 1.232.999 2.231 2.231 2.231h11.333a2.231 2.231 0 0 1-2.232-2.231zM177.695 305.244v-75.837c0-1.232.999-2.231 2.231-2.231h-11.333a2.231 2.231 0 0 0-2.231 2.231v75.837c0 1.232.999 2.231 2.231 2.231h11.333a2.231 2.231 0 0 1-2.231-2.231z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M405.483 227.179h20.292a2.231 2.231 0 0 1 2.063 3.08l-31.202 75.811a2.231 2.231 0 0 1-2.063 1.382h-21.174a2.231 2.231 0 0 1-2.063-1.382l-31.202-75.811a2.231 2.231 0 0 1 2.063-3.08h20.297a2.23 2.23 0 0 1 2.096 1.467l17.303 47.479c.713 1.956 3.479 1.956 4.192 0l17.303-47.479a2.228 2.228 0 0 1 2.095-1.467z" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="m382.668 306.07-31.202-75.811a2.231 2.231 0 0 1 2.063-3.08h-11.333a2.231 2.231 0 0 0-2.063 3.08l31.202 75.811a2.231 2.231 0 0 0 2.063 1.382h11.333a2.231 2.231 0 0 1-2.063-1.382z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M158.165 259.658c-1.406-8.011-4.604-15.158-9.353-20.681-7.407-8.602-18.369-13.153-31.717-13.153-24.245 0-42.527 17.886-42.527 41.51 0 24.237 18.325 41.506 44.957 41.506 13.772 0 27.829-6.024 35.524-13.448.99-.955.919-2.557-.172-3.396l-10.659-8.194a2.228 2.228 0 0 0-2.65-.049c-8.476 6.057-13.667 7.54-21.717 7.54-5.928 0-10.855-1.433-14.73-4.023-1.479-.989-1.249-3.236.395-3.918l51.299-21.281c.953-.396 1.529-1.397 1.35-2.413zm-25.857-4.11-33.411 13.861c-1.445.599-3.042-.44-3.091-2.003-.213-6.698 1.76-12.05 4.729-16.037 3.755-5.042 9.736-8.002 16.96-8.002 6.986 0 12.49 3.508 15.836 8.907.733 1.183.263 2.741-1.023 3.274z" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="M85.901 267.334c0-21.813 15.591-38.721 37.066-41.188a54.44 54.44 0 0 0-5.872-.322c-24.245 0-42.527 17.886-42.527 41.51 0 24.237 18.325 41.506 44.957 41.506 1.807 0 3.618-.109 5.419-.306-23.389-2.37-39.043-18.804-39.043-41.2z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M72.467 289.459v15.785a2.231 2.231 0 0 1-2.231 2.231H2.231A2.231 2.231 0 0 1 0 305.244v-99.852c0-1.232.999-2.231 2.231-2.231h17.888c1.232 0 2.231.999 2.231 2.231v79.606c0 1.232.999 2.231 2.231 2.231h45.655a2.23 2.23 0 0 1 2.231 2.23z" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="M11.333 305.244v-99.852c0-1.232.999-2.231 2.231-2.231H2.231A2.231 2.231 0 0 0 0 205.392v99.852c0 1.232.999 2.231 2.231 2.231h11.333a2.232 2.232 0 0 1-2.231-2.231z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M468.995 225.824c-24.28 0-43.305 18.23-43.305 41.501 0 23.537 18.895 41.501 43.01 41.501 24.28 0 43.301-18.234 43.301-41.501-.001-23.536-18.891-41.501-43.006-41.501zm0 64.108c-12.079 0-21.55-9.932-21.55-22.607 0-13.275 8.941-22.607 21.255-22.607 12.084 0 21.551 9.932 21.551 22.607-.001 13.019-8.938 22.607-21.256 22.607z" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="M474.735 289.165c1.781.485 3.647.767 5.592.767 12.318 0 21.255-9.589 21.255-22.607 0-12.675-9.467-22.607-21.55-22.607a22.48 22.48 0 0 0-5.774.758c9.3 2.515 15.991 11.201 15.991 21.848.001 10.889-6.262 19.354-15.514 21.841z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M437.022 267.326c0-21.426 16.132-38.566 37.64-41.152a47.35 47.35 0 0 0-5.667-.35c-24.28 0-43.305 18.23-43.305 41.501 0 23.537 18.895 41.501 43.01 41.501 1.925 0 3.813-.127 5.665-.35-21.342-2.567-37.343-19.494-37.343-41.15z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M299.234 225.824c-24.285 0-43.305 18.23-43.305 41.501 0 23.537 18.89 41.501 43.005 41.501 24.28 0 43.305-18.234 43.305-41.501 0-23.536-18.895-41.501-43.005-41.501zm0 64.108c-12.084 0-21.55-9.932-21.55-22.607 0-13.275 8.937-22.607 21.251-22.607 12.084 0 21.55 9.932 21.55 22.607-.001 13.019-8.938 22.607-21.251 22.607z" fill="#000000" data-original="#579add" opacity="1" class=""></path>
                            <path d="M267.261 267.326c0-21.426 16.129-38.566 37.639-41.152a47.332 47.332 0 0 0-5.666-.35c-24.284 0-43.305 18.23-43.305 41.501 0 23.537 18.89 41.501 43.005 41.501 1.925 0 3.813-.127 5.665-.35-21.341-2.567-37.338-19.494-37.338-41.15z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                            <path d="M304.973 289.165c1.781.485 3.648.767 5.594.767 12.314 0 21.251-9.589 21.251-22.607 0-12.675-9.467-22.607-21.55-22.607-2.028 0-3.953.276-5.773.758 21.237 5.745 21.208 38.114.478 43.689z" fill="#000000" data-original="#4987ce" class="" opacity="1"></path>
                        </g>
                    </svg>
                </div>

                <!-- nvidia -->
                <div>
                    <svg viewBox="0 0 946.4 179.7" xmlns="http://www.w3.org/2000/svg" width="100" height="100">
                        <path d="M578.2 34v118h33.3V34zm-262-.2v118.1h33.6V60.2l26.2.1c8.6 0 14.6 2.1 18.7 6.5 5.3 5.6 7.4 14.7 7.4 31.2v53.9h32.6V86.7c0-46.6-29.7-52.9-58.7-52.9zm315.7.2v118h54c28.8 0 38.2-4.8 48.3-15.5 7.2-7.5 11.8-24.1 11.8-42.2 0-16.6-3.9-31.4-10.8-40.6C723 37.2 705.2 34 678.6 34zm33 25.6h14.3c20.8 0 34.2 9.3 34.2 33.5s-13.4 33.6-34.2 33.6h-14.3zM530.2 34l-27.8 93.5L475.8 34h-36l38 118h48l38.4-118zm231.4 118h33.3V34h-33.3zM855 34l-46.5 117.9h32.8l7.4-20.9h55l7 20.8h35.7L899.5 34zm21.6 21.5l20.2 55.2h-41z" />
                        <path d="M101.3 53.6V37.4c1.6-.1 3.2-.2 4.8-.2 44.4-1.4 73.5 38.2 73.5 38.2S148.2 119 114.5 119c-4.5 0-8.9-.7-13.1-2.1V67.7c17.3 2.1 20.8 9.7 31.1 27l23.1-19.4s-16.9-22.1-45.3-22.1c-3-.1-6 .1-9 .4m0-53.6v24.2l4.8-.3c61.7-2.1 102 50.6 102 50.6s-46.2 56.2-94.3 56.2c-4.2 0-8.3-.4-12.4-1.1v15c3.4.4 6.9.7 10.3.7 44.8 0 77.2-22.9 108.6-49.9 5.2 4.2 26.5 14.3 30.9 18.7-29.8 25-99.3 45.1-138.7 45.1-3.8 0-7.4-.2-11-.6v21.1h170.2V0H101.3zm0 116.9v12.8c-41.4-7.4-52.9-50.5-52.9-50.5s19.9-22 52.9-25.6v14h-.1c-17.3-2.1-30.9 14.1-30.9 14.1s7.7 27.3 31 35.2M27.8 77.4s24.5-36.2 73.6-40V24.2C47 28.6 0 74.6 0 74.6s26.6 77 101.3 84v-14c-54.8-6.8-73.5-67.2-73.5-67.2z" fill="#000000" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->
    <?php
    include "pages/_footer.php";
    ?>
</body>

</html>
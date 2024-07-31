<?php
include "include/connect.php";
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


    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <?php
    include "pages/_navbar.php";
    ?>
    <div class="p-2 flex flex-col items-center max-w-screen-lg m-auto outfit">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-9 text-sm py-5 px-6">
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
                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full border" src="https://m.media-amazon.com/images/I/51hd1HdngHL._SX522_.jpg" alt=""><span class="text-center text-ellipsis overflow-hidden ... ">Toys</span></a>
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
                    <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M84 108a3.988 3.988 0 0 1-2.828-1.172l-40-40a3.997 3.997 0 0 1 0-5.656l40-40c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656L49.656 64l37.172 37.172a3.997 3.997 0 0 1 0 5.656A3.988 3.988 0 0 1 84 108z" fill="#000000" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div class="bg-white rounded-full next-button w-8 h-8 z-50 absolute top-[50%] text-center flex items-center justify-center right-3">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M44 108a3.988 3.988 0 0 1-2.828-1.172 3.997 3.997 0 0 1 0-5.656L78.344 64 41.172 26.828c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l40 40a3.997 3.997 0 0 1 0 5.656l-40 40A3.988 3.988 0 0 1 44 108z" fill="#000000" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div class="p-3 mt-5 border rounded-lg transition transform hover:shadow-2xl w-56">
            <div>
                <img alt="Nike Air Force 1 '07 Men's Shoes" class=" product-card__hero-image css-1fxh5tw" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
            </div>
            <div>
                <div class="space-y-1 mt-2">
                    <p class="text-base font-medium">Nike Air Force 1 '07</p>
                    <p class="space-x-2"><del class="text-gray-400">₹10,000</del><span class="text-indigo-500">₹7,256</span></p>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <div class="flex items-center gap-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.991 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-4">
                                <g>
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605" fill="#eef502" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.991 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-4">
                                <g>
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605" fill="#eef502" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.991 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-4">
                                <g>
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605" fill="#eef502" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.991 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-4">
                                <g>
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605" fill="#eef502" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 511.991 511" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-4">
                                <g>
                                    <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605" fill="#eef502" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <p class="text-sm mr-1.5">0</p>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!-- footer -->
    <?php
    include "pages/_footer.php";
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".next-button ",
                prevEl: ".prev-button",
            },
        });
    </script>
</body>

</html>
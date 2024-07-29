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

    <!-- alpinejs CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="src/logo/favicon.svg">
</head>
<!-- daily deals
Electronics
15% off Headphon
Think Outside The 
Toy 
sports
New from apple
Beauty & Heathy -->

<body>
    <!-- navbar -->
    <?php
    include "pages/_navbar.php";
    ?>
    <div class="p-2 flex flex-col items-center">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-9 text-sm py-5 px-6">
            <div>
                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://i0.wp.com/motta.uix.store/electronic/wp-content/uploads/sites/6/2023/02/homev9-dailydeals.jpg?w=300&ssl=1" alt=""><span class="text-center text-ellipsis overflow-hidden ...">Daily Deals</span></a>
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
                <a class="flex justify-center flex-col w-24 truncate" href=""><img class="rounded-full" src="https://m.media-amazon.com/images/I/51hd1HdngHL._SX522_.jpg" alt=""><span class="text-center text-ellipsis overflow-hidden ... ">Toys</span></a>
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
        <!-- image slider -->


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[35rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="h-full w-full object-cover" src="https://www.theroyalshopbarbados.com/wp-content/uploads/2021/09/Tissot-Banner.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 1">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="h-full w-full" src="https://www.lg.com/levant_en/images/plp-b2c/tv-uhd-hero-banner-desktop.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 2">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="h-[35rem] w-full" src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/30be9689-6edb-4a3e-8c19-16fa3d9761f5.__CR0,0,970,300_PT0_SX970_V1___.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 3">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="h-[35rem] w-full" src="https://giftbig.s3.amazonaws.com/microsite/homebanner/slidebanner/slidebanner_2584.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 4">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="h-[35rem] w-full object-cover" src="https://dlcdnwebimgs.asus.com/files/media/ac91070d-1a4d-482a-a4a5-cc8d563ef7ac/v3/features/images/large/1x/kv.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Image 5">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white hover:ring-2 hover:ring-indigo-500">
                    <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white bg-white hover:ring-2 hover:ring-indigo-500">
                    <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <!-- Optional JavaScript for carousel functionality -->
        <script>
            // Initialize the carousel
            const carouselItems = document.querySelectorAll('[data-carousel-item]');
            const indicators = document.querySelectorAll('[data-carousel-slide-to]');
            const prevButton = document.querySelector('[data-carousel-prev]');
            const nextButton = document.querySelector('[data-carousel-next]');

            let currentIndex = 0;

            function showSlide(index) {
                carouselItems.forEach((item, idx) => {
                    item.classList.toggle('hidden', idx !== index);
                });
                indicators.forEach((indicator, idx) => {
                    indicator.setAttribute('aria-current', idx === index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % carouselItems.length;
                showSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
                showSlide(currentIndex);
            }

            indicators.forEach((indicator, idx) => {
                indicator.addEventListener('click', () => {
                    currentIndex = idx;
                    showSlide(currentIndex);
                });
            });

            prevButton.addEventListener('click', prevSlide);
            nextButton.addEventListener('click', nextSlide);

            // Auto slide functionality
            setInterval(nextSlide, 5000); // Change slide every 5 seconds

            // Initial slide
            showSlide(currentIndex);
        </script>

    </div>

    <!-- footer -->
    <?php
    include "pages/_footer.php";
    ?>
</body>

</html>
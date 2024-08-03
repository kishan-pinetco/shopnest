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
    <div class="p-2 flex flex-col items-center max-w-screen-xl m-auto outfit">
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
                navigation: {
                    nextEl: ".next-button ",
                    prevEl: ".prev-button",
                },
            });
        </script>

        <!-- card slider -->
        <div class="grid grid-cols-5 gap-5 my-10">
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

        <!-- slider 2 -->
        <div class="slider-container">
            <div id="slider1" class="card-slider">
                <!-- card 1 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 4 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 5 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 6 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

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

        <div class="grid grid-cols-5 gap-5 my-10">
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

        <!-- slider 2 -->
        <div class="slider-container">
            <div id="slider2" class="card-slider">
                <!-- card 1 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 4 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 5 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 6 -->
                <div class="card w-72 flex-shrink-0 p-4">
                    <div class="p-3 border rounded-lg transition transform hover:shadow-lg bg-white">
                        <div>
                            <img alt="Nike Air Force 1 '07 Men's Shoes" class="w-full h-full object-cover object-center rounded" loading="eager" sizes src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21d38052-598b-44f6-a857-123c9f72b015/air-force-1-07-shoes-WrLlWX.png">
                        </div>
                        <div class="mt-2">
                            <div class="space-y-1">
                                <p class="text-base font-medium">Nike Air Force 1 '07</p>
                                <p class="space-x-2">
                                    <del class="text-gray-400">₹10,000</del>
                                    <span class="text-indigo-500">₹7,256</span>
                                </p>
                            </div>
                            <div class="flex items-center mt-3">
                                <div class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511" class="w-4 fill-current text-yellow-400">
                                            <path d="M510.652 185.883a27.177 27.177 0 0 0-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 0 0 7.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0 0 15.957 5.184 27.14 27.14 0 0 0 13.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0 0 29.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 0 0 7.937-28.926zM258.45 409.605"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="text-sm ml-4 mt-0.5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

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

    </div>

    <!-- footer -->
    <?php
    include "pages/_footer.php";
    ?>
</body>

</html>
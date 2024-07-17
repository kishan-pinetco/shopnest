<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css file link -->
    <link rel="stylesheet" href="custom_style.css">

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Js link -->
    <script src="navbar.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favicon.svg">
</head>

<body>
    <header class="bg-black p-2 outfit overflow-hidden">
        <div class="flex items-center justify-between gap-10">
            <div class="flex">
                <button class="lg:hidden focus:outline-none" onclick="showSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M30 7a1 1 0 0 1-1 1H3a1 1 0 0 1 0-2h26a1 1 0 0 1 1 1zm-5 8H3a1 1 0 0 0 0 2h22a1 1 0 0 0 0-2zm-9 9H3a1 1 0 0 0 0 2h13a1 1 0 0 0 0-2z" data-name="Layer 13" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </button>
                <!-- logo -->
                <div class="flex">
                    <img class="w-16 h-16 translate-y-1 translate-x-1" src="../src/logo/logo3.svg" alt="">
                    <svg width="135" height="60" viewBox="0 0 355 101.76409801109908" class="looka-1j8o68f">
                        <defs id="SvgjsDefs2249"></defs>
                        <g id="SvgjsG2250" featurekey="k6v3K5-0" transform="matrix(3.263098946758052,0,0,3.263098946758052,1.0842826642604835,-11.576542400576212)" fill="#ffffff">
                            <path d="M10.34 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M16.78 15.879999999999999 l0 4.12 l-2.04 0 l0 -10.36 l2.04 0 l0 4.14 q0.54 -0.26 1.22 -0.26 q0.4 0 1.42 0.14 q1.16 0.16 1.7 0.16 q0.76 0 1.3 -0.26 l0 -3.92 l2.04 0 l0 10.36 l-2.04 0 l0 -4.34 q-0.52 0.26 -1.22 0.26 q-0.54 0 -1.6 -0.14 q-1.02 -0.14 -1.52 -0.14 q-0.74 0 -1.3 0.24 z M38.34 14.74 q0 -1.1 -0.6 -1.9 q-0.52 -0.7 -1.46 -1.08 q-0.86 -0.34 -1.9 -0.34 t-1.92 0.36 q-0.94 0.38 -1.46 1.12 q-0.58 0.8 -0.58 1.92 t0.6 1.92 q0.52 0.72 1.46 1.12 q0.88 0.36 1.9 0.36 t1.92 -0.4 q0.92 -0.42 1.46 -1.18 q0.58 -0.82 0.58 -1.9 z M40.5 14.719999999999999 q0 1.7 -0.9 3.02 q-0.82 1.22 -2.26 1.92 q-1.38 0.66 -2.98 0.66 t-2.98 -0.66 q-1.42 -0.68 -2.24 -1.88 q-0.88 -1.32 -0.88 -3 t0.9 -2.98 q0.82 -1.2 2.26 -1.86 q1.38 -0.64 2.98 -0.64 t2.96 0.6 q1.42 0.64 2.24 1.82 q0.9 1.28 0.9 3 z M46.339999999999996 11.7 l0 3.1 q0.62 -0.36 1.52 -0.5 q0.68 -0.1 1.74 -0.1 l0.92 0 q0.84 0 1.18 -0.24 q0.46 -0.28 0.46 -1.06 q0 -0.7 -0.5 -0.98 q-0.38 -0.22 -1.14 -0.22 l-4.18 0 z M46.339999999999996 20 l-2.04 0 l0 -10.36 l6.58 0 q1 0 1.76 0.4 t1.19 1.15 t0.43 1.73 q0 1.54 -1 2.44 t-2.74 0.9 l-0.92 0 q-1.38 0 -2 0.12 q-0.56 0.1 -1.26 0.48 l0 3.14 z M58.1 7.18 l-1.74 -2.1 l2.82 0 l9.58 11.4 l0 -11.4 l2.2 0 l0 14.92 l-2.16 0 l-8.56 -10.26 l0 10.26 l-2.14 0 l0 -12.82 z M77.6 16.28 l0 1.64 l6.5 0 l0 2.08 l-8.54 0 l0 -10.36 l8.16 0 l0 2.06 l-6.12 0 l0 2.52 q0.62 -0.36 1.5 -0.5 q0.68 -0.1 1.74 -0.1 l1.52 0 l0 2.06 l-1.52 0 q-1.38 0 -2 0.12 q-0.54 0.1 -1.24 0.48 z M95.94 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M108.46 11.7 l-3.9 0 l0 8.3 l-2.06 0 l0 -8.3 l-3.76 0 l0 -2.06 l9.72 0 l0 2.06 z"></path>
                        </g>
                        <g id="SvgjsG2251" featurekey="SbIu4p-0" transform="matrix(1.664253779132007,0,0,1.664253779132007,19.070915348544332,67.87988925861347)" fill="#6366f1">
                            <path d="M6.08 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M5.84 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M6.36 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M20.0615 5.84 l0 8.52 q0 2.16 0.92 3.28 t2.74 1.16 q1.82 -0.02 2.73 -1.15 t0.93 -3.21 l0 -8.6 l1.68 0 l0 8.82 q0 2.7 -1.4 4.19 t-3.94 1.51 q-2.5 0 -3.91 -1.51 t-1.43 -4.21 l0 -8.8 l1.68 0 z M36.803000000000004 5.84 l3.98 6.4 l4.1 -6.4 l2.02 0 l-5.28 8.06 l0 6.1 l-1.68 0 l0 -6.1 l-5.28 -8.06 l2.14 0 z M66.52600000000001 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M66.286 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M66.80600000000001 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M87.7875 5.84 l0 1.56 l-7.22 0 l0 4.44 l6.74 0 l0 1.56 l-6.74 0 l0 5.04 l7.58 0 l0 1.56 l-9.26 0 l0 -14.16 l8.9 0 z M98.96900000000001 5.48 q2.58 0 3.96 1.66 l-1.38 1.2 q-0.8 -1.26 -2.58 -1.3 q-1.34 0 -2.18 0.64 t-0.84 1.74 q0 0.96 0.64 1.52 t2.4 1.1 q2.28 0.66 3.23 1.61 t0.95 2.57 q0 1.88 -1.4 3 t-3.58 1.14 q-1.46 0 -2.6 -0.52 t-1.76 -1.44 l1.44 -1.18 q0.46 0.76 1.28 1.17 t1.74 0.41 q1.26 0 2.17 -0.71 t0.91 -1.75 q0 -0.94 -0.53 -1.48 t-1.75 -0.92 l-1.62 -0.54 q-1.82 -0.62 -2.57 -1.55 t-0.75 -2.29 q0 -1.8 1.34 -2.93 t3.48 -1.15 z M119.5305 5.84 l0 1.56 l-4.68 0 l0 12.6 l-1.68 0 l0 -12.6 l-4.68 0 l0 -1.56 l11.04 0 z"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <!-- search -->
            <div class="relative hidden lg:block">
                <div class="flex items-center">
                    <input id="SearchInput" class="w-[40vw] h-12 focus:ring-[#08091b] border-0 focus:border-[#08091b] text-black focus:outline-none rounded-s-md text-lg" type="text" name="searchInputItems" placeholder="search for anything...">
                    <div class="search-btn bg-[#b7ff1d] px-3 h-12 flex items-center justify-center rounded-e-md hover:bg-[#81b909] transition duration-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 118.783 118.783" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- user & cart -->
            <div class="flex items-center gap-5 md:gap-10 pr-4">
                <div class="flex items-center gap-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0" fill="#ffffff" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <div class="text-sm hidden md:block">
                        <h1>Username</h1>
                        <a class="underline focus:outline-none" href="login.php">Login</a> / <a class="underline focus:outline-none" href="register.php">Register</a>
                    </div>
                </div>
                <div>
                    <button class="translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zM362 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative lg:hidden px-5 my-4">
            <div class="flex justify-center items-center">
                <input id="SearchInput" class="w-full h-12 focus:ring-[#08091b] border-0 focus:border-[#08091b] text-black focus:outline-none rounded-s-md text-lg" type="text" name="searchInputItems" placeholder="search for anything...">
                <div class="search-btn bg-[#b7ff1d] px-3 h-12 flex items-center justify-center rounded-e-md hover:bg-[#81b909] transition duration-300 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 118.783 118.783" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- sidebar -->
    <!-- add hidden in container -->
    <div id="sidebarContainer" class="hidden outfit bg-gray-50 pb-3 fixed top-0 w-72 lg:w-96 h-[100vh] overflow-y-auto z-50">
        <div id="sidebarHeader" class="p-2 bg-gray-200 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0" fill="#000000" opacity="1" data-original="#000000"></path>
                    </g>
                </svg>
                <h1 class="text-black"><a href="">Hello,User</a></h1>
            </div>
            <div>
                <button onclick="closeSidebar()" class="focus:outline-none"><svg class="relative top-0.5 right-0.5 text-[#ff0000] transition rounded-md" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: currentColor;">
                        <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                    </svg></button>
            </div>
        </div>
        <div id="sidebarBody">
            <div class="w-full py-3">
                <a class="flex items-center gap-5 px-9 h-12 hover:bg-gray-200 transition" href=""><svg width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 32 32">
                        <path d="M24.528 3.2h-17.056l-4.272 8.96v16.64h25.6v-16.64l-4.272-8.96zM24.8 11.2h-7.2v-4.8h4.912l2.288 4.8zM9.488 6.4h4.912v4.8h-7.2l2.288-4.8zM6.4 25.6v-11.2h8v3.2h3.2v-3.2h8v11.2h-19.2z"></path>
                    </svg>Track Order</a>

                <a class="flex items-center gap-5 px-9 h-12 hover:bg-gray-200 transition" href=""><svg width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 32 32">
                        <path d="M16 6.4c5.296 0 9.6 4.304 9.6 9.6s-4.304 9.6-9.6 9.6-9.6-4.304-9.6-9.6 4.304-9.6 9.6-9.6zM16 3.2c-7.072 0-12.8 5.728-12.8 12.8s5.728 12.8 12.8 12.8 12.8-5.728 12.8-12.8-5.728-12.8-12.8-12.8v0z"></path>
                        <path d="M14.8 18.16c-0.048-0.224-0.064-0.448-0.064-0.704 0-0.752 0.304-1.568 1.216-2.256l0.816-0.608c0.432-0.32 0.576-0.704 0.576-1.12 0-0.624-0.464-1.232-1.424-1.232-0.928 0-1.472 0.752-1.472 1.504 0 0.368 0.032 0.528 0.048 0.592l-2.24-0.080c-0.048-0.224-0.064-0.464-0.064-0.672 0-1.872 1.392-3.456 3.728-3.456 2.592 0 3.888 1.552 3.888 3.152 0 1.28-0.592 2.16-1.552 2.88l-0.608 0.448c-0.56 0.416-0.944 0.832-0.944 1.552h-1.904zM15.808 19.104c0.768 0 1.392 0.624 1.392 1.392 0 0.752-0.624 1.376-1.392 1.376s-1.376-0.624-1.376-1.376c0-0.768 0.608-1.392 1.376-1.392z"></path>
                    </svg>Help Center</a>
            </div>
            <hr class="border border-gray-300">
            <!-- shoping category -->
            <div class="py-3">
                <h1 class="px-5 text-xl">Shop by Category</h1>
                <div class=" py-3">
                    <ul class="lg:text-lg">
                        <!-- tv -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M27.2 4.8h-22.4c-0.88 0-1.6 0.72-1.6 1.6v14.4c0 0.88 0.72 1.6 1.6 1.6h8v1.6h-1.6c-0.88 0-1.6 0.72-1.6 1.6s0.72 1.6 1.6 1.6h9.6c0.88 0 1.6-0.72 1.6-1.6s-0.72-1.6-1.6-1.6h-1.6v-1.6h8c0.88 0 1.6-0.72 1.6-1.6v-14.4c0-0.88-0.72-1.6-1.6-1.6zM25.6 19.2h-19.2v-11.2h19.2v11.2z"></path>
                                </svg> TVs </a></li>
                        <!-- laptop -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M24 8v11.2h-16v-11.2h16zM24.8 4.8h-17.6c-1.328 0-2.4 1.072-2.4 2.4v15.2h22.4v-15.2c0-1.328-1.072-2.4-2.4-2.4v0z"></path>
                                    <path d="M28.4 24h-8c0 0.656-0.544 1.2-1.2 1.2h-6.4c-0.656 0-1.2-0.544-1.2-1.2h-8c-0.224 0-0.4 0.176-0.4 0.4 0 1.552 1.248 2.8 2.8 2.8h20c1.552 0 2.8-1.248 2.8-2.8 0-0.224-0.176-0.4-0.4-0.4z"></path>
                                </svg> Laptops & Computers </a></li>
                        <!-- ipad/tab -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M25.6 4.8h-19.2c-1.76 0-3.2 1.44-3.2 3.2v16c0 1.76 1.44 3.2 3.2 3.2h19.2c1.76 0 3.2-1.44 3.2-3.2v-16c0-1.76-1.44-3.2-3.2-3.2zM25.6 24h-19.2v-16h19.2v16z"></path>
                                    <path d="M18 20.48c0 1.105-0.895 2-2 2s-2-0.895-2-2c0-1.105 0.895-2 2-2s2 0.895 2 2z"></path>
                                </svg> iPads & Tablets </a></li>
                        <!-- mobille -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M20.8 1.6h-9.6c-2.64 0-4.8 2.16-4.8 4.8v19.2c0 2.64 2.16 4.8 4.8 4.8h9.6c2.64 0 4.8-2.16 4.8-4.8v-19.2c0-2.64-2.16-4.8-4.8-4.8zM22.4 25.6c0 0.88-0.72 1.6-1.6 1.6h-9.6c-0.88 0-1.6-0.72-1.6-1.6v-19.2c0-0.88 0.72-1.6 1.6-1.6h1.6c0 0.88 0.72 1.6 1.6 1.6h3.2c0.88 0 1.6-0.72 1.6-1.6h1.6c0.88 0 1.6 0.72 1.6 1.6v19.2z"></path>
                                </svg> Cell Phone </a></li>
                        <!-- printer -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M25.6 8h-1.6v-4.8h-16v4.8h-1.6c-1.76 0-3.2 1.44-3.2 3.2v9.6c0 1.76 1.44 3.2 3.2 3.2h1.6v4.8h16v-4.8h1.6c1.76 0 3.2-1.44 3.2-3.2v-9.6c0-1.76-1.44-3.2-3.2-3.2zM11.2 6.4h9.6v1.6h-9.6v-1.6zM20.8 25.6h-9.6v-4.8h9.6v4.8zM25.6 20.8h-1.6v-3.2h-16v3.2h-1.6v-9.6h19.2v9.6z"></path>
                                    <path d="M24 14.4c0 0.884-0.716 1.6-1.6 1.6s-1.6-0.716-1.6-1.6c0-0.884 0.716-1.6 1.6-1.6s1.6 0.716 1.6 1.6z"></path>
                                </svg> Printer & Supplies </a></li>
                        <!-- headphone -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M25.056 6.944c-2.416-2.416-5.632-3.744-9.056-3.744s-6.64 1.328-9.056 3.744c-4.24 4.24-4.944 10.88-1.744 15.904v1.552c0 2.432 1.968 4.4 4.4 4.4h1.2c1.76 0 3.2-1.44 3.2-3.2v-6.4c0-1.76-1.44-3.2-3.2-3.2h-1.2c-1.2 0-2.288 0.48-3.088 1.264-0.384-2.88 0.528-5.888 2.704-8.048 1.808-1.824 4.224-2.816 6.784-2.816s4.976 0.992 6.784 2.816c2.176 2.176 3.088 5.184 2.704 8.064-0.784-0.784-1.888-1.28-3.088-1.28h-1.2c-1.76 0-3.2 1.44-3.2 3.2v6.4c0 1.76 1.44 3.2 3.2 3.2h1.2c2.432 0 4.4-1.968 4.4-4.4v-1.552c3.2-5.040 2.512-11.632-1.744-15.904zM8.4 20.4c0-0.656 0.544-1.2 1.2-1.2h1.2v6.4h-1.2c-0.656 0-1.2-0.544-1.2-1.2v-4zM23.6 24.4c0 0.656-0.544 1.2-1.2 1.2h-1.2v-6.4h1.2c0.656 0 1.2 0.544 1.2 1.2v4z"></path>
                                </svg> Headphones </a></li>
                        <!-- cloths -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path d="M3 10c1.859 0 3.411-1.28 3.858-3h17.864c-.347.595-.985 1-1.722 1h-1a1 1 0 0 0-1 1v3.198l-8.217 1.826c-.286.063-.53.25-.668.509a1.003 1.003 0 0 0-.044.838l.448 1.119-7.83 2.558a.998.998 0 0 0-.688.896l-2 37A1 1 0 0 0 3 58h4v3a1 1 0 0 0 1 1h28a1 1 0 0 0 1-1v-3h4a1.002 1.002 0 0 0 .999-1.054l-1.852-34.257 1.635-4.302 7.256 2.352L50.944 56h-5.903l.958-23.96-1.998-.08-1 25A1.002 1.002 0 0 0 44 58h8a1.002 1.002 0 0 0 .999-1.054L51.11 22H56v20h-3v2h4a1 1 0 0 0 1-1V22h3a.998.998 0 0 0 .895-1.447l-3-6a1.004 1.004 0 0 0-.678-.529L50 12.198V10c1.859 0 3.411-1.28 3.858-3h3.284c.447 1.72 1.999 3 3.858 3a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1c-1.859 0-3.411 1.28-3.858 3h-3.284C53.411 3.28 51.859 2 50 2h-3v2h3c.737 0 1.375.405 1.722 1H37.858C37.411 3.28 35.859 2 34 2h-3v2h3c.737 0 1.375.405 1.722 1h-8.864C26.411 3.28 24.859 2 23 2h-3v2h3c.737 0 1.375.405 1.722 1H6.858C6.411 3.28 4.859 2 3 2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm57-5.731v3.463a2.001 2.001 0 0 1 0-3.463zM26.858 7h8.864c-.347.595-.985 1-1.722 1h-1a1 1 0 0 0-1 1v4c0 .469.325.875.783.976l2.708.602-1.343 2.798-2.674-.867.455-1.138a1 1 0 0 0-.712-1.347L23 12.198V10c1.859 0 3.411-1.28 3.858-3zM22 14.024l7.635 1.697-3.063 7.656-2.824-2.259 3.767-2.26a1.001 1.001 0 0 0 .193-1.564l-2-2-1.414 1.414 1.095 1.094L22 19.834l-3.388-2.033 1.095-1.094-1.414-1.414-2 2a.997.997 0 0 0 .193 1.564l3.767 2.26-2.824 2.259-3.063-7.656zM9 58h2a1.002 1.002 0 0 0 .999-1.04l-1-25-1.998.08L9.959 56H4.056l1.906-35.262 7.302-2.386 2.808 7.019a.997.997 0 0 0 .674.595.993.993 0 0 0 .88-.186l3.375-2.7V60H9zm25.041-2 .958-23.96-1.998-.08-1 25A1.002 1.002 0 0 0 33 58h2v2H23V23.081l3.375 2.7a1.004 1.004 0 0 0 1.554-.409l2.801-7.001 7.309 2.37L39.944 56zm5.337-36.916c-.024-.01-.044-.027-.07-.035l-3.241-1.051 1.428-2.975 3.159.702zM50 8h-1a1 1 0 0 0-1 1v3.198l-3.717.826.434 1.952L49 14.024l8.318 1.849L59.382 20h-8.38l-.003-.054a1 1 0 0 0-.69-.897l-7.815-2.533.441-1.16a.997.997 0 0 0-.718-1.331L34 12.198V10c1.859 0 3.411-1.28 3.858-3h13.864c-.347.595-.985 1-1.722 1zM4 4.269a1.998 1.998 0 0 1 0 3.462z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        <path d="M37 52h2v2h-2zM5 52h2v2H5zM17 30h2v2h-2zM17 40h2v2h-2zM17 50h2v2h-2z" fill="#000000" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg> Cloths </a></li>
                        <!-- watch -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M21.904 8.208l-0.656-3.936c-0.256-1.536-1.6-2.672-3.152-2.672h-4.192c-1.552 0-2.896 1.136-3.152 2.672l-0.656 3.936c-1.216 0.448-2.096 1.616-2.096 2.992v9.6c0 1.376 0.88 2.544 2.096 2.992l0.656 3.936c0.256 1.536 1.6 2.672 3.152 2.672h4.176c1.568 0 2.896-1.136 3.152-2.672l0.656-3.936c1.232-0.448 2.112-1.616 2.112-2.992v-9.6c0-1.376-0.88-2.544-2.096-2.992zM20.8 20.8h-9.6v-9.6h9.6v9.6zM13.904 4.8h4.176l0.528 3.2h-5.232l0.528-3.2zM18.096 27.2h-4.192l-0.528-3.2h5.248l-0.528 3.2z"></path>
                                </svg> Wearable Technology </a></li>
                        <!-- stationary -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M359.167 231.568a7.498 7.498 0 0 1-3.24-10.099L436.323 65.1 398.72 45.832l-93.788 182.495a7.5 7.5 0 0 1-13.342-6.857l97.213-189.157a7.502 7.502 0 0 1 10.091-3.247l50.953 26.11a7.502 7.502 0 0 1 3.25 10.104l-83.831 163.047a7.499 7.499 0 0 1-10.099 3.241z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M404.194 225.931a7.498 7.498 0 0 1-3.235-10.101l47.367-92.001-77.918-39.93a7.5 7.5 0 1 1 6.842-13.349l84.604 43.357a7.503 7.503 0 0 1 3.247 10.108l-50.807 98.682a7.499 7.499 0 0 1-10.1 3.234zM180.704 228.525l-62.368-110.7-55.14-37.905 8.939 68.027 42.232 73.146a7.5 7.5 0 0 1-12.99 7.5l-42.979-74.439a7.493 7.493 0 0 1-.941-2.773L46.13 65.176a7.5 7.5 0 0 1 11.685-7.158l70.452 48.43a7.5 7.5 0 0 1 2.286 2.5l63.221 112.215a7.5 7.5 0 0 1-2.853 10.215 7.5 7.5 0 0 1-10.217-2.853z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M62.161 160.649a7.5 7.5 0 0 1 2.219-10.372l54.598-35.354a7.5 7.5 0 0 1 8.153 12.591l-54.598 35.354c-3.454 2.237-8.106 1.28-10.372-2.219z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="m141.07 228.68-46.296-77.786a7.5 7.5 0 0 1 2.609-10.281 7.499 7.499 0 0 1 10.281 2.609l46.296 77.786a7.5 7.5 0 0 1-2.609 10.281c-3.547 2.111-8.156.962-10.281-2.609zM279.498 232.344a7.5 7.5 0 0 1-7.421-7.579l1.243-117.596-24.78-51.955-22.627 54.595v115.034a7.5 7.5 0 0 1-15 0V108.317c0-.985.194-1.961.571-2.872l29.647-71.532a7.5 7.5 0 0 1 6.733-4.626c2.949-.06 5.69 1.596 6.965 4.269l32.778 68.725a7.506 7.506 0 0 1 .73 3.308l-1.261 119.334c-.044 4.191-3.516 7.493-7.578 7.421z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M210.919 115.046a7.5 7.5 0 0 1 7.107-7.874l57.855-2.961a7.5 7.5 0 0 1 .768 14.981l-57.856 2.961c-4.104.215-7.661-2.943-7.874-7.107z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="m241.781 224.944-1.364-102.934a7.5 7.5 0 0 1 7.4-7.599c4.164-.1 7.543 3.258 7.599 7.4l1.364 102.934a7.5 7.5 0 0 1-7.399 7.599 7.502 7.502 0 0 1-7.6-7.4z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M356.44 432.336a7.5 7.5 0 0 1-6.891-8.063l14.835-189.204H104.72l14.823 189.204a7.5 7.5 0 0 1-6.891 8.063c-4.131.328-7.739-2.762-8.063-6.892l-15.456-197.29c-.341-4.356 3.104-8.086 7.477-8.086h275.886c4.369 0 7.82 3.727 7.477 8.086l-15.469 197.289a7.502 7.502 0 0 1-8.064 6.893z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                        <path d="M370.402 483.76H98.689a7.5 7.5 0 0 1-7.5-7.5v-47.977a7.5 7.5 0 0 1 7.5-7.5h271.713c4.143 0 7.5 3.357 7.5 7.5v47.977c0 4.143-3.357 7.5-7.5 7.5zm-264.213-15h256.713v-32.977H106.189zM368.364 287.76H101.219c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h267.145c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg> Stationary </a></li>
                        <!-- camera -->
                        <li><a class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200" href=""><svg class="w-9" viewBox="0 0 32 32">
                                    <path d="M25.6 8h-5.408c-0.608 0-1.168-0.336-1.424-0.88l-0.72-1.424c-0.272-0.56-0.832-0.896-1.44-0.896h-6.016c-0.608 0-1.168 0.336-1.44 0.88l-0.704 1.44c-0.272 0.544-0.832 0.88-1.44 0.88h-0.608c-1.76 0-3.2 1.44-3.2 3.2v12.8c0 1.76 1.44 3.2 3.2 3.2h19.2c1.76 0 3.2-1.44 3.2-3.2v-12.8c0-1.76-1.44-3.2-3.2-3.2zM25.6 24h-19.2v-12.8h0.608c0.064 0 0.128-0.016 0.192-0.016v0.016h12.8v-0.016c0.064 0 0.128 0.016 0.192 0.016h5.408v12.8z"></path>
                                    <path d="M13.6 12.8c-2.656 0-4.8 2.144-4.8 4.8s2.144 4.8 4.8 4.8 4.8-2.144 4.8-4.8-2.144-4.8-4.8-4.8zM13.6 19.2c-0.88 0-1.6-0.72-1.6-1.6s0.72-1.6 1.6-1.6 1.6 0.72 1.6 1.6-0.72 1.6-1.6 1.6z"></path>
                                    <path d="M24.4 14.4c0 1.105-0.895 2-2 2s-2-0.895-2-2c0-1.105 0.895-2 2-2s2 0.895 2 2z"></path>
                                </svg> Cameras </a></li>
                    </ul>
                </div>
            </div>
            <hr class="border border-gray-300">
            <div class="py-3">
                <h1 class="px-5 text-xl">Preferences</h1>
                <ul class="lg:text-lg mt-2">
                    <li class="px-9 h-12 flex items-center gap-5 hover:bg-gray-200"><svg class="w-9" aria-hidden="true" role="img" focusable="false" viewBox="0 0 32 32">
                            <path d="M27.429 6.857h-22.857c-1.257 0-2.286 1.029-2.286 2.286v13.714c0 1.257 1.029 2.286 2.286 2.286h22.857c1.257 0 2.286-1.029 2.286-2.286v-13.714c0-1.257-1.029-2.286-2.286-2.286zM4.571 9.143h3.429c0 1.897-1.531 3.429-3.429 3.429v-3.429zM4.571 22.857v-3.429c1.897 0 3.429 1.531 3.429 3.429h-3.429zM27.429 22.857h-3.429c0-1.897 1.531-3.429 3.429-3.429v3.429zM27.429 17.143c-3.154 0-5.714 2.56-5.714 5.714h-11.429c0-3.154-2.56-5.714-5.714-5.714v-2.286c3.154 0 5.714-2.56 5.714-5.714h11.429c0 3.154 2.56 5.714 5.714 5.714v2.286zM27.429 12.571c-1.897 0-3.429-1.531-3.429-3.429h3.429v3.429z"></path>
                            <path d="M16 11.429c-2.514 0-4.571 2.057-4.571 4.571s2.057 4.571 4.571 4.571 4.571-2.057 4.571-4.571c0-2.514-2.057-4.571-4.571-4.571zM16 18.286c-1.257 0-2.286-1.029-2.286-2.286s1.029-2.286 2.286-2.286 2.286 1.029 2.286 2.286-1.029 2.286-2.286 2.286z"></path>
                        </svg>
                        <div class="flex">
                            <p>&#8377;-</p>
                            <p>INR</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
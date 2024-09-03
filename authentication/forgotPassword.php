<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- splide link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js" defer></script>

    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }
    </style>

</head>

<body class="h-[100vh] flex justify-center items-center outfit p-5">
    <div class="w-96 space-y-3">
        <div class="p-2 flex items-center justify-center">
            <a class="flex items-center mb-2" href="/shopnest/index.php">
                <!-- icon logo div -->
                <div>
                    <img class="w-7 sm:w-12 mt-0.5" src="../../../shopnest/src/logo/black_cart_logo.svg" alt="">
                </div>
                <!-- text logo -->
                <div>
                    <img class="w-16 sm:w-32" src="../../../shopnest/src/logo/black_text_logo.svg" alt="">
                </div>
            </a>
        </div>
        <div class="border-2 rounded-md">
            <div>
                <h1 class="text-2xl p-2 font-semibold">Forgot Password</h1>
                <hr>
            </div>
            <div>
                <p class="text-center mt-2">Enter a new password below to change your password</p>
            </div>
            <div class="px-4 py-5 space-y-4">
                <div class="flex flex-col space-y-1 relative" x-data="{ newPass: false }">
                    <label for="newPass" class="require font-semibold">New Password :</label>
                    <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" x-bind:type="newPass ? 'text' : 'password'" type="password" name="newPass" id="newPass">
                    <span class="absolute top-[2.3rem] right-2.5 cursor-pointer" x-on:click="newPass = !newPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small class="text-red-500 translate-x-1 hidden">Validation</small>
                </div>
                <div class="flex flex-col space-y-1 relative" x-data="{confirmPass: false}">
                    <label for="confirmPass" class="require font-semibold">Confirm Password :</label>
                    <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" x-bind:type="confirmPass ? 'text' : 'password'" type="password" name="confirmPass" id="confirmPass">
                    <span class="absolute top-[2.3rem] right-2.5 cursor-pointer" x-on:click="confirmPass = !confirmPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small class="text-red-500 translate-x-1 hidden">Validation</small>
                </div>
            </div>
            <div class="flex justify-center py-3 px-4">
                <button class="bg-gray-700 py-1 h-10 w-full text-lg rounded-tl-xl rounded-br-xl text-white cursor-pointer hover:bg-gray-800 hover:transition">Reset Password</button>
            </div>
        </div>
    </div>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>
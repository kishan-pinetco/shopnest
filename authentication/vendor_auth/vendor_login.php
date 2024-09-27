<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /shopnest/user/profile.php");
    exit;
}

if (isset($_COOKIE['vendor_id'])) {
    header("Location: /shopnest/vendor/vendor_dashboard.php");
    exit;
}

if (isset($_COOKIE['adminEmail'])) {
    header("Location: /shopnest/admin/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- alpinejs CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@latest/dist/cdn.min.js" defer></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../src/logo/favicon.svg">

    <!-- title -->
    <title>Vendor Login</title>

    <style>
        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }

        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body class="flex justify-center items-center h-[100vh] p-2" style="font-family: 'Outfit', sans-serif;">

    <?php
    include "../../include/connect.php";

    if (isset($_POST['loginBtn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "SELECT * FROM vendor_registration WHERE email = '$email'";
        $search_query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($search_query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($search_query);

            $dbpass = $email_pass['password'];

            $id = $email_pass['vendor_id'];


            setcookie('vendor_id', $id, time() + (365 * 24 * 60 * 60), "/");

            $pass_decode = password_verify($password, $dbpass);

            if ($pass_decode) {
    ?>
                <!-- Successfully -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Login successful.</span>
                        </div>
                    </div>
                </div>

                <script>
                    let SpopUp = document.getElementById('SpopUp');

                    SpopUp.style.display = 'flex';
                    SpopUp.style.opacity = '100';

                    setTimeout(() => {
                        SpopUp.style.display = 'none';
                        SpopUp.style.opacity = '0';
                        window.location.href = "../../vendor/vendor_dashboard.php";
                    }, 1500);
                </script>
                <?php

                if (isset($_POST['check'])) {

                    setcookie('vendorEmail', $email, time() + (365 * 24 * 60 * 60), "/");
                    setcookie('vendorPass', $password, time() + (365 * 24 * 60 * 60), "/");

                    header("Location:../../vendor/vendor_dashboard.php");
                } else {
                    header("Location:../../vendor/vendor_dashboard.php");
                    exit;
                }
            } else {
                ?>
                <!-- Error -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Enter Valid Email Or Password.</span>
                        </div>
                    </div>
                </div>

                <script>
                    let EpopUp = document.getElementById('EpopUp');

                    EpopUp.style.display = 'flex';
                    EpopUp.style.opacity = '100';

                    setTimeout(() => {
                        EpopUp.style.display = 'none';
                        EpopUp.style.opacity = '0';
                    }, 1500);
                </script>
                <?php
            }
        } else {
            if (isset($_POST['loginBtn'])) {
                if ($_POST['email'] === 'iamAdmin07@gmail.com' && $_POST['password'] === 'Admin392004') {
                    $admin_email = $_POST['email'];
                    $admin_pass = $_POST['password'];

                    setcookie('adminEmail', $admin_email, time() + (365 * 24 * 60 * 60), "/");
                    setcookie('adminPass', $admin_pass, time() + (365 * 24 * 60 * 60), "/");

                ?>
                    <!-- Successfully -->
                    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="ApopUp" style="display: none;">
                        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Login successful.</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        let ApopUp = document.getElementById('ApopUp');

                        ApopUp.style.display = 'flex';
                        ApopUp.style.opacity = '100';

                        setTimeout(() => {
                            ApopUp.style.display = 'none';
                            ApopUp.style.opacity = '0';
                            window.location.href = "../../admin/dashboard.php";
                        }, 1500);
                    </script>
                <?php
                    exit;
                }
            } else {
                ?>
                <!-- Error -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp_2" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Enter Valid Email or Password.</span>
                        </div>
                    </div>
                </div>

                <script>
                    let EpopUp_2 = document.getElementById('EpopUp_2');

                    EpopUp_2.style.display = 'flex';
                    EpopUp_2.style.opacity = '100';

                    setTimeout(() => {
                        EpopUp_2.style.display = 'none';
                        EpopUp_2.style.opacity = '0';
                    }, 1500);
                </script>
    <?php
            }
        }
    }
    ?>

    <div class="w-96">
        <!-- header -->
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
            <h1 class="border-b-2 p-2 text-2xl font-semibold">Vendor Login</h1>
            <form action="" method="post">
                <div class="space-y-4 p-4">
                    <div class="flex flex-col gap-1">
                        <label for="email" class="require font-semibold">Email :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="email" name="email" id="email" value="<?php echo isset($_COOKIE['vendorEmail']) ? $_COOKIE['vendorEmail'] : '' ?>">
                    </div>
                    <div class="flex flex-col gap-1 relative" x-data="{ showPassword: false }">
                        <label for="password" class="require font-semibold">Password :</label>
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" :type="showPassword ? 'text' : 'password'" name="password" id="password" value="<?php echo isset($_COOKIE['vendorPass']) ? $_COOKIE['vendorPass'] : '' ?>">
                        <!-- Toggle Icon Button -->
                        <span class="absolute top-[2.50rem] right-2.5 cursor-pointer" @click="showPassword = !showPassword">
                            <!-- Show Icon (when password is hidden) -->
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" fill="#000000" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>

                            <!-- Hide Icon (when password is visible) -->
                            <svg x-show="showPassword" x-cloak xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128" style="fill: rgba(0, 0, 0, 1);">
                                <path d="m79.891 65.078 7.27-7.27C87.69 59.787 88 61.856 88 64c0 13.234-10.766 24-24 24-2.144 0-4.213-.31-6.192-.839l7.27-7.27a15.929 15.929 0 0 0 14.813-14.813zm47.605-3.021c-.492-.885-7.47-13.112-21.11-23.474l-5.821 5.821c9.946 7.313 16.248 15.842 18.729 19.602C114.553 71.225 95.955 96 64 96c-4.792 0-9.248-.613-13.441-1.591l-6.573 6.573C50.029 102.835 56.671 104 64 104c41.873 0 62.633-36.504 63.496-38.057a3.997 3.997 0 0 0 0-3.886zm-16.668-39.229-88 88C22.047 111.609 21.023 112 20 112s-2.047-.391-2.828-1.172a3.997 3.997 0 0 1 0-5.656l11.196-11.196C10.268 83.049 1.071 66.964.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24c10.827 0 20.205 2.47 28.222 6.122l12.95-12.95c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656zM34.333 88.011 44.46 77.884C41.663 73.96 40 69.175 40 64c0-13.234 10.766-24 24-24 5.175 0 9.96 1.663 13.884 4.459l8.189-8.189C79.603 33.679 72.251 32 64 32 32.045 32 13.447 56.775 8.707 63.994c3.01 4.562 11.662 16.11 25.626 24.017zm15.934-15.935 21.809-21.809C69.697 48.862 66.958 48 64 48c-8.822 0-16 7.178-16 16 0 2.958.862 5.697 2.267 8.076z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap">
                        <label class="keep group flex items-center gap-2 cursor-pointer max-w-max">
                            <input type="checkbox" class="border-2 text-gray-700 border-[#bbb] group-hover:border-black transition duration-300 rounded-sm cursor-pointer focus:ring-gray-700" name="check" id="">
                            <p class="text-[#8b929c] group-hover:text-black transition duration-300">Remember me</p>
                        </label>
                        <a href="../../../shopnest/authentication/forgot_password_vendor/forgotPass_email_vendor.php" class="text-sm font-semibold tracking-wide flex justify-end underline">Forgot password?</a>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="bg-gray-700 hover:bg-gray-800 py-1 h-10 w-full text-lg rounded-tl-xl rounded-br-xl text-white cursor-pointer hover:transition" name="loginBtn" value="Login">
                    </div>
                    <div>
                        <a href="vendor_register.php" class="text-sm font-semibold tracking-wide flex justify-center underline">New Vendor? Create account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>
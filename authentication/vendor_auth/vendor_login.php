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
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" x-bind:type="showPassword ? 'text' : 'password'" type="password" name="password" id="password" value="<?php echo isset($_COOKIE['vendorPass']) ? $_COOKIE['vendorPass'] : '' ?>">
                        <span class="absolute top-[2.50rem] right-2.5 cursor-pointer" x-on:click="showPassword = !showPassword">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="flex items-center justify-between flex-wrap">
                        <label class="keep group flex items-center gap-2 cursor-pointer max-w-max">
                            <input type="checkbox" class="border-2 text-gray-700 border-[#bbb] group-hover:border-black transition duration-300 rounded-sm cursor-pointer focus:ring-gray-700" name="check" id="" required>
                            <p class="text-[#8b929c] group-hover:text-black transition duration-300">Remember me</p>
                        </label>
                        <a href="../forgot_password_vendor/forgotPass_email_vendor.php" class="text-sm font-semibold tracking-wide flex justify-end underline">Forgot password?</a>
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
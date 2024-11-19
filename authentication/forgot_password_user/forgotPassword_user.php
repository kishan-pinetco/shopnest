<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /index.php");
    exit;
}

if (isset($_COOKIE['vendor_id'])) {
    header("Location: /vendor/vendor_dashboard.php");
    exit;
}

if (isset($_COOKIE['adminEmail'])) {
    header("Location: /admin/dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- alpinejs CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@latest/dist/cdn.min.js" defer></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../src/logo/favIcon.svg">
    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        #forgotPass-container {
            transition: height 0.5s ease-in-out;
        }

        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body class="outfit h-[100vh] flex flex-col justify-center items-center gap-3">
    <?php
    session_start();
    include "../../include/connect.php";
    $user_email = $_SESSION['email'];
    $password_pattern = '/^.{8,}$/';

    $retrieve_data = "SELECT * FROM user_registration WHERE email = '$user_email'";
    $retrieve_query = mysqli_query($con, $retrieve_data);

    $row = mysqli_fetch_assoc($retrieve_query);

    if (isset($_POST['changePass'])) {
        $new_pass = $_POST['newPass'];
        $confirm_pass = $_POST['confirmPass'];


        // Validation for password
        if (!preg_match($password_pattern, $new_pass)) {
    ?>
            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp_2" style="display: none;">
                <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Invalid Password</span>
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

            exit();
        }

        if (!preg_match($password_pattern, $confirm_pass)) {
        ?>
            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp_2" style="display: none;">
                <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Invalid Password</span>
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

            exit();
        }


        if ($new_pass === $confirm_pass) {
            $new_dpass = password_hash($new_pass, PASSWORD_BCRYPT);

            $user_id = $row['user_id'];

            $up_pass = "UPDATE user_registration SET password = '$new_dpass' WHERE user_id = '$user_id'";
            $up_query = mysqli_query($con, $up_pass);

            if ($up_query) {
            ?>
                <!-- Successfully -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="ApopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Password Updated Successfully.</span>
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
                    }, 1500);
                </script>
            <?php
                header("Location: ../user_auth/user_login.php");
                exit();
            } else {
            ?>
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp_2" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Password Not Update.</span>
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
        } else {
            ?>
            <script>
                alert("")
            </script>
            <?php

            ?>
            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp_2" style="display: none;">
                <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">The New Password and the Confirm Password do not match. Please try again.</span>
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
    ?>
    <div class="p-2 flex items-center justify-center">
        <a class="flex items-center mb-2" href="/index.php">
            <!-- icon logo div -->
            <div>
                <img class="w-7 sm:w-12 mt-0.5" src="/src/logo/black_cart_logo.svg" alt="">
            </div>
            <!-- text logo -->
            <div>
                <img class="w-16 sm:w-32" src="/src/logo/black_text_logo.svg" alt="">
            </div>
        </a>
    </div>
    <div class="w-80 md:w-96 border-2 border-gray-300 space-y-3 rounded-xl bg-white overflow-hidden" id="forgotPass-container">

        <h1 class="text-2xl py-2 px-4 font-semibold border-b-2 border-gray-300">Forgot Password</h1>
        <form action="" method="post" id="form3" class="flex flex-col items-center gap-3">
            <div class="flex flex-col items-center gap-2">
                <div class="relative flex flex-col" x-data="{newPass: false}">
                    <label for="newPass" class="require">New Password:</label>
                    <input name="newPass" id="newPass" :type="newPass ? 'text' : 'password'" class="w-[17rem] md:w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-2.5 cursor-pointer" @click="newPass = !newPass">
                        <!-- Show Icon (when password is hidden) -->
                        <svg x-show="newPass" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" fill="#000000" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>

                        <!-- Hide Icon (when password is visible) -->
                        <svg x-show="!newPass" x-cloak xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128" style="fill: rgba(0, 0, 0, 1);">
                            <path d="m79.891 65.078 7.27-7.27C87.69 59.787 88 61.856 88 64c0 13.234-10.766 24-24 24-2.144 0-4.213-.31-6.192-.839l7.27-7.27a15.929 15.929 0 0 0 14.813-14.813zm47.605-3.021c-.492-.885-7.47-13.112-21.11-23.474l-5.821 5.821c9.946 7.313 16.248 15.842 18.729 19.602C114.553 71.225 95.955 96 64 96c-4.792 0-9.248-.613-13.441-1.591l-6.573 6.573C50.029 102.835 56.671 104 64 104c41.873 0 62.633-36.504 63.496-38.057a3.997 3.997 0 0 0 0-3.886zm-16.668-39.229-88 88C22.047 111.609 21.023 112 20 112s-2.047-.391-2.828-1.172a3.997 3.997 0 0 1 0-5.656l11.196-11.196C10.268 83.049 1.071 66.964.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24c10.827 0 20.205 2.47 28.222 6.122l12.95-12.95c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656zM34.333 88.011 44.46 77.884C41.663 73.96 40 69.175 40 64c0-13.234 10.766-24 24-24 5.175 0 9.96 1.663 13.884 4.459l8.189-8.189C79.603 33.679 72.251 32 64 32 32.045 32 13.447 56.775 8.707 63.994c3.01 4.562 11.662 16.11 25.626 24.017zm15.934-15.935 21.809-21.809C69.697 48.862 66.958 48 64 48c-8.822 0-16 7.178-16 16 0 2.958.862 5.697 2.267 8.076z"></path>
                        </svg>
                    </span>
                    <small id="passValid" class="text-red-500 hidden translate-x-1">password contains At least 8 digits</small>
                </div>
                <div class="relative flex flex-col" x-data="{confirmPass: false}">
                    <label for="confirmPass" class="require">Confirm Password:</label>
                    <input name="confirmPass" id="confirmPass2" :type="confirmPass ? 'text' : 'password'" class="w-[17rem] md:w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-2.5 cursor-pointer" @click="confirmPass = !confirmPass">
                        <!-- Show Icon (when password is hidden) -->
                        <svg x-show="confirmPass" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" fill="#000000" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>

                        <!-- Hide Icon (when password is visible) -->
                        <svg x-show="!confirmPass" x-cloak xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128" style="fill: rgba(0, 0, 0, 1);">
                            <path d="m79.891 65.078 7.27-7.27C87.69 59.787 88 61.856 88 64c0 13.234-10.766 24-24 24-2.144 0-4.213-.31-6.192-.839l7.27-7.27a15.929 15.929 0 0 0 14.813-14.813zm47.605-3.021c-.492-.885-7.47-13.112-21.11-23.474l-5.821 5.821c9.946 7.313 16.248 15.842 18.729 19.602C114.553 71.225 95.955 96 64 96c-4.792 0-9.248-.613-13.441-1.591l-6.573 6.573C50.029 102.835 56.671 104 64 104c41.873 0 62.633-36.504 63.496-38.057a3.997 3.997 0 0 0 0-3.886zm-16.668-39.229-88 88C22.047 111.609 21.023 112 20 112s-2.047-.391-2.828-1.172a3.997 3.997 0 0 1 0-5.656l11.196-11.196C10.268 83.049 1.071 66.964.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24c10.827 0 20.205 2.47 28.222 6.122l12.95-12.95c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656zM34.333 88.011 44.46 77.884C41.663 73.96 40 69.175 40 64c0-13.234 10.766-24 24-24 5.175 0 9.96 1.663 13.884 4.459l8.189-8.189C79.603 33.679 72.251 32 64 32 32.045 32 13.447 56.775 8.707 63.994c3.01 4.562 11.662 16.11 25.626 24.017zm15.934-15.935 21.809-21.809C69.697 48.862 66.958 48 64 48c-8.822 0-16 7.178-16 16 0 2.958.862 5.697 2.267 8.076z"></path>
                        </svg>
                    </span>
                    <small id="rePassValid" class="text-red-500 hidden translate-x-1">password contains At least 8 digits</small>
                </div>
            </div>
            <div class="space-x-5 mt-3 flex items-center">
                <button id="back2" onclick="window.location.href='forgotPass_otp_user.php'" type="button" class="bg-black px-2 w-28 md:w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl flex items-center justify-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 31.418 31.418" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-3">
                        <g>
                            <path d="M26.585 3v25.418a3.002 3.002 0 0 1-4.883 2.335L5.949 18.044a2.999 2.999 0 0 1 0-4.67L21.703.665a3.004 3.004 0 0 1 3.178-.372A3.003 3.003 0 0 1 26.585 3z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                        </g>
                    </svg>
                    Back
                </button>
                <button id="submit" type="submit" name="changePass" class="bg-green-600 hover:bg-green-700 px-2 w-28 md:w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Submit</button>
            </div>
            <!-- Return to Login Link -->
            <div class="text-center w-full py-2">
                <a href="../user_auth/user_login.php" class="inline-flex items-center gap-1">
                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 447.243 447.243" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M420.361 192.229a31.967 31.967 0 0 0-5.535-.41H99.305l6.88-3.2a63.998 63.998 0 0 0 18.08-12.8l88.48-88.48c11.653-11.124 13.611-29.019 4.64-42.4-10.441-14.259-30.464-17.355-44.724-6.914a32.018 32.018 0 0 0-3.276 2.754l-160 160c-12.504 12.49-12.515 32.751-.025 45.255l.025.025 160 160c12.514 12.479 32.775 12.451 45.255-.063a32.084 32.084 0 0 0 2.745-3.137c8.971-13.381 7.013-31.276-4.64-42.4l-88.32-88.64a64.002 64.002 0 0 0-16-11.68l-9.6-4.32h314.24c16.347.607 30.689-10.812 33.76-26.88 2.829-17.445-9.019-33.88-26.464-36.71z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                        </g>
                    </svg>
                    Return to Login
                </a>
        </form>
    </div>
    </div>

    <script>
        const pswrd = document.getElementById('newPass');
        const passvalid = document.getElementById('passValid');

        pswrd.addEventListener('blur', () => {
            let lengthRegex = /^.{8,}$/;
            let str = pswrd.value.trim();

            if (lengthRegex.test(str)) {
                passvalid.classList.add('hidden');
            } else {
                passvalid.classList.remove('hidden');;
            }
        })


        const pswrd2 = document.getElementById('confirmPass2');
        const rePassValid = document.getElementById('rePassValid');

        pswrd2.addEventListener('blur', () => {
            let lengthRegex2 = /^.{8,}$/;
            let str = pswrd2.value.trim();

            if (lengthRegex2.test(str)) {
                rePassValid.classList.add('hidden');
            } else {
                rePassValid.classList.remove('hidden');;
            }
        })
    </script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>
</body>

</html>
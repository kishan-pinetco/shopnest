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

            // update user password
            $cookie_value = $_COOKIE['userPass'];
            $cookie_update = $new_pass;

            if (!isset($_COOKIE['userPass'])) {
                echo "cookie is not set!";
            } else {
                setcookie('userPass', $cookie_value, time() + (365 * 24 * 60 * 60), "/");
                setcookie('userPass', '', time() - 3600, "/");
                setcookie('userPass', $cookie_update, time() + (365 * 24 * 60 * 60), "/");
            }

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
    <div class="w-96 border-2 border-gray-300 space-y-3 rounded-xl bg-white overflow-hidden" id="forgotPass-container">

        <h1 class="text-2xl py-2 px-4 font-semibold border-b-2 border-gray-300">Forgot Password</h1>
        <form action="" method="post" id="form3" class="flex flex-col items-center gap-3">
            <div class="flex flex-col items-center gap-2">
                <div class="relative flex flex-col" x-data="{newPass: false}">
                    <label for="newPass" class="require">New Password:</label>
                    <input type="password" name="newPass" id="newPass" x-bind:type="newPass ? 'text' : 'password'" class="w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-3 cursor-pointer" x-on:click="newPass = !newPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small id="passValid" class="text-red-500 hidden translate-x-1">password contains At least 8 digits</small>
                </div>
                <div class="relative flex flex-col" x-data="{confirmPass: false}">
                    <label for="confirmPass" class="require">Confirm Password:</label>
                    <input type="password" name="confirmPass" id="confirmPass" x-bind:type="confirmPass ? 'text' : 'password'" class="w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-3 cursor-pointer" x-on:click="confirmPass = !confirmPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small id="rePassValid" class="text-red-500 hidden translate-x-1">password contains At least 8 digits</small>
                </div>
            </div>
            <div class="space-x-5 mt-3">
                <button id="back2" onclick="window.location.href='forgotPass_otp_user.php'" type="button" class="bg-gray-700 hover:bg-gray-800 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Back</button>
                <button id="submit" type="submit" name="changePass" class="bg-green-600 hover:bg-green-700 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Submit</button>
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


        const pswrd2 = document.getElementById('confirmPass');
        const rePassValid = document.getElementById('rePassValid');

        pswrd2.addEventListener('blur', () => {
            let lengthRegex2 = /^.{8,}$/;
            let str = pswrd.value.trim();

            if (lengthRegex2.test(str)) {
                rePassValid.classList.add('hidden');
            } else {
                rePassValid.classList.remove('hidden');;
            }
        })
    </script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>
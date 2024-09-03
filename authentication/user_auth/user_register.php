<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../src/logo/favicon.svg">

    <!-- alpinejs CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@latest/dist/cdn.min.js" defer></script>

    <!-- title -->
    <title>User Registration</title>

    <style>
        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body class="flex justify-center h-[100%] p-2" style="font-family: 'Outfit', sans-serif;">
    <div class="lg:w-[45%]">
        <!-- header -->
        <div class="p-2 flex items-center justify-center">
            <a class="flex items-center mb-2 focus:outline-none" href="/shopnest/index.php">
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
        <form enctype="multipart/form-data" action="" method="post">
            <div class="border-2 rounded-md">
                <h1 class="border-b-2 p-2 text-2xl font-semibold">User Registration</h1>
                <!-- Profile Picture -->
                <div class="w-full flex flex-col items-center relative mt-3">
                    <img id="previewImage" class="w-16 h-16 rounded-full border object-cover object-center border-black" alt="" src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png">
                    <input class="hidden" type="file" id="imageInput" name="UserImage">
                    <label for="imageInput" class="absolute bottom-0 translate-y-3 translate-x-[2px] rounded-full bg-white p-1"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g data-name="Layer 53">
                                    <path d="M22 9.25a.76.76 0 0 0-.75.75v6l-4.18-4.78a2.84 2.84 0 0 0-4.14 0l-2.87 3.28-.94-1.14a2.76 2.76 0 0 0-4.24 0l-2.13 2.57V6A3.26 3.26 0 0 1 6 2.75h8a.75.75 0 0 0 0-1.5H6A4.75 4.75 0 0 0 1.25 6v12a.09.09 0 0 0 0 .05A4.75 4.75 0 0 0 6 22.75h12a4.75 4.75 0 0 0 4.74-4.68V10a.76.76 0 0 0-.74-.75Zm-4 12H6a3.25 3.25 0 0 1-3.23-3L6 14.32a1.29 1.29 0 0 1 1.92 0l1.51 1.82a.74.74 0 0 0 .57.27.86.86 0 0 0 .57-.26l3.44-3.94a1.31 1.31 0 0 1 1.9 0l5.27 6A3.24 3.24 0 0 1 18 21.25Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path d="M4.25 7A2.75 2.75 0 1 0 7 4.25 2.75 2.75 0 0 0 4.25 7Zm4 0A1.25 1.25 0 1 1 7 5.75 1.25 1.25 0 0 1 8.25 7ZM16 5.75h2.25V8a.75.75 0 0 0 1.5 0V5.75H22a.75.75 0 0 0 0-1.5h-2.25V2a.75.75 0 0 0-1.5 0v2.25H16a.75.75 0 0 0 0 1.5Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                </g>
                            </g>
                        </svg></label>
                    <script>
                        const imageInput = document.getElementById('imageInput');
                        const previewImage = document.getElementById('previewImage');

                        function previewSelectedImage() {
                            const file = imageInput.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.readAsDataURL(file);
                                reader.onload = function(e) {
                                    previewImage.src = e.target.result;
                                }
                            }
                        }
                        imageInput.addEventListener('change', previewSelectedImage);
                    </script>
                </div>
                <div class="grid grid-cols-1 p-5 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1 ">
                        <label for="fname" class="require font-semibold">First Name :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="text" name="fname" id="fname">
                        <small id="FnameValid" class="text-red-500 hidden translate-x-1">name must be 2-10 character long and shuld not start with a number</small>
                    </div>
                    <div class="flex flex-col gap-1 ">
                        <label for="lname" class="require font-semibold">Last Name :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="text" name="lname" id="lname">
                        <small id="LnameValid" class="text-red-500 hidden translate-x-1">name must be 2-10 character long and shuld not start with a number</small>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email" class="require font-semibold">Email :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="email" name="email" id="email">
                        <small id="MailValid" class="text-red-500 hidden translate-x-1">Enter Valid Email</small>

                    </div>
                    <div class="flex flex-col gap-1 relative" x-data="{ showPassword: false }">
                        <label for="password" class="require font-semibold">Password :</label>
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" x-bind:type="showPassword ? 'text' : 'password'" type="password" name="password" id="password">
                        <span class="absolute top-10 right-2.5 cursor-pointer" x-on:click="showPassword = !showPassword"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                            </svg></span>
                        <small id="passValid" class="text-red-500 hidden translate-x-1">password contains At least 8 digits</small>
                    </div>
                    <div class="flex flex-col gap-1 md:col-span-2">
                        <label for="address" class="require font-semibold">Address :</label>
                        <textarea class="h-full rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition resize-none" name="address" id="address"></textarea>
                        <small id="addressValid" class="text-red-500 hidden translate-x-1">Enter Valid Address</small>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="mobileno" class="require font-semibold">Mobile No :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="tel" name="mobileno" id="mobileno" maxlength="10">
                        <small id="mobilenoValid" class="text-red-500 hidden translate-x-1">Enter Valid Numbers</small>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="state" class="require font-semibold">State :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="text" name="state" id="state">
                        <small id="stateValid" class="text-red-500 hidden translate-x-1">Enter Valid State</small>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="city" class="require font-semibold">City :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="text" name="city" id="city">
                        <small id="cityValid" class="text-red-500 hidden translate-x-1">Enter Valid City</small>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="pincode" class="require font-semibold">Pincode :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" type="tel" name="pincode" id="pincode" maxlength="6">
                        <small id="pincodeValid" class="text-red-500 hidden translate-x-1">Enter Valid Pincode</small>
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <input type="submit" value="Register" name="regBtn" class="bg-gray-700 hover:bg-gray-800 hover:transition h-10 w-72 text-lg rounded-tl-xl rounded-br-xl text-white cursor-pointer">
                </div>
            </div>
        </form>
        <div class="flex flex-col items-center gap-2 mt-5">
            <a class="underline font-semibold" href="../vendor_auth/vendor_register.php">Become a Vendor</a>
            <a class="underline font-semibold" href="user_login.php">Already a member? Login</a>
        </div>
    </div>

    <!-- Error message container -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="errorMessage"></div>
        </div>
    </div>


    <!-- scriopt -->
    <script src="validation.js"></script>

    <!-- JavaScript function -->
    <script>
        function displayErrorMessage(message) {
            let popUp = document.getElementById('popUp');
            let errorMessage = document.getElementById('errorMessage');

            errorMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            popUp.style.display = 'flex';
            popUp.style.opacity = '100';

            setTimeout(() => {
                popUp.style.display = 'none';
                popUp.style.opacity = '0';
            }, 1500);
        }
    </script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>
</body>

</html>


<?php
include "../../include/connect.php";


if (isset($_POST['regBtn'])) {
    $file_name = $_FILES['UserImage']['name'];
    $tempname = $_FILES['UserImage']['tmp_name'];
    $folder = '../../src/user_dp/' . $file_name;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $mobileno = $_POST['mobileno'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $user_reg_date = date('d-m-Y');;

    // preg_match
    $firstname_pattern = "/^[a-zA-Z]([0-9a-zA-Z]){2,10}$/";
    $lastname_pattern = "/^[a-zA-Z]([0-9a-zA-Z]){2,10}$/";
    $email_pattern = "/^[a-zA-Z][a-zA-Z0-9._-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $password_pattern = '/^.{8,}$/';
    $address_pattern = "/^[\w\d\s#.,'-]{5,}$/i";
    $number_pattern = "/^[0-9]{10}$/";
    $state_pattern = "/^[a-zA-Z\s'-]+$/";
    $city_pattern = "/^[a-zA-Z\s'-]+$/";
    $pincode_pattern = "/^[1-9][0-9]{5}$/";

    // Validation for first name
    if (!preg_match($firstname_pattern, $fname)) {
        echo '<script>displayErrorMessage("First name must be 2-10 character long and shuld not start with a number.");</script>';
    }
    // Validation for last name
    if (!preg_match($lastname_pattern, $lname)) {
        echo '<script>displayErrorMessage("Last name must be 2-10 character long and shuld not start with a number.");</script>';
    }
    // Validation for email
    if (!preg_match($email_pattern, $email)) {
        echo '<script>displayErrorMessage("Invalid Email.");</script>';
    }
    // Validation for password
    if (!preg_match($password_pattern, $password)) {
        echo '<script>displayErrorMessage("Invalid Password.");</script>';
    }
    // Validation for adddress
    if (!preg_match($address_pattern, $address)) {
        echo '<script>displayErrorMessage("Invalid Address.");</script>';
    }
    // Validation for phone number
    if (!preg_match($number_pattern, $mobileno)) {
        echo '<script>displayErrorMessage("Invalid Phone Number.");</script>';
    }
    // Validation for state
    if (!preg_match($state_pattern, $state)) {
        echo '<script>displayErrorMessage("Invalid State.");</script>';
    }
    // Validation for City
    if (!preg_match($city_pattern, $city)) {
        echo '<script>displayErrorMessage("Invalid City.");</script>';
    }
    // Validation for pincode
    if (!preg_match($pincode_pattern, $pincode)) {
        echo '<script>displayErrorMessage("Invalid Pincode.");</script>';
    }


    // hash pass
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $email_check = "SELECT * FROM user_registration WHERE email = '$email'";
    $check_query = mysqli_query($con, $email_check);

    $emailCount = mysqli_num_rows($check_query);

    if ($emailCount > 0) {
?>
        <!-- Error -->
        <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
            <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Email already Exists.</span>
                </div>
            </div>
        </div>

        <script>
            let popUp = document.getElementById('popUp');

            popUp.style.display = 'flex';
            popUp.style.opacity = '100';

            setTimeout(() => {
                popUp.style.display = 'none';
                popUp.style.opacity = '0';
            }, 1500);
        </script>
        <?php
    } else if (move_uploaded_file($tempname, $folder)) {
        $insert_reg_data = "INSERT INTO user_registration(first_name, last_name, phone, email, profile_image, Address, state, city, pin, password, date) VALUES ('$fname','$lname','$mobileno','$email','$file_name','$address','$state','$city','$pincode','$pass','$user_reg_date')";
        $iquery = mysqli_query($con, $insert_reg_data);

        if ($iquery) {
        ?>
            <!-- Successfully -->
            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
                <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Inserted successful.</span>
                    </div>
                </div>
            </div>

            <script>
                let popUp = document.getElementById('popUp');

                popUp.style.display = 'flex';
                popUp.style.opacity = '100';

                setTimeout(() => {
                    popUp.style.display = 'none';
                    popUp.style.opacity = '0';
                }, 1500);
            </script>
            <script>
                window.location.href = "user_login.php";
            </script>
        <?php

            exit;
        } else {
        ?>
            <!-- Error -->
            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="popUp" style="display: none;">
                <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Insertion Failed.</span>
                    </div>
                </div>
            </div>

            <script>
                let popUp = document.getElementById('popUp');

                popUp.style.display = 'flex';
                popUp.style.opacity = '100';

                setTimeout(() => {
                    popUp.style.display = 'none';
                    popUp.style.opacity = '0';
                }, 1500);
            </script>
<?php
        }
    }
}
?>
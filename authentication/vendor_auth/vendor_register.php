<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration</title>

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../src/logo/favicon.svg">

    <!-- alpinejs CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex justify-center outfit h-[100%] p-2">
    <div class="lg:w-[45%]">
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="border-2 rounded-md">
                <h1 class="border-b-2 p-2 text-2xl font-semibold">Vendor Registration</h1>
                <!-- Profile Picture -->
                <div class="w-full flex flex-col items-center relative mt-3">
                    <div class="w-full p-5">
                        <div class="w-full relative">
                            <div class="w-full relative border border-black border-dashed">
                                <img id="CoverPreview" class="w-full h-40 z-50 object-cover" src="" alt="">
                                <h2 id="coverText" class="absolute left-0 top-0 flex items-center justify-center w-full h-full">Insert Cover image</h2>
                            </div>
                            <input class="hidden" name="CoverImage" type="file" id="Coverimage" onchange="coverImagePreview(event)">
                            <label for="Coverimage" class="absolute top-2 right-3 cursor-pointer">
                                <h1 class="bg-indigo-600 text-white max-w-max px-1 h-8 flex items-center rounded-md">Cover Image</h1>
                            </label>
                        </div>
                        <!-- script for cover image preview and hide text (insert cover image) when cover image is inserted  -->
                        <script>
                            function coverImagePreview(event) {
                                const input = event.target;
                                const coverPreview = document.getElementById('CoverPreview');
                                const coverText = document.getElementById('coverText');

                                if (input.files && input.files[0]) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        coverPreview.src = e.target.result;
                                        coverPreview.classList.remove('hidden');
                                        coverText.classList.add('hidden');
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                } else {
                                    coverPreview.src = '';
                                    coverPreview.classList.add('hidden');
                                    coverText.classList.remove('hidden');
                                }
                            }
                        </script>
                        <div class="relative flex items-stretch justify-center -mt-8">
                            <img id="previewImage" class="w-16 h-16 rounded-full border object-cover object-center border-black" alt="" src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png">
                            <input class="hidden" name="ProfileImage" type="file" id="imageInput">
                            <label for="imageInput" class="absolute bottom-0 translate-y-3 translate-x-[2px] rounded-full bg-white p-1 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g data-name="Layer 53">
                                            <path d="M22 9.25a.76.76 0 0 0-.75.75v6l-4.18-4.78a2.84 2.84 0 0 0-4.14 0l-2.87 3.28-.94-1.14a2.76 2.76 0 0 0-4.24 0l-2.13 2.57V6A3.26 3.26 0 0 1 6 2.75h8a.75.75 0 0 0 0-1.5H6A4.75 4.75 0 0 0 1.25 6v12a.09.09 0 0 0 0 .05A4.75 4.75 0 0 0 6 22.75h12a4.75 4.75 0 0 0 4.74-4.68V10a.76.76 0 0 0-.74-.75Zm-4 12H6a3.25 3.25 0 0 1-3.23-3L6 14.32a1.29 1.29 0 0 1 1.92 0l1.51 1.82a.74.74 0 0 0 .57.27.86.86 0 0 0 .57-.26l3.44-3.94a1.31 1.31 0 0 1 1.9 0l5.27 6A3.24 3.24 0 0 1 18 21.25Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path d="M4.25 7A2.75 2.75 0 1 0 7 4.25 2.75 2.75 0 0 0 4.25 7Zm4 0A1.25 1.25 0 1 1 7 5.75 1.25 1.25 0 0 1 8.25 7ZM16 5.75h2.25V8a.75.75 0 0 0 1.5 0V5.75H22a.75.75 0 0 0 0-1.5h-2.25V2a.75.75 0 0 0-1.5 0v2.25H16a.75.75 0 0 0 0 1.5Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </g>
                                </svg>
                            </label>
                        </div>
                    </div>
                    <!-- script for profile image preview -->
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


                        const Coverimage = document.getElementById('Coverimage');
                        const CoverPreview = document.getElementById('CoverPreview');

                        function previewCoverImage() {
                            const file = Coverimage.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.readAsDataURL(file);
                                reader.onload = function(e) {
                                    CoverPreview.src = e.target.result;
                                }
                            }
                        }
                        Coverimage.addEventListener('change', previewCoverImage);
                    </script>
                </div>
                <div class="grid grid-cols-4 gap-3 p-5">
                    <div class="col-span-4 md:col-span-2">
                        <div class="flex flex-col gap-1 ">
                            <label for="name" class="require font-semibold">Name :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="name" id="name">
                            <small id="vendorName" class="text-red-400 hidden">Enter Valid Name</small>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <div class="flex flex-col gap-1 ">
                            <label for="email" class="require font-semibold">Email :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="email" name="email" id="email">
                            <small id="vendorEmail" class="text-red-400 hidden">Enter Valid Email</small>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2 relative" x-data="{ showPassword: false }">
                        <div class="flex flex-col gap-1 ">
                            <label for="password" class="require font-semibold">Password :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" x-bind:type="showPassword ? 'text' : 'password'" type="password" name="password" id="password">
                            <span class="absolute top-10 right-2.5 cursor-pointer" x-on:click="showPassword = !showPassword"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                    <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                    <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                                </svg></span>
                            <small id="vendorPass" class="text-red-400 hidden">Enter Valid Password</small>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <div class="flex flex-col gap-1 ">
                            <label for="username" class="require font-semibold">Username :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="username" id="username">
                            <small id="vendorUsername" class="text-red-400 hidden">Enter Valid Username</small>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <div class="flex flex-col gap-1 ">
                            <label for="phone" class="require font-semibold">Phone :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="tel" maxlength="10" name="phone" id="phone">
                            <small id="vendorPhone" class="text-red-400 hidden">Enter Valid Phone Number</small>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <div class="flex flex-col gap-1 ">
                            <label for="gst" class="require font-semibold">GST :</label>
                            <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="tel" name="gst" id="gst">
                            <small id="vendorGst" class="text-red-400 hidden">Enter Valid GST Number</small>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="flex flex-col gap-1 ">
                            <label for="bio" class="require font-semibold">Bio :</label>
                            <textarea class="h-16 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition resize-none" name="bio" id="bio"></textarea>
                            <small id="vendorBio" class="text-red-400 hidden">Enter Bio</small>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <input type="submit" name="submitBtn" value="Register" class="bg-indigo-500 font-semibold h-10 w-72 text-lg rounded-md text-white hover:bg-indigo-600 hover:transition cursor-pointer">
                </div>
            </div>
        </form>
        <div class="flex flex-col items-center gap-2 mt-5">
            <a class="underline font-semibold" href="vendor_login.php">Already a vendor? Login</a>
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

    <!-- script -->
    <script src="vendor_validation.js"></script>
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
</body>

</html>

<?php
include "../../include/connect.php";

if (isset($_POST['submitBtn'])) {
    $CoverImage = $_FILES['CoverImage']['name'];
    $tempname = $_FILES['CoverImage']['tmp_name'];
    $folder = '../../src/vendor_images/vendor_cover_image/' . $CoverImage;


    $ProfileImage = $_FILES['ProfileImage']['name'];
    $tempname2 = $_FILES['ProfileImage']['tmp_name'];
    $folder2 = '../../src/vendor_images/vendor_profile_image/' . $ProfileImage;



    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $gst = $_POST['gst'];
    $bio = $_POST['bio'];
    $Vendor_reg_date = date('d-m-Y');

    $name_pattern = "/^[a-zA-Z]([0-9a-zA-Z\s]){1,14}$/";
    $email_pattern = "/^[a-zA-Z][a-zA-Z0-9._-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $password_pattern = "/^.{8,}$/";
    $username_pattern = "/^[a-zA-Z0-9_]{3,20}$/";
    $phone_pattern = "/^[6-9]\d{9}$/";
    $gst_pattern = "/^[a-zA-Z0-9]{1,15}$/ ";
    $bio_pattern = "/^[\w\s.,!?'()-]{1,500}$/";

    if (!preg_match($name_pattern, $name)) {
        echo '<script>displayErrorMessage("Enter Valid Name");</script>';
    }
    if (!preg_match($email_pattern, $email)) {
        echo '<script>displayErrorMessage("Enter Valid Email");</script>';
    }
    if (!preg_match($password_pattern, $password)) {
        echo '<script>displayErrorMessage("Enter Valid password");</script>';
    }
    if (!preg_match($username_pattern, $username)) {
        echo '<script>displayErrorMessage("Enter Valid username");</script>';
    }
    if (!preg_match($phone_pattern, $phone)) {
        echo '<script>displayErrorMessage("Enter Valid phone");</script>';
    }
    if (!preg_match($gst_pattern, $gst)) {
        echo '<script>displayErrorMessage("Enter Valid gst");</script>';
    }
    if (!preg_match($bio_pattern, $bio)) {
        echo '<script>displayErrorMessage("Enter Valid bio");</script>';
    }



    // hash pass
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $email_check = "SELECT * FROM vendor_registration WHERE email = '$email'";
    $check_query = mysqli_query($con, $email_check);

    $emailCount = mysqli_num_rows($check_query);

    if ($emailCount > 0) {
        echo '<script>displayErrorMessage("Email already Exists.");</script>';
    } else if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempname2, $folder2)) {
        $insert_data = "INSERT INTO vendor_registration(name, email, password, username, phone, Bio, GST, cover_image, dp_image, date) VALUES ('$name','$email','$pass','$username','$phone','$bio','$gst','$CoverImage','$ProfileImage','$Vendor_reg_date')";
        $insert_sql = mysqli_query($con, $insert_data);

        if ($insert_sql) {
?>

            <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
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
                let SpopUp = document.getElementById('SpopUp');

                SpopUp.style.display = 'flex';
                SpopUp.style.opacity = '100';

                setTimeout(() => {
                    SpopUp.style.display = 'none';
                    SpopUp.style.opacity = '0';
                }, 1500);
            </script>
            <script>
                window.location.href = "vendor_login.php";
            </script>
<?php
        } else {
            echo '<script>displayErrorMessage("Insertion Failed.");</script>';
        }
    }
}
?>
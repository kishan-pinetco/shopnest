<?php
    if(isset($_COOKIE['user_id'])){
        header("Location: /shopnest/index.php");
        exit;
    }

    if(isset($_COOKIE['adminEmail'])){
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

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- link to css -->
    <link rel="stylesheet" href="">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">

    <!-- title -->
    <title>Add Colors</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg font-medium text-gray-800 mx-auto">
            <h1 class="bg-gray-100 text-2xl font-bold flex items-center justify-center mb-6">Add Colors</h1>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-1 text-sm grid-cols-1 lg:grid-cols-1">
                    <div class="lg:col-span-2">
                        <form action="" method="post" enctype="multipart/form-data">
                                <div class="md:col-span-5 mt-5">
                                    <label for="color">Color:</label>
                                    <div class="flex items-center gap-1 flex-wrap mt-2">
                                        <input list="colors" id="colorInput" name="productColor" placeholder="Add a color..." class="relative h-10 border rounded px-4 w-52 bg-gray-50 focus:ring-gray-600 focus:border-gray-600" autocomplete="off">
                                        <datalist id="colors" class="h-20">
                                            <option value="Red">
                                            <option value="Green">
                                            <option value="Blue">
                                            <option value="Yellow">
                                            <option value="Pink">
                                            <option value="Purple">
                                            <option value="Orange">
                                            <option value="Brown">
                                            <option value="Black">
                                            <option value="White">
                                            <option value="Gray">
                                        </datalist>
                                    </div>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="full_name">Product Tital</label>
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="" />
                                </div>

                                <div class="md:col-span-5 mt-4">
                                    <label for="" class="text-lg">Images:</label>
                                    <div class="grid grid-cols-1 min-[321px]:grid-cols-2 md:grid-cols-4 gap-y-12 gap-5 mt-9">
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage1" class="w-72 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="ProfileImage1" type="file" id="imageInput1">
                                                <label for="imageInput1" id="imageLabel1" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload image 1
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage2" class="w-72 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="ProfileImage2" type="file" id="imageInput2">
                                                <label for="imageInput2" id="imageLabel2" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload image 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage3" class="w-72 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="ProfileImage3" type="file" id="imageInput3">
                                                <label for="imageInput3" id="imageLabel3" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload image 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage4" class="w-72 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="ProfileImage4" type="file" id="imageInput4">
                                                <label for="imageInput4" id="imageLabel4" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload image 4
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="md:col-span-5 text-right mt-10">
                                    <div class="inline-flex items-end">
                                        <input type="submit" value="Submit" name="submitBtn" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-8 rounded-tl-lg rounded-br-lg cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- success Message -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="successMessage"></div>
        </div>
    </div>

    <!-- Error message container -->
    <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
        <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="errorMessage"></div>
        </div>
    </div>

    <script>
        // displaly error msg
        function displayErrorMessage(message) {
            let EpopUp = document.getElementById('EpopUp');
            let errorMessage = document.getElementById('errorMessage');

            errorMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            EpopUp.style.display = 'flex';
            EpopUp.style.opacity = '100';

            setTimeout(() => {
                EpopUp.style.display = 'none';
                EpopUp.style.opacity = '0';
            }, 1500);
        }

        // displaly success msg
        function displaySuccessMessage(message) {
            let SpopUp = document.getElementById('SpopUp');
            let successMessage = document.getElementById('successMessage');

            successMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
            SpopUp.style.display = 'flex';
            SpopUp.style.opacity = '100';

            setTimeout(() => {
                SpopUp.style.display = 'none';
                SpopUp.style.opacity = '0';
                window.location.href = "view_products.php";
            }, 700);
        }
    </script>

    <script>
        // upload images
        function setupImagePreview(imageInputId, previewImageId, imageLabelId) {
            const imageInput = document.getElementById(imageInputId);
            const previewImage = document.getElementById(previewImageId);
            const imageLabel = document.getElementById(imageLabelId);
        
            function previewSelectedImage() {
                const file = imageInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        imageLabel.classList.add('hidden'); // Hide the label
                    };
                }
            }
        
            imageInput.addEventListener('change', previewSelectedImage);
        }

        // Setup for each image input
        setupImagePreview('imageInput1', 'previewImage1', 'imageLabel1');
        setupImagePreview('imageInput2', 'previewImage2', 'imageLabel2');
        setupImagePreview('imageInput3', 'previewImage3', 'imageLabel3');
        setupImagePreview('imageInput4', 'previewImage4', 'imageLabel4');



    </script>


    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>

</body>
</html>

<?php
    include "../include/connect.php";

    if(isset($_POST["submitBtn"])) {
        $product_id = $_GET['product_id'];
        $colorNames = $_POST['productColor'];

        // main images 
        function isValidImage($filename) {
            $validExtensions = ['jpg', 'jpeg', 'png'];
            $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            return in_array($extension, $validExtensions);
        }
                
        $profileImages = [];
        // Process main images
        for ($i = 1; $i <= 4; $i++) {
            $profileImageKey = "ProfileImage$i";
            if (isset($_FILES[$profileImageKey]) && $_FILES[$profileImageKey]['error'] === UPLOAD_ERR_OK) {
                $filename = $_FILES[$profileImageKey]['name'];
                $tempName = $_FILES[$profileImageKey]['tmp_name'];
                $folder = '../src/product_image/product_profile/' . $filename;
        
                if (isValidImage($filename)) {
                    if (!move_uploaded_file($tempName, $folder)) {
                        $allFilesUploaded = false;
                    }else{            
                        $profileImages[] = $filename;
                        $allFilesUploaded = true;
                    }
                } else {
                    $allFilesUploaded = false; // Invalid file type
                }
            }
        }
    
        // Prepare file names for database insertion
        $ProfileImage1 = isset($profileImages[0]) ? $profileImages[0] : '';
        $ProfileImage2 = isset($profileImages[1]) ? $profileImages[1] : '';
        $ProfileImage3 = isset($profileImages[2]) ? $profileImages[2] : '';
        $ProfileImage4 = isset($profileImages[3]) ? $profileImages[3] : '';


        $select = "SELECT * FROM items WHERE product_id = '$product_id'";
        $query = mysqli_query($con, $select);

        while ($row = mysqli_fetch_assoc($query)) {
            // for the image
            $color_img = json_decode($row["image"], true);
            $new_color = [
                $colorNames => [
                    'img1' => $ProfileImage1,
                    'img2' => $ProfileImage2,
                    'img3' => $ProfileImage3,
                    'img4' => $ProfileImage4
                ],
            ];

            $merge = array_merge($color_img, $new_color);

            $new_color_img_json = json_encode($new_color);
            $merge_array = json_encode($merge);

            // for new color image title
            $product_title = $_POST['full_name'];
            $color_image_title = json_decode($row['title'], true);

            if (is_null($color_image_title)) {
                $color_image_title = [];
            }

            $new_title = [
                $colorNames => [
                    'product_name' => $product_title,
                ],
            ];

            $merge_product_title = array_merge($color_image_title, $new_title);

            $new_title_json = json_encode($new_title);
            $merge_title_json = json_encode($merge_product_title);


            // for more add new color in column
            $prevColor = $row['color'];
            $allColors = $prevColor . ',' . $colorNames;

            print_r($merge_title_json);
        }

        if (empty($colorNames)) {
            echo '<script>displayErrorMessage("Please Insert Color names for the Product.");</script>';
            exit();
        }
        if (empty($product_title)) {
            echo '<script>displayErrorMessage("Please Insert Product Title for the Product.");</script>';
            exit();
        }

        if (empty($ProfileImage1)) {
            echo '<script>displayErrorMessage("Please Insert First Image.");</script>';
            exit();
        }
    
        if (empty($ProfileImage2)) {
            echo '<script>displayErrorMessage("Please Insert Second Image Image.");</script>';
            exit();
        }

        if ($allFilesUploaded) {
            
            $update_colors = "UPDATE items SET title='$merge_title_json',image='$merge_array',color='$allColors' WHERE product_id = '$product_id'";
            $update_query = mysqli_query($con, $update_colors);

            if ($update_query) {
                echo '<script>displaySuccessMessage("Data updated successfully.");</script>';
            } else {
                echo '<script>displayErrorMessage("Data not Inserted Properly..");</script>';
            }
        } else { 
            echo '<script>displayErrorMessage("Enter Valid Details.");</script>';
        }
    }
?>
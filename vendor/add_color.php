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
                                        <input list="colors" id="colorInput" name="productColor" placeholder="Add a color..." class="relative h-10 border rounded px-4 w-52 bg-gray-50" autocomplete="off">
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
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
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
                                        <input type="submit" value="Submit" name="submitBtn" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-8 rounded cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


</body>
</html>

<?php
    include "../include/connect.php";

    if(isset($_POST["submitBtn"])) {

        $product_id = $_GET['product_id'];

        $colorNames = $_POST['productColor'];

        // main images 
        $ProfileImage1 = $_FILES['ProfileImage1']['name'];
        $tempName1 = $_FILES['ProfileImage1']['tmp_name'];
        $folder1 = '../src/product_image/product_profile/' . $ProfileImage1;


        $ProfileImage2 = $_FILES['ProfileImage2']['name'];
        $tempName2 = $_FILES['ProfileImage2']['tmp_name'];
        $folder2 = '../src/product_image/product_profile/' . $ProfileImage2;


        $ProfileImage3 = $_FILES['ProfileImage3']['name'];
        $tempName3 = $_FILES['ProfileImage3']['tmp_name'];
        $folder3 = '../src/product_image/product_profile/' . $ProfileImage3;


        $ProfileImage4 = $_FILES['ProfileImage4']['name'];
        $tempName4 = $_FILES['ProfileImage4']['tmp_name'];
        $folder4 = '../src/product_image/product_profile/' . $ProfileImage4;

        $allFilesUploaded = true;


        
        
        // Process main images
        if (!empty($tempName1) && !move_uploaded_file($tempName1, $folder1)) $allFilesUploaded = false;
        if (!empty($tempName2) && !move_uploaded_file($tempName2, $folder2)) $allFilesUploaded = false;
        if (!empty($tempName3) && !move_uploaded_file($tempName3, $folder3)) $allFilesUploaded = false;
        if (!empty($tempName4) && !move_uploaded_file($tempName4, $folder4)) $allFilesUploaded = false;

        // Prepare file names for database insertion
        $ProfileImage1 = $_FILES['ProfileImage1']['error'] === UPLOAD_ERR_OK ? $ProfileImage1 : '';
        $ProfileImage2 = $_FILES['ProfileImage2']['error'] === UPLOAD_ERR_OK ? $ProfileImage2 : '';
        $ProfileImage3 = $_FILES['ProfileImage3']['error'] === UPLOAD_ERR_OK ? $ProfileImage3 : '';
        $ProfileImage4 = $_FILES['ProfileImage4']['error'] === UPLOAD_ERR_OK ? $ProfileImage4 : '';

        

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

        if ($allFilesUploaded) {
            
            $update_colors = "UPDATE items SET title='$merge_title_json',image='$merge_array',color='$allColors' WHERE product_id = '$product_id'";
            $update_query = mysqli_query($con, $update_colors);
            if ($update_query) {
                ?>
                    <script>alert('Data Inserted.')</script>
                    <script>window.location.href = 'view_products.php'</script>
                <?php 

            } else {
                ?>
                    <script>alert('Data not Inserted Properly.')</script>
                <?php 
            }
        } else {
            ?>
                <script>alert('Some files could not be uploaded.')</script>
            <?php 
        }
    }
?>
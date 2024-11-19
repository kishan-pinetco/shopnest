<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /index.php");
    exit;
}

if(isset($_COOKIE['vendor_id'])){
    header("Location: /vendor/vendor_dashboard.php");
    exit;
}
?>
<?php

include "../include/connect.php";

if (isset($_GET['product_id'])) {

    $product = $_GET['name'];

    $product_id = $_GET['product_id'];
    $product_find = "SELECT * FROM products WHERE product_id = '$product_id'";
    $product_query = mysqli_query($con, $product_find);
    $row = mysqli_fetch_assoc($product_query);

    $colors = $row['color'];

    $productType = $_GET['name'];

    $title = $row['title'];

    $MRP = $row['vendor_mrp'];
    $Your_Price = $row['vendor_price'];

    if (isset($_COOKIE['vendor_id'])) {
        $vendor_id = $_COOKIE['vendor_id'];

        $retrieve_data = "SELECT * FROM vendor_registration WHERE vendor_id = '$vendor_id'";
        $retrieve_query = mysqli_query($con, $retrieve_data);

        $res = mysqli_fetch_assoc($retrieve_query);
    }
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
    <title><?php echo isset($title) ? $title : "Update Products" ?></title>

    <style>
        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
            font-size: medium;
        }
    </style>
</head>

<body style="font-family: 'Outfit', sans-serif;">

    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-600">
        <div class="flex items-center justify-center mt-8 mb-7 mr-2">
            <a class="flex w-fit" href="view_product.php">
                <!-- icon logo div -->
                <div>
                    <img class="w-7 sm:w-14 mt-0.5" src="/src/logo/black_cart_logo.svg" alt="">
                </div>
                <!-- text logo -->
                <div>
                    <img class="w-16 sm:w-36" src="/src/logo/black_text_logo.svg" alt="">
                </div>
            </a>
        </div>
    </header>

    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg font-medium text-gray-800 mx-auto">
            <h1 class="bg-gray-100 text-2xl font-bold flex items-center justify-center mb-6">Edit products</h1>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-1 text-sm grid-cols-1 lg:grid-cols-1">
                    <div class="lg:col-span-2">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="grid gap-4 gap-y-4 items-center text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="full_name" class="require">Product tital:</label>
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" value="<?php echo isset($_GET['product_id']) ? $title : 'title' ?>" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="Company_name" class="require">Company name:</label>
                                    <input type="text" name="Company_name" id="Company_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" value="<?php echo isset($_GET['product_id']) ? $row['company_name'] : 'company_name' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="category" class="require">Category:</label>
                                    <input type="text" name="Category" id="Category" class="hover:cursor-not-allowed opacity-60 h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="<?php echo isset($_GET['product_id']) ? $row['Category'] : 'Category' ?>" placeholder="" disabled />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="type" class="require">Type:</label>
                                    <input type="text" name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" value="<?php echo isset($_GET['product_id']) ? $row['Type'] : 'Type' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="MRP" class="require">MRP:</label>
                                    <div class="relative">
                                        <input type="text" name="MyMRP" id="MRP" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10 focus:border-gray-600 focus:ring-gray-600 z-10" value="<?php echo isset($_GET['product_id']) ? $MRP : 'MRP' ?>" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="your_price" class="require">Your price:</label>
                                    <div class="relative">
                                        <input type="text" name="My_your_price" id="your_price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10 focus:border-gray-600 focus:ring-gray-600 z-10" value="<?php echo isset($_GET['product_id']) ? $Your_Price : 'Your_Price' ?>" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="quantity" class="require">Quantity:</label>
                                    <input type="text" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" value="<?php echo isset($_GET['product_id']) ? $row['Quantity'] : 'Quantity' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="condition" class="require">Item condition:</label>
                                    <select name="condition" id="condition" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" value="<?php echo isset($_GET['product_id']) ? $row['Item_Condition'] : 'Item_Condition' ?>">
                                        <option value="New Condition">New condition</option>
                                        <option value="Old Condition">Old condition</option>
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="description" class="require">Description:</label>
                                    <textarea name="description" id="description" class="h-32 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600 resize-none" value="" placeholder=""><?php echo isset($_GET['product_id']) ? $row['Description'] : 'Description' ?></textarea>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="keyword" class="require">Keywords:</label>
                                    <div id="keyword-container" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">

                                    </div>
                                    <?php
                                    $all_keywords = [];
                                    $key = $row['keywords'];
                                    $key_array = explode(",", $key);
                                    foreach ($key_array as $ky) {
                                        $ky = trim($ky);
                                        $all_keywords[] = $ky;
                                    }
                                    // Convert the array to a JSON string
                                    $keywords_json = json_encode($all_keywords);

                                    ?>
                                    <input type="hidden" id="keyword-data" value='<?php echo $keywords_json; ?>'>
                                    <?php
                                    ?>
                                    <button id="add-keyword" class="px-4 py-2 bg-gray-600 text-white rounded-tl-lg rounded-br-lg mt-2">Add more keyword</button>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="size" class="block font-semibold">Size:</label>
                                    <div id="size-container" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">
                                        <?php
                                        $all_sizes = [];
                                        $mrp_values = [];
                                        $price_values = [];

                                        $key = $row['size'];
                                        $mrp_key = $row['MRP'];

                                        $mrp_data = json_decode($mrp_key, true);
                                        $key_array = explode(",", $key);
                                        foreach ($key_array as $ky) {
                                            $all_sizes[] = trim($ky);
                                        }

                                        foreach ($all_sizes as $size) {
                                            if (isset($mrp_data[$size])) {
                                                $mrp_values[] = $mrp_data[$size]['MRP'];
                                                $price_values[] = $mrp_data[$size]['Your_Price'];
                                            } else {
                                                $mrp_values[] = '';
                                                $price_values[] = '';
                                            }
                                        }

                                        foreach ($all_sizes as $index => $size) {
                                        ?>
                                            <div class="size-item mb-4 relative">
                                                <input type="text" name="size[]" value="<?php echo htmlspecialchars($size, ENT_QUOTES) ?>" placeholder="Enter size" class="h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600">
                                                <div class="suggestions-container absolute bg-white border border-gray-300 mt-1 z-10 w-full rounded-lg hidden"></div>
                                                <?php if ($index > 0) { ?>
                                                    <input type="text" name="MRP2[]" value="<?php echo htmlspecialchars($mrp_values[$index], ENT_QUOTES) ?>" placeholder="Enter MRP" class="h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600">
                                                    <input type="text" name="your_price2[]" value="<?php echo htmlspecialchars($price_values[$index], ENT_QUOTES) ?>" placeholder="Enter Your Price" class="h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600">
                                                <?php } ?>
                                                <button type="button" class="remove-size p-2 text-red-500 bg-red-100 rounded focus:outline-none mt-2">Remove</button>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <input type="hidden" id="size-data" value='<?php echo $size_json ?>'>
                                    <button id="add-size" type="button" class="px-4 py-2 bg-gray-600 text-white rounded-lg mt-2 hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400">Add more size</button>

                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="color">Color:</label>
                                    <div class="relative mt-2">
                                        <input type="text" value="<?php echo isset($_GET['product_id']) ? $row['color'] : 'Colors' ?>" id="colorInput" name="color" placeholder="Type a color..." class="h-10 border rounded px-4 z-10 w-full bg-gray-50 focus:border-gray-600 focus:ring-gray-600" autocomplete="off" readonly>
                                        <div id="colorSuggestions" class="absolute left-0 mt-1 w-full bg-white border border-gray-300 rounded-lg z-10 hidden"></div>
                                    </div>
                                </div>

                                <?php
                                // profile_images
                                $img1 = $row['profile_image_1'] ?? '';
                                $img2 = $row['profile_image_2'] ?? '';
                                $img3 = $row['profile_image_3'] ?? '';
                                $img4 = $row['profile_image_4'] ?? '';

                                // cover images
                                $cover_img1 = $row['cover_image_1'];
                                $cover_img2 = $row['cover_image_2'];
                                $cover_img3 = $row['cover_image_3'];
                                $cover_img4 = $row['cover_image_4'];

                                ?>

                                <div class="md:col-span-5 mt-4">
                                    <label for="" class="text-lg require">Images:</label>
                                    <div class="grid grid-cols-1 min-[500px]:grid-cols-2 min-[700px]:grid-cols-3 lg:grid-cols-4 gap-5 gap-y-24 mt-9">
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewImage1" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_profile/' . $img1 ?>">
                                                <input class="hidden" name="ProfileImage1" type="file" id="imageInput1">
                                            </div>
                                            <label for="imageInput1" id="imageLabel1" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                Update image 1
                                            </label>
                                        </div>

                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewImage2" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_profile/' . $img2 ?>">
                                                <input class="hidden" name="ProfileImage2" type="file" id="imageInput2">
                                                <label for="imageInput2" id="imageLabel2" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update image 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewImage3" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_profile/' . $img3 ?>">
                                                <input class="hidden" name="ProfileImage3" type="file" id="imageInput3">
                                                <label for="imageInput3" id="imageLabel3" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update image 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewImage4" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_profile/' . $img4 ?>">
                                                <input class="hidden" name="ProfileImage4" type="file" id="imageInput4">
                                                <label for="imageInput4" id="imageLabel4" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update image 4
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:col-span-5 mt-12 mb-4">
                                    <label for="" class="text-lg require">Cover Images:</label>
                                    <div class="grid grid-cols-1 min-[500px]:grid-cols-2 min-[700px]:grid-cols-3 lg:grid-cols-4 gap-5 gap-y-24 mt-9">
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage1" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_cover/' . $cover_img1 ?>">
                                                <input class="hidden" name="CoverImage1" type="file" id="CoverimageInput1">
                                                <label for="CoverimageInput1" id="CoverimageLabel1" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update Cover image 1
                                                </label>
                                            </div>
                                        </div>
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage2" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_cover/' . $cover_img2 ?>">
                                                <input class="hidden" name="CoverImage2" type="file" id="CoverimageInput2">
                                                <label for="CoverimageInput2" id="CoverimageLabel2" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update Cover image 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage3" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_cover/' . $cover_img3 ?>">
                                                <input class="hidden" name="CoverImage3" type="file" id="CoverimageInput3">
                                                <label for="CoverimageInput3" id="CoverimageLabel3" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update Cover image 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="relative w-full max-w-max m-auto">
                                            <div class="flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage4" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="<?php echo '../src/product_image/product_cover/' . $cover_img4 ?>">
                                                <input class="hidden" name="CoverImage4" type="file" id="CoverimageInput4">
                                                <label for="CoverimageInput4" id="CoverimageLabel4" class="absolute -bottom-9 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-b-lg w-full text-center p-1 cursor-pointer">
                                                    Update Cover image 4
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between mt-10">
                                <div>
                                    <input type="button" value="Back" onclick="window.location.href='view_products.php'" name="backBtn" class="bg-gray-600 hover:bg-gray-700 text-white py-2 w-24 sm:w-28 rounded-tl-lg rounded-br-lg cursor-pointer">
                                </div>
                                <div class="inline-flex items-end">
                                    <input type="submit" value="Update" name="updateBtn" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-8 rounded-tl-lg rounded-br-lg cursor-pointer">
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
            }, 700);
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
                window.location.href = "view_product.php";
            }, 700);
        }
    </script>

    <!-- upload update_product.js -->
    <script src="edit_product.js"></script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48196419.js"></script>
</body>

</html>

<?php

include "../include/connect.php";

if (isset($_POST['updateBtn'])) {

    if (isset($_COOKIE['vendor_id'])) {
        $vendor_id = $_COOKIE['vendor_id'];
    }

    // Escape user inputs
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $Company_name = mysqli_real_escape_string($con, $_POST['Company_name']);
    $Category = mysqli_real_escape_string($con, $_GET['name']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $MRP = $_POST['MyMRP'];
    $your_price = $_POST['My_your_price'];
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $condition = mysqli_real_escape_string($con, $_POST['condition']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    // Initialize uploaded file paths
    $uploadedFiles = [];
    $allFilesUploaded = true;

    // Process Profile Images
    for ($i = 1; $i <= 4; $i++) {
        $profileKey = 'ProfileImage' . $i;
        if (isset($_FILES[$profileKey]) && $_FILES[$profileKey]['error'] === UPLOAD_ERR_OK) {
            $uploadedFiles[$profileKey] = $_FILES[$profileKey]['name'];
            $folder = '../src/product_image/product_profile/' . $uploadedFiles[$profileKey];

            if (!move_uploaded_file($_FILES[$profileKey]['tmp_name'], $folder)) {
                $allFilesUploaded = false;
                echo "Failed to upload $profileKey<br>";
            }
        } else {
            // If not uploaded, use the existing image if available
            $uploadedFiles[$profileKey] = isset(${"img" . $i}) ? ${"img" . $i} : null;
        }
    }

    // Process Cover Images
    for ($i = 1; $i <= 4; $i++) {
        $coverKey = 'CoverImage' . $i;
        if (isset($_FILES[$coverKey]) && $_FILES[$coverKey]['error'] === UPLOAD_ERR_OK) {
            $uploadedFiles[$coverKey] = $_FILES[$coverKey]['name'];
            $folder = '../src/product_image/product_cover/' . $uploadedFiles[$coverKey];

            if (!move_uploaded_file($_FILES[$coverKey]['tmp_name'], $folder)) {
                $allFilesUploaded = false;
                echo "Failed to upload $coverKey<br>";
            }
        } else {
            // If not uploaded, use the existing image if available
            $uploadedFiles[$coverKey] = isset(${"cover_img" . $i}) ? ${"cover_img" . $i} : null;
        }
    }

    // Colors and Keywords
    $keyword = isset($_POST['keyword']) && is_array($_POST['keyword']) ? $_POST['keyword'] : [];
    $size = isset($_POST['size']) && is_array($_POST['size']) ? $_POST['size'] : [];

    $key_value = implode(',', $keyword);
    $size_value = !empty($size) ? implode(', ', $size) : '-';

    if (isset($_POST['size']) && !empty($_POST['size'])) {
        $size = $_POST['size'];
        $size_filter = implode(",", $size);
        $normalized_size = array_map('strtolower', $size);

        if (is_array($size) && !empty($size) && !in_array('', $normalized_size) && !in_array('none', $normalized_size)) {
            $size_img = [];
            foreach ($size as $index => $psize) {
                if ($index === 0) {
                    // First size
                    $size_img[$psize] = [
                        'MRP' => $MRP,
                        'Your_Price' => $your_price,
                    ];
                } else {
                    $MRP2 = isset($_POST['MRP2']) ? $_POST['MRP2'] : [];
                    $your_price2 = isset($_POST['your_price2']) ? $_POST['your_price2'] : [];

                    if (isset($MRP2[$index - 1]) && isset($your_price2[$index - 1])) {
                        $size_img[$psize] = [
                            'MRP' => $MRP2[$index - 1],
                            'Your_Price' => $your_price2[$index - 1],
                        ];
                    }
                }
            }
            // Encode the size_img array to JSON
            $json_size_encode = json_encode($size_img);
        } else {
            $size_filter = '-';
            $size_img['N-A'] = [
                'MRP' => $MRP,
                'Your_Price' => $your_price,
            ];

            $json_size_encode = json_encode($size_img);
        }
    }


    // Update the database
    if ($allFilesUploaded) {
        $product_update = "UPDATE products 
        SET 
            title = '$full_name',
            profile_image_1 = '{$uploadedFiles['ProfileImage1']}',
            profile_image_2 = '{$uploadedFiles['ProfileImage2']}',
            profile_image_3 = '{$uploadedFiles['ProfileImage3']}',
            profile_image_4 = '{$uploadedFiles['ProfileImage4']}',
            cover_image_1 = '{$uploadedFiles['CoverImage1']}', 
            cover_image_2 = '{$uploadedFiles['CoverImage2']}', 
            cover_image_3 = '{$uploadedFiles['CoverImage3']}', 
            cover_image_4 = '{$uploadedFiles['CoverImage4']}', 
            company_name='$Company_name', 
            Category='$Category', 
            Type='$type', 
            MRP = '$json_size_encode',
            vendor_mrp = '$MRP', 
            vendor_price = '$your_price',
            Quantity='$quantity', 
            Item_Condition='$condition', 
            Description='$description',  
            size = '$size_filter',
            keywords='$key_value' 
        WHERE product_id = '$product_id'";        


        // print_r($product_update);

        $product_query = mysqli_query($con, $product_update);
        if ($product_query) {
            echo '<script>displaySuccessMessage("Data updated successfully.");</script>';
        } else {
            echo '<script>displayErrorMessage("Data not updated properly.");</script>';
        }
    } else {
        echo "not updated";
    }
}
?>
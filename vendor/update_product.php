<?php

include "../include/connect.php";

if (isset($_GET['product_id'])) {

    $product = $_GET['name'];

    $product_id = $_GET['product_id'];
    $product_find = "SELECT * FROM items WHERE product_id = '$product_id'";
    $product_query = mysqli_query($con, $product_find);
    $row = mysqli_fetch_assoc($product_query);

    $options = [
        'Phones' => [
            ['value' => '4GB-32GB', 'text' => '4 GB RAM, 32 GB ROM'],
            ['value' => '4GB-64GB', 'text' => '4 GB RAM, 64 GB ROM'],
            ['value' => '6GB-64GB', 'text' => '6 GB RAM, 64 GB ROM'],
            ['value' => '6GB-128GB', 'text' => '6 GB RAM, 128 GB ROM'],
            ['value' => '8GB-128GB', 'text' => '8 GB RAM, 128 GB ROM'],
            ['value' => '8GB-256GB', 'text' => '8 GB RAM, 256 GB ROM'],
            ['value' => '12GB-256GB', 'text' => '12 GB RAM, 256 GB ROM'],
            ['value' => '12GB-512GB', 'text' => '12 GB RAM, 512 GB ROM'],
            ['value' => '16GB-512GB', 'text' => '16 GB RAM, 512 GB ROM']
        ],
        'Clothes' => [
            ['value' => 'XS', 'text' => 'XS'],
            ['value' => 'S', 'text' => 'S'],
            ['value' => 'M', 'text' => 'M'],
            ['value' => 'L', 'text' => 'L'],
            ['value' => 'XL', 'text' => 'XL'],
            ['value' => 'XXL', 'text' => 'XXL']
        ],
        'Laptops/MacBook' => [
            ['value' => '4GB-128GB', 'text' => '4 GB RAM, 128 GB SSD'],
            ['value' => '8GB-256GB', 'text' => '8 GB RAM, 256 GB SSD'],
            ['value' => '8GB-512GB', 'text' => '8 GB RAM, 512 GB SSD'],
            ['value' => '16GB-512GB', 'text' => '16 GB RAM, 512 GB SSD'],
            ['value' => '16GB-1TB', 'text' => '16 GB RAM, 1 TB SSD'],
            ['value' => '32GB-1TB', 'text' => '32 GB RAM, 1 TB SSD'],
            ['value' => '32GB-2TB', 'text' => '32 GB RAM, 2 TB SSD'],
            ['value' => '64GB-2TB', 'text' => '64 GB RAM, 2 TB SSD']
        ],
        'Tabs/Ipad' => [
            ['value' => '4GB-64GB', 'text' => '4 GB RAM, 64 GB Storage'],
            ['value' => '4GB-128GB', 'text' => '4 GB RAM, 128 GB Storage'],
            ['value' => '6GB-128GB', 'text' => '6 GB RAM, 128 GB Storage'],
            ['value' => '6GB-256GB', 'text' => '6 GB RAM, 256 GB Storage'],
            ['value' => '8GB-128GB', 'text' => '8 GB RAM, 128 GB Storage'],
            ['value' => '8GB-256GB', 'text' => '8 GB RAM, 256 GB Storage'],
            ['value' => '8GB-512GB', 'text' => '8 GB RAM, 512 GB Storage'],
            ['value' => '12GB-256GB', 'text' => '12 GB RAM, 256 GB Storage'],
            ['value' => '12GB-512GB', 'text' => '12 GB RAM, 512 GB Storage']
        ],
        'Shoes' => [
            ['value' => '6 UK', 'text' => '6 UK'],
            ['value' => '7 UK', 'text' => '7 UK'],
            ['value' => '8 UK', 'text' => '8 UK'],
            ['value' => '9 UK', 'text' => '9 UK'],
            ['value' => '10 UK', 'text' => '10 UK']
        ]
    ];

    $productType = $_GET['name'];
    $optionsForType = isset($options[$productType]) ? $options[$productType] : [];

    $json_title = $row['title'];
    $title_json = json_decode($json_title, true);

    foreach($title_json as $key => $value) {
        $first_color_title = $key;
        break;
    }

    $first_name = isset($title_json[$first_color_title]) ? $title_json[$first_color_title] : ''; 
    $first_title = $first_name['product_name'];
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
    <title>Add Products</title>
</head>

<body style="font-family: 'Outfit', sans-serif;">

    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg font-medium text-gray-800 mx-auto">
            <h1 class="bg-gray-100 text-2xl font-bold flex items-center justify-center mb-6">Add products</h1>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-1 text-sm grid-cols-1 lg:grid-cols-1">
                    <div class="lg:col-span-2">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="grid gap-4 gap-y-4 items-center text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="full_name">Product Tital</label>
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $first_title : 'title' ?>" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="Company_name">Company Name</label>
                                    <input type="text" name="Company_name" id="Company_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['company_name'] : 'company_name' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="category">Category</label>
                                    <input type="text" name="Category" id="Category" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['Category'] : 'Category' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['Type'] : 'Type' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="MRP">MRP</label>
                                    <div class="relative">
                                        <input type="text" name="MRP" id="MRP" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10" value="<?php echo isset($_GET['product_id']) ? $row['MRP'] : 'MRP' ?>" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="your_price">Your Price</label>
                                    <div class="relative">
                                        <input type="text" name="your_price" id="your_price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10" value="<?php echo isset($_GET['product_id']) ? $row['Your_Price'] : 'Your_Price' ?>" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['Quantity'] : 'Quantity' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="condition">Item Condition</label>
                                    <select name="condition" id="condition" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['Item_Condition'] : 'Item_Condition' ?>">
                                        <option value="New Condition">New Condition</option>
                                        <option value="Old Condition">Old Condition</option>
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" class="h-full border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo isset($_GET['product_id']) ? $row['Description'] : 'Description' ?>">
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="keyword">Keywords</label>
                                    <div id="keyword-container" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">
                                        <div class="flex items-center relative">
                                            <?php
                                            if (isset($_COOKIE['vendor_id'])) {
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
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <button id="add-keyword" class="px-4 py-2 bg-gray-600 text-white rounded-tl-lg rounded-br-lg mt-2">Add More Keyword</button>
                                </div>

                                <?php
                                    $size = $row['size'];

                                    if($size == '-'){
                                        echo '';
                                    }else{
                                        ?>
                                            <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                        <?php foreach ($optionsForType as $option): ?>
                                                            <option value="<?php echo $option['value']; ?>">
                                                                <?php echo $option['text']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-gray-600 text-white rounded-tl-lg rounded-br-lg mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.className = 'h-10 border mt-1 rounded px-4 w-full bg-gray-50';
                                                    
                                                        // Options array defined in PHP is now available in JavaScript
                                                        var options = <?php echo json_encode($optionsForType); ?>;
                                                    
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });
                                                    
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }
                                ?>
                            
                                <div class="md:col-span-5 text-right mt-7">
                                    <div class="inline-flex items-end">
                                        <input type="submit" value="Update" name="updateBtn" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-8 rounded-tl-lg rounded-br-lg cursor-pointer">
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
                window.location.href = "view_products.php";
            }, 700);
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let inputContainer = document.getElementById('input-container');
            let colorsData = document.getElementById('colors-data').value;
            let colorsArray = JSON.parse(colorsData);

            // Function to create a color input and remove button
            function createColorItem(color) {
                let colorItem = document.createElement('div');
                colorItem.className = 'flex items-center mb-2 pl-1 rounded-sm border p-1';

                let newInput = document.createElement('input');
                newInput.type = 'color';
                newInput.name = 'color[]';
                newInput.className = 'w-20 h-8';
                newInput.value = color;

                let removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'text-red-500 bg-red-100 h-8 w-8 m-auto focus:outline-none';
                removeButton.setAttribute('aria-label', 'Remove Color');
                removeButton.innerHTML = `
                    <svg class="w-5 h-5 m-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                `;
                removeButton.addEventListener('click', function() {
                    inputContainer.removeChild(colorItem);
                });

                colorItem.appendChild(newInput);
                colorItem.appendChild(removeButton);

                return colorItem;
            }

            // Initialize color inputs based on existing data
            colorsArray.forEach(color => {
                let colorItem = createColorItem(color);
                inputContainer.appendChild(colorItem);
            });

            // Add event listener for adding new colors
            document.getElementById('add-input').addEventListener('click', function() {
                let colorItem = createColorItem('#000000'); // Default color
                inputContainer.appendChild(colorItem);
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            let keywordContainer = document.getElementById('keyword-container');
            let keywordsData = document.getElementById('keyword-data').value;
            let keywordsArray = JSON.parse(keywordsData);

            function createKeywordItem(keyword) {
                let keywordItem = document.createElement('div');
                keywordItem.className = 'flex items-center relative mb-2';

                let keywordInput = document.createElement('input');
                keywordInput.type = 'text';
                keywordInput.name = 'keyword[]';
                keywordInput.placeholder = 'Enter keyword';
                keywordInput.className = 'relative h-10 border rounded px-4 w-full bg-gray-50';
                keywordInput.value = keyword;

                let removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'p-2 text-red-500 bg-red-100 rounded focus:outline-none absolute right-0.5 top-0.5';
                removeButton.setAttribute('aria-label', 'Remove');
                removeButton.innerHTML = `
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                `;
                removeButton.addEventListener('click', function() {
                    keywordContainer.removeChild(keywordItem);
                });

                keywordItem.appendChild(keywordInput);
                keywordItem.appendChild(removeButton);

                return keywordItem;
            }

            keywordsArray.forEach(keyword => {
                let keywordItem = createKeywordItem(keyword);
                keywordContainer.appendChild(keywordItem);
            });

            document.getElementById('add-keyword').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default button behavior
                let keywordItem = createKeywordItem('');
                keywordContainer.appendChild(keywordItem);
            });
        });
    </script>

</body>

</html>

<?php

include "../include/connect.php";

if (isset($_POST['updateBtn'])) {

    if (isset($_COOKIE['vendor_id'])) {
        $vendor_id = $_COOKIE['vendor_id'];
    }

    $Product_insert_Date = date('d-m-Y');

    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $Company_name = mysqli_real_escape_string($con, $_POST['Company_name']);
    $Category = mysqli_real_escape_string($con, $_POST['Category']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $your_price = mysqli_real_escape_string($con, $_POST['your_price']);
    $MRP = mysqli_real_escape_string($con, $_POST['MRP']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $condition = mysqli_real_escape_string($con, $_POST['condition']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $keyword = $_POST['keyword'];
    $color = $_POST['color'];
    $size = $_POST['size'];

    foreach ($keyword as $key) {
        $key = $_POST['keyword'];
    }

    foreach ($color as $clr) {
        $clr = $_POST['color'];
    }

    foreach ($size as $sz) {
        $sz = $_POST['size'];
    }


    $key_value = implode(',', $key);
    $color_value = implode(',', $clr);
    $size_value = implode(',', $sz);

    $product_update = "UPDATE products SET title='$full_name',company_name='$Company_name',Category='$Category',Type='$type',Your_Price='$your_price',MRP='$MRP',Quantity='$quantity',Item_Condition='$condition',Description='$description',color='$color_value',size='$size_value',keywords='$key_value' WHERE product_id = '$product_id'";
    $product_query = mysqli_query($con, $product_update);
    if ($product_query) {
        echo '<script>displaySuccessMessage("Data update Successfully.");</script>';
    } else {
        echo '<script>displayErrorMessage("Data not update Properly.");</script>';
    }
}
?>
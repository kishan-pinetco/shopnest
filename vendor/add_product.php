<?php
    $product = $_GET['name'];
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
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="Company_name">Company Name</label>
                                    <input type="text" name="Company_name" id="Company_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="category">Category</label>
                                    <input type="text" name="Category" id="Category" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $product;?>" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="your_price">Your Price</label>
                                    <div class="relative">
                                        <input type="text" name="your_price" id="your_price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10" value="" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="MRP">MRP</label>
                                    <div class="relative">
                                        <input type="text" name="MRP" id="MRP" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10" value="" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="condition">Item Condition</label>
                                    <select name="condition" id="condition" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                        <option value="New Condition">New Condition</option>
                                        <option value="Old Condition">Old Condition</option>
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="h-32 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""></textarea>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="keyword">Keywords</label>
                                    <div id="keyword-container" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">
                                        <div class="flex items-center relative">
                                            <input type="text" name="keyword[]" placeholder="Enter keyword" class="relative h-10 border rounded px-4 w-full bg-gray-50">
                                        </div>
                                    </div>
                                    <button id="add-keyword" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2">Add More Keyword</button>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="color">Color:</label>
                                    <div class="flex items-center gap-1 flex-wrap mt-2" id="input-container">
                                        <div class="flex items-center mb-2 pl-1 rounded-sm border p-1">
                                            <input type="color" name="color[]" class="w-20 h-8">
                                        </div>
                                    </div>
                                    <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-input">Add More Colors</button>
                                </div>
                                

                                <?php
                                    $phone = "Phones";
                                    if($_GET['name'] === $phone){
                                        ?>
                                            <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" id="size" class="border mt-1 rounded px-4 bg-gray-50" value="">
                                                        <option value="4GB-32GB">4 GB RAM, 32 GB ROM</option>
                                                        <option value="4GB-64GB">4 GB RAM, 64 GB ROM</option>
                                                        <option value="6GB-64GB">6 GB RAM, 64 GB ROM</option>
                                                        <option value="6GB-128GB">6 GB RAM, 128 GB ROM</option>
                                                        <option value="8GB-128GB">8 GB RAM, 128 GB ROM</option>
                                                        <option value="8GB-256GB">8 GB RAM, 256 GB ROM</option>
                                                        <option value="12GB-256GB">12 GB RAM, 256 GB ROM</option>
                                                        <option value="12GB-512GB">12 GB RAM, 512 GB ROM</option>
                                                        <option value="16GB-512GB">16 GB RAM, 512 GB ROM</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');

                                                        // Create a new <select> element
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.id = 'size';
                                                        newSelect.className = 'border mt-1 rounded px-4 bg-gray-50';

                                                        // Array of options
                                                        var options = [
                                                            { value: '4GB-32GB', text: '4 GB RAM, 32 GB ROM' },
                                                            { value: '4GB-64GB', text: '4 GB RAM, 64 GB ROM' },
                                                            { value: '6GB-64GB', text: '6 GB RAM, 64 GB ROM' },
                                                            { value: '6GB-128GB', text: '6 GB RAM, 128 GB ROM' },
                                                            { value: '8GB-128GB', text: '8 GB RAM, 128 GB ROM' },
                                                            { value: '8GB-256GB', text: '8 GB RAM, 256 GB ROM' },
                                                            { value: '12GB-256GB', text: '12 GB RAM, 256 GB ROM' },
                                                            { value: '12GB-512GB', text: '12 GB RAM, 512 GB ROM' },
                                                            { value: '16GB-512GB', text: '16 GB RAM, 512 GB ROM' }
                                                        ];

                                                        // Append options to the <select> element
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });

                                                        // Append the new <select> element to the container
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Clothes'){
                                        ?>
                                            <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                        <option value="XS">XS</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');

                                                        // Create a new <select> element
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.id = 'size';
                                                        newSelect.className = 'border mt-1 rounded px-4 bg-gray-50';

                                                        // Array of options
                                                        var options = [
                                                            { value: 'XS', text: 'XS' },
                                                            { value: 'S', text: 'S' },
                                                            { value: 'M', text: 'M' },
                                                            { value: 'L', text: 'L' },
                                                            { value: 'XL', text: 'XL' },
                                                            { value: 'XXL', text: 'XXL' }
                                                        ];

                                                        // Append options to the <select> element
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });

                                                        // Append the new <select> element to the container
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Laptops/MacBook'){
                                        ?>
                                            <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                        <option value="4GB-128GB">4 GB RAM, 128 GB SSD</option>
                                                        <option value="8GB-256GB">8 GB RAM, 256 GB SSD</option>
                                                        <option value="8GB-512GB">8 GB RAM, 512 GB SSD</option>
                                                        <option value="16GB-512GB">16 GB RAM, 512 GB SSD</option>
                                                        <option value="16GB-1TB">16 GB RAM, 1 TB SSD</option>
                                                        <option value="32GB-1TB">32 GB RAM, 1 TB SSD</option>
                                                        <option value="32GB-2TB">32 GB RAM, 2 TB SSD</option>
                                                        <option value="64GB-2TB">64 GB RAM, 2 TB SSD</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');

                                                        // Create a new <select> element
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.id = 'size';
                                                        newSelect.className = 'border mt-1 rounded px-4 bg-gray-50';

                                                        // Array of options
                                                        var options = [
                                                            { value: '4GB-128GB', text: '4GB RAM, 128GB SSD' },
                                                            { value: '8GB-256GB', text: '8GB RAM, 256GB SSD' },
                                                            { value: '8GB-512GB', text: '8GB RAM, 512GB SSD' },
                                                            { value: '16GB-512GB', text: '16GB RAM, 512GB SSD' },
                                                            { value: '16GB-1TB', text: '16GB RAM, 1TB SSD' },
                                                            { value: '32GB-1TB', text: '32GB RAM, 1TB SSD' },
                                                            { value: '32GB-2TB', text: '32GB RAM, 2TB SSD' },
                                                            { value: '64GB-2TB', text: '64GB RAM, 2TB SSD' }
                                                        ];

                                                        // Append options to the <select> element
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });

                                                        // Append the new <select> element to the container
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Tabs/Ipad'){
                                        ?>
                                        <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                        <option value="4GB-64GB">4 GB RAM, 64 GB Storage</option>
                                                        <option value="4GB-128GB">4 GB RAM, 128 GB Storage</option>
                                                        <option value="6GB-128GB">6 GB RAM, 128 GB Storage</option>
                                                        <option value="6GB-256GB">6 GB RAM, 256 GB Storage</option>
                                                        <option value="8GB-128GB">8 GB RAM, 128 GB Storage</option>
                                                        <option value="8GB-256GB">8 GB RAM, 256 GB Storage</option>
                                                        <option value="8GB-512GB">8 GB RAM, 512 GB Storage</option>
                                                        <option value="2GB-256GB">12 GB RAM, 256 GB Storage</option>
                                                        <option value="2GB-512GB">12 GB RAM, 512 GB Storage</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');

                                                        // Create a new <select> element
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.id = 'size';
                                                        newSelect.className = 'border mt-1 rounded px-4 bg-gray-50';

                                                        // Array of options
                                                        var options = [
                                                            { value: '4GB-64GB', text: '4GB RAM, 64GB Storage' },
                                                            { value: '4GB-128GB', text: '4GB RAM, 128GB Storage' },
                                                            { value: '6GB-128GB', text: '6GB RAM, 128GB Storage' },
                                                            { value: '6GB-256GB', text: '6GB RAM, 256GB Storage' },
                                                            { value: '8GB-128GB', text: '8GB RAM, 128GB Storage' },
                                                            { value: '8GB-256GB', text: '8GB RAM, 256GB Storage' },
                                                            { value: '8GB-512GB', text: '8GB RAM, 512GB Storage' },
                                                            { value: '12GB-256GB', text: '12GB RAM, 256GB Storage' },
                                                            { value: '12GB-512GB', text: '12GB RAM, 512GB Storage' }
                                                        ];

                                                        // Append options to the <select> element
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });

                                                        // Append the new <select> element to the container
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Shoes'){
                                        ?>
                                        <div class="md:col-span-5 mt-5">
                                                <label for="size">Size:</label>
                                                <div class="flex items-center flex-wrap gap-2" id="size_container">
                                                    <select name="size[]" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                        <option value="6 UK">6 UK</option>
                                                        <option value="7 UK">7 UK</option>
                                                        <option value="8 UK">8 UK</option>
                                                        <option value="9 UK">9 UK</option>
                                                        <option value="10 UK">10 UK</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="px-4 py-2 bg-indigo-600 text-white rounded mt-2" id="add-size">Add More Size</button>
                                                <script>
                                                    document.getElementById('add-size').addEventListener('click', function() {
                                                        var sizeContainer = document.getElementById('size_container');

                                                        // Create a new <select> element
                                                        var newSelect = document.createElement('select');
                                                        newSelect.name = 'size[]';
                                                        newSelect.id = 'size';
                                                        newSelect.className = 'border mt-1 rounded px-4 bg-gray-50';

                                                        // Array of options
                                                        var options = [
                                                            { value: '6 UK', text: '6 UK' },
                                                            { value: '7 UK', text: '7 UK' },
                                                            { value: '8 UK', text: '8 UK' },
                                                            { value: '9 UK', text: '9 UK' },
                                                            { value: '10 UK', text: '10 UK' }
                                                        ];

                                                        // Append options to the <select> element
                                                        options.forEach(function(option) {
                                                            var opt = document.createElement('option');
                                                            opt.value = option.value;
                                                            opt.textContent = option.text;
                                                            newSelect.appendChild(opt);
                                                        });

                                                        // Append the new <select> element to the container
                                                        sizeContainer.appendChild(newSelect);
                                                    });
                                                </script>
                                            </div>
                                        <?php
                                    }
                                ?>

                                <div class="md:col-span-5 mt-4">
                                    <label for="" class="text-lg">Images:</label>
                                    <div class="grid grid-cols-1 min-[321px]:grid-cols-2 md:grid-cols-4 gap-y-12 gap-5 mt-9">
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage1" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage2" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage3" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage4" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
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

                                <div class="md:col-span-5 mt-4">
                                    <label for="" class="text-lg">Cover Images:</label>
                                    <div class="grid grid-cols-1 min-[321px]:grid-cols-2 md:grid-cols-4 gap-y-12 gap-5 mt-9">
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage1" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="CoverImage1" type="file" id="CoverimageInput1">
                                                <label for="CoverimageInput1" id="CoverimageLabel1" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload Cover image 1
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage2" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="CoverImage2" type="file" id="CoverimageInput2">
                                                <label for="CoverimageInput2" id="CoverimageLabel2" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload Cover image 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage3" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="CoverImage3" type="file" id="CoverimageInput3">
                                                <label for="CoverimageInput3" id="CoverimageLabel3" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload Cover image 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewCoverImage4" class="w-60 h-40 border border-dashed object-cover border-gray-500" alt="" src="">
                                                <input class="hidden" name="CoverImage4" type="file" id="CoverimageInput4">
                                                <label for="CoverimageInput4" id="CoverimageLabel4" class="absolute top-[2.7rem] flex flex-col items-center justify-center p-1 font-semibold cursor-pointer">
                                                    <svg class="w-9 bg-gray-200 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <g>
                                                            <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                            <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Upload Cover image 4
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:col-span-5 text-right mt-7">
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

    <script src="product.js"></script>
</body>
</html>

<?php

    include "../include/connect.php";

    if(isset($_POST['submitBtn'])){

        if(isset($_COOKIE['vendor_id'])){
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
    
        $color = $_POST['color'];

        if(isset($_POST['size'])){
            $size = $_POST['size'];
        }else{
            $size = $_POST['size'];
            $size = '';
        }
        $keyword = $_POST['keyword'];


        $kwrd = [];
        foreach($keyword as $kwrd){
            $kwrd = $_POST['keyword'];
        }
        $keywords_value = implode(', ', $kwrd);

        $clr = [];
        foreach($color as $clr){
            $clr = $_POST['color'];
        }
        $color_value = implode(', ', $clr);

        if(isset($_POST['size'])){
            $sz = [];
            foreach($size as $sz){
                $sz = $_POST['size'];
            }
            $size_value = implode(', ', $sz);
        }else{
            $size_value = '-';
        }


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
        

        $CoverImage1 = isset($_FILES['CoverImage1']) && $_FILES['CoverImage1']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage1']['name'] : '';
        $tempName5 = isset($_FILES['CoverImage1']) && $_FILES['CoverImage1']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage1']['tmp_name'] : '';
        $folder5 = '../src/product_image/product_cover/' . $CoverImage1;

        $CoverImage2 = isset($_FILES['CoverImage2']) && $_FILES['CoverImage2']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage2']['name'] : '';
        $tempName6 = isset($_FILES['CoverImage2']) && $_FILES['CoverImage2']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage2']['tmp_name'] : '';
        $folder6 = '../src/product_image/product_cover/' . $CoverImage2;

        $CoverImage3 = isset($_FILES['CoverImage3']) && $_FILES['CoverImage3']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage3']['name'] : '';
        $tempName7 = isset($_FILES['CoverImage3']) && $_FILES['CoverImage3']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage3']['tmp_name'] : '';
        $folder7 = '../src/product_image/product_cover/' . $CoverImage3;

        $CoverImage4 = isset($_FILES['CoverImage4']) && $_FILES['CoverImage4']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage4']['name'] : '';
        $tempName8 = isset($_FILES['CoverImage4']) && $_FILES['CoverImage4']['error'] === UPLOAD_ERR_OK ? $_FILES['CoverImage4']['tmp_name'] : '';
        $folder8 = '../src/product_image/product_cover/' . $CoverImage4;

        $allFilesUploaded = true;

        // Process main images
        if (!empty($tempName1) && !move_uploaded_file($tempName1, $folder1)) $allFilesUploaded = false;
        if (!empty($tempName2) && !move_uploaded_file($tempName2, $folder2)) $allFilesUploaded = false;
        if (!empty($tempName3) && !move_uploaded_file($tempName3, $folder3)) $allFilesUploaded = false;
        if (!empty($tempName4) && !move_uploaded_file($tempName4, $folder4)) $allFilesUploaded = false;

        // Process cover images
        if (!empty($tempName5) && !move_uploaded_file($tempName5, $folder5)) $allFilesUploaded = false;
        if (!empty($tempName6) && !move_uploaded_file($tempName6, $folder6)) $allFilesUploaded = false;
        if (!empty($tempName7) && !move_uploaded_file($tempName7, $folder7)) $allFilesUploaded = false;
        if (!empty($tempName8) && !move_uploaded_file($tempName8, $folder8)) $allFilesUploaded = false;

        // Prepare file names for database insertion
        $ProfileImage1 = $_FILES['ProfileImage1']['error'] === UPLOAD_ERR_OK ? $ProfileImage1 : '';
        $ProfileImage2 = $_FILES['ProfileImage2']['error'] === UPLOAD_ERR_OK ? $ProfileImage2 : '';
        $ProfileImage3 = $_FILES['ProfileImage3']['error'] === UPLOAD_ERR_OK ? $ProfileImage3 : '';
        $ProfileImage4 = $_FILES['ProfileImage4']['error'] === UPLOAD_ERR_OK ? $ProfileImage4 : '';

        $CoverImage1 = $_FILES['CoverImage1']['error'] === UPLOAD_ERR_OK ? $CoverImage1 : '';
        $CoverImage2 = $_FILES['CoverImage2']['error'] === UPLOAD_ERR_OK ? $CoverImage2 : '';
        $CoverImage3 = $_FILES['CoverImage3']['error'] === UPLOAD_ERR_OK ? $CoverImage3 : '';
        $CoverImage4 = $_FILES['CoverImage4']['error'] === UPLOAD_ERR_OK ? $CoverImage4 : '';

        if ($allFilesUploaded) {
            $product_insert = "INSERT INTO products(vendor_id, title, image_1, image_2, image_3, image_4, cover_image_1, cover_image_2, cover_image_3, cover_image_4, company_name, Category, Type, Your_Price, MRP, Quantity, Item_Condition, Description, color, size, keywords, date) VALUES ('$vendor_id','$full_name','$ProfileImage1','$ProfileImage2','$ProfileImage3','$ProfileImage4','$CoverImage1','$CoverImage2','$CoverImage3','$CoverImage4','$Company_name','$Category','$type','$your_price','$MRP','$quantity','$condition','$description','$color_value','$size_value','$keywords_value','$Product_insert_Date')";
            $product_query = mysqli_query($con,$product_insert);
            if($product_query){
                echo '<script>displaySuccessMessage("Data Inserted.");</script>';
            }else{
                echo '<script>displayErrorMessage("Data not Inserted Properly.");</script>';
            }
        } else {
            echo '<script>displayErrorMessage("Some files could not be uploaded.");</script>';
        }
    }
?>
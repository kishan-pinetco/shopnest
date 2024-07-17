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
    <link rel="shortcut icon" href="../src/logo/favIcon.png">

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
                        <form action="" method="post">
                            <div class="grid gap-4 gap-y-4 items-center text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="full_name">Product name</label>
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
                                        <input type="text" name="your_price" id="your_price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="MRP">MRP</label>
                                    <div class="relative">
                                        <input type="text" name="MRP" id="MRP" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
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
                                    <textarea name="description" id="description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""></textarea>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <div class="flex items-center gap-1" id="input-container">
                                        <label for="color">Color</label>
                                        <input type="color" name="color[]" id="color" class="" value="" placeholder="" />
                                    </div>
                                    <button type="button" class="border bg-indigo-500 text-white rounded-md px-3 py-2 mt-5" id="add-input"><i class="fa-solid fa-plus border-2 border-dotted rounded-full p-1 mr-2"></i>Add More Colors</button>
                                </div>



                                <?php
                                    $phone = "Phones";
                                    if($_GET['name'] === $phone){
                                        ?>
                                            <div class="md:col-span-2 mt-5">
                                                <label for="size">Size</label>
                                                <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
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
                                        <?php
                                    }else if($_GET['name'] === 'Clothes'){
                                        ?>
                                            <div class="md:col-span-2 mt-5">
                                                <label for="size">Size</label>
                                                <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                    <option value="XS">XS</option>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </select>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Laptops/MacBook'){
                                        ?>
                                            <div class="md:col-span-2 mt-5">
                                                <label for="size">Size</label>
                                                <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                    <option value="4GB RAM, 128GB SSD">4 GB RAM, 128 GB SSD</option>
                                                    <option value="8GB RAM, 256GB SSD">8 GB RAM, 256 GB SSD</option>
                                                    <option value="8GB RAM, 512GB SSD">8 GB RAM, 512 GB SSD</option>
                                                    <option value="16GB RAM, 512GB SSD">16 GB RAM, 512 GB SSD</option>
                                                    <option value="16GB RAM, 1TB SSD">16 GB RAM, 1 TB SSD</option>
                                                    <option value="32GB RAM, 1TB SSD">32 GB RAM, 1 TB SSD</option>
                                                    <option value="32GB RAM, 2TB SSD">32 GB RAM, 2 TB SSD</option>
                                                    <option value="64GB RAM, 2TB SSD">64 GB RAM, 2 TB SSD</option>
                                                </select>
                                            </div>
                                        <?php
                                    }else if($_GET['name'] === 'Tabs/Ipad'){
                                        ?>
                                            <div class="md:col-span-2 mt-5">
                                                <label for="size">Size</label>
                                                <select name="size" id="size" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                                    <option value="4GB RAM, 64GB Storage">4 GB RAM, 64 GB Storage</option>
                                                    <option value="4GB RAM, 128GB Storage">4 GB RAM, 128 GB Storage</option>
                                                    <option value="6GB RAM, 128GB Storage">6 GB RAM, 128 GB Storage</option>
                                                    <option value="6GB RAM, 256GB Storage">6 GB RAM, 256 GB Storage</option>
                                                    <option value="8GB RAM, 128GB Storage">8 GB RAM, 128 GB Storage</option>
                                                    <option value="8GB RAM, 256GB Storage">8 GB RAM, 256 GB Storage</option>
                                                    <option value="8GB RAM, 512GB Storage">8 GB RAM, 512 GB Storage</option>
                                                    <option value="12GB RAM, 256GB Storage">12 GB RAM, 256 GB Storage</option>
                                                    <option value="12GB RAM, 512GB Storage">12 GB RAM, 512 GB Storage</option>
                                                </select>
                                            </div>
                                        <?php
                                    }
                                ?>

                                <div class="md:col-span-5 text-right mt-7">
                                    <div class="inline-flex items-end">
                                        <input type="submit" value="Submit" name="submitBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded cursor-pointer">
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
        document.getElementById('add-input').addEventListener('click', function() {
            var inputContainer = document.getElementById('input-container');
            var newInput = document.createElement('input');
            newInput.type = 'color';
            newInput.name = 'color[]';
            newInput.placeholder = 'Enter something';
            newInput.id = "color";
            inputContainer.appendChild(newInput);
        });

    </script>

</body>

</html>

<?php
    if(isset($_POST['submitBtn'])){
        foreach ($_POST['color'] as $color) {
            echo $color;
        }
    }
?>
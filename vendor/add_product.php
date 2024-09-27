<?php
if (isset($_GET['name'])) {
    $product = $_GET['name'];
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
                                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="Company_name">Company Name</label>
                                    <input type="text" name="Company_name" id="Company_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="category">Category</label>
                                    <input type="text" name="Category" id="Category" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="<?php echo isset($_GET['name']) ? $product : 'Category' ?>" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="MRP">MRP</label>
                                    <div class="relative">
                                        <input type="text" name="MRP" id="MRP" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10 focus:ring-gray-600 focus:border-gray-600" value="" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="your_price">Your Price</label>
                                    <div class="relative">
                                        <input type="text" name="your_price" id="your_price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 pl-10 focus:ring-gray-600 focus:border-gray-600" value="" placeholder="" />
                                        <div class="absolute left-0 rounded-l top-1 w-9 h-10 bg-white border border-gray-500 m-auto text-center flex items-center justify-center">₹</div>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="condition">Item Condition</label>
                                    <select name="condition" id="condition" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" value="">
                                        <option value="New Condition">New Condition</option>
                                        <option value="Old Condition">Old Condition</option>
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="h-32 border mt-1 rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600 resize-none" value="" placeholder=""></textarea>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="keyword">Keywords</label>
                                    <div id="keyword-container" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">
                                        <div class="flex items-center relative">
                                            <input type="text" name="keyword[]" placeholder="Enter keyword" class="relative h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600">
                                        </div>
                                    </div>
                                    <button id="add-keyword" class="px-4 py-2 bg-gray-600 text-white rounded-tl-lg rounded-br-lg mt-2">Add More Keyword</button>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="size">Size</label>
                                    <div id="size-container" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mt-2 gap-3">

                                    </div>
                                    <button id="add-size" class="px-4 py-2 bg-gray-600 text-white rounded-tl-lg rounded-br-lg mt-2">Add More Size</button>
                                </div>

                                <div class="md:col-span-5 mt-5">
                                    <label for="color">Color:</label>
                                    <div class="relative mt-2">
                                        <input type="text" id="colorInput" name="color" placeholder="Type a color..." class="h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600" autocomplete="off">
                                        <div id="colorSuggestions" class="absolute left-0 mt-1 w-full bg-white border border-gray-300 rounded-lg z-10 hidden"></div>
                                    </div>
                                </div>

                                <div class="md:col-span-5 mt-4">
                                    <label for="" class="text-lg">Images:</label>
                                    <div class="grid grid-cols-1 min-[700px]:grid-cols-3 md:grid-cols-4 gap-y-12 gap-5 mt-9">
                                        <div class="">
                                            <div class="relative flex items-stretch justify-center -mt-8">
                                                <img id="previewImage1" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage2" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage3" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewImage4" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewCoverImage1" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewCoverImage2" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewCoverImage3" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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
                                                <img id="previewCoverImage4" class="w-80 h-48 border border-dashed object-cover border-gray-500" alt="" src="">
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

    <script src="product.js"></script>

    <script>
        const suggestionsData = [
            'XS (Extra Small)', 'S (Small)', 'M (Medium)', 'L (Large)', 'XL (Extra Large)', 'XXL (Double Extra Large)', 'XXXL (Triple Extra Large)',
            '4 UK', '5 UK', '6 UK', '7 UK', '8 UK', '9 UK', '10 UK', '11 UK', '12 UK',
            '32 inches', '40 inches', '43 inches', '50 inches', '55 inches', '65 inches', '75 inches', '85 inches',
            '100L', '200L', '300L', '400L', '500L', '600L',
            '6 kg', '7 kg', '8 kg', '9 kg', '10 kg', '12 kg',
            '16GB', '32GB', '64GB', '128GB', '256GB', '512GB', '1TB', '2TB',
            '2GB - 32GB', '4GB - 64GB', '6GB - 128GB', '8GB - 256GB', '12GB - 512GB', '16GB - 1TB',
            '4GB - 128GB', '8GB - 256GB', '8GB - 1TB', '16GB - 512GB', '16GB - 2TB', '32GB - 1TB', '32GB - 2TB', '64GB - 1TB', '64GB - 2TB',
            '3GB - 64GB', '4GB - 256GB', '6GB - 512GB', '8GB - 1TB'
        ];

        document.addEventListener('DOMContentLoaded', () => {
            const sizeContainer = document.getElementById('size-container');

            // Create the first size input without remove button, MRP, and Your Price
            const initialSizeItem = createSizeItem(true);
            sizeContainer.appendChild(initialSizeItem);
        });

        document.getElementById('add-size').addEventListener('click', function(event) {
            event.preventDefault();

            const sizeContainer = document.getElementById('size-container');
            const sizeInputs = sizeContainer.querySelectorAll('input[name="size[]"]');
            const mrpInputs = sizeContainer.querySelectorAll('input[name="mrp[]"]');
            const priceInputs = sizeContainer.querySelectorAll('input[name="your_price[]"]');

            // Check if all size, MRP, and Price input fields are filled
            for (const input of sizeInputs) {
                if (!input.value || isInvalidSize(input.value)) {
                    alert("Please enter valid size values (not empty, '-' or 'none').");
                    return; // Exit if any input is empty or invalid
                }
            }

            for (const input of mrpInputs) {
                if (!input.value) {
                    alert("Please fill in all MRP fields before adding more sizes.");
                    return; // Exit if any MRP input is empty
                }
            }

            for (const input of priceInputs) {
                if (!input.value) {
                    alert("Please fill in all Your Price fields before adding more sizes.");
                    return; // Exit if any Price input is empty
                }
            }

            // Create a new size item if all inputs are filled and valid
            const sizeItem = createSizeItem(false);
            sizeContainer.appendChild(sizeItem);
        });

        function isInvalidSize(size) {
            const invalidValues = ['-', 'none', 'NONE', 'None']; // Add any other variations as needed
            return invalidValues.includes(size);
        }

        function createSizeItem(isFirst) {
            const sizeItem = document.createElement('div');
            sizeItem.className = 'size-item mb-4 relative';

            const sizeInput = document.createElement('input');
            sizeInput.type = 'text';
            sizeInput.name = 'size[]';
            sizeInput.value = '';
            sizeInput.placeholder = 'Enter size';
            sizeInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600';

            const suggestionsContainer = document.createElement('div');
            suggestionsContainer.className = 'absolute bg-white border border-gray-300 mt-1 z-10 w-full rounded-lg hidden';

            // Handle input event for suggestions
            sizeInput.addEventListener('input', () => {
                const query = sizeInput.value.toLowerCase();
                suggestionsContainer.innerHTML = ''; // Clear existing suggestions
                if (query) {
                    const filteredSuggestions = suggestionsData.filter(item => item.toLowerCase().includes(query));
                    if (filteredSuggestions.length) {
                        filteredSuggestions.forEach(suggestion => {
                            const suggestionItem = document.createElement('div');
                            suggestionItem.className = 'p-2 cursor-pointer hover:bg-gray-100';
                            suggestionItem.textContent = suggestion;
                            suggestionItem.addEventListener('click', () => {
                                sizeInput.value = suggestion;
                                suggestionsContainer.innerHTML = '';
                                suggestionsContainer.classList.add('hidden');
                            });
                            suggestionsContainer.appendChild(suggestionItem);
                        });
                        suggestionsContainer.classList.remove('hidden');
                    } else {
                        suggestionsContainer.classList.add('hidden');
                    }
                } else {
                    suggestionsContainer.classList.add('hidden');
                }
            });

            // Close suggestions if clicking outside
            document.addEventListener('click', (event) => {
                if (!sizeItem.contains(event.target) && !sizeInput.contains(event.target)) {
                    suggestionsContainer.classList.add('hidden');
                }
            });

            // Append the inputs to the size item
            sizeItem.appendChild(sizeInput);
            sizeItem.appendChild(suggestionsContainer);

            // Only add MRP, Your Price, and Remove button if not the first input
            if (!isFirst) {
                // Create the input element for MRP
                const mrpInput = document.createElement('input');
                mrpInput.type = 'text';
                mrpInput.name = 'MRP2[]';
                mrpInput.placeholder = 'Enter MRP';
                mrpInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600';

                // Create the input element for Your Price
                const priceInput = document.createElement('input');
                priceInput.type = 'text';
                priceInput.name = 'your_price2[]';
                priceInput.placeholder = 'Enter Your Price';
                priceInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600';

                // Create the remove button
                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'p-2 text-red-500 bg-red-100 rounded focus:outline-none mt-2 focus:ring-gray-600 focus:border-gray-600';
                removeButton.innerHTML = 'Remove';

                // Unique remove button functionality
                removeButton.addEventListener('click', function() {
                    sizeItem.remove();
                });

                // Append MRP and Price inputs and remove button to the size item
                sizeItem.appendChild(mrpInput);
                sizeItem.appendChild(priceInput);
                sizeItem.appendChild(removeButton);
            }

            return sizeItem;
        }

        // color suggetions
        const colors = [
            "Amber", "Almond", "Aqua", "Apricot", "Ash", "Beige", "Black", "Blush", "Bone", "Bordeaux",
            "Brown", "Burgundy", "Burnt Orange", "Cabernet", "Canary", "Champagne", "Charcoal", "Chocolate",
            "Cocoa", "Coffee", "Copper", "Cordovan", "Coral", "Cream", "Crimson", "Cobalt", "Cyan",
            "Deep Teal", "Ebony", "Eggplant", "Eggshell", "Emerald", "Fuchsia", "Forest Green", "Gold",
            "Gold Leaf", "Goldenrod", "Graphite", "Gray", "Green", "Hot Pink", "Ivory", "Khaki",
            "Lavender", "Lemon", "Lilac", "Lime", "Maroon", "Magenta", "Mint", "Midnight", "Mustard",
            "Navy", "Olive", "Onyx", "Orange", "Orchid", "Peach", "Pearl", "Periwinkle", "Plum",
            "Powder Blue", "Purple", "Raspberry", "Red", "Rose", "Rust", "Salmon", "Sand", "Scarlet",
            "Seafoam", "Sea Green", "Silver", "Sky Blue", "Slate", "Steel", "Tan", "Tangerine", "Teal",
            "Thistle", "Turquoise", "Violet", "White", "Wine", "Wintergreen", "Wisteria", "Yellow"
        ];


        const colorInput = document.getElementById('colorInput');
        const colorSuggestions = document.getElementById('colorSuggestions');

        colorInput.addEventListener('input', () => {
            const query = colorInput.value.toLowerCase();
            colorSuggestions.innerHTML = ''; // Clear existing suggestions
            if (query) {
                const filteredColors = colors.filter(color => color.toLowerCase().includes(query));
                if (filteredColors.length) {
                    filteredColors.forEach(color => {
                        const colorItem = document.createElement('div');
                        colorItem.className = 'p-2 cursor-pointer hover:bg-gray-100 ';
                        colorItem.textContent = color;
                        colorItem.addEventListener('click', () => {
                            colorInput.value = color;
                            colorSuggestions.innerHTML = '';
                            colorSuggestions.classList.add('hidden');
                        });
                        colorSuggestions.appendChild(colorItem);
                    });
                    colorSuggestions.classList.remove('hidden');
                } else {
                    colorSuggestions.classList.add('hidden');
                }
            } else {
                colorSuggestions.classList.add('hidden');
            }
        });

        document.addEventListener('click', (event) => {
            if (!colorSuggestions.contains(event.target) && event.target !== colorInput) {
                colorSuggestions.classList.add('hidden');
            }
        });
    </script>

    <!-- chatboat script -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47227404.js"></script>

</body>

</html>

<?php

include "../include/connect.php";

if (isset($_POST['submitBtn'])) {

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
                    $MRP2 = $_POST['MRP2'];
                    $your_price2 = $_POST['your_price2'];

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

    $keyword = $_POST['keyword'];

    $kwrd = [];
    foreach ($keyword as $kwrd) {
        $kwrd = $_POST['keyword'];
    }
    $keywords_value = implode(', ', $kwrd);


    // main images 
    $ProfileImage1 = isset($_FILES['ProfileImage1']) && $_FILES['ProfileImage1']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage1']['name'] : '';
    $tempName1 = isset($_FILES['ProfileImage1']) && $_FILES['ProfileImage1']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage1']['tmp_name'] : '';
    $folder1 = '../src/product_image/product_profile/' . $ProfileImage1;

    $ProfileImage2 = isset($_FILES['ProfileImage2']) && $_FILES['ProfileImage2']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage2']['name'] : '';
    $tempName2 = isset($_FILES['ProfileImage2']) && $_FILES['ProfileImage2']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage2']['tmp_name'] : '';
    $folder2 = '../src/product_image/product_profile/' . $ProfileImage2;

    $ProfileImage3 = isset($_FILES['ProfileImage3']) && $_FILES['ProfileImage3']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage3']['name'] : '';
    $tempName3 = isset($_FILES['ProfileImage3']) && $_FILES['ProfileImage3']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage3']['tmp_name'] : '';
    $folder3 = '../src/product_image/product_profile/' . $ProfileImage3;

    $ProfileImage4 = isset($_FILES['ProfileImage4']) && $_FILES['ProfileImage4']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage4']['name'] : '';
    $tempName4 = isset($_FILES['ProfileImage4']) && $_FILES['ProfileImage4']['error'] === UPLOAD_ERR_OK ? $_FILES['ProfileImage4']['tmp_name'] : '';
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

    $color = $_POST['color'];
    $normalized_color = array_map('strtolower', (array)$color); // Ensure $color is treated as an array

    // Validation for colors
    if (
        is_array($normalized_color) && !empty($normalized_color) &&
        !in_array('', $normalized_color) && !in_array('none', $normalized_color)
    ) {

        // Build the color image array
        $color_img = [];
        $color_img[$color] = [
            'img1' => $ProfileImage1,
            'img2' => $ProfileImage2,
            'img3' => $ProfileImage3,
            'img4' => $ProfileImage4
        ];

        // Encode the color image array to JSON
        $color_img_json = json_encode($color_img);

        $product_titles = [
            $color => [
                'product_name' => $full_name
            ],
        ];

        $product_titles_json = json_encode($product_titles);
    } else {
        $color_img['N-A'] = [
            'img1' => $ProfileImage1,
            'img2' => $ProfileImage2,
            'img3' => $ProfileImage3,
            'img4' => $ProfileImage4
        ];

        // Encode the color image array to JSON
        $color_img_json = json_encode($color_img);


        $product_titles = [
            'N-A' => [
                'product_name' => $full_name
            ],
        ];

        $product_titles_json = json_encode($product_titles);
    }

    $avg_rating = '0.0';
    $total_reviews = '0';

    if (
        empty($full_name) || empty($Company_name) || empty($Category) || empty($type) ||
        empty($your_price) || empty($MRP) || empty($quantity) || empty($condition) || empty($keywords_value) || empty($ProfileImage1) || empty($ProfileImage2)
    ) {
        echo '<script>displayErrorMessage("Please fill in all required fields.");</script>';
    } else {
        if ($allFilesUploaded) {
            $product_insert = "INSERT INTO items (vendor_id, title, image, cover_image_1, cover_image_2, cover_image_3, cover_image_4, company_name, Category, Type, MRP, vendor_mrp, vendor_price, Quantity, Item_Condition, Description, color, size, keywords, avg_rating, total_reviews, date) VALUES ('$vendor_id', '$product_titles_json', '$color_img_json', '$CoverImage1', '$CoverImage2', '$CoverImage3', '$CoverImage4', '$Company_name', '$Category', '$type', '$json_size_encode', '$MRP', '$your_price', '$quantity', '$condition', '$description', '$color', '$size_filter', '$keywords_value', '$avg_rating', '$total_reviews', '$Product_insert_Date')";
            $product_query = mysqli_query($con, $product_insert);

            if ($product_query) {
                echo '<script>displaySuccessMessage("Data Inserted.");</script>';
            } else {
                echo '<script>displayErrorMessage("Data not Inserted Properly.");</script>';
            }
        } else {
            echo '<script>displayErrorMessage("Some files could not be uploaded.");</script>';
        }
    }
}
?>
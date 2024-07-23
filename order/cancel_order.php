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
    <title>Cancel Order</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">
    
<div class="max-w-screen-lg m-auto px-4 py-12">
        <div class="grid grid-col-1 gap-y-4">
            <h2 class="font-bold text-2xl text-black">Cancel Order</h2>
            <div class="flex flex-col items-center gap-5 md:flex-row">
                <div>
                    <img class="w-full h-32 object-contain" src="https://m.media-amazon.com/images/I/5197bOnxfWL._SL1500_.jpg" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-7 line-clamp-2">ZEBRONICS Zeb-Sound Bomb 1 TWS Earbuds with BT5.0, Up to 12H Playback, Touch Controls, Voice Assistant, Splash Proof with Type C Portable Charging Case (Black)</h2>
                    <div>
                        <div class="flex items-center">
                            <p class="font-medium text-base leading-7 text-black pr-4 mr-4 border-r border-gray-200"> Qty: <span class="text-gray-500">1</span></p> 
                            <p class="font-medium text-base leading-7 text-black">Price: <span class="text-indigo-500">₹799</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <form action="" method="post">
            <div>
                <div class="headline">
                    <p class="cursor-default font-semibold text-2xl">Billing Email</p>
                    <input class="w-full h-12 border-2 border-[#cccccc] rounded-md focus:border-black focus:ring-0 mt-2" type="email" id="billingEmail" name="billingEmail" placeholder="Enter Your Billing Address" required>
                </div>
                <hr class="my-6">
                <div class="review">
                    <p class="cursor-default font-semibold text-2xl">Why are you cancelling the order?</p>
                    <div class="flex flex-col gap-2 px-3 mt-3">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_1" value="Found a better option elsewhere">
                            <label for="Cancle_1">
                                <p>Found a better option elsewhere</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_2" value="Budget constraints">
                            <label for="Cancle_2">
                                <p>Budget constraints</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_3" value="Changed mind about the purchase">
                            <label for="Cancle_3">
                                <p>Changed mind about the purchase</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_4" value="Delivery taking too long">
                            <label for="Cancle_4">
                                <p>Delivery taking too long</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_5" value="Concerns about product quality">
                            <label for="Cancle_5">
                                <p>Concerns about product quality</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_6" value="Difficulty with payment processing">
                            <label for="Cancle_6">
                                <p>Difficulty with payment processing</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_7" value="Unexpected shipping costs">
                            <label for="Cancle_7">
                                <p>Unexpected shipping costs</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_8" value="Found a more suitable product">
                            <label for="Cancle_8">
                                <p>Found a more suitable product</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_9" value="Accidentally ordered the wrong item">
                            <label for="Cancle_9">
                                <p>Accidentally ordered the wrong item</p>
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" name="OrderCancle" id="Cancle_10" value="Unforeseen personal circumstances">
                            <label for="Cancle_10">
                                <p>Unforeseen personal circumstances</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="submit mt-6">
                    <input name="CancelProduct" class="rounded-md text-center bg-indigo-600 py-3 px-6 text-white hover:bg-indigo-700 cursor-pointer transition duration-300 group-invalid:pointer-events-none group-invalid:opacity-30" type="submit" value="Cancel Order">
                </div>
            </div>
        </form>
    </div>

</body>
</html>
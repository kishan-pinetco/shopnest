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
    <title>Add Your Reviews</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">
    

<div class="w-[100%] mx-auto px-4 py-12 md:m-auto md:w-[70%]">
        <div class="grid grid-col-1 gap-y-4">
            <h2 class="font-bold text-2xl text-black">Create Review</h2>
            <div class="flex flex-col item-center justify-start gap-2 md:flex-row">
                <img class="w-20 h-auto" src="https://m.media-amazon.com/images/I/81Os1SDWpcL._SL1500_.jpg" alt="">
                <span class="text-xl font-medium line-clamp-1 my-auto h-7 cursor-default" title="Apple iPhone 15 Pro Max (256 GB) - Black Titanium">Apple iPhone 15 Pro Max (256 GB) - Black Titanium</span>
            </div>
        </div>
        <hr class="my-5">
        <form action="" method="post">
            <div>
                <h2 class="font-bold text-2xl mb-5">Rating</h2>
                <input type="radio" class="hidden" id="Star_1" name="stars[]" value="1"> 
                <input type="radio" class="hidden" id="Star_2" name="stars[]" value="2"> 
                <input type="radio" class="hidden" id="Star_3" name="stars[]" value="3"> 
                <input type="radio" class="hidden" id="Star_4" name="stars[]" value="4"> 
                <input type="radio" class="hidden" id="Star_5" name="stars[]" value="5"> 
            
            
                <label for="Star_1"><i id="star_1" class="far fa-star text-2xl text-yellow-400" onclick="changeIconClass('1')"></i></label>
                <label for="Star_2"><i id="star_2" class="far fa-star text-2xl text-yellow-400" onclick="changeIconClass('2')"></i></label>
                <label for="Star_3"><i id="star_3" class="far fa-star text-2xl text-yellow-400" onclick="changeIconClass('3')"></i></label>
                <label for="Star_4"><i id="star_4" class="far fa-star text-2xl text-yellow-400" onclick="changeIconClass('4')"></i></label>
                <label for="Star_5"><i id="star_5" class="far fa-star text-2xl text-yellow-400" onclick="changeIconClass('5')"></i></label>
            </div>
            <hr class="my-5">
            <div>
                <div class="headline">
                    <p class="cursor-default font-semibold text-2xl">Add a headline</p>
                    <input class="w-full h-12 border-2 border-[#cccccc] rounded-md focus:border-black focus:ring-0 mt-2" type="text" id="headline" name="headline" placeholder="What's most important to know?" required>
                </div>
                <hr class="my-6">
                <div class="review">
                    <p class="cursor-default font-semibold text-2xl">Add a written review</p>
                    <input class="w-full h-12 border-2 border-[#cccccc] rounded-md focus:border-black focus:ring-0 mt-2" type="text" id="review" name="review" placeholder="What did you like or dislike? What did you use this product for?" required>
                </div>
                <hr class="my-6">
                <div class="public_Name">
                    <p class="cursor-default font-semibold text-2xl">Choose your public name</p>
                    <div class="flex item-center justify-center m-auto gap-2">
                        <img class="w-12 h-12 mt-2" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                        <input class="w-full h-12 border-2 border-[#cccccc] rounded-md focus:border-black focus:ring-0 mt-2" type="text" id="public_Name" name="public_Name" value="Abhijeet Dabhi" required>
                    </div>
                </div>
                <div class="submit mt-6">
                    <input name="submitReview" class="rounded-md text-center bg-indigo-600 py-3 px-6 text-white hover:bg-indigo-700 cursor-pointer transition duration-300 group-invalid:pointer-events-none group-invalid:opacity-30" type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>

    <!-- footer -->
    <?php
        include "../pages/_footer.php";
    ?>

    <script>
        function changeIconClass(clickedStar) {
            for (var i = 1; i <= 5; i++) {
                var icon = document.getElementById('star_' + i);
                if (i <= clickedStar) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    icon.classList.add('selected');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.remove('selected');
                    icon.classList.add('far');
                }
            }
        }
    </script>

</body>
</html>
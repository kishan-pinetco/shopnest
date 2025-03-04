<?php
    if(isset($_COOKIE['vendor_id'])){
        header("Location: /shopnest/vendor/vendor_dashboard.php");
        exit;
    }

    if(isset($_COOKIE['adminEmail'])){
        header("Location: /shopnest/admin/dashboard.php");
        exit;
    }
?>

<?php

    include "../include/connect.php";

    if(isset($_GET['product_id'])){   
        $product_id = $_GET['product_id'];
        $review_id = $_GET['review_id'];
        
        $delete_review = "DELETE FROM user_review WHERE review_id = '$review_id'";
        $delete_query = mysqli_query($con, $delete_review);

        // update the product rating or reviews
        $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
        $review_query = mysqli_query($con, $get_reviews);

        $totalReviews = mysqli_num_rows($review_query);

        $sum = 0;
        $count = 0;
        if ($totalReviews > 0) {         
            while ($data = mysqli_fetch_assoc($review_query)) {
                $rating = str_replace(",", "", $data['Rating']);
                $sum += (float)$rating;
                $count++;
            }

            $average = $sum / $count;
            $formatted_average = number_format($average, 1);
        }else {
            $formatted_average = "0.0";
        }

        $update_review = "UPDATE products SET avg_rating='$formatted_average',total_reviews='$totalReviews' WHERE product_id = '$product_id'";
        $update_review_query = mysqli_query($con, $update_review);

        if($delete_query){
            ?>
                <!-- Tailwind Script  -->
                <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

                <!-- Successfully -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" >
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Review delete successfully.</span>
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
                        window.location.href = 'show_reviews.php';
                    }, 1500);
                </script>
            <?php
        }else{
            ?>
                <!-- Error message container -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Please try again later.</span>
                        </div>
                    </div>
                </div>

                <script>
                    let EpopUp = document.getElementById('EpopUp');

                    EpopUp.style.display = 'flex';
                    EpopUp.style.opacity = '100';

                    setTimeout(() => {
                        EpopUp.style.display = 'none';
                        EpopUp.style.opacity = '0';
                        window.location.href = 'view_products.php';
                    }, 1500);
                </script>
            <?php
        }
    }
?>
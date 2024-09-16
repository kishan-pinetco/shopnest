<?php

    include "../include/connect.php";

    if (isset($_POST["query"])) {
        $output = "";
        $mydata = mysqli_real_escape_string($con, $_POST["query"]);
        $query = "SELECT * FROM items WHERE keywords LIKE '%$mydata%'";
        $result = mysqli_query($con, $query);
        
        $output = '<ul class="list-unstyled z-50 overflow-y-scroll">';
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $keywordsArray = explode(',', $row['keywords']);
                foreach ($keywordsArray as $keyword) {
                    $keyword = trim($keyword);
                    if (!empty($keyword)) { 
                        $encodedKey = urlencode($keyword);
                        ?>
                            <li class="list-none bg-white z-50 hover:bg-gray-300 px-1 py-2 border cursor-pointer rounded-md" onclick="window.location.href='<?php echo '/shopnest/search/search_items.php?searchName=' . $encodedKey ?>'">
                                <a href="<?php echo '/shopnest/search/search_items.php?searchName=' . $encodedKey ?>">
                                    <?php echo htmlspecialchars($keyword) ?>
                                </a>
                            </li>
                        <?php
                    }
                }
            } 
        } else {
            $output .= "<li class='bg-white hover:bg-gray-300 px-1 py-2 border cursor-pointer rounded-md'>Product not Found</li>";
        }
        
        $output .= "</ul>";
        echo $output;
    }elseif(isset($_POST["query2"])) {
        $output = "";
        $mydata = mysqli_real_escape_string($con, $_POST["query2"]);
        $query2 = "SELECT * FROM items WHERE keywords LIKE '%$mydata%'";
        $result = mysqli_query($con, $query2);

        $output = '<ul class="list-unstyled z-50 overflow-y-scroll">';
        if(mysqli_num_rows($result) > 0) {  
            while ($row = mysqli_fetch_array($result)) {
                $keywordsArray = explode(',' ,$row['keywords']);
                foreach ($keywordsArray as $keyword) {
                    $keyword = trim($keyword);
                    if (!empty($keyword)) {
                        $encodedKey = urlencode($keyword);
                        ?>
                            <li class="list-none bg-white z-50 hover:bg-gray-300 px-1 py-2 border cursor-pointer rounded-md" onclick="window.location.href='<?php echo '/shopnest/search/search_items.php?searchName=' . $encodedKey ?>'">
                                <a href="<?php echo '/shopnest/search/search_items.php?searchName=' . $encodedKey ?>">
                                    <?php echo htmlspecialchars($keyword) ?>
                                </a>
                            </li>
                        <?php
                    }
                }
            }
        }else {
            $output .= "<li class='bg-white hover:bg-gray-300 px-1 py-2 border cursor-pointer rounded-md'>Product not Found</li>";
        }
        
        $output .= "</ul>";
        echo $output;
    }
    

?>
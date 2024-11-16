<?php

include "../include/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sameId = mysqli_real_escape_string($con, $_POST['sameId']); 

    $selectProducts = "SELECT * FROM products WHERE same_id = '$sameId'";
    $result = mysqli_query($con, $selectProducts);

    if (mysqli_num_rows($result) > 0) {
        echo 'taken';
    } else {
        echo 'available';
    }

    mysqli_close($con);
}
?>

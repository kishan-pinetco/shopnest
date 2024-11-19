<?php
if (isset($_COOKIE['user_id'])) {
    header("Location: /index.php");
    exit;
}

if (isset($_COOKIE['vendor_id'])) {
    header("Location: /vendor/vendor_dashboard.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("Location: /vendor/vendor_dashboard.php");
    exit;
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
    <title>Remove Vendor</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">

<?php

    include "../include/connect.php";

    $vendor_id = $_GET['id'];
    
    $get_vendor = "SELECT * FROM vendor_registration WHERE vendor_id = '$vendor_id'";
    $get_query = mysqli_query($con, $get_vendor);
    $res = mysqli_fetch_assoc($get_query);

    $vendor_email = $res['email'];

    include '../pages/mail.php';
    $mail->addAddress($vendor_email);
    $mail->isHTML(true);


    if($get_query){
        $vendor_id = $res['vendor_id'];
        $vendor_name = $res['name'];
        $removal_date = date('d-m-Y');

        $mail->Subject = "Account Removal Notification";
        $mail->Body = "<html>
        <head>
        <title>Vendor Account Removal Notification</title>
        </head>
        <body>
        <p>Dear $vendor_name,</p>
        <p>We regret to inform you that your vendor account has been removed by our admin team. Below are the details regarding this action:</p>
        <p><strong>Vendor ID:</strong> $vendor_id<br>
        <strong>Removal Date:</strong> $removal_date</p>
        <p>If you have any questions or require further assistance, please do not hesitate to contact our support team.</p>
        <p>We appreciate your understanding in this matter.</p>
        <p>Thank you for your contributions to shopNest.</p>
        <p>Best regards,<br>
        shopNest Support Team<br>
        shopnest2603@gmail.com</p>
        </body>
        </html>";
    
        $mail->send();
    }


    // remove vendor
    $remove_vendor = "DELETE FROM vendor_registration WHERE vendor_id = '$vendor_id'";
    $remove_query = mysqli_query($con, $remove_vendor);

    if ($remove_query) {
        ?>
                <!-- Successfully -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="SpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">vendor Remove Successfully.</span>
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
                        window.location.href = 'view_vendors.php';
                    }, 1500);
                </script>
            <?php
            } else {
            ?>
                <!-- Error message container -->
                <div class="validInfo fixed top-0 mt-2 w-full transition duration-300 z-50" id="EpopUp" style="display: none;">
                    <div class="flex items-center m-auto justify-center px-6 py-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Please Try Again Later.</span>
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
                        window.location.href = 'view_vendors.php';
                    }, 1500);
                </script>
        <?php
            }
?>

</body>
</html>
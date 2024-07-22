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
    <title>Payment Method</title>
</head>
<body style="font-family: 'Outfit', sans-serif;">


    <!-- navbar -->
    <?php
        include "_navbar.php";
    ?>

    <div class="max-w-screen-lg m-auto px-6 py-12">
        <div class="title mb-6">
            <h1 class="text-6xl font-bold text-center">Payment Method</h1>
        </div>
        <div>
            <p class="text-lg font-medium mb-4">At ShopNest, we offer a variety of secure and convenient payment options to ensure a smooth and hassle-free shopping experience. Choose the method that best suits your needs:</p>
            <ul class="list-decimal ml-6 mb-6">
                <li class="mb-4">
                    <strong class="">Credit/Debit Cards:</strong>
                    <ul class="list-disc ml-6">
                        <li>We accept all major credit and debit cards including Visa, MasterCard, American Express, and Discover. Your card information is securely processed through our encrypted payment gateway.</li>
                    </ul>
                </li>

                <li class="mb-4">
                    <strong>Google Pay (GPay):</strong>
                    <ul class="list-disc ml-6">
                        <li>Use your GPay account for a quick and easy checkout process. Simply log in to your GPay account to complete your purchase.</li>
                    </ul>
                </li>

                <li class="mb-4">
                    <strong>Paytm:</strong>
                    <ul class="list-disc ml-6">
                        <li>Opt for Paytm for a seamless and fast payment experience. Just log in to your Paytm account to complete the transaction.</li>
                    </ul>
                </li>

                <li class="mb-4">
                    <strong>Bank Transfer:</strong>
                    <ul class="list-disc ml-6">
                        <li>Prefer to pay directly from your bank account? Choose the bank transfer option at checkout and follow the instructions to complete your payment.</li>
                    </ul>
                </li>
            </ul>
            <p class="text-lg font-medium">Your payment security is our top priority. All transactions are protected with industry-leading encryption technology to safeguard your personal and financial information. If you have any questions or need assistance with payment, our customer service team is here to help.</p>
        </div>
    </div>

    <!-- footer -->
    <?php
        include "_footer.php";
    ?>
    
</body>
</html>
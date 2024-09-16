<?php  
  
include "../include/connect.php";

if(isset($_COOKIE['adminEmail'])){

    // top seller Vendors
    $topVendors = "
        SELECT 
            vr.vendor_id,
            vr.username,
            vr.name,
            vr.email,
            vr.dp_image,
            COUNT(DISTINCT p.product_id) AS total_products,
            COUNT(DISTINCT o.order_id) AS total_sales
        FROM vendor_registration vr
        LEFT JOIN products p ON vr.vendor_id = p.vendor_id
        LEFT JOIN orders o ON vr.vendor_id = o.vendor_id
        GROUP BY vr.vendor_id
        ORDER BY total_products DESC
        LIMIT 10
    ";
    
    $vendor_query = mysqli_query($con,$topVendors);

    // top buyer
    $topBuyer = "
    SELECT 
        ur.user_id,
        ur.first_name,
        ur.last_name,
        ur.email,
        ur.profile_image,
        COUNT(DISTINCT o.order_id) AS total_buy
    FROM user_registration ur
    LEFT JOIN orders o ON ur.user_id = o.user_id
    GROUP BY ur.user_id, ur.first_name, ur.last_name, ur.email, ur.profile_image
    ORDER BY total_buy DESC
    LIMIT 10
    ";

    $buyer_queyr = mysqli_query($con, $topBuyer);
    
    
    // top rated product
    $topRated = "
        SELECT product_id, Rating, COUNT(*) AS totalRatings
        FROM user_review
        GROUP BY product_id
        ORDER BY totalRatings DESC
        LIMIT 10";

    $topRated_query = mysqli_query($con,$topRated);

    // top buying products
    $topBuying = "
        SELECT order_title, order_image, total_price, product_id, COUNT(*) AS totalProducts
        FROM orders
        GROUP BY product_id
        ORDER BY totalProducts DESC
        LIMIT 10";
    $topBuying_query = mysqli_query($con,$topBuying); 
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
    <title>Tables</title>
</head>

<body style="font-family: 'Outfit', sans-serif;">

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                   <a href="../index.php" class="p-2 flex items-center justify-center">
                        <!-- icon logo div -->
                        <div>
                            <svg class="w-14 mb-2" id="svg" version="1.1" viewBox="0 0 235 245" xmlns="http://www.w3.org/2000/svg">
                                <path d="M206.892 29.517 C 200.010 35.658,189.576 41.188,180.534 43.486 C 177.253 44.321,174.020 45.565,173.350 46.251 C 171.971 47.664,166.551 67.884,167.340 68.673 C 168.204 69.537,179.069 65.995,179.498 64.708 C 179.720 64.044,180.387 61.601,180.981 59.280 C 181.959 55.459,182.459 54.955,186.280 53.935 C 192.663 52.233,206.793 44.596,213.175 39.399 C 220.155 33.714,221.953 30.104,219.596 26.506 C 217.004 22.551,213.866 23.295,206.892 29.517 M187.489 66.415 C 175.914 71.986,167.370 75.176,152.530 79.468 C 134.661 84.637,129.605 84.992,73.809 84.996 C 42.099 84.998,21.890 85.369,21.529 85.954 C 21.204 86.478,23.708 97.616,27.091 110.704 C 36.326 146.420,36.763 147.773,40.319 151.631 C 43.254 154.814,44.853 155.423,61.000 159.496 C 119.290 174.200,132.222 177.178,133.265 176.135 C 134.554 174.846,142.811 143.001,141.988 142.493 C 141.595 142.249,137.091 141.577,131.981 140.998 C 117.748 139.386,103.951 134.196,95.673 127.341 C 94.119 126.053,93.097 125.000,93.402 125.000 C 93.708 125.000,98.805 126.421,104.729 128.157 C 114.056 130.891,117.109 131.325,127.500 131.389 C 140.801 131.472,146.510 130.377,158.035 125.534 C 169.890 120.551,185.000 109.616,185.000 106.019 C 185.000 101.812,182.568 101.790,173.204 105.910 C 157.976 112.611,137.440 118.000,127.130 118.000 C 116.025 118.000,96.071 112.603,86.157 106.917 C 83.218 105.232,80.968 103.709,81.157 103.533 C 81.346 103.356,84.425 103.847,88.000 104.623 C 97.573 106.700,117.170 107.461,126.000 106.100 C 152.550 102.005,175.202 91.159,196.800 72.198 C 201.896 67.725,203.043 66.173,202.800 64.084 C 202.342 60.138,199.695 60.541,187.489 66.415 M153.500 139.345 L 149.500 140.537 144.185 162.000 C 141.262 173.805,138.727 183.607,138.551 183.782 C 138.375 183.958,133.117 182.801,126.866 181.212 C 39.403 158.976,38.030 158.663,35.961 160.535 C 33.692 162.589,33.370 167.232,35.381 168.901 C 36.994 170.240,36.192 170.024,90.000 183.580 C 112.825 189.331,132.287 194.283,133.250 194.585 C 139.517 196.553,130.805 197.000,86.155 197.000 C 40.105 197.000,37.215 197.105,35.655 198.829 C 33.484 201.228,33.555 204.287,35.829 206.345 C 37.479 207.838,42.519 208.000,87.428 208.000 C 147.299 208.000,144.085 208.664,147.666 195.546 C 150.099 186.630,161.000 140.651,161.000 139.303 C 161.000 137.736,158.860 137.749,153.500 139.345 M48.746 213.750 C 42.609 220.173,42.967 231.130,49.501 236.867 C 60.536 246.555,77.420 239.409,77.368 225.071 C 77.329 214.163,68.051 206.931,63.943 214.606 C 62.742 216.850,62.786 217.561,64.283 220.171 C 67.511 225.795,66.031 230.000,60.823 230.000 C 58.988 230.000,57.508 229.178,56.458 227.576 C 55.014 225.373,55.012 224.877,56.435 222.126 C 58.641 217.861,58.403 214.395,55.777 212.557 C 52.723 210.417,51.778 210.578,48.746 213.750 M106.353 212.465 C 101.454 215.897,99.367 226.942,102.480 232.961 C 104.448 236.767,108.397 239.760,113.131 241.035 C 123.049 243.706,134.000 235.291,134.000 225.000 C 134.000 218.879,128.916 211.000,124.966 211.000 C 120.764 211.000,118.603 217.569,121.532 221.441 C 123.502 224.045,123.381 226.345,121.171 228.345 C 118.340 230.907,114.173 230.473,112.806 227.474 C 111.880 225.441,111.982 224.261,113.327 221.440 C 115.492 216.900,115.435 215.435,113.000 213.000 C 110.618 210.618,109.158 210.501,106.353 212.465 " stroke="none" fill="#ffffff" fill-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- text logo -->
                        <div>
                            <svg class="w-40" viewBox="0 0 350 112.41287475877095" class="looka-1j8o68f">
                                <defs id="SvgjsDefs3842"></defs>
                                <g id="SvgjsG3843" featurekey="n48U4P-0" transform="matrix(3.877686263372148,0,0,3.877686263372148,-2.249130773395342,-22.18036276389283)" fill="#ffffff">
                                    <path d="M5.32 9.38 c1.3867 0 2.47 0.28002 3.25 0.84002 s1.2167 1.38 1.31 2.46 l-2.7 0 c-0.04 -0.49334 -0.22 -0.85 -0.54 -1.07 s-0.78666 -0.33 -1.4 -0.33 c-0.53334 0 -0.93 0.08 -1.19 0.24 s-0.39 0.4 -0.39 0.72 c0 0.24 0.08666 0.44 0.26 0.6 s0.43668 0.3 0.79002 0.42 s0.74334 0.22 1.17 0.3 c1.2933 0.25334 2.2066 0.51334 2.74 0.78 s0.92334 0.58666 1.17 0.96 s0.37 0.83334 0.37 1.38 c0 1.16 -0.42334 2.05 -1.27 2.67 s-1.9967 0.93 -3.45 0.93 c-1.52 0 -2.7034 -0.32666 -3.55 -0.98 s-1.2833 -1.54 -1.31 -2.66 l2.7 0 c0 0.53334 0.20666 0.95668 0.62 1.27 s0.93334 0.47 1.56 0.47 c0.53334 0 0.97668 -0.11666 1.33 -0.35 s0.53 -0.55668 0.53 -0.97002 c0 -0.26666 -0.11 -0.48666 -0.33 -0.66 s-0.53 -0.32668 -0.93 -0.46002 s-1.02 -0.28668 -1.86 -0.46002 c-0.66666 -0.13334 -1.26 -0.31334 -1.78 -0.54 s-0.91666 -0.52332 -1.19 -0.88998 s-0.41 -0.81666 -0.41 -1.35 c0 -0.68 0.16334 -1.2733 0.49 -1.78 s0.82666 -0.89 1.5 -1.15 s1.51 -0.39 2.51 -0.39 z M14.66 5.720000000000001 l0 5.38 l0.06 0 c0.32 -0.53334 0.75334 -0.95334 1.3 -1.26 s1.1267 -0.46 1.74 -0.46 c1.32 0 2.2766 0.33334 2.87 1 s0.89 1.72 0.89 3.16 l0 6.46 l-2.84 0 l0 -5.88 c0 -0.84 -0.13666 -1.4667 -0.41 -1.88 s-0.74334 -0.62 -1.41 -0.62 c-0.76 0 -1.3167 0.23 -1.67 0.69 s-0.53 1.2167 -0.53 2.27 l0 5.42 l-2.84 0 l0 -14.28 l2.84 0 z M28.700000000000003 9.38 c1.6533 0 2.96 0.50334 3.92 1.51 s1.44 2.3234 1.44 3.95 c0 1.64 -0.49 2.9566 -1.47 3.95 s-2.2766 1.49 -3.89 1.49 c-1.64 0 -2.94 -0.50334 -3.9 -1.51 s-1.44 -2.3166 -1.44 -3.93 c0 -1.6667 0.49 -2.9934 1.47 -3.98 s2.27 -1.48 3.87 -1.48 z M26.200000000000003 14.84 c0 1.0533 0.21334 1.8666 0.64 2.44 s1.0467 0.86 1.86 0.86 c0.84 0 1.47 -0.29334 1.89 -0.88 s0.63 -1.3933 0.63 -2.42 c0 -1.0667 -0.21666 -1.8867 -0.65 -2.46 s-1.0633 -0.86 -1.89 -0.86 c-0.8 0 -1.4133 0.28666 -1.84 0.86 s-0.64 1.3933 -0.64 2.46 z M41.72 9.38 c1.4267 0 2.5666 0.5 3.42 1.5 s1.28 2.3534 1.28 4.06 c0 1.56 -0.41 2.84 -1.23 3.84 s-1.9233 1.5 -3.31 1.5 c-1.36 0 -2.3934 -0.52 -3.1 -1.56 l-0.04 0 l0 4.92 l-2.84 0 l0 -13.98 l2.7 0 l0 1.32 l0.04 0 c0.68 -1.0667 1.7067 -1.6 3.08 -1.6 z M38.64 14.86 c0 1.0133 0.21336 1.8133 0.64002 2.4 s1.04 0.88 1.84 0.88 c0.82666 0 1.4433 -0.29334 1.85 -0.88 s0.61 -1.3867 0.61 -2.4 c0 -1.04 -0.22 -1.8567 -0.66 -2.45 s-1.0533 -0.89 -1.84 -0.89 s-1.39 0.29334 -1.81 0.88 s-0.63 1.4067 -0.63 2.46 z M51.54 5.720000000000001 l5.96 9.58 l0.04 0 l0 -9.58 l2.94 0 l0 14.28 l-3.14 0 l-5.94 -9.56 l-0.04 0 l0 9.56 l-2.94 0 l0 -14.28 l3.12 0 z M67.72 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M69.9 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M78.66 9.38 c1.3867 0 2.47 0.28002 3.25 0.84002 s1.2167 1.38 1.31 2.46 l-2.7 0 c-0.04 -0.49334 -0.22 -0.85 -0.54 -1.07 s-0.78666 -0.33 -1.4 -0.33 c-0.53334 0 -0.93 0.08 -1.19 0.24 s-0.39 0.4 -0.39 0.72 c0 0.24 0.08666 0.44 0.26 0.6 s0.43668 0.3 0.79002 0.42 s0.74334 0.22 1.17 0.3 c1.2933 0.25334 2.2066 0.51334 2.74 0.78 s0.92334 0.58666 1.17 0.96 s0.37 0.83334 0.37 1.38 c0 1.16 -0.42334 2.05 -1.27 2.67 s-1.9967 0.93 -3.45 0.93 c-1.52 0 -2.7034 -0.32666 -3.55 -0.98 s-1.2833 -1.54 -1.31 -2.66 l2.7 0 c0 0.53334 0.20666 0.95668 0.62 1.27 s0.93334 0.47 1.56 0.47 c0.53334 0 0.97668 -0.11666 1.33 -0.35 s0.53 -0.55668 0.53 -0.97002 c0 -0.26666 -0.11 -0.48666 -0.33 -0.66 s-0.53 -0.32668 -0.93 -0.46002 s-1.02 -0.28668 -1.86 -0.46002 c-0.66666 -0.13334 -1.26 -0.31334 -1.78 -0.54 s-0.91666 -0.52332 -1.19 -0.88998 s-0.41 -0.81666 -0.41 -1.35 c0 -0.68 0.16334 -1.2733 0.49 -1.78 s0.82666 -0.89 1.5 -1.15 s1.51 -0.39 2.51 -0.39 z M88.75999999999999 6.5600000000000005 l0.000019531 3.1 l2.08 0 l0 1.9 l-2.08 0 l0 5.12 c0 0.48 0.08 0.8 0.24 0.96 s0.48 0.24 0.96 0.24 c0.34666 0 0.64 -0.02666 0.88 -0.08 l0 2.22 c-0.4 0.06666 -0.96 0.1 -1.68 0.1 c-1.0933 0 -1.9067 -0.18666 -2.44 -0.56 s-0.8 -1.02 -0.8 -1.94 l0 -6.06 l-1.72 0 l0 -1.9 l1.72 0 l0 -3.1 l2.84 0 z"></path>
                                </g>
                                <g id="SvgjsG3844" featurekey="sloganFeature-0" transform="matrix(1.8645577352966791,0,0,1.8645577352966791,56.426911890089706,68.33473014530277)" fill="#ffffff">
                                    <path d="M8.12 5.720000000000001 c3.0266 0 4.54 1.1733 4.54 3.52 c0 1.3467 -0.64666 2.3466 -1.94 3 c0.88 0.25334 1.5367 0.69668 1.97 1.33 s0.65 1.3967 0.65 2.29 c0 1.28 -0.46334 2.29 -1.39 3.03 s-2.1434 1.11 -3.65 1.11 l-6.92 0 l0 -14.28 l6.74 0 z M7.72 11.5 c1.2667 0 1.9 -0.56666 1.9 -1.7 c0 -1.0933 -0.70666 -1.64 -2.12 -1.64 l-2.98 0 l0 3.34 l3.2 0 z M7.9 17.56 c1.5333 0 2.3 -0.62666 2.3 -1.88 c0 -1.36 -0.74666 -2.04 -2.24 -2.04 l-3.44 0 l0 3.92 l3.38 0 z M23.8955 9.66 l0 5.86 c0 0.8 0.12666 1.42 0.38 1.86 s0.73334 0.66 1.44 0.66 c0.78666 0 1.35 -0.23334 1.69 -0.7 s0.51 -1.2133 0.51 -2.24 l0 -5.44 l2.84 0 l0 10.34 l-2.7 0 l0 -1.44 l-0.06 0 c-0.70666 1.1467 -1.7667 1.72 -3.18 1.72 c-1.3467 0 -2.31 -0.34334 -2.89 -1.03 s-0.87 -1.7433 -0.87 -3.17 l0 -6.42 l2.84 0 z M40.651 9.66 l2.34 7.08 l0.04 0 l2.26 -7.08 l2.94 0 l-4.32 11.64 c-0.30666 0.81334 -0.73 1.4067 -1.27 1.78 s-1.29 0.56 -2.25 0.56 c-0.41334 0 -1.0067 -0.03334 -1.78 -0.1 l0 -2.34 c0.50666 0.06666 1.0067 0.1 1.5 0.1 c0.4 0 0.71 -0.12334 0.93 -0.37 s0.33 -0.55666 0.33 -0.93 c0 -0.21334 -0.04 -0.42668 -0.12 -0.64002 l-3.64 -9.7 l3.04 0 z M73.58200000000001 5.720000000000001 c3.0266 0 4.54 1.1733 4.54 3.52 c0 1.3467 -0.64666 2.3466 -1.94 3 c0.88 0.25334 1.5367 0.69668 1.97 1.33 s0.65 1.3967 0.65 2.29 c0 1.28 -0.46334 2.29 -1.39 3.03 s-2.1434 1.11 -3.65 1.11 l-6.92 0 l0 -14.28 l6.74 0 z M73.182 11.5 c1.2667 0 1.9 -0.56666 1.9 -1.7 c0 -1.0933 -0.70666 -1.64 -2.12 -1.64 l-2.98 0 l0 3.34 l3.2 0 z M73.36200000000001 17.56 c1.5333 0 2.3 -0.62666 2.3 -1.88 c0 -1.36 -0.74666 -2.04 -2.24 -2.04 l-3.44 0 l0 3.92 l3.38 0 z M91.2975 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M93.47749999999999 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M108.13300000000001 9.38 c1.3867 0 2.47 0.28002 3.25 0.84002 s1.2167 1.38 1.31 2.46 l-2.7 0 c-0.04 -0.49334 -0.22 -0.85 -0.54 -1.07 s-0.78666 -0.33 -1.4 -0.33 c-0.53334 0 -0.93 0.08 -1.19 0.24 s-0.39 0.4 -0.39 0.72 c0 0.24 0.08666 0.44 0.26 0.6 s0.43668 0.3 0.79002 0.42 s0.74334 0.22 1.17 0.3 c1.2933 0.25334 2.2066 0.51334 2.74 0.78 s0.92334 0.58666 1.17 0.96 s0.37 0.83334 0.37 1.38 c0 1.16 -0.42334 2.05 -1.27 2.67 s-1.9967 0.93 -3.45 0.93 c-1.52 0 -2.7034 -0.32666 -3.55 -0.98 s-1.2833 -1.54 -1.31 -2.66 l2.7 0 c0 0.53334 0.20666 0.95668 0.62 1.27 s0.93334 0.47 1.56 0.47 c0.53334 0 0.97668 -0.11666 1.33 -0.35 s0.53 -0.55668 0.53 -0.97002 c0 -0.26666 -0.11 -0.48666 -0.33 -0.66 s-0.53 -0.32668 -0.93 -0.46002 s-1.02 -0.28668 -1.86 -0.46002 c-0.66666 -0.13334 -1.26 -0.31334 -1.78 -0.54 s-0.91666 -0.52332 -1.19 -0.88998 s-0.41 -0.81666 -0.41 -1.35 c0 -0.68 0.16334 -1.2733 0.49 -1.78 s0.82666 -0.89 1.5 -1.15 s1.51 -0.39 2.51 -0.39 z M124.1285 6.5600000000000005 l0.000019531 3.1 l2.08 0 l0 1.9 l-2.08 0 l0 5.12 c0 0.48 0.08 0.8 0.24 0.96 s0.48 0.24 0.96 0.24 c0.34666 0 0.64 -0.02666 0.88 -0.08 l0 2.22 c-0.4 0.06666 -0.96 0.1 -1.68 0.1 c-1.0933 0 -1.9067 -0.18666 -2.44 -0.56 s-0.8 -1.02 -0.8 -1.94 l0 -6.06 l-1.72 0 l0 -1.9 l1.72 0 l0 -3.1 l2.84 0 z"></path>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <nav class="mt-10">
                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="dashboard.php">
                        <svg class="w-6 h-6 text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="tables.php">
                        <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21.5 23h-19A2.503 2.503 0 0 1 0 20.5v-17C0 2.122 1.122 1 2.5 1h19C22.878 1 24 2.122 24 3.5v17c0 1.378-1.122 2.5-2.5 2.5zM2.5 2C1.673 2 1 2.673 1 3.5v17c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-17c0-.827-.673-1.5-1.5-1.5z" fill="" opacity="1" data-original="#000000" class=""></path><path d="M23.5 8H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 13H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM23.5 18H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1z" fill="" opacity="1" data-original="#000000" class=""></path><path d="M6.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM12 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5zM17.5 23a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5z" fill="" opacity="1" data-original="#000000" class=""></path></g></svg>
                        <span class="mx-3">Tables</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_users.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="" opacity="1" data-original="#000000" class=""></path></g></svg>
                        <span class="mx-3">Users</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_vendors.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M17.898 27.921a2.951 2.951 0 0 1-.648.071C14.171 28 8.087 28 5.007 28a3.001 3.001 0 0 1-2.998-2.855l-.001-.028a39.881 39.881 0 0 1 .5-7.195c.255-1.546 1.578-3.49 2.926-4.311l.163-.098a.998.998 0 0 1 1.1.05C7.941 14.467 9.472 15 11.126 15s3.185-.533 4.429-1.437a1 1 0 0 1 1.094-.053l.169.101c.684.417 1.37 1.115 1.905 1.909A7.504 7.504 0 0 1 30 22a7.495 7.495 0 0 1-3.718 6.477A7.465 7.465 0 0 1 22.5 29.5a7.463 7.463 0 0 1-4.602-1.579zm-.757-11.167a5.187 5.187 0 0 0-1.004-1.175A9.497 9.497 0 0 1 11.126 17a9.499 9.499 0 0 1-5.012-1.422c-.782.643-1.482 1.757-1.632 2.669a37.847 37.847 0 0 0-.474 6.824c.038.522.472.929.998.929 2.747 0 7.885 0 11.147-.005a7.47 7.47 0 0 1-1.035-5.324 7.493 7.493 0 0 1 2.023-3.917zm1.648 9.303A5.476 5.476 0 0 0 22.5 27.5a5.473 5.473 0 0 0 3.045-.92 5.5 5.5 0 1 0-6.518-8.843 5.501 5.501 0 0 0-1.786 5.879 5.51 5.51 0 0 0 1.548 2.441zm2.713-.384a4.267 4.267 0 0 1-1.367-.581 1 1 0 0 1 1.119-1.658 2.415 2.415 0 0 0 1.564.368c.251-.034.488-.14.488-.442 0-.041-.041-.051-.072-.069a1.784 1.784 0 0 0-.313-.132c-.388-.13-.832-.216-1.235-.334-1.163-.339-1.992-.962-1.992-2.173 0-.611.18-1.091.458-1.464.323-.435.795-.734 1.352-.887a1 1 0 0 1 1.994.021c.508.126.992.336 1.38.607a1 1 0 0 1-1.145 1.64 2.322 2.322 0 0 0-1.546-.37c-.254.035-.493.148-.493.453 0 .041.041.051.072.069.093.054.2.094.313.132.388.13.832.216 1.235.334 1.163.339 1.992.962 1.992 2.173 0 1.237-.668 1.948-1.592 2.275-.07.025-.143.047-.218.066a1.001 1.001 0 0 1-1.994-.028zM11.126 2a5.455 5.455 0 0 1 5.453 5.452c0 3.01-2.444 5.453-5.453 5.453s-5.452-2.443-5.452-5.453A5.455 5.455 0 0 1 11.126 2zm0 2a3.454 3.454 0 0 0-3.452 3.452 3.454 3.454 0 0 0 3.452 3.453 3.454 3.454 0 0 0 3.453-3.453A3.454 3.454 0 0 0 11.126 4z" fill="" opacity="1" data-original="#000000"></path></g></svg>
                        <span class="mx-3">Vendors</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_product.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m90.895 25.211-42-21a2.004 2.004 0 0 0-1.789 0l-42 21A2 2 0 0 0 4 27v42a2 2 0 0 0 1.105 1.789l42 21a1.998 1.998 0 0 0 1.79 0l42-21A2 2 0 0 0 92 69V27a2 2 0 0 0-1.105-1.789zM48 8.236 85.528 27 77.5 31.014 39.973 12.25zm13.5 30.778L23.972 20.25 35.5 14.486 73.028 33.25zm1.5 3.722 12-6v14.877l-3.838-2.741a2.006 2.006 0 0 0-1.506-.343 2.007 2.007 0 0 0-1.301.832L63 57.098zm-43.5-20.25L57.027 41.25 48 45.764 10.472 27zM8 30.236l38 19v37.527l-38-19zm42 56.528V49.236l9-4.5V63.5a2 2 0 0 0 3.645 1.139l7.845-11.331 5.349 3.82A1.997 1.997 0 0 0 79 55.5V34.736l9-4.5v37.527z" fill="" opacity="1" data-original="#000000"></path></g></svg>
                        <span class="mx-3">Products</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="logout.php">
                        <svg class="w-5 h-5 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="ARROW 48"><path d="M307.69 347.47a24 24 0 0 0-24 24v58.47a33.93 33.93 0 0 1-33.89 33.9H82.06a33.93 33.93 0 0 1-33.89-33.9V82.06a33.93 33.93 0 0 1 33.89-33.9H249.8a33.93 33.93 0 0 1 33.89 33.9v50.54a24 24 0 0 0 48 0V82.06A82 82 0 0 0 249.8.16H82.06A82 82 0 0 0 .17 82.06v347.88a82 82 0 0 0 81.89 81.9H249.8a82 82 0 0 0 81.89-81.9v-58.47a24 24 0 0 0-24-24z" fill="" opacity="1" data-original="#000000" class=""></path><path d="m504.77 238.53-85.41-85.35a24 24 0 0 0-33.6-.33c-9.7 9.33-9.47 25.13.05 34.65l44.47 44.5h-208a24 24 0 0 0-24 24 24 24 0 0 0 24 24h208l-44.9 44.9a24 24 0 0 0 33.94 33.95l85.45-85.41a24.66 24.66 0 0 0 0-34.91z" fill="" opacity="1" data-original="#000000" class=""></path></g></g></svg>
                        <span class="mx-3">Log Out</span>
                    </a>
                </nav>
            </div>

            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <h1 class="text-2xl font-semibold">Hello Admin !</h1>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80" alt="Your avatar">
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Dashboard</a>
                                <a href="view_product.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Products</a>
                                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="overflow-y-auto">
                    <?php
                        if(isset($_COOKIE['adminEmail'])){
                        ?>
                            <!-- top seller -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Seller Vendors</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Vendor Profile</th>
                                                    <th class="px-4 py-3">UserName</th>
                                                    <th class="px-4 py-3">Vendor Name</th>
                                                    <th class="px-4 py-3">Vendor Email</th>
                                                    <th class="px-4 py-3">Total Products</th>
                                                    <th class="px-4 py-3">Total Sale Products</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($top = mysqli_fetch_array($vendor_query)) {
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-10 w-10 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/vendor_images/vendor_profile_image/' . $top['dp_image'] : 'Vendor_profile Img'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['username'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['name'] : 'name'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['email'] : 'email'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['total_products'] : 'totalProducts'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $top['total_sales'] : 'totalSales'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top buyers -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Buyers</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">User Profile</th>
                                                    <th class="px-4 py-3">User Name</th>
                                                    <th class="px-4 py-3">User Email</th>
                                                    <th class="px-4 py-3">Buying Products</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($buyers = mysqli_fetch_array($buyer_queyr)) {
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-10 w-10 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/user_dp/' . $buyers['profile_image'] : 'profile_image'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['first_name'] . ' ' . $buyers['last_name'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['email'] : 'email'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['total_buy'] : 'total_buy'; ?></td>
                                                                <!-- <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $buyers['total_sales'] : 'totalSales'; ?></td> -->
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top rated product -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Rated Products</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Product Profile</th>
                                                    <th class="px-4 py-3 w-96">Product Title</th>
                                                    <th class="px-4 py-3">Seller</th>
                                                    <th class="px-4 py-3">Total Rating</th>
                                                    <th class="px-4 py-3">Total Reviews</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while ($tr = mysqli_fetch_array($topRated_query)) {
                                                    $product_id = $tr['product_id'];
                                                    $selectProducts = "SELECT * FROM items WHERE product_id = '$product_id'";
                                                    $pQeury = mysqli_query($con, $selectProducts);
                                                
                                                    $row = mysqli_fetch_assoc($pQeury);
                                                
                                                    // for seller
                                                    $vendor_id = $row['vendor_id'];
                                                    $seller = "SELECT * FROM vendor_registration WHERE vendor_id = '$vendor_id'";
                                                    $sQuery = mysqli_query($con, $seller);
                                                    $ven = mysqli_fetch_assoc($sQuery); 
                                                
                                                    // for avrage reviews
                                                    $get_reviews = "SELECT * FROM user_review WHERE product_id = '$product_id'";
                                                    $review_query = mysqli_query($con,$get_reviews);
                                                
                                                    if($totalReviews = mysqli_num_rows($review_query)){
                                                        $sum = 0;
                                                        $count = 0;
                                                    
                                                        while ($data = mysqli_fetch_assoc($review_query)) {
                                                            $rating = str_replace(",", "", $data['Rating']);
                                                            $sum += (float)$rating;
                                                            $count++;
                                                        }
                                                    
                                                        $average = $sum / $count;
                                                        $formatted_average = number_format($average, 1);
                                                    
                                                    }
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-20 w-20 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/product_image/product_profile/' . $row['image_1'] : 'product Img'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 leading-9 line-clamp-2"><?php echo isset($_COOKIE['adminEmail']) ? $row['title'] : 'title'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $ven['username'] : 'username'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $formatted_average : 'formatted_average'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tr['totalRatings'] : 'totalRatings'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                                            
                            <!-- top buying products -->
                            <section class="container mx-auto p-6">
                                <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Top Buying Products</h2>
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                    <div class="w-full overflow-x-auto h-max text-center">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                                    <th class="px-4 py-3">Rank</th>
                                                    <th class="px-4 py-3">Product Profile</th>
                                                    <th class="px-4 py-3 w-96">Product Title</th>
                                                    <th class="px-4 py-3">Product Price</th>
                                                    <th class="px-4 py-3">Total Buying</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i = 1;
                                                while($tb = mysqli_fetch_assoc($topBuying_query)){
                                                    ?>
                                                        <tbody class="bg-white border">
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 border"><?php echo $i; ?></td>
                                                                <td class="px-4 py-3 border"><img class="h-14 w-14 object-cover rounded-full m-auto" src="<?php echo isset($_COOKIE['adminEmail']) ? '../src/product_image/product_profile/' . $tb['order_image'] : 'order_image'; ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                                <td class="px-4 py-3 leading-9 line-clamp-2"><?php echo isset($_COOKIE['adminEmail']) ? $tb['order_title'] : 'order_title'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tb['total_price'] : 'total_price'; ?></td>
                                                                <td class="px-4 py-3 border"><?php echo isset($_COOKIE['adminEmail']) ? $tb['totalProducts'] : 'totalProducts'; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        <?php  
                        }else{
                            
                        }
                    ?>
                   
                </main>
            </div>
        </div>
    </div>


</body>
</html>
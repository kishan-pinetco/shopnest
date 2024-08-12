<?php
    include "../include/connect.php";

    if(isset($_COOKIE['vendor_id'])){
        $vendor_id = $_COOKIE['vendor_id'];

        $retrieve_data = "SELECT * FROM vendor_registration WHERE vendor_id = '$vendor_id'";
        $retrieve_query = mysqli_query($con, $retrieve_data);

        $row = mysqli_fetch_assoc($retrieve_query);
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
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="vendor_dashboard.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="vendor_profile.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="" opacity="1" data-original="#000000"></path></g></svg>
                        <span class="mx-3">Profile</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="vendor_account.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M11.5 20.263H2.95a.2.2 0 0 1-.2-.2v-1.451c0-.83.593-1.562 1.507-2.184 1.632-1.114 4.273-1.816 7.243-1.816a.75.75 0 0 0 0-1.5c-3.322 0-6.263.831-8.089 2.076-1.393.95-2.161 2.157-2.161 3.424v1.451a1.7 1.7 0 0 0 1.7 1.7h8.55a.75.75 0 1 0 0-1.5zM11.5 1.25C8.464 1.25 6 3.714 6 6.75s2.464 5.5 5.5 5.5S17 9.786 17 6.75s-2.464-5.5-5.5-5.5zm0 1.5c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zM17.5 13.938a3.564 3.564 0 0 0 0 7.125c1.966 0 3.563-1.597 3.563-3.563s-1.597-3.562-3.563-3.562zm0 1.5c1.138 0 2.063.924 2.063 2.062s-.925 2.063-2.063 2.063-2.063-.925-2.063-2.063.925-2.062 2.063-2.062z" fill="" opacity="1" data-original="#000000" class=""></path><path d="M18.25 14.687V13a.75.75 0 0 0-1.5 0v1.688a.75.75 0 0 0 1.5-.001zM20.019 16.042l1.193-1.194a.749.749 0 1 0-1.06-1.06l-1.194 1.193a.752.752 0 0 0 0 1.061.752.752 0 0 0 1.061 0zM20.312 18.25H22a.75.75 0 0 0 0-1.5h-1.688a.75.75 0 0 0 0 1.5zM18.958 20.019l1.194 1.193a.749.749 0 1 0 1.06-1.06l-1.193-1.194a.752.752 0 0 0-1.061 0 .752.752 0 0 0 0 1.061zM16.75 20.312V22a.75.75 0 0 0 1.5 0v-1.688a.75.75 0 0 0-1.5 0zM14.981 18.958l-1.193 1.194a.749.749 0 1 0 1.06 1.06l1.194-1.193a.752.752 0 0 0 0-1.061.752.752 0 0 0-1.061 0zM14.687 16.75H13a.75.75 0 0 0 0 1.5h1.687a.75.75 0 1 0 0-1.5zM16.042 14.981l-1.194-1.193a.749.749 0 1 0-1.06 1.06l1.193 1.194a.752.752 0 0 0 1.061 0 .752.752 0 0 0 0-1.061z" fill="" opacity="1" data-original="#000000" class=""></path></g></svg>
                        <span class="mx-3">Account Setting</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="choose_product.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span class="mx-3">Add Product</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="view_orders.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-3">Orders</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="view_products.php">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span class="mx-3">Products</span>
                    </a>

                    <a class="group flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="vendor_logout.php">
                        <svg class="w-6 h-6 fill-gray-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                            <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
                        </svg>
                        <span class="mx-3">Log Out</span>
                    </a>
                </nav>
            </div>

            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <h1 class="text-2xl font-semibold">Hello 
                                <span><?php echo isset($_COOKIE['vendor_id']) ? $row['name'].'!' : 'Vendor !' ?></span>
                            </h1>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full" src="<?php echo isset($_COOKIE['vendor_id']) ? '../src/vendor_images/vendor_profile_image/' . $row['dp_image'] : 'https://cdn-icons-png.freepik.com/512/3682/3682323.png' ?>" alt="Your avatar">
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="vendor_profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                <a href="view_products.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                                <a href="vendor_logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <!-- place orders -->
                    <section class="container mx-auto p-6">
                        <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Place Orders</h2>
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto h-max text-center">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                            <th class="px-4 py-3">order_id</th>
                                            <th class="px-4 py-3">order_name</th>
                                            <th class="px-4 py-3">order_image</th>
                                            <th class="px-4 py-3">order_price</th>
                                            <th class="px-4 py-3">order_Color</th>
                                            <th class="px-4 py-3">order_size</th>
                                            <th class="px-4 py-3">order_QTY</th>
                                            <th class="px-4 py-3">user_name</th>
                                            <th class="px-4 py-3">user_email</th>
                                            <th class="px-4 py-3">user_mobile</th>
                                            <th class="px-4 py-3">user_address</th>
                                            <th class="px-4 py-3">user_state</th>
                                            <th class="px-4 py-3">user_city</th>
                                            <th class="px-4 py-3">user_pincode</th>
                                            <th class="px-4 py-3">payment_type</th>
                                            <th class="px-4 py-3">Order_Date</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if(isset($_COOKIE['vendor_id'])){
                                            $get_orders = "SELECT * FROM orders WHERE vendor_id = '$vendor_id'";
                                            $get_orders_query = mysqli_query($con,$get_orders);
    
                                            while($items = mysqli_fetch_assoc($get_orders_query)){
                                                ?>
                                                    <tbody class="bg-white border">
                                                        <tr class="text-gray-700">
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['order_id'] : 'order_id'?></td>
                                                            <td class="px-4 py-3 my-auto h-full line-clamp-4"><?php echo isset($_COOKIE['vendor_id']) ? $items['order_title'] : 'order_title'?></td>
                                                            <td class="px-4 py-3 border"><img src="<?php echo isset($_COOKIE['vendor_id']) ? '../src/product_image/product_profile/' . $items['order_image'] : '../src/sample_images/product_1.jpg' ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['total_price'] : 'total_price'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['order_color'] : 'order_color'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['order_size'] : 'order_size'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['qty'] : 'qty'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_first_name'] . ' ' . $items['user_last_name'] : 'user name'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_email'] : 'user_email'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_mobile'] : 'user_mobile'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_address'] : 'user_address'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_state'] : 'user_state'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_city'] : 'user_city'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['user_pin'] : 'user_pin'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['payment_type'] : 'payment_type'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $items['date'] : 'date'?></td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                            }
                                        }
                                    ?> 
                                </table>
                            </div>
                        </div>
                    </section>

                    <!-- cancle orders -->
                    <section class="container mx-auto p-6">
                        <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Cancle Orders</h2>
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto h-max text-center">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                            <th class="px-4 py-3">cancel_order_id</th>
                                            <th class="px-4 py-3">cancle_order_title</th>
                                            <th class="px-4 py-3">cancle_order_image</th>
                                            <th class="px-4 py-3">cancle_order_price</th>
                                            <th class="px-4 py-3">cancle_order_color</th>
                                            <th class="px-4 py-3">cancle_order_size	</th>
                                            <th class="px-4 py-3">user_name</th>
                                            <th class="px-4 py-3">user_email</th>
                                            <th class="px-4 py-3">user_phone</th>
                                            <th class="px-4 py-3">receive_payment</th>
                                            <th class="px-4 py-3">Reason</th>
                                            <th class="px-4 py-3">cancle_order_date</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if(isset($_COOKIE['vendor_id'])){
                                            $get_orders = "SELECT * FROM cancel_orders WHERE vendor_id = '$vendor_id'";
                                            $get_orders_query = mysqli_query($con,$get_orders);
    
                                            while($co = mysqli_fetch_assoc($get_orders_query)){
                                                ?>
                                                    <tbody class="bg-white border">
                                                        <tr class="text-gray-700">
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['cancel_order_id'] : 'cancel_order_id'?></td>
                                                            <td class="px-4 py-3 my-auto h-full line-clamp-4"><?php echo isset($_COOKIE['vendor_id']) ? $co['cancle_order_title'] : 'cancle_order_title'?></td>
                                                            <td class="px-4 py-3 border"><img src="<?php echo isset($_COOKIE['vendor_id']) ? '../src/product_image/product_profile/' . $co['cancle_order_image'] : '../src/sample_images/product_1.jpg' ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['cancle_order_price'] : 'cancle_order_price'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['cancle_order_color'] : 'cancle_order_color'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['cancle_order_size'] : 'cancle_order_size'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['user_name'] : 'user_name'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['user_email'] : 'user_email'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['user_phone'] : 'user_phone'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['receive_payment'] : 'receive_payment'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['reason'] : 'reason'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $co['date'] : 'date'?></td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                            }
                                        }
                                    ?> 
                                </table>
                            </div>
                        </div>
                    </section>

                    <!-- return orders -->
                    <section class="container mx-auto p-6">
                        <h2 class="font-manrope font-bold text-4xl leading-10 text-black mb-5">Return Orders</h2>
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto h-max text-center">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 border-b border-gray-600">
                                            <th class="px-4 py-3">return_order_id</th>
                                            <th class="px-4 py-3">return_order_title</th>
                                            <th class="px-4 py-3">return_order_image</th>
                                            <th class="px-4 py-3">return_order_price</th>
                                            <th class="px-4 py-3">return_order_color</th>
                                            <th class="px-4 py-3">return_order_size</th>
                                            <th class="px-4 py-3">user_name</th>
                                            <th class="px-4 py-3">user_email</th>
                                            <th class="px-4 py-3">user_phone</th>
                                            <th class="px-4 py-3">payment_type</th>
                                            <th class="px-4 py-3">return_order_date</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        if(isset($_COOKIE['vendor_id'])){
                                            $get_orders = "SELECT * FROM return_orders WHERE vendor_id = '$vendor_id'";
                                            $get_orders_query = mysqli_query($con,$get_orders);

                                            while($ro = mysqli_fetch_assoc($get_orders_query)){
                                                ?>
                                                    <tbody class="bg-white border">
                                                        <tr class="text-gray-700">
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_id'] : 'return_order_id'?></td>
                                                            <td class="px-4 py-3 my-auto h-full line-clamp-4"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_title'] : 'return_order_title'?></td>
                                                            <td class="px-4 py-3 border"><img src="<?php echo isset($_COOKIE['vendor_id']) ? '../src/product_image/product_profile/' . $ro['return_order_image'] : '../src/sample_images/product_1.jpg' ?>" alt="" class="w-20 h-20 m-auto"></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_price'] : 'return_order_price'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_color'] : 'return_order_color'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_size'] : 'return_order_size'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['user_name'] : 'user_name'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['user_email'] : 'user_email'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['user_phone'] : 'user_phone'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['payment_type'] : 'payment_type'?></td>
                                                            <td class="px-4 py-3 border"><?php echo isset($_COOKIE['vendor_id']) ? $ro['return_order_date'] : 'return_order_date'?></td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                            }    
                                        }
                                    ?> 
                                </table>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
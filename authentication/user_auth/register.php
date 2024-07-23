<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <!-- css file link -->
    <link rel="stylesheet" href="authentication.css">

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="/src/logo/logo.svg">

    <!-- alpinejs CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex justify-center h-[100%] p-2">
    <div class="lg:w-[45%]">
        <!-- header -->
        <div class="p-2 flex items-center justify-center">
            <!-- icon logo div -->
            <div>
                <svg class="w-14 mb-2" id="svg" version="1.1" viewBox="0 0 235 245" xmlns="http://www.w3.org/2000/svg">
                    <path d="M206.892 29.517 C 200.010 35.658,189.576 41.188,180.534 43.486 C 177.253 44.321,174.020 45.565,173.350 46.251 C 171.971 47.664,166.551 67.884,167.340 68.673 C 168.204 69.537,179.069 65.995,179.498 64.708 C 179.720 64.044,180.387 61.601,180.981 59.280 C 181.959 55.459,182.459 54.955,186.280 53.935 C 192.663 52.233,206.793 44.596,213.175 39.399 C 220.155 33.714,221.953 30.104,219.596 26.506 C 217.004 22.551,213.866 23.295,206.892 29.517 M187.489 66.415 C 175.914 71.986,167.370 75.176,152.530 79.468 C 134.661 84.637,129.605 84.992,73.809 84.996 C 42.099 84.998,21.890 85.369,21.529 85.954 C 21.204 86.478,23.708 97.616,27.091 110.704 C 36.326 146.420,36.763 147.773,40.319 151.631 C 43.254 154.814,44.853 155.423,61.000 159.496 C 119.290 174.200,132.222 177.178,133.265 176.135 C 134.554 174.846,142.811 143.001,141.988 142.493 C 141.595 142.249,137.091 141.577,131.981 140.998 C 117.748 139.386,103.951 134.196,95.673 127.341 C 94.119 126.053,93.097 125.000,93.402 125.000 C 93.708 125.000,98.805 126.421,104.729 128.157 C 114.056 130.891,117.109 131.325,127.500 131.389 C 140.801 131.472,146.510 130.377,158.035 125.534 C 169.890 120.551,185.000 109.616,185.000 106.019 C 185.000 101.812,182.568 101.790,173.204 105.910 C 157.976 112.611,137.440 118.000,127.130 118.000 C 116.025 118.000,96.071 112.603,86.157 106.917 C 83.218 105.232,80.968 103.709,81.157 103.533 C 81.346 103.356,84.425 103.847,88.000 104.623 C 97.573 106.700,117.170 107.461,126.000 106.100 C 152.550 102.005,175.202 91.159,196.800 72.198 C 201.896 67.725,203.043 66.173,202.800 64.084 C 202.342 60.138,199.695 60.541,187.489 66.415 M153.500 139.345 L 149.500 140.537 144.185 162.000 C 141.262 173.805,138.727 183.607,138.551 183.782 C 138.375 183.958,133.117 182.801,126.866 181.212 C 39.403 158.976,38.030 158.663,35.961 160.535 C 33.692 162.589,33.370 167.232,35.381 168.901 C 36.994 170.240,36.192 170.024,90.000 183.580 C 112.825 189.331,132.287 194.283,133.250 194.585 C 139.517 196.553,130.805 197.000,86.155 197.000 C 40.105 197.000,37.215 197.105,35.655 198.829 C 33.484 201.228,33.555 204.287,35.829 206.345 C 37.479 207.838,42.519 208.000,87.428 208.000 C 147.299 208.000,144.085 208.664,147.666 195.546 C 150.099 186.630,161.000 140.651,161.000 139.303 C 161.000 137.736,158.860 137.749,153.500 139.345 M48.746 213.750 C 42.609 220.173,42.967 231.130,49.501 236.867 C 60.536 246.555,77.420 239.409,77.368 225.071 C 77.329 214.163,68.051 206.931,63.943 214.606 C 62.742 216.850,62.786 217.561,64.283 220.171 C 67.511 225.795,66.031 230.000,60.823 230.000 C 58.988 230.000,57.508 229.178,56.458 227.576 C 55.014 225.373,55.012 224.877,56.435 222.126 C 58.641 217.861,58.403 214.395,55.777 212.557 C 52.723 210.417,51.778 210.578,48.746 213.750 M106.353 212.465 C 101.454 215.897,99.367 226.942,102.480 232.961 C 104.448 236.767,108.397 239.760,113.131 241.035 C 123.049 243.706,134.000 235.291,134.000 225.000 C 134.000 218.879,128.916 211.000,124.966 211.000 C 120.764 211.000,118.603 217.569,121.532 221.441 C 123.502 224.045,123.381 226.345,121.171 228.345 C 118.340 230.907,114.173 230.473,112.806 227.474 C 111.880 225.441,111.982 224.261,113.327 221.440 C 115.492 216.900,115.435 215.435,113.000 213.000 C 110.618 210.618,109.158 210.501,106.353 212.465 " stroke="none" fill="black" fill-rule="evenodd" />
                </svg>
            </div>
            <!-- text logo -->
            <div>
                <svg class="w-40" viewBox="0 0 245 60" class="looka-1j8o68f">
                    <g id="SvgjsG7220" featurekey="s6yzU4-0" transform="matrix(2.329517141759672,0,0,2.329517141759672,-2.223190361852095,-12.113490914430828)" fill="#000000">
                        <path d="M9.1 6.02 c0.82 0.28 0.38 1.56 -0.46 1.26 c-1.8 -0.64 -3.96 -0.98 -5.28 0.48 c-1.08 1.14 -1.36 3.24 0.08 4.48 c1.74 1.56 4.22 1.22 4.36 3.34 c0.06 1.12 -0.92 1.94 -2 2.02 c-1.3 0.08 -2.92 -0.24 -4.24 -1.2 c-0.7 -0.5 0.08 -1.58 0.78 -1.08 c1.54 1.12 4.24 1.32 4.12 0.32 c-0.08 -0.94 -2.06 -0.78 -3.92 -2.4 c-2.9 -2.54 -1.14 -7.6 2.98 -7.8 c1.2 -0.06 2.18 0.1 3.58 0.58 l0 0 z M1.3 19.24 c-0.76 -0.4 -0.14 -1.58 0.64 -1.18 c3.08 1.64 7.26 1.22 7.26 -2.48 c0 -2.74 -3.6 -3.24 -4.62 -4.06 c-1.6 -1.26 -0.76 -4.8 4.22 -2.78 c0.78 0.32 0.3 1.56 -0.52 1.22 c-3.02 -1.22 -3.54 0.02 -2.88 0.54 c0.74 0.56 5.12 1.36 5.12 5.08 c0 3.66 -3.24 5.38 -6.98 4.48 c-0.68 -0.14 -1.46 -0.4 -2.24 -0.82 l0 0 z M5.68 16.28 l0 0 l0 0 z M15.600000000000001 6.16 c0 -0.36 0.3 -0.66 0.66 -0.66 c0.38 0 0.68 0.3 0.68 0.66 l0 4.68 l2.66 0 l0 -4.68 c0 -0.36 0.3 -0.66 0.68 -0.66 c0.36 0 0.66 0.3 0.66 0.66 l0 5.36 c0 0.36 -0.3 0.66 -0.66 0.66 l-4.02 0 c-0.36 0 -0.66 -0.3 -0.66 -0.66 l0 -5.36 l0 0 z M20.939999999999998 19.54 c0 0.36 -0.3 0.66 -0.66 0.66 c-0.38 0 -0.68 -0.3 -0.68 -0.66 l0 -4.68 l-2.66 0 l0 4.68 c0 0.36 -0.3 0.66 -0.68 0.66 c-0.36 0 -0.66 -0.3 -0.66 -0.66 l0 -5.36 c0 -0.36 0.3 -0.66 0.66 -0.66 l4.02 0 c0.36 0 0.66 0.3 0.66 0.66 l0 5.36 l0 0 z M14.26 19.54 c0 0.36 -0.3 0.66 -0.66 0.66 c-0.38 0 -0.68 -0.3 -0.68 -0.66 l0 -13.38 c0 -0.36 0.3 -0.66 0.68 -0.66 c0.36 0 0.66 0.3 0.66 0.66 l0 13.38 l0 0 z M22.28 6.16 c0 -0.36 0.3 -0.66 0.66 -0.66 c0.38 0 0.68 0.3 0.68 0.66 l0 13.38 c0 0.36 -0.3 0.66 -0.68 0.66 c-0.36 0 -0.66 -0.3 -0.66 -0.66 l0 -13.38 l0 0 z M41.34 10.54 c0.1 0.36 -0.08 0.74 -0.44 0.84 c-0.36 0.12 -0.76 -0.08 -0.86 -0.44 c-0.42 -1.28 -1.22 -2.38 -2.32 -3.18 c-1.04 -0.74 -2.34 -1.2 -3.76 -1.2 c-8.34 0 -8.34 12.52 0 12.52 c1.42 0 2.72 -0.44 3.76 -1.2 c1.1 -0.78 1.9 -1.88 2.32 -3.18 c0.1 -0.36 0.5 -0.54 0.86 -0.44 s0.54 0.5 0.44 0.86 c-0.5 1.56 -1.5 2.92 -2.8 3.86 c-1.3 0.92 -2.86 1.48 -4.58 1.48 c-10.14 0 -10.14 -15.26 0 -15.26 c1.72 0 3.28 0.54 4.58 1.46 c1.3 0.96 2.3 2.3 2.8 3.88 l0 0 z M29.840000000000003 15.24 c-0.2 -0.34 -0.08 -0.72 0.24 -0.92 c0.34 -0.18 0.74 -0.08 0.92 0.26 c0.32 0.52 0.76 0.98 1.28 1.26 c0.48 0.3 1.06 0.48 1.68 0.48 c0.96 0 1.82 -0.38 2.42 -1.02 c0.64 -0.62 1.02 -1.5 1.02 -2.48 c0 -0.96 -0.38 -1.84 -1.02 -2.46 c-0.6 -0.62 -1.46 -1.02 -2.42 -1.02 c-0.62 0 -1.18 0.16 -1.68 0.46 c-0.52 0.3 -0.96 0.74 -1.28 1.26 c-0.18 0.34 -0.58 0.46 -0.92 0.28 c-0.32 -0.18 -0.44 -0.6 -0.24 -0.94 c0.42 -0.74 1.02 -1.36 1.74 -1.78 s1.54 -0.64 2.38 -0.64 c1.34 0 2.54 0.54 3.42 1.42 c0.84 0.88 1.38 2.08 1.38 3.42 s-0.54 2.54 -1.38 3.42 c-0.88 0.9 -2.08 1.44 -3.42 1.44 c-0.84 0 -1.66 -0.24 -2.38 -0.64 c-0.72 -0.44 -1.32 -1.06 -1.74 -1.8 l0 0 z M49.76 12.18 c-0.52 0 -1.42 0.14 -1.42 -0.66 c0 -0.82 0.9 -0.66 1.42 -0.66 c0.92 0 0.92 -1.34 0 -1.34 l-2.36 0 c-0.88 0 -0.88 -1.34 0 -1.34 l2.36 0 c2.68 0 2.68 4 0 4 l0 0 z M45.4 19.52 c0 0.88 -1.34 0.88 -1.34 0 l0 -13.32 c0 -0.4 0.3 -0.68 0.66 -0.68 l5.28 0 c6.06 0 6.04 9.34 0 9.34 l-1.92 0 l0 4.66 c0 0.88 -1.36 0.88 -1.36 0 l0 -5.34 c0 -0.36 0.32 -0.66 0.68 -0.66 l2.6 0 c4.3 0 4.3 -6.68 0 -6.68 l-4.6 0 l0 12.68 l0 0 z M58.120000000000005 19.54 c0 0.36 -0.28 0.68 -0.66 0.68 c-0.36 0 -0.66 -0.32 -0.66 -0.68 l0 -13.38 c0 -0.36 0.3 -0.64 0.66 -0.64 c0.38 0 0.66 0.28 0.66 0.64 l0 13.38 l0 0 z M69.04 19.54 c0 0.36 -0.3 0.68 -0.68 0.68 c-0.36 0 -0.66 -0.32 -0.66 -0.68 l0 -13.38 c0 -0.36 0.3 -0.64 0.66 -0.64 c0.38 0 0.68 0.28 0.68 0.64 l0 13.38 l0 0 z M66.5 19.16 c0.2 0.3 0.12 0.7 -0.16 0.94 c-0.32 0.2 -0.72 0.12 -0.94 -0.18 l-4.6 -6.58 l0 6.2 c0 0.36 -0.3 0.66 -0.68 0.66 c-0.36 0 -0.64 -0.3 -0.64 -0.66 l0 -8.32 c0 -0.22 0.08 -0.42 0.28 -0.54 c0.28 -0.24 0.72 -0.16 0.92 0.16 l5.82 8.32 l0 0 z M59.34 6.5600000000000005 c-0.22 -0.32 -0.14 -0.72 0.16 -0.92 c0.3 -0.24 0.72 -0.14 0.92 0.16 l4.6 6.58 l0 -6.22 c0 -0.36 0.32 -0.64 0.68 -0.64 s0.66 0.28 0.66 0.64 l0 8.32 c0 0.22 -0.1 0.44 -0.3 0.56 c-0.3 0.22 -0.7 0.14 -0.92 -0.16 l-5.8 -8.32 l0 0 z M79.84 8.18 c0.38 0 0.68 0.28 0.68 0.66 c0 0.36 -0.3 0.66 -0.68 0.66 l-3.58 0 l0 1.34 l2.34 0 c0.38 0 0.68 0.3 0.68 0.68 c0 0.36 -0.3 0.66 -0.68 0.66 l-3 0 c-0.38 0 -0.68 -0.3 -0.68 -0.66 l0 -2.68 c0 -0.38 0.3 -0.66 0.68 -0.66 l4.24 0 l0 0 z M78.6 13.52 c0.38 0 0.68 0.3 0.68 0.66 c0 0.38 -0.3 0.68 -0.68 0.68 l-2.34 0 l0 1.32 l3.58 0 c0.38 0 0.68 0.3 0.68 0.68 c0 0.36 -0.3 0.66 -0.68 0.66 l-4.24 0 c-0.38 0 -0.68 -0.3 -0.68 -0.66 l0 -2.68 c0 -0.36 0.3 -0.66 0.68 -0.66 l3 0 l0 0 z M79.84 18.86 c0.38 0 0.68 0.3 0.68 0.68 c0 0.36 -0.3 0.66 -0.68 0.66 l-6.92 0 c-0.36 0 -0.66 -0.3 -0.66 -0.66 l0 -13.38 c0 -0.36 0.3 -0.66 0.66 -0.66 l6.92 0 c0.38 0 0.68 0.3 0.68 0.66 c0 0.38 -0.3 0.68 -0.68 0.68 l-6.24 0 l0 12.02 l6.24 0 l0 0 z M90.69999999999999 6.02 c0.82 0.28 0.38 1.56 -0.46 1.26 c-1.8 -0.64 -3.96 -0.98 -5.28 0.48 c-1.08 1.14 -1.36 3.24 0.08 4.48 c1.74 1.56 4.22 1.22 4.36 3.34 c0.06 1.12 -0.92 1.94 -2 2.02 c-1.3 0.08 -2.92 -0.24 -4.24 -1.2 c-0.7 -0.5 0.08 -1.58 0.78 -1.08 c1.54 1.12 4.24 1.32 4.12 0.32 c-0.08 -0.94 -2.06 -0.78 -3.92 -2.4 c-2.9 -2.54 -1.14 -7.6 2.98 -7.8 c1.2 -0.06 2.18 0.1 3.58 0.58 l0 0 z M82.89999999999999 19.24 c-0.76 -0.4 -0.14 -1.58 0.64 -1.18 c3.08 1.64 7.26 1.22 7.26 -2.48 c0 -2.74 -3.6 -3.24 -4.62 -4.06 c-1.6 -1.26 -0.76 -4.8 4.22 -2.78 c0.78 0.32 0.3 1.56 -0.52 1.22 c-3.02 -1.22 -3.54 0.02 -2.88 0.54 c0.74 0.56 5.12 1.36 5.12 5.08 c0 3.66 -3.24 5.38 -6.98 4.48 c-0.68 -0.14 -1.46 -0.4 -2.24 -0.82 l0 0 z M87.28 16.28 l0 0 l0 0 z M103.33999999999999 8.18 c0.36 0 0.64 0.3 0.64 0.68 c0 0.36 -0.28 0.64 -0.64 0.64 l-2.68 0 l0 10.02 c0 0.38 -0.3 0.68 -0.68 0.68 c-0.36 0 -0.66 -0.3 -0.66 -0.68 l0 -10.66 c0 -0.38 0.3 -0.68 0.66 -0.68 l3.36 0 l0 0 z M93.99999999999999 6.84 c-0.38 0 -0.68 -0.3 -0.68 -0.66 c0 -0.38 0.3 -0.66 0.68 -0.66 l9.34 0 c0.36 0 0.64 0.28 0.64 0.66 c0 0.36 -0.28 0.66 -0.64 0.66 l-9.34 0 l0 0 z M93.99999999999999 9.5 c-0.38 0 -0.68 -0.28 -0.68 -0.64 c0 -0.38 0.3 -0.68 0.68 -0.68 l3.32 0 c0.38 0 0.68 0.3 0.68 0.68 l0 10.66 c0 0.38 -0.3 0.68 -0.68 0.68 c-0.36 0 -0.68 -0.3 -0.68 -0.68 l0 -10.02 l-2.64 0 l0 0 z"></path>
                    </g>
                    <g id="SvgjsG7221" featurekey="sT9YGu-0" transform="matrix(0.7771300859272026,0,0,0.7771300859272026,-1.3677480174093322,41.741327114296354)" fill="#000000">
                        <path d="M6.08 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M5.84 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M6.36 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M34.120000000000005 5.84 l0 8.52 q0 2.16 0.92 3.28 t2.74 1.16 q1.82 -0.02 2.73 -1.15 t0.93 -3.21 l0 -8.6 l1.68 0 l0 8.82 q0 2.7 -1.4 4.19 t-3.94 1.51 q-2.5 0 -3.91 -1.51 t-1.43 -4.21 l0 -8.8 l1.68 0 z M64.92 5.84 l3.98 6.4 l4.1 -6.4 l2.02 0 l-5.28 8.06 l0 6.1 l-1.68 0 l0 -6.1 l-5.28 -8.06 l2.14 0 z M122.76 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M122.52000000000001 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M123.04 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M158.08 5.84 l0 1.56 l-7.22 0 l0 4.44 l6.74 0 l0 1.56 l-6.74 0 l0 5.04 l7.58 0 l0 1.56 l-9.26 0 l0 -14.16 l8.9 0 z M183.32000000000002 5.48 q2.58 0 3.96 1.66 l-1.38 1.2 q-0.8 -1.26 -2.58 -1.3 q-1.34 0 -2.18 0.64 t-0.84 1.74 q0 0.96 0.64 1.52 t2.4 1.1 q2.28 0.66 3.23 1.61 t0.95 2.57 q0 1.88 -1.4 3 t-3.58 1.14 q-1.46 0 -2.6 -0.52 t-1.76 -1.44 l1.44 -1.18 q0.46 0.76 1.28 1.17 t1.74 0.41 q1.26 0 2.17 -0.71 t0.91 -1.75 q0 -0.94 -0.53 -1.48 t-1.75 -0.92 l-1.62 -0.54 q-1.82 -0.62 -2.57 -1.55 t-0.75 -2.29 q0 -1.8 1.34 -2.93 t3.48 -1.15 z M217.94 5.84 l0 1.56 l-4.68 0 l0 12.6 l-1.68 0 l0 -12.6 l-4.68 0 l0 -1.56 l11.04 0 z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <form action="">
            <div class="border-2 rounded-md">
                <h1 class="border-b-2 p-2 text-2xl font-semibold">User Registration</h1>
                <!-- Profile Picture -->
                <div class="w-full flex flex-col items-center relative mt-3">
                    <img id="previewImage" class="w-16 h-16 rounded-full border object-cover object-center border-black" alt="" src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png">
                    <input class="hidden" type="file" id="imageInput">
                    <label for="imageInput" class="absolute bottom-0 translate-y-3 translate-x-[2px] rounded-full bg-white p-1"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g data-name="Layer 53">
                                    <path d="M22 9.25a.76.76 0 0 0-.75.75v6l-4.18-4.78a2.84 2.84 0 0 0-4.14 0l-2.87 3.28-.94-1.14a2.76 2.76 0 0 0-4.24 0l-2.13 2.57V6A3.26 3.26 0 0 1 6 2.75h8a.75.75 0 0 0 0-1.5H6A4.75 4.75 0 0 0 1.25 6v12a.09.09 0 0 0 0 .05A4.75 4.75 0 0 0 6 22.75h12a4.75 4.75 0 0 0 4.74-4.68V10a.76.76 0 0 0-.74-.75Zm-4 12H6a3.25 3.25 0 0 1-3.23-3L6 14.32a1.29 1.29 0 0 1 1.92 0l1.51 1.82a.74.74 0 0 0 .57.27.86.86 0 0 0 .57-.26l3.44-3.94a1.31 1.31 0 0 1 1.9 0l5.27 6A3.24 3.24 0 0 1 18 21.25Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path d="M4.25 7A2.75 2.75 0 1 0 7 4.25 2.75 2.75 0 0 0 4.25 7Zm4 0A1.25 1.25 0 1 1 7 5.75 1.25 1.25 0 0 1 8.25 7ZM16 5.75h2.25V8a.75.75 0 0 0 1.5 0V5.75H22a.75.75 0 0 0 0-1.5h-2.25V2a.75.75 0 0 0-1.5 0v2.25H16a.75.75 0 0 0 0 1.5Z" fill="#000000" opacity="1" data-original="#000000"></path>
                                </g>
                            </g>
                        </svg></label>
                    <script>
                        const imageInput = document.getElementById('imageInput');
                        const previewImage = document.getElementById('previewImage');

                        function previewSelectedImage() {
                            const file = imageInput.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.readAsDataURL(file);
                                reader.onload = function(e) {
                                    previewImage.src = e.target.result;
                                }
                            }
                        }
                        imageInput.addEventListener('change', previewSelectedImage);
                    </script>
                </div>
                <div class="grid grid-cols-1 p-5 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1 ">
                        <label for="fname" class="require font-semibold">First Name :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="fname" id="fname">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter first name !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1 ">
                        <label for="name" class="require font-semibold">Last Name :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="name" id="name">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter last name !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email" class="require font-semibold">Email :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="email" name="email" id="email">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter email !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1 relative" x-data="{ showPassword: false }">
                        <label for="password" class="require font-semibold">Password :</label>
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-indigo-500 hover:transition" x-bind:type="showPassword ? 'text' : 'password'" type="password" name="password" id="password">
                        <span class="absolute top-10 right-2.5 cursor-pointer" x-on:click="showPassword = !showPassword"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                            </svg></span>
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter password !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1 md:col-span-2">
                        <label for="username" class="require font-semibold">Address :</label>
                        <textarea class="h-full rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition resize-none" name="address" id="address"></textarea>
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter address !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username" class="require font-semibold">Mobile No :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="tel" name="mobileno" id="mobileno" maxlength="10">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter mobile number !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username" class="require font-semibold">State :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="state" id="state">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter state !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username" class="require font-semibold">City :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="city" id="city">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter city !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username" class="require font-semibold">Pincode :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="tel" name="pincode" id="pincode" maxlength="6">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter Pincode !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <button class="bg-indigo-500 font-semibold h-10 w-72 text-lg rounded-md text-white hover:bg-indigo-600 hover:transition">Register</button>
                </div>
            </div>
        </form>
        <div class="flex flex-col items-center gap-2 mt-5">
            <a class="underline font-semibold" href="../authentication/vendor_auth/vendor_register.php">Become a Vendor</a>
            <a class="underline font-semibold" href="login.php">Already a member? Login</a>
        </div>
    </div>
</body>

</html>
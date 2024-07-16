<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- alpinejs CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favicon.png">

    <style>
        .require::after {
            content: "*";
            color: #ff1a1a;
            margin-left: 6px;
            font-size: 18px;
        }
    </style>
</head>

<body class="flex justify-center items-center h-[100vh] p-2">
    <div class="w-96">
        <!-- header -->
        <div class="p-2 flex items-center justify-center">
            <img class="translate-x-3 translate-y-2" src="../src/logo/logo3.svg" alt="logo">
            <div>
                <svg width="175.99999999999994" height="113.51713468280346" viewBox="0 0 355 101.76409801109908" class="looka-1j8o68f">
                    <defs id="SvgjsDefs2249"></defs>
                    <g id="SvgjsG2250" featurekey="k6v3K5-0" transform="matrix(3.263098946758052,0,0,3.263098946758052,1.0842826642604835,-11.576542400576212)" fill="#000000">
                        <path d="M10.34 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M16.78 15.879999999999999 l0 4.12 l-2.04 0 l0 -10.36 l2.04 0 l0 4.14 q0.54 -0.26 1.22 -0.26 q0.4 0 1.42 0.14 q1.16 0.16 1.7 0.16 q0.76 0 1.3 -0.26 l0 -3.92 l2.04 0 l0 10.36 l-2.04 0 l0 -4.34 q-0.52 0.26 -1.22 0.26 q-0.54 0 -1.6 -0.14 q-1.02 -0.14 -1.52 -0.14 q-0.74 0 -1.3 0.24 z M38.34 14.74 q0 -1.1 -0.6 -1.9 q-0.52 -0.7 -1.46 -1.08 q-0.86 -0.34 -1.9 -0.34 t-1.92 0.36 q-0.94 0.38 -1.46 1.12 q-0.58 0.8 -0.58 1.92 t0.6 1.92 q0.52 0.72 1.46 1.12 q0.88 0.36 1.9 0.36 t1.92 -0.4 q0.92 -0.42 1.46 -1.18 q0.58 -0.82 0.58 -1.9 z M40.5 14.719999999999999 q0 1.7 -0.9 3.02 q-0.82 1.22 -2.26 1.92 q-1.38 0.66 -2.98 0.66 t-2.98 -0.66 q-1.42 -0.68 -2.24 -1.88 q-0.88 -1.32 -0.88 -3 t0.9 -2.98 q0.82 -1.2 2.26 -1.86 q1.38 -0.64 2.98 -0.64 t2.96 0.6 q1.42 0.64 2.24 1.82 q0.9 1.28 0.9 3 z M46.339999999999996 11.7 l0 3.1 q0.62 -0.36 1.52 -0.5 q0.68 -0.1 1.74 -0.1 l0.92 0 q0.84 0 1.18 -0.24 q0.46 -0.28 0.46 -1.06 q0 -0.7 -0.5 -0.98 q-0.38 -0.22 -1.14 -0.22 l-4.18 0 z M46.339999999999996 20 l-2.04 0 l0 -10.36 l6.58 0 q1 0 1.76 0.4 t1.19 1.15 t0.43 1.73 q0 1.54 -1 2.44 t-2.74 0.9 l-0.92 0 q-1.38 0 -2 0.12 q-0.56 0.1 -1.26 0.48 l0 3.14 z M58.1 7.18 l-1.74 -2.1 l2.82 0 l9.58 11.4 l0 -11.4 l2.2 0 l0 14.92 l-2.16 0 l-8.56 -10.26 l0 10.26 l-2.14 0 l0 -12.82 z M77.6 16.28 l0 1.64 l6.5 0 l0 2.08 l-8.54 0 l0 -10.36 l8.16 0 l0 2.06 l-6.12 0 l0 2.52 q0.62 -0.36 1.5 -0.5 q0.68 -0.1 1.74 -0.1 l1.52 0 l0 2.06 l-1.52 0 q-1.38 0 -2 0.12 q-0.54 0.1 -1.24 0.48 z M95.94 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M108.46 11.7 l-3.9 0 l0 8.3 l-2.06 0 l0 -8.3 l-3.76 0 l0 -2.06 l9.72 0 l0 2.06 z"></path>
                    </g>
                    <g id="SvgjsG2251" featurekey="SbIu4p-0" transform="matrix(1.664253779132007,0,0,1.664253779132007,19.070915348544332,67.87988925861347)" fill="#00ff00">
                        <path d="M6.08 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M5.84 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M6.36 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M20.0615 5.84 l0 8.52 q0 2.16 0.92 3.28 t2.74 1.16 q1.82 -0.02 2.73 -1.15 t0.93 -3.21 l0 -8.6 l1.68 0 l0 8.82 q0 2.7 -1.4 4.19 t-3.94 1.51 q-2.5 0 -3.91 -1.51 t-1.43 -4.21 l0 -8.8 l1.68 0 z M36.803000000000004 5.84 l3.98 6.4 l4.1 -6.4 l2.02 0 l-5.28 8.06 l0 6.1 l-1.68 0 l0 -6.1 l-5.28 -8.06 l2.14 0 z M66.52600000000001 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M66.286 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M66.80600000000001 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M87.7875 5.84 l0 1.56 l-7.22 0 l0 4.44 l6.74 0 l0 1.56 l-6.74 0 l0 5.04 l7.58 0 l0 1.56 l-9.26 0 l0 -14.16 l8.9 0 z M98.96900000000001 5.48 q2.58 0 3.96 1.66 l-1.38 1.2 q-0.8 -1.26 -2.58 -1.3 q-1.34 0 -2.18 0.64 t-0.84 1.74 q0 0.96 0.64 1.52 t2.4 1.1 q2.28 0.66 3.23 1.61 t0.95 2.57 q0 1.88 -1.4 3 t-3.58 1.14 q-1.46 0 -2.6 -0.52 t-1.76 -1.44 l1.44 -1.18 q0.46 0.76 1.28 1.17 t1.74 0.41 q1.26 0 2.17 -0.71 t0.91 -1.75 q0 -0.94 -0.53 -1.48 t-1.75 -0.92 l-1.62 -0.54 q-1.82 -0.62 -2.57 -1.55 t-0.75 -2.29 q0 -1.8 1.34 -2.93 t3.48 -1.15 z M119.5305 5.84 l0 1.56 l-4.68 0 l0 12.6 l-1.68 0 l0 -12.6 l-4.68 0 l0 -1.56 l11.04 0 z"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="border-2 p-4 rounded-md">
            <h1 class="font-semibold text-2xl">Login</h1>
            <form action="">
                <div class="space-y-4 mt-4">
                    <div class="flex flex-col gap-y-1">
                        <label for="Username" class="require font-semibold">Username :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="username" id="username">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter username !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1 relative" x-data="{ showPassword: false }">
                        <label for="password" class="require font-semibold">Password :</label>
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-indigo-500 hover:transition" x-bind:type="showPassword ? 'text' : 'password'" type="password" name="password" id="password">
                        <span class="absolute top-[2.70rem] right-2.5" x-on:click="showPassword = !showPassword"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                            </svg></span>
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter password !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div>
                        <a href="" class="text-sm -translate-x-1 -translate-y-1 font-semibold tracking-wide flex justify-end underline">Forgot password?</a>
                    </div>
                    <div class="text-center">
                        <button class="bg-indigo-600 font-semibold py-1 h-10 w-full text-lg rounded-md text-white hover:bg-indigo-700 hover:transition">Login</button>
                    </div>
                    <div>
                        <a href="register.php" class="text-sm font-semibold tracking-wide flex justify-center underline">New Customer? Create account</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
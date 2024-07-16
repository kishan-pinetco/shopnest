<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

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
        }
    </style>
</head>

<body class="flex justify-center items-center h-[100vh]">
    <div class="lg:w-[45%]">
        <!-- header -->
        <div class="p-2 flex items-center justify-center gap-x-3">
            <svg version="1.1" viewBox="0 0 976 1000" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                <path transform="translate(270,273)" d="m0 0h52l14 3 14 7 7 8 5 8 5 15 5 32v3h338l9 3 6 5 3 6v16l-5 28-25 128-4 16-6 14-7 9-8 8-14 8-15 4-8 1h-224l-12-2-10-4-12-8-7-6-7-10-4-9-3-14-29-197-4-24-2-5-48-1-9-3-7-6-3-7v-10l3-7 5-5 4-3z" fill="#040404" />
                <path transform="translate(485,61)" d="m0 0h9l22 3 21 7 18 8 20 10 19 10 33 17 19 10 16 8 50 26 19 10 35 18 19 10 15 8 16 8 33 17 19 10 15 9 10 9 10 15 7 15 4 13 2 15 1 14v336l-2 25-5 17-7 16-10 13-11 10-14 9-29 15-45 23-23 12-35 18-38 20-38 19-19 10-60 31-31 16-26 10-11 3-17 2h-16l-19-3-15-5-19-8-17-9-16-8-15-8-16-8-62-32-15-8-16-8-15-8-16-8-15-8-16-8-15-8-16-8-15-8-38-19-20-11-10-8-9-8-10-14-7-16-4-15-2-16v-356l3-20 6-16 6-11 12-16 11-9 10-6 16-8 41-21 19-10 29-15 60-31 19-10 27-14 35-18 19-10 27-14 19-10 17-8 22-8 16-3zm-2 7-20 3-22 8-17 8-19 10-39 20-36 19-16 8-47 24-27 14-60 31-20 10-19 10-31 16-12 9-3 2v2l-4 2-8 11-8 16-4 13-3 22v347l3 23 5 15 6 11 11 14 10 8 18 10 15 8 32 16 60 31 40 21 32 16 60 31 19 10 35 18 17 9 25 10 16 4 6 1h23l18-3 20-8 25-12 39-20 54-28 16-8 23-12 27-14 41-21 23-12 15-8 38-19 19-10 15-8 12-9 7-8 9-14 6-16 3-17 1-13v-339l-3-26-6-18-6-11-8-10-11-10-11-7-56-29-45-23-52-27-39-20-60-31-62-32-15-7-19-7-16-3-7-1z" fill="#414141" />
                <path transform="translate(486,83)" d="m0 0 19 1 18 4 20 8 17 9 32 16 27 14 19 10 91 47 19 10 56 29 19 10 15 8 16 8 15 8 9 7 8 9 8 14 4 13 2 23v336l-1 18-4 15-7 14-9 11-13 10-29 15-64 33-64 33-97 50-64 33-22 10-12 4-13 2h-26l-16-4-17-7-48-24-19-10-35-18-19-10-20-10-19-10-39-20-35-18-19-10-47-24-23-12-11-7-12-11-8-12-6-16-2-11v-366l4-17 7-13 11-13 11-8 25-13 19-10 16-8 23-12 27-14 19-10 23-12 35-18 19-10 31-16 19-10 62-32 15-7 17-6 12-2zm0 6-20 3-21 8-23 11-19 10-39 20-27 14-62 32-62 32-45 23-42 22-11 6-9 7-7 7-8 14-5 15-1 8v356l3 16 8 16 7 9 7 7 13 8 17 9 38 19 19 10 15 8 36 18 19 10 35 18 33 17 62 32 29 15 23 11 16 6 12 2 17 1 22-3 22-9 19-9 19-10 62-32 23-12 20-10 19-10 45-23 23-12 27-14 19-10 16-8 19-10 12-6 11-8 7-7 9-14 5-14 1-5 1-17v-324l-1-25-3-14-9-17-12-12-13-8-15-8-16-8-15-8-16-8-29-15-17-9-16-8-15-8-16-8-15-8-16-8-15-8-16-8-15-8-16-8-15-8-16-8-15-8-16-8-20-9-15-5-18-3z" fill="#3E3E3E" />
                <path transform="translate(611,614)" d="m0 0 13 1 13 4 11 6 9 9 9 14 3 9 1 6v13l-4 16-6 10-9 10-10 7-11 4-13 2-15-1-14-5-12-9-6-7-8-16-3-10v-14l3-11 7-14 7-8 10-8 11-5z" fill="#060606" />
                <path transform="translate(420,614)" d="m0 0h10l12 3 14 7 6 5 8 10 6 13 3 12v10l-4 16-6 11-11 12-16 8-10 3-10 1-13-2-10-4-10-8-6-5-7-10-5-15-1-5v-13l3-11 7-14 7-9 10-7 11-5z" fill="#060606" />
            </svg>
            <div>
                <svg width="195.99999999999994" height="113.51713468280346" viewBox="0 0 355 101.76409801109908" class="looka-1j8o68f">
                    <defs id="SvgjsDefs2249"></defs>
                    <g id="SvgjsG2250" featurekey="k6v3K5-0" transform="matrix(3.263098946758052,0,0,3.263098946758052,1.0842826642604835,-11.576542400576212)" fill="#000000">
                        <path d="M10.34 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M16.78 15.879999999999999 l0 4.12 l-2.04 0 l0 -10.36 l2.04 0 l0 4.14 q0.54 -0.26 1.22 -0.26 q0.4 0 1.42 0.14 q1.16 0.16 1.7 0.16 q0.76 0 1.3 -0.26 l0 -3.92 l2.04 0 l0 10.36 l-2.04 0 l0 -4.34 q-0.52 0.26 -1.22 0.26 q-0.54 0 -1.6 -0.14 q-1.02 -0.14 -1.52 -0.14 q-0.74 0 -1.3 0.24 z M38.34 14.74 q0 -1.1 -0.6 -1.9 q-0.52 -0.7 -1.46 -1.08 q-0.86 -0.34 -1.9 -0.34 t-1.92 0.36 q-0.94 0.38 -1.46 1.12 q-0.58 0.8 -0.58 1.92 t0.6 1.92 q0.52 0.72 1.46 1.12 q0.88 0.36 1.9 0.36 t1.92 -0.4 q0.92 -0.42 1.46 -1.18 q0.58 -0.82 0.58 -1.9 z M40.5 14.719999999999999 q0 1.7 -0.9 3.02 q-0.82 1.22 -2.26 1.92 q-1.38 0.66 -2.98 0.66 t-2.98 -0.66 q-1.42 -0.68 -2.24 -1.88 q-0.88 -1.32 -0.88 -3 t0.9 -2.98 q0.82 -1.2 2.26 -1.86 q1.38 -0.64 2.98 -0.64 t2.96 0.6 q1.42 0.64 2.24 1.82 q0.9 1.28 0.9 3 z M46.339999999999996 11.7 l0 3.1 q0.62 -0.36 1.52 -0.5 q0.68 -0.1 1.74 -0.1 l0.92 0 q0.84 0 1.18 -0.24 q0.46 -0.28 0.46 -1.06 q0 -0.7 -0.5 -0.98 q-0.38 -0.22 -1.14 -0.22 l-4.18 0 z M46.339999999999996 20 l-2.04 0 l0 -10.36 l6.58 0 q1 0 1.76 0.4 t1.19 1.15 t0.43 1.73 q0 1.54 -1 2.44 t-2.74 0.9 l-0.92 0 q-1.38 0 -2 0.12 q-0.56 0.1 -1.26 0.48 l0 3.14 z M58.1 7.18 l-1.74 -2.1 l2.82 0 l9.58 11.4 l0 -11.4 l2.2 0 l0 14.92 l-2.16 0 l-8.56 -10.26 l0 10.26 l-2.14 0 l0 -12.82 z M77.6 16.28 l0 1.64 l6.5 0 l0 2.08 l-8.54 0 l0 -10.36 l8.16 0 l0 2.06 l-6.12 0 l0 2.52 q0.62 -0.36 1.5 -0.5 q0.68 -0.1 1.74 -0.1 l1.52 0 l0 2.06 l-1.52 0 q-1.38 0 -2 0.12 q-0.54 0.1 -1.24 0.48 z M95.94 10.6 l-1.38 1.6 q-1.1 -0.9 -3.08 -0.9 q-0.78 0 -1.44 0.34 t-0.66 0.78 q0 0.36 0.14 0.54 q0.18 0.26 0.64 0.36 q0.52 0.14 1.48 0.14 q2.08 0 3.28 0.46 q1.06 0.38 1.48 1.14 q0.34 0.62 0.34 1.58 q0 1.8 -1.5 2.76 q-1.42 0.92 -3.74 0.92 q-1.34 0 -2.59 -0.59 t-2.11 -1.61 l1.48 -1.5 l0.18 0.2 q0.42 0.44 0.68 0.68 q0.46 0.38 0.96 0.58 q0.62 0.24 1.4 0.24 q1.44 0 2.32 -0.44 t0.88 -1.24 q0 -0.68 -0.78 -0.92 q-0.7 -0.22 -2.42 -0.22 q-2 0 -3.06 -0.7 q-1.22 -0.76 -1.22 -2.38 q0 -0.92 0.6 -1.64 q0.56 -0.7 1.54 -1.09 t2.14 -0.39 q1.24 0 2.22 0.26 q1.16 0.3 2.22 1.04 z M108.46 11.7 l-3.9 0 l0 8.3 l-2.06 0 l0 -8.3 l-3.76 0 l0 -2.06 l9.72 0 l0 2.06 z"></path>
                    </g>
                    <g id="SvgjsG2251" featurekey="SbIu4p-0" transform="matrix(1.664253779132007,0,0,1.664253779132007,19.070915348544332,67.87988925861347)" fill="#6366f1">
                        <path d="M6.08 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M5.84 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M6.36 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M20.0615 5.84 l0 8.52 q0 2.16 0.92 3.28 t2.74 1.16 q1.82 -0.02 2.73 -1.15 t0.93 -3.21 l0 -8.6 l1.68 0 l0 8.82 q0 2.7 -1.4 4.19 t-3.94 1.51 q-2.5 0 -3.91 -1.51 t-1.43 -4.21 l0 -8.8 l1.68 0 z M36.803000000000004 5.84 l3.98 6.4 l4.1 -6.4 l2.02 0 l-5.28 8.06 l0 6.1 l-1.68 0 l0 -6.1 l-5.28 -8.06 l2.14 0 z M66.52600000000001 5.84 q2.24 0 3.46 0.91 t1.24 2.57 q0 1.22 -0.67 2.04 t-1.81 1.16 l0 0.04 q1.38 0.12 2.29 1.11 t0.91 2.37 q0 1.88 -1.42 2.91 t-4.04 1.05 l-4.28 0 l0 -14.16 l4.32 0 z M66.286 11.84 q1.54 0 2.34 -0.55 t0.8 -1.75 q0 -2.1 -2.96 -2.14 l-2.58 0 l0 4.44 l2.4 0 z M66.80600000000001 18.44 q1.52 0 2.43 -0.67 t0.91 -1.79 q0 -1.28 -0.9 -1.93 t-2.46 -0.65 l-2.9 0 l0 5.04 l2.92 0 z M87.7875 5.84 l0 1.56 l-7.22 0 l0 4.44 l6.74 0 l0 1.56 l-6.74 0 l0 5.04 l7.58 0 l0 1.56 l-9.26 0 l0 -14.16 l8.9 0 z M98.96900000000001 5.48 q2.58 0 3.96 1.66 l-1.38 1.2 q-0.8 -1.26 -2.58 -1.3 q-1.34 0 -2.18 0.64 t-0.84 1.74 q0 0.96 0.64 1.52 t2.4 1.1 q2.28 0.66 3.23 1.61 t0.95 2.57 q0 1.88 -1.4 3 t-3.58 1.14 q-1.46 0 -2.6 -0.52 t-1.76 -1.44 l1.44 -1.18 q0.46 0.76 1.28 1.17 t1.74 0.41 q1.26 0 2.17 -0.71 t0.91 -1.75 q0 -0.94 -0.53 -1.48 t-1.75 -0.92 l-1.62 -0.54 q-1.82 -0.62 -2.57 -1.55 t-0.75 -2.29 q0 -1.8 1.34 -2.93 t3.48 -1.15 z M119.5305 5.84 l0 1.56 l-4.68 0 l0 12.6 l-1.68 0 l0 -12.6 l-4.68 0 l0 -1.56 l11.04 0 z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <form action="">
            <div class="border-2 rounded-md">
                <h1 class="border-b-2 p-2 text-2xl font-semibold">Registration</h1>
                <div class="grid grid-cols-1 p-5 lg:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-1 ">
                        <label for="name" class="require font-semibold">Name :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="name" id="name">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter name !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email" class="require font-semibold">Email :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="email" name="email" id="email">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter email !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="username" class="require font-semibold">Username :</label>
                        <input class="h-12 rounded-md border-2 border-gray-300 hover:border-indigo-500 hover:transition" type="text" name="username" id="username">
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter username !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                    <div class="flex flex-col gap-1 relative">
                        <label for="password" class="require font-semibold">Password :</label>
                        <input class="h-12 rounded-md border-2 pr-10 border-gray-300 hover:border-indigo-500 hover:transition" type="password" name="password" id="password">
                        <span class="absolute top-10 right-2.5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                                <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                            </svg></span>
                        <p class="hidden text-sm font-medium translate-x-1 text-red-600">Please enter password !</p>
                        <!-- remove hidden class to show in <p> tag -->
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <button class="bg-indigo-600 font-semibold h-10 w-72 text-lg rounded-md text-white hover:bg-indigo-700 hover:transition">Register</button>
                </div>
            </div>
        </form>
        <div class="flex flex-col items-center gap-2 mt-5">
            <a class="underline font-semibold" href="">Become a Vendor</a>
            <a class="underline font-semibold" href="login.php">Already a member? Login</a>
        </div>
    </div>
</body>

</html>
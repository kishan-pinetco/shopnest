<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- alpinejs CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@latest/dist/cdn.min.js" defer></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">
    <style>
        .outfit {
            font-family: "Outfit", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        #forgotPass-container {
            transition: height 0.5s ease-in-out;
        }

        .require:after {
            content: " *";
            font-weight: bold;
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body class="outfit h-[100vh] flex flex-col justify-center items-center gap-3">
    <div class="p-2 flex items-center justify-center">
        <a class="flex items-center mb-2" href="/shopnest/index.php">
            <!-- icon logo div -->
            <div>
                <img class="w-7 sm:w-12 mt-0.5" src="../../../shopnest/src/logo/black_cart_logo.svg" alt="">
            </div>
            <!-- text logo -->
            <div>
                <img class="w-16 sm:w-32" src="../../../shopnest/src/logo/black_text_logo.svg" alt="">
            </div>
        </a>
    </div>
    <div style="height:300px; position: relative;" class="w-96 border-2 border-gray-300 space-y-3 rounded-xl h-fit bg-white overflow-hidden" id="forgotPass-container">
        <h1 class="text-2xl py-2 px-4 font-semibold border-b-2 border-gray-300">Forgot Password</h1>
        <!-- Form 1: Forgot Email -->
        <form action="" id="form1" class="flex flex-col items-center gap-3 absolute transition-all duration-500" style="left:30px; top:70px;">
            <div class="flex flex-col">
                <label for="forgotEmail" class="require">Email:</label>
                <input type="email" name="forgotEmail" id="forgotEmail" class="w-80 mt-2 h-12 rounded-md border-2 border-gray-400 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition">
                <smal class="text-red-500 text-sm mt-0.5">Error!</small>
            </div>
            <button id="next1" type="button" class="mt-3 bg-gray-700 hover:bg-gray-800 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Next</button>
        </form>

        <!-- Form 2: OTP -->
        <form action="" id="form2" class="flex flex-col items-center absolute transition-all duration-500" style="left: 450px; top: 70px;">
            <div class="flex flex-col">
                <label for="OTP" class="require">OTP:</label>
                <div class="flex space-x-3 mt-2 -translate-x-0.5" id="otp-container">
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                    <input type="text" maxlength="1" class="otp-box w-11 h-11 text-center text-lg rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0" autocomplete="off" />
                </div>
            </div>
            <small class="w-full text-red-500 text-sm mt-0.5">Error!</small>
            <div class="space-x-5 mt-7">
                <button id="back1" type="button" class="bg-gray-700 hover:bg-gray-800 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Back</button>
                <button id="next2" type="button" class="bg-gray-700 hover:bg-gray-800 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Next</button>
            </div>
        </form>


        <!-- Form 3: New Password -->
        <form action="" id="form3" class="flex flex-col items-center gap-3 absolute transition-all duration-500" style="left: 450px; top:60px;">
            <div class="flex flex-col gap-2">
                <div class="relative" x-data="{newPass: false}">
                    <label for="newPass" class="require">New Password:</label>
                    <input type="password" name="newPass" id="newPass" x-bind:type="newPass ? 'text' : 'password'" class="w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-10 cursor-pointer" x-on:click="newPass = !newPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small class="text-red-500 text-sm mt-0.5">Error!</small>
                </div>
                <div class="relative" x-data="{confirmPass: false}">
                    <label for="confirmPass" class="require">Confirm Password:</label>
                    <input type="password" name="confirmPass" id="confirmPass" x-bind:type="confirmPass ? 'text' : 'password'" class="w-80 mt-2 h-12 pr-10 rounded-md border-2 border-gray-300 hover:border-gray-500 focus:border-gray-700 focus:ring-0 hover:transition" autocomplete="off">
                    <span class="absolute top-[2.8rem] right-10 cursor-pointer" x-on:click="confirmPass = !confirmPass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path>
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path>
                        </svg>
                    </span>
                    <small class="text-red-500 text-sm mt-0.5">Error!</small>
                </div>
            </div>
            <div class="space-x-5 -translate-x-3">
                <button id="back2" type="button" class="bg-gray-700 hover:bg-gray-800 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Back</button>
                <button id="submit" class="bg-green-600 hover:bg-green-700 px-2 w-32 text-white tracking-wide h-10 rounded-tl-xl rounded-br-xl">Submit</button>
            </div>
        </form>

        <!-- Return to Login Link -->
        <div class="text-center absolute bottom-0 w-full py-2">
            <a href="login.html" class="inline-flex items-center gap-1">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 447.243 447.243" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M420.361 192.229a31.967 31.967 0 0 0-5.535-.41H99.305l6.88-3.2a63.998 63.998 0 0 0 18.08-12.8l88.48-88.48c11.653-11.124 13.611-29.019 4.64-42.4-10.441-14.259-30.464-17.355-44.724-6.914a32.018 32.018 0 0 0-3.276 2.754l-160 160c-12.504 12.49-12.515 32.751-.025 45.255l.025.025 160 160c12.514 12.479 32.775 12.451 45.255-.063a32.084 32.084 0 0 0 2.745-3.137c8.971-13.381 7.013-31.276-4.64-42.4l-88.32-88.64a64.002 64.002 0 0 0-16-11.68l-9.6-4.32h314.24c16.347.607 30.689-10.812 33.76-26.88 2.829-17.445-9.019-33.88-26.464-36.71z" fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                    </g>
                </svg>
                Return to Login
            </a>
        </div>
    </div>

    <!-- script for OTP -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const otpInputs = document.querySelectorAll("#otp-container .otp-box");

            otpInputs.forEach((input, index) => {
                let timeoutId;

                // Function to handle input and transition
                const handleInput = (e) => {
                    const value = e.target.value;

                    // Allow only numeric input
                    if (isNaN(value) || value.length > 1) {
                        e.target.value = "";
                        return;
                    }

                    clearTimeout(timeoutId);

                    // Move to the next input if a number is entered
                    if (value.length === 1 && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }

                    // Show the text form for a few seconds
                    timeoutId = setTimeout(() => {
                        e.target.type = "password";
                    }, 500);

                    // Ensure the input box is in text form if a value is entered
                    e.target.type = "text";
                };

                const handleFocus = (e) => {
                    // Clear previous timeout when an input is focused
                    clearTimeout(timeoutId);

                    // Show text form immediately when focused
                    e.target.type = "text";
                };

                // Handle input and focus events
                input.addEventListener("input", handleInput);
                input.addEventListener("focus", handleFocus);

                // Handle backspace to move to the previous input
                input.addEventListener("keydown", (e) => {
                    if (e.key === "Backspace" && input.value === "" && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });

                // Prevent non-numeric input (allow only numbers and backspace)
                input.addEventListener("keypress", (e) => {
                    if (e.key < "0" || e.key > "9") {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>


    <script>
        let form1 = document.getElementById('form1');
        let form2 = document.getElementById('form2');
        let form3 = document.getElementById('form3');

        let next1 = document.getElementById('next1');
        let next2 = document.getElementById('next2');
        let back1 = document.getElementById('back1');
        let back2 = document.getElementById('back2');
        let forgotPassContainer = document.getElementById('forgotPass-container');

        // Function to set container height
        function adjustContainerHeight() {
            if (form3.style.left === "30px") {
                forgotPassContainer.style.height = "390px"; // Set to 355px for form 3
            } else {
                forgotPassContainer.style.height = "300px"; // Set to 300px for other forms
            }
        }

        next1.onclick = function() {
            form1.style.left = "-450px";
            form2.style.left = "30px";
            adjustContainerHeight();
        }

        back1.onclick = function() {
            form1.style.left = "30px";
            form2.style.left = "450px";
            adjustContainerHeight();
        }

        next2.onclick = function() {
            form2.style.left = "-450px";
            form3.style.left = "30px";
            adjustContainerHeight();
        }

        back2.onclick = function() {
            form2.style.left = "30px";
            form3.style.left = "450px";
            adjustContainerHeight();
        }
    </script>
</body>

</html>
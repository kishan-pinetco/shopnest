<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Script  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- pdf download link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- link to css -->
    <link rel="stylesheet" href="">

    <!-- favicon -->
    <link rel="shortcut icon" href="../src/logo/favIcon.svg">

    <!-- title -->
    <title>Invoice</title>
    
</head>
<body style="font-family: 'Outfit', sans-serif;">
    <div id="invoice" class="max-w-4xl mx-auto p-8 bg-white shadow-xl rounded-lg mt-10">
        <!-- Header -->
        <header class="flex items-center justify-between flex-wrap gap-x-12 gap-y-5 border-b border-gray-200 pb-4 mb-8">
            <h1 class="text-4xl font-extrabold text-gray-800">Invoice</h1>
            <div class="text-sm text-gray-600">
                <p class="font-semibold text-gray-900">Acme Corporation</p>
                <p>456 Business Rd</p>
                <p>Metropolis, NY, 10001</p>
            </div>
        </header>

        <!-- Product Details -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Product Details</h2>
            <div class="flex flex-wrap items-center p-4 bg-gray-50 border gap-y-5 border-gray-300 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/120" alt="Product Image" class="w-32 h-32 object-cover rounded-md border border-gray-300 mr-6">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Awesome Product</h3>
                    <p class="text-gray-700">Price: <span class="font-semibold">$49.99</span></p>
                    <p class="text-gray-700">Color: <span class="font-semibold">Blue</span></p>
                    <p class="text-gray-700">Size: <span class="font-semibold">Medium</span></p>
                </div>
            </div>
        </section>

        <!-- User Information -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">User Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm space-y-4">
                    <p class="text-gray-700"><span class="font-semibold">First Name:</span> John</p>
                    <p class="text-gray-700"><span class="font-semibold">Last Name:</span> Doe</p>
                    <p class="text-gray-700"><span class="font-semibold">Email:</span> john.doe@example.com</p>
                </div>
                <div class="p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm space-y-4">
                    <p class="text-gray-700"><span class="font-semibold">Mobile Number:</span> (123) 456-7890</p>
                    <p class="text-gray-700"><span class="font-semibold">Address:</span> 789 Elm St</p>
                    <p class="text-gray-700"><span class="font-semibold">State:</span> NY</p>
                    <p class="text-gray-700"><span class="font-semibold">City:</span> Metropolis</p>
                    <p class="text-gray-700"><span class="font-semibold">Pincode:</span> 10001</p>
                </div>
            </div>
        </section>

        <!-- Payment Type -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Payment Type</h2>
            <div class="p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm border-l-4 border-l-indigo-600">
                <p class="text-gray-700 text-sm">Payment Method: <span class="font-semibold">Credit Card</span></p>
            </div>
        </section>

        <!-- Total Price -->
        <section class="border-t border-gray-200 pt-6">
            <div class="flex justify-between text-xl font-semibold text-gray-800 mb-2">
                <span>Total Price:</span>
                <span>$59.99</span> <!-- Price includes $10 shipping -->
            </div>
            <p class="text-gray-600 text-sm">Includes $10 shipping cost</p>
        </section>

        <!-- Download PDF Button -->
        <div class="mt-8">
            <button id="downloadPdf" class="bg-indigo-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Download PDF
            </button>
        </div>
    </div>

    <script>
        document.getElementById('downloadPdf').addEventListener('click', () => {
            const element = document.getElementById('invoice');
            const btn = document.getElementById('downloadPdf');
            
            // Hide the button
            btn.style.display = 'none';
            
            // Create PDF from the HTML
            html2pdf().from(element).toPdf().get('pdf').then(function(pdf) {
                // Show the button again
                btn.style.display = 'block';
                pdf.save('invoice.pdf');
            });
        });
    </script>
</body>
</html>
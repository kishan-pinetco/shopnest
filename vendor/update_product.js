// add more keywords
document.addEventListener('DOMContentLoaded', function() {
    let keywordContainer = document.getElementById('keyword-container');
    let keywordsData = document.getElementById('keyword-data').value;
    let keywordsArray = JSON.parse(keywordsData);

    function createKeywordItem(keyword) {
        let keywordItem = document.createElement('div');
        keywordItem.className = 'flex items-center relative mb-2';

        let keywordInput = document.createElement('input');
        keywordInput.type = 'text';
        keywordInput.name = 'keyword[]';
        keywordInput.placeholder = 'Enter keyword';
        keywordInput.className = 'relative h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600';
        keywordInput.value = keyword;

        let removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'p-2 text-red-500 bg-red-100 rounded focus:outline-none absolute right-0.5 top-0.5';
        removeButton.setAttribute('aria-label', 'Remove');
        removeButton.innerHTML = `
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        `;
        removeButton.addEventListener('click', function() {
            keywordContainer.removeChild(keywordItem);
        });

        keywordItem.appendChild(keywordInput);
        keywordItem.appendChild(removeButton);

        return keywordItem;
    }

    keywordsArray.forEach(keyword => {
        let keywordItem = createKeywordItem(keyword);
        keywordContainer.appendChild(keywordItem);
    });

    document.getElementById('add-keyword').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default button behavior
        let keywordItem = createKeywordItem('');
        keywordContainer.appendChild(keywordItem);
    });

    // Prevent form submission when pressing Enter in any input field
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent Enter from triggering form submit or other default actions
            }
        });
    });
});



const suggestionsData = [
    'XS (Extra Small)', 'S (Small)', 'M (Medium)', 'L (Large)', 'XL (Extra Large)', 'XXL (Double Extra Large)', 'XXXL (Triple Extra Large)',
    '4 UK', '5 UK', '6 UK', '7 UK', '8 UK', '9 UK', '10 UK', '11 UK', '12 UK',
    '32 inches', '40 inches', '43 inches', '50 inches', '55 inches', '65 inches', '75 inches', '85 inches',
    '100L', '200L', '300L', '400L', '500L', '600L',
    '6 kg', '7 kg', '8 kg', '9 kg', '10 kg', '12 kg',
    '16GB', '32GB', '64GB', '128GB', '256GB', '512GB', '1TB', '2TB',
    '2GB - 32GB', '4GB - 64GB', '6GB - 128GB', '8GB - 256GB', '12GB - 512GB', '16GB - 1TB',
    '4GB - 128GB', '8GB - 256GB', '8GB - 1TB', '16GB - 512GB', '16GB - 2TB', '32GB - 1TB', '32GB - 2TB', '64GB - 1TB', '64GB - 2TB',
    '3GB - 64GB', '4GB - 256GB', '6GB - 512GB', '8GB - 1TB'
];

document.addEventListener('DOMContentLoaded', () => {
    const sizeContainer = document.getElementById('size-container');

    // Function to attach input event listeners for suggestions
    function attachSuggestionListeners() {
        document.querySelectorAll('input[name="size[]"]').forEach(input => {
            const suggestionsContainer = input.nextElementSibling; // Get the suggestions container

            // Handle input event for suggestions
            input.addEventListener('input', () => {
                const query = input.value.toLowerCase();
                suggestionsContainer.innerHTML = ''; // Clear existing suggestions
                if (query) {
                    const filteredSuggestions = suggestionsData.filter(item => item.toLowerCase().includes(query));
                    if (filteredSuggestions.length) {
                        filteredSuggestions.forEach(suggestion => {
                            const suggestionItem = document.createElement('div');
                            suggestionItem.className = 'p-2 cursor-pointer hover:bg-gray-100';
                            suggestionItem.textContent = suggestion;
                            suggestionItem.addEventListener('click', () => {
                                input.value = suggestion; // Set the input value to the clicked suggestion
                                suggestionsContainer.innerHTML = '';
                                suggestionsContainer.classList.add('hidden');
                            });
                            suggestionsContainer.appendChild(suggestionItem);
                        });
                        suggestionsContainer.classList.remove('hidden');
                    } else {
                        suggestionsContainer.classList.add('hidden');
                    }
                } else {
                    suggestionsContainer.classList.add('hidden');
                }
            });
        });
    }

    // Initial attachment of suggestion listeners
    attachSuggestionListeners();

    document.getElementById('add-size').addEventListener('click', function(event) {
        event.preventDefault();

        const sizeInputs = sizeContainer.querySelectorAll('input[name="size[]"]');
        const mrpInputs = sizeContainer.querySelectorAll('input[name="MRP2[]"]');
        const priceInputs = sizeContainer.querySelectorAll('input[name="your_price2[]"]');

        // Check if all size, MRP, and Price input fields are filled
        for (const input of sizeInputs) {
            if (!input.value || ['-', 'none', 'NONE', 'None'].includes(input.value)) {
                alert("Please enter valid size values (not empty, '-' or 'none').");
                return; // Exit if any input is empty or invalid
            }
        }

        for (const input of mrpInputs) {
            if (!input.value) {
                alert("Please fill in all MRP fields before adding more sizes.");
                return; // Exit if any MRP input is empty
            }
        }

        for (const input of priceInputs) {
            if (!input.value) {
                alert("Please fill in all Your Price fields before adding more sizes.");
                return; // Exit if any Price input is empty
            }
        }

        // Create a new size item with inputs
        const sizeItem = document.createElement('div');
        sizeItem.className = 'size-item mb-4 relative';

        const sizeInput = document.createElement('input');
        sizeInput.type = 'text';
        sizeInput.name = 'size[]';
        sizeInput.placeholder = 'Enter size';
        sizeInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 focus:ring-gray-600 focus:border-gray-600';

        const suggestionsContainer = document.createElement('div');
        suggestionsContainer.className = 'absolute bg-white border border-gray-300 mt-1 z-10 w-full rounded-lg hidden';

        // Append inputs and suggestions container
        sizeItem.appendChild(sizeInput);
        sizeItem.appendChild(suggestionsContainer);

        const mrpInput = document.createElement('input');
        mrpInput.type = 'text';
        mrpInput.name = 'MRP2[]';
        mrpInput.placeholder = 'Enter MRP';
        mrpInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600';

        const priceInput = document.createElement('input');
        priceInput.type = 'text';
        priceInput.name = 'your_price2[]';
        priceInput.placeholder = 'Enter Your Price';
        priceInput.className = 'h-10 border rounded px-4 w-full bg-gray-50 mt-2 focus:ring-gray-600 focus:border-gray-600';

        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'remove-size p-2 text-red-500 bg-red-100 rounded focus:outline-none mt-2';
        removeButton.innerHTML = 'Remove';

        removeButton.addEventListener('click', () => {
            sizeItem.remove();
        });

        // Append MRP, Price, and Remove button to the size item
        sizeItem.appendChild(mrpInput);
        sizeItem.appendChild(priceInput);
        sizeItem.appendChild(removeButton);

        // Append the new size item to the container
        sizeContainer.appendChild(sizeItem);

        // Attach suggestion listeners for the new input
        attachSuggestionListeners();
    });
});

// Close suggestions if clicking outside
document.addEventListener('click', (event) => {
    if (!event.target.closest('.size-item')) {
        document.querySelectorAll('.suggestions-container').forEach(container => {
            container.classList.add('hidden');
        });
    }
});


// upload images
function setupImagePreview(imageInputId, previewImageId, imageLabelId) {
    const imageInput = document.getElementById(imageInputId);
    const previewImage = document.getElementById(previewImageId);
    const imageLabel = document.getElementById(imageLabelId);
    function previewSelectedImage() {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                previewImage.src = e.target.result;
            };
        }
    }

    imageInput.addEventListener('change', previewSelectedImage);
}
// Setup for each image input
setupImagePreview('imageInput1', 'previewImage1', 'imageLabel1');
setupImagePreview('imageInput2', 'previewImage2', 'imageLabel2');
setupImagePreview('imageInput3', 'previewImage3', 'imageLabel3');
setupImagePreview('imageInput4', 'previewImage4', 'imageLabel4');

// Reusable function to handle image previewing
function setupImagePreview(inputId, previewId, labelId) {
    const imageInput = document.getElementById(inputId);
    const previewImage = document.getElementById(previewId);
    const imageLabel = document.getElementById(labelId);

    function previewImageFile() {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }

    imageInput.addEventListener('change', previewImageFile);
}

// Setup for each cover image
setupImagePreview('CoverimageInput1', 'previewCoverImage1', 'CoverimageLabel1');
setupImagePreview('CoverimageInput2', 'previewCoverImage2', 'CoverimageLabel2');
setupImagePreview('CoverimageInput3', 'previewCoverImage3', 'CoverimageLabel3');
setupImagePreview('CoverimageInput4', 'previewCoverImage4', 'CoverimageLabel4');
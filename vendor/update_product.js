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
        keywordInput.className = 'relative h-10 border rounded px-4 w-full bg-gray-50';
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
    const existingSizesData = document.getElementById('size-data');
    let existingSizes = [];

    if (existingSizesData) {
        try {
            existingSizes = JSON.parse(existingSizesData.value);
            existingSizes.forEach((size, index) => {
                addSizeItem(size.size, size.mrp || '', size.price || '', index === 0);
            });
        } catch (error) {
            console.error("Failed to parse JSON:", error);
        }
    }

    if (existingSizes.length === 0) {
        addSizeItem('', '', '', true);
    }

    document.getElementById('add-size').addEventListener('click', (event) => {
        event.preventDefault();
        addSizeItem('', '', '', false);
    });

    function addSizeItem(size, mrp, yourPrice, isFirst) {
        const sizeItem = document.createElement('div');
        sizeItem.className = 'size-item mb-4 relative';

        const sizeInput = createInput('text', 'size[]', 'Enter size', size);
        const suggestionsContainer = document.createElement('div');
        suggestionsContainer.className = 'absolute bg-white border border-gray-300 mt-1 z-10 w-full rounded-lg hidden';

        sizeInput.addEventListener('input', () => {
            handleSuggestions(sizeInput, suggestionsContainer);
        });

        document.addEventListener('click', (event) => {
            if (!sizeItem.contains(event.target)) {
                suggestionsContainer.classList.add('hidden');
            }
        });

        sizeItem.appendChild(sizeInput);
        sizeItem.appendChild(suggestionsContainer);

        if (!isFirst) {
            ['MRP2[]', 'your_price2[]'].forEach((name, index) => {
                const input = createInput('text', name, index === 0 ? 'Enter MRP' : 'Enter Your Price', index === 0 ? mrp : yourPrice);
                sizeItem.appendChild(input);
            });
            const removeButton = createRemoveButton(sizeItem);
            sizeItem.appendChild(removeButton);
        }

        sizeContainer.appendChild(sizeItem);
    }

    function createInput(type, name, placeholder, value) {
        const input = document.createElement('input');
        input.type = type;
        input.name = name;
        input.placeholder = placeholder;
        input.className = 'h-10 border rounded px-4 w-full bg-gray-50 mt-2';
        input.value = value;
        return input;
    }

    function createRemoveButton(sizeItem) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'p-2 text-red-500 bg-red-100 rounded focus:outline-none mt-2';
        button.innerHTML = 'Remove';
        button.addEventListener('click', () => {
            sizeItem.remove();
        });
        return button;
    }

    function handleSuggestions(input, suggestionsContainer) {
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
                        input.value = suggestion;
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
    }
});






// color suggetions
const colors  = [
    "Amber", "Almond", "Aqua", "Apricot", "Ash", "Beige", "Black", "Blush", "Bone", "Bordeaux",
    "Brown", "Burgundy", "Burnt Orange", "Cabernet", "Canary", "Champagne", "Charcoal", "Chocolate",
    "Cocoa", "Coffee", "Copper", "Cordovan", "Coral", "Cream", "Crimson", "Cobalt", "Cyan",
    "Deep Teal", "Ebony", "Eggplant", "Eggshell", "Emerald", "Fuchsia", "Forest Green", "Gold",
    "Gold Leaf", "Goldenrod", "Graphite", "Gray", "Green", "Hot Pink", "Ivory", "Khaki",
    "Lavender", "Lemon", "Lilac", "Lime", "Maroon", "Magenta", "Mint", "Midnight", "Mustard",
    "Navy", "Olive", "Onyx", "Orange", "Orchid", "Peach", "Pearl", "Periwinkle", "Plum",
    "Powder Blue", "Purple", "Raspberry", "Red", "Rose", "Rust", "Salmon", "Sand", "Scarlet",
    "Seafoam", "Sea Green", "Silver", "Sky Blue", "Slate", "Steel", "Tan", "Tangerine", "Teal",
    "Thistle", "Turquoise", "Violet", "White", "Wine", "Wintergreen", "Wisteria", "Yellow"
];


const colorInput = document.getElementById('colorInput');
const colorSuggestions = document.getElementById('colorSuggestions');

colorInput.addEventListener('input', () => {
    console.log("step;")
    const query = colorInput.value.toLowerCase();
    colorSuggestions.innerHTML = ''; // Clear existing suggestions
    if (query) {
        const filteredColors = colors.filter(color => color.toLowerCase().includes(query));
        if (filteredColors.length) {
            filteredColors.forEach(color => {
                const colorItem = document.createElement('div');
                colorItem.className = 'p-2 cursor-pointer hover:bg-gray-100';
                colorItem.textContent = color;
                colorItem.addEventListener('click', () => {
                    colorInput.value = color;
                    colorSuggestions.innerHTML = '';
                    colorSuggestions.classList.add('hidden');
                });
                colorSuggestions.appendChild(colorItem);
            });
            colorSuggestions.classList.remove('hidden');
        } else {
            colorSuggestions.classList.add('hidden');
        }
    } else {
        colorSuggestions.classList.add('hidden');
    }
});

document.addEventListener('click', (event) => {
    if (!colorSuggestions.contains(event.target) && event.target !== colorInput) {
        colorSuggestions.classList.add('hidden');
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
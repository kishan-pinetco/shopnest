// displaly error msg
function displayErrorMessage(message) {
    let EpopUp = document.getElementById('EpopUp');
    let errorMessage = document.getElementById('errorMessage');

    errorMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
    EpopUp.style.display = 'flex';
    EpopUp.style.opacity = '100';

    setTimeout(() => {
        EpopUp.style.display = 'none';
        EpopUp.style.opacity = '0';
    }, 700);
}

// displaly success msg
function displaySuccessMessage(message) {
    let SpopUp = document.getElementById('SpopUp');
    let successMessage = document.getElementById('successMessage');

    successMessage.innerHTML = '<span class="font-medium">' + message + '</span>';
    SpopUp.style.display = 'flex';
    SpopUp.style.opacity = '100';

    setTimeout(() => {
        SpopUp.style.display = 'none';
        SpopUp.style.opacity = '0';
        window.location.href = "view_products.php";
    }, 700);
}

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
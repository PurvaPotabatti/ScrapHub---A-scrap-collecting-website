<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Cart</title>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='css/add_to_cart.css'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
<style>
.btn-red {
    background-color: red !important;
}

</style>
</head>
<body>

<div class="container pb-5 mt-n2 mt-md-n3">
    <div class="row">
        <div class="col-xl-9 col-md-8">
            <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-secondary"><span>Products</span><a class="font-size-sm" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media d-block d-sm-flex text-center text-sm-left">
                    <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF0000/000000" alt="Product"></a>
                    <div class="media-body pt-3">
                        <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Calvin Klein Jeans Keds</a></h3>
                        <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                        <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Black</div>
                        <div class="font-size-lg text-primary pt-2">$125.00</div>
                    </div>
                </div>
                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                    <div class="form-group mb-2">
                        <label for="quantity1">Quantity</label>
                        <input class="form-control form-control-sm" type="number" id="quantity1" value="1">
                    </div>
                    <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>Update cart</button>
                    <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove</button>
					<!-- Inside each d-sm-flex justify-content-between my-4 pb-4 border-bottom -->
                    <button class="btn btn-outline-primary btn-sm btn-block mb-2 upload-image-button" type="button">
                        Upload Image
                    </button>
	
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media d-block d-sm-flex text-center text-sm-left">
                    <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/1E90FF/000000" alt="Product"></a>
                    <div class="media-body pt-3">
                        <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">The North Face Hoodie</a></h3>
                        <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>XL</div>
                        <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Gray</div>
                        <div class="font-size-lg text-primary pt-2">$134.00</div>
                    </div>
                </div>
                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                    <div class="form-group mb-2">
                        <label for="quantity2">Quantity</label>
                        <input class="form-control form-control-sm" type="number" id="quantity2" value="1">
                    </div>
                    <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>Update cart</button>
                    <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove</button>
						<button class="btn btn-outline-primary btn-sm btn-block mb-2 upload-image-button" type="button">
                        Upload Image
                    </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media d-block d-sm-flex text-center text-sm-left">
                    <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF8C00/000000" alt="Product"></a>
                    <div class="media-body pt-3">
                        <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Medicine Chameleon Sunglasses</a></h3>
                        <div class="font-size-sm"><span class="text-muted mr-2">Lenses:</span>Chameleon</div>
                        <div class="font-size-sm"><span class="text-muted mr-2">Frame:</span>Gray / Black</div>
                        <div class="font-size-lg text-primary pt-2">$47.00</div>
                    </div>
                </div>
                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                    <div class="form-group mb-2">
                        <label for="quantity3">Quantity</label>
                        <input class="form-control form-control-sm" type="number" id="quantity3" value="1">
                    </div>
                    <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>Update cart</button>
                    <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove</button>
						<button class="btn btn-outline-primary btn-sm btn-block mb-2 upload-image-button" type="button">
                        Upload Image
                    </button>
                </div>
            </div>
			<div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media d-block d-sm-flex text-center text-sm-left">
                    <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF8C00/000000" alt="Product"></a>
                    <div class="media-body pt-3">
                        <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">Medicine Chameleon Sunglasses</a></h3>
                        <div class="font-size-sm"><span class="text-muted mr-2">Lenses:</span>Chameleon</div>
                        <div class="font-size-sm"><span class="text-muted mr-2">Frame:</span>Gray / Black</div>
                        <div class="font-size-lg text-primary pt-2">$47.00</div>
                    </div>
                </div>
                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                    <div class="form-group mb-2">
                        <label for="quantity3">Quantity</label>
                        <input class="form-control form-control-sm" type="number" id="quantity3" value="1">
                    </div>
                    <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>Update cart</button>
                    <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove</button>
						<button class="btn btn-outline-primary btn-sm btn-block mb-2 upload-image-button" type="button">
                        Upload Image
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar-->
        <div class="col-xl-3 col-md-4 pt-3 pt-md-0">
            <h2 class="h6 px-4 py-3 bg-secondary text-center">Subtotal</h2>
            <div class="h3 font-weight-semibold text-center py-3">$325.00</div>
            <hr>
                <form>
    <a href="#" id="nextButton" class="btn btn-outline-primary btn-block" type="button" >Next</a>

    <div id="dialog" class="dialog">
        <div class="dialog-content">
            <p>Do you want your scrap to be swapped with the items?</p>
            <div class="button-container">
                <button id="yesButton">Yes</button> 
                <button id="noButton">No</button>
            </div>
        </div>
    </div>
</form>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const nextButton = document.getElementById("nextButton");
    const dialog = document.getElementById("dialog");
    const yesButton = document.getElementById("yesButton");

    nextButton.addEventListener("click", function() {
        dialog.style.display = "block"; // Show the dialog when Next button is clicked
    });

    yesButton.addEventListener("click", function() {
        // Redirect to the other page when Yes button is clicked
        window.location.href = "item_exchange_demo.php"; // Replace "other_page.html" with the URL of the page you want to redirect to
    });
});


document.addEventListener('DOMContentLoaded', function() {
    // Variable to track if image is uploaded
    var imageUploaded = false;

    // Get all the upload image buttons
    var uploadImageButtons = document.querySelectorAll('.upload-image-button');

    // Function to check if an image has been uploaded
    function checkImageUploaded() {
        return imageUploaded;
    }

    // Add event listeners to upload image buttons
    uploadImageButtons.forEach(function(button, index) {
        button.addEventListener('click', function() {
            var input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.click();

            input.onchange = function() {
                var file = input.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    var imageUrl = reader.result;
                    var imageElement = document.createElement('img');
                    imageElement.src = imageUrl;
                    var card = button.closest('.d-sm-flex.justify-content-between.my-4.pb-4.border-bottom');
                    var imageContainer = card.querySelector('.cart-item-thumb');
                    imageContainer.innerHTML = ''; // Clear previous image
                    imageContainer.appendChild(imageElement);
                    // Set imageUploaded to true
                    imageUploaded = true;
                    // Reset button color if previously highlighted
                    button.classList.remove('btn-red');
                };
            };
        });
    });

    // Get the Next button
    var nextButton = document.querySelector('.btn-outline-primary.btn-block');

    // Add event listener to Next button
     nextButton.addEventListener('click', function(event) {
        if (!checkImageUploaded()) {
            // Prevent default action of the button
            event.preventDefault();
            // Show alert to the user
            alert('Please upload an image before proceeding.');
            // Highlight the "Upload image" button to capture user's attention
            uploadImageButtons.forEach(function(button) {
                button.classList.add('btn-red');
            });
        }
    });
    // Get all the quantity input fields
    var quantityInputs = document.querySelectorAll('.form-control.form-control-sm');

    // Get all the update cart buttons
    var updateCartButtons = document.querySelectorAll('.btn-outline-secondary');

    // Get all the remove buttons
    var removeButtons = document.querySelectorAll('.btn-outline-danger');

    // Function to update the total price
    function updateTotalPrice() {
        var totalPrice = 0;
        var cartItems = document.querySelectorAll('.d-sm-flex.justify-content-between.my-4.pb-4.border-bottom');

        cartItems.forEach(function(item, index) {
            var quantity = parseInt(quantityInputs[index].value);
            var priceElement = item.querySelector('.font-size-lg.text-primary');
            var price = parseFloat(priceElement.textContent.replace('$', ''));
            totalPrice += quantity * price;
        });

        document.querySelector('.h3.font-weight-semibold.text-center.py-3').textContent = '$' + totalPrice.toFixed(2);
    }

    // Update total price when the page loads
    updateTotalPrice();

    // Add event listeners to update cart buttons
    updateCartButtons.forEach(function(button, index) {
        button.addEventListener('click', function() {
            updateTotalPrice();
            // You can add AJAX functionality here to update the cart on the server
            alert('Cart updated successfully!');
        });
    });

    // Add event listeners to remove buttons
    removeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var item = button.closest('.d-sm-flex.justify-content-between.my-4.pb-4.border-bottom');
            item.parentNode.removeChild(item);
            updateTotalPrice();
            // You can add AJAX functionality here to remove the item from the cart on the server
            alert('Item removed successfully!');
        });
    });
});
</script>
</body>
</html>
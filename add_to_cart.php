<?php
session_start();
?>

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

     .login-button:hover {
        background-color: #03AC13 !important;
        color: #FFFFFF !important;
    }

</style>
</head>
<body>

<div class="container pb-5 mt-n2 mt-md-n3">
    <div class="row">
        <div class="col-xl-9 col-md-8">
            <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-secondary"><span>Products</span><a class="font-size-sm" href="categories.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>
            <?php
			
			if(isset($_SESSION['card']))
			{	
			foreach($_SESSION['card'] as $key => $value)
			{
			            
			   echo '<div id="cartContainer" class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                        <div class="media d-block d-sm-flex text-center text-sm-left">
                            <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="https://www.bootdey.com/image/240x240/FF8C00/000000" alt="Product"></a>
                            <div class="media-body pt-3">
                                <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">'.$value['Scrap_name'].'</a></h3>
                                <div class="font-size-lg text-primary pt-2">Price : '.$value['Price'].'<input type="hidden" class="iprice" value='.$value['Price'].'></div>
                                <div class="font-size-lg text-primary pt-2">Total price : <p class="itotal"></p></div>
							</div>
                        </div>
                        <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                            <div class="form-group mb-2">
                                <label for="quantity3">Quantity</label>
								<form action="manage_cart.php" method="POST">
                                <input class="form-control form-control-sm iquantity" name="Mod_Quantity" onchange="this.form.submit();" type="number" min="1" id="quantity3" value="'.$value['Quantity'].'">
                                <input type="hidden" value="scrap_name" name="'.$value['Scrap_name'].'">
                                </form>
							</div>
                            
								<form action="manage_cart.php" method="POST" onload="subTotal()">
                            <button name="Remove_item" class="btn btn-outline-danger btn-sm btn-block mb-2" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>Remove</button>
								<input type="hidden" value="scrap_name" name="'.$value['Scrap_name'].'">
								</form>
                            <button class="btn btn-outline-primary btn-sm btn-block mb-2 upload-image-button" type="button">
                                Upload Image
                            </button>
                        </div>   
                    </div>';			  
			}
			}	
               				
			?>
             
			</div>
        </div>
        <!-- Sidebar-->
        <div class="col-xl-3 col-md-4 pt-3 pt-md-0">
            <h2 class="h6 px-4 py-3 bg-secondary text-center">Subtotal</h2>
            <div class="h3 font-weight-semibold text-center py-3" id="gtotal"></div>
            <hr>
			<?php
			if(isset($_SESSION['card']) && count($_SESSION['card'])>0)
			{
			?>
            <form action="show.php" method="POST">
                <button class="btn btn-outline-primary btn-block" name="show" value="Next"/>Next</button>
            </form>
			<?php
			}
			 ?>
        </div>
    </div>
</div>
<script>
var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');
function subTotal()
{
	gt = 0;
	for(i=0;i<iprice.length;i++)
	{
		itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
		gt = gt + (iprice[i].value)*(iquantity[i].value);
	}
	gtotal.innerText = gt;
}

subTotal();
</script>
<script>
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
    
    
});
</script>
</body>
</html>
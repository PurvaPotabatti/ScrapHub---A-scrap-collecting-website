<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Item Exchange</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
	.selected .card-info {
    background-color: #03AC13;
    color: white;
}

     .login-button:hover {
        background-color: #FF0000 !important;
        color: #FFFFFF !important;
    }
    #next-button{
		position:absolute;
		bottom:10px;
		z-index:1;
	}

	</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0" >
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary" style="color:#03AC13  !important">ScrapHub</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active" style="color:#03AC13  !important">Home</a>
                <a href="about.php" class="nav-item nav-link" style="color:#03AC13  !important">About</a>
                <a href="service.php" class="nav-item nav-link" style="color:#03AC13  !important" >Service</a>
				<a href="contact.php" class="nav-item nav-link" style="color:#03AC13  !important">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:#03AC13  !important">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="feature.php" class="dropdown-item" style="color:#03AC13  !important">Feature</a>
                        <a href="team.php" class="dropdown-item"style="color:#03AC13  !important">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item" style="color:#03AC13  !important">Testimonial</a>
                        <!--<a href="404." class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
				
				<a href="categories_demo.php" class="nav-item nav-link" style="color:#03AC13  !important">Categories</a>
            <a href="schedule.php" class="nav-item nav-link login-button" style="color:#FF0000 ; border-radius: 20px; border: 2px solid #FF0000; padding: 7px 20px; margin-left: 10px; margin-top: 15px; height: 40px;">Cancel</a>

		
		<?php
$count = 0;
if(isset($_SESSION['item_card']))
{
	$count=count($_SESSION['item_card']);
}	
?>
<a href="item_exchange_demo_cart.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: #03AC13;">Item cart ( <?php echo $count; ?> )<i class="fa fa-arrow-right ms-3" ></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    
  


    <!-- Projects Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Recycled Products</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">0 - 100</li>
                        <li class="mx-2" data-filter=".second">100 - 200</li>
						<li class="mx-2" data-filter=".third">200 - above</li>

                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                
            
                <div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.1s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
					 <form action="manage_item.php" method="POST">
					 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item5.webp" alt="">
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Dustbin</p>
                            <h5 class="lh-base mb-0">Rs 233</h5>
							<div class="position-relative">
                                <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="item_name" value="dustbin">
							    <input type="hidden" name="item_price" value="233">
                                <input type="hidden" name="item_image_url" value="img/item5.webp"/> 
                            </div>   
                        </div>
						</div>
                    	</form>
                    </div>
                </div>

				
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
						 <form action="manage_item.php" method="POST">
						 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item2.webp" alt="">
                            
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Large-sized basket</p>
                            <h5 class="lh-base mb-0">Rs 179</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="large size basket">
							<input type="hidden" name="item_price" value="179">  
                            <input type="hidden" name="item_image_url" value="img/item2.webp"/> 
                        </div> 
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
							 <form action="manage_item.php" method="POST">
							 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item8.jpg" alt="">
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                           <p class="text-primary fw-medium mb-2">Use and Throw Cup, 20/set</p>
                            <h5 class="lh-base mb-0">Rs 32</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="use and throw cup">
							<input type="hidden" name="item_price" value="32">  
                            <input type="hidden" name="item_image_url" value="img/item8.jpg"/> 
                            </div> 
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
										 <form action="manage_item.php" method="POST">
										 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item3.jpg" alt="">
                            </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Mug</p>
                            <h5 class="lh-base mb-0">Rs 59</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="mug">
							<input type="hidden" name="item_price" value="59">
                            <input type="hidden" name="item_image_url" value="img/item3.jpg"/> 
                        </div>   
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
							 <form action="manage_item.php" method="POST">
							 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item4.jpg" alt="">
                            </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Sturdy Mug</p>
                            <h5 class="lh-base mb-0">Rs 89</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="sturdy mug">
							<input type="hidden" name="item_price" value="89"> 
                            <input type="hidden" name="item_image_url" value="img/item4.jpg"/> 
                        </div>
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.3s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
						<form action="manage_item.php" method="POST">
						<div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item9.jpg" alt="">
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Notebook, total 3</p>
                            <h5 class="lh-base mb-0">Rs 253</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                             <input type="hidden" name="item_name" value="notebook">
							    <input type="hidden" name="item_price" value="253">
                                <input type="hidden" name="item_image_url" value="img/item9.jpg"/> 
                            </div>  
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
							<form action="manage_item.php" method="POST">
							<div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item7.webp" alt="">
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Bucket</p>
                            <h5 class="lh-base mb-0">Rs 127</h5>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="bucket">
							<input type="hidden" name="item_price" value="127">   
                            <input type="hidden" name="item_image_url" value="img/item7.webp"/> 
                        </div>
                        </div>
						</div>
                    	</form>
                    </div>
                </div>



				
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
							 <form action="manage_item.php" method="POST">
							 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item6.avif" alt="">
                            </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">DustBin</p>
                            <h5 class="lh-base mb-0">Rs 134</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                            <input type="hidden" name="item_name" value="dustbin">
							<input type="hidden" name="item_price" value="134">
                            <input type="hidden" name="item_image_url" value="img/item6.avif"/>   
                        </div>
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.3s" onclick="toggleSelection(this)">
                    <div class="rounded overflow-hidden">
							 <form action="manage_item.php" method="POST">
							 <div class="item_card">

                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 clickable-img" style="width:2100px; height:250px" src="img/item10.png" alt="">
                            </div>
                        <div class="border border-5 border-light border-top-0 p-4 card-info">
                            <p class="text-primary fw-medium mb-2">Best from Waste Bags, total 3</p>
                            <h5 class="lh-base mb-0">299</a>
							<div class="position-relative">
                            <button type="submit" name="add_item" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
							<input type="hidden" name="item_name" value="best from west">
							<input type="hidden" name="item_price" value="299">
                            <input type="hidden" name="item_image_url" value="img/item10.png"/> 
                        </div>   
                        </div>
						</div>
                    	</form>
                    </div>
                </div>
				
            </div>
        </div>
		<!-- Next Button Start -->
		<!--<div class="footer">
<a href="#" id="next-button"class="btn btn-lg btn-primary btn-lg-square rounded-0 fixed-bottom mx-auto" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 30px;"><i class="bi bi-arrow-right"></i> Next</a>
    </div>-->
	</div>
    <!-- Projects End -->
    
    
	 

    <!-- Footer Start -->
	<footer class="footer">
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4" >Services</h4>
                    <label class="btn btn-link" >Scrap Collection</label>
                    <label class="btn btn-link" >Transparent Pricing</label>
                    <label class="btn btn-link" >Customer Support</label>
                    <label class="btn btn-link" >Easy Payment</label>
                    <label class="btn btn-link" >Item Exchange</label>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php" >About Us</a>
                    <a class="btn btn-link" href="contact.php" >Contact Us</a>
                    <a class="btn btn-link" href="service.php" >Our Services</a>
                    <a class="btn btn-link" href="" >Terms & Condition</a>
                    <a class="btn btn-link" href="" >Support</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">ScrapHub</a>, All Right Reserved.
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
	</footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"style="background-color: #03AC13;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<script>
  <!--  function toggleSelection(item_card) {
    card.classList.toggle("selected");
    var cardInfo = card.querySelector(".card-info");
    cardInfo.classList.toggle("selected-info");
} -->

</script>
	
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Feature</title>
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
	

     .login-button:hover {
        background-color: #03AC13 !important;
        color: #FFFFFF !important;
    }


	</style>
</head>

<body>
   <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem; color: #03AC13 !important;" role="status">
            <span class="sr-only" style="color:#03AC13 !important">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
           <div class="h-100 d-inline-flex align-items-center py-3 me-4">
    <small class="fa fa-map-marker-alt" style="color: #03AC13; margin-right: 8px;"></small>
    <small style="color:#03AC13 !important">GP Solapur, Maharashtra</small>
</div>

            <div class="h-100 d-inline-flex align-items-center py-3">
    <small class="far fa-clock text-primary me-2" style="color: #03AC13 !important;"></small>
    <small style="color:#03AC13 !important">Mon - Fri : 09.00 AM - 09.00 PM</small>
</div>

        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2" style="color: #03AC13 !important;"></small>
                <small style="color:#03AC13 !important">+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i style="color: #03AC13 !important;" class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i style="color: #03AC13 !important;" class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i style="color: #03AC13 !important;" class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i style="color: #03AC13 !important;" class="fab fa-instagram"></i></a>
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
				<a href="Categories.php" class="nav-item nav-link" style="color:#03AC13  !important">Categories</a>
            <a href="cpp_login.php" class="nav-item nav-link login-button" style="color:#03AC13 ; border-radius: 20px; border: 2px solid #03AC13; padding: 7px 20px; margin-left: 10px; margin-top: 15px; height: 40px;">Login</a>
</div>
<a  href="add_to_cart.php"  class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: #03AC13;">My Cart<i class="fa fa-arrow-right ms-3" ></i></a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Feature</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="categories.php">Categories</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4" style="color: #03AC13 !important">Why Choose Us</h1>
                        </div>
                        <p class="mb-4 pb-2">By choosing our scrap collecting service, customers gain access to a reliable, sustainable, and customer-focused solution for managing their scrap materials while contributing to a greener future.</p>
                        <div class="row g-4">
                            <div class="col-6"> 
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary" style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-4" style="color: #03AC13 !important">
                                        <p class="mb-2">Transparent</p>
                                        <h5 class="mb-0" style="color: #03AC13 !important">Pricing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary" style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-4" style="color: #03AC13 !important">
                                        <p class="mb-2" style="color: #03AC13 !important">Easy</p>
                                        <h5 class="mb-0" style="color: #03AC13 !important">Scrap Submission</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary" style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-4" style="color: #03AC13 !important">
                                        <p class="mb-2" style="color: #03AC13 !important">Flexible</p>
                                        <h5 class="mb-0" style="color: #03AC13 !important">Schedule</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary" style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-4" style="color: #03AC13 !important">
                                        <p class="mb-2" style="color: #03AC13 !important">Customer</p>
                                        <h5 class="mb-0" style="color: #03AC13 !important">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature_new.avif" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>GP Solapur, Maharashtra</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>scraphub@example.com</p>
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
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top" style="background-color: #03AC13;"><i class="bi bi-arrow-up" style="background-color: #03AC13;"></i></a>


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
</body>

</html>
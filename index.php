<?php
session_start();

/* ✅ Clear cart ONLY after invoice */
if (isset($_SESSION['invoice_completed'])) {
    unset($_SESSION['card']);       // clear cart
    unset($_SESSION['invoice_completed']); // remove flag
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ScrapHub</title>
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
 
	}

	</style>
</head>

<body>
<div class="doodle">
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
				<a href="categories_demo.php" class="nav-item nav-link" style="color:#03AC13  !important">Categories</a>
            <a href="cpp_login_demo.php" class="nav-item nav-link login-button" style="color:#03AC13 ; border-radius: 20px; border: 2px solid #03AC13; padding: 7px 20px; margin-left: 10px; margin-top: 15px; height: 40px;">Login</a>
</div>
<?php
$count = 0;
if(isset($_SESSION['card']))
{
	$count=count($_SESSION['card']);
}	
?>
<a href="add_to_cart_demo.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: #03AC13;">My Cart ( <?php echo $count; ?> )<i class="fa fa-arrow-right ms-3" ></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1_new.jpg" style="width:1920px; height:700px"alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To ScrapHub</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best ScrapCollecting Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Welcome to ScrapHub, your premier destination for scrap collection services. We are dedicated to providing reliable and efficient scrap collection solutions for individuals and businesses alike.</p>
                                <a href="categories_demo.php" style="background-color:#03AC13; font-size:25px; color:white; font-family:cambria; border-radius:35px;"  class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pick And Sell</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2_new.jpg" style="width:1920px; height:700px"alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To ScrapHub</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best ScrapCollecting Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Welcome to ScrapHub, your premier destination for scrap collection services. We are dedicated to providing reliable and efficient scrap collection solutions for individuals and businesses alike.</p>
                                <a href="categories_demo.php" style="background-color:#03AC13; font-size:25px; color:white; font-family:cambria; border-radius:35px;" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pick And Sell</a>
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3_new.jpeg" style="width:1920px; height:700px"alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To ScrapHub</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best ScrapCollecting Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Welcome to ScrapHub, your premier destination for scrap collection services. We are dedicated to providing reliable and efficient scrap collection solutions for individuals and businesses alike.</p>
                                <a href="categories_demo.php" style="background-color:#03AC13; font-size:25px; color:white; font-family:cambria; border-radius:35px;" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pick And Sell</a>
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-check fa-2x text-primary" style="color: #03AC13 !important;"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">01</h1>
                    </div>
                    <h5>Easy Scrap Submission</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary" style="color: #03AC13 !important;"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">02</h1>
                    </div>
                    <h5>Transparent Pricing</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-drafting-compass fa-2x text-primary" style="color: #03AC13 !important;"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">03</h1>
                    </div>
                    <h5>Flexible Schedule</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-headphones fa-2x text-primary" style="color: #03AC13 !important;"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">04</h1>
                    </div>
                    <h5>Customer Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->



    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about_new.jpeg" style="object-fit: cover; width:800px height:800px" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4" style="color: #03AC13 !important" >About Us</h1>
                        </div>
                        <p class="mb-4 pb-2">We are committed to revolutionizing the scrap collection industry by providing convenient, reliable, and sustainable solutions for individuals and businesses. With a dedication to environmental responsibility, we strive to make the process of recycling and disposing of scrap materials as effortless as possible. Our team is passionate about reducing waste and promoting recycling, and we aim to create a positive impact on the environment and local communities.</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary" style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up"  style="color: #03AC13 !important">1234</h2>
                                        <p class="fw-medium mb-0" style="color: #03AC13 !important;">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary " style="color: #03AC13 !important;"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up" style="color: #03AC13 !important;">1234</h2>
                                        <p class="fw-medium mb-0" style="color: #03AC13 !important;">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--<a href="" class="btn btn-primary py-3 px-5">Explore More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5" style="color: #03AC13 !important;">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-1_new.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important;">Scrap Collection</h4>
                            <p> Efficient and scheduled pickup of various types of scrap materials from residential, commercial, and industrial locations.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-2_new.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important">Transparent Pricing</h4>
                            <p> Clear and competitive pricing structures for the collection of different types of scrap materials, ensuring customers have a clear understanding of the costs involved.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-3_new.webp" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important">Wide Range of Scrap Material Collection</h4>
                            <p>By offering collection services for wide range of scrap materials, our service can effectively address the diverse waste management.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-4_new.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important">Customer Support and Consultation</h4>
                            <p> Expert guidance and support for customers as well as answering any related inquiries.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-5_new.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important">Easy payment</h4>
                            <p>Allowing customers to conveniently settle their fees for scrap collection services through secure online payment gateways.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-6_new.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" style="color: #03AC13 !important">Item Exchange</h4>
                            <p> Allowing customers to exchange certain types of scrap materials for alternative goods or services.</p>
                            <!--<a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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

    <!-- Categories Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5" style="color: #03AC13 !important">Categories</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".paper">Paper</li>
                        <li class="mx-2" data-filter=".plastic">Plastic</li>
						<li class="mx-2" data-filter=".metal">Metal</li>
						<li class="mx-2" data-filter=".e-waste">E-waste</li>
						<li class="mx-2" data-filter=".other">Other...</li>
                    </ul>
                </div>
            </div>
			<div class="row g-4 portfolio-container">
			<!--Under Paper Starts-->
			    
                <div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">                
                            <div class="card">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/paper_beverage_carton.jpg" style="width:2100px; height:250px" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/paper_beverage_carton.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="border border-5 border-light border-top-0 p-4">
                                    <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Beverage Carton</p>
                                    <h5 class="lh-base mb-0">Rs 5/kg</h5>
                                    <div class="position-relative">
                                        <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                        <!-- Ensure that hidden input fields are included within the form -->
                                        <input type="hidden" name="scrap_name" value="Beverage Carton"/>
                                        <input type="hidden" name="price" value="5"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

				
                <div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
                        <div class="card">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_books.jpg" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_books.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Books</p>
							<h5 class="lh-base mb-0">Rs 10/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Books">
							    <input type="hidden" name="price" value="10"></div>                        
					    </div>
						</div>
                    	</form>
                   </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_carton.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_carton.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Carton</p>
                            							<h5 class="lh-base mb-0">Rs 9/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Carton">
							    <input type="hidden" name="price" value="9"></div>                        
						</div>
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                       <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_grey_board.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_grey_board.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Grey Board</p>
                            							<h5 class="lh-base mb-0">Rs 2/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Grey Board">
							    <input type="hidden" name="price" value="2"></div>   
                            </div>								
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                       <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_magazines.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_magazines.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Magazines</p>
                            							<h5 class="lh-base mb-0">Rs 7/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Magazines">
							    <input type="hidden" name="price" value="7"></div>   
                            </div>	                      
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                       <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_newspaper.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_newspaper.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Newspaper</p>
                            							<h5 class="lh-base mb-0">Rs 10/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Newspaper">
							    <input type="hidden" name="price" value="10"></div>   
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                       <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_record_file.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_record_file.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Record file</p>
                            							<h5 class="lh-base mb-0">Rs 7.5/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Record file">
							    <input type="hidden" name="price" value="7.5"></div>   
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item paper wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
                       <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/paper_white_paper.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/paper_white_paper.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">White Paper</p>
                            							<h5 class="lh-base mb-0">Rs 7/kg</a>
                             <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="White Paper">
							    <input type="hidden" name="price" value="7"></div>   
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
            
			<!--Under Paper Ends-->
			
			<!--Under Plastic Starts-->
            
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_jar.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_jar.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>						
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Plastic Jar</p>
                            							<h5 class="lh-base mb-0">Rs 3/piece</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Plastic Jar">
							    <input type="hidden" name="price" value="3"></div>   
                            </div> 
                        </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_milk_cover.webp" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_milk_cover.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Milk covers</p>
                            							<h5 class="lh-base mb-0">Rs 2/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Milk covers">
							    <input type="hidden" name="price" value="2"></div>   
                            </div>                         
					    </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_soft_plastic.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_soft_plastic.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Soft plastic</p>
                            							<h5 class="lh-base mb-0">Rs 6/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Soft plastic">
							    <input type="hidden" name="price" value="6"></div>   
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_hard_plastic.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_hard_plastic.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Hard Plastic</p>
                            							<h5 class="lh-base mb-0">Rs 1/kg</a>
                                <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Hard plastic">
							    <input type="hidden" name="price" value="1"></div>   
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_mix_plastic.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_mix_plastic.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Mix Plastic</p>
                            							<h5 class="lh-base mb-0">Rs 4/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Mix plastic">
							    <input type="hidden" name="price" value="4"></div>
                            </div>								
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_bags.jpeg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_bags.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Plastic Bags</p>
                            							<h5 class="lh-base mb-0">Rs 1/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Plastic Bags">
							    <input type="hidden" name="price" value="1"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_polythene.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_polythene.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Polythene</p>
                            							<h5 class="lh-base mb-0">Rs 5/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Polythene">
							    <input type="hidden" name="price" value="5"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item plastic wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/plastic_water_bottle.jpeg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/plastic_water_bottle.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Water bottle</p>
                            							<h5 class="lh-base mb-0">Rs 5/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Water bottle">
							    <input type="hidden" name="price" value="5"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
            
			<!--Under Plastic Ends-->
			
			<!--Under Metal Starts-->
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_aluminium.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_aluminium.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>						
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Aluminium</p>
                            							<h5 class="lh-base mb-0">Rs 70/kg</a>
                                                        <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Aluminium">
							    <input type="hidden" name="price" value="70"></div>
                            </div>
                        </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_brass.jpeg" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_brass.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Brass</p>
                            							<h5 class="lh-base mb-0">Rs 250/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Brass">
							    <input type="hidden" name="price" value="250"></div>
                            </div>                       
					    </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_iron.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_iron.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Iron</p>
                            							<h5 class="lh-base mb-0">Rs 25/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Iron">
							    <input type="hidden" name="price" value="25"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_tin.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_tin.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Tin</p>
                            							<h5 class="lh-base mb-0">Rs 12/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Tin">
							    <input type="hidden" name="price" value="12"></div>
                            </div>                         
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_beverage_cans.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_beverage_cans.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Beverage Cans</p>
                            							<h5 class="lh-base mb-0">Rs 80/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Beverage Cans">
							    <input type="hidden" name="price" value="80"></div>
                            </div>                      
						</div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_oil_tin.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_oil_tin.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Oil tin</p>
                            							<h5 class="lh-base mb-0">Rs 2/piece</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Oil Tin">
							    <input type="hidden" name="price" value="2"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item metal wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/metal_steel.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/metal_steel.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Steel</p>
                            							<h5 class="lh-base mb-0">Rs 22/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Steel">
							    <input type="hidden" name="price" value="22"></div>
                            </div>                        
						</div>
						</form>
                    </div>
                </div>
			<!--Under Metal Ends-->
			
			<!--Under E-waste Starts-->
                <div class="col-lg-4 col-md-6 portfolio-item e-waste wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/e-waste_computer.jpg" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/e-waste_computer.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>						
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Computer</p>
                            							<h5 class="lh-base mb-0">Rs 230/piece</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Computer">
							    <input type="hidden" name="price" value="230"></div>
                            </div>
                        </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item e-waste wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/e-waste_fridge.webp" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/e-waste_fridge.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Fridge</p>
                            							<h5 class="lh-base mb-0">Rs 300/piece</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Fridge">
							    <input type="hidden" name="price" value="300"></div>
                            </div>                        
					    </div>
						</form>
                    </div>
                </div>
			<!--Under E-waste Ends-->
			
			<!--Under Other Starts-->
                <div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/glass.webp" style="width:2100px; height:250px"alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/glass.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>						
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Glass</p>
                            							<h5 class="lh-base mb-0">Rs 55/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Glass">
							    <input type="hidden" name="price" value="55"></div>
                            </div>
                        </div>
						</form>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/others_battery.webp" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/others_battery.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Battery</p>
                            							<h5 class="lh-base mb-0">Rs 70/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Battery">
							    <input type="hidden" name="price" value="70"></div>
                            </div>                        
					    </div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/others_beer_bottle.jpg" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/others_beer_bottle.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Beer Bottle</p>
                            							<h5 class="lh-base mb-0">Rs 0.5/piece</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Beer Bottle">
							    <input type="hidden" name="price" value="0.5"></div>
                            </div>                        
					    </div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/others_mix_waste.webp" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/others_mix_waste.webp" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Mix Waste</p>
                            							<h5 class="lh-base mb-0">Rs 3/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Mix Waste">
							    <input type="hidden" name="price" value="3"></div>
                            </div>                        
					    </div>
						</form>
                    </div>
                </div>
				
				<div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <form action="manage_cart.php" method="POST">
						<div class="card">
						<div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/others_tyre.jpeg" style="width:2100px; height:250px" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/others_tyre.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2" style="color: #03AC13 !important;">Tyre</p>
                            							<h5 class="lh-base mb-0">Rs 3/kg</a>
                            <div class="position-relative">
                                <button type="submit" name="Add_to_Cart" class="btn btn-square btn-outline-light mx-1 position-absolute bottom-0 end-0" style="background-color: #03AC13; width: 100px; height: 40px; border-radius: 10px;">Add to cart</button>
                                <input type="hidden" name="scrap_name" value="Tyre">
							    <input type="hidden" name="price" value="3"></div>
                            </div>                         
					    </div>
						</form>
                    </div>
                </div>
			<!--Under Other Ends-->	
            </div>			
        </div>
    </div>

    <!-- Categories End -->
        

		

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">
			
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team member.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Srushti Vijapure</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team member 2.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Harshada Yerpul</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team member 3.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Purva Potabatti</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team member 4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Mayuri Dorale</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5" style="color: #03AC13 !important">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
<p>I've been using ScrapHub's services for a while now, and I must say, they are exceptional! Their team is always prompt, professional, and courteous. They make scrap collection so convenient and hassle-free. I highly recommend their services to anyone looking to responsibly dispose of their scrap.</p>                        <h5 class="mb-1" style="color: #03AC13 !important">Sarah Johnson</h5>
                        <span class="fst-italic">Environmental Activist</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
<p>ScrapHub has been a lifesaver for my business. As a manufacturing company, we often have a lot of scrap metal and other materials lying around. ScrapHub not only helps us dispose of these materials responsibly but also offers fair prices. Their efficiency and reliability have made them our go-to scrap collection service.</p>                        <h5 class="mb-1" style="color: #03AC13 !important">Fred Howard</h5>
                        <span class="fst-italic">Business Owner</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
<p>"I can't thank ScrapHub enough for their top-notch service. As someone passionate about sustainability, it's crucial for me to work with companies that share the same values. ScrapHub not only helps reduce waste but also contributes to a cleaner environment. Their friendly staff and seamless process make them stand out from the rest.</p>                        <h5 class="mb-1" style="color: #03AC13 !important">Steve Smith</h5>
                        <span class="fst-italic">Environmental Scientist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4" >Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>GP Solapur, Maharashtra</p>
                    <p class="mb-2"><i  class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i  class="fa fa-envelope me-3"></i>scraphub@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i  class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i  class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i  class="fab fa-linkedin-in"></i></a>
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
                    <a class="btn btn-link" href="terms_and_services.php" >Terms & Condition</a>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.php">ScrapHub</a>, All Right Reserved.
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
	</div>
</body>

</html>
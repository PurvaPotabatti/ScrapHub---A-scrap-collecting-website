<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
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
	.alert,
.success
{
	width:400px;
	text-align:center;
	position:absolute;
	top:30px;
	left:50%;
	transform:translateX(-50%);
	color:whitesmoke;
	padding:8px 0;
}
.alert{background-color:rgb(252,59,59);}
.success{background-color:rgb(44,158,24);}
	

     .login-button:hover {
        background-color: #03AC13 !important;
        color: #FFFFFF !important;
    }

	</style>
</head>

<body>
<div class="doodle"
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="categories.php">Categories</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
          <form action="contact.php" autocomplete="off" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="msg" name="msg"style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="send">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
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
                    <h4 class="text-light mb-4">Services</h4>
                    <label class="btn btn-link" >Scrap Collection</label>
                    <label class="btn btn-link" >Transparent Pricing</label>
                    <label class="btn btn-link" >Customer Support</label>
                    <label class="btn btn-link" >Easy Payment</label>
                    <label class="btn btn-link" >Item Exchange</label>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <!--<div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>-->
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];
	

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'potabattipurva21@gmail.com';                     //SMTP username
    $mail->Password   = 'jnstkdelhjzzftvx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$email");
    $mail->addAddress('potabattipurva21@gmail.com', 'Our website');     //Add a recipient
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'User details:';
    $mail->Body    = "User name-$name <br> User email-$email <br> Subject - $subject<br> Message - $msg<br>";
    

    $mail->send();
    echo "<div class='success'>Message has been sent</div>";
} catch (Exception $e) {
    echo "<div class='alert'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
}
}
?>
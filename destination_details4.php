<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $check = $_POST['checkin'];
    $Travellers = $_POST['travellers'];
    $totalPrice = $_POST['total_Price'];
    $phonenumber = $_POST['phone_number'];
    $cardholdername = $_POST['card_holder_name'];
    $cardnumber = $_POST['card_number'];
    $expirydate = $_POST['expiry_date'];
    $cvv = $_POST['cvv']; 

if(!empty($check) && !empty($Travellers) && !is_numeric($check) ){
    $query="insert into booking (checkin,travellers,total_Price,phone_number,card_holder_name,card_number,expiry_date,cvv) 
    values ('$check','$Travellers','$totalPrice','$phonenumber','$cardholdername','$cardnumber','$expirydate','$cvv')";

    mysqli_query($conn, $query);

    echo "<script type='text/javascript'> alert('Booking Successfull')</script>";
}
else 
{
    echo "<script type='text/javascript'> alert('Please Enter Valid Information`')</script>";
}

}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>spm-tour</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="destination_details.css">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="elements.html">Tourism News</a></li>
                                        
                                            <!-- <li><a class="" href="travel_destination.html">Destination</a></l/li> -->
                                            <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> +(94)76 664 6404
                                        </p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <!-- <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul> -->
                                        <b><li><a href="login.php">Login</a></li></b>
                                        <b><li><a href="register.php">Register</a></li></b>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <div class="destination_banner_wrap4 overlay">
        <div class="destination_text text-center">
            <h3>Toddy Bliss</h3>
            <p>Harvest the essence of nature, tap into tradition, and indulge in a flavorful journey of toddy tapping, crafting, and spicy fish fry delights. </p>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <p>Embark on a tantalizing journey with our Toddy Feast, where nature's nectar is not just a drink but a spectacle. Witness the art of tapping toddy from coconut trees, observe the meticulous preparation process, and learn to craft your own coconut leaf container.</p>
                        <p> Immerse yourself in the essence of tradition as you savor a spicy fish fry paired perfectly with the freshly collected toddy. Join us for an unforgettable experience that combines the thrill of toddy harvesting, the joy of craftsmanship, and the delight of a flavorful feast.</p>
                        <!-- <div class="single_destination">
                            <h4>Day-01</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-02</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-03</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div> -->
<!-- Package Details Section -->
               
<div class="bordered_1px"></div>
<div class="destination_details">
    <h3>Package Includes:</h3>
    <button disabled>Coconut tree climbing</button>
    <button disabled>Two cups of Toddy</button>
    <button disabled>Spicy fish fry dish</button>
</div> 

<div class="bordered_1px"></div>
<div class="destination_details">
    <h3>Price details:</h3>
    <button disabled> LKR 5000</button>
</div>
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Booking Details</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="checkin">Check-in Date:</label>
                                        <input type="date" id="checkin" name="checkin" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="travellers">Travellers:</label>
                                        <input type="number" id="travellers" name="travellers" min="1" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="totalPrice">Total Price:</label>
                                        <input type="text" id="totalPrice" name="total_Price">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="phoneNumber">Phone Number:</label>
                                        <input type="text" id="phoneNumber" name="phone_number" required>
                                    </div>
                                </div>
                            </div>
                            
                            <h3>Payment Details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="cardHolderName">Card Holder Name:</label>
                                        <input type="text" id="cardHolderName" name="card_holder_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="cardNumber">Card Number:</label>
                                        <input type="text" id="cardNumber" name="card_number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="expiryDate">Expiration Date:</label>
                                        <input type="text" id="expiryDate" name="expiry_date" placeholder="MM/YY" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <label for="cvv">CVV:</label>
                                        <input type="text" id="cvv" name="cvv" required>
                                    </div>
                                </div>
                                <div class="col-lg-12"> 
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit"><a href="#">Book Now</a></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var basePrice = 8000; // Base price per traveler
                            var totalPriceInput = document.getElementById("totalPrice");
                            var travellersInput = document.getElementById("travellers");
                    
                            // Function to calculate and update total price
                            function updateTotalPrice() {
                                var travellers = parseInt(travellersInput.value);
                                var totalPrice = basePrice * travellers;
                                totalPriceInput.value = totalPrice.toFixed(2); // Format to two decimal places
                            }
                    
                            // Update total price when number of travellers changes
                            travellersInput.addEventListener("input", updateTotalPrice);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>More Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/2.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Korola Megna</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/3.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>London</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>No: 57 Lloyd's Ave,<br>
                               Batticaloa 30000,<br>
                               Sri Lanka. <br>
                                <a href="#">+(94)76 664 6404</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="contact.html"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="destination_details.html">Lagoon Sail</a></li>
                                <li><a href="destination_details2.html">Vaadi Culinary</a></li>
                                <li><a href="destination_details3.html">Coconut Artistry</a></li>
                                <li><a href="destination_details4.html">Toddy Bliss</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://spmlk.tech" target="_blank">SPM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>  
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   
    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>
<?php 
$pageTitle = 'About';
include 'inc/header.php' 
?>


<!-- ABOUT HERO GIF SECTION STARTS  -->
<!-- <video autoplay muted loop playsinline>
        <source src="assets/images/about/about.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
<?php
$heroImage = "assets/images/about/ab.gif";
$heroAlt = "about gif";
$smallHeading = "ABOUT US";
$mainHeading = "Our Story of Craftsmanship";
$subText = "Blending tradition and innovation to create timeless furniture";

include("inc/common_hero.php");
?>
<!-- ABOUT HERO GIF SECTION ENDS -->


<!-- ABOUT STORY SECTION STARTS  -->
<section class="about_story">
    <div class="container">
        <div class="max-width">
            <p>OUR STORY</p>
            <h6>At Urban Neat, we craft stylish, functional furniture that blends quality with modern design. Rooted in craftsmanship and attention to detail, our pieces are made to elevate your space with timeless elegance and lasting comfort.</h6>

            <div class="signiture mt-4 mt-lg-5">
                <img src="assets/images/about/sign.png" alt="sing">
                <p>GODBERSEN- CEO</p>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT STORY SECTION ENDS -->


<!-- ABOUT MISSION AND VISION SECTION STARTS  -->
<section class="about_mission_vision">
    <div class="left_mission">
        <img src="assets/images/about/about1.jpg" alt="about mission img">
    </div>
    <div class="container h-100">
        <div class="row g-0 justify-content-lg-end h-100">
            <div class="col-lg-6 h-100">
                <div class="right_mission">
                    <div class="small_heading">
                        Our Mission
                    </div>
                    <h3>Crafting Comfort with Purpose</h3>
                    <p>At Urban Neat, we are committed to crafting high-quality, stylish, and functional furniture that enhances everyday living. Through expert craftsmanship and sustainable practices, we aim to create timeless pieces that bring comfort, beauty, and purpose to every space.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_vision">
    <div class="left_mission">
        <img src="assets/images/about/about2.jpg" alt="about mission img">
    </div>
    <div class="container h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-6 h-100">
                <div class="right_mission">
                    <div class="small_heading">
                        Our Vision
                    </div>
                    <h3>Designing a Better Tomorrow</h3>
                    <p>We envision a world where thoughtful design and quality craftsmanship transform houses into homes. Urban Neat strives to be a leader in modern furniture, inspiring spaces with innovation, sustainability, and enduring style.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT MISSION AND VISION SECTION ENDS -->



<!-- SERVICE PROCESS SECTION STARTS  -->
<section class="service_process_step">
    <div class="container">
        <div class="grid_div">
            <div class="serv_step_container">
                <img src="assets/images/icons/selection.svg" alt="select icon">
                <p>Unbeatable Selection</p>
            </div>

            <div class="serv_step_container">
                <img src="assets/images/icons/customercare.svg" alt="select icon">
                <p>24/7 Customer Service</p>
            </div>

            <div class="serv_step_container">
                <img src="assets/images/icons/fastship.svg" alt="select icon">
                <p>Fast Shipping</p>
            </div>

            <div class="serv_step_container">
                <img src="assets/images/icons/shoppingcart.svg" alt="select icon">
                <p>Amazing Values Everyday</p>
            </div>

        </div>
    </div>
</section>
<!-- SERVICE PROCESS SECTION STARTS  -->


<?php include 'inc/footer.php'; ?>
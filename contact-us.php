<?php 
$pageTitle = 'Contact';
include 'inc/header.php' 
?>

<?php
$heroImage = "assets/images/about/contacthero.jpg";
$heroAlt = "contact hero";
$smallHeading = "CONTACT US";
$mainHeading = "Let’s Talk";
$subText = "We're here to help—reach out for inquiries, support, or collaborations.";

include("inc/common_hero.php");
?>

<!-- CONTACT FORM SECTION STARTS  -->
<section class="contact_from_Section">
    <div class="container">
        <div class="row g-lg-5 g-4">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="contact_us_left">
                    <h4>Stay Connected with Us</h4>
                    <p>Have questions or need assistance? We’re just a message away.</p>
                    <div class="contact_infos d-flex flex-column gap-3">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon">
                                <i class="ri-phone-fill"></i>
                            </div>
                            <a href="telto:+92 (8800) - 8632">+92 (8800) - 8632</a>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon">
                                <i class="ri-map-pin-2-fill"></i>
                            </div>
                            <a href="#">88 Broklyn Golden Road Street, New York. USA</a>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <div class="icon">
                                <i class="ri-mail-open-fill"></i>
                            </div>
                            <a href="mailto:company@gmail.com">company@gmail.com</a>
                        </div>
                    </div>

                    <div class="footer_news_letter_container">
                        <ul>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#"><i class="ri-twitter-x-line"></i></a></li>
                            <li><a href="#"><i class="ri-pinterest-line"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="right_contact_form">
                    <h3>Contact Us</h3>

                    <form action="">
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="col-6">
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <button>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT FORM SECTION ENDS -->


<!-- GOOGLE MAP SECTION STARTS  -->
<section class="google_map">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.484830692849!2d85.3424406758687!3d27.71248967617964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197bf11725d3%3A0x9667b0e977175ef1!2sMega%20Web%20Link%20Pvt%20Ltd!5e1!3m2!1sen!2snp!4v1753962082843!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- GOOGLE MAP SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
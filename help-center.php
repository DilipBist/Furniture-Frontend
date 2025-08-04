<?php 
$pageTitle = 'Help Center';
include 'inc/header.php' 
?>

<!-- ORDER HISTORY TRACK SECTION STARTS FORM HERE  -->
<section class="order_history_track_section">
    <div class="container">
        <h3>Manage your Orders</h3>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <a href="trace-order.php">
                    <div class="track_order_box_container d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="track_image">
                                <img src="assets/images/icons/trackorder.svg" alt="order_track_image">
                            </div>
                            <h4>Track a Order</h4>
                        </div>
                        <div>
                            <i class="ri-arrow-right-long-line"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="make-return.php">
                    <div class="track_order_box_container d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="track_image">
                                <img src="assets/images/icons/makereturn.svg" alt="order_track_image">
                            </div>
                            <h4>Make a Return</h4>
                        </div>
                        <div><i class="ri-arrow-right-long-line"></i></div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="cancel-order.php">
                    <div class="track_order_box_container d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <div class="track_image">
                                <img src="assets/images/icons/cancelorder.svg" alt="order_track_image">
                            </div>
                            <h4>Cancel a Order</h4>
                        </div>
                        <div><i class="ri-arrow-right-long-line"></i></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-4 mt-lg-5">
            <h3>Contact Us</h3>

            <div class="track_order_container">

                <div class="row  g-4 g-md-5">
                    <div class="col-12 col-md-4">
                        <div class="d-flex align-items-center justify-content-center w_33">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <div class="contact_icons_height">
                                    <img src="assets/images/icons/telephone.svg" alt="Telephone">
                                </div>
                                <p class="text-center">+92 (8800) - 8632</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex align-items-center justify-content-center w_33">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <div class="contact_icons_height">
                                    <img src="assets/images/icons/Email.svg" alt="Email">
                                </div>
                                <p class="text-center">company@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <div class="contact_icons_height">
                                    <img src="assets/images/icons/Map.svg" alt="map">
                                </div>
                                <p class="text-center">88 Broklyn Golden Road Street, New York. USA</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ORDER HISTORY TRACK SECTION ENDS FROM HERE  -->

<?php include 'inc/footer.php'; ?>
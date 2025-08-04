<?php 
$pageTitle = 'Account';
include 'inc/header.php' 
?>

<!-- ACCOUNT DASHBOARD SECTION STARTS  -->
<section class="account_dashboard_section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="account_Dashboard_left">
                    <h2>Welcome!</h2>

                    <div class="dashboard_btns_container">
                        <a href="recently-viewed.php">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/clock.svg" alt="Clock icon">
                                Recently Viewed
                            </div>
                            <i class="ri-arrow-right-line"></i>
                        </a>

                        <h3>Personal Information</h3>
                        <a href="account-personalInfo.php">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/personalinfo.svg" alt="PErsonal icon">
                                Personal Info
                            </div>
                            <i class="ri-arrow-right-line"></i>
                        </a>

                        <h3>Recent Purchases</h3>
                        <a href="shipping-address-add-check.php">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/location.svg" alt="locaton icon">
                                Edit Addresses
                            </div>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="reviews.php">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/Rating.svg" alt="Rating icon">
                                See All Review
                            </div>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="account_dashboard_right">
                    <div class="recent_order_div">
                        <div class="d-flex align-items-center gap-3 justify-content-between mb-3">
                            <h3>Recent Orders</h3>
                            <a href="#">View All</a>
                        </div>

                        <div class="orders_details_Container">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="recent_product d-flex gap-3">
                                        <div class="image">
                                            <img src="assets/images/featured/fp3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4>Emile Pillow Sofa</h4>
                                            <p>$44.00</p>
                                            <p>#2090549972Q</p>
                                            <p class="pending">Pending </p>
                                            <a href="#">Track Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="recent_product d-flex gap-3">
                                        <div class="image">
                                            <img src="assets/images/featured/fp4.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4>Emile Pillow Sofa</h4>
                                            <p>$44.00</p>
                                            <p>#2090549972Q</p>
                                            <p class="completed">Completed </p>
                                            <a href="#">Track Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="recent_order_div mt-4">
                        <div class="d-flex align-items-center gap-3 justify-content-between mb-3">
                            <h3>Recently Viewed</h3>
                            <a href="#">View All</a>
                        </div>

                        <div class="product_filter_div recently_viewed_items_Container latest_arrival_slider">
                            <div class="row gx-3 gy-5">
                                <?php foreach (array_slice($latestArrival, 0, 3) as $product): ?>
                                    <div class="col-6 col-lg-4 new_wrapper">
                                        <div class="swiper mySwiperInnerImage">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($product['images'] as $img) : ?>
                                                    <div class="swiper-slide">
                                                        <div class="product_img">
                                                            <div class="wislist_tag">
                                                                <i class="ri-heart-line"></i>
                                                            </div>
                                                            <img src="<?= $img ?>" />
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="swiper-button-next ">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </div>
                                            <div class="swiper-button-prev">
                                                <i class="ri-arrow-left-s-line"></i>
                                            </div>
                                        </div>
                                        <div class="product_details_container">
                                            <h4><?= $product['name'] ?></h4>
                                            <div class="producut_price d-flex align-items-center gap-2">
                                                $<?= $product['price'] ?>
                                            </div>
                                        </div>
                                        <div thumbsSlider="" class="swiper mySwiperDots">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prouct_color" style="background-color: #D3C7BF;"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prouct_color" style="background-color: #82BFE3;"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prouct_color" style="background-color: #F2F4F5;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ACCOUNT DASHBOARD SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
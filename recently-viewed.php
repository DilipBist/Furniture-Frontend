<?php 
$pageTitle = 'Recently-Viewed';
include 'inc/header.php' 
?>


<!-- RECENTLY VIEWED SECTION STARTS  -->
<section class="recently_viewed_section">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p> Recently Viewed</p>
        </div>

        <h2>Recently Viewed</h2>

        <div class="product_filter_div latest_arrival_slider mt-4 mt-lg-5">
            <div class="row g-3 g-md-4">
                <?php foreach ($latestArrival as $product): ?>
                    <div class="col-6 col-lg-4 col-xxl-3 new_wrapper">
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
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-s-line"></i>
                            </div>
                        </div>
                        <div class="product_details_container">
                            <h4><?= $product['name'] ?></h4>
                            <div class="rating">
                                <?php
                                $fullStars = floor($product['rating']);
                                $halfStar = ($product['rating'] - $fullStars) >= 0.5;

                                for ($i = 0; $i < $fullStars; $i++) {
                                    echo '<i class="ri-star-fill"></i>';
                                }
                                if ($halfStar) {
                                    echo '<i class="ri-star-half-line"></i>';
                                }
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                for ($i = 0; $i < $emptyStars; $i++) {
                                    echo '<i class="ri-star-line"></i>';
                                }
                                ?>
                            </div>
                            <div class="producut_price d-flex align-items-center gap-2">
                                <div class="actual_price">
                                    $55.00
                                </div>
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
</section>
<!-- RECENTLY VIEWED SECTION ENDS -->


<?php include 'inc/footer.php'; ?>
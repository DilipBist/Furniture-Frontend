<?php 
$pageTitle = 'Home';
include 'inc/header.php' 
?>



<main>

    <!-- HERO SECTION STARTS  -->
    <section class="home_hero_section">
        <video autoplay muted loop playsinline>
            <source src="assets/images/homeGif.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>


        <div class="overlay-home"></div>
        <div class="home_hero_content">
            <div class="container">
                <div class="content_detail">
                    <div class="introduce_heading">INTRODUCING</div>
                    <h1>The Winter Collection</h1>
                    <p>Make a statement with contemporary pieces that are crafted to last.</p>

                    <div class="common_btn mt-4">
                        <a href="new-arrival.php">
                            Shop new arrivals
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO SECTION ENDS  -->



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

    <!-- LATEST ARRIVAL SECTION STARTS  -->
    <section class="latest_arrival_Section">
        <div class="container">
            <h3>Explore Our Latest Arrivals</h3>

            <div class="latest_arrival_slider">
                <div class="swiper LatestArrivalMain">
                    <div class="swiper-wrapper">
                        <?php foreach ($latestArrival as $product): ?>
                            <div class="swiper-slide">
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
                                    <div class="producut_price">
                                        $ <?= $product['price'] ?>
                                    </div>
                                </div>
                                <div thumbsSlider="" class="swiper mySwiperDots">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="prouct_color" style="background-color: #D3C7BF;"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="prouct_color" style="background-color: #00080E;"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="prouct_color" style="background-color: #F2F4F5;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-latestpagination">
                        <span class="swiper-pagination-progressbar-fill"></span>
                    </div>
                </div>
            </div>

            <div class="common_viewall_btn">
                <a href="new-arrival.php">
                    View all products
                    <i class="ri-arrow-right-long-line"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- LATEST ARRIVAL SECTION ENDS -->


    <!-- GIF IMAGE SECTION STARTS  -->
    <section class="gif_image_section">
        <video autoplay muted loop playsinline>
            <source src="assets/images/gif2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="gif_content">
            <div class="container">
                <div class="content_detail">
                    <div class="introduce_heading">SINK RIGHT IN</div>
                    <h2>Customizable Comfort</h2>
                    <p>With a variety of styles, materials, and finishes, creating your perfect chair has never been
                        simpler.</p>

                    <div class="common_btn mt-md-4">
                        <a href="new-arrival.php">
                            Shop now
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GIF IMAGE SECTION ENDS -->


    <!-- WHAT ARE YOU LOOKING SECTION STARTS  -->
    <section class="looking_Section">
        <div class="container">
            <h3>What Are You Looking For?</h3>
            <div class="row g-3 mt-3 mt-md-4">
                <div class="col-lg-6">
                    <div class="large_image">
                        <img src="assets/images/products/looking1.jpg" alt="">
                        <h3>Living Room</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="small_image">
                                <img src="assets/images/products/looking2.jpg" alt="">
                                <h3>Bedroom</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="small_image">
                                        <img src="assets/images/products/looking3.jpg" alt="">
                                        <h3>Office</h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small_image">
                                        <img src="assets/images/products/looking5.jpg" alt="">
                                        <h3>Storage</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHAT ARE YOU LOOKING SECTION ENDS  -->


    <!-- VISION SECTION STARTS FORM HERE  -->
    <section class="vision_section">
        <img src="assets/images/products/vision.jpg" alt="">
        <div class="vision_content">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center flex-column max-width gap-2">
                    <div class="small_heading">
                        SET THE MOOD
                    </div>
                    <h3>Furnish Your Vision</h3>
                    <p>With versatile designs, rich textures, and customizable options, creating the perfect ambiance
                        for your space has never been easier.</p>
                    <div class="common_btn mt-md-4">
                        <a href="new-arrival.php">
                            Shop now
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VISION SECTION STARTS ENDS -->


    <!-- EXPLORE MORE SLIDER SECTION STARTS  -->
    <section class="explore_more_Section">
        <div class="container">
            <h3>More To Explore</h3>

            <div class="expolore_more_slider">
                <div class="swiper ExploreMore">
                    <div class="swiper-wrapper">
                        <?php foreach ($exploreMore as $explore) : ?>
                            <div class="swiper-slide">
                                <a href="#" class="image-hover">
                                    <img src="<?= $explore['image'] ?>" alt="">
                                </a>
                                <div class="exp_name">
                                    <?= $explore['name'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-latestpagination">
                        <span class="swiper-pagination-progressbar-fill"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EXPLORE MORE SLIDER SECTION ENDS -->


    <!-- SECTION OUTDOR SECTION STARTS  -->
    <section class="outdoor_section">
        <img src="assets/images/products/outdoor.png" alt="outdoor image">
        <div class="outdoor_content">
            <div class="container">
                <div class=" content_detail">
                    <div class="small_heading">
                        STEP INTO SERENITY
                    </div>
                    <h3>Your Outdoor Haven</h3>
                    <p>Experience the art of outdoor living with pieces that redefine comfort and bring beauty to your
                        garden, patio, or deck.</p>
                    <div class="common_btn mt-md-4">
                        <a href="new-arrival.php">
                            Shop now
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION OUTDOR SECTION ENDS -->


    <!-- PROUDUCT SHOCASE SECTION STARTS  -->
    <section class="product_showcase_section">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-lg-7 col-xxl-6">
                    <div class="product_showcase_left same_height position-relative">
                        <img src="assets/images/products/pshowcase.jpg" alt="">

                        <div class="pillow white_bg">
                            <div class="icon position-relative">
                                <i class="ri-add-line toggle_product"></i>
                                <div class="click_product">
                                    <div class="image">
                                        <img src="assets/images/products/pillow.png" alt="pillow image">
                                    </div>

                                    <h4>Kess Wool Throw Pillow</h4>
                                    <div class="p_price">
                                        $12.38
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bed white_bg">
                            <div class="icon position-relative">
                                <i class="ri-add-line toggle_product"></i>
                                <div class="click_product">
                                    <div class="image">
                                        <img src="assets/images/products/bed.png" alt="pillow image">
                                    </div>

                                    <h4>Olalla Headboard - Oak</h4>
                                    <div class="p_price">
                                        $250.87
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blanket white_bg">
                            <div class="icon position-relative">
                                <i class="ri-add-line toggle_product"></i>
                                <div class="click_product">
                                    <div class="image">
                                        <img src="assets/images/products/gauze.jpg" alt="pillow image">
                                    </div>

                                    <h4>Organic Airy Gauze Box Quilt</h4>
                                    <div class="p_price">
                                        $52.55
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <div class="product_showcase_right d-flex flex-column gap-4 gap-lg-5 same_height">
                        <h3>Featured Furniture: Comfort and Style Combined</h3>
                        <div class="product_details_contianer d-flex flex-column gap-3 gap-md-4 ">
                            <div class="product_details d-flex align-items-center gap-3 gap-md-4">
                                <div class="product_img">
                                    <img src="assets/images/products/pillow.png" alt="pillow image">
                                </div>
                                <div
                                    class="d-flex flex-column gap-2 flex-md-row gap-md-5 justify-content-between w-100">
                                    <h4>Kess Wool Throw Pillow</h4>
                                    <div class="p_price">
                                        $12.38
                                    </div>
                                </div>
                            </div>
                            <div class="product_details d-flex align-items-center gap-3 gap-md-4">
                                <div class="product_img">
                                    <img src="assets/images/products/bed.png" alt="pillow image">
                                </div>
                                <div
                                    class="d-flex flex-column gap-2 flex-md-row gap-md-5 justify-content-between w-100">
                                    <h4>Olalla Headboard - Oak</h4>
                                    <div class="p_price">
                                        $250.87
                                    </div>
                                </div>
                            </div>
                            <div class="product_details d-flex align-items-center gap-3 gap-md-4">
                                <div class="product_img">
                                    <img src="assets/images/products/gauze.jpg" alt="pillow image">
                                </div>
                                <div
                                    class="d-flex flex-column gap-2 flex-md-row gap-md-5 justify-content-between w-100">
                                    <h4>Organic Airy Gauze Box Quilt</h4>
                                    <div class="p_price">
                                        $52.55
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart_add_btn_container d-flex flex-column gap-3">
                            <a href="#">
                                <i class="ri-shopping-cart-2-line"></i>
                                Add to Cart
                            </a>
                            <a href="#">
                                <i class="ri-heart-line"></i>
                                Add to Wishlist
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROUDUCT SHOCASE SECTION ENDS -->


    <!-- SALE SECTION STARTS  -->
    <section class="sale_Section">
        <img src="assets/images/sale.png" alt="sale image">
        <div class="sale_content">
            <div class="container">
                <div class="content">
                    <h3>Sale of the Season</h3>
                    <p>Limited-time savings on our best-selling outdoor and indoor collections.</p>

                    <div class="common_btn mt-md-4">
                        <a href="new-arrival.php">
                            Shop now
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SALE SECTION ENDS -->


    <!-- CUSTOMER FEEDBACK SECTION STARTS  -->
    <section class="customer_feedback_section position-relative">
        <div class="feedback_left">
            <div class="left_feedback_content">
                <div class="container h-100 d-flex flex-column justify-content-between">
                    <div class="maxWidth">
                        <h3>Customer Feedback</h3>
                        <p>Your feedback drives us to deliver the best experience possible.</p>
                    </div>

                    <div>
                        <div class="client_slider_btns d-none d-lg-flex align-items-center gap-3">
                            <div class="custom-prev">
                                <i class="ri-arrow-left-s-line"></i>
                            </div>
                            <div class="custom-next">
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </div>
                        <div class="common_btn">
                            <a href="new-arrival.php">
                                Shop now
                                <i class="ri-arrow-right-long-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="feedback_right d-none d-lg-block">
            <img src="assets/images/cfr.jpg" alt="">
        </div>


        <div class="customer_feedback_slider_container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 offset-lg-4">
                        <div class="swiper mySwiperClient">
                            <div class="swiper-wrapper">
                                <?php foreach ($customerReviews as $review) : ?>
                                    <div class="swiper-slide">
                                        <div class="customer_review_container">
                                            <div>
                                                <div class="rating">
                                                    <?php
                                                    $fullStars = floor($review['rating']);
                                                    $halfStar = ($review['rating'] - $fullStars) >= 0.5;

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
                                                <div class="customer_review_description">
                                                    "<?= $review['review'] ?>"
                                                </div>
                                            </div>

                                            <div class="customer_profile_container d-flex gap-3">
                                                <div class="profile">
                                                    <img src="<?= $review['profile_image']; ?>" alt="client profile">
                                                </div>
                                                <div>
                                                    <h4><?= $review['name'] ?></h4>
                                                    <p><?= $review['occupation'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-latestpagination d-lg-none">
                                <span class="swiper-pagination-progressbar-fill"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CUSTOMER FEEDBACK SECTION ENDS -->
</main>


<?php include 'inc/footer.php' ?>
<?php 
$pageTitle = 'Cart';
include 'inc/header.php' 
?>

<section class="recently_viewed_section">
    <div class="container">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <div class="cart_details_left">
                    <div class="bread_cumb">
                        <a href="index.php">Home</a>
                        <span>/</span>
                        <p>Cart</p>
                    </div>

                    <h2>Your Shopping Cart</h2>

                    <div class="cart_products_container mt-4">
                        <div class="row g-3 g-lg-0">
                            <div class="col-6 col-lg-12">
                                <div class="cart_product_information d-flex gap-3 flex-column flex-lg-row gap-lg-4">
                                    <img src="assets/images/featured/fp1.png" alt="">
                                    <div class="card_product_description d-flex flex-column flex-lg-row gap-3 gap-lg-4 justify-content-lg-between w-100">
                                        <div class="d-flex flex-column gap-2">
                                            <h4>Striped bedspread</h4>
                                            <div class="size">
                                                Size: Queen: 60" W × 80" L
                                            </div>
                                            <div class="quantity">
                                                Quantity: 1
                                            </div>
                                            <div class="quantity_input position-relative">
                                                <button class="decrement">
                                                    <i class="ri-subtract-fill"></i>
                                                </button>
                                                <input type="number" value="01" min="1">
                                                <button class="increment">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                            <div class="itemno">
                                                Item: 10604847
                                            </div>
                                            <div class="color_info d-flex align-items-center gap-2">
                                                Color:
                                                <div class="color"></div>
                                                <span>Orange Strips</span>
                                            </div>
                                            <a href="#">Remove</a>
                                        </div>

                                        <div class="price">
                                            $145.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-12">
                                <div class="cart_product_information d-flex gap-3 flex-column flex-lg-row gap-lg-4">
                                    <img src="assets/images/featured/fp2.png" alt="">
                                    <div class="card_product_description d-flex flex-column flex-lg-row gap-3 gap-lg-4 justify-content-lg-between w-100">
                                        <div class="d-flex flex-column gap-2">
                                            <h4>Full/Queen Heavyweight Linen Blend</h4>
                                            <div class="size">
                                                Size: Queen: 60" W × 80" L
                                            </div>
                                            <div class="quantity">
                                                Quantity: 1
                                            </div>
                                            <div class="quantity_input position-relative">
                                                <button class="decrement">
                                                    <i class="ri-subtract-fill"></i>
                                                </button>
                                                <input type="number" value="01" min="1">
                                                <button class="increment">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                            <div class="itemno">
                                                Item: 10604847
                                            </div>
                                            <div class="color_info d-flex align-items-center gap-2">
                                                Color:
                                                <div class="color"></div>
                                                <span>Ivory</span>
                                            </div>
                                            <a href="#">Remove</a>
                                        </div>

                                        <div class="price">
                                            $145.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="cart_details_right">
                    <div class="cart_summary_container">
                        <h4>Order Summary</h4>

                        <div class="cart_subtotal d-flex flex-column gap-2">
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <p>Subtotal</p>
                                <p>$228.00</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <p>Discount</p>
                                <p>-$28.00</p>
                            </div>
                        </div>

                        <div class="promocode">
                            <p>Apply Promo Code</p>
                            <form action="">
                                <input type="text" name="promocode" placeholder="Promo code">
                                <button>Apply</button>
                            </form>
                        </div>

                        <div class="payment_submission">
                            <a href="checkout.php">Checkout</a>
                            <a href="#">
                                Pay with
                                <img src="assets/images/payment/paypal.png" alt="paypal">
                            </a>
                        </div>
                    </div>

                    <div class="payment_accept_div mt-4">
                        <div class="qus">
                            Have a question? Call 1.888.282.6060 or
                            <a href="#">chat with us</a>
                        </div>
                        <div class="payment_methods mt-3">
                            <p>Accepted payment methods</p>
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <a href="#">
                                    <img src="assets/images/payment/paypal.png" alt="paypal logo">
                                </a>
                                <a href="#">
                                    <img src="assets/images/payment/mastercard.png" alt="master card logo">
                                </a>
                                <a href="#">
                                    <img src="assets/images/payment/visa.png" alt="visa logo">
                                </a>
                                <a href="#">
                                    <img src="assets/images/payment/discover.png" alt="discover logo">
                                </a>
                                <a href="#">
                                    <img src="assets/images/payment/unionpay.png" alt="union logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<!-- LATEST ARRIVAL SECTION STARTS  -->
<section class="latest_arrival_Section">
    <div class="container">
        <h3>Explore More</h3>

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
                                <a href="individual-product.php">
                                    <h4><?= $product['name'] ?></h4>
                                </a>
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
    </div>
</section>
<!-- LATEST ARRIVAL SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
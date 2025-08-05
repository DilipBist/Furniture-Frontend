<?php
$pageTitle = 'Individual-Product';
include 'inc/header.php'
?>

<!-- INDIVIDUAL PROUDUCT SECTION STARTS  -->
<section class="individual_prouduct_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xxl-7 position-relative">
                <div class="individual_product_left">
                    <div class="row g-0">
                        <div class="col-lg-2 col-xxl-3">
                            <div thumbsSlider="" style="--swiper-navigation-color: #111; --swiper-pagination-color: #111" class="swiper mySwiperIndividulaProduct ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i1.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i3.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i4.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i5.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i6.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i7.png" />
                                    </div>
                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-xxl-9">
                            <div class="swiper mySwiperIndividulaProduct2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i1.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i3.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i4.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i5.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i6.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/i7.png" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-xxl-5">
                <div class="individual_product_right_side ">
                    <h2>Velvet Laurent Sofa</h2>
                    <div class="prouduct_rating">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <div class="product_price mt-2">
                        $1200.00
                    </div>
                    <div class="product_color_container mt-3">
                        <p>Color: Olive Green</p>
                        <div class="colors d-flex align-items-center gap-3">
                            <div class="active" style="background-color: #556B2F;"></div>
                            <div style="background-color: #00080E;"></div>
                            <div style="background-color: #DAEDF1;"></div>
                        </div>
                    </div>
                    <div class="prouduct_size_container mt-3">
                        <p>Size: 76” Width</p>
                        <div class="sizebox">
                            <div>84" W × 35" D × 35" H</div>
                            <div class="active">72" W × 32" D × 34" H</div>
                            <div>96" W × 40" D × 36" H</div>
                            <div class="deactive">78" W × 36" D × 34" H</div>
                            <div class="deactive">90" W × 38" D × 37" H</div>
                        </div>
                    </div>

                    <button type="button" class="add_to_Cart">
                        <i class="ri-shopping-cart-2-line"></i>
                        Add to Cart
                    </button>

                    <div class="d-flex align-items-center gap-3 mt-4">
                        <div class="quantity_input position-relative">
                            <button class="decrement">
                                <i class="ri-subtract-fill"></i>
                            </button>
                            <input type="number" value="01" min="1">
                            <button class="increment">
                                <i class="ri-add-line"></i>
                            </button>
                        </div>

                        <button class="wishlist" type="button">
                            <i class="ri-heart-line"></i>
                            Add to Wishlist
                        </button>
                    </div>

                    <div class="about_product_description mt-4">
                        <div class="d-flex align-items-center justify-content-between gap-3 py-2 border-bottom">
                            <h6 class="m-0">About This Product</h6>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <h6 class="m-0">Specifications</h6>
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                        <div class="prouct_dimension_img mt-2">
                            <p>Product Dimensions</p>
                            <img src="assets/images/products/productDimension.png" alt="">
                            <p>Other Dimensions</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Upholstery Material</td>
                                        <td>Velvet</td>
                                    </tr>
                                    <tr>
                                        <td>Frame Material</td>
                                        <td>Metal</td>
                                    </tr>
                                    <tr>
                                        <td>Leg Material</td>
                                        <td>Wood</td>
                                    </tr>
                                    <tr>
                                        <td>Arm Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Storage Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Fill Material</td>
                                        <td>Foam</td>
                                    </tr>
                                    <tr>
                                        <td>Weight Capacity</td>
                                        <td>330 lb.</td>
                                    </tr>
                                    <tr>
                                        <td>Warranty Length</td>
                                        <td>1 Year</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- INDIVIDUAL PROUDUCT SECTION ENDS -->


<!-- CUSTOMER REVIEW ABOUT PRODUCT SECTION STARTS  -->
<section class="customer_product_review_Section">
    <div class="container">
        <div class="item_sorting_container d-flex align-items-center justify-content-between gap-3 mb-4">
            <div class="sort_item">
                Customer Reviews
            </div>

            <div class="d-flex align-items-center gap-2">
                <div class="sort_by">
                    <img src="assets/images/icons/bx_sort.svg" alt="sort icon">
                    Sort By:
                </div>
                <div class="sorting_select">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Newest</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xxl-3">
                <div class="customer_product_left_review">
                    <h3>4.0/5</h3>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <span>(42)</span>
                    </div>

                    <div class="review_Summary mt-4">
                        <h4>Review Summary</h4>

                        <div class="d-flex flex-column gap-3">
                            <div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <span>(22)</span>
                                </div>
                                <meter value="90" min="0" max="100"></meter>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <meter value="70" min="0" max="100"></meter>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(22)</span>
                                </div>
                                <meter value="50" min="0" max="100"></meter>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(10)</span>
                                </div>
                                <meter value="30" min="0" max="100"></meter>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(5)</span>
                                </div>
                                <meter value="10" min="0" max="100"></meter>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xxl-9">
                <div class="customer_product_right">
                    <div class="customer_product_Review_details">
                        <div class="customer_product_review">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                                <div class="cusotmer_profile">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="assets/images/clientimg/c1.jpg" alt="">
                                        <h4>Sarah</h4>
                                    </div>

                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                </div>
                                <div class="review_date">
                                    7 months ago
                                </div>
                            </div>
                            <p>Exceptional quality and perfect fit! The customer service is fantastic, making every shopping experience enjoyable. I always receive compliments when wearing their dresses.</p>

                            <div class="reviewed_images d-flex align-items-center gap-3 flex-wrap">
                                <img src="assets/images/products/bed.png" alt="">
                                <img src="assets/images/products/em1.png" alt="">
                            </div>
                        </div>
                        <div class="customer_product_review">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                                <div class="cusotmer_profile">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="assets/images/clientimg/c2.jpg" alt="">
                                        <h4>Paige</h4>
                                    </div>

                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                </div>
                                <div class="review_date">
                                    7 months ago
                                </div>
                            </div>
                            <p>Exceptional quality and perfect fit! The customer service is fantastic, making every shopping experience enjoyable. I always receive compliments when wearing their dresses.</p>
                        </div>
                        <div class="customer_product_review">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                                <div class="cusotmer_profile">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="assets/images/clientimg/c4.jpg" alt="">
                                        <h4>Kaitlyn</h4>
                                    </div>

                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                </div>
                                <div class="review_date">
                                    7 months ago
                                </div>
                            </div>
                            <p>Exceptional quality and perfect fit! The customer service is fantastic, making every shopping experience enjoyable. I always receive compliments when wearing their dresses.</p>

                            <div class="reviewed_images d-flex align-items-center gap-3 flex-wrap">
                                <img src="assets/images/products/bed.png" alt="">
                                <img src="assets/images/products/em1.png" alt="">
                                <img src="assets/images/products/em4.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <a href="#">
                        View More
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CUSTOMER REVIEW ABOUT PRODUCT SECTION ENDS -->


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
    </div>
</section>
<!-- LATEST ARRIVAL SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
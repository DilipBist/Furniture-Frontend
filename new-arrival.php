<?php 
$pageTitle = 'New-Arrival';
include 'inc/header.php' 
?>

<!-- NEW ARRIVAL SECTION STARTS FORM HERE  -->
<section class="new_arrival_section">
    <div class="container">
        <div class="row g-lg-5 g-4">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="shop_left_div">
                    <div class="filtered_list_container">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <h4>Filtered by:</h4>
                            <a href="#">Clear All</a>
                        </div>

                        <div class="filtered_data">
                            <div>
                                Bedding
                                <i class="ri-close-line"></i>
                            </div>
                            <div>
                                Sofa
                                <i class="ri-close-line"></i>
                            </div>
                            <div>
                                Black
                                <i class="ri-close-line"></i>
                            </div>
                            <div>
                                Ivory
                                <i class="ri-close-line"></i>
                            </div>
                            <div>
                                $50 - $100
                                <i class="ri-close-line"></i>
                            </div>
                            <div>
                                30% off or more
                                <i class="ri-close-line"></i>
                            </div>
                        </div>

                        <div class="filter_list_accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Category
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="grid_two">
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Sofa">
                                                    <label class="form-check-label" for="Sofa">Sofa</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Cabinet">
                                                    <label class="form-check-label" for="Cabinet">Cabinet</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Side">
                                                    <label class="form-check-label" for="Side">Side Tables</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Media">
                                                    <label class="form-check-label" for="Media">Media Console</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Daybed">
                                                    <label class="form-check-label" for="Daybed">Daybed</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Coffee">
                                                    <label class="form-check-label" for="Coffee">Coffee Tables</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Bookcase">
                                                    <label class="form-check-label" for="Bookcase">Bookcase</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Ottoman">
                                                    <label class="form-check-label" for="Ottoman">Ottoman</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Tables">
                                                    <label class="form-check-label" for="Tables">Side Tables</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Console">
                                                    <label class="form-check-label" for="Console">Media Console</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Console22">
                                                    <label class="form-check-label" for="Console22">Console</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="category" class="form-check-input" id="Console2">
                                                    <label class="form-check-label" for="Console2">Coffee Tables</label>
                                                </div>
                                            </div>
                                            <a href="#">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Color
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="grid_two">
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="beige">
                                                    <label class="form-check-label" for="beige">Beige</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="walnut">
                                                    <label class="form-check-label" for="walnut">Walnut</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="brown">
                                                    <label class="form-check-label" for="brown">Brown</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="black">
                                                    <label class="form-check-label" for="black">Black</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="gray">
                                                    <label class="form-check-label" for="gray">Gray</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="espresso">
                                                    <label class="form-check-label" for="espresso">Espresso</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="white">
                                                    <label class="form-check-label" for="white">White</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="navy">
                                                    <label class="form-check-label" for="navy">Navy</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="oak">
                                                    <label class="form-check-label" for="oak">Oak</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="charcoal">
                                                    <label class="form-check-label" for="charcoal">Charcoal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="mahogany">
                                                    <label class="form-check-label" for="mahogany">Mahogany</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="color" class="form-check-input" id="maple">
                                                    <label class="form-check-label" for="maple">Maple</label>
                                                </div>
                                            </div>
                                            <a href="#">See More</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Price
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="grid_two">
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="under-100">
                                                    <label class="form-check-label" for="under-100">Under $100</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="100-299">
                                                    <label class="form-check-label" for="100-299">$100 – $299</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="300-499">
                                                    <label class="form-check-label" for="300-499">$300 – $499</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="500-799">
                                                    <label class="form-check-label" for="500-799">$500 – $799</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="800-999">
                                                    <label class="form-check-label" for="800-999">$800 – $999</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="price" class="form-check-input" id="1000-plus">
                                                    <label class="form-check-label" for="1000-plus">$1000+</label>
                                                </div>
                                            </div>
                                            <a href="#">See More</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Discount
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="grid_two">
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-10">
                                                    <label class="form-check-label" for="discount-10">10% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-20">
                                                    <label class="form-check-label" for="discount-20">20% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-30">
                                                    <label class="form-check-label" for="discount-30">30% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-40">
                                                    <label class="form-check-label" for="discount-40">40% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-50">
                                                    <label class="form-check-label" for="discount-50">50% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-60">
                                                    <label class="form-check-label" for="discount-60">60% Off</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="discount" class="form-check-input" id="discount-70">
                                                    <label class="form-check-label" for="discount-70">70% Off</label>
                                                </div>
                                            </div>
                                            <a href="#">See More</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop_right_section">
                    <div class="shop_heading">
                        New Arrivals

                        <div class="filter d-lg-none">
                            <img src="assets/images/icons/filter.svg" alt="filter icon">
                            Filter
                        </div>
                    </div>
                    <div class="item_sorting_container d-flex align-items-center justify-content-between gap-3 mb-4">
                        <div class="sort_item">
                            108 items
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

                    <div class="product_filter_div latest_arrival_slider">
                        <div class="row gx-3 gy-5">
                            <?php foreach ($latestArrival as $product): ?>
                                <div class="col-md-6 col-xxl-4 new_wrapper">
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
                                        <div class="swiper-button-next d-lg-none">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </div>
                                        <div class="swiper-button-prev d-lg-none">
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
            </div>
        </div>
    </div>
</section>
<!-- NEW ARRIVAL SECTION STARTS ENDS HERE -->

<?php include 'inc/footer.php'; ?>
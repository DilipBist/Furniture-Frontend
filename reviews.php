<?php 
$pageTitle = 'Reviews';
include 'inc/header.php' 
?>
<!-- REVIEWS SECTION STARTS FORM HERE  -->
<section class="reviews_contianer">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p> Manage Reviews</p>
        </div>

        <h2>Manage Reviews</h2>

        <div class="review_data_tabs">
            <button class="tab-button active" data-tab="to-be-reviewed">
                To Be Reviewed (21)
            </button>
            <button class="tab-button" data-tab="reviewed">
                Reviewed (8)
            </button>
        </div>


        <div class="review_tabs_details_container">
            <div class="tab-content active" data-content="to-be-reviewed">
                <div class="row g-3 g-md-4">
                    <div class="col-6 col-md-4 col-xxl-3">
                        <div class="to_be_review_product">
                            <img src="assets/images/featured/s1.jpg" alt="">
                            <h3>Indivi 2-seater sofa</h3>
                            <div class="d-flex align-items-center gap-2 my-2">
                                <div class="color"></div>
                                <div class="color_name">White</div>
                                <div class="size">60” X 75”</div>
                            </div>
                            <div class="price">
                                $38.00
                            </div>
                            <a href="write-review.php">Review</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-3">
                        <div class="to_be_review_product">
                            <img src="assets/images/featured/s2.png" alt="">
                            <h3>Indivi 2-seater sofa</h3>
                            <div class="d-flex align-items-center gap-2 my-2">
                                <div class="color"></div>
                                <div class="color_name">White</div>
                                <div class="size">60” X 75”</div>
                            </div>
                            <div class="price">
                                $38.00
                            </div>
                            <a href="write-review.php">Review</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-3">
                        <div class="to_be_review_product">
                            <img src="assets/images/featured/s3.png" alt="">
                            <h3>Indivi 2-seater sofa</h3>
                            <div class="d-flex align-items-center gap-2 my-2">
                                <div class="color"></div>
                                <div class="color_name">White</div>
                                <div class="size">60” X 75”</div>
                            </div>
                            <div class="price">
                                $38.00
                            </div>
                            <a href="write-review.php">Review</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-3">
                        <div class="to_be_review_product">
                            <img src="assets/images/featured/s4.png" alt="">
                            <h3>Indivi 2-seater sofa</h3>
                            <div class="d-flex align-items-center gap-2 my-2">
                                <div class="color"></div>
                                <div class="color_name">White</div>
                                <div class="size">60” X 75”</div>
                            </div>
                            <div class="price">
                                $38.00
                            </div>
                            <a href="write-review.php">Review</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xxl-3">
                        <div class="to_be_review_product">
                            <img src="assets/images/featured/s6.png" alt="">
                            <h3>Indivi 2-seater sofa</h3>
                            <div class="d-flex align-items-center gap-2 my-2">
                                <div class="color"></div>
                                <div class="color_name">White</div>
                                <div class="size">60” X 75”</div>
                            </div>
                            <div class="price">
                                $38.00
                            </div>
                            <a href="write-review.php">Review</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" data-content="reviewed">
                <div class="write_review_container mt-4">
                    <div class="d-flex align-items-center justify-content-between gap-4 flex-wrap">
                        <div class="review_product_card d-flex gap-3 align-items-center">
                            <div class="image">
                                <img src="assets/images/products/em1.png" alt="">
                            </div>

                            <div>
                                <h4>Striped bedspread</h4>
                                <p>Size: Queen: 60" W × 80" L</p>
                                <p>Item: 10604847</p>
                                <div class="d-flex align-items-center gap-2">
                                    <span>Color: </span>
                                    <div class="color">
                                        <img src="assets/images/products/em1.png" alt="">
                                    </div>
                                    <span class="grey">Orange Strips</span>
                                </div>
                            </div>
                        </div>


                        <div class="edit_btn_container d-flex flex-md-column gap-3 gap-md-5">
                            <button>
                                <img src="assets/images/icons/edit.svg" alt="edit icon">
                                <span> Edit</span>
                            </button>
                            <button>
                                <i class="ri-delete-bin-7-line"></i>
                                <span>Delete</span>
                            </button>
                        </div>
                    </div>

                    <div class="rating_box_container mt-4 mt-lg-5">
                        <h4>Rating</h4>
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-1">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-line"></i>
                            </div>
                            <span>Satisfactory</span>
                        </div>
                    </div>

                    <div class="review_deails mt-4 mt-lg-5">
                        <h4>Review Details</h4>

                        <form action="" class="mt-3">
                            <textarea name="review" placeholder="This furniture completely transformed my space! Stylish, comfortable, and well-made—highly recommend it."></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- REVIEWS SECTION STARTS FORM ENDS -->

<?php include 'inc/footer.php'; ?>
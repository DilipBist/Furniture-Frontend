<?php 
$pageTitle = 'Write Review';
include 'inc/header.php' 
?>

<!-- REVIEWS SECTION STARTS FORM HERE  -->
<section class="reviews_contianer">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p> Write Review</p>
        </div>

        <h2>Write Review</h2>

        <div class="write_review_container mt-4">
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
                    <textarea name="review" placeholder="What do you think of this product?"></textarea>
                </form>
            </div>

            <div class="review_image_add mt-4 mt-lg-5 d-flex align-items-center gap-3 flex-wrap">
                <div class="image">
                    <img src="assets/images/products/em1.png" alt="">
                    <i class="ri-close-line"></i>
                </div>
                <div class="image">
                    <img src="assets/images/cameraframe.png " alt="">
                </div>
            </div>

            <a href="#">Submit</a>
        </div>
    </div>
</section>
<!-- REVIEWS SECTION STARTS FORM ENDS -->

<?php include 'inc/footer.php'; ?>
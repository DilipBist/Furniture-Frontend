<?php 
$pageTitle = 'Testimonials';
include 'inc/header.php' 
?>

<?php
$heroImage = "assets/images/about/testihero.jpg";
$heroAlt = "TESTIMONIALS";
$smallHeading = "TESTIMONIALS";
$mainHeading = "Voices of Our Happy Customers";
$subText = "See how Urban Neat has made a difference in homes like yours.";

include("inc/common_hero.php");
?>


<!-- CLIENT TESTIMONIALS SECTION STARTS  -->
<section class="client_testimonials">
    <div class="container">
        <div class="client_testi_heading">
            <h3>What Our Customers Say</h3>
            <p>Hear from those who’ve experienced the comfort and style of Urban Neat.</p>
        </div>

        <div class="row g-4 mt-4">
            <?php foreach ($customerReviews as $review) : ?>
                <div class="col-md-6 col-lg-4">
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
    </div>
</section>
<!-- CLIENT TESTIMONIALS SECTION ENDS -->


<!-- CLIENT VIDEO TESTIMONIALS SECTION STARTS   -->
<section class="client_video_review_section">
    <div class="container">
        <div class="client_testi_heading">
            <h3>Voices of Our Happy Customers</h3>
            <p>See how Urban Neat has made a difference in homes like yours.</p>
        </div>

        <div class="row g-4 mt-4">
            <?php foreach($clientVideo as $video) : ?>
            <div class="col-md-6 col-lg-4">
                <div class="video_review_container">
                    <img src="<?= $video['image'] ?>" alt="client Image">
                    <div class="video_palyicon">
                        <a class="play-btn popup-video" href="<?= $video['video_link'] ?>"></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- CLIENT VIDEO TESTIMONIALS SECTION  ENDS  -->

<?php include 'inc/footer.php'; ?>
<?php 
$pageTitle = 'Blog';
include 'inc/header.php' 
?>

<?php
$heroImage = "assets/images/about/blog.jpg";
$heroAlt = "INSIGHTS";
$smallHeading = "INSIGHTS";
$mainHeading = "The Urban Neat Journal";
$subText = "Stay updated on trends, tips, and design ideas for your perfect space.";

include("inc/common_hero.php");
?>


<!-- BLOG DETAILS SECTION STARTS  -->
<section class="blog_details_section">
    <div class="container">
        <div class="client_testi_heading">
            <h3>Insights & Expertise</h3>
            <p>Furniture tips, trends & everything in between.</p>
        </div>


        <div class="row g-4 mt-4">
            <?php foreach ($blogs as $blog) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog_data_container">
                        <div class="blog_img">
                            <img src="<?= $blog['image'] ?>" alt="Blog Image">
                        </div>
                        <div class="blog_time">
                            <div class="blogtype">
                                <?= $blog['type'] ?>
                            </div>
                            <div class="blog_date">
                                <?= $blog['date'] ?>
                            </div>
                        </div>
                        <h3><?= $blog['title'] ?></h3>
                        <p><?= $blog['description'] ?></p>

                        <a href="individual-blog.php">
                            Read More
                            <i class="ri-arrow-right-long-line"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- BLOG DETAILS SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
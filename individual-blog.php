<?php 
$pageTitle = 'Individual-blog';
include 'inc/header.php' 
?>

<!-- INDIVIDUAL BLOG HERO SECTION STARTS  -->
<section class="individual_blog_hero_section">
    <img src="assets/images/blog/indiblog.jpg" alt="Blog Image">

    <div class="indi_blog_content">
        <div class="container">
            <h3>5 Tips for Washing Blankets to Keep Them Clean</h3>
        </div>
    </div>
</section>
<!-- INDIVIDUAL BLOG HERO SECTION ENDS -->

<!-- INDIVIDUAL BLOG DESCRIPTION SECTION STARTS  -->
<section class="individual_blog_description_section">
    <div class="container">
        <p>To prevent any machine malfunctions and ensure soft and fluffy blankets, follow these steps:</p>

        <ol>
            <li> Soak the blankets in clean water: If the blankets are not soaked in water, the washing machine might cause damage or insufficient cleaning to the blankets</li>
            <li>Squeeze out some water from the blankets: You can put the blankets in a basket and let some water drain out to reduce the weight before putting them in the washing machine.</li>
            <li>Use only laundry detergent: Do not add bleach or fabric softener</li>
            <li> Roll up the blankets before putting them in the washing machine: This makes it easier to load the blankets into the machine and prevents damage to the washing machine.</li>
            <li> Start the washing machine: Use the "Blanket" mode and wash with water at a temperature of 40 degrees Celsius.</li>
        </ol>
        <p>Additional tips:</p>
        <ul>
            <li>For blankets with dimensions of 70x90 inches, use a washing machine with a capacity of 12 kilograms.</li>
            <li>For blankets with dimensions of 100x90 inches, use a washing machine with a capacity of 15 kilograms.</li>
        </ul>

        <div class="indi_blog_img">
            <img src="assets/images/blog/b6.jpg" alt="bed image">
        </div>
    </div>
</section>
<!-- INDIVIDUAL BLOG DESCRIPTION SECTION ENDS -->

<!-- MORE BLOG SHOWCASE SECTION STARTS  -->
<section class="more_blog_showcase">
    <div class="container">
        <div class="client_testi_heading">
            <h3>Insights & Expertise</h3>
            <p>Furniture tips, trends & everything in between.</p>
        </div>

        <div class="expolore_more_slider">
            <div class="swiper ExploreMore">
                <div class="swiper-wrapper">
                    <?php foreach ($blogs as $blog) : ?>
                        <div class="swiper-slide">
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
                <div class="swiper-latestpagination d-lg-none">
                    <span class="swiper-pagination-progressbar-fill"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MORE BLOG SHOWCASE SECTION ENDS -->


<?php include 'inc/footer.php'; ?>
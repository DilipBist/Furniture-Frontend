<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Furniture | <?= isset($pageTitle) ? $pageTitle : 'Home'; ?></title>
    <!-- Bootstrap css link  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Remix icons  -->
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <!-- Swiper css  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <!-- Magnific popup css  -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Remining jquery ui, owl(4files to link ) -->
    <!-- custom css  -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <?php include 'data/data.php'; ?>


    <div class="scroll_top" title="Go To Top" id="Scroll_top">
        <i class="ri-arrow-up-line"></i>
    </div>


    <header>
        <div class="top_header">
            <div class="container">
                <div
                    class="top_header_Content d-flex align-items-center justify-content-center justify-content-md-between gap-3">
                    <div class="top_header_left d-none d-md-flex align-items-center gap-2">
                        <img src="assets/images/icons/deliveryTruckBlack.svg" alt="Truck icon">
                        <p>FREE SHIPPING ON ALL ORDERS OVER $75</p>
                    </div>

                    <div class="top_header_right d-flex align-items-center gap-2 gap-md-3">
                        <div class="contact">
                            <img src="assets/images/icons/callblack.svg" alt="call icon">
                            <a href="telto:9288008663">+92 (8800) - 8632</a>
                        </div>
                        <div class="location">
                            <img src="assets/images/icons/locatonblack.svg" alt="call icon">
                            <a href="#" target="_blank">Location</a>
                        </div>
                        <div class="track_order">
                            <img src="assets/images/icons/tackOrderblack.svg" alt="call icon">
                            <a href="#">Track an Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="fixed_bar" id="fixed_nav">

            <div class="header_logo_section">
                <div class="container position-relative">
                    <div class="header_logo_Section_container d-flex align-items-center justify-content-between gap-3">
                        <a href="index.php" class="c-logo">
                            <img src="assets/images/icons/UrbanNest.svg" alt="Logo">
                        </a>

                        <div class="top_header_search">
                            <input type="text" name="search" placeholder="Search product or brand" id="searchInput">
                            <img src="assets/images/icons/searchGrey.svg" alt="search icon">

                            <div class="input_search_design" id="searchDropdown">
                                <h3>Recently Viewed</h3>

                                <div class="d-flex gap-3 flex-wrap justify-content-between">
                                    <?php foreach ($featuredProducts as $fproduct) : ?>
                                        <a href="#" class="input_seach_data">
                                            <img src="<?= $fproduct['image']; ?>" alt="Product Image">
                                            <div class="product_name">
                                                <?= $fproduct['name']; ?>
                                            </div>
                                            <div class="product_price">
                                                $ <?= $fproduct['price']; ?>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="top_header_account_Details d-flex align-items-center gap-3 gap-md-4">
                            <div>
                                <a href="wishlist.php">
                                    <span>Wishlist</span>
                                    <img src="assets/images/icons/wishlistBlack.svg " alt="heart icon">
                                </a>
                            </div>
                            <div>
                                <a href="cart.php">
                                    <span>Cart</span>
                                    <img src="assets/images/icons/cartBlack.svg " alt="heart icon">
                                </a>
                            </div>
                            <div class="account_show">
                                <a href="#" id="accountToggle">
                                    <span>Account</span>
                                    <img src="assets/images/icons/accountblack.svg " alt="heart icon">
                                </a>

                                <div class="account_hover_details">
                                    <a href="account.php">
                                        <img src="assets/images/icons/user.svg" alt="user icon">
                                        <span>Account</span>
                                    </a>
                                    <a href="order.php">
                                        <img src="assets/images/icons/order.svg" alt="user icon">
                                        <span>Order</span>
                                    </a>
                                    <a href="help-center.php">
                                        <img src="assets/images/icons/help.svg" alt="help icon">
                                        <span>Help Center</span>
                                    </a>
                                    <a href="index.php" id="logout">
                                        <img src="assets/images/icons/logout.svg" alt="logout icon">
                                        <span>Logo Out</span>
                                    </a>
                                </div>
                            </div>


                            <button class="navbar-toggler d-xl-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                role="button" aria-controls="offcanvasExample" type="button" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- nav bar  -->
            <nav class="navbar navbar-expand-xl" id="navbar">
                <div class="container">
                    <!-- Offcanvas Menu -->
                    <div class="offcanvas offcanvas-start" id="offcanvasExample" tabindex="-1"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <p class="menu_text">Menu</p>
                            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="custom-close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>

                        <div class="offcanvas-body">
                            <ul
                                class="navbar-nav align-items-xl-center justify-content-xl-between flex-xl-wrap position-relative">

                                <li class="nav-item">
                                    <a class="nav-link">
                                        NEW
                                        <i class="ri-add-line"></i>
                                    </a>


                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-5">
                                        <div class="dropdown_left">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">The winter collection
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                                <a href="#">
                                                    Outdoor preview
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_cat">
                                                <h5>Shop by category</h5>
                                                <ul>
                                                    <li><a href="#" class="viewall">View all</a></li>
                                                    <li><a href="#">Living Room</a></li>
                                                    <li><a href="#">Rugs</a></li>
                                                    <li><a href="#">Bedroom</a></li>
                                                    <li><a href="#">Dining</a></li>
                                                    <li><a href="#">Mattresses</a></li>
                                                    <li><a href="#">Outdoor</a></li>
                                                    <li><a href="#">Baby & Kids</a></li>
                                                    <li><a href="#">Office</a></li>
                                                    <li><a href="#">Decor</a></li>
                                                    <li><a href="#">Storage</a></li>
                                                    <li><a href="#">Holiday</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="dropdown_right">
                                            <h5>Featured Products</h5>
                                            <div class="swiper NavFetProducts">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($featuredProducts as $fproduct) : ?>
                                                        <div class="swiper-slide">
                                                            <a href="#" class="dropdown_featured_product_slider">
                                                                <img src="<?= $fproduct['image']; ?>" alt="Product Image">
                                                                <div class="product_name">
                                                                    <?= $fproduct['name']; ?>
                                                                </div>
                                                                <div class="rating">
                                                                    <?php
                                                                    $fullStars = floor($fproduct['rating']);
                                                                    $halfStar = ($fproduct['rating'] - $fullStars) >= 0.5;

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
                                                                <div class="product_price">
                                                                    $ <?= $fproduct['price']; ?>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        SALE
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-5">
                                        <div class="dropdown_left">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Clearance
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_cat">
                                                <h5>Shop by category</h5>
                                                <ul>
                                                    <li><a href="#" class="viewall">View all</a></li>
                                                    <li><a href="#">Living Room</a></li>
                                                    <li><a href="#">Rugs</a></li>
                                                    <li><a href="#">Bedroom</a></li>
                                                    <li><a href="#">Dining</a></li>
                                                    <li><a href="#">Mattresses</a></li>
                                                    <li><a href="#">Outdoor</a></li>
                                                    <li><a href="#">Baby & Kids</a></li>
                                                    <li><a href="#">Office</a></li>
                                                    <li><a href="#">Decor</a></li>
                                                    <li><a href="#">Storage</a></li>
                                                    <li><a href="#">Holiday</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="dropdown_right">
                                            <h5>Featured Products</h5>
                                            <div class="swiper NavFetProducts">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($featuredProducts as $fproduct) : ?>
                                                        <div class="swiper-slide">
                                                            <a href="#" class="dropdown_featured_product_slider">
                                                                <img src="<?= $fproduct['image']; ?>" alt="Product Image">
                                                                <div class="product_name">
                                                                    <?= $fproduct['name']; ?>
                                                                </div>
                                                                <div class="rating">
                                                                    <?php
                                                                    $fullStars = floor($fproduct['rating']);
                                                                    $halfStar = ($fproduct['rating'] - $fullStars) >= 0.5;

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
                                                                <div class="product_price">
                                                                    $ <?= $fproduct['price']; ?>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        LIVING ROOM
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4 hover_livingRoom">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Seating
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Seating</a></li>
                                                    <li><a href="#">Sofa & Sectional Collections</a></li>
                                                    <li><a href="#">Accent Chairs</a></li>
                                                    <li><a href="#">Bedroom</a></li>
                                                    <li><a href="#">Chaise Lounges</a></li>
                                                    <li><a href="#">Ottomans & Poufs</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Tables
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Tables</a></li>
                                                    <li><a href="#">Coffee Tables</a></li>
                                                    <li><a href="#">Side Tables</a></li>
                                                    <li><a href="#">Console Tables</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp3.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        RUGS
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Materials
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Rugs</a></li>
                                                    <li><a href="#">Wool Rugs</a></li>
                                                    <li><a href="#">Natural Fiber Rugs</a></li>
                                                    <li><a href="#">Synthetic Rugs</a></li>
                                                    <li><a href="#">Shag Rugs</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Style
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Rugs</a></li>
                                                    <li><a href="#">Patterned Rugs</a></li>
                                                    <li><a href="#">Solid Rugs</a></li>
                                                    <li><a href="#">Vintage Rugs</a></li>
                                                    <li><a href="#">Modern Rugs</a></li>
                                                    <li><a href="#">Boho Rugs</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp3.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Room
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Rugs</a></li>
                                                    <li><a href="#">Living Room Rugs</a></li>
                                                    <li><a href="#">Bedroom Rugs </a></li>
                                                    <li><a href="#">Dining Room Rugs</a></li>
                                                    <li><a href="#">Outdoor Rugs</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp4.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        BEDROOM
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row  gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Bed Types
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Beds</a></li>
                                                    <li><a href="#">Platform Beds</a></li>
                                                    <li><a href="#">Upholstered Beds</a></li>
                                                    <li><a href="#">Canopy Beds</a></li>
                                                    <li><a href="#">Sleigh Beds</a></li>
                                                    <li><a href="#">Daybeds</a></li>
                                                    <li><a href="#">Murphy Beds</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Sizes
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Beds</a></li>
                                                    <li><a href="#">Twin Beds</a></li>
                                                    <li><a href="#">Full Beds</a></li>
                                                    <li><a href="#">Queen Beds</a></li>
                                                    <li><a href="#">Modern Rugs</a></li>
                                                    <li><a href="#">King Beds</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Bedding
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Bedding</a></li>
                                                    <li><a href="#">Comforter Sets</a></li>
                                                    <li><a href="#">Duvet Covers </a></li>
                                                    <li><a href="#">Quilts & Coverlets</a></li>
                                                    <li><a href="#">Sheet Sets</a></li>
                                                    <li><a href="#">Decorative Pillows</a></li>
                                                    <li><a href="#">Bed Pillows</a></li>
                                                    <li><a href="#">Mattress Protectors & Toppers</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link">
                                        DINING
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container dinning_nav">
                                        <div class="dropdown_left">
                                            <div class="extra_links d-flex flex-column gap-3">
                                                <a href="#">
                                                    Dining Tables
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                                <a href="#">
                                                    Dining Chairs
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                                <a href="#">
                                                    Dining Benches
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                                <a href="#">
                                                    Dining Sets
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="showCaseimg">
                                                <img src="assets/images/featured/fp2.png" alt="bed image">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        MATTRESSES
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Size
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Mattresses</a></li>
                                                    <li><a href="#">Twin</a></li>
                                                    <li><a href="#">Twin XL</a></li>
                                                    <li><a href="#">Full</a></li>
                                                    <li><a href="#">Queen</a></li>
                                                    <li><a href="#">King</a></li>
                                                    <li><a href="#">California King</a></li>
                                                    <li><a href="#">Split California King</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    By Type
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Mattresses</a></li>
                                                    <li><a href="#">Memory Foam</a></li>
                                                    <li><a href="#">Hybrid</a></li>
                                                    <li><a href="#">Innerspring</a></li>
                                                    <li><a href="#">Mattress in a Box</a></li>
                                                    <li><a href="#">Air Mattress</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Mattress Accessories
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Mattress Accessories</a></li>
                                                    <li><a href="#">Mattress Protector</a></li>
                                                    <li><a href="#">Mattress Topper </a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Mattress Pads</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        OUTDOOR
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        BABY & KIDS
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        OFFICE
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        DECOR
                                        <i class="ri-add-line"></i>
                                    </a>


                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom center_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        STOREAGE
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom last_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        HOLIDAY
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <div class="hover_dropdown_container d-flex flex-column flex-xl-row gap-xl-4  hover_livingRoom last_dropdown">
                                        <div class="dropdown_left ">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Lounge Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Lounge Furniture</a></li>
                                                    <li><a href="#">Outdoor Sectionals</a></li>
                                                    <li><a href="#">Outdoor Sofa & Loveseats</a></li>
                                                    <li><a href="#">Outdoor Chairs & Chaises</a></li>
                                                    <li><a href="#">Outdoor Benches</a></li>
                                                    <li><a href="#">Outdoor Coffee Tables</a></li>
                                                    <li><a href="#">Outdoor Conversation Tables</a></li>
                                                    <li><a href="#">Outdoor Chair Sets</a></li>
                                                </ul>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Dining Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#" class="viewall">All Outdoor Dining Furniture</a></li>
                                                    <li><a href="#">Outdoor Dining Chairs</a></li>
                                                    <li><a href="#">Outdoor Dining Tables</a></li>
                                                    <li><a href="#">Outdoor Dining Sets</a></li>
                                                </ul>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="extra_links">
                                                        <a href="#">
                                                            Outdoor Accessories
                                                            <i class="ri-arrow-right-long-line"></i>
                                                        </a>
                                                    </div>

                                                    <ul class="mt-0">
                                                        <li><a href="#">Patio Umbrellas</a></li>
                                                    </ul>
                                                </div>

                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp1.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hover_dropdown_right">
                                            <div class="extra_links d-flex flex-column gap-2">
                                                <a href="#">
                                                    Outdoor Bar Furniture
                                                    <i class="ri-arrow-right-long-line"></i>
                                                </a>
                                            </div>

                                            <div class="shop_livingRoom">
                                                <ul>
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="extra_links">
                                                    <a href="#">
                                                        Outdoor By Material
                                                        <i class="ri-arrow-right-long-line"></i>
                                                    </a>
                                                </div>

                                                <ul class="mt-0">
                                                    <li><a href="#">Outdoor Bar Stools</a></li>
                                                    <li><a href="#">Outdoor Bar Tables</a></li>
                                                    <li><a href="#">Pillow & Cusion</a></li>
                                                    <li><a href="#">Outdoor Bar Sets</a></li>
                                                </ul>
                                                <div class="showCaseimg">
                                                    <img src="assets/images/featured/fp2.png" alt="bed image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
            <!-- nav bar ends  -->
        </div>


        <div class="header_discount_tag_div">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <p>Up to 25% Off Furniture, Decor & More</p>
                    <p>Last Call: Up to 60% Off Clearance</p>
                    <p>The Spring Collection is Here: Shop it first</p>
                    <p>Sign Up for Text & Save 15%</p>
                </div>
            </div>
        </div>
    </header>
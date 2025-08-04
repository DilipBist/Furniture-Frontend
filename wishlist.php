<?php 
$pageTitle = 'Wishlist';
include 'inc/header.php' 
?>

<!-- WISHLIST SECTION STARTS  -->
<section class="recently_viewed_section">
    <div class="container">
        <div class="bread_cumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Wishlist</p>
        </div>

        <h2>Wishlist</h2>

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

        <div class="wish_list_data_container">
            <div class="row g-4">
                <div class="col-6 col-lg-4 col-xxl-3 d-flex">
                    <div class="wishlist_Details">
                        <div class="wishlist_img">
                            <img src="assets/images/featured/fp2.png" alt="wish list img">

                            <div class="tag_radio"></div>
                        </div>
                        <div class="same_height">
                            <div class="list_details">
                                <h3>Striped bedspread </h3>

                                <div class="size d-flex align-items-center gap-1">
                                    <p>90" W × 38" D × 37" H,</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="color"></div>
                                        <p>Ivory</p>
                                    </div>
                                </div>
                                <div class="list_price">
                                    $38.00
                                </div>
                            </div>

                            <div class="cart_details">
                                <button>
                                    <i class="ri-shopping-cart-2-line"></i>
                                    Add to Cart
                                </button>
                                <button>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xxl-3 d-flex">
                    <div class="wishlist_Details">
                        <div class="wishlist_img">
                            <img src="assets/images/featured/fp1.png" alt="wish list img">

                            <div class="tag_radio"></div>
                        </div>
                        <div class="same_height">
                            <div class="list_details">
                                <h3>Full/Queen Heavyweight Linen Blend </h3>

                                <div class="size d-flex align-items-center gap-1">
                                    <p>90" W × 38" D × 37" H,</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="color"></div>
                                        <p>Ivory</p>
                                    </div>
                                </div>
                                <div class="list_price">
                                    $38.00
                                </div>
                            </div>

                            <div class="cart_details">
                                <button>
                                    <i class="ri-shopping-cart-2-line"></i>
                                    Add to Cart
                                </button>
                                <button>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xxl-3 d-flex">
                    <div class="wishlist_Details">
                        <div class="wishlist_img">
                            <img src="assets/images/featured/fp3.png" alt="wish list img">

                            <div class="tag_radio"></div>
                        </div>
                        <div class="same_height">
                            <div class="list_details">
                                <h3>Striped bedspread </h3>

                                <div class="size d-flex align-items-center gap-1">
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="color"></div>
                                        <p>white</p>
                                    </div>
                                </div>
                                <div class="list_price">
                                    $38.00
                                </div>
                            </div>

                            <div class="cart_details">
                                <button>
                                    <i class="ri-shopping-cart-2-line"></i>
                                    Add to Cart
                                </button>
                                <button>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-xxl-3 d-flex">
                    <div class="wishlist_Details">
                        <div class="wishlist_img">
                            <img src="assets/images/featured/s6.png" alt="wish list img">

                            <div class="tag_radio"></div>
                        </div>
                        <div class="same_height">
                            <div class="list_details">
                                <h3>Sloane Glazed Ceramic Vase - Off-white </h3>

                                <div class="size d-flex align-items-center gap-1">
                                    <p>90" W × 38" D × 37" H,</p>
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="color"></div>
                                        <p>Ivory</p>
                                    </div>
                                </div>
                                <div class="list_price">
                                    $38.00
                                </div>
                            </div>

                            <div class="cart_details">
                                <button>
                                    <i class="ri-shopping-cart-2-line"></i>
                                    Add to Cart
                                </button>
                                <button>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- WISHLIST SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
<?php 
$pageTitle = 'Shipping address View';
include 'inc/header.php' 
?>


<!-- SHIPPING ADDRESS SECTION STARTS  -->
<section class="account_personal_info">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p>Manage Address Book</p>
        </div>


        <div class=" mt-3 mt-lg-4 shipping_address">
            <h2>Manage Address Book</h2>

            <div class="shipping_address_showcase mt-4 mt-lg-5">
                <div class="name d-flex align-items-center gap-3">
                    <h5>John Doe</h5>
                    <p>Default Shipping Address</p>
                </div>

                <div class="d-flex align-items-center justify-content-between gap-4 mt-4">
                    <div class="address_details">
                        <p>123 Main Street</p>
                        <p>Apartment 4B</p>
                        <p>Springfield, CA 94103</p>
                        <p>United States</p>
                    </div>

                    <div class="edit_btn_container d-flex flex-column gap-5">
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
            </div>


            <a href="shipping-address-add.php">Add New Address</a>
        </div>

    </div>
</section>
<!-- SHIPPING ADDRESS SECTION ENDS -->


<?php include 'inc/footer.php'; ?>
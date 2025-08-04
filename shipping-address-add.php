<?php 
$pageTitle = 'shipping address edit';
include 'inc/header.php' 
?>


<!-- SHIPPING ADDRESS SECTION STARTS  -->
<section class="account_personal_info">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p> Add/Edit an Address</p>
        </div>


        <div class=" mt-3 mt-lg-4 shipping_address">
            <h2>Add/Edit an Address</h2>

            <form action="" class="mt-4 mt-lg-5">
                <div class="row g-3 input_container">
                    <div class="col-6">
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                    <div class="col-12">
                        <select class="form-select" name="Country">
                            <option selected disabled>Country</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="text" name="Address" placeholder="Address">
                    </div>
                    <div class="col-12">
                        <input type="text" name="City" placeholder="City">
                    </div>
                    <div class="col-12">
                        <input type="text" name="Postalcode" placeholder="Postal Code">
                    </div>
                </div>

                <div class="checkboxes">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check1">
                        <label class="form-check-label" for="check1">
                            Make default shipping address
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check2">
                        <label class="form-check-label" for="check2">
                            Make default billing address
                        </label>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 btnContainer">
                    <button>Save</button>
                    <button type="button">Cancel</button>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- SHIPPING ADDRESS SECTION ENDS -->


<?php include 'inc/footer.php'; ?>
<?php 
$pageTitle = 'Trace-order';
include 'inc/header.php' 
?>

<!-- SHIPPING ADDRESS SECTION STARTS  -->
<section class="account_personal_info">
    <div class="container">
        <div class="bread_cumb">
            <a href="help-center.php">Help Center</a>
            <span>/</span>
            <p>Trace an Order</p>
        </div>


        <div class=" mt-3 mt-lg-4 shipping_address trackorder">
            <h2>Trace an Order</h2>

            <form action="" class="mt-4 mt-lg-5">
                <div class="row g-3 g-md-4 input_container">
                    <div class="col-12">
                        <input type="number" name="ordernumber" placeholder="Order Number">
                    </div>
                    <div class="col-12">
                        <input type="number" name="Postalcode" placeholder="Zip / Postal Code">
                    </div>
                    <div class="col-12">
                        <button>Find Order</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- SHIPPING ADDRESS SECTION ENDS -->
<?php include 'inc/footer.php'; ?>
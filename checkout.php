<?php 
$pageTitle = 'Checkout';
include 'inc/header.php' 
?>


<!-- CHECKOUT SECTION STARTS  -->
<section class="checkout_section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <div class="checkout_left">
                    <h2>Shipping Address</h2>
                    <form action="" class="mt-4 mt-lg-5">

                        <div class="row g-3 g-md-4">
                            <div class="col-6">
                                <input type="text" name="fname" placeholder="First Name">
                            </div>
                            <div class="col-6">
                                <input type="text" name="lname" placeholder="Last Name">
                            </div>
                            <div class="col-12">
                                <input type="number" name="unit" placeholder="Apt, Suit, Unit, Etc">
                            </div>
                            <div class="col-12">
                                <input type="text" name="city" placeholder="Town /City">
                            </div>
                            <div class="col-12">
                                <input type="text" name="State" placeholder="State">
                            </div>
                            <div class="col-12">
                                <input type="number" name="PostalCode" placeholder="Zip / Postal Code">
                            </div>
                            <div class="col-12">
                                <input type="number" name="phoneno" placeholder="Phone Number">
                            </div>
                            <div class="col-12">
                               <div class="d-flex align-items-center gap-2">
                                 <input type="checkbox" id="check">
                                 <label for="check">Make default shipping address</label>
                               </div>
                            </div>
                            <div class="col-12">
                                <a href="checkout-billing.php">Continue</a>
                                <!-- uncomment if button tag is needed for form submission and remove a tag -->
                                <!-- <button>Continue</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="checkout_right">
                    <h3>Order Summary</h3>

                    <ul>
                        <li>
                            <div class="left_text">Subtotal</div>
                            <div class="right_text">$228.00</div>
                        </li>
                        <li>
                            <div class="left_text">Discount</div>
                            <div class="right_text">-$28.00</div>
                        </li>
                        <li>
                            <div class="left_text">Delivery</div>
                            <div class="right_text">---</div>
                        </li>
                        <li>
                            <div class="left_text">Estimated Tax</div>
                            <div class="right_text">$19.00</div>
                        </li>
                    </ul>

                    <div class="total">
                        <h4>Total</h4>
                        <p>$302.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CHECKOUT SECTION ENDS -->


<?php include 'inc/footer.php'; ?>
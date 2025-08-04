<?php 
$pageTitle = 'Checkout-billing';
include 'inc/header.php' 
?>


<!-- CHECKOUT SECTION STARTS  -->
<section class="checkout_section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <div class="checkout_left">
                    <div class="left_heading">
                        <h3>Shipping Address</h3>
                        <a href="#">Change</a>
                    </div>

                    <div class="shipping_details_list">
                        <p>John Doe</p>
                        <p>123 Main Street</p>
                        <p>Apartment 4B</p>
                        <p>Springfield, CA 94103</p>
                        <p>United States</p>
                    </div>
                    <form action="" class="mt-4 mt-lg-5 ship_payment_form">
                        <h3>Payment</h3>
                        <div class="row g-3 g-md-4 mt-1">
                            <div class="col-12">
                                <div class="position-relative">
                                    <input type="number" name="unit" placeholder="Card Number *">
                                    <img src="assets/images/icons/lock.svg" alt="lock icon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="date" placeholder="Expiration date(MM/YY) *">
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <input type="number" name="Securitycode" placeholder="Security code *">
                                    <img src="assets/images/icons/qmark.svg" alt="question mark">
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" name="cardName" placeholder="Name on the card *">
                            </div>
                            <div class="col-12">
                                <div class="payment_methods">
                                    <div>
                                        <img src="assets/images/payment/paypal.png" alt="">
                                    </div>
                                    <div>
                                        <img src="assets/images/payment/discover.png" alt="">
                                    </div>
                                    <div>
                                        <img src="assets/images/payment/visa.png" alt="">
                                    </div>
                                    <div>
                                        +3
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button>Pay now</button>
                            </div>
                            <div class="col-12">
                                <div class="pay_with_paypal">
                                    <button>
                                        Pay with
                                        <img src="assets/images/payment/paypal.png" alt="">
                                    </button>
                                </div>
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
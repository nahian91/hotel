<?php include 'inc/header.php'; ?>

<section class="payment">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-title">Confirm & Pay</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="booking-information">
                    <h4 class="page-subtitle">Your Booking Information</h4>
                    <ul>
                        <li><img src="assets/img/icons/icon-range.svg" alt=""> 23 Nov To 26 Nov (2 nights)</li>
                        <li><img src="assets/img/icons/icon-persons.svg" alt=""> 2 Adult + 0 Child</li>
                    </ul>
                </div>
                <div class="payment-form-box">
                    <h4 class="page-subtitle">Pay With</h4>
                    <ul class="payment-option">
                        <li>
                            <label>
                                <input type="radio" name="test" value="small" checked>
                                <img src="assets/img/icons/payment-card.svg" alt="Option 1">
                                <span>Credit Card</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="assets/img/icons/payment-bkash.svg" alt="Option 1">
                                <span>bKash</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="assets/img/icons/payment-nagad.svg" alt="Option 1">
                                <span>Nagad</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="test" value="big">
                                <img src="assets/img/icons/payment-dbbl.svg" alt="Option 1">
                                <span>DBBL Nesux</span>
                            </label>
                        </li>
                    </ul>
                    <div class="payment-form">
                        <input type="text" placeholder="Card Holder Name">
                        <input type="text" placeholder="Card Number">
                        <div class="payment-form-half">
                            <input type="text" placeholder="Expiration">
                            <input type="text" placeholder="CVV">
                        </div>
                    </div>
                    <div class="payment-form-select">
                        <select name="" id="">
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                        </select>
                    </div>
                </div>
                <div class="booking-cancel">
                    <h4 class="page-subtitle">Cancellation policy</h4>
                    <p>Cancel before check-in on Dec 24 for a partial refund. After that, this reservation is non-refundable. Learn more</p>
                    <label>
                        <input type="checkbox" name="agree1"> I agree to the property rules for guests, Rate Locker’s booking and refund policy, and you will be responsible for any property damage.
                    </label>
                    <label>
                        <input type="checkbox" name="agree2"> I also agree to the Terms of Service, Payments Terms of Service, and I acknowledge the Privacy Policy.
                    </label>
                    <a href="" class="btn-bg">Confirm Booking & Pay</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="booking-summary">
                    <div class="booking-summary-top">
                        <img src="assets/img/icons/hotel-booking.svg" alt="">
                        <div class="booking-summary-info">
                            <span><img src="assets/img/icons/icon-home.png" alt="">Hotel</span>
                            <h4>Seacrest Oceanfront Resort</h4>
                            <p><span>Room:</span> Junior Suite</p>
                        </div>
                    </div>
                    <h5>Price Details</h5>
                    <ul>
                        <li>R#1 - BDT 14,906 X BDT 14,906 <span>BDT 29,812</span></li>
                        <li>VAT & Charges (5% + 7%) <span>BDT 3,577</span></li>
                        <li>Sub Total <span>BDT 33,389</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
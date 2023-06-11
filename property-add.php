<?php include 'inc/header.php'; ?>


<section class="property-step">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 mx-auto">
                <form id="signUpForm" action="#!">
                    <!-- start step indicators -->
                    <div class="form-header d-flex mb-4">
                        <span class="stepIndicator">Step 01</span>
                        <span class="stepIndicator">Step 02</span>
                        <span class="stepIndicator">Step 03</span>
                    </div>
                    <!-- end step indicators -->
        
                    <!-- step one -->
                    <div class="step">
                        <p>Your property's address</p>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon1.png" alt="">
                            <select>
                                <option value="">Select Country</option>
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
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon2.png" alt="">
                            <input type="text" placeholder="Type Your Street Address">
                        </div>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon3.png" alt="">
                            <input type="text" placeholder="Your City">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon4.png" alt="">
                                    <input type="text" placeholder="State / Division">
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon5.png" alt="">
                                    <input type="text" placeholder="Area ZIP Code">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- step two -->
                    <div class="step">
                        <p>Information About Your Property</p>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon1.png" alt="">
                            <input type="text" placeholder="Property Name">
                        </div>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon1.png" alt="">
                            <select>
                                <option value="">Select Property Type</option>
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
                        <div class="row">
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon1.png" alt="">
                                    <input type="text" placeholder="Mention Number Of Rooms">
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon1.png" alt="">
                                    <select>
                                        <option value="">Accepted Currency</option>
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
                        </div>
                        <div class="single-step">
                            <p>Does this property work with a channel manager?</p>
                            <div class="single-step-radio">
                                <label>
                                    <input type="radio" name="radio1">Yes
                                </label>
                                <label>
                                    <input type="radio" name="radio1">No
                                </label>
                            </div>      
                        </div>
                        <div class="single-step">
                            <p>Is this property part of a chain?</p>
                            <div class="single-step-radio">
                                <label>
                                    <input type="radio" name="radio1">Yes
                                </label>
                                <label>
                                    <input type="radio" name="radio1">No
                                </label>
                            </div>      
                        </div>
                    </div>
                
                    <!-- step three -->
                    <div class="step">
                        <p>We will never sell it</p>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon3.png" alt="">
                            <input type="text" placeholder="Property Owner Name">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon4.png" alt="">
                                    <input type="text" placeholder="State / Division">
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-step">
                                    <img src="assets/img/icons/form-icon5.png" alt="">
                                    <input type="number" placeholder="Type Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="single-step">
                            <img src="assets/img/icons/form-icon3.png" alt="">
                            <input type="email" placeholder="Type Your Email Address">
                        </div>
                        <div class="single-step">
                            <p>Upload scanned copies of the required legal documents.</p>
                            <div class="single-step-file-box">
                                <div class="single-step-file">
                                    <input type="file" id="file" />
                                    <label for="file" class="btn-1"><img src="assets/img/icons/form-icon-10.png" alt=""> Trade License</label>
                                </div>
                                <div class="single-step-file">
                                    <input type="file" id="file" />
                                    <label for="file" class="btn-1"><img src="assets/img/icons/form-icon-10.png" alt=""> Business TIN</label>
                                </div>
                                <div class="single-step-file">
                                    <input type="file" id="file" />
                                    <label for="file" class="btn-1"><img src="assets/img/icons/form-icon-10.png" alt=""> Others</label>
                                </div>
                            </div>      
                        </div>
                    </div>
                
                    <!-- start previous / next buttons -->
                    <div class="form-footer d-flex">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Go Back</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                    <!-- end previous / next buttons -->
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
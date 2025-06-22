<?php include 'header.php';?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Get In touch with our Experts</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Get In touch with our Experts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->


        <!-- Start Contact Section -->
        <div class="ptb-100">
            <div class="container">
            <div class="contact-section-inner mb-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-image">
                            <img src="assets/img/subscribe.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name *">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email address *">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Company Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Mobile Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="submit-btn">Submit Now!</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
					</div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Contact Section -->

<?php include 'footer.php';?>
    
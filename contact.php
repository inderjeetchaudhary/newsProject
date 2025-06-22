<?php include 'header.php';?>

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Box Area -->
		<section class="contact-box pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-map-marker"></i>
							<div class="content-title">
								<h3>Address</h3>
								<p>Tech Zone-IV, Greater Noida West, Uttar Pradesh, 201009, India</p>
							</div>
						</div>
                    </div>
                    
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-envelope"></i>
							<div class="content-title">
								<h3>Email</h3>
								<a href="">For General Queries :
Info-team@researchcops.com</a>
								<a href="">For Bidding/RFQ :
Bidding-team@researchcops.com</a>
							</div>
						</div>
                    </div>
                    
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
							<i class="fa fa-phone"></i>
							<div class="content-title">
								<h3>Phone</h3>
								<a href="tel:+882-569-756">+91-9999-677-664</a>
								<a href="tel:+882-569-756">+91-120-492-9813</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Contact Box Area -->
        
        <!-- Start Contact Section -->
        <div class="contact-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-image">
                            <img src="assets/img/contact.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
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
        <!-- End Contact Section -->

<?php include 'footer.php';?>
    
		<!-- ==============================================
		CONTACT
		=============================================== -->
		<section id="contact" class="add-padding">
		
			<div class="container text-center">
				
				<div class="row">
				
					<div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">
					
						<h1 class="big-text">Contact Me</h1>
						
						<p class="lead">I am available for freelance. Can't wait for the next exciting project! Could be yours?</p>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.</p>
					
					</div>
				
					<!--=== Contact Form ===-->

					<form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="contact.php" method="post" novalidate>
						
						<div class="form-group">
						  <label class="control-label" for="contact-name">Name</label>
						  <div class="controls">
							<input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
							<i class="fa fa-user"></i>
						  </div>
						</div><!-- End name input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-mail">Email</label>
						  <div class=" controls">
							<input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
							<i class="fa fa-envelope"></i>
						  </div>
						</div><!-- End email input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-message">Message</label>
							<div class="controls">
								<textarea id="contact-message" name="comments"  placeholder="Your message" class="form-control requiredField" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
								<i class="fa fa-comment"></i>
							</div>
						</div><!-- End textarea -->
						
						<p><button name="submit" type="submit" class="btn btn-color2 btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
						<input type="hidden" name="submitted" id="submitted" value="true" />
						
					</form><!-- End contact-form -->
					
				</div>
				
			</div>
		
		</section>
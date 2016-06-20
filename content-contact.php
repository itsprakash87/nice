<?php
/**
 * The template for displaying the contact form.
 *
 * Contains the content of contact form of the site.
 * Edit this to change the content of contact form.
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<div id="section5">
<!-- Start Contact Area -->
	<section id="contact-area" class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center inner">
					<div class="contact-content">
						<h1>contact form</h1>
						<div class="row">                            
							<div class="col-sm-12">
								<p>Nunc diam leo, fringilla vulputate elit lobortis, consectetur vestibulum quam. Sed id <br>
									felis ligula. In euismod libero at magna dapibus, in rutrum velit lacinia. <br>
									Etiam a mi quis arcu varius condimentum.</p>
							</div>                            
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form action="#" method="post" class="contact-form">
						<div class="col-sm-6 contact-form-left">
							<div class="form-group">
								<input name="name" type="text" class="form-control" id="name" placeholder="Name">
							  	<input type="email" name="email" class="form-control" id="mail" placeholder="Email">
								<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
							</div>
						</div>
						<div class="col-sm-6 contact-form-right">
							<div class="form-group">
								<textarea name="message" rows="6" class="form-control" id="comment" placeholder="Your message here..."></textarea>
								<button type="submit" class="btn btn-default">Send</button>
							</div>
						</div>                        
					</form>    
				</div>                
			</div>
		</div>
	</section>
	<!-- End Contact Area -->
</div>
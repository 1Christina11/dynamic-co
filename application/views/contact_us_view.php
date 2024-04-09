		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('<?php echo base_url()?>assets/images/call-center.png'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

			<div class="container clearfix">
				<h1>Contact</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gutter-40 col-mb-80">
						<!-- Postcontent
						============================================= -->
						<div class="postcontent col-lg-9">

							<h3>Send us an Email</h3>


								<form action="<?php echo site_url('Contact_us/send_mail')?>" method="post">
									
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Phone</label>
											<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
										</div>
										<div class="w-100"></div>
										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">Subject <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-service">Services</label>
											<select id="template-contactform-service" name="services" class="sm-form-control">
												<option selected disabled value=""> -- Select One --</option>
												<?php foreach($services as $row){?>
												<option value="<?php echo $row->services_title?>"><?php echo $row->services_title?></option>
												<?php }?>
											</select>
										</div>
										<div class="w-100"></div>
										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
										</div>
										<div class="col-12 form-group">
											<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										</div>
									</div>
									
								</form>
							
							</div><!-- .postcontent end -->


						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">

							<address>
								<strong>Headquarters:</strong><br>
								<?php echo $contact->location?><br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr><?php echo $contact->mobile?><br>


							<div class="widget border-0 pt-0">

								<a href="<?php echo $contact->facebook_link?>" class="social-icon si-small si-dark si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="<?php echo $contact->twitter_link?>" class="social-icon si-small si-dark si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="<?php echo $contact->youtube_link?>" class="social-icon si-small si-dark si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>

								<a href="<?php echo $contact->pinterest_link?>" class="social-icon si-small si-dark si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="<?php echo $contact->github_link?>" class="social-icon si-small si-dark si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>
								<a href="<?php echo $contact->intagram_link?>" class="social-icon si-small si-dark si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
								<a href="<?php echo $contact->linkedin_link?>" class="social-icon si-small si-dark si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>


							</div>

						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->

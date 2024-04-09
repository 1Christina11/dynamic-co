		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<?php  $contact = $this->Contact_us_model->get_contact();?>
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-6">

							<div class="widget clearfix">

								<img src="<?php echo base_url()?>assets/images/footer-widget-logo.png" alt="Image" class="footer-logo">
								<?php $about_us = $this->Aboutus_model->get_one_about_us();?>
								<p style=""><?php
    echo substr($about_us->paragraph, 0, 100) . ''
                                    
                                    ?>......<a href="<?php echo site_url()?>/Aboutus">Read More</a></p>


								<div class="py-2" style="background: url('images/world-map.png') no-repeat center center;">
									<div class="row col-mb-30">
										<div class="col-6">
											
											
											
											<address class="mb-0">
												<abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarters:</strong></abbr><br><?php echo $contact->location?>
									
											</address>
											
					
											
											
										</div>
										<div class="col-6">
											<abbr title="Phone Number" for="primary"><strong>Phone:</strong></abbr><a href="tel:<?php echo $contact->mobile?>"> <?php echo $contact->mobile?></a><br>
<!--
											<abbr title="Email Address"><strong>Email:</strong></abbr> <?php echo $contact->email?>
-->
										</div>
									</div>
								</div>

								<a href="<?php echo $contact->facebook_link?>" class="social-icon si-small si-rounded topmargin-sm si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="<?php echo $contact->twitter_link?>" class="social-icon si-small si-rounded topmargin-sm si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="<?php echo $contact->youtube_link?>" class="social-icon si-small si-rounded topmargin-sm si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>

								<a href="<?php echo $contact->pinterest_link?>" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>


								<a href="<?php echo $contact->intagram_link?>" class="social-icon si-small si-rounded topmargin-sm si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="<?php echo $contact->linkedin_link?>" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

							</div>
							
						</div>

						<div class="col-sm-6 col-lg-3">
													

							<div class="widget clearfix">
								<h4>Recent Posts</h4>
<?php
			$data=$this->Home_model->get_blog();

	foreach($data as $row0){?>
								<div class="posts-sm row col-mb-30" id="post-list-footer">
									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
		            							<?php
							                     $title = trim($row0->title);
											 	  $title = str_replace(",", "-", $title);
							                     $title = str_replace(" ", "-", $title);
												?>

												<div class="entry-title">
													<h4><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->title?></a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li><?php echo $row0->blog_date?></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

								</div>

		<?php } ?>
					</div>
						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget quick-contact-widget form-widget clearfix">

								<h4>Send Message</h4>

								<div class="form-result"></div>

								<form action="<?php echo site_url('Contact_us/send_mail')?>" method="post" class="quick-contact-form mb-0">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="input-group mx-auto">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="icon-user"></i></div>
										</div>
										<input required type="text" class="required form-control" id="quick-contact-form-name" name="name" value="" placeholder="Full Name" />
									</div>
									<div class="input-group mx-auto">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="icon-email2"></i></div>
										</div>
										<input required type="text" class="required form-control email" id="quick-contact-form-email" name="e_mail" value="" placeholder="Email Address" />
									</div>
									<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="message" rows="4" cols="30" placeholder="Message"></textarea>
									<input required type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button type="submit" class="btn btn-danger m-0">Send Email</button>

								</form>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">
					<div class="row col-mb-30">

						<div class="text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="<?php echo site_url()?>/Terms_conditions">Terms of Use</a> / <a href="<?php echo site_url()?>/privacy_policy">Privacy Policy</a></div>
						</div>
						
					</div>
					
					<div class="w-100 text-center">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="https://dynamic-co.com/">Home</a>/<a href="<?php echo site_url('Aboutus')?>">About</a>/<a href="<?php echo site_url()?>/Categories">Services</a>/<a href="<?php echo site_url('Portfolio')?>">Portfolio</a>/<a href="<?php echo site_url('Faqs')?>">FAQs</a>/<a href="<?php echo site_url('Contact_us/index/'.$msg=NULL)?>">Contact</a>
						</div>
						Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo base_url()?>assets/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?php echo base_url()?>assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script>

		var tpj = jQuery;
		var revapi202;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if (tpj("#rev_slider_579_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_579_1");
			} else {
				revapi202 = tpj("#rev_slider_579_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "include/rs-plugin/js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 9000,
					responsiveLevels: [1140, 1024, 778, 480],
					visibilityLevels: [1140, 1024, 778, 480],
					gridwidth: [1140, 1024, 778, 480],
					gridheight: [728, 768, 960, 720],
					lazyType: "none",
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll:"off",
						disableFocusListener:false,
					},
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:300,
						levels:[2,4,6,8,10,12,14,16,18,20,22,24,49,50,51,55],
					},
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "hermes",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							}
						}
					}
				});
				revapi202.on("revolution.slide.onloaded",function (e) {
					setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
				});

				revapi202.on("revolution.slide.onchange",function (e,data) {
					SEMICOLON.slider.revolutionSliderMenu();
				});
			}
		}); /*ready*/

	</script>
	<script>
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('.grid-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('.grid-filter a').on( 'click', function(){
				$('.grid-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>
	<script>

		jQuery(window).on( 'load', function(){

			let $container = $('#posts');

			function blogTimelineEntries() {
				$('.post-timeline').find('.entry:not(.entry-date-section)').each( function(){
					let position = $(this).position();
					if( position.left === 0 ) {
						$(this).removeClass('alt');
					} else {
						$(this).addClass('alt');
					}
					$(this).find('.entry-timeline').fadeIn();
				});

				$('.entry.entry-date-section').next().next().find('.entry-timeline').css({ 'top': '70px' });
			}

			$container.on( 'layoutComplete', function() {
				blogTimelineEntries();
			});

			$(window).resize(function() {
				$container.isotope('layout');
				setTimeout( function(){
					blogTimelineEntries();
				}, 2500 );
			});

		});

	</script>
</body>
</html>
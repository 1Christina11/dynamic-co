<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php 
	$CI =& get_instance();
	$CI->load->model('Faqs_model');
	$CI->load->model('Contact_us_model');
	$CI->load->model('Home_model');
	$CI->load->model('Portfolio_model');
	$CI->load->model('Blog_model');	
	$CI->load->model('Services_model');
	$CI->load->model('Terms_conditions_model');
	$CI->load->model('Aboutus_model');
	$CI->load->model('Sub_categories_model');
?>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/include/rs-plugin/css/navigation.css">
	<!-- Document Title
	============================================= -->
	<title>Dynamic CO | <?php echo $title?></title>
	
	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Poppins', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Poppins', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>
	
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark.png"><img src="<?php echo base_url()?>assets/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url()?>assets/images/logo-dark@2x.png"><img src="<?php echo base_url()?>assets/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
<!--
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div> #top-search end 
-->

							<!-- Top Cart
							============================================= -->
<!--
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="<?php echo base_url()?>assets/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="<?php echo base_url()?>assets/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div> #top-cart end 
-->

						</div>
						<!-- Primary Navigation
						============================================= -->
						<?php $this->load->view('menu')?>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
		<!-- Slider
		============================================= -->
		<?php $data=$this->Home_model->get_all_sliders();
			  foreach($data as $row){?>
		
		
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap slider-parallax min-vh-100 include-header">
			<div class="slider-inner">
				<div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider" style="padding:0px;">
					<!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
					<div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
						<ul>   <!-- SLIDE  -->
							<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_1?>"  data-saveperformance="off"  data-title="<?php echo $row->slide_title_1?>">
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_1?>"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
<!--
								<div class="tp-fade fadeout fullscreenvideo rs-background-video-layer"
									data-forcerewind="on"
									data-volume="mute"
									data-videowidth="100%"
									data-videoheight="100%"
									data-videomp4="images/videos/explore.mp4"
									data-videopreload="preload"
									data-videoloop="none"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
									data-nextslideatend="true"
									>
								</div>
-->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-55','-55','-90','-90']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-textAlign="center"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><?php echo $row->slide_subtitle_1?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-10','-10']"
								data-fontsize="['50','50','50','36']"
								data-lineheight="['50','50','60','50']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-textAlign="center"
								data-width="['800','800','560','400']"
								data-height="none"
								data-whitespace="['normal','nowrap','normal','normal']"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: normal;"><?php echo $row->slide_title_1?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-desc-text"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['80','80',100,'130']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-textAlign="center"
								data-width="['800','800','560','400']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal;"><?php echo $row->slide_description_1?></div>

								<div class="tp-caption ltl tp-resizeme"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['170','170','210','210']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><a href="<?php echo $row->slide_cta_1?>" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>Start Tour</span> <i class="icon-angle-right"></i></a></div>

							</li>
							<li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_2?>"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="<?php echo $row->slide_title_2?>">
								<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_2?>"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption ltl tp-resizeme revo-slider-caps-text"
								data-x="40"
								data-y="120"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 11; white-space: nowrap;"><?php echo $row->slide_subtitle_2?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0 text-uppercase"
								data-x="37"
								data-y="140"
								data-transform_in="x:5;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:5;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['800','800','560','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; font-size: 56px;white-space: nowrap;"><?php echo $row->slide_title_2?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-start"
								data-x="40"
								data-y="240"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1600"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['550','550','550','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; max-width: 550px; white-space: normal;"><?php echo $row->slide_description_2?></div>

								<div class="tp-caption ltl tp-resizeme"
								data-x="40"
								data-y="350"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1800"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1300"
								data-endeasing="Power4.easeIn" style="z-index: 11;"><a href="<?php echo $row->slide_cta_2?>" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>Check Now</span> <i class="icon-angle-right"></i></a></div>

							</li>
							<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_3?>" data-delay="10000"  data-saveperformance="off"  data-title="<?php echo $row->slide_title_3?>">
							<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_3?>"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption ltl tp-resizeme revo-slider-caps-text"
								data-x="40"
								data-y="120"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 11; white-space: nowrap;"><?php echo $row->slide_subtitle_3?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0 text-uppercase"
								data-x="37"
								data-y="140"
								data-transform_in="x:5;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:5;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['800','800','560','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; font-size: 56px;white-space: nowrap;"><?php echo $row->slide_title_3?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-start"
								data-x="40"
								data-y="240"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1600"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['550','550','550','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; max-width: 550px; white-space: normal;"><?php echo $row->slide_description_3?></div>

								<div class="tp-caption ltl tp-resizeme"
								data-x="40"
								data-y="350"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1800"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1300"
								data-endeasing="Power4.easeIn" style="z-index: 11;"><a href="<?php echo $row->slide_cta_3?>" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>Check Now</span> <i class="icon-angle-right"></i></a></div>

							</li>
							<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_4?>" data-delay="10000"  data-saveperformance="off"  data-title="<?php echo $row->slide_title_4?>">
							<!-- MAIN IMAGE -->
								<img src="<?php echo base_url()?>actrl/assets/images/slider/<?php echo $row->slide_photo_4?>"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption ltl tp-resizeme revo-slider-caps-text"
								data-x="40"
								data-y="120"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 11; white-space: nowrap;"><?php echo $row->slide_subtitle_4?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0 text-uppercase"
								data-x="37"
								data-y="140"
								data-transform_in="x:5;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:5;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['800','800','560','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; font-size: 56px;white-space: nowrap;"><?php echo $row->slide_title_4?></div>

								<div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-start"
								data-x="40"
								data-y="240"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1600"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-width="['550','550','550','380']"
								data-height="none"
								data-endeasing="Power4.easeIn" style="z-index: 11; max-width: 550px; white-space: normal;"><?php echo $row->slide_description_4?></div>

								<div class="tp-caption ltl tp-resizeme"
								data-x="40"
								data-y="350"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1800"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1300"
								data-endeasing="Power4.easeIn" style="z-index: 11;"><a href="<?php echo $row->slide_cta_4?>" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>Check Now</span> <i class="icon-angle-right"></i></a></div>

							</li>
						</ul>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div>
		</section>

		<?php 
			  }?>

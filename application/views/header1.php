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
	<title><?php echo $title?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header semi-transparent dark">
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
							</div>
-->
							<!-- #top-search end -->

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
												<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
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
												<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
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
							</div>
-->
							<!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<?php $this->load->view('menu')?>
						<!-- #primary-menu end -->
<!--
						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>
-->

					</div>
				</div>

			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">
			

			<div class="container clearfix">
				<h1>Categories</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Categories</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
<?php foreach($categories as $row ) {
?>
						<!-- Portfolio Item: Start -->
						<article  class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
							<!-- Grid Inner: Start -->
							<div class="grid-inner">
								<!-- Image: Start -->
								
								<?php $catergory_title=str_replace(" ","-",$row->catergory_title) ?>
								
								<div class="portfolio-image">
									<a href="<?php echo site_url('Sub/category/'.$catergory_title.'/'.$row->categories_id) ?>">
										
										
										<img src="<?php echo base_url()?>actrl/assets/images/category_photo/<?php echo $row->photo?> " alt="Open Imagination" style="height: 200px; width:300px !important">
										
										
									</a>
									<!-- Overlay: Start -->
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?php echo base_url()?>actrl/assets/images/category_photo/<?php echo $row->photo?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="<?php echo site_url('Sub/category/'.$catergory_title.'/'.$row->categories_id) ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
									<!-- Overlay: End -->
								</div>
								<!-- Image: End -->
								<!-- Decription: Start -->
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Sub/category/'.$catergory_title.'/'.$row->categories_id) ?>"><?php echo $catergory_title?></a></h3>
								</div>
								<!-- Description: End -->
							</div>
							<!-- Grid Inner: End -->
						</article><?php }?>
						<!-- Portfolio Item: End -->

						
					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

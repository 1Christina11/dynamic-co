		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Sub Categories</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com/">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo site_url('Categories')?>">Categories</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sub Categories</li>
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
						<!-- Portfolio Item: Start -->
						<?php foreach($sub_categories as $row){?>
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="portfolio-image">
									<?php $sub_title = trim($row->sub_title);
										  $sub_title = str_replace(" ", "-", $sub_title);
									?>
									<a href="<?php echo site_url('Dynamic/index/'.$sub_title.'/'.$row->sub_categories_id)?>">
										<img src="<?php echo base_url()?>actrl/assets/images/sub_categories_photos/<?php echo $row->sub_photo?>" alt="Open Imagination" style="height: 200px; width:300px !important">
									</a>
									<!-- Overlay: Start -->
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?php echo base_url()?>actrl/assets/images/sub_categories_photos/<?php echo $row->sub_photo?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="<?php echo site_url('Dynamic/index/'.$sub_title.'/'.$row->sub_categories_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
									<!-- Overlay: End -->
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Dynamic/index/'.$sub_title.'/'.$row->sub_categories_id)?>"><?php echo $row->sub_title?></a></h3>
								</div>
							</div>
						</article>
							<?php }?>
						<!-- Portfolio Item: End -->
					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

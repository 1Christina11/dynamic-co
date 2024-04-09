		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Services</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="grid-filter-wrap">

						<!-- Portfolio Filter
						============================================= -->
						<ul class="grid-filter" data-container="#portfolio">
							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<?php foreach($categories as $row){?>
							<li><a href="#" data-filter=".pf-<?php echo $row->categories_id?>"><?php echo $row->catergory_title?></a></li>
							<?php }?>
						</ul> 
						<!--.grid-filter end --> 

<!--
						<div class="grid-shuffle rounded" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>
-->

					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
						<!-- Portfolio Item: Start -->
						<?php foreach($services as $row0){?>
							<?php if($row0->video_link == ''){?>
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12
							<?php
								  $services_catgeories_id_ex = explode(',', $row0->categories_id);
								  $services_catgeories_id_count = count($services_catgeories_id_ex);
								  for($i=0; $i<$services_catgeories_id_count; $i++){
									  echo 'pf-' . $services_catgeories_id_ex[$i].' ';
								  }
							?>
						">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
								<?php $services_title=str_replace(" ","-",$row0->services_title) ?>

												<?php
													  $x=0;
													  $photos =  $this->Services_model->get_service_photos($row0->services_id);
													  foreach($photos as $row1){
													  if($row1->photo != ''){
												?>
												
												<div class="slide"><a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>"><img style="width:377px; height:327px !important" src="<?php echo base_url()?>actrl/assets/images/service_file/<?php echo $row1->photo?>" alt="Shake It"></a></div>
												<?php }
													  }?>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<?php
												  $x=0;
												  $photos =  $this->Services_model->get_service_photos($row0->services_id);
												  foreach($photos as $row1){
												  if($row1->photo != ''){
											?>
											<a href="<?php echo base_url()?>actrl/assets/images/servive_file/<?php echo $row1->photo?>" class="d-none" data-lightbox="gallery-item"></a>
											<?php }
												  }?>
											<?php $services_title=str_replace(" ","-",$row0->services_title) ?>
											<a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
									<div class="portfolio-desc">
		            	<?php $services_title=str_replace(" ","-",$row0->services_title) ?>

									<h3><a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>">
										<?php echo $row0->services_title?></a></h3>
																<?php $services_title=str_replace(" ","-",$row0->services_title) ?>

									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</article>
							<?php }
							  }?>
						<?php foreach($services as $row0){?>
						<!-- Portfolio Item: Start -->
						<?php if($row0->video_link != ''){?>
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-<?php echo $row0->tags?>">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $row0->video_link?>">
										</iframe>
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=<?php echo $row0->video_link?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
							               <?php $services_title=str_replace(" ","-",$row0->services_title) ?>
											<a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>"  class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
		            	<?php $services_title=str_replace(" ","-",$row0->services_title) ?>

									<h3><a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>">
										<?php echo $row0->services_title?></a></h3>
																<?php $services_title=str_replace(" ","-",$row0->services_title) ?>

									<span><a href="<?php echo site_url('Services/one_service/' . $services_title . '/' . $row0->services_id) ?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</article>
						<!-- Portfolio Item: End -->
						<?php }
							  }?>
					</div>
					<!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

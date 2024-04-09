		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Portfolio</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
						<!-- Portfolio Item: Start -->
						<?php foreach($portfolio as $row0){?>
							<?php if($row0->videos == ''){?>
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12
							<?php
								  $portfolio_catgeories_id_ex = explode(',', $row0->categories_id);
								  $portfolio_catgeories_id_count = count($portfolio_catgeories_id_ex);
								  for($i=0; $i<$portfolio_catgeories_id_count; $i++){
									  echo 'pf-' . $portfolio_catgeories_id_ex[$i].' ';
								  }
							?>
						">
							<div class="grid-inner">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<?php
													  $x=0;
													  $photos = $this->Portfolio_model->get_portfolio_photos($row0->portfolio_id);
													  foreach($photos as $row1){
													  if($row1->photo != ''){
												?>
												<?php $project_title = trim($row0->project_title);
													  $project_title = str_replace(" ", "-", $project_title);
												?>
												<div class="slide"><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>"><img style="width: 100%; height: 200px !important" src="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row1->photo?>" alt="image"></a></div>
												<?php }
													  }?>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<?php
												  $x=0;
												  $photos = $this->Portfolio_model->get_portfolio_photos($row0->portfolio_id);
												  foreach($photos as $row1){
												  if($row1->photo != ''){
											?>
											<?php if($x == 0){?>
											<a href="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row1->photo?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<?php }if($x != 0){?>
											<a href="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row1->photo?>" class="d-none" data-lightbox="gallery-item"></a>
											<?php }
												  }
												  $x++;}?>
											<?php $project_title = trim($row0->project_title);
											 	  $project_title = str_replace(" ", "-", $project_title);
											?>
											<a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>"><?php echo $row0->project_title?></a></h3>
									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</article>
							<?php }
							  }?>
						<!-- Portfolio Item: End -->
						<!-- Portfolio Item: Start -->
						<?php foreach($portfolio as $row0){?>
							<?php if($row0->videos != ''){?>
						<article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12
							<?php
								  $portfolio_catgeories_id_ex = explode(',', $row0->categories_id);
								  $portfolio_catgeories_id_count = count($portfolio_catgeories_id_ex);
								  for($i=0; $i<$portfolio_catgeories_id_count; $i++){
									  echo 'pf-' . $portfolio_catgeories_id_ex[$i];
								  }
							?>
						">
							<div class="grid-inner">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<iframe style="width: 100%; height: 200px !important" src="https://www.youtube.com/embed/<?php echo $row0->videos?>">
										</iframe>
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=<?php echo $row0->videos?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>"><?php echo $row0->project_title?></a></h3>
									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$row0->portfolio_id)?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</article>
							<?php }
							  }?>
						<!-- Portfolio Item: End -->
					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->

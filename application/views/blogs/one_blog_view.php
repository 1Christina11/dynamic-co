		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $blogs->title?></h1>
			
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row">
                   
						<!-- Portfolio Single Image
						============================================= -->
						<div class="col-lg-8 portfolio-single-image">
						
							<div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
								<div class="flexslider">
									<div class="slider-wrap">
										<?php
										      $data=$this->Blog_model->get_blog_photos($blogs->blogs_id);
											  foreach($data as $row1){
										?>
										<div class="slide"  data-thumb="<?php echo base_url()?>actrl/assets/images/photo_blog/<?php echo $row1->photo?>"><a href="#"><img src="<?php echo base_url()?>actrl/assets/images/photo_blog/<?php echo $row1->photo?>" alt="Image"></a></div>
										<?php }?>
									</div>
								</div>
							</div>
														<?php if($blogs->video_link != ''){?>
							                            <iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $blogs->video_link?>">
							</iframe>
						<?php }?>


							
							
							
							

						</div>
					
						
						<!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-lg-4 portfolio-single-content">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2><?php echo $blogs->title?></h2>
							</div>
							<p><?php echo $blogs->description?></p>
							<!-- Portfolio Single - Description End -->

							<div class="line"></div>

							<!-- Portfolio Single - Meta
							============================================= -->
							<!-- Portfolio Single - Meta End -->

							<!-- Portfolio Single - Share
							============================================= -->
							
							<!-- Portfolio Single - Share End -->

						</div><!-- .portfolio-single-content end -->

					</div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Other Posts:</h4>
					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
					<?php 
						   foreach($blogs2 as $row0){
						   	   if($blogs->blogs_id != $row0->blogs_id){
						   	   if($row0->video_link == ''){
						?>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<?php
													  $x=0;
													  $photos = $this->Blog_model->get_blog_photos($row0->blogs_id);
													  foreach($photos as $row1){
													  if($row1->photo != ''){
												?>
											<?php $title = trim($row0->title);
												  $title = str_replace("#", "-", $title);
										      	  $title = str_replace(",", "-", $title);
											 	  $title = str_replace(" ", "-", $title);
											?>

												
												<div class="slide"><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><img style="width:377px; height:327px !important" src="<?php echo base_url()?>actrl/assets/images/photo_blog/<?php echo $row1->photo?>" alt="Shake It"></a></div>
												<?php }
													  }?>
											</div>
										</div>
									</div>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<?php
												  $x=0;
												  $photos = $this->Blog_model->get_blog_photos($row0->blogs_id);
												  foreach($photos as $row1){
												  if($row1->photo != ''){
											?>
											<a href="<?php echo base_url()?>actrl/assets/images/photo_blog/<?php echo $row1->photo?>" class="d-none" data-lightbox="gallery-item"></a>
											<?php }
												  }?>
											<a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->blog_date?></a></h3>
									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</div>
					<?php }
							   }
						  }?>
					<?php 
						   foreach($blogs2 as $row0){
							   
						   	   if($blogs->blogs_id != $row0->blogs_id){
					 		   if($row0->video_link != ''){
						?>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $row0->video_link?>">
										</iframe>
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=<?php echo $row0->video_link?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->blog_date?></a></h3>	
									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Blog/blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->description?></a></span>
								</div>
							</div>
						</div>
					<?php }
							   }
						  }?>
					</div><!-- .portfolio-carousel end -->

				</div>
			</div>
		</section><!-- #content end -->

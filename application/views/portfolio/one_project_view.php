		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $portfolio->project_title?></h1>
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
						<div class="col-md-7 col-lg-8 portfolio-single-image">
							<?php if($portfolio->videos == ''){?>
							<div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
								<div class="flexslider">
									<div class="slider-wrap">
										<?php $data=$this->Portfolio_model->get_portfolio_photos($portfolio->portfolio_id);
											  foreach($data as $row1){
										?>
										<div class="slide" data-thumb="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row1->photo?>"><a href="#"><img src="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row1->photo?>" alt="Image"></a></div>
										<?php }?>
									</div>
								</div>
							</div>
							<?php }?>
							<?php if($portfolio->videos != ''){?>
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $portfolio->videos?>">
									</iframe>
								</a>
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="https://www.youtube.com/watch?v=<?php echo $portfolio->videos?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<?php }?>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-lg-4 portfolio-single-content">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Project Info:</h2>
							</div>
							<p><?php echo $portfolio->description?></p>
							<!-- Portfolio Single - Description End -->

							<div class="line"></div>

							<!-- Portfolio Single - Meta
							============================================= -->
							<ul class="portfolio-meta bottommargin">
								<li><span><i class="icon-user"></i>Created by:</span><?php echo $portfolio->created_by?></li>
								<li><span><i class="icon-calendar3"></i>Completed on:</span><?php $date=date_create($portfolio->completed_on);
								echo date_format($date,"Y/M/d");?></li>
								<li><span><i class="icon-lightbulb"></i>categories:</span>
								<?php
									  $categories_id_ex = explode(',', $portfolio->categories_id);
									  foreach($categories as $row1){  
									  $key = array_search($row1->categories_id, $categories_id_ex) . 'yes';
									  if($key != 'yes'){
									  echo $row1->catergory_title . ' ';
									  }
									  }
								?>
								</li>
								<li><span><i class="icon-link"></i>Client:</span><?php echo $portfolio->client?></li>
								<li><span><i class="icon-link"></i>Tags:</span>
								<?php
									  $tags_id_ex = explode(',', $portfolio->tags);
									  foreach($tags as $row1){  
									  $key = array_search($row1->tags_id , $tags_id_ex) . 'yes';
									  if($key != 'yes'){
									  echo $row1->tag_name . ' ';
									  }
									  }
								?>
								</li>
							</ul>
							<!-- Portfolio Single - Meta End -->


						</div><!-- .portfolio-single-content end -->

					</div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Related services:</h4>
					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
					<?php
						  $tags_id_ex_portfolio = explode(',', $portfolio->tags);
						  $tags_id_ex_count_portfolio =count($tags_id_ex_portfolio);
						  $service_id = array();
						  for($i=0;$i<$tags_id_ex_count_portfolio;$i++){
							  
							  $portfolio_one_tag = $tags_id_ex_portfolio[$i];
							  
							  foreach($services as $row){
								  
								  $tags_id_ex_service = explode(',', $row->tags);
								  $search_service_by_tag = array_search($portfolio_one_tag, $tags_id_ex_service).'yes';
								  
								  if($search_service_by_tag != 'yes'){
									  
									  $search_service_id = array_search($row->services_id, $service_id).'yes';
									  
									  if($search_service_id == 'yes'){
										  
										  $service_id[$i] = $row->services_id;
										  
									  }
								  }
							  }
						  }
//					  print_r($service_id);
					  ?>
						
					<?php 
					foreach($service_id as $row =>$val){
						$one_service = $this->Services_model->get_one_service($val);
					?>
					<?php if($one_service->video_link == ''){?>
					<div class="oc-item">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<?php
												  $x=0;
												  $photos = $this->Portfolio_model->get_services_photos($one_service->services_id);
												  foreach($photos as $row3){
												  if($row3->photo != ''){
											?>
											<?php $services_title = trim($one_service->services_title);
												  $services_title = str_replace(" ", "-", $services_title);
											?>
											<div class="slide"><a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>"><img style="width:377px; height:266px !important" src="<?php echo base_url()?>actrl/assets/images/service_file/<?php echo $row3->photo?>" alt="image"></a></div>
											<?php }
												  }?>
										</div>
									</div>
								</div>
								<div class="bg-overlay" data-lightbox="gallery">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<?php
											  $x=0;
											  $photos = $this->Portfolio_model->get_services_photos($one_service->services_id);
											  foreach($photos as $row3){
											  if($row3->photo != ''){
										?>
										<a href="<?php echo base_url()?>actrl/assets/images/service_file/<?php echo $row3->photo?>" class="d-none" data-lightbox="gallery-item"></a>
										<?php }
											  }?>
										<?php $services_title = trim($one_service->services_title);
											  $services_title = str_replace(" ", "-", $services_title);
										?>
										<a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>"><?php echo $one_service->services_title?></a></h3>
								<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>"><?php echo $one_service->description?></a></span>
							</div>
						</div>
					</div>
					<?php }
					}?>
					<?php
					?>
					<?php 
					foreach($service_id as $row => $val){
						$one_service = $this->Services_model->get_one_service($val);
					?>
					<?php if($one_service->video_link != ''){?>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $one_service->video_link?>">
										</iframe>
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=<?php echo $one_service->video_link?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<?php $services_title = trim($one_service->services_title);
												  $services_title = str_replace(" ", "-", $services_title);
											?>
											<a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>"><?php echo $one_service->services_title?></a></h3>
									<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Dynamic/service/'.$services_title.'/'.$one_service->services_id)?>"><?php echo $one_service->description?></a></span>
								</div>
							</div>
						</div>
					<?php }
					}?>
					</div><!-- .portfolio-carousel end -->
				</div>
			</div>
		</section><!-- #content end -->

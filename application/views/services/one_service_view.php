







<!-- Page Title
		============================================= -->
	<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $services->services_title?></h1>
				<div id="portfolio-navigation">
					
				</div>
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
							<div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
								<div class="flexslider">
									<div class="slider-wrap">
										<?php $data=$this->Services_model->get_service_photos($services->services_id);
											  foreach($data as $row1){
										?>
										<div class="slide"  data-thumb="<?php echo base_url()?>actrl/assets/images/service_file/<?php echo $row1->photo?>"><a href="#"><img src="<?php echo base_url()?>actrl/assets/images/service_file/<?php echo $row1->photo?>" alt="Image"></a></div>
										<?php }?>
									</div>
								</div>
							</div>
							<?php if($services->video_link != ''){?>
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $services->video_link?>">
									</iframe>
								</a>
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="https://www.youtube.com/watch?v=<?php echo $services->video_link?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
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
								<h2><?php echo $services->services_title?>:</h2>
							</div>
							<p><?php echo $services->description?></p>
							<!-- Portfolio Single - Description End -->

							<div class="line"></div>

							<!-- Portfolio Single - Meta
							============================================= -->
							<!-- Portfolio Single - Meta End -->

							<!-- Portfolio Single - Share
							============================================= -->
							
							<!-- Portfolio Single - Share End -->

						</div>

					</div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Related Projects:</h4>

                    
            <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget owl-loaded owl-drag" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

                
                            
                            <?php
                            
                            $service_tags_array = explode(",",$services->tags);
                            
                            $tags_array_count = count($service_tags_array);
                            $related_projects = array();
                                    
                            for ($x = 0; $x < $tags_array_count; $x++) {
                                
                                $one_service_tag = $service_tags_array[$x];
                                $protfolio = $this->Portfolio_model->get_portfolio();
                                
                                foreach($protfolio as $one_project){

                                    $portfolio_tags_array = explode(",",$one_project->tags);

                                    $srch_result = array_search($one_service_tag,$portfolio_tags_array) . 'yes';

                                    if($srch_result != 'yes'){

                                        $related_srch_result = array_search($one_project->portfolio_id,$related_projects) . 'yes';

                                        if($related_srch_result == 'yes'){
                                            $related_projects[$x] = $one_project->portfolio_id;
                                        }
                                    }
                                }
                            }
                            
//                            print_r($related_projects);
                            ?>
							
							<?php 
							foreach($related_projects as $row =>$val){
								$one_project= $this->Portfolio_model->get_one_project($val);
							?>
							<?php if($one_project->videos == ''){?>
							<div class="oc-item">
								<div class="portfolio-item">
									<div class="portfolio-image">
										<div class="fslider" data-arrows="false">
											<div class="flexslider">
												<div class="slider-wrap">
													<?php
														  $x=0;
														  $photos = $this->Portfolio_model->get_portfolio_photos($one_project->portfolio_id);
														  foreach($photos as $row3){
														  if($row3->photo != ''){
													?>
													<div class="slide"><a href="portfolio-single-gallery.html"><img style="width:377px; height:266px !important" src="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row3->photo?>" alt="image"></a></div>
													<?php }
														  }?>
												</div>
											</div>
										</div>
										<div class="bg-overlay" data-lightbox="gallery">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<?php
													  $x=0;
													  $photos = $this->Portfolio_model->get_portfolio_photos($one_project->portfolio_id);
													  foreach($photos as $row3){
													  if($row3->photo != ''){
												?>
												<a href="<?php echo base_url()?>actrl/assets/images/portfolio/<?php echo $row3->photo?>" class="d-none" data-lightbox="gallery-item"></a>
												<?php }
													  }?>
												<?php $project_title = trim($one_project->project_title);
													  $project_title = str_replace(" ", "-", $project_title);
												?>
												<a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>"><?php echo $one_project->project_title?></a></h3>
										<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>"><?php echo $one_project->description?></a></span>
									</div>
								</div>
							</div>
							<?php }
							}?>
							<?php
							?>
							<?php 
							foreach($related_projects as $row => $val){
								$one_project = $this->Portfolio_model->get_one_project($val);
							?>
							<?php if($one_project->videos != ''){?>
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single-video.html">
												<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $one_project->videos?>">
												</iframe>
											</a>
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
													<a href="https://www.youtube.com/watch?v=<?php echo $one_project->videos?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
													<?php $project_title = trim($one_project->project_title);
														  $project_title = str_replace(" ", "-", $project_title);
													?>
													<a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>"><?php echo $one_project->project_title?></a></h3>
											<span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod"><a href="<?php echo site_url('Portfolio/project/'.$project_title.'/'.$one_project->portfolio_id)?>"><?php echo $one_project->description?></a></span>
										</div>
									</div>
								</div>
							<?php }
							}?>
                            
<!--
                            <div class="owl-item" style="width: 219px; margin-right: 20px;"><div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-gallery.html">
										<img src="images/portfolio/4/6.jpg" alt="Shake It!">
									</a>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark not-animated" data-hover-animate="fadeIn" style="animation-duration: 600ms;">
											<a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark not-animated" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item" style="animation-duration: 350ms;"><i class="icon-line-stack-2"></i></a>
											<a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark not-animated" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" style="animation-duration: 350ms;"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark not-animated" data-hover-animate="fadeIn" style="animation-duration: 600ms;"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</div>
						</div></div>
                            <div class="owl-item active" style="width: 219px; margin-right: 20px;"><div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark animated fadeOut" data-hover-animate="fadeIn" style="animation-duration: 600ms;">
											<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark animated fadeOutUpSmall" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe" style="animation-duration: 350ms;"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark animated fadeOutUpSmall" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" style="animation-duration: 350ms;"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark animated fadeOut" data-hover-animate="fadeIn" style="animation-duration: 600ms;"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div></div>
-->
                            
               </div>                    
                    
                    
                    
					
				</div>
			</div>
		</section><!-- #content end -->

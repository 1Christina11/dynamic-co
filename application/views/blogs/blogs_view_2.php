
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Blog</h1>
				<span>Our Latest News in Timeline Layout</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="position-relative">

						<div class="timeline-border"></div>

						<!-- Posts
						============================================= -->
						<div id="posts" class="post-grid grid-container row post-timeline col-mb-50" data-basewidth=".entry:not(.entry-date-section):eq(0)">
							<?php $x=0;
								  foreach($blogs as $row0){
							      $date=date_create($row0->blog_date);
							      if(date_format($date,"M") == "Jun"){
								  if($row0->video_link == ''){
							?>
							<?php if($x == 0){?>
							<div class="entry entry-date-section col-12 mb-3"><span><?php echo date_format($date,"M"); ?></span></div>
							<?php }?>
							<div class="entry col-lg-6 col-12">
								<div class="entry-timeline">
									<div class="timeline-divider"></div>
								</div>
								<div class="grid-inner">
									<div class="entry-image">
										<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
											<div class="flexslider">
												<div class="slider-wrap">
													<?php
														  $title = trim($row0->title);
														  $title = str_replace(",", "-", $title);
														  $title = str_replace(" ", "-", $title);
													?>
													<?php
														  $x=0;
														  $photos = $this->Blog_model->get_blog_photos($row0->blogs_id);
														  foreach($photos as $row1){
														  if($row1->photo != ''){
													?>
													<div class="slide"><a href="<?php echo site_url('Blog/one_blog/' .$title. '/' . $row0->blogs_id)?>" data-lightbox="gallery-item"><img src="<?php echo base_url()?>actrl/assets/images/photo_blog/<?php echo $row1->photo?>" style="height: 500px" alt="Standard Post with Gallery"></a></div>
													<?php
														  }
														  }
													?>

												</div>
											</div>
										</div>
									</div>
									<div class="entry-title">
										<h2><a href="<?php echo site_url('Blog/one_blog/' .$title. '/' . $row0->blogs_id)?>"><?php echo $row0->title?></a></h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i><?php echo date_format($date,"Y/M/D")?></li>
											<li><a href="#"><i class="icon-camera-retro"></i></a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p><?php echo $row0->description?></p>
										<a href="<?php echo site_url('Blog/one_blog/' .$title. '/' . $row0->blogs_id)?>" class="more-link">Read More</a>
									</div>
								</div>
							</div>
							<?php
								  }
								  }
								  $x++;}
							?>	
							<?php $x=0;
								  foreach($blogs as $row0){
							      $date=date_create($row0->blog_date);
								  if($row0->video_link != ''){
							?>
							<div class="entry entry-date-section col-12 mb-3">
								<span><?php if($x == 0){
											  echo date_format($date,"M");
											}
									  ?>
								</span>
							</div>
							<?php if(date_format($date,"M") == "Jun"){?>
							<div class="entry col-lg-6 col-12">
								<div class="entry-timeline">
									<div class="timeline-divider"></div>
								</div>
								<div class="grid-inner">
									<div class="entry-image">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row0->video_link?>" allowfullscreen></iframe>
									</div>
									<div class="entry-title">
										<h2><a href="blog-single.html"><?php echo $row0->title?></a></h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i><?php echo date_format($date,"Y/M/D")?></li>
											<li><a href="#"><i class="icon-camera-retro"></i></a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p><?php echo $row0->description?></p>
										<a href="<?php echo site_url('Blog/one_blog/' .$title. '/' . $row0->blogs_id)?>" class="more-link">Read More</a>
									</div>
								</div>
							</div>
							<?php
								  }
								  }
								  $x++;}
							?>
						</div><!-- #posts end -->

					</div>

				</div>
			</div>
		</section><!-- #content end -->

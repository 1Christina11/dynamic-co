		<!-- [ breadcrumb ] start --> 
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Edit Services</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url ('Services/index/'.$services->categories_id.'/'.$services->sub_categories_id) ?>">services</a></li>
							<li class="breadcrumb-item"><a href="#!">Edit services</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ horizontal-layout ] start -->
			<div class="col-sm-12">
				<div class="card">
                    <div class="card-header">
                        <h5>Services content</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url('Services/update_services')?>" method="post" enctype="multipart/form-data">
							<div class="row">
					<input type="hidden" value="<?php echo $services->services_id?>" name="services_id">
					<input type="hidden" value="<?php echo $services->categories_id?>" name="categories_id">
					<input type="hidden" value="<?php echo $services->sub_categories_id?>" name="sub_categories_id">
									<div class="col-lg-4 col-md-6">
								      <?php
										  if($services->video_link == ''){?>
										<div class="card user-card user-card-1 mt-4">
											<div class="card-header border-0 p-2 pb-0">
												<div class="cover-img-block">
													<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															  <?php $x=0;
																	foreach($photo_data as $row){ ?>
															<div class="carousel-item <?php if($x == 0)echo 'active'?> " >
																<img src="<?php echo base_url()?>assets/images/service_file/<?php echo $row->photo?>" alt="" class="img-fluid">
															</div>
															<?php $x++;}?>
														</div>
														<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
														<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
									<?php if($services->video_link != ''){?>
									<div class="form-group">
										<div class="cover-img-block">
											<iframe width="280px" height="250px" src="https://www.youtube.com/embed/<?php echo $services->video_link?>">
											</iframe>
											<div style="display: none">
												<input multiple type="file" name="userfile[]" class="validation-file">
											</div>
										</div>
									</div>
									<?php }?>
								<?php if($services->video_link == ''){?>
									<div class="form-group">
										<label class="form-label">photos</label>
										<input multiple type="file" name="userfile[]" class="validation-file">
									</div>
								<?php }?>
								</div>
								<?php if($services->video_link != ''){?>
								<div class="col-sm-6">
									<div class="form-group">
										<img style="text-align: center;margin: auto"  src="<?php echo base_url()?>assets/images/instr_image.png" alt="instructions_image" width="250px" height="auto">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">video_link</label>
										<input value="<?php echo $services->video_link?>" type="text" class="form-control" name="video_link">
									</div>
								</div>
								<?php }?>
							</div>
				<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Tags</label>
									<div class="form-check">
									  <?php foreach($tags as $row){?>  
										<div class="form-check form-check-inline">
										  <input multiple name="tags_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" 
												 				<?php $tags_id_ex = explode(',', $services->tags );
																		 $result = array_search($row->tags_id, $tags_id_ex).'yes';
																		 if($result != 'yes') echo 'checked';
												 				?>
												 value="<?php echo $row->tags_id?>">
										  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->tag_name?></label>
										</div>
									  <?php }?>  
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">Title</label>
										<input value="<?php echo $services->services_title?>" type="text" class="form-control" name="services_title" placeholder="Title">
									</div>
								</div>
							</div>
							   <div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="description">description</label>
										<textarea style="font-size: 1em" name="description" class="form-control"  placeholder="description" rows="3"><?php echo $services->description?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 text-right">
									<button type="submit" class="btn btn-primary"> Save </button>
									<button type="reset" class="btn btn-danger"> Clear </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- [ horizontal-layout ] end -->
		</div>
		<!-- [ Main Content ] end -->
<script>
new MultipleSelect('#select-multiple-language', {
  placeholder: 'Select skill'
})
</script>
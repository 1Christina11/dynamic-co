		<!-- [ breadcrumb ] start --> 
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Edit Project</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('Portfolio/get_portfolio')?>">Portfolio</a></li>
							<li class="breadcrumb-item"><a href="#!">Edit Project</a></li>
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
                        <h5>Project content</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url('Portfolio/update_project')?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<input type="hidden" value="<?php echo $one_project->portfolio_id?>" name="portfolio_id">
									<div class="col-lg-4 col-md-6">
								      <?php
										  if($one_project->videos == ''){?>
										<div class="card user-card user-card-1 mt-4">
											<div class="card-header border-0 p-2 pb-0">
												<div class="cover-img-block">
													<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															  <?php $x=0;
																	foreach($photos as $row){ ?>
															<div class="carousel-item <?php if($x == 0)echo 'active'?>">
																<img src="<?php echo base_url()?>assets/images/portfolio/<?php echo $row->photo?>" alt="" class="img-fluid">
															</div>
															<input type="hidden" value="<?php echo $row->portfolio_photos_id?>" name="portfolio_photos_id">
															<?php $x++;}?>
														</div>
														<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
														<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
									<?php if($one_project->videos != ''){?>
									<div class="form-group">
										<div class="cover-img-block">
											<iframe width="380px" height="250px" src="https://www.youtube.com/embed/<?php echo $one_project->videos?>">
											</iframe>
											<div style="display: none">
												<input multiple type="file" name="userfile[]" class="validation-file">
											</div>
										</div>
									</div>
									<?php }?>
								<?php if($one_project->videos == ''){?>
									<div class="form-group">
										<label class="form-label">photos</label>
										<input multiple type="file" name="userfile[]" class="validation-file">
									</div>
								<?php }?>
								</div>
								<?php if($one_project->videos != ''){?>
								<div class="col-sm-6">
									<div class="form-group">
										<img style="text-align: center;margin: auto"  src="<?php echo base_url()?>assets/images/instr_image.png" alt="instructions_image" width="350px" height="auto">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">videos</label>
										<input value="<?php echo $one_project->videos?>" type="text" class="form-control" name="videos">
									</div>
								</div>
								<?php }?>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">Project Title</label>
										<input type="text" value="<?php echo $one_project->project_title?>" class="form-control" name="project_title" placeholder="Project Title">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="description">description</label>
										<textarea style="font-size: 1em" name="description" class="form-control"  placeholder="description" rows="3"><?php echo $one_project->description?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Categories</label>
									<div class="form-check">
									  <?php foreach($categories as $row){?>  
										<div class="form-check form-check-inline">
										  <input multiple name="categories_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php
																	 $categories_id_ex = explode(',', $one_project->categories_id );
																	 $result = array_search($row->categories_id, $categories_id_ex).'yes';
																	 if($result != 'yes') echo 'checked'
												 				?>
												 value="<?php echo $row->categories_id?>">
										  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->catergory_title?></label>
										</div>
									  <?php }?>  
									</div>
								</div>	
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">Created By</label>
										<input value="<?php echo $one_project->created_by?>" type="text" class="form-control" name="created_by" placeholder="Created By">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group fill">
										<label class="form-label">Completed On</label>
										<input value="<?php echo $one_project->completed_on?>" type="date" class="form-control" name="completed_on" placeholder="Completed On">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label">Client</label>
										<input value="<?php echo $one_project->client?>" type="text" class="form-control" name="client" placeholder="Client">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Tags</label>
									<div class="form-check">
									  <?php foreach($tags as $row){?>  
										<div class="form-check form-check-inline">
										  <input multiple name="tags_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php
																   	 $tags_id_ex = explode(',', $one_project->tags );
																	 $result = array_search($row->tags_id, $tags_id_ex).'yes';
																	 if($result != 'yes') echo 'checked'
												 				?>
												 value="<?php echo $row->tags_id?>">
										  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->tag_name?></label>
										</div>
									  <?php }?>  
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
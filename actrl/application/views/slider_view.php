        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Business loan solution</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Sliders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

		<?php foreach($sliders as $row){?> 
			<div class="card">
				<div class="card-body">
                   <div class="row">
					   <div class="col">
					   <form action="<?php echo site_url('Slider_nav/insert_sliders')?>" method="post" enctype="multipart/form-data">
						<div style="text-align: center" class="col-lg-12">
							<div class="form-group">
								<h3 class="form-label">slider 1</h3>
								<div class="row">
									<div class="col-3"></div>	
									<div class="col-6">
										<div class="form-group fill">
											<input type="hidden" value="<?php echo $row->slide_photo_1?>" name="photo_1">
											<input type="file" name="userfiles_1" class="validation-file">
											<img src="<?php echo base_url()?>assets/images/slider/<?php echo $row->slide_photo_1?>" alt="image" class="img-fluid wid-100 mb-2">
										</div>
									</div>
									<div class="col-3"></div>	
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Title</label>
											<input value="<?php echo $row->slide_title_1?>" type="text" class="form-control"  name="slide_title_1" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
									<div class="form-group fill">
										<label class="floating-label" for="title">Description</label>
										<textarea maxlength="150" style="font-size: 1.3em" name="slide_description_1" class="form-control"  placeholder="Short description" rows="1"><?php echo $row->slide_description_1?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Subtitle</label>
											<input value="<?php echo $row->slide_subtitle_1?>" type="text" class="form-control" name="slide_subtitle_1" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">CTA</label>
											<input value="<?php echo $row->slide_cta_1?>" type="url" class="form-control" name="slide_cta_1" placeholder="Title">
										</div>
									</div>	
								</div>
							</div>
                        </div>
						<hr>
						<div style="text-align: center" class="col-sm-12">
							<div class="form-group">
								<h3 class="form-label">slider 2</h3>
								<div class="row">
									<div class="col-3"></div>	
									<div class="col-6">
										<div class="form-group fill">
											<input type="hidden" value="<?php echo $row->slide_photo_2?>" name="photo_2">
											<input type="file" name="userfiles_2" class="validation-file">
											<img src="<?php echo base_url()?>assets/images/slider/<?php echo $row->slide_photo_2?>" alt="image" class="img-fluid wid-100 mb-2">
										</div>
									</div>
									<div class="col-3"></div>	
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Title</label>
											<input value="<?php echo $row->slide_title_2?>" type="text" class="form-control"  name="slide_title_2" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
									<div class="form-group fill">
										<label class="floating-label" for="title">Description</label>
										<textarea maxlength="150" style="font-size: 1.3em" name="slide_description_2" class="form-control"  placeholder="Short description" rows="1"><?php echo $row->slide_description_2?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Subtitle</label>
											<input value="<?php echo $row->slide_subtitle_2?>" type="text" class="form-control" name="slide_subtitle_2" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">CTA</label>
											<input value="<?php echo $row->slide_cta_2?>" type="url" class="form-control" name="slide_cta_2" placeholder="Title">
										</div>
									</div>	
								</div>
							</div>
                        </div>
						<hr>
						<div style="text-align: center" class="col-sm-12">
							<div class="form-group">
								<h3 class="form-label">slider 3</h3>
								<div class="row">
									<div class="col-3"></div>	
									<div class="col-6">
										<div class="form-group fill">
											<input type="hidden" value="<?php echo $row->slide_photo_3?>" name="photo_3">
											<input type="file" name="userfiles_3" class="validation-file">
											<img src="<?php echo base_url()?>assets/images/slider/<?php echo $row->slide_photo_3?>" alt="image" class="img-fluid wid-100 mb-2">
										</div>
									</div>
									<div class="col-3"></div>	
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Title</label>
											<input value="<?php echo $row->slide_title_3?>" type="text" class="form-control"  name="slide_title_3" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Description</label>
											<textarea maxlength="150" style="font-size: 1.3em" name="slide_description_3" class="form-control"  placeholder="Short description" rows="1"><?php echo $row->slide_description_3?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Subtitle</label>
											<input value="<?php echo $row->slide_subtitle_3?>" type="text" class="form-control" name="slide_subtitle_3" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">CTA</label>
											<input value="<?php echo $row->slide_cta_3?>" type="url" class="form-control" name="slide_cta_3" placeholder="Title">
										</div>
									</div>	
								</div>
							</div>
                        </div>
						<hr>
						<div style="text-align: center" class="col-sm-12">
							<div class="form-group">
								<h3 class="form-label">slider 4</h3>
								<div class="row">
									<div class="col-3"></div>	
									<div class="col-6">
										<div class="form-group fill">
											<input type="hidden" value="<?php echo $row->slide_photo_4?>" name="photo_4">
											<input type="file" name="userfiles_4" class="validation-file">
											<img src="<?php echo base_url()?>assets/images/slider/<?php echo $row->slide_photo_4?>" alt="image" class="img-fluid wid-100 mb-2">
										</div>
									</div>
									<div class="col-3"></div>	
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Title</label>
											<input value="<?php echo $row->slide_title_4?>" type="text" class="form-control"  name="slide_title_4" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Description</label>
											<textarea maxlength="150" style="font-size: 1.3em" name="slide_description_4" class="form-control"  placeholder="Short description" rows="1"><?php echo $row->slide_description_4?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Subtitle</label>
											<input  value="<?php echo $row->slide_subtitle_4?>" type="text" class="form-control" name="slide_subtitle_4" placeholder="Title">
										</div>
									</div>	
									<div class="col-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">CTA</label>
											<input  value="<?php echo $row->slide_cta_4?>" type="url" class="form-control" name="slide_cta_4" placeholder="Title">
										</div>
									</div>	
								</div>
							</div>
                        </div>
						<div style="text-align: right" class="col-sm-12">
							<button type="submit" class="btn btn-primary">save</button>
							<button type="reset" class="btn btn-danger">Clear</button>
						</div>
				   </form>
				</div>
			</div>
		</div>
	</div>
			<?php }?>


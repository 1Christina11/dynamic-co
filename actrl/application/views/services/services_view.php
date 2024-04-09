		<!-- [ breadcrumb ] start --> 
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Services</h5>
						</div>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="<?php echo site_url()."/Home/";?>"><i class="feather icon-home"></i></a></li>
                          <li class="breadcrumb-item"><a href="<?php echo site_url('Categories/get_categories_services') ?>">Categories</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo site_url('Sub_categories/get_sub_categories/'.$sub_categories_id)?>">Sub Categories</a></li>
						  <li class="breadcrumb-item"><a href="#!">Services</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
        <div class="row justify-content-center">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
					<div class="row align-items-center m-l-0">
						<div class="col-sm-6 text-right">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-report0"><i class="feather icon-plus"></i>New Service with photos</button>
						</div>
						<div class="col-sm-6 text-left">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-report1"><i class="feather icon-plus"></i>New Service with video</button>
						</div>
					</div>
                    <div class="card-body text-center">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 text-left">
                                <h5>Services</h5>
                            </div>
                        </div>
<!--
                        <ul class="list-inline mb-0">
							<?php foreach($categories as $row){?>
                            <li class="list-inline-item border-right m-0"><a href="<?php echo site_url('Portfolio/seacrh_category/'.$row->categories_id)?>" class="pr-2 pl-1 text-muted"><?php echo $row->catergory_title?></a></li>
							<?php }?>
                        </ul>
-->
                    </div>
                </div>
            </div>
			<?php $y=0;
				  foreach($services as $row0){?>
            <div class="col-lg-4 col-md-6">
                <div class="card user-card user-card-1 mt-4">
					<div class="card-header border-0 p-2 pb-0">
						<div class="cover-img-block">
							<?php
								  $x=0;
								  $photos = $this->Services_model->get_service_photos($row0->services_id);
							?>
							<?php if($row0->video_link == ''){?>
							<div id="carouselExampleControls<?php echo $y?>" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								 <?php   
								       foreach($photos as $row1){
								       if($row1->photo != ''){
								 ?>
									<div class="carousel-item <?php if($x == 0)echo 'active'?>">
										<img style="width:377px; height:327px !important"  src="<?php echo base_url()?>assets/images/service_file/<?php echo $row1->photo?>" alt="image" class="img-fluid">
									</div>
								<?php 
									  }
								 $x++;}?>

								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls<?php echo $y?>" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
								<a class="carousel-control-next" href="#carouselExampleControls<?php echo $y?>" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
							</div>
							<?php }?>
							<?php if($row0->video_link != ''){?>
							<iframe width="380px" height="327px" src="https://www.youtube.com/embed/<?php echo $row0->video_link?>">
							</iframe>
							<?php }?>
						</div>
					</div>
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; color: goldenrod" class="mb-1"><b>Description : </b><?php echo $row0->description?></p>
                            <p class="mb-0"><b>Title : </b><span class="badge badge-warning"><?php echo $row0->services_title?></span></p>
							<p class="mb-0"><b>Tags : </b>
							<?php
							      $tags_id_ex = explode(',', $row0->tags);
							      foreach($tags as $row1){  
							      $key = array_search($row1->tags_id, $tags_id_ex) . 'yes';
							      if($key != 'yes'){
							?>
                            <span class="badge badge-warning"><?php echo $row1->tag_name?></span>
							<?php }
								  }?>
							</p>
                        </div>
                    </div>
					<div class="col text-right pb-3">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?php echo site_url('Services/edit_services/'.$row0->services_id)?>">Edit</a>
								<a onClick="return confirm('Are you sure you want to delete this item??')" class="dropdown-item" href="<?php echo site_url('Services/delete_services/' . $row0->services_id .'/' .$row0->categories_id . '/' . $row0->sub_categories_id)?>">delete</a>
							</div>
						</div>
					</div>
                </div>
            </div>
			<?php $y++;}?>
		</div>
		<!-- [ Main Content ] end -->
<!-- Modal start -->
<div class="modal fade" id="modal-report0" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form action="<?php echo site_url('Services/add_services')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
					<input type="hidden" value="<?php echo $categories_id?>" name="categories_id">
					<input type="hidden" value="<?php echo $sub_categories_id?>" name="sub_categories_id">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">photos</label>
								<input multiple required type="file" name="userfile[]" class="validation-file" required>
							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">Title</label>
								<input required type="text" class="form-control" name="services_title" placeholder="services_title">
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label" for="description">description</label>
								<textarea required style="font-size: 1em" name="description" class="form-control"  placeholder="description" rows="3"></textarea>
							</div>
						</div>
							<div class="col-sm-6">
							<label class="form-label">Tags</label>
							<div class="form-check">
								<div class="form-check form-check-inline">
							    <?php foreach($tags as $row){?>  
								  <input multiple name="tags_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $row->tags_id?>">
								  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->tag_name?></label>
							    <?php }?>  
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"> Save </button>
					<button type="reset" class="btn btn-danger"> Clear </button>
				</div>
			</form>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal start -->
<div class="modal fade" id="modal-report1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form action="<?php echo site_url('Services/add_services')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
					<input type="hidden" value="<?php echo $categories_id?>" name="categories_id">
					<input type="hidden" value="<?php echo $sub_categories_id?>" name="sub_categories_id">

						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">video</label>
								<input required type="text" class="form-control" name="video_link">
							</div>
								<div class="form-group">
								<img style="text-align: center;margin: auto"  src="<?php echo base_url()?>assets/images/instr_image.png" alt="instructions_image" width="250px" height="auto">
							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">Title</label>
								<input required type="text" class="form-control" name="services_title" placeholder="services_title">
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label" for="description">description</label>
								<textarea required style="font-size: 1em" name="description" class="form-control"  placeholder="description" rows="3"></textarea>
							</div>
						</div>
							<div class="col-sm-6">
							<label class="form-label">Tags</label>
							<div class="form-check">
								<div class="form-check form-check-inline">
							    <?php foreach($tags as $row){?>  
								  <input multiple name="tags_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $row->tags_id?>">
								  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->tag_name?></label>
							    <?php }?>  
								</div>
							</div>
						</div>		
					</div>
				
				
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"> Save </button>
					<button type="reset" class="btn btn-danger"> Clear </button>
				</div>
			</form>
        </div>
    </div>
</div>
<!-- Modal end -->
<script>
new MultipleSelect('#Select-skill', {
  placeholder: 'Select skill'
})
</script>
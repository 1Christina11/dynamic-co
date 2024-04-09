		<!-- [ breadcrumb ] start --> 
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Services</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
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
                    <div class="card-body text-center">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6 text-left">
                                <h5>Services</h5>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Project with photos</button>
                            </div> <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-report2"><i class="feather icon-plus"></i> Project with videos</button>
                            </div>
                        </div>
						<br>
                        <ul class="list-inline mb-0">
							<?php foreach($categories2 as $row){?>
                            <li class="list-inline-item border-right m-0"><a href="<?php echo site_url('Services/seacrh_categories/'.$row->categories_id)?>" class="pr-2 pl-1 text-muted"><?php echo $row->catergory_title?></a></li>
							<?php }?>
<!--                            <li class="list-inline-item"><a href="#!" class="font-weight-bolder"> All </a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
			<?php foreach($categories as $row0){?>
            <div class="col-lg-4 col-md-6">
                <div class="card user-card user-card-1 mt-4">
					<div class="card-header border-0 p-2 pb-0">
						<div class="cover-img-block">
							<?php if($row0->video_link == ''){?>
							
							<?php
	
								  $x=0;
								  $photos = $this->Services_model->get_service_photos($row0->services_id);
								  foreach($photos as $row1){
							?>
							<div id="carouselExampleControls<?php echo $row1->services_photos_id?>" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								<div class="carousel-item active">
								<img class="img-fluid d-block w-100" src="<?php echo base_url() ?>/assets/images/service_file/<?php echo $row1->photo ?>" alt="First slide">
							</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls<?php echo $row1->services_photos_id?>" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
								<a class="carousel-control-next" href="#carouselExampleControls<?php echo $row1->services_photos_id?>" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
							</div>
							<?php $x++;}?>
							<?php } ?>
						</div>
					</div>
					<div class="card-body pt-0">

					<?php if($row0->video_link != ''){?>

                         <div class="thumb">
                 <td>  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row0->video_link?>" width="200" height="200" title="youtube video" frameborder="1" allowfullscreen>
                   </iframe>  </td>
               </div>
	             <?php }?>
                            
                            <p class="mb-0"><b>title : </b><span class="badge badge-warning"><?php echo $row0->services_title?></span></p>
                            <p class="mb-1"><b>Description : </b><?php echo $row0->description?></p>
                        </div>
                    </div>
					<div class="col text-right pb-3">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?php echo site_url('Services/edit_services/'.$row0->services_id.'/'.$row0->categories_id)?>">Edit</a>
								<a onClick="return confirm('Are you sure you want to delete this card?')" class="dropdown-item" href="<?php echo site_url('Services/delete_services/'.$row0->services_id)?>">delete</a>
							</div>
						</div>
					</div>
                </div>
            </div>
			<?php }?>
		</div>
		<!-- [ Main Content ] end -->
<!-- Modal start -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project with photos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form action="<?php echo site_url('Services/add_services')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">photos</label>
								<input multiple type="file" name="userfile[]" class="validation-file">
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
							<div class="form-check">
							  <?php foreach($categories as $row){?>  
								<div class="form-check form-check-inline">
								  <input multiple name="categories_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $row->categories_id?>">
								  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->catergory_title?></label>
								</div>
							  <?php }?>  
							</div>
<!--
							<div class="form-group  fill">
							  <label for="Select-skill">Multiple Select</label>
							  <select required name="categories_id[]" id="Select-skill" multiple>
								<?php foreach($categories as $row){?>  
								<option value="<?php echo $row->categories_id?>"><?php echo $row->catergory_title?></option>
								<?php }?>  
							  </select>
							</div>
-->
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
    <div class="modal fade" id="modal-report2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project with video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form action="<?php echo site_url('Services/add_services')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="form-label">video</label>
								<input type="text" class="form-control" name="video_link">
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
							<div class="form-check">
							  <?php foreach($categories as $row){?>  
								<div class="form-check form-check-inline">
								  <input multiple name="categories_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $row->categories_id?>">
								  <label class="form-check-label" for="inlineCheckbox1"><?php echo $row->catergory_title?></label>
								</div>
							  <?php }?>  
							</div>
<!--
							<div class="form-group  fill">
							  <label for="Select-skill">Multiple Select</label>
							  <select required name="categories_id[]" id="Select-skill" multiple>
								<?php foreach($categories as $row){?>  
								<option value="<?php echo $row->categories_id?>"><?php echo $row->catergory_title?></option>
								<?php }?>  
							  </select>
							</div>
-->
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
new MultipleSelect('#select-multiple-language', {
  placeholder: 'Select category'
})
</script>
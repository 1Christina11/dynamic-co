       <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Sub Categories</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Categories/get_categories_services')?>">Categories</a></li>
                            <li class="breadcrumb-item"><a href="#!">Sub Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row align-items-center m-l-0">
          <div class="col-sm-6"></div>
          <div class="col-sm-6 text-right">
            <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report">
              <i class="feather icon-plus"></i>Add Sub Category</button>
          </div>
        </div>
        <div class="row justify-content-center">
            <!-- liveline-section start -->
			<?php foreach($sub_categories as $row){?>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?php echo base_url()?>assets/images/sub_categories_photos/<?php echo $row->sub_photo?>" alt="image"  class="img-fluid wid-100 mb-2" class="img-fluid w-50">
							<a href="<?php echo site_url('Services/index/'.$row->categories_id.'/'.$row->sub_categories_id)?>"><h4 class="mt-3"><?php echo $row->sub_title?></h4></a>
							<hr>
							<a href="<?php echo site_url('Sub_categories/edit_sub_category/'. $row->sub_categories_id)?>" class="btn btn-icon btn-outline-primary mr-2"><i class="feather icon-edit-2"></i></a>
							<a href="<?php echo site_url('Sub_categories/delete_sub_category/'.$row->sub_categories_id.'/'.$row->categories_id)?>" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
						</div>
					</div>
				</div>
			<?php }?>
            <!-- liveline-section end -->
        </div>
<!-- Modal start -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Sub Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form action="<?php echo site_url('Sub_categories/add_sub_category')?>" method="post" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $categories_id?>" name="categories_id">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group fill">
                        <label class="floating-label" for="Icon">Sub Category Photo</label>
                        <input type="file" name="userfile" class="form-control" id="Icon" placeholder="sdf">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="floating-label" for="title">Sub Category Title</label>
                        <input required type="text" class="form-control" id="title" name="sub_title" placeholder="Sub Category Title">
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
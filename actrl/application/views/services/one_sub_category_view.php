        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Sub Categories</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Sub_categories/get_sub_categories/'.$sub_category->categories_id)?>">Sub Categories</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Sub Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			
			<!-- [ horizontal-layout ] start -->
			<div class="col-sm-12">
				<div class="card">
                    <div class="card-header">
                        <h5>Edit Sub Category</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url('Sub_categories/update_sub_category')?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<input value="<?php echo $sub_category->categories_id?>" type="hidden" class="form-control"  name="categories_id">
								<input value="<?php echo $sub_category->sub_categories_id?>" type="hidden" class="form-control"  name="sub_categories_id">
								<div class="col-sm-12">
								  <div class="form-group fill">
<!--								    <input type="hidden" value="<?php echo $sub_category->sub_photo?> " name="photo">-->
								    <img alt="image" class="img-fluid wid-100 mb-1" src="<?php echo base_url()?>assets/images/sub_categories_photos/<?php echo $sub_category->sub_photo?>">
									<input type="file" name="userfile" class="form-control" id="Icon" placeholder="sdf">
								  </div>
								</div>
								<div class="col-sm-12">
								  <div class="form-group">
									<label class="floating-label" for="title">Sub Category Title</label>
									<input style="font-size: 1.4em" value="<?php echo $sub_category->sub_title?>" required type="text" class="form-control" id="title" name="sub_title" placeholder="Sub Category Title">
								  </div>
								</div>
								<div style="text-align: right" class="col-sm-12">
									<button type="submit" class="btn btn-primary">Save</button>
									<button type="reset" class="btn btn-danger">Clear</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- [ horizontal-layout ] end -->
		</div>

		
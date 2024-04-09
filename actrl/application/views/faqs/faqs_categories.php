        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">FAQs Categories</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">FAQs Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->   
		<!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sweetalert ] start -->
            <div class="col-sm-12">
				<div class="row">
					<div class="col-10"></div>
					<div class="col-2 text-right">
					<button type="button" class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#exampleModalLive"><i class="feather icon-plus"></i>add FAQs Categories</button>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-pills bg-white" id="myTab" role="tablist">
					<?php
					foreach($faqs_categories as $row){?>		
					<li class="nav-item">
						<a class="nav-link active text-uppercase" id="user1-tab" data-toggle="tab" href="#user1" role="tab" aria-controls="user1" aria-selected="true"><?php echo $row->category_name?></a>
						<div class="row">
							<div class="col text-center">
								<a href="<?php echo site_url('Faqs/delete_faq_category/'.$row->faqs_categories_id)?>" class="text-danger" onClick="return confirm('Are you sure you want to delete this faq category?')"><i class="feather icon-trash-2 mr-1 text-center"></i></a>
							</div>
						</div>
					</li>
					<?php }?>		
				</ul>
					</div>
				</div>
				
            </div>
            <!-- [ sweetalert ] end -->
        </div>
        <!-- [ Main Content ] end -->
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLiveLabel">FAQs Categories</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url('Faqs/add_faqs_categories')?>" method="post" >
				<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="floating-label" for="tag_name">Category Name</label>
								<input required class="form-control" name="category_name" ></input>
							</div>
						</div>
				  </div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn  btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn  btn-primary">Save </button>
			</div>
			</form>
		</div>
	</div>
</div>

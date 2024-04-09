

<!-- [ auth-signup ] start -->

	<div class="col-md-6">
		<div class="card">
		
				<div class="col-md-12">
					<div class="card-body">
					  	 <h5 class="mb-3 f-w-400">About us Data</h5>
						<form action="<?php echo site_url()?>/About_us/add_about_us" method="post" enctype="multipart/form-data" autocomplete="off">
							<div class="form-group mb-3">
                                <label class="floating-label" >Title</label>
                                <input name="title" type="text" class="form-control">
                            </div>
							<div class="form-group mb-3">
								<label class="floating-label" for="paragraph">paragraph</label>
								<input type="text" name="paragraph" class="form-control" id="paragraph" placeholder="Please enter your address">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="vision">Our Vision</label>
								<input type="text" name="vision"  class="form-control" id="vision" placeholder="Please enter title">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="mission">Our Mission</label>
								<input type="text" name="mission"  class="form-control" id="mission" placeholder="Please enter title">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="value">Value</label>
								<input type="text" name="value" class="form-control" id="value" placeholder="Please enter your address">
							</div>

							
							
					
						<div class=" align-items-center m-l-6">
							<div class="col-sm-12 text-right">
					 	 	<button type= "submit" class="btn btn-outline-primary"><i class="feather icon-save"></i> Update</button>
							<button type="reset" class="btn btn-danger btn-round has-ripple" ><i class="feather icon-delete"></i>  Clear</button>
							</div>
						</div>
					
								
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- [ auth-signup ] end -->
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?php echo base_url()?>/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/ripple.js"></script>
<script src="<?php echo base_url()?>/assets/js/pcoded.min.js"></script>

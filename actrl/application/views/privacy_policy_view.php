 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
							<br>
							<br>
                    <h5 class="m-b-10">Privacy Policy</h5>
                  		</div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/Privacy_policy/edit_privacy">Privacy Policy</a></li>
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
                    <div class="card-header">
                        <h5>Privacy Policy</h5>
                    </div>
                    <div class="card-body text-center">
						<form action="<?php echo site_url('Privacy_policy/update_privacy')?>" method="post"  >            
							<div class="row">
								<div class="col-md-12">
                                    <div class="form-group">
                                        <h1>Privacy Policy</h1>
                                        <textarea rows="50" class="form-control" name="text"><?php echo $privacy_policy->text?></textarea>
                                    </div>
                                </div>
								</div>
                            <button type="submit" class="btn  btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
		</div>
		<!-- [ Main Content ] end -->

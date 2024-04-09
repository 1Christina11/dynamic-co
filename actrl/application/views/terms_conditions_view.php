        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Terms Conditions</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Terms Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Terms Conditions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
								<form action="<?php echo site_url('Terms_conditions/update_terms_conditions')?>" method="post">
									<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="20"><?php echo $terms_conditions->text?></textarea>
									<div class="row">
										<div class="col-sm-11">
										</div>
										<div class="col-sm-1">
											<button type="submit" class="btn  btn-primary">Save</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->

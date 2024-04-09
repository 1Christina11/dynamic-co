

   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                    <h5 class="m-b-10">Clients </h5>
                  		</div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/About_us/edit_about_us">Clients</a></li>
                        </ul>
                    </div>
				</div>
		   </div>
		</div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Clients</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url()?>/About_us/update_client/<?php echo $clients->clients_id?>" method="post" enctype="multipart/form-data" autocomplete="off">
						<div class="row">
						<div class="col-sm-12">
						  <div class="form-group">
							<label for="Name">Client Name</label>
							<input type="text" class="form-control" name="client_name" placeholder="Client Name" value="<?php echo $clients->client_name?>">
							</div>
						</div>
						</div>
							  <input type="hidden" class="form-control" name="clients_id" placeholder="clients_id" value="<?php echo $clients->clients_id?>">
							<div class="row">
							<div class="col-sm-12">
							  <div class="form-group fill">
								<label class="my-font" for="service_pic">Client Logo (50px*50px)</label>
								   <img src="<?php echo base_url()?>/assets/images/our_clients/<?php echo $clients->client_logo;?>" width="150px" type="file"  name="userfile" id="client_logo" placeholder="sdf">
								<input  min="12" max="30" type="file" class="form-control" name="userfile" placeholder="sdf" width= '25px' hight='25px'>
							  </div>
							</div>
							</div>
						<div class=" align-items-center m-l-12" >
							<div class="col-sm-12 text-right">
					 	 	<button type= "submit" class="btn btn-outline-primary"><i class="feather icon-save"></i> Update</button>
							<button type="reset" class="btn btn-danger btn-round has-ripple" ><i class="feather icon-delete"></i>  Clear</button>
							</div>
							</div>
						</form>
					</div>
			   </div>
			<!-- [ Form Validation ] end -->
		</div>
				<!-- [ Main Content ] end -->
		</div>



<!-- [ auth-signup ] end -->
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?php echo base_url()?>/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/ripple.js"></script>
<script src="<?php echo base_url()?>/assets/js/pcoded.min.js"></script>

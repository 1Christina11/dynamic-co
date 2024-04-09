        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Clients</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Clients</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Add rows table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Clients</h5>
                    </div>
						<div class="row align-items-center m-l-0">
						  <div class="col-sm-6"></div>
						  <div class="col-sm-6 text-right">
							<button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report">
							  <i class="feather icon-plus"></i>Add Client</button>
						  </div>
						</div>
                            <table id="add-row-table" class="table  table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Client Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach($clients as $row){?>
                                    <tr>
                                        <th><?php echo $row->client_name?></th>
                                        <th><img src="<?php echo base_url()?>/assets/images/our_clients/
										<?php echo $row->client_logo?>"
										 width="20px" height="20px" />
										</th>
                                        <th><a href="<?php echo site_url()?>/About_us/edit_client/
										<?php echo $row->clients_id ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
										<a onClick="return confirm('Are you sure you want to delete this client?')" href="<?php echo site_url()?>/About_us/delete_client/
										<?php echo $row->clients_id ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
										</th>
                                    </tr>
									<?php }?>
                                </tbody>
                            </table>
						</div>
					</div>
					<!-- Add rows table end -->
				</div>
			<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title">Add Client<h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<form action="
							<?php echo site_url()?>/About_us/insert_client" method="post" enctype="multipart/form-data">
					  <div class="row">
						<div class="col-sm-12">
						  <div class="form-group">
							<label class="floating-label my-font" for="Name">Client</label>
							<input required min="12" max="30" type="text" class="form-control" name="client_name" placeholder="">
						  </div>
						</div>

						<div class="col-sm-6">
						  <div class="form-group fill">
							<label class="my-font" for="service_pic">Client Logo (50px*50px)</label>
							<input required type="file" class="form-control" name="userfile" placeholder="sdf" width= '25px' hight='25px'>
						  </div>
						</div>
						  <br>
						  <br>
						  <br>
						  <br>
						  <br>
						<div class="col-sm-12">
						  <button type="submit" class="btn btn-primary my-font">Add</button>
						</div>
					  </div>
					</form>
				  </div>
				</div>
			  </div>
			</div>

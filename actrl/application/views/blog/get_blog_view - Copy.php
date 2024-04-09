       <!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Blog</h5>
						</div>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="<?php echo site_url()."/Home/";?>"><i class="feather icon-home"></i></a></li>
						  <li class="breadcrumb-item"><a href="">Blog</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
 
	<div class="thumbnail mb-4 col-sm-12 text-right">
	  <button type="button" class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#exampleModalLive">
		  <i class="feather icon-folder"></i> Add Blog</button>
	</div>
<!--
            <div class="col-sm-12 text-right">
					 <form action="<?php echo site_url('Photo_gallery/delete_all')?>" method="post" enctype="multipart/form-data">
							<div class="col-sm-6 text-right">
								<button data-type="horizontal" type="submit" style=" right: auto" class="btn notifications btn-danger btn-sm btn-round has-ripple" ><i class="feather icon-plus"></i>delete all</button>
							</div>
					  </form>
            </div>
-->
  
    <div class="card-columns">	
	      <?php
			 $x=0;
            foreach ($blogs as $row){?>
		
		
		
		


			 <div class="card">
				<div class="card-header">
					<input type="hidden" name="<?php echo $row->photo_gallery_albums_id?>">
					<h5><?php echo $row->album_name ?></h5>
				</div>
				<div class="card-body">
					<div id="carouselExampleIndicators<?php echo $x?>" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-fluid d-block w-100" src="<?php echo base_url() ?>/assets/images/photo_gallery/<?php echo $row->album_cover ?>" alt="First slide">
							</div>
									<?php 
				               
                      $photo = $this->Blog_model->get_blog_photos($row->blogs_id);
			foreach ($photo as $row1) { ?>
					<td><a href="<?php echo site_url("Blog/" . $row->blogs_id); ?>"></a> </td> 
                         
                        
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="<?php echo base_url(); ?>/assets/images/photo_blog/<?php echo $row1->photo; ?>" alt="Second slide">
								</div>
							<?php ;}?>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $x?>" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span></a>
						<a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $x?>" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span></a>
					</div>
					<div>
						<h5 class="job-card-desc" name="album_name"><a href="<?php echo site_url('Photo_gallery/get_album_photos/' . $row->photo_gallery_albums_id) ?>">
				        <?php echo $row->album_name ?></a></h5>

						<div class="job-meta-data"><i class="feather icon-watch"></i><?php echo $row->created_at ?></div>
						<a href="<?php echo site_url('Photo_gallery/view_album/' .$row->photo_gallery_albums_id);?>" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
						<a href="<?php echo site_url('Photo_gallery/edit_album/' . $row->photo_gallery_albums_id); ?>">				
							<button type="submit" class="btn btn-icon btn-outline-success"><i class="feather icon-edit-1"></i></button>
						</a>
						<a href="<?php echo site_url('Photo_gallery/delete_album/' . $row->photo_gallery_albums_id); ?>">
							<button type="submit" class="btn btn-icon btn-outline-danger sweet-error" onclick="return confirm('Are you sure you want to delete this item?');"><i class="feather icon-trash-2" ></i></button>
						</a>
					</div>
				</div>
			</div>
	    <?php $x++;}?>
	
	 </div>
	
	 
<!--
  <div class="card-columns">		
 	<?php
         foreach ($photo_gallery_albums as $row){?>
	  <div class="card">
				
				<img src="<?PHP echo base_url() ?>/assets/images/photo_gallery/<?php echo $row->album_cover ?>" class="img-fluid card-img-top" name="album_cover" >
				<a href="<?php echo site_url('Photo_gallery/get_album_photos/' . $row->photo_gallery_albums_id) ?>">
				<?php echo $row->album_name ?></a>
			<div class="card-body">
			    <h5 class="job-card-desc" name="album_name"><?php echo $row->album_name ?></h5>

			    <div class="job-meta-data"><i class="far fa-handshake" name="created_at"></i><?php echo $row->created_at ?></div>
				<a href="<?php echo site_url('Photo_gallery/edit_album/' . $row->photo_gallery_albums_id); ?>">				
					<button type="submit" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></button>
				</a>
				<a href="<?php echo site_url('Photo_gallery/delete_album/' . $row->photo_gallery_albums_id); ?>">
					<button type="submit" class="btn btn-icon btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="feather icon-trash-2" ></i></button>
				</a>
			</div>
	  </div>
	<?php }?>					
  </div>
-->

<!--------------------START MODAL ------------------>

   <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				  <form action="<?php echo site_url('Photo_gallery/insert_album') ?>" method="post" enctype="multipart/form-data">
					 <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLiveLabel">Add Album</h5>
						<button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					 </div>
					 <div class="modal-body">
						  <div class="row">
							<div class="col">
								<div class="form-group">
									<div class="form-group">
										<label class="floating-label" >Photo</label>
										<input name="userfile" type="file" class="form-control">
									</div>     
									<div class="form-group">
										<label class="floating-label" >Album Name</label>
										<input name="album_name" type="text" class="form-control" placeholder="Title">
									</div>
								
								</div>
							</div>
			             </div>
					  </div>
					 <div class="modal-footer">
						<button type="submit" class="btn  btn-success sweet-success"><i class="feather icon-save"></i> Save</button>
						<button type="reset" class="btn  btn-secondary" data-dismiss="modal"> <i class="feather icon-slash"></i> Close</button>
					 </div>
				  </form>
			    </div>
			</div>
    </div>
<!--------------------------END MODAL------------------->


<!--<div class="row">-->
<!--
             customar project  start 
       <div class="col-xl-12">
       <div class="card">
       <div class="card-body">
         <div class="row align-items-center m-l-0">
         <div class="col-sm-6">
            </div>
                            
			 
		 <div class="col-sm-6 text-right">
           <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#theModal-1"><i class="feather icon-plus"></i> Add Photos</button>
             

             
            </div>
             </div>
-->

<!--
                        <div class="table-responsive">
                            <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="report-table_length"></div></div><div class="col-sm-12 col-md-6"><div id="report-table_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="report-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="report-table_info">
                                <thead class="thead-light">
                                    <tr role="row">
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="Category: activate to sort column ascending"> #</th>
										
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="photo: activate to sort column ascending">photo </th>
										
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="ph_title: activate to sort column ascending"> Photo Title</th>
										
										
										
																		
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 104.967px;" aria-label="created_at: activate to sort column ascending"> Created at</th>
										
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" style="width: 161.85px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                           
                                    


<script src="<?php echo base_url()?>assets/js/menu-setting.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/ac-alert.js"></script>
                                    
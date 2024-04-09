

<!-- [ Main Content ] start -->
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Product</h5>
                        </div>
												  <?php 

          foreach ($blogs as $row){?>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="../../controllers/Blog.php">Blogs</a></li>
                            <li class="breadcrumb-item"><a href="#!"><?php echo $row->title?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-5">
                                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
											
											
									 <?php $photo = $this->Blog_model->get_blog_photos($row->blogs_id);
								  foreach($photo as $row1){
							?> <td>
		       
		                  <div class="form-group">
		                    <label class="form-label">photo</label>
		                 
				<div class="">
				
									<td><a href="<?php echo site_url('Blog/'. $row->blogs_id)?>">
				</a></td> 
					<div class="main-menu-header">
	<?php if ( $row1->photo = NULL ) {?>  <iframe class="embed-responsive-item"  src="<?php echo base_url()?>/assets/images/photo_blog/<?php echo $row->photo ?>"width="200px" height="200px" title="photo" frameborder="1" allowfullscreen>	</iframe> <?php }?>						<div class="user-details">
							<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
						</div>											<?php }?>
						

					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				

                                   <tr>

				

                                        </div>
                                      </div>
                                    <ol class="carousel-indicators position-relative">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="w-25 h-auto active">
                                            <img src="assets/images/product/prod-big-1.jpg" class="d-block wid-50" alt="Product images">
                                        </li>
                                        	
                                    </ol>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form class="pl-lg-4">
                                    <h3 class="mt-0"><?php echo $row->title?><a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                                    <p class="mb-1">Added Date: <?php echo $row->created_at?></p>
                                                                <div class="col-lg-12">
                                <div class="mt-4">
                                    <h6>Description:</h6>
                                    <p><?php echo $row->description?></p>
                                    <h6><a href="#!">Manufacturing, Packaging and Import Info</a></h6>
                                </div>
                            </div>
                        </div>
						<?php }?>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

		
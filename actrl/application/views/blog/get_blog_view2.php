
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Blog</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>

                            <li class="breadcrumb-item"><a href="#!">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Blog</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Created at</th>
                                        <th>Options</th>
                                    </tr>
                                </thead> 
                                <tbody>
									    <?php 
        $x = 1 ;
          foreach ($blogs as $row){?>
          
<!--          <?php echo $row->video_link?>-->
            
				<?php
								
								  $photo = $this->Blog_model->get_blog_photos($row->blogs_id);
								  foreach($photo as $row1){
							?>
			<td><a href="<?php echo site_url('Blog/'. $row->blogs_id)?>">
				</a>                                    <tr>
									          <td><?php echo $x?></td>                     
                                        
			
				                                    <div class="thumb">
                                      <td><?php
								if ( $row1->photo != NULL ) {?>  <iframe class="embed-responsive-item"  src="<?php echo base_url()?>/assets/images/photo_blog/<?php echo $row1->photo ?>"width="200px" height="200px" title="photo" frameborder="1" allowfullscreen>	</iframe> <?php }?>
                                           
										</td></div><?php }?>
				

                                    <div class="thumb">
                                      <td>
                                            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/  <?php echo $row->video_link?>"width="200" height="200" title="youtube video" frameborder="1" allowfullscreen></iframe>
										</td></div>

										
                                        <td><?php echo $row->title?></td>
                                        <td><?php echo $row->description?></td>
                                        <td><?php echo $row->created_at?></td>
                                        <td>
                                            <a href="<?php echo site_url('Blog/read_more/'. $row->blogs_id);?>" class="btn btn-info btn-sm"><i class=""></i>read more -> </a> 
											
											<a href="<?php echo site_url('Blog/edit_blog/'. $row->blogs_id );?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
											
                                            <a href="<?php echo site_url('Blog/delete_blog/'. $row->blogs_id );?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>Delete </a>
                                        </td>
										 <?php $x++; }?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
   <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Sellers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo site_url('Blog/insert_blog')?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="description">Description</label>
                                <input type="description" class="form-control" name="description" id="description" placeholder="">
                            </div>
                           </div>

                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon"> Image</label>
								<input type="file" name="userfile[]" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Video">Video</label>
                                <input type="text" class="form-control" name="video" id="video" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


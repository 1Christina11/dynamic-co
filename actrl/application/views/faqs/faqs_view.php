		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">faqs</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="https://actrl.dynamic-co.com/"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">faqs</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
				<div class="row align-items-center m-l-0">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6 text-right">
						<button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Add Faq</button>
					</div>
				</div>
                <div class="card">
                    <div class="card-header">
                        <h5>Faqs</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<?php
										$x=0;
										foreach($faqs_categories as $row){
									?>
                                    <a class="nav-link <?php if($x == 0)echo 'active'?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home<?php echo $row->faqs_categories_id?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $row->category_name?></a>
									<?php
										$x++;}
									?>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
									<?php $x=0;
										  foreach($faqs_categories as $row0){
									?>
                                    <div class="tab-pane fade show <?php if($x == 0)echo 'active'?>" id="v-pills-home<?php echo $row0->faqs_categories_id?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
										<?php
											  $data = $this->Faqs_model->get_by_faqs_categories($row0->faqs_categories_id);
											  foreach($data as $row1){
										?>
                                        <h5 class="text-primary"><?php echo $row1->question?></h5>
                                        <ul>
                                            <li><?php echo $row1->answer?></li>
                                        </ul>
										<div class="row">
											<div class="col-sm-12 text-right ">
												<a href="<?php echo site_url('Faqs/delete_faq/'.$row1->faq_id)?>"><button  style="text-align: center" class="btn btn-danger feather icon-trash-2" onClick="return confirm('Are you sure you want to delete this faq?')">Delete</button></a>
												<a href="<?php echo site_url('Faqs/edit_one_faq/'.$row1->faq_id)?>" ><button style="text-align: center" class="btn btn-primary feather">Edit</button></a>
											</div>
										</div>
										<?php }
											  ?>
                                    </div>
									<?php $x++;}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- [ Main Content ] end -->
<div id="modal-report" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
		  <form action="<?php echo site_url('Faqs/insert_faqs')?>" method="post" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLiveLabel">faqs</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
				<div class="modal-body">
					<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="floating-label" for="titel_blog">Question</label>
									<input required class="form-control" id="title_blog" name="question" ></input>
								</div>
							</div>
							<div class="col-sm-6">
								<select required name="faqs_categories_id" class="form-control" aria-label="Default select example">
								  <option disabled selected>select a category</option>
								  <?php foreach($faqs_categories as $row){?>	
									  <option value="<?php echo $row->faqs_categories_id ?>"><?php echo $row->category_name?></option>
								  <?php }?>
								</select>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label class="floating-label" for="description_blog" >Answer</label>
									<textarea required class="form-control"  name="answer"  id="description_blog" rows="5"></textarea>
								</div>
							</div>
					  </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn  btn-primary">Save </button>
				</div>
			</form>
		</div>
	</div>
</div>

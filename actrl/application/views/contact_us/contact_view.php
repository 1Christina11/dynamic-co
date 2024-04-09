        <div class="row">
            
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>The contact</h5>
                    </div>
                    <div class="card-body">

							<form action="<?php echo site_url('Contact_us/update_contact')?>" method="post" enctype="multipart/form-data" >  
								
								<div class="form-group ">
                                    <label for="inputEmail4">Headquarters</label>
                                    <input type="text" class="form-control" id="location" placeholder="" value="<?php echo $contact_us->location?>" name="location" >
                                </div>
								
								
								<div class="form-group ">
                                    <label for="inputEmail4">Mobile</label>
                                    <input type="numper" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $contact_us->mobile?>" name="mobile" >
                                </div>
								
								
								
								<div class="form-group ">
                                    <label for="inputEmail4">Facebook</label>
                                    <input type="url" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $contact_us->facebook_link?>" name="facebook_link" >
                                </div>
								
								
								
								<div class="form-group ">
                                    <label for="inputEmail4">Instagram</label>
                                    <input type="url" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $contact_us->intagram_link?>" name="intagram_link" >
                                </div>
								
								
								
								<div class="form-group ">
                                    <label for="inputEmail4">Twitter</label>
                                    <input type="url" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $contact_us->twitter_link?>" name="twitter_link" >
                                </div>

								
								
								
								
								
								
                            <div class="form-group">
                                <label for="inputAddress">Pinterest</label>
                                <input type="url" class="form-control" id="inputAddress" placeholder="" value="<?php echo $contact_us->pinterest_link?>" name="pinterest_link">
                            </div>
				
		                    <div class="form-group">
                                <label for="inputAddress2">Linkedin</label>
                                <input type="url" class="form-control" id="inputAddress2" placeholder="" value="<?php echo $contact_us->linkedin_link?>" name="linkedin_link">
                            </div>

                            <div class="form-group">
                                <label for="inputAddress1">Youtube</label>
                                <input type="url" class="form-control" id="inputAddress1" placeholder="" value="<?php echo $contact_us->youtube_link?>" name="youtube_link">
                            </div>
								<div class="col-sm-6 text-right">
									<button type="submit" class="btn  btn-primary">Save</button>
								</div>
                        </form>
                    </div>
                </div>
                <!-- Input group -->
            </div>
            <!-- [ form-element ] end -->
        </div>

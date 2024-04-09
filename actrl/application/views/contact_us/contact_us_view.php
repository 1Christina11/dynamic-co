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
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="" value="<?php echo $contact_us->email?>" name="email" >
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Phone</label>
                                    <input data-mask="(999)9999-9999" type="number" class="form-control telphon-with-code" id="inputPassword3"   autocomplete="off" maxlength="14" value="<?php echo $contact_us->phone?>" name="phone">
                                </div>
                            <div class="form-group">
                                <label for="inputAddress">Facebook</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="" value="<?php echo $contact_us->facebook?>" name="facebook">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Twitter</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="" value="<?php echo $contact_us->twitter?>" name="twitter">
                            </div>
		                    <div class="form-group">
                                <label for="inputAddress2">pinterest</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="" value="<?php echo $contact_us->pinterest?>" name="pinterest">
                            </div>

                            <div class="form-group">
                                <label for="inputAddress1">Instagram</label>
                                <input type="link" class="form-control" id="inputAddress1" placeholder="" value="<?php echo $contact_us->instagram?>" name="instagram">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress5">Address</label>
                                <input type="text" class="form-control" id="inputAddress5" placeholder="" value="<?php echo $contact_us->address?>" name="address">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress6">Location</label>
                                <input type="text" class="form-control" id="inputAddress6" placeholder="" value="<?php echo $contact_us->location?>" name="location">
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

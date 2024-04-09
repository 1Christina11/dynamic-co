   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                    <h5 class="m-b-10">About Us</h5>
                  		</div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/About_us/edit_about_us">About Us</a></li>
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
                        <h5>About Us</h5>
                    </div>
                    <div class="card-body">
						<form action="<?php echo site_url('About_us/update_about_us')?>" method="post"> 
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "tittle" class="form-label">Title in header</label>
                                        <textarea class="form-control" name="title" rows="8"><?php echo $about_us->title?></textarea>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "paragraph" class="form-label">about us Dynamic</label>
                                        <textarea class="form-control" name="paragraph" rows="8"><?php echo $about_us->paragraph?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
								  <input type="hidden" name="id" value="<?php echo $about_us->about_us_id?>"/>
                                        <label class="form-label">Our Vision</label>
                                        <textarea class="form-control" name="vision" rows="10"><?php echo $about_us->vision?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "tittle" class="form-label">Our Mission</label>
                                        <textarea class="form-control" name="mission" rows="10"><?php echo $about_us->mission?></textarea>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Value</label>
                                        <textarea class="form-control" name="value" rows="5"><?php echo $about_us->value?></textarea>
                                    </div>
                                </div><br>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 1</label>
                                        <input class="form-control" value="<?php echo $about_us->counter_1?>" type ="text" name="counter_1"/>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 1 Title</label>
                                        <input class="form-control" type ="text" name="counter_1_title" value="<?php echo $about_us->counter_1_title?>"/>
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 2</label>
                                        <input class="form-control" type ="text" name="counter_2" value="<?php echo $about_us->counter_2?>"/>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 2 Title</label>
                                        <input class="form-control" type ="text" name="counter_2_title" value="<?php echo $about_us->counter_2_title?>"/>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 3</label>
                                        <input class="form-control" type ="text" name="counter_3" value="<?php echo $about_us->counter_3?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 3 Title</label>
                                        <input class="form-control" type ="text" name="counter_3_title" value="<?php echo $about_us->counter_3_title?>">
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 4</label>
                                        <input class="form-control" name="counter_4" type ="text" value="<?php echo $about_us->counter_4?>" />
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 4 Title</label>
                                        <input class="form-control" type ="text" name="counter_4_title" value="<?php echo $about_us->counter_4_title?>" />
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 1 (SVG) Icon</label>
                                        <input class="form-control" type ="text" name="counter_1_icon" value="<?php echo $about_us->counter_1_icon?>">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 2 (SVG) Icon</label>
                                        <input class="form-control" type ="text" name="counter_2_icon" value="<?php echo $about_us->counter_2_icon?>">
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 3 (SVG) Icon</label>
                                        <input class="form-control"  name="counter_3_icon" type ="text" value="<?php echo $about_us->counter_3_icon?>" />
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for= "value" class="form-label">Counter No. 4 (SVG) Icon</label>
                                        <input class="form-control" type ="text" name="counter_4_icon" value="<?php echo $about_us->counter_4_icon?>" />
                                    </div>
								</div>
                            <button type="submit" class="btn  btn-primary">Save</button>
                        </form>
						</div>
                    </div>
			   </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
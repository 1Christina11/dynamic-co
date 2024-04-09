						<div id="primary-menu-trigger">
						  <svg class="svg-trigger" viewBox="0 0 100 100">
						    <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
						    <path d="m 30,50 h 40"></path>
						    <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
						  </svg>
						</div>
						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">
						  <ul class="menu-container">
						    <li class="menu-item">
						      <a class="menu-link" href="https://dynamic-co.com">
						        <div>Home</div>
						      </a>
						    </li>
							
							  
							<li class="menu-item mega-menu">
								<a class="menu-link" href="<?php echo site_url('Categories')?>"><div>Services</div></a>
								<div class="mega-menu-content mega-menu-style-2">
									<div class="container">
										<div class="row">
									    <?php 
									           $categories =$this->Home_model->get_categories();
									           foreach($categories as $row0){?>
											<ul class="sub-menu-container mega-menu-column col-lg-3">
												<li class="menu-item mega-menu-title">
													<div><?php echo $row0->catergory_title?></div>
													<ul class="sub-menu-container">
													<?php  
												   		   $sub_categories =$this->Sub_categories_model->get_sub_categories($row0->categories_id);
												           foreach($sub_categories as $row1){
														   $sub_catergory_title = str_replace(" ","-",$row1->sub_title)
														?>
														<li class="menu-item">
															<a class="menu-link" href="<?php echo site_url('Sub/category/'.$sub_catergory_title.'/'.$row0->categories_id)?>"><div><?php echo $row1->sub_title?></div></a>
															<ul class="sub-menu-container mega-menu-dropdown">
															<?php 
																   $services =$this->Services_model->get_all_services($row1->sub_categories_id );
																   foreach($services as $row2){
																   $service_title = str_replace(" ","-",$row2->services_title)
																?>
																<li class="menu-item">
																	<a class="menu-link" href="<?php echo site_url('Dynamic/service/'.$service_title.'/'.$row2->services_id)?>"><div><?php echo $row2->services_title?></div></a>
																</li>
															<?php }?>
															</ul>
														</li>
													<?php }?>	
													</ul>
												</li>
											</ul>
										<?php }?>
										</div>
									</div>
								</div>
							</li>
							  
							  
							  
							  
							  
<!--
						    <li class="menu-item mega-menu">
						      <a class="menu-link" href="<?php echo site_url('Dynamic/services')?>">
						        <div>Services</div>
						      </a>
						      <div class="mega-menu-content mega-menu-style-2">
						        <div class="container">
                                 <div class="row"> 
									 <?php $x=0;
									    $categories =$this->Home_model->get_categories();
									    foreach($categories as $row1){
									  $catergory_title=str_replace(" ","-",$row1->catergory_title) ;?>
									 <ul class="sub-menu-container mega-menu-column col">
						              <li class="menu-item mega-menu-title">
						                <a class="menu-link" href="
									     <?php echo site_url('Dynamic/index/'.$catergory_title.'/'.$row1->categories_id) ?>">
						                  <div> <?php echo $row1->catergory_title?> </div>
						                </a>
										  <?php 
							                 $services =  $this->Services_model->get_services();
									    	 foreach($services as $roww){ 
							                 $services_title=str_replace(" ","-",$roww->services_title) ;?>
						                <ul class="sub-menu-container"> 
											
											<?php
											 if ($roww->categories_id == $row1->categories_id) {?>
											<li class="menu-item">
						                    <a class="menu-link" href="
											<?php echo site_url('Dynamic/service/' . $services_title . '/' . $roww->services_id) ?>"> <?php echo $roww->services_title?> </a>
						                  </li> 
											<?php }?> 
											
										  </ul> 
										  <?php }?> 
										  
						              </li>
						            </ul>
											    <?php }?>
						          </div>								  
								  </div>
						      </div>
						    </li>
-->
					
						    <li class="menu-item mega-menu">
						      <a class="menu-link" href="<?php echo site_url('Portfolio')?>">
						        <div>Portfolio</div>
						      </a>
						    </li>
						    <li class="menu-item">
						      <a class="menu-link" href="<?php echo site_url('Aboutus')?>">
						        <div>About Us</div>
						      </a>
						    </li>
						    <li class="menu-item">
						      <a class="menu-link" href="<?php echo site_url('Contact_us/index/'.$msg=NULL)?>">
						        <div>Contact Us</div>
						      </a>
						    </li>
						    <li class="menu-item mega-menu">
						      <a class="menu-link" href="<?php echo site_url()?>/Blog">
						        <div>Blog</div>
						      </a>
						    </li>
						  </ul>
						</nav>
						<!-- #primary-menu end -->
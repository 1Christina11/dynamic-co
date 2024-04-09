	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url()?>assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
<!--
						<div class="user-details">
							<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
						</div>
-->
					</div>
<!--
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div><i class='fas fa-blog' style='font-size:36px'></i>

-->
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">About Us</span></a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo site_url('About_us/edit_about_us')?>">About Us</a></li>
								<li><a href="<?php echo site_url('About_us/clients')?>">Clients</a></li>
							</ul>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url()?>/Blog" class="nav-link "><span class="pcoded-micon"><i class="fas fa-blog"></i></span><span class="pcoded-mtext">Blogs</span></a>
						</li>
					
					<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url('Categories/get_categories_services')?>"><span class="pcoded-micon"><i class="fas fa-hands-helping"></i></span><span class="pcoded-mtext">Services Categories</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url()?>/Contact_us/edit_contact" class="nav-link "><span class="pcoded-micon"><i class="fas fa-phone"></i></span><span class="pcoded-mtext">Contact us</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fas fa-question"></i></span><span class="pcoded-mtext">FAQs</span></a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo site_url('Faqs/load_faqs')?>">FAQs</a></li>
								<li><a href="<?php echo site_url('Faqs/get_faqs_categories')?>">FAQs Categories</a></li>
							</ul>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url('Portfolio/get_portfolio')?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-portrait"></i></span><span class="pcoded-mtext">Portfolio</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url('Faqs/get_tags')?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-tags"></i></span><span class="pcoded-mtext">Tags</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url('Privacy_policy/edit_privacy')?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-scroll"></i></span><span class="pcoded-mtext">Privacy Policy</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url()."/Slider_nav/get_sliders/";?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-images"></i></span><span class="pcoded-mtext">Sliders</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url('Terms_conditions')?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-file-alt"></i></span><span class="pcoded-mtext">Terms of use</span></a>
						</li>
<!--
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url()?>/Contact_us/edit_contact" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Contact_us</span></a>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="<?php echo site_url()?>/Blog" class="nav-link "><span class="pcoded-micon"><i class='fas fa-blog' style='font-size:15px'></i></span><span class="pcoded-mtext">Blogs</span></a>
						</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
						<ul class="pcoded-submenu">

							<li><a href="<?php echo site_url()?>/Categories/get_categories_services">Categories</a></li>
							<li><a href="<?php echo site_url()?>/Services/">Services</a></li>

						</ul>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
						<a href="<?php echo site_url('Portfolio/get_portfolio')?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-portrait"></i></span><span class="pcoded-mtext">Portfolio</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="<?php echo site_url('About_us/edit_about_us')?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">About Us</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fas fa-question"></i></span><span class="pcoded-mtext">Faqs</span></a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo site_url('Faqs/load_faqs')?>">faqs</a></li>
							<li><a href="<?php echo site_url('Faqs/get_tags')?>">tags</a></li>
						</ul>
					</li>
-->
<!--
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!">Vertical</a>
								<ul class="pcoded-submenu">
									<li><a href="layout-static.html" target="_blank">Static</a></li>
									<li><a href="layout-fixed.html" target="_blank">Fixed</a></li>
									<li><a href="layout-menu-fixed.html" target="_blank">Navbar fixed</a></li>
									<li><a href="layout-mini-menu.html" target="_blank">Collapse menu</a></li>
									<li><a href="layout-rtl.html" target="_blank">Vertical RTL</a></li>
								</ul>
							</li>
							<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
							<li><a href="layout-horizontal-2.html" target="_blank">Horizontal v2</a></li>
							<li><a href="layout-horizontal-rtl.html" target="_blank">Horizontal RTL</a></li>
							<li><a href="layout-box.html" target="_blank">Box layout</a></li>
							<li><a href="layout-light.html" target="_blank">Navbar dark</a></li>
							<li><a href="layout-dark.html" target="_blank">Dark layout <span class="pcoded-badge badge badge-danger">Hot</span></a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge badge badge-success">100+</span></a>
						<ul class="pcoded-submenu">
							<li><a href="widget-statistic.html">Statistic</a></li>
							<li><a href="widget-data.html">Data</a></li>
							<li><a href="widget-chart.html">Chart</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
						<ul class="pcoded-submenu">
							<li><a href="user-profile.html">Profile</a></li>
							<li><a href="user-card.html">User Card</a></li>
							<li><a href="user-list.html">User List</a></li>
						</ul>
					</li>
-->
				</ul>
				
<!--
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Help?</h6>
						<p>Please contact us on our email for need any support</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support</a>
					</div>
				</div>
-->
				
			</div>
		</div>
	</nav>

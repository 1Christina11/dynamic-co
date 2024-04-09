		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>FAQs</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://dynamic-co.com/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">

							<div class="grid-filter-wrap">
								<ul class="grid-filter style-4 customjs">

									<li class="activeFilter"><a href="#" data-filter="all">All</a></li>
									<?php
										   $x=0;
										   foreach($faqs_categories as $row){
									?>
									<li><a href="#" data-filter=".faq-<?php echo $row->faqs_categories_id?>"><?php echo $row->category_name?></a></li>
									<?php $x++;}?>
								</ul>
							</div>

							<div class="clear"></div>

							<div id="faqs" class="faqs">
								<?php foreach($faqs_data as $row){?>
								<div class="toggle faq faq-<?php echo $row->faqs_categories_id?>">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-question-sign"></i>
											<i class="toggle-open icon-question-sign"></i>
										</div>
										<div class="toggle-title">
											<?php echo $row->question?>
										</div>
									</div>
									<div class="toggle-content"><?php echo $row->answer?></div>
								</div>
								<?php }?>
							</div>

						</div><!-- .postcontent end -->

					</div>

				</div>
			</div>
		</section><!-- #content end -->
 
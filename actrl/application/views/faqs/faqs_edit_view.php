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
							<li class="breadcrumb-item"><a href="<?php echo site_url('Faqs/load_faqs')?>">faqs</a></li>
							<li class="breadcrumb-item"><a href="#!">edit faq</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ accordion-collapse ] start -->
			<div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>edit faq</h5>
                    </div>
                    <div class="card-body btn-page">
						<form action="<?php echo site_url('Faqs/update_faq')?>" method="post" >
							<input value="<?php echo $faq_data->faq_id ?>" type="hidden" name="faq_id">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="floating-label" for="titel_blog">Question</label>
										<input class="form-control" id="title_blog" name="question" value="<?php echo $faq_data->question?>" ></input>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="floating-label" for="description_blog" >Answer</label>
										<textarea class="form-control"  name="answer"  id="description_blog" rows="5"><?php echo $faq_data->answer?></textarea>
										
									</div>
								</div>
								<div class="col-sm-12">
									<select name="tags_id" class="form-select" aria-label="Default select example">
									  <?php foreach($faqs_categories as $row){?>
									  <option value="<?php echo $row->faqs_categories_id ?>" <?php if($row->faqs_categories_id  == $faq_data->tags_id){echo 'selected';}?>><?php echo $row->category_name?></option>
									  <?php }?>
									</select>
								</div>
								<div class="col-sm-12 text-right">
									<button data-type="horizontal" type="submit" class="btn notifications btn-primary btn-round has-ripple" >Save</button>
								</div>
							</div>
						</form>						
					</div>
				 </div>
			</div>
			<!-- [ accordion-collapse ] end -->
		</div>
		<!-- [ Main Content ] end -->

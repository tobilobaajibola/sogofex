<!-- PAGE TITLE -->
			<section class="bg-light p-0">
				<div class="container py-2">

					<h1 class="h3">
						My Subscriptions
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="#!">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Account</a></li>
							<li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
						</ol>
					</nav>

				</div>
			</section>
			<!-- /PAGE TITLE -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-12 col-sm-12 col-md-12 col-lg-3 mb--60">

         					<?php $this->load->view('box/account_side_nav');?>
							

						</div>


						<div class="col-12 col-sm-12 col-md-12 col-lg-9">

							<div class="clearfix ">

								<!-- Order Period -->
								<select class="form-control b-0 bg-light bs-select w--250 w-100-xs float-start float-none-xs mb-2" 
										data-style="bg-light select-form-control" 
										title="Order Period" 
										data-header="Order Period"
										onchange="window.location=this.value">
									<option value="#">All (12)</option>
									<option value="?filter_order_period=1">Last 3 months</option>
									<option value="?filter_order_period=2">Last 6 months</option>
									<option value="?filter_order_period=2019">Year 2019</option>
								</select>


							</div>
							<!-- content loaded via ajax! -->
								<div class="clearfix p-3 shadow-xs shadow-md-hover mb-3 rounded bg-white scrollable-vertical scrollable-styled-dark">
									<?php 
									foreach ($list_subscription as $list_subscriptions) {
										?>
									<!-- item -->
									<div class="d-flex align-items-center p-3 border-bottom border-light">

										<div class="flex-none w--50">
											<img width="100" height="100" class="img-fluid lazy" data-src="<?php echo base_url();?>assets/images/product/<?php echo $list_subscriptions['product_image'];?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
										</div>

										<div class="flex-fill text-truncate px-3">
											<div class=" ">

								<h2 class="fs--18">
									<a href="#!" class="js-ajax-modal fs--14 float-end fs--12"
                          data-href="<?php echo base_url()?>subscription_detail/<?php echo $list_subscriptions['subscription_id'];?>" data-ajax-modal-size="modal-md" data-ajax-modal-centered="false" data-ajax-modal-backdrop="static" title="Sign in" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">
                            			Subscription details
									</a>
									<a href="#" class="text-dark">
										Subscription: <?php echo $list_subscriptions['product_name'];?>
									</a>
								</h2>

								<p class="mb-0 fs--14">
									Date: <?php echo $list_subscriptions['start_date'] .' - '.$list_subscriptions['end_date'];?> | Amount: 
								</p>

								<p class="mb-0 fs--14">
									Status:&nbsp;
									<span class="text-warning font-weight-normal"><?php echo $list_subscriptions['subscription_status'];?> / New</span>
								</p>

							</div>	</div>
										
										
                           
									</div>
									<!-- /item -->
									<?php
								}
								?>

								</div>

							<!-- pagination -->
							<nav aria-label="pagination" class="mt-5">
								<ul class="pagination pagination-pill justify-content-end justify-content-center justify-content-md-end">

									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
									</li>
									
									<li class="page-item active">
										<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
									</li>
									
									<li class="page-item" aria-current="page">
										<a class="page-link" href="#">2</a>
									</li>
									
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>

								</ul>
							</nav>
							<!-- pagination -->
									


						</div>

					</div>

				</div>
			</section>
			<!-- / -->




			<!-- CALL TO ACTION -->
			<section class="py-5 border-top mb--2">
				<div class="container">
					<div class="row text-center-xs">

						<div class="col-12 col-md-8">
							<h3 class="m-0">Grow your business your customers can't ignore!</h3>
							<p class="m-0">Our pofessionals are here for your business!</p>
						</div>
						
						<div class="col-12 mt-4 d-block d-md-none"><!-- mobile spacer --></div>

						<div class="col-12 col-md-4 text-align-end">
							<a href="contact-1.html" class="btn btn-light d-block-xs">Contact Us Now</a>
						</div>

					</div>
				</div>
			</section>
			<!-- /CALL TO ACTION -->


		

			<!-- PAGE TITLE -->
			<section class="bg-light p-0">
				<div class="container py-2">

					<h1 class="h3">
						My Orders
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="#!">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Account</a></li>
							<li class="breadcrumb-item active" aria-current="page">Orders</li>
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

							<!-- ORDER INFO -->
							<div class="p-4 shadow-xs border rounded mb-4">
								
								<div class="row">

									<div class="col-12 col-sm-6 col-md-6 col-lg-6">

										<h2 class="fs--18 mb-0">
											Order #<?php echo $order_detail['order_ref'];?>
										</h2>

										<p>
											<?php echo $order_detail['order_date'];?>, 11:38
										</p>

										<p class="mb-0">
											Status:

											<span class="text-warning">
												<?php echo $order_detail['order_status'];?>
											</span>
										</p>

									</div>


									<div class="col-12 col-sm-6 col-md-6 col-lg-6">

										<div class="mt-3 float-end">
												<span class="d-block text-dark">Payment Method:</span> 

												<a class="text-decoration-none" href="#order_payment_info" data-toggle="collapse">
													<span class="group-icon fs--14">
														<i class="fi fi-arrow-down"></i> 
														<i class="fi fi-close"></i> 
													</span>
												
													<span class="d-inline-block pl-2 pr-2">
														<?php echo $order_detail['channel'];?>
													</span>
												</a>
												
												<!-- data from checkout -->
												<p class="bg-light p-2 rounded mt-2 collapse" id="order_payment_info">
													<span class="d-block text-muted">Payment Info:</span> 
													<b>Bank Name</b>: <?php echo $order_detail['bank'];?><br>
													Card Type: <?php echo $order_detail['card_type'];?><br>
													<!-- Account Name: John Smith<br>
													Account Number: XXXXXXXXXXXX -->
												</p>
											</div>


									</div>

								</div>

							</div>
							<!-- /ORDER INFO -->



						


							<!-- ITEMS -->
							<div class="p-4 shadow-xs rounded mb-4">
							<?php foreach ($list_product_order as $list_product_orders) {
											?>

								<!-- item -->
								<div class="row">

									<div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
										
										<a class="d-block clearfix" href="#!">
											<img class="img-fluid" src="<?php echo base_url();?>assets/images/product/<?php echo $list_product_orders['product_image'];?>" alt="...">
										</a>

									</div>

									<div class="col">
									
										
										<div class="row">
											<div class="col">

												<a class="d-block clearfix" href="#!">
													<?php echo $list_product_orders['product_name'];?>
												</a>

												<span class="d-block text-muted fs--13"><?php echo $list_product_orders['product_order_number'];?></span>

												<span class="font-weight-medium d-block mt--15">
													<i class="fi fi-shield-ok text-muted"></i> &nbsp; 
													Duration: <?php echo $list_product_orders['order_date'] .' - '. date('Y-m-d', strtotime($list_product_orders['order_date'] . "+3 months") );?>
												</span>
											</div>

											<div class="col-12 col-md-4 text-align-end text-start-xs">
												<span class="text-success fs--12 mt--3 d-block text-uppercase">
													 <?php echo $list_product_orders['duration_month'];?> Month(s)
												</span>

												<?php echo $list_product_orders['amount'];?>

												<!-- <del class="text-muted d-block fs--14">
													$992.5
												</del> -->
											</div>

										</div>
										
									</div>
								</div>
								<!-- /item -->
								

								<hr>
								<?php
									}
									?>


								<hr>


								<div class="row">
									<div class="offset-sm-6 offset-md-6 offset-lg-7 col-12 col-sm-6 col-md-6 col-lg-5">

										<div class="clearfix mb--15">
											Subtotal:
											<span class="float-end text-align-end">
												N<?php echo $order_detail['total_amount'];?>
												<!-- <span class="d-block text-muted fs--12">
													VAT: 19% (included)
												</span> -->
											</span>
										</div>


										<div class="clearfix">
											Tax:
											<span class="float-end text-align-end">
												N<?php echo $order_detail['tax'];?>
											</span>
										</div>

										<hr>

										<div class="clearfix">
											<h5 class="float-start">
												Total:
											</h5>
											<h5 class="float-end">
												N<?php echo $order_detail['tax'] + $order_detail['total_amount'];?>
											</h5>
										</div>

									</div>
								</div>


								<hr>



							</div>
							<!-- /ITEMS -->



							<!-- ORDER OPTIONS --><!-- desktop only -->
							<!-- <div class="my-5 d-none d-sm-block">

								<div class="clearfix text-align-center-xs">

									<h6>
										Order Options
									</h6>

									<a class="btn btn-sm btn-light" href="#!">
										<i class="fi fi-print m-0"></i> 
									</a>

									<a class="btn btn-sm btn-light" href="#!">
										<span class="fs--13 m-0">PDF : INVOICE</span> 
									</a>

								</div>

							</div> -->
							<!-- /ORDER OPTIONS -->


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




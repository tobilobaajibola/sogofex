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

							<div class="clearfix mb-5">

								<!-- Order Period -->
								<!-- <select class="form-control b-0 bg-light bs-select w--250 w-100-xs float-start float-none-xs mb-2" 
										data-style="bg-light select-form-control" 
										title="Order Period" 
										data-header="Order Period"
										onchange="window.location=this.value">
									<option value="#">All (12)</option>
									<option value="?filter_order_period=1">Last 3 months</option>
									<option value="?filter_order_period=2">Last 6 months</option>
									<option value="?filter_order_period=2019">Year 2019</option>
								</select> -->

								<!-- Order Status -->
								<select class="form-control b-0 bg-light bs-select w--250 w-100-xs float-start float-none-xs mb-2" 
										data-style="bg-light select-form-control" 
										title="Order Status" 
										data-header="Order Status"
										onchange="window.location=this.value">
									<option value="#">Any</option>
									<option value="?filter_order_status=completed">Completed</option>
									<option value="?filter_order_status=canceled">Canceled</option>
									<option value="?filter_order_status=processing">Processing</option>
								</select>

							</div>
							<?php
							foreach ($list_order as $list_orders) {
							?>
							<!-- order -->
							<div class="clearfix p-3 shadow-xs shadow-md-hover mb-3 rounded bg-white">

								<h2 class="fs--18">
									<a href="<?php echo base_url().'order/'.$list_orders['transaction_id'];?>" class="float-end fs--12">
										ORDER DETAIL
									</a>
									<a href="<?php echo base_url().'order/'.$list_orders['transaction_id'];?>" class="text-dark">
										Order #<?php echo $list_orders['order_ref'];?> 
									</a>
								</h2>

								<p class="mb-0 fs--14">
									Date: <?php echo $list_orders['order_date'];?> | Total: N<?php echo $list_orders['total_amount'];?> 
								</p>

								<p class="mb-0 fs--14">
									Status:&nbsp;
									<span class="text-warning font-weight-normal"><?php echo $list_orders['order_status'];?> </span>
								</p>

							</div>
							<!-- /order -->
							<?php
						}

		
						?>
			
							<!-- pagination -->
							<nav aria-label="pagination" class="mt-5">
								<ul class="pagination pagination-pill justify-content-end justify-content-center justify-content-md-end">
									<?php echo $this->pagination->create_links();?>
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

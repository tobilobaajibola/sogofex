<!-- CHECKOUT -->
			<section>
				<div class="container">


					<div class="text-center mb-5">
						<?php
						if ($order_transaction_details['transaction_status']== "success"){
							?>
						<h1>
							Thank you for the order
						</h1>
						<p>
							Our team will process your order as soon as possible!
						</p>

						<div class="mt--80">
							<img class="img-fluid max-w-350" src="<?php echo base_url();?>demo.files/svg/ecommerce/undraw_confirmation_2uy0.svg" alt="...">
						</div>
						<p><a href="<?php echo base_url();?>order/<?php echo $transaction_id;?>">Clik here for order details</a></p>
						<?php
					}
					else{
						?>
						<h1>
						Your Order was not successful
						</h1>
						<p>
							Please try again!
						</p>

						<div class="mt--80">
							<img class="img-fluid max-w-350" src="<?php echo base_url();?>demo.files/svg/ecommerce/undraw_confirmation_2uy0.svg" alt="...">
						</div>
						<?php
					}
					?>
					</div>


				</div>
			</section>
			<!-- /CHECKOUT -->





			<!-- INFO BOX -->
			<section class="p-0 bg-primary-soft">
				<div class="container py-3">

					<div class="row">

						<div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs" data-aos="fade-in" data-aos-delay="150">

							<div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
								<img width="60" height="60" src="demo.files/svg/ecommerce/money_bag.svg" alt="...">
							</div>

							<div class="my-2">
								
								<h2 class="font-weight-medium fs--20 mb-0">
									Money Back
								</h2>

								<p class="m-0">
									30-days money back
								</p>

							</div>

						</div>

						<div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bt-0 br-0 bb-0 b--0-lg" data-aos="fade-in" data-aos-delay="250">

							<div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
								<img width="60" height="60" src="demo.files/svg/ecommerce/free-delivery-truck.svg" alt="...">
							</div>

							<div class="my-2">
								
								<h2 class="font-weight-medium fs--20 mb-0">
									Free Shipping
								</h2>

								<p class="m-0">
									Shipping is on us
								</p>

							</div>

						</div>

						<div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bl-0 br-0 bb-0 b--0-lg" data-aos="fade-in" data-aos-delay="350">

							<div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
								<img width="60" height="60" src="demo.files/svg/ecommerce/24-hours-phone-service.svg" alt="...">
							</div>

							<div class="my-2">
								
								<h2 class="font-weight-medium fs--20 mb-0">
									Free Support
								</h2>

								<p class="m-0">
									24/24 available
								</p>

							</div>

						</div>

						<div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bb-0 br-0 b--0-lg" data-aos="fade-in" data-aos-delay="450">

							<div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
								<img width="60" height="60" src="demo.files/svg/ecommerce/handshake.svg" alt="...">
							</div>

							<div class="my-2">
								
								<h2 class="font-weight-medium fs--20 mb-0">
									Best Deal
								</h2>

								<p class="m-0">
									Quality guaranteed
								</p>

							</div>


						</div>

					</div>

				</div>
			</section>
			<!-- /INFO BOX -->




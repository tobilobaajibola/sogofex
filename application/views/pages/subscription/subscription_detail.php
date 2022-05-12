		<!-- modal header not used -->

		<button type="button" class="close cursor-pointer z-index-10 w--30 h--30 position-absolute top-0 end-0 my-2 mx-3" data-dismiss="modal" aria-label="Close">
			<span class="fi fi-close fs--25 position-absolute end-0 top-0" aria-hidden="true"></span>
		</button>


		<div class="modal-body p-0 m-5 m-4-xs">

			<div class="accordion" id="accordionAccount">

<div id="alert_success" class="alert alert-success mb-30" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	</div><!-- /Alert Success -->
	<!-- Alert Failed -->
	<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		
	</div> 

				<div class="collapse bs-validate show" novalidate novalidate id="subscription_detail"  data-parent="#accordionAccount">

<h3 class="h5 clearfix mb-3 mt-3">

<span class="float-start mt-2">
	<span class="text-primary">Product</span> Name
</span>

</h3>
<div class="row">

	<div class="col">

		<p class="mb-0"><b>Order ID</b> </p>
		<p class="mb-0">Subscription date</p>
		<p class="mb-0"><b>Subscription Start :</b> <?php echo $subscription_detail['start_date'];?></p>
		<p class="mb-0"><b>Subscription ends :</b> <?php echo $subscription_detail['end_date'];?></p>
		<p class="mb-0">Beneficiary</p>
		<p class="mb-0">Subscription Status</p>
		<p class="mb-0">Amount</p>

		<p class="mb-0 mt-3">
			<a href="#addtocart" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="addtocart" class="btn btn-sm btn-light active">
				<i class="fi fi-check"></i> 
				Renew NoW
			</a>
		</p>

	</div>
</div>
</div>

				<!-- SIGN IN -->
				<form class="collapse bs-validate hide_after_submit" novalidate  onsubmit="form_submitter('#addtocart', '<?php echo base_url();?>carts/addtocart' );return false" id="addtocart" data-parent="#accordionAccount">
					<div class=" pt--0">

						<input type="hidden" name="product_id" value="<?php echo $subscription_detail['product_id'];?>">
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email" type="text" name="beneficiary_name" value="" class="form-control form-control">
							<label for="signin_email">Benefciaiary Name</label>
						</div>
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email" type="email" name="beneficiary_email" value="" class="form-control form-control">
							<label for="signin_email">Beneficiary Email</label>
						</div>
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email"  type="text" name="beneficiary_relationship" value="" class="form-control form-control">
							<label for="signin_email">Relationship</label>
						</div>
					
					<div class="form-label-group mb-3">
						<!-- bootstrap select vendor plugin used -->
						<select required class="form-control bs-select pt-0 pb-0" data-live-search="true" name="duration">
							<option value="">Select Month</option>
							<option value="1">1 Month</option>
							<option value="2">2 Month</option>
							<option value="3">3 Month</option>
							<option value="4">4 Month</option>
							<option value="5">5 Month</option>
							<option value="6">6 Month</option>
							<option value="7">7 Month</option>
							<option value="8">8 Month</option>
							<option value="9">9 Month</option>
							<option value="10">10 Month</option>
							<option value="11">11 Month</option>
							<option value="12">12 Month</option>
						</select>
						<label for="signup_email">Duration</label>
					</div>


					<!-- GDPR CONSENT -->
					<div class="clearfix bg-light position-relative rounded p-4 mb-4">

						<span class="text-muted fs--12 d-block position-absolute bottom-0 end-0 m-2">
							EU GDPR
						</span>

						<label class="form-checkbox form-checkbox-primary m-0">
							<input required type="checkbox" name="checkbox">
							<i></i> 
							<span class="fs--15"> 	
								I consent that my data is being stored in 
								line with the guidelines set out in  
								<a href="<?php echo base_url();?>terms" target="_blank">Privacy Policy</a>. 
							</span>
						</label>

					</div>
					<!-- /GDPR CONSENT -->
						<button type="submit" class="btn btn-danger btn-soft btn-block">
							Add to Cart
						</button>
					<div class="text-center mt-5">
						<a href="#subscription_detail" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
							Back to Subscription details
						</a>
					</div>

					</div>
				</form>
				<!-- /SIGN IN -->

			


			</div>

		</div>

		<div class="border-top text-muted fs--13 bg-light rounded-bottom p-3">
			<b>Privacy:</b> All transactions are safely processed.
		</div>

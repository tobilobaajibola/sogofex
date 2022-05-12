<!-- AJAX CONTENT -->
<div class="modal-header">
	<h2 class="modal-title fs--18 m-0">
		<?php echo $product_detail['product_name'];?>
	</h2>

	<button type="button" class="close pointer" data-dismiss="modal" aria-label="Close">
		<span class="fi fi-close fs--18" aria-hidden="true"></span>
	</button>
</div>

<div class="modal-body p--30">

	<div class="row">
		
		<div class="col-12 col-md-12 col-lg-4">
			<div class="pb--30 pt--30">
				<img class="img-fluid" src="<?php echo base_url();?>assets/images/product/<?php echo $product_detail['product_image'];?>" alt="...">
			</div>
			<a href="<?php echo base_url();?>assets/attachments/<?php echo $product_detail['brochure_url'];?>" class="btn btn-sm btn-secondary" target="_blank">
					<i class="fi fi-arrow-download m-0-md"></i>
					<span class="d-none d-lg-inline-block">Download Brochure</span>
			</a>
		</div>

		<div class="col-12 col-md-12 col-lg-4">

			<div class="accordion" id="accordionDropdownSignInUp">

				<div id="alert_success" class="alert alert-success mb-30" style="display: none;">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

				</div><!-- /Alert Success -->
				<!-- Alert Failed -->
				<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					
				</div> 
				<!-- SIGN IN -->
				<form class="collapse bs-validate show" novalidate  onsubmit="form_submitter('#addtocart', '<?php echo base_url();?>carts/addtocart' );return false" id="addtocart" data-parent="#accordionDropdownSignInUp">
					<div class="p--30 pt--0">
						<input type="hidden" name="product_id" value="<?php echo $product_detail['product_id'];?>">
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email" type="text" name="beneficiary_name" value="" class="form-control form-control-clean">
							<label for="signin_email">Benefciaiary Name</label>
						</div>
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email" type="email" name="beneficiary_email" value="" class="form-control form-control-clean">
							<label for="signin_email">Beneficiary Email</label>
						</div>
						<div class="form-label-group mb-4">
							<input required placeholder="Email" id="signin_email"  type="text" name="beneficiary_relationship" value="" class="form-control form-control-clean">
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
						<button type="submit" class="btn btn-danger btn-soft btn-block">
							Add to Cart
						</button>

					</div>
				</form>
				<!-- /SIGN IN -->


			</div>

		</div>

		<div class="col-12 col-md-12 col-lg-4">

			<div class="p--30 pt--0">

				<h4 class="h4 text-muted mb-4">
					Why choose <?php echo $product_detail['product_name'];?>?
				</h4>

				<p>
					<?php echo $product_detail['product_name'];?> <?php echo $product_detail['product_description'];?>.
				</p>
				<?php 
				foreach ($product_feature as $product_features) {
					?>
				<div class="d-flex mb-3">

					<div class="badge badge-success badge-soft badge-ico-sm rounded-circle float-start">
						<i class="fi fi-check"></i>
					</div>

					<p class="text-dark font-weight-light mb-0 pl--12 pr--12">
						<?php echo $product_features['features'];?>
					</p>

				</div>
				<?php
			}
			?>
			</div>

		</div>

	</div>

</div>

<div class="border-top text-muted p--15 fs--13 bg-light rounded-bottom pl--30 pr--30 pt--20 pb--20">
	<b>Privacy:</b> All data is secure, never transfered to a third party provider/service.
</div>
							

			<!-- PAGE TITLE -->
			<section class="bg-light p-0">
				<div class="container py-3">

					<h1 class="h3">
						Update Beneficiary
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
						</ol>
					</nav>

				</div>
			</section>
			<!-- /PAGE TITLE -->


			<!-- FORM -->
			<section>
				<div class="container">


					<div class="row">

						<div class="col-12 col-sm-8 col-md-8 col-lg-6 offset-sm-2 offset-md-2 offset-lg-3">

								<div id="alert_success" ></div>
						
							<!-- optional class: .form-control-pill -->
							<form 	class="bs-validate p-0 rounded shadow-xs hide_after_submit" novalidate 
									data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Please, complete all required fields!" 
									data-error-toast-delay="3000" 
									data-error-toast-position="top-right" id="update_beneficiary"  onsubmit="form_submitter('#update_beneficiary', '<?php echo base_url();?>Beneficiaries/update_beneficiaries' );return false"   >


								<!--
								<p class="text-danger">
									Ups! Please check again
								</p>
								-->
								<input type="hidden" name="beneficiary_link_code" value="<?php echo $beneficiary_details['beneficiary_link_code'];?>">
								<div class="form-label-group mb-3">
									<input required placeholder="Email" id="account_email" name="beneficiary_email" value="<?php echo $beneficiary_details['email'];?>" type="email" class="form-control"  readonly>
									<label for="beneficiary_email">Email</label>
								</div>
								<div class="form-label-group mb-3">
									<input required placeholder="First Name" id="account_beneficiary_name" name="beneficiary_name" value="<?php echo $beneficiary_details['beneficiary_name'];?>" type="text" class="form-control" readonly>
									<label for="beneficiary_name">Beneficiary Name</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="First Name" id="account_first_name" name="beneficiary_first_name" value="<?php echo $beneficiary_details['first_name'];?>" type="text" class="form-control" >
									<label for="beneficiary_first_name">First Name</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="Last Name" id="account_last_name" name="beneficiary_last_name" value="<?php echo $beneficiary_details['last_name'];?>" type="text" class="form-control" >
									<label for="beneficiary_last_name">Last Name</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="Last Name" id="account_last_name" name="phone" value="<?php echo $beneficiary_details['phone'];?>" type="number" class="form-control" >
									<label for="beneficiary_last_name">Phone</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="Last Name" id="account_last_name" name="date_of_birth" value="<?php echo $beneficiary_details['date_of_birth'];?>" type="date" class="form-control" placeholder="">
									<label for="beneficiary_last_name">Date Of Birth</label>
								</div>

								<div class="form-label-group mb-3">
									<textarea placeholder="Textarea" id="description" name="address" class="form-control" rows="3"><?php echo $beneficiary_details['address'];?></textarea>
									<label for="description">Address</label>
								</div>

								<div class="form-label-group mb-3">
									<!-- bootstrap select vendor plugin used -->
									<select required class="form-control bs-select pt-0 pb-0" data-live-search="true"  name="primary_provider">
										<option value=""><?php echo $beneficiary_details['primary_provider'];?></option>
										<?php
										foreach ($list_provider as $list_providers) {
											?>
											<option value="<?php echo $list_providers['provider_name']; ?>"><?php echo $list_providers['provider_name']; ?></option>
										<?php
										}
										?>
									</select>
									<label for="account_email">provider</label>
								</div>




<!-- STATIC -->
<!-- <div class="mb-1">

	<label class="btn btn-primary cursor-pointer position-relative">

			<input	 name="file" 
					multiple=""
					type="file" 

					data-file-ext="mp3, jpg, png, gif" 
					data-file-max-size-kb-per-file="0"
					data-file-max-size-kb-total="0" 
					data-file-max-total-files="100"
					data-file-ext-err-msg="Allowed:" 
					data-file-exist-err-msg="File already exists:"
					data-file-size-err-item-msg="File too large!"
					data-file-size-err-total-msg="Total allowed size exceeded!"
					data-file-size-err-max-msg="Maximum allowed files:"
					data-file-toast-position="bottom-center"
					data-file-preview-container=".js-file-input-container-multiple-example" 
					data-file-preview-img-height="120" 
					data-file-preview-show-info="false" 
					data-file-preview-class="shadow-md m-2 rounded float-start" 
					data-file-btn-clear="a.js-file-input-btn-multiple-example-remove"
					data-file-preview-img-cover="false" 

					class="custom-file-input absolute-full">

		Select Files

	</label>


	<a href="#" title="Clear Files" data-toggle="tooltip" class="js-file-input-btn-multiple-example-remove hide btn btn-secondary mb-2">
		<i class="fi fi-close"></i>
		Clear files
	</a>

</div> -->


<!--
		
	Container : files are pushed here!
	.hide-empty = container hidden if empty

-->
<!-- <div class="js-file-input-container-multiple-example d-inline-block position-relative clearfix hide-empty">-->
	<!-- container -->
<!-- </div> -->









<!--
		
	Ajax container : files are pushed here!
	.hide-empty = container hidden if empty

-->
<div class="js-file-input-container-multiple-example-ajax d-inline-block position-relative clearfix hide-empty"><!-- container --></div>

								

								<div class="mb-1">

<!-- 	<label class="btn btn-warning cursor-pointer position-relative">

			<input	enctype="multipart/form-data" name="fileimage" 
					multiple="false"
					type="file" 

					data-file-ext=""
					data-file-max-size-kb-per-file=""
					data-file-max-size-kb-total="0" 
					data-file-max-total-files="1"
					data-file-ext-err-msg="Allowed:" 
					data-file-exist-err-msg="File already exists:"
					data-file-size-err-item-msg="File too large!"
					data-file-size-err-total-msg="Total allowed size exceeded!"
					data-file-size-err-max-msg="Maximum allowed files:"
					data-file-toast-position="bottom-center"
					data-file-preview-container=".js-file-input-container-multiple-ajax-dynamic-progress" 
					data-file-preview-img-height="120" 
					data-file-preview-show-info="true" 
					data-file-preview-class="show-hover-container shadow-md m-2 rounded float-start" 
					data-file-preview-img-cover="false" 

					data-file-ajax-upload-enable="true"
					data-file-ajax-upload-url="<?php echo base_url()?>beneficiaries/upload_beneficiary_image"
					data-file-ajax-upload-params="['action','upload']['file','value2']"

					data-file-ajax-delete-enable="true"
					data-file-ajax-delete-url="<?php echo base_url()?>beneficiaries/upload_beneficiary_image"
					data-file-ajax-delete-params="['action','delete_file']"

					data-file-ajax-reorder-enable="true"
					data-file-ajax-reorder-url="<?php echo base_url()?>beneficiaries/upload_beneficiary_image"
					data-file-ajax-reorder-params="['action','reorder']"
				data-file-ajax-reorder-toast-success="Order Saved!" 
				data-file-ajax-reorder-toast-position="bottom-center" 

					data-file-ajax-toast-success-txt="Successfully Uploaded!"
					data-file-ajax-toast-error-txt="One or more files not uploaded!"
					data-file-ajax-callback-function=""
					data-file-ajax-progressbar-custom=""
					data-file-ajax-progressbar-disable="false"

					class="custom-file-input absolute-full">

		<span class="group-icon">
			<i class="fi fi-arrow-upload"></i>
			<i class="fi fi-circle-spin fi-spin"></i>
		</span> 

		<span>Ajax Uploader : Dynamic Progressbar</span>

	</label>
 -->


	<!--

		Ajax container : files are pushed here!

	-->
	<div class="mt-3 js-file-input-container-multiple-ajax-dynamic-progress position-relative clearfix hide-empty">


		<!-- 

			PREADDED FILES 

			In order to be able to delete preadded files using Form Advanced Plugin,
			one of the following params is required to each .js-file-input-item:

				data-id="0"							 your database file id
				data-file-name="filename.jpg"			 optional; required if data-id not set (or set to "0")
			
			When a file is deleted, a POST request is sent:
				Following params are sent (array):

					action		 => 'delete_file',				 // see: data-file-ajax-delete-params="['action','delete_file']" (action => "delete_file" is anyway added by default)
					file_name	 => 'filename.jpg',
					file_id	 => 1,
					ajax		 => true

				So in your backend you should be able to delete the files by 
					- file_id (your database file id)
					- file_name

			Delete POST request is sent to data-file-ajax-delete-url="../demo.files/php/demo.ajax_file_upload.php"
				If `data-file-ajax-delete-url` is empty or not set, `data-file-ajax-upload-url` is used.
				So you are able to set different URLs for each action.

				**	 No response is waited from the server! Callback not supported on delete!
					404 status is considered "failed" so the message will be "404 Server Error!"

		-->
	<!-- 	<h6 class="m-0">
			Preadded Files <span class="font-weight-light">(drag to reorder)</span>
		</h6> -->



	

	</div>
	

</div>

								<div class="row">

									<div class="col-12 col-md-6 mt-4">
										<button type="submit" class="btn btn-primary btn-block">
											Update My Profile
										</button>
									</div>

									<div class="col-12 col-md-6 mt-4 text-align-end text-center-xs">
										<!-- empty -->
									</div>

								</div>

							</form>

						</div>

					</div>


				</div>
			</section>
			<!-- /FORM -->



			<!-- CONNECT WITH -->
			<section class="py-5 border-top">
				<div class="container">
					<div class="row text-center-xs">

						<div class="col">
							<h3 class="m-0 font-weight-light">Connect With us:</h3>
							<p class="m-0">On our social media platforms!</p>
						</div>
						
						<div class="col-12 mt-4 d-block d-md-none"><!-- mobile spacer --></div>

						<div class="col-12 col-md-6 col-lg-4 text-align-end">

							<div class="row">

								<div class="col-6">
									<a href="#" class="btn btn-sm btn-block btn-facebook transition-hover-top mt-1" rel="noopener">
										<i class="fi fi-social-facebook"></i>
										facebook
									</a>
								</div>

								<div class="col-6">
									<a href="#" class="btn btn-sm btn-block bg-googleplay transition-hover-top mt-1 text-white" rel="noopener">
										<i>G</i>
										google
									</a>
								</div>

							</div>

						</div>

					</div>
				</div>
			</section>
			<!-- /CONNECT WITH -->

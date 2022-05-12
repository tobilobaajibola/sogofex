			<!-- PAGE TITLE -->
			<section class="bg-light p-0">
				<div class="container py-5">

					<h1 class="h3">
						Account Settings
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="#!">Home</a></li>
							<li class="breadcrumb-item"><a href="#!">Account</a></li>
							<li class="breadcrumb-item active" aria-current="page">Settings</li>
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

							<!--
								
								Tab Navigation
								Last tab remembered using localstorage by sow.nav_deep.js plugin

							-->
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link nav-link-remember active" data-toggle="tab" href="#tab_account">Account</a>
								</li>

								<!-- <li class="nav-item">
									<a class="nav-link nav-link-remember" data-toggle="tab" href="#tab_address">Addresses</a>
								</li> -->
							</ul>



							<div class="tab-content">

								<!-- ACCOUNT TAB -->
								<div id="tab_account" class="tab-pane active">

									<!-- <form method="post" action="#" novalidate class="bs-validate" enctype="multipart/form-data">
 -->
 									<div id="alert_success" class="alert alert-success mb-30  mt-4" style="display: none;">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
											<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30 mt-4" style="display: none;" >
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div>
									<form id="edit_profile"  onsubmit="form_submitter('#edit_profile', '<?php echo base_url();?>accounts/edit_profile' );return false" >

										<!-- PERSONAL DETAIL -->
										<div class="p-4 shadow-xs border bt-0 mb-4 bg-white">

											<div class="row">

												<!-- avatar -->
												<div class="col-12 col-md-3 text-center">

													<!-- 
														Based on `SOW : File Upload` 
														
														For ajax:
														documentation/plugins-sow-file-upload.html 
													-->
													<label class="w--120 h--120 rounded-circle text-center position-relative d-inline-block cursor-pointer border border-secondary border-dashed bg-white">

														<!-- 
															remove button 
														-->
														<a href="#?action=remove_avatar" class="js-file-upload-avatar-ajax-circle-remove-preadded position-absolute bottom-0 mb--n15 w-100 z-index-3">
															<span class="d-inline-block btn btn-sm btn-pill bg-secondary text-white pt--4 pb--4 pl--10 pr--10" data-tooltip="tooltip" data-original-title="remove avatar">
																<i class="fi fi-close m-0"></i>
															</span>
														</a>


														<!-- 
															preadded image 
														-->
														<span class="z-index-2 js-file-input-avatar-ajax-circle-container-preadded d-block absolute-full z-index-1">
															<span 	style="background-image:url('demo.files/images/unsplash/team/thumb_330/michael-dam-mEZ3PoFGs_k-unsplash.jpg')" 
																	class="js-file-input-item d-inline-block position-relative overflow-hidden text-center rounded-circle m-0 p-0 animate-bouncein bg-cover w-100 h-100">
															</span>
														</span>


														<!-- 
															upload field 
														-->
													    <input 	name="account_avatar" 
													    		type="file" 

													    		data-file-ext="jpg, png" 
													    		data-file-max-size-kb-per-file="5000"
													    		data-file-ext-err-msg="Allowed:" 
													    		data-file-size-err-item-msg="File too large!"
													    		data-file-size-err-total-msg="Total allowed size exceeded!"
													    		data-file-toast-position="bottom-center"
													    		data-file-preview-container=".js-file-input-avatar-ajax-circle-container-preadded" 
													    		data-file-preview-show-info="false" 
													    		data-file-preview-class="rounded-circle m-0 p-0 animate-bouncein" 
													    		data-file-preview-img-height="118" 
													    		data-file-btn-clear="a.js-file-upload-avatar-ajax-circle-remove-preadded"
													    		data-file-preview-img-cover="true"
													    		class="custom-file-input absolute-full">

													    <!-- avatar : : always under image -->
														<svg class="fill-gray-600 rounded-circle z-index-0 m-4" viewBox="0 0 60 60">
															<path d="M41.014,45.389l-9.553-4.776C30.56,40.162,30,39.256,30,38.248v-3.381c0.229-0.28,0.47-0.599,0.719-0.951c1.239-1.75,2.232-3.698,2.954-5.799C35.084,27.47,36,26.075,36,24.5v-4c0-0.963-0.36-1.896-1-2.625v-5.319c0.056-0.55,0.276-3.824-2.092-6.525C30.854,3.688,27.521,2.5,23,2.5s-7.854,1.188-9.908,3.53c-2.368,2.701-2.148,5.976-2.092,6.525v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C1.801,46.924,0,49.958,0,53.262V57.5h46v-4.043C46,50.018,44.089,46.927,41.014,45.389z"/>
															<path d="M55.467,46.526l-9.723-4.21c-0.23-0.115-0.485-0.396-0.704-0.771l6.525-0.005c0,0,0.377,0.037,0.962,0.037c1.073,0,2.638-0.122,4-0.707c0.817-0.352,1.425-1.047,1.669-1.907c0.246-0.868,0.09-1.787-0.426-2.523c-1.865-2.654-6.218-9.589-6.354-16.623c-0.003-0.121-0.397-12.083-12.21-12.18c-1.187,0.01-2.309,0.156-3.372,0.413c0.792,2.094,0.719,3.968,0.665,4.576v4.733c0.648,0.922,1,2.017,1,3.141v4c0,1.907-1.004,3.672-2.607,4.662c-0.748,2.022-1.738,3.911-2.949,5.621c-0.15,0.213-0.298,0.414-0.443,0.604v2.86c0,0.442,0.236,0.825,0.631,1.022l9.553,4.776c3.587,1.794,5.815,5.399,5.815,9.41V57.5H60v-3.697C60,50.711,58.282,47.933,55.467,46.526z"/>
														</svg>

													</label>

												</div>
												<!-- /avatar -->


												<!-- detail -->
												<div class="col">

													<div class="row">

														<div class="col-12 col-sm-6 col-md-6">

															<div class="form-label-group mb-3">
																<input required placeholder="First Name" id="first_name" name="first_name" value="<?php echo $_SESSION['user_account']['first_name'];?>" type="text" class="form-control">
																<label for="first_name">First Name</label>
															</div>

														</div>

														<div class="col-12 col-sm-6 col-md-6">

															<div class="form-label-group mb-3">
																<input required placeholder="Last Name" id="last_name" name="last_name" value="<?php echo $_SESSION['user_account']['last_name'];?>" type="text" class="form-control">
																<label for="last_name">Last Name</label>
															</div>

														</div>



														<div class="col-12 col-sm-6 col-md-6">


															<div class="input-group-over">
																<div class="form-label-group mb-3">
																	<input readonly placeholder="Email Address" id="account_email" name="email" type="email" class="form-control" value="<?php echo $_SESSION['user_account']['email'];?>">
																	<label for="account_email">Email Address</label>
																</div>

																<a id="email_edit_show" href="javascript:;" class="btn fs--13" onclick="jQuery('#account_email').attr('readonly', false); jQuery('#email_edit_show, #email_edit_info').addClass('hide'); jQuery('#email_edit_hide, #email_edit_info').removeClass('hide');jQuery('#account_email').val('').focus();">
																	<i class="fi fi-pencil m-0"></i>
																</a>

																<a id="email_edit_hide" href="javascript:;" class="btn fs--12 hide" onclick="jQuery('#account_email').attr('readonly', true); jQuery('#email_edit_show, #email_edit_info').removeClass('hide'); jQuery('#email_edit_hide, #email_edit_info').addClass('hide'); jQuery('#account_email').val('<?php echo $_SESSION['user_account']['email'];?>');">
																	<i class="fi fi-close m-0"></i>
																</a>

															</div>

															<div id="email_edit_info" class="mt-1 mb-4 fs--13 text-muted hide">
																A confirmation link will be sent to current email address
															</div>
															<!-- /EMAIL ADDRESS -->

														</div>


														<div class="col-12 col-sm-6 col-md-6">

															<div class="form-label-group mb-3">
																<input required placeholder="Phone Number" id="account_phone" name="phone" value="<?php echo $_SESSION['user_account']['phone'];?>" type="text" class="form-control">
																<label for="account_phone">Phone Number</label>
															</div>

														</div>

													</div>



												</div>
												<!-- detail -->
											
											</div>

											<!-- subscribe -->
											<!-- <div class="border-top pt-4 mt-4">
												<label class="form-checkbox form-checkbox-primary mb-0">
													<input type="checkbox" name="user_newsletter_accept" value="1">
													<i></i> Keep me up to date on news and exclusive offers
												</label>
											</div> -->
											<div class="border-top pt-4 mt-4">

											<button type="submit" class="btn btn-primary">
												<i class="fi fi-check"></i>
												SAVE CHANGES
											</button>

										</div>
										</div>
										<!-- /PERSONAL DETAIL -->


										

									</form>


										<!-- PASSWORD -->
										<div class="p-4 shadow-xs rounded mb-4 bg-white">

											<a href="#user_edit_password" class="btn-toggle btn fs--14 btn-light collapsed" data-toggle="collapse" aria-expanded="false" onclick="jQuery('#user_password_current, #user_password_new').val('');">
												<span class="group-icon float-start">
													<i class="fi fi-arrow-down"></i>
													<i class="fi fi-close"></i>
												</span> &nbsp; 

												CHANGE PASSWORD
											</a>
											<div id="alert_success" class="alert alert-success mb-30  mt-4" style="display: none;">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											</div><!-- /Alert Success -->
											<!-- Alert Failed -->
											<div id="alert_fail" class="alert alert-danger mb-30 mt-4" style="display: none;" >
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											</div>
											<!-- <form id="change_password" action="<?php //echo base_url();?>accounts/change_passwords" method="post" > -->

												<form id="change_password"  onsubmit="form_submitter('#change_password', '<?php echo base_url();?>accounts/change_passwords' );return false" >
											<div id="user_edit_password" class="collapse" style="">

												<div class="row mt-3">

													<div class="col-12 col-sm-6 col-md-6">
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input placeholder="Current Password" id="account_current_password" name="currentpassword" type="password" class="form-control">
																<label for="account_current_password">Current Password</label>
															</div>

															<!-- `SOW : Form Advanced` plugin used -->
															<a href="#" class="btn fs--12 btn-password-type-toggle" data-target="#account_current_password">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>
														</div>

													</div>

													<div class="col-12 col-sm-6 col-md-6">
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input placeholder="New Password" id="account_new_password" name="newpassword" type="password" class="form-control">
																<label for="account_new_password">New Password</label>
															</div>

															<!-- `SOW : Form Advanced` plugin used -->
															<a href="#" class="btn fs--12 btn-password-type-toggle" data-target="#account_new_password">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>

														</div>

													</div>

												</div>
												<div class="row mt-3">
													<div class="col-12 col-sm-6 col-md-6">
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input placeholder="Confirm New Password" id="account_new_password" name="confirmpassword" type="password" class="form-control">
																<label for="account_new_password">Confirm New Password</label>
															</div>

															<!-- `SOW : Form Advanced` plugin used -->
															<a href="#" class="btn fs--12 btn-password-type-toggle" data-target="#account_new_password">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>

														</div>

													</div>
													<div class="col-12 col-sm-6 col-md-6">
														<div class="">
															<input type="submit" class="btn btn-primary">
																<i class="fi fi-check"></i>
																SAVE CHANGES
															</button>
														</div>
													</div>

												</div>

											</div>
										</form>

										</div>
										<!-- /PASSWORD -->



										<!-- DELETE ACCOUNT -->
										<div class="clearfix mt--60">

											<div class="text-align-end">
												<a href="#account_deactivate_confirm" class="text-gray-500 text-decoration-none font-light collapsed" data-toggle="collapse" aria-expanded="false" onclick="jQuery('#user_password_current, #user_password_new').val('');">
													<span class="group-icon fs--13">
														<i class="fi fi-arrow-down"></i>
														<i class="fi fi-close"></i>
													</span>

													<span class="pl-2 pr-2">
														delete my account
													</span>
												</a>
											</div>


											<div id="account_deactivate_confirm" class="collapse" style="">

												<div class="alert b-0 bg-danger-soft mt-3 mb-5 p-4 clearfix">

													<p>
														NOTE: There is no way to restore a deleted account! 
														Your account will be permanently deleted from our system. 
														Please, make sure that this is what you want.
													</p>

													<p class="m-0 fs--13">
														For security reasons, your account will be deactivated and permanently deleted within 30 days. Deletion progress will be canceled if you sign back to your account.
													</p>
													
													<i class="arrow arrow-lg arrow-bottom arrow-center border-danger-soft"></i>
												</div>

												<div class="row mb--60">

													<div class="col-12 offset-lg-2 col-lg-7">

														<div class="input-group-over">
															<div class="form-label-group mb-1">
																<input placeholder="Current Password" id="account_del_current_password" name="account_current_password" type="password" class="form-control">
																<label for="account_del_current_password">Current Password</label>
															</div>

															<!-- `SOW : Form Advanced` plugin used -->
															<a href="#" class="btn fs--12 btn-password-type-toggle" data-target="#account_del_current_password">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>
														</div>

														<div class="mt--7 fs--13 text-muted mb--30">
															For security reasons, your current password is needed.
														</div>


														<div class="form-label-group mb-1">
															<textarea rows="5" placeholder="Feedback" id="account_deactivate_feedback" name="account_deactivate_feedback" class="form-control"></textarea>
															<label for="account_deactivate_feedback">Feedback</label>
														</div>

													</div>

												</div>

											</div>

										</div>
										<!-- /DELETE ACCOUNT -->



								</div>


								<!-- ADDRESSES TAB -->
								<div id="tab_address" class="tab-pane border bt-0 p-4 shadow-xs">

								<!-- 	<h3 class="h5 clearfix mb-3 mt-3">

										<a href="#" 
											data-href="_ajax/modal_address.html" 
											data-ajax-modal-size="modal-md"
											data-ajax-modal-centered="false"
											data-ajax-modal-backdrop="static"
											class="js-ajax-modal float-end btn btn-sm btn-primary fs--14 mb-0">
											Add Address
										</a>

										<span class="float-start mt-2">
											<span class="text-primary">KYC</span> Document
										</span>

									</h3>
 -->


									<!-- address -->
							<!-- 		<div class="d-block shadow-xs rounded p-4 mb-2">
										<div class="row">

											<div class="col">

												<p class="mb-0"><b>John Doe</b></p>
												<p class="mb-0">Road 741, No.44</p>
												<p class="mb-0">New York / United States</p>
												<p class="mb-0">My Company</p>
												<p class="mb-0">+01-785-388-9450</p>

												<p class="mb-0 mt-2 text-success">
													<i class="fi fi-check"></i> &nbsp; 
													default address
												</p>

											</div>

											<div class="col-4 col-sm-3 col-md-3 col-lg-2">

												<a href="#" 
													data-href="_ajax/modal_address.html" 
													data-ajax-modal-size="modal-md"
													data-ajax-modal-centered="false"
													data-ajax-modal-backdrop="static"
													class="js-ajax-modal float-end btn btn-sm btn-block btn-light fs--14 mb-0">
													Edit
												</a>

												<a href="#" 
													data-href="#?action=delete&amp;item_id=1" 
													data-ajax-confirm-mode="regular" 
													data-ajax-confirm-size="modal-md" 
													data-ajax-confirm-centered="false" 
													data-ajax-confirm-title="Please Confirm" 
													data-ajax-confirm-body="Are you sure? Remove from favourites?" 
													data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
													data-ajax-confirm-btn-yes-text="Yes, Remove" 
													data-ajax-confirm-btn-yes-icon="fi fi-check" 
													data-ajax-confirm-btn-no-class="btn-sm btn-light" 
													data-ajax-confirm-btn-no-text="Cancel" 
													data-ajax-confirm-btn-no-icon="fi fi-close" 
													class="js-ajax-confirm float-end btn btn-sm btn-block btn-light fs--14 mb-0 mt-2">
													Delete
												</a>

											</div>
										</div>
									</div> -->
									<!-- /address -->






								


								</div>

							</div>

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


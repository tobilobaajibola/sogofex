			<div class="page-profile">

						<div class="row">

					
							<!-- COL 2 -->
							<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">

								<div class="tabs white nomargin-top">
									<ul class="nav nav-tabs tabs-primary">
										<li class="active">
											<a href="#edit" data-toggle="tab">Settings</a>
										</li>
									</ul>

									<div class="tab-content">

									
										<!-- Edit -->
										<div id="edit" class="tab-pane active">

											<form class="form-horizontal" method="get">
												<h4>Personal Information</h4>
												<fieldset>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
														<div class="col-md-8">
															<input type="text"  name="" value="<?php echo $user_data['first_name'];?>" class="form-control" id="profileFirstName" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
														<div class="col-md-8">
															<input type="text" name="" value="<?php echo $user_data['last_name'];?>" class="form-control" id="profileLastName" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileAddress">Email</label>
														<div class="col-md-8">
															<input type="text" name="" value="<?php echo $user_data['email'];?>" class="form-control" id="profileAddress" readonly>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileCompany">Username</label>
														<div class="col-md-8">
															<input type="text"  name="" value="<?php echo $user_data['username'];?>"  class="form-control"  id="profileCompany" readonly>
														</div>
													</div>
												</fieldset>

											</form>
												<hr />

												<h4>Change Password</h4>
													<div id="alert_success" class="alert alert-success mb-30" style="display: none;">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										</div><!-- /Alert Success -->
										<!-- Alert Failed -->
										<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											
										</div> 

										<form id="changepassword" class="form-horizontal"  onsubmit="form_submitter('#changepassword', '<?php echo base_url();?>api/changepassword' );return false">
												<fieldset class="mb-xl">
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileNewPassword">Current Password</label>
														<div class="col-md-8">
															<input type="password" name="currentpassword" value="" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
														<div class="col-md-8">
															<input type="password" name="newpassword" value="" class="form-control" >
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
														<div class="col-md-8">
															<input type="password" class="form-control" name="confirmpassword">
														</div>
													</div>
												</fieldset>

												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Change Password</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>

											</form>

										</div>
									</div>
								</div>

							</div><!-- /COL 2 -->

						
						</div>

					</div>

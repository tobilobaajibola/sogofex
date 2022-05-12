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

				<!-- SIGN IN -->
				<!-- <form class="collapse bs-validate show" id="login_user"  onsubmit="form_submitter('#login_user', '<?php //echo base_url();?>accounts/login_users' );return false"   data-parent="#accordionAccount"> -->
				<form class="collapse bs-validate show" id="login_user"  onsubmit="login_user('#login_user', '<?php echo base_url();?>accounts/login_users' );return false"   data-parent="#accordionAccount">
					<div id="show_after_submit"></div>
<!-- method="post" action="<?php //echo base_url();?>accounts/login_users" -->
					<h5 class="text-center pb-3">Sign In</h5>
					<input type="hidden" name="login">
					<!-- email -->
					<div class="form-label-group mb-4">

						<input  class="form-control" type="email"  id="signin_email"  name="email" value="" placeholder="Email" required>
						<label for="signin_email">Email</label>
					
					</div>


					<!-- password -->
					<div class="input-group-over">

						<div class="form-label-group mb-4">
							<input type="password" name="password" id="signin_password" value=""  class="form-control"  placeholder="Password" autocomplete="new-password" required  >
							<label for="signin_password">Password</label>
						</div>

						<a href="#forgot_password" class="btn btn-pill fs--12" data-toggle="collapse" aria-expanded="true" aria-controls="forgot_password">
							FORGOT?
						</a>

					</div>


					<!-- button -->
					<button type="submit" class="btn btn-primary btn-soft btn-block">
						Sign In
					</button>

					<div class="text-center mt-5">
						<a href="#register_user" class="d-block text-success text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="register_user">
							Don't have an account yet?
						</a>
					</div>

				</form>
				<!-- /SIGN IN -->



				<!-- PASSWD RESET -->
				<form class="collapse bs-validate" novalidate novalidate id="forgot_password"  onsubmit="form_submitter('#forgot_password', '<?php echo base_url();?>accounts/forgot_passwords' );return false" data-parent="#accordionAccount">

					<h5 class="text-center pb-3">Password Reset</h5>
					<input type="hidden" name="user_password_reset">
					<!-- email -->
					<div class="form-label-group mb-4">
						<input required placeholder="Email" id="reset_email" type="email" value="" name="user_email" class="form-control">
						<label for="reset_email">Email</label>
					</div>


					<!-- password -->
					<button type="submit" class="btn btn-primary btn-soft btn-block">
						Reset Password
					</button>


					<!-- back -->
					<div class="text-center mt-5">
						<a href="#login_user" class="d-block text-success text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
							Nevermind, back to Sign In
						</a>
					</div>

				</form>
				<!-- /PASSWD RESET -->



				<!-- SIGN UP -->
				<form class="collapse bs-validate hide_after_submit" novalidate id="register_user"  onsubmit="form_submitter('#register_user', '<?php echo base_url();?>accounts/register_users' );return false"   data-parent="#accordionAccount">

					<h5 class="text-center pb-3">Sign Up</h5>

					<div class="form-label-group mb-3">
						<input required id="signup_first_name" type="text" class="form-control" value="" name="first_name" placeholder="First Name">
						<label for="signup_first_name">First Name</label>
					</div>

					<div class="form-label-group mb-3">
						<input required id="signup_last_name" type="text" class="form-control" value="" name="last_name" placeholder="Last Name">
						<label for="signup_last_name">Last Name</label>
					</div>

					<div class="form-label-group mb-3">
						<input required id="signup_email" type="email" class="form-control" name="email" value="" placeholder="Email">
						<label for="signup_email">Email</label>
					</div>

					<div class="form-label-group mb-3">
						<!-- bootstrap select vendor plugin used -->
						<select required class="form-control bs-select pt-0 pb-0" data-live-search="true">
							<option value="">Country...</option>
							<option>Nigeria</option>
						</select>
						<label for="signup_email">Country</label>
					</div>

					<div class="input-group-over">
						
						<div class="form-label-group mb-3">
							<input required placeholder="Password" id="account_password" type="password" value="" name="password" class="form-control">
							<label for="account_password">Password</label>
						</div>

						<!-- `SOW : Form Advanced` plugin used -->
						<a href="account-sign-password.html" class="btn fs--12 btn-password-type-toggle" data-target="#account_password">
							<span class="group-icon">
								<i class="fi fi-eye m-0"></i>
								<i class="fi fi-close m-0"></i>
							</span>
						</a>

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

					<button type="submit" class="btn btn-primary btn-soft btn-block">
						Sign Up
					</button>

					<div class="text-center mt-5">
						<a href="#login_user" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
							Back to Sign In
						</a>
					</div>

				</form>
				<!-- /SIGN UP -->


			</div>

		</div>

		<div class="border-top text-muted fs--13 bg-light rounded-bottom p-3">
			<b>Privacy:</b> All data is secure, never transfered to a third party provider/service.
		</div>

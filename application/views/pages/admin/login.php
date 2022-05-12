
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
    <title>Sogofex</title>
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="<?php echo base_url();?>assets/admin/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css_new/core.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css_new/vendor_bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">

  </head>
  <body>


    <div class="row g-0 bg-white min-vh-100 align-items-center">
      <div class="col-lg-6 text-center text-lg-start overflow-hidden z-index-2">
        <div class="px-3 py-6">

          <!-- back button -->
          <a href="<?php echo base_url();?>" class="link-muted position-absolute top-0 start-0 p-2 d-inline-grid gap-auto-2">
            <svg class="rtl-flip" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>
            <span>back to Ecommerce</span>
          </a>
    
          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-9 col-xl-12 mx-auto max-w-450">

              <h1 class="fw-bold mb-5">Sign in</h1>
              <div id="alert_success" class="alert alert-success mb-30" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div><!-- /Alert Success -->
              <!-- Alert Failed -->
              <div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
              </div> 
              <form novalidate class="bs-validate" id="login_user"  onsubmit="login_user('#login_user', '<?php echo base_url();?>admin/accounts/login_account' );return false">
                <input type="hidden" name="login">

                <!-- email address -->
                <div class="form-floating mb-3">
                  <input required type="email" class="form-control" id="email" name="username" placeholder="Email address">
                  <label for="account_email">Email address</label>
                </div>

                <!-- password -->
                <div class="form-floating mb-3">
                  <input required type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="new-password">
                  <label for="account_passwd">Password</label>

                  <!-- forgot -->
                  <a href="auth-passreset-cover.html" class="btn bg-transparent shadow-none link-muted position-absolute top-0 end-0 m-1">
                    Forgot
                  </a>
                </div>

                <!-- submot button -->
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-primary">
                    <span>Sign in</span>
                    <svg class="rtl-flip" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg>
                  </button>
                </div>

              </form>

              <!-- create account -->
              <div class="text-center mt-4">
                <a href="auth-signup-cover.html" class="link-muted">
                  Don't have an account yet?
                </a>
              </div>

            </div>
          </div>

          <div class="row mt-7">
            <div class="col-sm-8 col-md-6 col-lg-9 col-xl-5 mx-auto">

              <div class="d-flex align-items-center justify-content-between w-100 max-w-250 mx-auto mb-3 small text-muted">
                <hr class="w-100">
                <span class="flex-none px-4">OR</span>
                <hr class="w-100">
              </div> 

              <div class="w-100 d-inline-grid gap-auto-3">
                <a href="#!" class="btn bg-white border w-100 mx-0 text-gray-700">
                  <svg height="18px" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42v-78.89s-36.68-6.26-71.75-6.26c-73.22 0-121.08 44.38-121.08 124.72v70.62h-81.39v92.66h81.39v224h100.17v-224z"></path>
                  </svg>
                </a>
                <a href="#!" class="btn bg-white border w-100 mx-0 text-gray-700">
                  <svg height="18px" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path d="m165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zm65.8-383.2c-138.7 0-244.8 105.3-244.8 244 0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1 100-33.2 167.8-128.1 167.8-239 0-138.7-112.5-244-251.2-244zm-147.6 344.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9s4.3 3.3 5.6 2.3c1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                  </svg>
                </a>
                <a href="#!" class="btn bg-white border w-100 mx-0 text-gray-700">
                  <svg height="18px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path d="m459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                  </svg>
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="d-none d-lg-block min-vh-100 col-lg-6 bg-cover py-8 overlay-dark overlay-opacity-25" style="background-image:url(<?php echo base_url();?>assets/admin/images/loginbg.jpg)">
        <svg class="d-none d-lg-block position-absolute h-100 top-0 text-white ms-n5" style="width:6rem" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon points="50,0 100,0 50,100 0,100"></polygon>
        </svg>
      </div>
    </div>


    <!-- Core javascripts -->
    <script src="<?php echo base_url();?>assets/admin/js/core.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/vendor_bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

    <!-- Your custom javascripts -->

  </body>
</html>
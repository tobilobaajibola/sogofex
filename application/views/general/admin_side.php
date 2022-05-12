
        <!-- sidebar -->
        <aside id="aside-main" class="aside-start aside-hide-xs bg-white shadow-sm d-flex flex-column px-2 h-auto">


          <!-- sidebar : logo -->
          <div class="py-2 px-3 mb-3 mt-1">
            <a href="<?php echo base_url();?>">
              <img src="<?php echo base_url();?>assets/images/logo/logo-default.png" width="110" height="60" alt="...">
            </a>
          </div>
          <!-- /sidebar : logo -->


          <!-- sidebar : navigation -->
          <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

            <!--

              All parent open navs are closed on click!
              To ignore this feature, add .js-ignore to .nav-deep
    
              Links height (paddings):
                .nav-deep-xs
                .nav-deep-sm
                .nav-deep-md

              .nav-deep-hover     hover background slightly different
              .nav-deep-bordered  bordered links

            -->
            <nav class="nav-deep nav-deep-sm nav-deep-light">
              <ul class="nav flex-column">

                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url();?>admin">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">  
                      <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>  
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>Dashboard</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M3 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"></path>
                      <path d="M13 3V2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path>
                    </svg>
                    <span>Products</span>
                    <span class="group-icon float-end">
                      <i class="fi fi-arrow-end"></i>
                      <i class="fi fi-arrow-down"></i>
                    </span>
                  </a>

                  <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>admin/product_list">Product list</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>admin/product_add">Add Product</a></li>
                  </ul>
                </li>
                   
                <li class="nav-title mt-5">
                  <h6 class="mb-0 smaller text-muted text-uppercase">ACCOUNT</h6>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/setting" target="_blank" rel="noopener">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">  
                      <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"></path>  
                      <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                    </svg>
                    <span>Account Settings</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/logout">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">  
                      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"></path>
                    </svg>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </nav>

          </div>
          <!-- /sidebar : navigation -->


          <!-- sidebar : footer -->
          <div class="d-flex align-self-baseline w-100 py-3 px-3 border-top border-light small">

            <p class="d-inline-grid gap-auto-3 mb-0">
              <svg class="text-gray-600" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.052 512.052" fill="currentColor">
                <path d="M208.026,16.026c-114.7,0-208,78.9-208,176c0,39.8,15.7,77.9,44.5,108.9l-39.8,39.8c-4.6,4.6-6,11.5-3.5,17.4c2.5,6,8.3,9.9,14.8,9.9h192c114.7,0,208-78.9,208-176S322.726,16.026,208.026,16.026z"></path>
                <path opacity="0.5" d="M467.526,428.926c28.8-30.9,44.5-69.1,44.5-108.9c0-49.8-24.6-94.9-64-126.9c-0.9,114.1-108.2,206.9-240,206.9h-89.2c34.5,56.9,104.6,96,185.2,96h192c6.5,0,12.3-3.9,14.8-9.9c2.5-6,1.1-12.9-3.5-17.4L467.526,428.926z"></path>
                <path fill="#ffffff" d="M304.026,144.026h-192c-8.8,0-16,7.2-16,16s7.2,16,16,16h192c8.8,0,16-7.2,16-16S312.826,144.026,304.026,144.026z"></path>
                <path fill="#ffffff" d="M240.026,208.026h-128c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S248.826,208.026,240.026,208.026z"></path>
              </svg>
              <a href="#" class="link-normal text-dashed">Need help?</a>
            </p>

          </div>
          <!-- /sidebar : footer -->


        </aside>
        <!-- /sidebar -->
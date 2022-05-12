  <!-- PAGE TITLE -->
            <header>
          
              <h1 class="h4">Account Profile</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb small">
                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                  <li class="breadcrumb-item"><a href="#">Account</a></li>
                  <li class="breadcrumb-item text-muted active" aria-current="page">Account Settings</li>
                </ol>
              </nav>

            </header>
            <!-- /PAGE TITLE -->


            <!-- profile overview -->
            <div class="section p-xl-4">

              <div class="d-flex">
                
                <!-- image (desktop only) -->
                <div class="me-4 d-none d-md-block">
                  <!-- <img height="210" src="<?php echo base_url().'';?>" alt="..."> -->
                </div>

                <div class="w-100 position-relative">

                  <!-- options -->
                  <div class="d-inline-flex align-items-center float-end">
                    
                    <div class="dropstart ms-2">
                      <a class="btn btn-sm btn-light btn-icon btn-ghost text-muted rounded-circle dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,0">
                        <span class="group-icon">
                          <svg height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li><a class="dropdown-item" href="#">Products Page</a></li>
                        <li><a class="dropdown-item" href="#">Add Product</a></li>
                      </ul>
                    </div>

                  </div>

                  <h5> <!-- name -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                      <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                      <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                    </svg>
                    <span class="fw-bold"><?php echo $seller_detail['provider_name'];?></span>
                  </h5>

                   <!-- attributes -->
                  <div class="d-lg-flex small mb-2">
                    <a href="#" class="link-muted d-flex align-items-center me-3 mb-1">
                      <svg  width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path fill="currentColor" opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"></path>
                        <path fill="currentColor" d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"></path>
                      </svg>
                      <span class="ms-2"><?php echo $seller_detail['interest'];?></span>
                    </a>
                    <a href="#" class="link-muted d-flex align-items-center me-3 mb-1">
                      <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path fill="currentColor" opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"></path>
                        <path fill="currentColor" d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"></path>
                      </svg>
                       <span class="ms-2"><?php echo $seller_detail['city'];?></span>
                    </a>
                  </div>

<!-- country
partyadd
regcode
tax-no
transact-date
plan-amount
expiry-date
referer -->
                  <!-- skill boxes -->
                      <div  class="d-xl-flex">

                    <!-- senior -->
                    <div class="border border-dashed p-3 rounded w-100 max-w-1000 me-2 mb-3">

                      <div class="d-flex align-items-center">
                        
                        <div class="w-100 me-4 pe-3 border-end">
                          <h5 class="mb-0">PARTY TYPE</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['partytype'];?></p>
                        </div>

                        <div class="w-100  me-4">
                          <h5 class="mb-0">GOODS OFFERED</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['goods-offered'];?></p>
                        </div>
                        <div class="w-100 me-4 pe-3 border-end">
                          <h5 class="mb-0">RFERENCE NO</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['refno'];?></p>
                        </div>

                       <div class="w-100 me-4 pe-3 border-end">
                          <h5 class="mb-0">TAX NUMBER</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['tax-no'];?></p>
                        </div>

                    
                      </div>

                    </div>

                    

                  </div>
                  <div  class="d-xl-flex">

                    <!-- senior -->
                    <div class="border border-dashed p-3 rounded w-100 max-w-1000 me-2 mb-3">

                      <div class="d-flex align-items-center">
                        
                        <div class="w-100 me-4 pe-3 border-end">
                          <h5 class="mb-0">PLAN</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['plan'];?></p>
                        </div>

                        <div class="w-100  me-4">
                          <h5 class="mb-0">PAYMENT DATE</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['transact-date'];?></p>
                        </div>
                        <div class="w-100 me-4 pe-3 border-end">
                          <h5 class="mb-0">EXPIRY DATE</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['expiry-date'];?></p>
                        </div>
                        <div class="w-100  me-4">
                          <h5 class="mb-0">PLAN AMOUNT</h5>
                          <p class="mb-0 text-muted"><?php echo $seller_detail['plan-amount'];?></p>
                        </div>
                    
                      </div>

                    </div>

                    

                  </div>

                   <a href="#" class="btn btn-sm btn-primary">Edit Profile on TCP</a>
                </div>

              </div>

            </div>


            <!-- settings -->
            <div class="section p-xl-4">

              <!-- name, etc -->
              <div class="d-flex justify-content-between">
                <div class="flex-none pt-1" style="width:40px">
                  <svg class="text-gray-300" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 460.8" fill="currentColor">
                    <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641S296.261,0,230.432,0z"></path>
                    <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898C436.8,341.682,437.322,338.024,435.755,334.89z"></path>
                  </svg>
                </div>
                <div class="w-100">
                  <strong class="d-block fs-5 fw-medium">Phone number</strong> 
                  <ul class="list-unstyled small mb-0">
                    <li class="list-item">Phone: <?php echo $seller_detail['phone'];?></li>
                  </ul>
                </div>
                
              </div>

             
              <div class="border border-dashed border-bottom-0 my-3"><!-- divider --></div>

              <!-- email -->
              <div class="d-flex justify-content-between">
                <span class="flex-none pt-1" style="width:40px">
                  <svg width="24" height="24" class="text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                  </svg>
                </span>
                <span class="w-100">
                  <strong class="d-block fs-5 fw-medium">Email address</strong> 
                  <small>Your current email address: john.doe@gmail.com</small>
                </span>
                
              </div>

              <div class="border border-dashed border-bottom-0 my-3"><!-- divider --></div>

              <!-- password -->
              <div class="d-flex justify-content-between">
                <span class="flex-none pt-1" style="width:40px">
                  <svg width="24" height="24" class="text-gray-300" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"></path>
                  </svg>
                </span>
                <span class="w-100">
                  <strong class="d-block fs-5 fw-medium">Account password</strong> 
                  <small>Is a good idea to have a strong password you don't use it elsewhere.</small>
                </span>
                <span class="flex-none">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal-passwd-edit" class="bg-primary text-white rounded px-2 py-1 small">
                    edit
                  </a>
                </span>
              </div>

              

              <div class="border border-dashed border-bottom-0 my-3"><!-- divider --></div>

        

              

            </div>
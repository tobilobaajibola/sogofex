


          <!-- WIDGETS -->
          <div class="row gutters-sm">

            <div class="col-12 col-md-6  mb-3">
            <div class="row">
            <div class="col-12 col-md-6 mb-3">

              <!-- small graph widget -->
              <div class="bg-white shadow-md text-dark p-3 rounded text-center">

                <span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
                  <i class="fi fi-user-plus mt-1"></i>
                </span>

                <h3 class="fs--10 mt-3">
                 TOTAL PRODUCTS
                </h3>

                <p>
                  <?php echo $count_product['count_product'];?>
                </p>

               

              </div>
              <!-- /small graph widget -->

            </div>



            <div class="col-12 col-md-6 mb-3">

              <!-- small graph widget -->
              <div class="bg-success shadow-md text-dark p-3 rounded text-center">

                <span class="badge badge-success fs--45 w--100 h--100 badge-pill rounded-circle">
                  <i class="fi fi-cart-1 mt-1"></i>
                </span>

                <h3 class="fs--15 mt-3">
                  TOTAL ORDER
                </h3>

                <p>
                  Last 30 days
                </p>

              
              </div>
              <!-- /small graph widget -->
              
            </div>
            <div class="col-12 col-md-6 mb-3">

              <!-- small graph widget -->
              <div class="bg-warning shadow-md text-dark p-3 rounded text-center">

                <span class="badge badge-warning fs--45 w--100 h--100 badge-pill rounded-circle">
                  <i class="fi fi-cart-1 mt-1"></i>
                </span>

                <h3 class="fs--fs--15 mt-3">
                  TOTAL REVIEW
                </h3>

                <p>
                  Last 30 days
                </p>


              </div>
              <!-- /small graph widget -->
              
            </div>
            <div class="col-12 col-md-6  mb-3">

              <!-- small graph widget -->
              <div class="bg-white shadow-md text-dark p-3 rounded text-center">

                <span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
                  <i class="fi fi-cart-1 mt-1"></i>
                </span>

                <h3 class="fs--15 mt-3">
                 RATING
                </h3>

                <p>
                  Last 30 days
                </p>

             

              </div>
              <!-- /small graph widget -->
              
            </div>
          </div>
        </div>



            <div class="col-12 col-xl-6 mb-3">


              <div class="portlet">
                
                <div class="portlet-header">

                  <div class="float-end dropdown">

                    <!-- dropdown -->
                    <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownGraph1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fi fi-dots-vertical m-0"></i>
                    </button>

                    <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2" aria-labelledby="dropdownGraph1">

                      <div class="dropdown-header">
                        Export Options
                      </div>

                      <a href="#!" class="dropdown-item">
                        Export CSV
                      </a>

                      <a href="#!" class="dropdown-item">
                        Export XLS
                      </a>

                      <a href="#!" class="dropdown-item">
                        Export PDF
                      </a>

                      <a href="#!" class="dropdown-item">
                        Print
                      </a>

                    </div>
                    <!-- /dropdown -->

                  </div>

                  <span class="d-block text-muted text-truncate font-weight-medium">
                    Monthly Conversions
                  </span>
                </div>

                <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark tab-content">


                <div class="position-relative min-h-250 max-h-300-xs h-100">
                  <canvas class="chartjs" 
                      data-chartjs-dots="false" 
                      data-chartjs-legend="false" 
                      data-chartjs-grid="true" 
                      data-chartjs-tooltip="true" 

                      data-chartjs-line-width="3" 
                      data-chartjs-type="line" 

                    data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]' 
                      data-chartjs-datasets='[{                                                           
                          "label":                    "Orders",
                          "data":                     [11, 11, 17, 11, 15, 12, 13, 16, 11, 18, 20, 21],
                          "fill":                     true,
                          "backgroundColor":          "rgba(201, 203, 207, 0.3)",
                          "borderColor":        "rgba(255, 99, 132, 1)",
                          "borderWidth": 1
                      }]'
                  ></canvas>
                </div>


                </div>

              </div>


              
            </div>


          </div>
          <!-- /WIDGETS -->


          <!-- widgets -->
          <div class="row g-3">

            <!-- alert : upgrade -->
            <div class="col-12">
              <div class="d-flex align-items-center bg-white shadow-xs rounded small p-3">

                <a href="#" title="Upgrade" aria-label="Upgrade" class="btn  btn-sm btn-warning py-1 mb-0 me-3 float-start transition-hover-end">
                  Upgrade
                </a>
                <span class="d-block pt-1 px-2 text-muted text-truncate">
                  using 89% of total storage
                </span>

              </div>
            </div>
            <!-- /alert : upgrade -->


            <!-- imports -->
            <div class="col-12 col-xl-8">

              <div class="portlet">
                
                <div class="portlet-header">

                  <div class="float-end dropdown">

                    <a href="#" class="btn btn-sm btn-light px-2 py-1 mt-n1">
                      <small>View All</small>
                    </a>

                  </div>

                  <span class="d-block text-muted text-truncate fw-medium">
                   Latest Products  
                  </span>

                </div>


                <!-- content loaded via ajax! -->
                <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">
                  <?php
                  foreach ($list_seller_product as $list_seller_products) {
                    ?>
                  
                  <!-- item -->
                  <div class="d-flex align-items-center p-3 border-bottom border-light">

                    <div class="flex-none">
                      <img width="40" height="40" class="img-fluid lazy" data-src="<?php echo base_url();?>assets/images/product/<?php echo $list_seller_products['product_image'];?>" src="<?php echo base_url();?>assets/images/product/<?php echo $list_seller_products['product_image'];?>" alt="...">
                    </div>

                    <div class="flex-fill text-truncate px-3">
                      <span class="text-muted"><?php echo  $list_seller_products['product_name'];?></span>
                      <span class="small d-block text-muted"><?php echo  $list_seller_products['date_added'];?>/Price: <?php echo  $list_seller_products['product_price'];?></span>
                    </div>

                    <div class="flex-none ms-2 small text-muted text-align-end">
                      <a href="<?php echo base_url();?>admin/product/detail/<?php echo  $list_seller_products['product_slug_url'];?>">view detail</a>
                    </div>

                  </div>
                  <!-- /item -->

                  <?php
                }
                ?>

                </div>

                <div class="d-flex align-self-baseline w-100 py-2">
                  <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                    <i class="fi fi-arrow-end"></i>
                    <span>View All</span>
                  </a>
                </div>

              </div>

            </div>
            <!-- /imports -->


            <!-- orders -->
            <div class="col-12 col-xl-4">

              <div class="portlet">
                
                <div class="portlet-header">

                  <!-- dropdown options -->
                  <div class="float-end dropdown">
                    <button type="button" class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1" id="dropdownOrders" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="js-trigger-text small">Export</span>
                      <i class="fi fi-arrow-down"></i>
                    </button>
                    <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2" aria-labelledby="dropdownOrders">
                      <div class="dropdown-header smaller px-4 text-muted fw-medium">Export options</div>
                      <a href="#" class="dropdown-item">Export CSV</a>
                      <a href="#" class="dropdown-item">Export XLS</a>
                      <a href="#" class="dropdown-item">Export PDF</a>
                      <a href="#" class="dropdown-item">Print</a>
                    </div>
                  </div>
                  <!-- /dropdown options -->

                  <span class="d-block text-muted text-truncate fw-medium">
                  New Orders  
                  </span>

                </div>

                <!-- items -->
                <div class="portlet-body scrollable-vertical scrollable-styled-dark" style="max-height:300px">
                  <?php
                  foreach ($list_seller_order as $list_seller_orders) {
                   ?>
                  <!-- item -->
                  <a href="#" class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                    <!-- badge -->
                    <span class="float-end fw-bold text-muted small">$2155.00</span>

                    <!-- icon -->
                    <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                      <i class="fi fi-cart-1"></i>
                    </div>

                    <p class="m-0 text-truncate fw-normal">2 items</p>
                    <small class="text-muted d-block smaller">3 hours ago</small>

                  </a>
                  <!-- /item -->
                  <?php 
                }
                ?>

                </div>
                <!-- /items -->

                <div class="d-flex align-self-baseline w-100 py-2">
                  <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                    <i class="fi fi-arrow-end"></i>
                    <span>View All</span>
                  </a>
                </div>
            
              </div>

            </div>
            <!-- /orders -->

          </div>
          <!-- /widgets -->
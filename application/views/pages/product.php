<div class="bg-gray-200">


         <!-- page title -->
         <div class="container py-5">

            <nav aria-label="breadcrumb">
               <ol class="breadcrumb small">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product</li>
               </ol>
            </nav>

            <h1 class="h2 fw-bold"><?php echo $page_title;?></h1>

         </div>
         <!-- /page title -->


         <!-- -->
         <div class="container pb-6">

            <div class="row g-4">


               <!-- sidebar -->
               <div class="col-12 col-lg-3">

                  <!-- categories & filters -->
                  <nav class="nav-deep nav-deep-light mb-2 mb-lg-3 bg-white shadow-xs shadow-none-md shadow-none-xs p-lg-4 rounded">

                     <!-- mobile trigger : categories -->
                     <button class="clearfix btn btn-toggle btn-sm w-100 py-3 text-align-left shadow-md border rounded mb-1 d-flex d-lg-none align-items-center" data-bs-target="#nav_responsive" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                        <span class="group-icon float-start px-2">
                           <i class="fi fi-bars-2"><!-- icon --></i>
                           <i class="fi fi-close"><!-- icon --></i>
                        </span>
                        <span class="mx-0 fw-medium float-start">Categories</span>
                     </button>

                     <!-- desktop only -->
                     <h5 class="h6 d-none d-lg-block">
                        Categories
                     </h5>

                     <!-- navbar : navigation -->
                     <ul id="nav_responsive" class="nav flex-column d-none d-lg-block">

                           <?php
                           foreach ($list_product_category as $list_product_categories) {
                             ?>
                        <li class="nav-item <?php if($product_category==$list_product_categories['slug_url']){echo 'active';}?>">
                           <a class="nav-link px-0" href="#">
                              <span class="group-icon">
                                 <i class="fi fi-arrow-end"></i>
                                 <i class="fi fi-arrow-down"></i>
                              </span>

                              <span class="px-2 d-inline-block">
                                 <?php echo $list_product_categories['category_name'];?>
                              </span>

                              
                           </a>
                         <ul  class="nav flex-column px-0" data-load-box="product_sub_category/<?php echo  $list_product_categories['product_category_id'];?>"></ul>

                           
                        </li>
                        <?php
                     }
                     ?>
                        

                     </ul>

                  </nav>
                  <!-- /categories & filters -->


                  <!-- mobile trigger : filters -->
                  <button class="clearfix btn btn-toggle btn-sm w-100 py-3 text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-bs-target="#sidebar_filters" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3 fullscreen" data-toggle-body-class="overflow-hidden">
                     <i class="fi fi-eq-horizontal float-start px-2"><!-- icon --></i>
                     <span class="mx-0 fw-medium float-start">Filters</span>
                  </button>

                  <form method="get" id="sidebar_filters" class="d-none d-lg-block">

                     <!-- mobile only -->
                     <div class="bg-white pb-3 mb-4 d-block d-lg-none border-bottom">
                        
                        <i class="fi fi-eq-horizontal float-start"><!-- icon --></i>
                        <span class="d-inline-block fw-bold">Filters</span>

                        <!-- mobile : exit fullscreen -->
                        <a href="#" class="float-end btn-toggle text-dark mx-1" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3 fullscreen" data-toggle-body-class="overflow-hidden" data-bs-target="#sidebar_filters">
                           <i class="fi fi-close"></i>
                        </a>

                     </div>
                     <!-- /mobile only -->


                
                     


                     <!-- Brands -->
                     <div class="card border-0 shadow-xs mb-3">
                        <div class="card-body">

                           <div class="input-group-over">
                              <input type="text" class="form-control form-control-sm iqs-input" data-container=".iqs-container" value="" placeholder="quick filter">
                              <span class="fi fi-search btn btn-sm px-3 text-gray-500"></span>
                           </div>

                           <div class="iqs-container mt-3 scrollable-horizontal scrollable-styled-light" style="max-height: 250px;">
                              <?php 
                              foreach($list_brand as $list_brands){
                                 ?>
                              <div class="form-check iqs-item">
                                <!-- <input class="form-check-input" type="checkbox" id="brand-1" name="brand[]" value=""> -->
                                <!-- <label class="form-check-label px-1" for="brand-1"> -->
                                    <a href="<?php echo base_url().'product/'.$list_brands['brand_slug'];?>"><?php echo $list_brands['brand_name'];?> <span class="text-muted smaller d-inline-block">( <?php echo $list_brands['brand_count'];?>)</span></a>
                                <!-- </label> -->
                              </div>
                              <?php
                           }
                           ?>
                            
                           </div>

                        </div>
                     </div>
                     <!-- /Brands -->


                     <!-- apply filters button -->
                     <a href="<?php echo base_url();?>product" class="btn btn-primary btn-sm w-100">
                        Reset Filters
                     </a>

                  </form>

               </div>
               <!-- /sidebar -->


               <!-- products -->
               <div class="col-12 col-lg-9">


              <!-- additional filters -->
              <div class="d-flex justify-content-between mb-3 bg-white p-3 shadow-md rounded">

                <div class="position-relative">
                  <a id="dropdownMenuFilter" href="#" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Popular First</span>
                    <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                  </a>

                  <ul class="dropdown-menu shadow-lg rounded-xl" aria-labelledby="dropdownMenuFilter">
                    <li><a class="dropdown-item active" href="#">Popular First</a></li>
                    <li><a class="dropdown-item" href="#">Newest First</a></li>
                    <li><a class="dropdown-item" href="#">Avg. Review</a></li>
                    <li><a class="dropdown-item" href="#">Price: High</a></li>
                    <li><a class="dropdown-item" href="#">Price: Low</a></li>
                  </ul>
                </div>            

                <div class="d-inline-grid gap-auto-2">
                  <a rel="nofollow" href="#" class="text-gray-700 text-decoration-none"><!-- grid -->
                    <svg height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                  </a>
                  <a rel="nofollow" href="#" class="text-gray-400 text-decoration-none"><!-- list -->
                    <svg height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                  </a>
                </div>

              </div>
              <!-- /additional filters -->


                  <!-- product list -->
                  <div class="row g-2 g-xl-3">

                  <?php
                        foreach ($list_product as $list_products) {
                           ?>
                     <!-- item -->
                     <div class="col-6 col-md-4">

                        <div class="bg-white shadow-sm shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-3 h-100">

                           <!-- badges, countdown -->
                           <div class="position-absolute top-0 start-0 m-1 m-lg-3 z-index-1">
                              
                              <!-- 

                                 SOW : Timer Countdown

                                    Backgrounds:
                                       .bg-primary 
                                       .bg-secondary 
                                       .bg-danger 
                                       .bg-warning 
                                       .bg-info
                                       etc

                              -->
                              <?php if($list_products['discounted']>0){ 
                                       ?>
                              <div class="bg-danger text-white hide animate-fadein smaller opacity-9 px-2 py-1 mb-1 rounded timer-countdown timer-countdown-inline" 
                                 data-timer-countdown-from="11/21/2030 16:00:00" 
                                 data-timer-countdown-end-hide-self="true" 
                                 data-timer-countdown-end-hide-target="">

                                 <strong>Limited offer:</strong> 

                                 <span class="d-block d-xl-inline-block">
                                    <span class="d"></span> days, 
                                    <span class="h"></span>:<span class="m"></span>:<span class="s"></span>
                                 </span>

                              </div>
                           <?php }?>

                              <!-- badge -->
                              <div class="clearfix"><!-- RTL: change me-1 to ms-1 -->
                                 <span class="float-start badge bg-success text-white mb-1 me-1">new</span>
                              </div>

                           </div>

                           <!-- hover buttons : top -->
                           <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block" style="width:60px">
                              
                              <!-- add to favourite : not logged in -->
                              <!--
                              <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                  data-href="_ajax/modal_signin.html"
                                  data-ajax-modal-size="modal-md"
                                  data-ajax-modal-centered="false"
                                  data-ajax-modal-backdrop="static">
                                  <i class="fi fi-heart-slim"></i>
                              </a>
                              -->

                              <!-- add to favourite : logged in -->
                              <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2" 
                                 data-bs-toggle="tooltip" 
                                 data-bs-original-title="add to favourite" 
                                 data-bs-placement="left" 

                                 data-toggle-ajax-url-on="demo.files/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                 data-toast-success-message="Added to your favourite!"
                                 data-toast-success-position="bottom-center">
                                 <i class="fi fi-heart-slim"></i>
                              </a>

                              <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to compare">
                                 <i class="fi fi-graph"></i>
                              </a>

                              <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                 <i class="fi fi-cart-1"></i>
                              </a>
                           </div>
                           <!-- /hover buttons : top -->

                           <a href="<?php echo base_url();?>products/details/<?php echo $list_products['product_slug_url'];?>" class="d-block text-gray-800">

                              <!-- regular image -->
                           <!--    <figure class="text-center">
                                 <img class="img-fluid" src="<?php //echo base_url();?>assets/images/product/<?php //echo $list_products['product_image'];?>" alt="..."> 
                              </figure> -->

                              <!-- OR : background image -->
                              <!-- ratio-1x1, ratio-4x3, ratio-16x9 -->
                              <!-- <figure class="ratio ratio-1x1 bg-cover" style="background-image:url(<?php //echo base_url();?>assets/images/product/<?php //echo $list_products['product_image'];?>)"></figure> -->
                              <!-- lazy load -->
                              <figure class="ratio ratio-1x1 bg-cover lazy" data-background-image="<?php echo base_url();?>assets/images/product/<?php echo $list_products['product_image'];?>"></figure>

                              <span class="d-block fs-6">

                                 <!-- rating -->
                                 <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                 </span>

                                 <!-- title -->
                                 <span class="d-block fw-medium"><?php echo $list_products['product_name'];?></span>

                                 <!-- price -->
                                 <span class="d-block fw-medium">
                                    <?php if($list_products['discounted']>0){ 
                                       ?>
                                    <del class="text-muted">N<?php echo $list_products['product_price'];?></del> 
                                    <span class="text-dark">N<?php echo $list_products['discount_price'];?></span>
                                    <?php
                                 }
                                 else{
                                    ?>
                                    <span class="text-dark">N<?php echo $list_products['product_price'];?></span>
                                 <?php
                                 }
                                 ?>


                                 </span>

                              </span>

                           </a>

                        </div>

                     </div>
                     <!-- /item -->

                     <?php
                  }
                  ?>
                  </div>
                  <!-- /product list -->


                  <!-- pagination -->
                  <nav aria-label="pagination" class="mt-5">
                     <ul class="pagination pagination-pill justify-content-end justify-content-center justify-content-md-end">
                        <?php
                        echo $this->pagination->create_links();
                        ?>
                     </ul>
                  </nav>
                  <!-- pagination -->
                        

               </div>
               <!-- /products -->


            </div>

         </div>
         <!-- / -->


      </li>

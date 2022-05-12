
   <?php
                        foreach ($list_product as $list_products) {
                         
                         // if $product_category has a parent id of 0 use differen a layout without features
                        if($product_category_details['parent_id']==0){
                           ?>
                           <div class="col-6 col-md-4 mb-4 mb-2-xs">

                           <div class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                              <!-- hover buttons : top -->
                              <div class="position-absolute top-0 end-0 text-align-end w--60 z-index-3 m-3 show-hover-item">
                                 
                                 <!-- add to favourite : not logged in -->
                                 <!--
                                 <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                     data-href="_ajax/modal_signin_md.html"
                                     data-ajax-modal-size="modal-md"
                                     data-ajax-modal-centered="false"
                                     data-ajax-modal-backdrop="static">
                                     <i class="fi fi-heart-slim"></i>
                                 </a>
                                 -->

                                 <!-- add to favourite : logged in -->
                                 <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2" 
                                    data-toggle="tooltip" 
                                    data-original-title="add to favourite" 
                                    data-placement="left" 

                                    data-toggle-ajax-url-on="demo.files/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                    data-toast-success-message="Added to your favourite!"
                                    data-toast-success-position="bottom-center">
                                    <i class="fi fi-heart-slim"></i>
                                 </a>

                                 <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title="" data-toggle="tooltip" data-placement="left" data-original-title="add to compare">
                                    <i class="fi fi-graph"></i>
                                 </a>

                                 <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title="" data-toggle="tooltip" data-placement="left" data-original-title="add to cart">
                                    <i class="fi fi-cart-1"></i>
                                 </a>
                              </div>
                              <!-- /hover buttons : top -->


                        
                           <a 
                              href="#"
                        <?php $product_name = strtolower((str_replace(' ', '-', $list_products['product_name'])));?>
                     data-href="<?php echo base_url();?>products/details/<?php echo $list_products['product_slug_url'];?>" 
                     data-ajax-modal-size="modal-xl" 
                     data-ajax-modal-centered="false" 
                     data-ajax-modal-callback-function=""
                     class="js-ajax-modal card-btn btn btn-block  btn-soft shadow-none rounded-xl rounded-top-0 pd-0 cm_product_list_category"
                            class="d-block text-decoration-none" >

                                 <figure class="m-0 text-center bg-light-radial rounded-top overflow-hidden">
                                    <img class="img-fluid bg-suprime opacity-9" src="<?php echo base_url();?>assets/images/product/<?php echo $list_products['product_image'];?>" alt="..."> 
                                 </figure>

                                 <span class="d-block text-center-xs text-gray-600 py-3">
                                    
                                    <!-- 
                                       .max-height-50  = limited to 2 rows of text 
                                       -or-
                                       .text-truncate
                                    -->
                                    <span class="d-block fs--16 max-h-50 overflow-hidden">
                                       <?php echo $list_products['product_name'];?>
                                    </span>

                                    <!-- price -->
                                    <span class="d-block text-danger font-weight-medium fs--16 mt-2">

                                       <!-- <del class="text-muted">10<sup>00</sup></del>  -->

                                      <?php echo $list_products['product_price'];?><sup>00</sup>
                                    </span>

                                    <!-- rating -->
                                    <span class="d-block">
                                       <i class="rating-5 text-warning fs--14"></i>
                                       <span class="fs--12 text-muted">(4.7)</span>
                                    </span>

                                 </span>

                              </a>
                           </div>
                        </div>
                          <?php
                           }
                           else{
                         ?>

                        <!-- item -->
                        <div class="col-12 col-lg-6 col-md-6 mb-6 mb-2-xs">

                           <div class="card b-0 shadow-xs transition-hover-top transition-all-ease-500 rounded-xl mt-4 mb-4">

                              <!-- hover buttons : top -->
                              <div class="position-absolute top-0 end-0 text-align-end w--60 z-index-3 m-3 show-hover-item d-none d-sm-inline-block">
                                 
                                 <!-- add to favourite : not logged in -->
                                 <!--
                                 <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                     data-href="_ajax/modal_signin_md.html"
                                     data-ajax-modal-size="modal-md"
                                     data-ajax-modal-centered="false"
                                     data-ajax-modal-backdrop="static">
                                     <i class="fi fi-heart-slim"></i>
                                 </a>
                                 -->

                                 <!-- add to favourite : logged in -->
                                 <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2" 
                                    data-toggle="tooltip" 
                                    data-original-title="add to favourite" 
                                    data-placement="left" 

                                    data-toggle-ajax-url-on="demo.files/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                    data-toast-success-message="Added to your favourite!"
                                    data-toast-success-position="bottom-center">
                                    <i class="fi fi-heart-slim"></i>
                                 </a>

                                 <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title="" data-toggle="tooltip" data-placement="left" data-original-title="add to compare">
                                    <i class="fi fi-graph"></i>
                                 </a>

                                 <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title="" data-toggle="tooltip" data-placement="left" data-original-title="add to cart">
                                    <i class="fi fi-cart-1"></i>
                                 </a>
                              </div>
                              <!-- /hover buttons : top -->

                        <div class="bg-light rounded-xl rounded-bottom-0 pt-3 pb-3" style="background-image: url('<?php echo base_url();?>assets/images/product/<?php echo $list_products['product_image'];?>'); background-size: cover; background-repeat: no-repeat;">

                           <h3 class="text-center">
                              <span class="fs--13 badge badge-secondary badge-pill badge-soft font-weight-light pl-2 pr-2 pt--6 pb--6">
                                 <?php echo $list_products['product_name'];?>
                              </span>
                           </h3>

                           <div class="d-flex justify-content-center">
                           <div class="pricetable-display">
                              <span class="mb-0 mt-3 h3">N</span>
                                 <span class="pricetable-count mb-0 display-3 font-weight-normal"
                                    data-toggle="count" 
                                    data-count-decimals="" 
                                    data-count-from="0" 
                                    data-count-to="<?php echo $list_products['product_price'];?>" 
                                    data-count-duration="1000"

                                    data-count-toggle='[
                                       {"from":"0", "to":"<?php echo $list_products['product_price'];?>", "duration":800},
                                       {"from":"<?php echo $list_products['product_price'];?>", "to":"29", "duration":800}
                                    ]'
                                 ><?php echo $list_products['product_price'];?></span>
                              <span class="mb-3 align-self-end h3 font-weight-light">/mo</span>
                           </div>
                           </div>

                           <p class="text-center text-muted font-weight-light">
                              montly billed
                           </p>

                        </div>

                        <div class="w-100 h--1 position-relative">
                           <svg class="mt--n70" width="100%" height="50" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
                              <path style="opacity:0.15" d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path>
                              <path style="opacity:0.3" d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path>
                              <path style="opacity:1" d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
                           </svg>
                        </div>


                        <div class="p--60 pb--40">
                           <div data-load-box="list_product_category_features/<?php echo  $list_products['product_id'].'/'.$product_category_details['category_id'];?>"></div>

                           <!-- <div class="d-flex mb-3">

                              <div class="badge badge-danger badge-soft badge-ico-sm rounded-circle float-start">
                                 <i class="fi fi-close"></i>
                              </div>

                              <p class="text-dark font-weight-light mb-0 pl--12 pr--12">
                                 Free updates included
                              </p>

                           </div>
 -->
                        </div>


                        <a href="#"
                        <?php $product_name = strtolower((str_replace(' ', '-', $list_products['product_name'])));?>
							data-href="<?php echo base_url();?>products/details/<?php echo $list_products['product_slug_url'];?>" 
							data-ajax-modal-size="modal-xl" 
							data-ajax-modal-centered="false" 
							data-ajax-modal-callback-function=""
							class="js-ajax-modal card-btn btn btn-block btn-lg btn-primary btn-soft shadow-none rounded-xl rounded-top-0">
								<i class="fi fi-cart-1"></i>
							Purchase
							</a>
                     </div>

                        </div>
                        <!-- /item -->
                        <?php
                     }
                  }
                     ?>

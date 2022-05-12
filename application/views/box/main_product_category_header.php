                    <?php
                    foreach ($main_category_header as $main_category_headers) {
                    ?>
                    
                          <li class="dropdown-item dropdown dropdown-mega">
                            <a href="#" class="dropdown-link" data-bs-toggle="dropdown" aria-expanded="false">
                              <?php echo $main_category_headers['category_name'];?>
                            </a>

                            <div class="dropdown-menu dropdown-menu-hover border border-light rounded-0">

                              <div class="row m-0 gutters-sm">

                                <div class="col">

                                  <div class="row gutters-sm">
                                 
                                    <ul class="col-12 mb-4 list-unstyle">
                                        <?php
                                          product_sub_category_header_helper($main_category_headers['product_category_id']);
                                          ?>
                                     
                                    </ul>



                                  </div>

                                </div>

                                <!-- 
                                  image, etc 
                                  just remove if not needed
                                -->
                                <div class="col-lg-7">
                                  <img class="img-fluid" src="<?php echo base_url().'assets/images/product/category/'.$main_category_headers['category_image'];?>" alt="...">
                                </div>

                              </div>

                            </div>
                          </li>

                          
                          <?php
                        }?>

                          <li class="dropdown-item mt-2">
                            <hr class="mx-2 my-0 bg-gray-500 opacity-25">
                            <a href="#" class="dropdown-link d-flex align-items-center py-3">
                              <i class="fi fi-menu-dots"></i>
                              <span>All categories</span>
                            </a>
                          </li>

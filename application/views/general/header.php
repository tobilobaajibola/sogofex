
      <!-- Header -->
      <header id="header" class="shadow-xs">


        <!-- Navbar -->
        <div class="container position-relative">

          <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

            <div class="align-items-start">

              <!-- mobile menu button : show -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="25" viewBox="0 0 20 20">
                  <path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
                  <path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
                  <path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
                  <path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
                </svg>
              </button>

              <!-- 
                Logo : height: 70px max
              -->
              <a class="navbar-brand m-0" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/images/logo/logo-default.png" width="110" height="38" alt="...">
              </a>

            </div>


            <!-- 

              [SOW] SEARCH SUGGEST PLUGIN
              ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++
              PLEASE READ DOCUMENTATION
              documentation/plugins-sow-search-suggest.html
              ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++

            -->
            <form action="#search-page"  
                method="GET" 
                data-autosuggest="on" 

                data-mode="json" 
                data-json-max-results="10" 
                data-json-related-title="Explore Smarty" 
                data-json-related-item-icon="fi fi-star-empty" 
                data-json-suggest-title="Suggestions for you" 
                data-json-suggest-noresult="No results for" 
                data-json-suggest-item-icon="fi fi-search" 
                data-json-suggest-min-score="5" 
                data-json-highlight-term='true' 
                data-contentType='application/json; charset=utf-8' 
                data-dataType='json' 

                data-container="#sow-search-container" 
                data-input-min-length="2" 
                data-input-delay="250" 
                data-related-keywords="" 
                data-related-url="_ajax/search_suggest_related.json" 
                data-suggest-url="_ajax/search_suggest_input.json" 
                data-related-action="related_get" 
                data-suggest-action="suggest_get" 
                class="js-ajax-search sow-search sow-search-mobile-float d-flex-1-1-auto m-0 mx-lg-5">
              <div class="sow-search-input w-100">

                <!-- rounded: form-control-pill -->
                <div class="input-group-over d-flex align-items-center w-100 h-100 rounded form-control-pill">

                  <input placeholder="what are you looking today?" aria-label="what are you looking today?" name="s" type="text" class="form-control-sow-search form-control" value="" autocomplete="off">

                  <span class="sow-search-buttons">

                    <!-- search button -->
                    <button aria-label="Global Search" type="submit" class="btn shadow-none m-0 px-3 py-2 bg-transparent text-muted">
                      <i class="fi fi-search fs-5 m-0"></i>
                    </button>

                    <!-- close : mobile only (d-inline-block d-lg-none) -->
                    <a href="javascript:;" class="btn-sow-search-toggler btn btn-light shadow-none m-0 p-2 d-inline-block d-lg-none">
                      <i class="fi fi-close fs-5 m-0"></i>
                    </a>

                  </span>

                </div>

              </div>

              <!-- search suggestion container -->
              <div class="sow-search-container w-100 p-0 hide shadow-md" id="sow-search-container">
                <div class="sow-search-container-wrapper">

                  <!-- main search container -->
                  <div class="sow-search-loader p-3 text-center hide">
                    <i class="fi fi-circle-spin fi-spin text-muted fs-1"></i>
                  </div>

                  <!-- 
                    AJAX CONTENT CONTAINER 
                    SHOULD ALWAYS BE AS IT IS : NO COMMENTS OR EVEN SPACES!
                  --><div class="sow-search-content rounded w-100 scrollable-vertical"></div>

                </div>
              </div>
              <!-- /search suggestion container -->

              <!-- 

                overlay combinations:
                  backdrop-dark
                  backdrop-light
                  overlay-dark opacity-* [1-9]
                  overlay-light opacity-* [1-9]

              -->
              <div class="sow-search-backdrop backdrop-dark hide"><!-- alternate: overlay-dark opacity-3 --></div>

            </form>
            <!-- /SEARCH -->


            <!-- OPTIONS -->
            <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

              <!-- mobile : search toggler -->
              <li class="list-inline-item mx-1 dropdown d-inline-block d-lg-none">

                <a href="#" aria-label="Search" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="btn-sow-search-toggler d-inline-block text-center text-dark">
                  <i class="fi fi-search fs-5"></i>
                  <span class="d-block small">search</span>
                </a>

              </li>

              <!-- my account -->
              <li class="list-inline-item mx-1 dropdown">
                <?php
                if (isset($_SESSION['seller_account'])){
                  ?>
                <a href="#" aria-label="My Account" id="dropdownAccountOptions" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="d-inline-block text-center text-dark">
                  <i class="fi fi-users fs-4"></i>
                  <span class="d-block small">account</span>
                </a>


                <!-- dropdown -->
                <div aria-labelledby="dropdownAccountOptions" class="list-unstyled dropdown-menu dropdown-menu-clean dropdown-click-ignore end-0 py-2 rounded-xl" style="min-width:215px;">

                  <div class="dropdown-header px-4 mb-1 text-wrap fw-medium"><?php echo $_SESSION['seller_account']['name'];?></div>
                  <div class="dropdown-divider mb-3"></div>
                  <a class="dropdown-item active" href="<?php echo base_url();?>admin">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>My account</span>
                  </a>
                  <a class="dropdown-item" href="<?php echo base_url();?>admin/product_list">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                      <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <span>My product</span>
                  </a>
                  <div class="dropdown-divider mt-3"></div>
                  <a href="<?php echo base_url();?>admin/logout" title="Log Out" class="dropdown-item mt-1">
                    <i class="fi fi-power float-start"></i>
                    Log Out
                  </a>
                </div>
                <?php
              }
              else{
                ?>
                 <a href="<?php echo base_url();?>admin" aria-label="My Account" class="d-inline-block text-center text-dark">
                  <i class="fi fi-users fs-4"></i>
                  <span class="d-block small">account</span>
                </a>

                <?php
              }
              ?>

              </li>



              <!-- cart -->
              <li class="list-inline-item mx-1 dropdown">
                
                <a href="#" aria-label="My Cart" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="d-inline-block text-center text-dark">
                  <span class="badge bg-warning text-dark position-absolute end-0 mt-n1 p-1"><?php
                              if (!empty ($this->cart->contents())){
                                 echo($this->cart->total_items());
                           }
                           else
                           {
                              echo 0;
                           }
                           ?></span>
                  <i class="fi fi-cart-1 fs-4"></i>
                  <span class="d-block small">my cart</span>
                </a>

                <!-- dropdown -->
                  <!-- dropdown -->
                        <div aria-labelledby="dropdownAccount" id="dropdownAccount" class="dropdown-menu dropdown-menu-clean dropdown-menu-invert dropdown-click-ignore mt-2 p-0 rounded-xl" style="width:300px"> 
                  <div class="dropdown-header p-3 fw-medium">Cart Products</div>  
                           <?php
                           if (empty ($this->cart->contents())){
                              ?>
                           
                           <div class="pt-5 pb-5 text-center bg-light">
                              Your cart is empty!
                           </div>
                           <?php
                        }
                        else{
                           ?>
                           <!-- item list -->
                           <div class="max-vh-50 scrollable-vertical">
                              <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $k=>$items): ?>
                              <!-- item -->
                              <div class="p-3 border-top border-light">

                                <!-- image -->
                                <div class="ratio ratio-1x1 float-start mt-1 bg-cover" 
                                  style="width:40px; background-image:url('<?php echo base_url();?>assets/images/product/<?php echo $items['options']['product_image'];?>')"> </div> 
                                <a href="#" class="small d-block link-normal">
                                  <span class="d-block text-truncate">
                                     <?php echo $items['qty']; ?> &times;  <?php echo $items['name']; ?>
                                  </span>
                                </a>

                                <span class="d-block small mt-1">N <?php echo $items['price']; ?></span>
                              </div>

                              
                           
                           

                <?php $i++; ?>

                <?php endforeach; ?>
                <?php
             }
             ?>
            </div>      
<!-- /item list -->
                           <?php
                           if (!empty ($this->cart->contents())){
                              ?>
                            <!-- subtotal -->
                  <div class="fs-6 text-align-start border-top border-light px-3 py-2">
                    Subtotal: <span class="float-end">N<?php echo $this->cart->format_number($this->cart->total()); ?></span>
                  </div>


                  <!-- go to cart button -->
                  <div class="border-top border-light p-3">
                    
                    <a href="<?php echo base_url();?>cart" class="btn btn-primary w-100">
                      <span>Go to Cart</span>
                      <i class="fi fi-arrow-end smaller"></i>
                    </a>

                  </div>

                 <?php
                        }
                        ?>
                  </div>


              </li>

            </ul>
            <!-- /OPTIONS -->

          </nav>

        </div>
        <!-- /Navbar -->


        <!-- line -->
        <!-- <hr class="m-0 bg-gray-500 opacity-25"> -->


        <!-- 

          HORIZONTAL NAVIGATION 

        -->
        <div class="bg-light">
          <div class="container">
            <nav class="navbar-horizontal navbar navbar-expand-lg navbar-light align-items-stretch justify-content-lg-between justify-content-md-inherit h-auto">


                <!-- 

                  HORIZONTAL NAVIGATION 
                  TRIGGER
                  
                  onpen on .navbar-toggler-horizontal click (default: hover)
                  .nav-horizontal-open-click

                  Classes involved in horizontal navigation:
                  nav-horizontal-*

                --> 
                <!-- verical : menu toggler -->
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation" 
                class="navbar-toggler navbar-toggler-horizontal w-auto bg-gradient bg-gray-900 text-white border-0 py-3 px-4 me-4 d-none d-lg-inline-flex align-items-center h-auto lh-1 mt-n2 rounded-top">
                  <span><svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path><path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path><path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path><path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path></svg></span>
                  <span class="ms-3">Categories</span>
                </button>


                <!-- Menu -->
                <div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


                  <!-- navbar : mobile menu -->
                  <div class="navbar-xs d-none"><!-- .sticky-top -->

                    <!-- mobile menu button : close -->
                    <button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                      <svg width="20" viewBox="0 0 20 20">
                        <path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
                      </svg>
                    </button>

<!-- navbar : brand (logo) : mobile -->
                    <a class="navbar-brand" href="index.html">
                      <img src="assets/images/logo/logo-default.png" width="110" height="38" alt="...">
                    </a>

                  </div>
                  <!-- /navbar : mobile menu -->


                  <ul class="navbar-nav h-auto">


                    <!-- 

                      1. HORIZONTAL NAVIGATION 

                    -->
                    <li class="dropdown nav-item nav-horizontal">


                      <!-- 

                        OVERLAY : REQUIRED
                        used to hide naviation on click/hover
                        remove .backdrop-dark for `no overlay`

                      -->
                      <span class="nav-horizontal-overlay backdrop-dark position-fixed top-0 bottom-0 left-0 right-0 d-none d-lg-block"></span>

                      <!-- 
                        
                        !!!

                        .bg-gray-900 = dark dropdown 

                      -->
                      <div class="nav-horizontal-container dropdown-menu dropdown-menu-clean bg-gray-900 show border-0 w-250 rounded-0 p-0">

                        <!-- 
                          
                          !!!

                          .text-white used because of .bg-gray-900
                          used because of dark drodown (first level only, without childs: .bg-gray-900) 

                        -->
                        <ul class="list-unstyled mt-2 text-white" data-load-box="product_main_category_header">

                          
    

                        </ul>

                      </div>

                    </li>
                    





                    <!-- 

                      2. REGULAR NAVIGATION 

                    -->
                    <!-- home -->
                    <li class="nav-item dropdown active">

                      <a href="#" id="mainNavHome" class="py-3 nav-link dropdown-toggle" 
                        data-bs-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false">
                        Main Site
                      </a>

                      <div aria-labelledby="mainNavHome" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover dropdown-mega-xl dropdown-fadeindown rounded-xl rounded-top-0 p-0 overflow-hidden">

                        <div class="row">

                          <!-- menu items -->
                          <div class="col-12 col-lg-7">

                            <!-- 
                              optional line column separator 
                              .col-border-lg 
                            -->
                            <div class="row col-border-lg">

                              <!-- title -->
                              <h3 class="col-12 py-3 mx-lg-4 mt-2 fs-6 fw-bold">Coporate Site</h3>

                              <!-- col 1 -->
                              <div class="col-12 col-lg-6">
                                <ul class="list-unstyled">
                                  <li class="dropdown-item"><a href="<?php echo base_url();?>about" class="dropdown-link">About</a></li>
                                  <li class="dropdown-item"><a href="<?php echo base_url();?>services" class="dropdown-link">Services</a></li>
                                  <li class="dropdown-item"><a href="<?php echo base_url();?>contact" class="dropdown-link">Contact</a></li>
                                  <li class="dropdown-item"><a href="<?php echo base_url();?>media" class="dropdown-link">Media</a></li>
                                 
                                </ul>
                              </div>

                           

                              <!-- col 3 -->
                              <ul class="col-12 list-unstyled pt-3">
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item pt-1 pb-2">
                                  <a href="index.html#ecommerce" class="dropdown-link text-muted d-flex align-items-center">
                                    <span class="pe-2">Social Media</span>
                                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">  
                                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg>
                                  </a>
                                </li>
                              </ul>

                            </div>

                          </div>

                          <!-- image -->
                          <div class="col px-3 py-5 bg-cover position-relative overlay-dark overlay-opacity-4 text-white d-flex flex-column align-items-center justify-content-center" 
                          style="background-image: url(demo.files/images/unsplash/portfolio/thumb_330/boxed-water-is-better-LWagu5WepHU-unsplash-min.jpg);">
                            
                            <img src="assets/images/logo/logo-default.png" width="110" height="38" alt="...">
                            <p class="m-0">Sogofex Ecommerce</p>

                          </div>

                        </div>

                      </div>

                    </li>

                    <li class="nav-item active">
                      <a href="<?php echo base_url();?>product" class="py-3 nav-link">
                        Products
                      </a>
                    </li>

                    <li class="nav-item active">
                      <a href="#" class="py-3 nav-link">
                        Contact
                      </a>
                    </li>


                  </ul>

                </div>

            </nav>
          </div>
        </div>

      </header>
      <!-- /Header -->

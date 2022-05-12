

			<!-- PRODUCT -->
			<div class="bg-gray-200 py-5">
				<div class="container">

					<!-- breadcrumb -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb small">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Category</a></li>
						</ol>
					</nav>
					<!-- /breadcrumb -->

					<h1 class="h2 fw-bold mb-5">
						<?php echo $product_detail['product_name'];?>
					</h1>


					<div class="row">

						<!-- images -->
						<div class="col-lg-7 order-1 mb-5">

							<!--
								Thumbnails are initialized first!
								Order changed using .order-* classes
							-->
							<div class="card p-1 h-100">
								<div class="row">

									<!-- thumbnail slider -->
									<div class="col-12 order-2">

										<div id="swiper_secondary" class="swiper-container swiper-thumbs mt-3"
											data-swiper='{
												"slidesPerView": 3,
												"spaceBetween": 3,
												"autoplay": false,
												"loop": false,
												"zoom": false,
												"effect": "slide",
												"pagination": null,
												"watchSlidesVisibility": true,
			      								"watchSlidesProgress": true,
			      								"loopedSlides": 1,
			      								"thumbs": { 
			      									"slideThumbActiveClass": "bg-light" 
			      								},
												"breakpoints": {
													"768": 	{ "slidesPerView": "5" }
												}
											}'>

											<div class="swiper-wrapper text-center">

	                      <!-- slider 1 -->
	                      <div class="swiper-slide p-2 rounded cursor-pointer">
	                        <img height="80" class="bg-suprime rounded" 
	                          src="<?php echo base_url();?>assets/images/product/<?php echo $product_detail['product_image'];?>" 
	                          alt="...">
	                      </div>
	                      <?php
	                      foreach ($product_image as $product_images) {
	                      	?>
	                     
	                      <!-- slider 2 -->
	                      <div class="swiper-slide p-2 rounded cursor-pointer">
	                        <img height="80" class="bg-suprime rounded" 
	                          src="<?php echo base_url();?>demo.files/images/various/product/speakers/thumb/1_2-min.jpg" 
	                          alt="...">
	                      </div>
 							<?php 
 							}
 							?>
	                     

											</div>

										</div>

									</div>
									<!-- /thumbnail slider (hidden on mobile) -->


									<!-- primary slider -->
									<div class="col-12 order-1">


										<!-- 

											.swiper-white 		= white buttons. (swiper-primary, swiper-danger, etc)

											By default, Smarty controller will reconfigure swiper if -only- one image detected:
												- remove arrows
												- remove progress/bullets
												- disable loop
											Add .js-ignore class to skip, if for some reason is needed!

										-->
										<div id="swiper_primary" class="swiper-container swiper-preloader swiper-white mx-auto"
											data-swiper-link="swiper_secondary" 
											data-swiper='{
												"slidesPerView": 1,
												"spaceBetween": 0,
												"autoplay": false,
												"loop": true,
												"zoom": true,
												"effect": "slide",
												"loopedSlides": 1,
												"breakpoints": {
													"920": 	{ "slidesPerView": "1" }
												}
											}'>

											<!--
												
												NOTE: only the first image is NOT using lazy loading (to avoid 'jumping')
												lazy is optional but recommended: ~80% of visitors don't slide through images!

												Images are using srcset for responsiveness!

											-->
											<div class="swiper-wrapper text-center">

												<!-- slider 1 -->
												<div class="swiper-slide">
													<div class="swiper-zoom-container">
														<img class="overflow-hidden bg-cover rounded" 

															sizes="(max-width: 768px) 100vw"
															srcset="
																	<?php echo base_url();?>assets/images/product/<?php echo $product_detail['product_image'];?>
															"
															src="<?php echo base_url();?>assets/images/product/<?php echo $product_detail['product_image'];?>" 
															alt="..." style="max-height: 600px;">
													</div>
												</div>
												<?php
												foreach($product_image as $product_image){
													?>
												<!-- slider 2 -->
												<div class="swiper-slide">
													<div class="swiper-zoom-container">
														<img class="lazy bg-suprime img-fluid rounded" 

															sizes="(max-width: 768px) 100vw"
															srcset="
																	<?php echo base_url();?>demo.files/images/various/product/speakers/1_2-min.jpg 1200w,
																	<?php echo base_url();?>demo.files/images/various/product/speakers/thumb/1_2-min.jpg 768w
															"

															data-src="<?php echo base_url();?>demo.files/images/various/product/speakers/1_2-min.jpg" 
															src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
															alt="..." style="max-height: 600px;">
													</div>
												</div>
											<?php } ?>
											
											</div>

											<!-- Left|Right Arrows -->
											<div class="swiper-button-next rounded-circle shadow-xs d-none d-md-block"></div>
											<div class="swiper-button-prev rounded-circle shadow-xs d-none d-md-block"></div>

										</div>
										<!-- /primary slider -->

									</div>

								</div>
							</div>

						</div>

						<!-- options -->
						<div class="col-lg-5 order-2 mb-5">

							<form novalidate class="card p-4 p-xl-5 h-100 bs-validate"  onsubmit="form_submitter('#addtocart', '<?php echo base_url();?>carts/addtocart' );return false" id="addtocart" data-error-scroll-up="true">
 <!-- <form class="collapse bs-validate show" novalidate method="post" action="<?php echo base_url();?>carts/addtocart"> -->
								
								<input type="hidden" name="product_id" value="<?php echo $product_detail['product_id'];?>">
								
		            <!-- price -->
		            <div class="mb-4">
		              <!-- <p class="mb-0 text-muted text-uppercase">SKU: RX-078R99</p> -->
		              <h3 class="mb-0 d-inline-grid gap-auto-3">
		                <del class="fw-normal text-muted"><?php if ($product_detail['discount_price'] > 0) {echo 'N'.$product_detail['product_price'];}?></del>
		                <span class="fw-bold text-indigo"><?php if ($product_detail['discount_price'] > 0) {echo 'N'.$product_detail['discount_price'];}else{echo 'N'.$product_detail['product_price'];}?></span>
		              </h3>
		            </div>



		            <!-- shipping/return -->
		            <div class="accordion border border-light bg-white rounded mb-4" id="accordion-product">
		            	
		            
		              
		              <hr class="my-0 bg-gray-300">
		              
		              <!-- return -->
		              <div class="accordion-item shadow-none border-0">
		                <h2 class="accordion-header" id="accordion-product-2">
		                  <button class="accordion-button  border-0" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-product-collapse-2" aria-expanded="false" aria-controls="accordion-product-collapse-2">
		                    <svg class="text-gray-500" width="2.3rem" xmlns="http://www.w3.org/2000/svg" viewBox="-21 -21 682.66714 682" fill="currentColor">
		                      <path d="M445.258 572.344c-4.07-9.844-15.352-14.516-25.188-10.445-9.84 4.074-14.52 15.352-10.441 25.195l12.309 29.742c4.074 9.844 15.359 14.512 25.191 10.438 9.84-4.07 14.516-15.352 10.445-25.188zm0 0M194.742 68.32c3.074 7.426 10.258 11.914 17.82 11.914 13.684 0 23.074-13.949 17.813-26.664l-12.313-29.742c-4.074-9.84-15.352-14.512-25.191-10.438-9.84 4.07-14.516 15.352-10.438 25.188zm0 0M420.07 78.762c9.848 4.074 21.121-.605 25.188-10.441l12.316-29.742c4.07-9.836-.605-21.117-10.445-25.188-9.84-4.078-21.117.598-25.191 10.438l-12.309 29.742c-4.078 9.84.602 21.117 10.441 25.191zm0 0M219.934 561.898c-9.84-4.07-21.121.602-25.191 10.445l-12.316 29.742c-4.07 9.836.605 21.117 10.445 25.188 9.84 4.078 21.117-.605 25.191-10.438l12.309-29.742c4.078-9.844-.594-21.117-10.438-25.195zm0 0M613.309 420.961l-26.535-11c-9.84-4.078-21.121.59-25.195 10.43-4.082 9.84.59 21.117 10.422 25.195l26.539 11c9.855 4.082 21.125-.602 25.199-10.43 4.078-9.832-.59-21.117-10.43-25.195zm0 0M26.691 219.703l26.543 11c9.844 4.078 21.117-.602 25.195-10.43 4.074-9.84-.594-21.117-10.43-25.195l-26.543-11c-9.836-4.078-21.121.59-25.195 10.43-4.078 9.832.59 21.117 10.43 25.195zm0 0M586.773 230.703l26.535-11c9.836-4.078 14.508-15.363 10.426-25.195-4.078-9.84-15.355-14.508-25.195-10.43l-26.539 11c-9.836 4.078-14.504 15.355-10.43 25.195 4.082 9.84 15.363 14.508 25.203 10.43zm0 0M53.234 409.961l-26.543 11c-9.84 4.078-14.508 15.355-10.43 25.195 4.082 9.84 15.359 14.508 25.199 10.43l26.539-11c9.836-4.078 14.504-15.355 10.43-25.195-4.082-9.836-15.359-14.508-25.195-10.43zm0 0M338.305 275.043v-48.793c0-9.652-3.559-13.77-11.918-13.77-8.223 0-11.734 4.117-11.734 13.77v48.793c0 9.645 3.512 13.754 11.734 13.754 8.359 0 11.918-4.109 11.918-13.754zm0 0M190.41 424.969v-37.316c0-7.441-2.867-10.773-9.316-10.773h-9.18v58.848h9.18c6.449 0 9.316-3.316 9.316-10.758zm0 0M363.422 415.844h11.504l-5.742-21.109zm0 0M632.918 305.41l-93.113-76.129 12.016-119.66c1.215-12.121-8.988-22.324-21.109-21.109l-119.66 12.016-76.125-93.113c-7.754-9.5-22.219-9.383-29.848 0l-76.129 93.113-119.66-12.016c-12.121-1.215-22.324 8.988-21.109 21.109l12.016 119.66-93.113 76.129c-9.441 7.676-9.445 22.164 0 29.848l93.113 76.125-12.016 119.66c-1.215 12.121 8.988 22.324 21.109 21.109l119.66-12.016 76.129 93.113c7.641 9.402 22.105 9.484 29.848 0l76.125-93.113 119.66 12.016c12.121 1.215 22.324-8.988 21.109-21.109l-12.016-119.66 93.113-76.125c9.441-7.68 9.445-22.168 0-29.848zm-247.047 150.465l-4.207-15.457h-24.832l-4.164 15.324c-4.18 13.359-31.961 5.273-28.516-8.473l26.84-88.051c4.09-13.32 32.176-13.613 36.352-.016h.016l26.941 87.891c3.496 14.074-24.344 21.906-28.43 8.781zm-100.527-61.926c13.742 0 13.973 24.566 0 24.566h-17.969v17.211h34.973c13.961 0 13.836 26.879 0 26.879h-51.297c-6.469 0-13.438-3.301-13.438-10.551v-91.488c0-7.262 6.969-10.566 13.438-10.566h51.297c14.117 0 13.73 26.879 0 26.879h-34.973v17.07zm-129.754-43.949h25.504c25.207 0 39.094 13.367 39.094 37.652v37.316c0 24.27-13.887 37.637-39.094 37.637h-25.504c-8.816 0-13.438-5.227-13.438-10.41v-91.781c0-5.172 4.621-10.414 13.438-10.414zm68-41.441v-45.25h-27.328v45.25c0 18.008-38.039 17.992-38.039 0v-117.117c0-17.715 38.039-17.934 38.039 0v40.461h27.328v-40.461c0-17.715 38.035-17.973 38.035 0v117.117c0 18.109-38.035 17.813-38.035 0zm53.027-33.516v-48.793c0-31.031 17.676-48.113 49.77-48.113 32.219 0 49.957 17.082 49.957 48.113v48.793c0 31.02-17.738 48.117-49.957 48.117-32.094 0-49.77-17.098-49.77-48.117zm117.543-96.906h79.547c17.855 0 17.75 35.09 0 35.09h-20.762v95.332c0 17.988-38.039 18.008-38.039 0v-95.332h-20.746c-17.699 0-17.887-35.09 0-35.09zm93.516 257.59c13.566 0 13.551 26.879 0 26.879h-45.516c-6.48 0-13.449-3.301-13.449-10.551v-91.641c0-13.871 29.762-14.027 29.762 0v75.313zm0 0"></path>
		                    </svg>
		                    <span class="d-inline-block px-3">Description</span>
		                  </button>
		                </h2>
		                <div id="accordion-product-collapse-2" class="accordion-collapse  border-0" aria-labelledby="accordion-product-2" data-bs-parent="#accordion-product">
		                  <p class="accordion-body mb-0 py-2">
		                    <?php echo $product_detail['product_description'];?>
		                  </p>
		                </div>
		              </div>
		              <!-- /return -->

		            </div>


								<!-- add to cart -->
								<div class="py-3 d-lg-flex">

									<div class="w-100 d-flex mb-2 mb-lg-0">
										<!-- quantity -->
			              <div class="d-grid w-100 mx-2">
			              <a href="https://tcp.sogofextrade.com/tcp/login" target="_blank" class="btn btn-lg btn-success flex-none">Buy Now </a>
			                <!-- <button type="submit" class="btn btn-lg btn-success flex-none">Buy Now</button> -->
			              
			              </div> 
			              <!-- add to cart button -->
			              <!-- will be enabled when integration with TCP is complete -->
			              <!-- <div class="d-grid w-100 mx-2">
			                <button type="submit" class="btn btn-lg btn-primary flex-none">Add to cart</button>
			              </div> -->
		              </div>

		        

		            </div>
		            <!-- /add to cart -->
		            <div class="py-3">
		            	<div id="alert_success" class="alert alert-success mb-30" style="display: none;">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

				</div><!-- /Alert Success -->
				<!-- Alert Failed -->
				<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					
				</div> 
		            </div>

		            <!-- help -->
								<div class="py-3 text-end">
		              <p class="d-inline-grid gap-auto-3">
		                <span class="text-gray-600">
		                  Need help? <a href="#!" class="link-secondary text-dashed">Chat with us</a>
		                </span>
		                <svg class="text-gray-500" height="28px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.052 512.052" fill="currentColor">
		                  <path d="M208.026,16.026c-114.7,0-208,78.9-208,176c0,39.8,15.7,77.9,44.5,108.9l-39.8,39.8c-4.6,4.6-6,11.5-3.5,17.4c2.5,6,8.3,9.9,14.8,9.9h192c114.7,0,208-78.9,208-176S322.726,16.026,208.026,16.026z"></path>
		                  <path opacity="0.5" d="M467.526,428.926c28.8-30.9,44.5-69.1,44.5-108.9c0-49.8-24.6-94.9-64-126.9c-0.9,114.1-108.2,206.9-240,206.9h-89.2c34.5,56.9,104.6,96,185.2,96h192c6.5,0,12.3-3.9,14.8-9.9c2.5-6,1.1-12.9-3.5-17.4L467.526,428.926z"></path>
		                  <path fill="#ffffff" d="M304.026,144.026h-192c-8.8,0-16,7.2-16,16s7.2,16,16,16h192c8.8,0,16-7.2,16-16S312.826,144.026,304.026,144.026z"></path>
		                  <path fill="#ffffff" d="M240.026,208.026h-128c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S248.826,208.026,240.026,208.026z"></path>
		                </svg>
		              </p>
		            </div>
		            <!-- /help -->


							</form>

						</div>

					</div>

				</div>
			</div>
			<!-- /PRODUCT -->





			<!-- DESCRIPTION + SEPCIFICATIONS -->
			<div class="section">
				<div class="container">

					<h2 class="fw-bold">
						Other Products by seller
					</h2>

					<!-- 

						SWIPER SLIDER 

					-->
					<div class="swiper-container"
						data-swiper='{
							"slidesPerView": 5,
							"spaceBetween": 10,
							"autoplay": false,
							"loop": true,
							"pagination": { "type": "bullets" },
							"breakpoints": {
								"1200": { "slidesPerView": "4" },
								"1024": { "slidesPerView": "3" },
								"0": 	{ "slidesPerView": "2" }
							}
						}'>

						<!--
							
							NOTE: do not use lazy when loop is true!

						-->
						<div class="swiper-wrapper">
							<?php
							foreach ($product_by_seller as $products_by_seller) {
							?>
							
							<!-- slider 1 -->
							<div class="swiper-slide">

								<div class="bg-white shadow-xs transition-all-ease-250 transition-hover-top rounded p-2 my-5">

									<a href="<?php echo base_url();?>products/details/<?php echo $products_by_seller['product_slug_url'];?>" class="text-decoration-none">

									
										<figure class="py-5 px-2 m-0 text-center bg-gradient-radial-light rounded-top">
											<img src="<?php echo base_url();?>assets/images/product/<?php echo $products_by_seller['product_image'];?>" alt="..." class="img-fluid bg-suprime"> 
										</figure>
										<div class="text-center-xs text-gray-600 py-3">
											
											<!-- .max-height-80  = limited to 2 rows of text -->
											<span class="d-block fs-6 max-h-50 overflow-hidden">
												<?php echo  $products_by_seller['product_name'];?>
											</span>

											<span class="d-block text-danger fw-medium fs-6 mt-2">

												<del class="text-muted"><?php echo  $products_by_seller['product_price'];?></del> 

												$173<sup>00</sup>
											</span>

										</div>

									</a>

								</div>

							</div>

							<?php
						}?>

						</div>


						<!-- Bullets -->
						<div class="swiper-pagination"></div>

					</div>
					<!-- /SWIPER SLIDER -->


				</div>
			</div>
			<!-- /DESCRIPTION + SEPCIFICATIONS -->





	 

			<!-- INFO BOX -->
			<div class="bg-gray-200">
        <div class="container py-3">

          <div class="row g-4">

            <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

              <img width="60" height="60" class="lazy" data-src="<?php echo base_url();?>demo.files/svg/ecommerce/money_bag.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
              <div class="ps-3">
                <h3 class="fs-5 mb-1">Money Back</h3>
                <p class="m-0">Love it! Use it! Reuse it!</p>
              </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

              <img width="60" height="60" class="lazy" data-src="<?php echo base_url();?>demo.files/svg/ecommerce/free-delivery-truck.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
              <div class="ps-3">
                <h3 class="fs-5 mb-1">Free Shipping</h3>
                <p class="m-0">Shipping is on us</p>
              </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

              <img width="60" height="60" class="lazy" data-src="<?php echo base_url();?>demo.files/svg/ecommerce/24-hours-phone-service.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
              <div class="ps-3">
                <h3 class="fs-5 mb-1">Free Support</h3>
                <p class="m-0">24/24 available</p>
              </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

              <!-- link example -->
              <a href="#" class="text-dark text-decoration-none d-flex">

                <img width="60" height="60" class="lazy" data-src="<?php echo base_url();?>demo.files/svg/ecommerce/handshake.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                <div class="ps-3">
                  <h3 class="fs-5 mb-1">Best Deal</h3>
                  <p class="m-0">Quality guaranteed</p>
                </div>

              </a>

            </div>

          </div>

        </div>
			</div>
			<!-- /INFO BOX -->


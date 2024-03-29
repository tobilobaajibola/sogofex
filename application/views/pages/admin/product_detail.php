

			<!-- PRODUCT -->
			<div class="bg-gray-200 py-1">
				<div class="container">

				
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
	                          src="demo.files/images/various/product/speakers/thumb/1_2-min.jpg" 
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
														<img class="bg-suprime img-fluid rounded" 

															sizes="(max-width: 768px) 100vw"
															srcset="
																	<?php echo base_url();?>assets/images/product/<?php echo $product_detail['product_image'];?>,
																	demo.files/images/various/product/speakers/thumb/1-min.jpg 768w
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
																	demo.files/images/various/product/speakers/1_2-min.jpg 1200w,
																	demo.files/images/various/product/speakers/thumb/1_2-min.jpg 768w
															"

															data-src="demo.files/images/various/product/speakers/1_2-min.jpg" 
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

							
 								
		            <!-- price -->
		            <div class="mb-4">
		              <p class="mb-0 text-muted text-uppercase">SKU: RX-078R99</p>
		              <h3 class="mb-0 d-inline-grid gap-auto-3">
		                <del class="fw-normal text-muted">168.99</del>
		                <span class="fw-bold text-indigo">$128.99</span>
		              </h3>
		            </div>


		        
		            <!-- shipping/return -->
		            <div class="accordion border border-light bg-white rounded mb-4" id="accordion-product">
		            	
		            	<!-- shipping -->
		              <div class="accordion-item shadow-none border-0">
		                <h2 class="accordion-header" id="accordion-product-1">
		                  <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-product-collapse-1" aria-expanded="false" aria-controls="accordion-product-collapse-1">
		                    <svg class="text-gray-500" width="2.3rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612" fill="currentColor">
		                      <path d="M612 338.19v55.625c0 13.877-11.249 25.125-25.126 25.125h-26.885c-4.857-33.332-33.585-58.961-68.259-58.961-34.59 0-63.317 25.629-68.175 58.961h-228.393c-4.857-33.332-33.585-58.961-68.175-58.961s-63.318 25.629-68.175 58.961h-33.669c-13.876 0-25.125-11.248-25.125-25.125v-55.625h611.982zm-438.933-134.232h-14.313l-5.259 27.155h13.945c9.292 0 16.996-6.363 16.996-17.004 0-6.478-4.277-10.151-11.369-10.151zm370.825 224.949c0 28.729-23.367 52.094-52.095 52.094-28.811 0-52.178-23.367-52.178-52.094 0-28.811 23.367-52.178 52.178-52.178 28.727 0 52.095 23.368 52.095 52.178zm-26.047 0c0-14.404-11.726-26.047-26.047-26.047-14.405 0-26.048 11.643-26.048 26.047 0 14.322 11.643 26.049 26.048 26.049 14.321 0 26.047-11.727 26.047-26.049zm-338.782 0c0 28.729-23.283 52.094-52.094 52.094s-52.094-23.367-52.094-52.094c0-28.811 23.284-52.178 52.094-52.178s52.094 23.368 52.094 52.178zm-26.046 0c0-14.404-11.642-26.047-26.046-26.047-14.406 0-26.047 11.643-26.047 26.047 0 14.322 11.642 26.049 26.047 26.049 14.404 0 26.046-11.727 26.046-26.049zm458.965-104.605h-611.982v-168.177c0-13.903 11.307-25.125 25.125-25.125h379.736c13.903 0 25.126 11.223 25.126 25.125v18.678h49.833c8.794 0 17.253 3.518 23.534 9.715l98.745 97.656c6.281 6.282 9.883 14.824 9.883 23.786v18.342zm-522.798-95.757l4.646-24.586h34.245l2.568-13.577h-49.777l-16.881 86.837h15.655l6.854-35.104h28.863l2.568-13.569h-28.741zm91.588 12.104v-.246c13.086-4.278 19.81-17.118 19.81-28.986 0-8.923-4.4-15.655-11.745-18.837-3.541-1.586-7.828-2.2-12.473-2.2h-30.696l-16.874 86.836h15.769l6.241-32.413h15.655l11.009 32.413h16.874l-11.614-32.168c-1.105-3.172-1.956-4.399-1.956-4.399zm96.341-50.268h-51.854l-16.996 86.837h53.932l2.568-13.577h-38.155l4.523-23.359h29.231l2.691-13.577h-29.231l4.4-22.746h36.201l2.69-13.578zm70.061 0h-51.855l-16.996 86.837h53.933l2.567-13.577h-38.155l4.523-23.359h29.231l2.691-13.577h-29.232l4.401-22.746h36.2l2.692-13.578zm214.557 88.274l-77.305-73.787c-.754-.669-1.759-1.088-2.764-1.088h-18.174c-2.178 0-3.937 1.759-3.937 3.937v73.787c0 2.178 1.759 3.936 3.937 3.936h95.562c3.518-.001 5.277-4.356 2.681-6.785z"></path>
		                    </svg>
		                    <span class="d-inline-block px-3">Free shipping</span>
		                  </button>
		                </h2>
		                <div id="accordion-product-collapse-1" class="accordion-collapse collapse border-0" aria-labelledby="accordion-product-1" data-bs-parent="#accordion-product">
		                  <p class="accordion-body mb-0 py-3">
		                    We offer free shipping to all orders over $30, anywhere in USA.
		                  </p>
		                </div>
		              </div>
		              <!-- /shipping -->
		              
		              <hr class="my-0 bg-gray-300">
		              
		              <!-- return -->
		              <div class="accordion-item shadow-none border-0">
		                <h2 class="accordion-header" id="accordion-product-2">
		                  <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-product-collapse-2" aria-expanded="false" aria-controls="accordion-product-collapse-2">
		                    <svg class="text-gray-500" width="2.3rem" xmlns="http://www.w3.org/2000/svg" viewBox="-21 -21 682.66714 682" fill="currentColor">
		                      <path d="M445.258 572.344c-4.07-9.844-15.352-14.516-25.188-10.445-9.84 4.074-14.52 15.352-10.441 25.195l12.309 29.742c4.074 9.844 15.359 14.512 25.191 10.438 9.84-4.07 14.516-15.352 10.445-25.188zm0 0M194.742 68.32c3.074 7.426 10.258 11.914 17.82 11.914 13.684 0 23.074-13.949 17.813-26.664l-12.313-29.742c-4.074-9.84-15.352-14.512-25.191-10.438-9.84 4.07-14.516 15.352-10.438 25.188zm0 0M420.07 78.762c9.848 4.074 21.121-.605 25.188-10.441l12.316-29.742c4.07-9.836-.605-21.117-10.445-25.188-9.84-4.078-21.117.598-25.191 10.438l-12.309 29.742c-4.078 9.84.602 21.117 10.441 25.191zm0 0M219.934 561.898c-9.84-4.07-21.121.602-25.191 10.445l-12.316 29.742c-4.07 9.836.605 21.117 10.445 25.188 9.84 4.078 21.117-.605 25.191-10.438l12.309-29.742c4.078-9.844-.594-21.117-10.438-25.195zm0 0M613.309 420.961l-26.535-11c-9.84-4.078-21.121.59-25.195 10.43-4.082 9.84.59 21.117 10.422 25.195l26.539 11c9.855 4.082 21.125-.602 25.199-10.43 4.078-9.832-.59-21.117-10.43-25.195zm0 0M26.691 219.703l26.543 11c9.844 4.078 21.117-.602 25.195-10.43 4.074-9.84-.594-21.117-10.43-25.195l-26.543-11c-9.836-4.078-21.121.59-25.195 10.43-4.078 9.832.59 21.117 10.43 25.195zm0 0M586.773 230.703l26.535-11c9.836-4.078 14.508-15.363 10.426-25.195-4.078-9.84-15.355-14.508-25.195-10.43l-26.539 11c-9.836 4.078-14.504 15.355-10.43 25.195 4.082 9.84 15.363 14.508 25.203 10.43zm0 0M53.234 409.961l-26.543 11c-9.84 4.078-14.508 15.355-10.43 25.195 4.082 9.84 15.359 14.508 25.199 10.43l26.539-11c9.836-4.078 14.504-15.355 10.43-25.195-4.082-9.836-15.359-14.508-25.195-10.43zm0 0M338.305 275.043v-48.793c0-9.652-3.559-13.77-11.918-13.77-8.223 0-11.734 4.117-11.734 13.77v48.793c0 9.645 3.512 13.754 11.734 13.754 8.359 0 11.918-4.109 11.918-13.754zm0 0M190.41 424.969v-37.316c0-7.441-2.867-10.773-9.316-10.773h-9.18v58.848h9.18c6.449 0 9.316-3.316 9.316-10.758zm0 0M363.422 415.844h11.504l-5.742-21.109zm0 0M632.918 305.41l-93.113-76.129 12.016-119.66c1.215-12.121-8.988-22.324-21.109-21.109l-119.66 12.016-76.125-93.113c-7.754-9.5-22.219-9.383-29.848 0l-76.129 93.113-119.66-12.016c-12.121-1.215-22.324 8.988-21.109 21.109l12.016 119.66-93.113 76.129c-9.441 7.676-9.445 22.164 0 29.848l93.113 76.125-12.016 119.66c-1.215 12.121 8.988 22.324 21.109 21.109l119.66-12.016 76.129 93.113c7.641 9.402 22.105 9.484 29.848 0l76.125-93.113 119.66 12.016c12.121 1.215 22.324-8.988 21.109-21.109l-12.016-119.66 93.113-76.125c9.441-7.68 9.445-22.168 0-29.848zm-247.047 150.465l-4.207-15.457h-24.832l-4.164 15.324c-4.18 13.359-31.961 5.273-28.516-8.473l26.84-88.051c4.09-13.32 32.176-13.613 36.352-.016h.016l26.941 87.891c3.496 14.074-24.344 21.906-28.43 8.781zm-100.527-61.926c13.742 0 13.973 24.566 0 24.566h-17.969v17.211h34.973c13.961 0 13.836 26.879 0 26.879h-51.297c-6.469 0-13.438-3.301-13.438-10.551v-91.488c0-7.262 6.969-10.566 13.438-10.566h51.297c14.117 0 13.73 26.879 0 26.879h-34.973v17.07zm-129.754-43.949h25.504c25.207 0 39.094 13.367 39.094 37.652v37.316c0 24.27-13.887 37.637-39.094 37.637h-25.504c-8.816 0-13.438-5.227-13.438-10.41v-91.781c0-5.172 4.621-10.414 13.438-10.414zm68-41.441v-45.25h-27.328v45.25c0 18.008-38.039 17.992-38.039 0v-117.117c0-17.715 38.039-17.934 38.039 0v40.461h27.328v-40.461c0-17.715 38.035-17.973 38.035 0v117.117c0 18.109-38.035 17.813-38.035 0zm53.027-33.516v-48.793c0-31.031 17.676-48.113 49.77-48.113 32.219 0 49.957 17.082 49.957 48.113v48.793c0 31.02-17.738 48.117-49.957 48.117-32.094 0-49.77-17.098-49.77-48.117zm117.543-96.906h79.547c17.855 0 17.75 35.09 0 35.09h-20.762v95.332c0 17.988-38.039 18.008-38.039 0v-95.332h-20.746c-17.699 0-17.887-35.09 0-35.09zm93.516 257.59c13.566 0 13.551 26.879 0 26.879h-45.516c-6.48 0-13.449-3.301-13.449-10.551v-91.641c0-13.871 29.762-14.027 29.762 0v75.313zm0 0"></path>
		                    </svg>
		                    <span class="d-inline-block px-3">Description</span>
		                  </button>
		                </h2>
		                <div id="accordion-product-collapse-2" class="accordion-collapse collapse border-0" aria-labelledby="accordion-product-2" data-bs-parent="#accordion-product">
		                 <?php echo $product_detail['product_description'];?>
		                </div>
		              </div>
		              <!-- /return -->

		            </div>


								<!-- add to cart -->
								<div class="py-3 d-lg-flex">

									<div class="w-100 d-flex mb-2 mb-lg-0">
										<!-- quantity -->
			              <div class="d-grid w-100 mx-2">
			                <button type="submit" class="btn btn-lg btn-success flex-none">GO TO LINK</button>
			              </div> 
			              <!-- add to cart button -->
			              <div class="d-grid w-100 mx-2">
			                <a href="<?php echo base_url().'admin/product/edit/'.$product_detail['product_slug_url'];?>"> <button type="submit" class="btn btn-lg btn-primary flex-none">EDIT PRODUCT</button></a>
			              </div>
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



						</div>

					</div>

				</div>
			</div>
			<!-- /PRODUCT -->





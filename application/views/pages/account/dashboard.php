<!-- PAGE TITLE -->
			<section class="bg-light p-0">
				<div class="container py-2">

					<h1 class="h3">
						My Dashboard
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="#!">Home</a></li>
							<li class="breadcrumb-item active"><a href="#!">Dashboard</a></li>
						</ol>
					</nav>

				</div>
			</section>
			<!-- /PAGE TITLE -->



			<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<!-- WIDGET : IMPORTS -->
						<div class="col-12 col-xl-4 mb-3">
							<div class="portlet">
								<!-- <div class="row text-center p-4">
						<label class="w--120 h--120 rounded-circle text-center position-relative d-inline-block cursor-pointer border border-secondary border-dashed bg-white">

						<span class="z-index-2 js-file-input-avatar-ajax-circle-container-preadded d-block absolute-full z-index-1">
						<span 	style="background-image:url('demo.files/images/unsplash/team/thumb_330/michael-dam-mEZ3PoFGs_k-unsplash.jpg')" 
								class="js-file-input-item d-inline-block position-relative overflow-hidden text-center rounded-circle m-0 p-0 animate-bouncein bg-cover img-fluid w-100 h-100">
						</span>
					</span>
				</label>
					</div> -->


								<!-- <div class="portlet-header">

										<button type="button" class="btn btn-primary">
										Subscription  <span class="badge badge-light">4</span>
										</button>
									
										<button type="button" class="btn btn-danger">
										Orders  <span class="badge badge-light">4</span>
										</button>
									
								</div> -->


								<!-- content loaded via ajax! -->
								<div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">
         							<?php $this->load->view('box/account_side_nav');?>

									<!-- <?php 
									foreach ($list_subscription as $list_subscriptions) {
										?>
									<div class="d-flex align-items-center p-3 border-bottom border-light">

										<div class="flex-none w--50">
											<img width="40" height="40" class="img-fluid lazy" data-src="../../html_frontend/demo.files/svg/icons/files/csv.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
										</div>

										<div class="flex-fill text-truncate px-3">
											<span class="text-muted"><?php echo $list_subscriptions['product_name'];?></span>
											<span class="fs--13 d-block text-gray-500"><?php echo $list_subscriptions['start_date'] .' - '.$list_subscriptions['end_date'];?></span>
										</div>

										

									</div>
									<?php
								}
								?> -->

								</div>

								<!-- <div class="d-flex align-self-baseline w-100 py-2">
									<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
										<i class="fi fi-arrow-end-slim"></i>
										<span>View All</span>
									</a>
								</div> -->

							</div>

						</div>
						<!-- /WIDGET : IMPORTS -->



						<!-- WIDGET : ORDERS -->
							<div class="col-12 col-xl-4 mb-3">

								<div class="portlet">
									
									<div class="portlet-header">

										<div class="float-end dropdown">

											<!-- dropdown -->
											<button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownOrders" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="js-trigger-text">Export</span>
												<i class="fi fi-arrow-down"></i>
											</button>

											<div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2" aria-labelledby="dropdownOrders">

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
											Orders	
										</span>

									</div>


									<!-- content loaded via ajax! -->
									<div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

										<?php
							foreach ($list_order as $list_orders) {
							?>
							<!-- order -->
							<div class="clearfix d-block dropdown-item font-weight-medium p-3 rounded overflow-hidden border-bottom border-light">

								<h2 class="fs--18">
									<a href="<?php echo base_url().'order/'.$list_orders['transaction_id'];?>" class="float-end fs--12">
										ORDER DETAIL
									</a>
									<a href="<?php echo base_url().'order/'.$list_orders['transaction_id'];?>" class="text-dark">
										Order #<?php echo $list_orders['order_ref'];?> 
									</a>
								</h2>

								<p class="mb-0 fs--14">
									Date: <?php echo $list_orders['order_date'];?> | Total: N<?php echo $list_orders['total_amount'];?> 
								</p>

								<p class="mb-0 fs--14">
									Status:&nbsp;
									<span class="text-warning font-weight-normal"><?php echo $list_orders['order_status'];?> / New</span>
								</p>

							</div>
							<!-- /order -->
							<?php
						}
						?>


									</div>


									<div class="d-flex align-self-baseline w-100 py-2">
										<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
											<i class="fi fi-arrow-end-slim"></i>
											<span>View All</span>
										</a>
									</div>

								</div>

							</div>
							<!-- /WIDGET : ORDERS -->
						
							<div class="col-12 col-xl-4 mb-3">

								<div class="portlet">
									
									<div class="portlet-header">

										<div class="float-end dropdown">
											<a href="#!" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											View All
										</a>

										</div>

										<span class="d-block text-muted text-truncate font-weight-medium">
											Financial Insights
										</span>

									</div>


									<!-- content loaded via ajax! -->
									<div class="portlet-body max-h-500 scrollable-vertical ">
											<div class="scrollable-styled-dark jarallax overlay-dark overlay-opacity-5 text-white pt--100 pb--100 d-table bg-cover " 
												data-speed="1.1"
												style="background-image:url('<?php echo base_url();?>assets/images/product/covid19.jpg')">

												<!-- lines, looks like through a glass -->
												<div class="absolute-full w-100 overflow-hidden">
													<img class="img-fluid" width="2000" height="2000" src="<?php echo base_url();?>assets/images/masks/shape-line-lense.svg" alt="...">
												</div>

												<div class="d-table-cell align-middle text-center">
													
													
													<!-- optional -->
													<h2 class="h6 text-white opacity-8 font-weight-normal">
														Financial insights coming soon
													</h2>

													<a href="#" class="btn btn-sm btn-facebook rounded-circle transition-hover-top mb-2 opacity-9" rel="noopener" target="facebook">
														<i class="fi fi-social-facebook m-0"></i>
													</a>

													<a href="#" class="btn btn-sm btn-twitter rounded-circle transition-hover-top mb-2 opacity-9" rel="noopener" target="twitter">
														<i class="fi fi-social-twitter m-0"></i>
													</a>
													<!-- /optional -->

												</div>
											</div>
							<!-- 	
										<?php
							foreach ($list_order as $list_orders) {
							?>
							
									<div class="d-flex align-items-center p-3 border-bottom border-light">

										<div class="flex-none w--40">
											<img width="40" height="40" class="img-fluid lazy" src="../../html_frontend/demo.files/svg/icons/files/jpg.svg" alt="..." data-loaded="true">
										</div>

										<div class="flex-fill text-truncate px-3">
											<span class="text-muted">384 images imported to 281 products</span>
											<span class="fs--13 d-block text-gray-500">1 February, 2020 / 13:43</span>
										</div>

										<div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
											<a href="#!">view log</a>
										</div>

									</div>

							<?php
						}
						?> -->

						
              <!-- posts -->
              <div class="row">

                 <!-- posts -->
          <div class="row">
            <?php function convert_date($blog_post_date){
                $postdate  = substr($blog_post_date, 0, -9);
                $postdate = strtotime($postdate);
                //Get the day of the week using PHP's date function.
                $postdayOfWeek = date("l", $postdate);

                return $postdayOfWeek;
               } 

               ?>
            <?php 
  $i = 0;

foreach($blogposts as $blogpost ) {

$i = ++$i;
if(isset($blogposts[$i])){
?>
  
            <!-- post -->
            <a href="<?php echo base_url();?>articles/<?php echo $blogposts[$i]['slug']?>" class="col-12 col-md-6 mb-5 position-relative text-dark clearfix text-decoration-none">

      <figure class="d-block text-center overlay-dark-hover overlay-opacity-2 rounded overflow-hidden h--200">
          <img class="img-fluid rounded" src=" <?php if(isset($blogposts[$i]['jetpack_featured_media_url'])){echo$blogposts[$i]['jetpack_featured_media_url'];
            }   ?>" alt="...">
              
              </figure>

              <p class="mt-3 fs--20 mb-2">
                <span class="h6-xs text-dark d-block">
                  <?php echo $blogposts[$i]['title']['rendered']; ?>
                </span>
                
                   <div class="article-format">
                                <?php echo $blogposts[$i]['excerpt']['rendered'];?>
                               
                            </div>

                <span class="d-block text-muted font-regular fs--14">
                  Post Date: <time datetime="2019-12-03"> <?php echo convert_date($blogposts[$i]['date']); ?></time>
                </span>
              </p>

            </a>
       <?php
     }
     }
     ?>
          </div>
          <!-- /posts -->
									</div>


									<div class="d-flex align-self-baseline w-100 py-2">
										<a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
											<i class="fi fi-arrow-end-slim"></i>
											<span>View All</span>
										</a>
									</div>

								</div>

							</div>
					</div>

				</div>
			</section>
			<!-- / -->




			<!-- CALL TO ACTION -->
			<section class="py-5 border-top mb--2">
				<div class="container">
					<div class="row text-center-xs">

						<div class="col-12 col-md-8">
							<h3 class="m-0">Grow your business your customers can't ignore!</h3>
							<p class="m-0">Our pofessionals are here for your business!</p>
						</div>
						
						<div class="col-12 mt-4 d-block d-md-none"><!-- mobile spacer --></div>

						<div class="col-12 col-md-4 text-align-end">
							<a href="contact-1.html" class="btn btn-light d-block-xs">Contact Us Now</a>
						</div>

					</div>
				</div>
			</section>
			<!-- /CALL TO ACTION -->

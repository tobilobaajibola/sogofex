		
			<!-- page title -->
			<div class="container py-5">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb small">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">My cart</li>
					</ol>
				</nav>

				<h1 class="h2 fw-bold">My Cart</h1>

			</div>
			<!-- /page title -->



                                        <?php
if (empty ($this->cart->contents())){
?>
<!-- EMPTY CART -->            <section>
                <div class="container">

                    <div class="row">

                        <div class="col-12 col-md-8 col-lg-9 order-md-1 mb-5">

                            <div class="text-center mb-5">
                                
                                <a href="#!" class="badge badge-pill badge-warning badge-soft font-weight-normal p-2">
                                    DON'T LOSE OUR BEST OFFERS
                                </a>

                                <h1 class="mb--80">
                                    Your cart is empty
                                </h1>

                                <img class="img-fluid max-w-350" src="<?php echo base_url();?>demo.files/svg/ecommerce/undraw_empty_cart_co35.svg" alt="...">

                            </div>

                        </div>



                        <div class="col-12 col-md-4 col-lg-3 order-md-2 mb-5">

                   <?php $this->load->view('box/advert');?>
                          
                        </div>

                    </div>

                </div>
            </section>
            <!-- /CART -->



                                        <!-- /EMPTY CART -->

<?php
}
else
{
?>                                        
  

			<!-- CART -->
			<div class="container pb-7">

        <div class="row g-4">

          <div class="col-lg-8 mb-5">

            <!-- 
              Cart form -->
            <form id="form-cart" method="post" action="#">

              <!-- #cart-items -->
              <div id="cart-items">
      <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $k=>$items): ?>

                        <?php echo form_hidden('rowid', $items['rowid']); ?>
              	<!-- item -->
                <div class="card mb-3 overflow-hidden">
                  <div class="card-body p-md-4">

                    <!-- remove from cart -->
                    <a href="#" class="btn btn-light text-danger-hover py-1 px-2 rounded-0 position-absolute top-0 end-0">
                      <svg width="16px" height="16px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                      </svg>
                    </a>

                    <!-- image -->
                    <div class="row g-3 py-2 align-items-center">
                      <div class="col-4 col-md-2">
                        <div class="ratio ratio-1x1">
                          <span class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid rounded" src="<?php echo base_url();?>assets/images/product/<?php echo $items['options']['product_image'];?>" alt="cart item">
                          </span>
                        </div>
                      </div>

                      <div class="col-8 col-md-5">

                      	<!-- item name -->
                        <a href="#" class="link-normal fw-medium">A<?php echo $items['name']; ?></a>

                        <!-- unit price -->
                        <small class="d-block text-muted">Unit price: N<?php echo $items['price']; ?></small>

                                              </div>

                      <div class="col-12 col-md-5">
                        <div class="row g-3">

                          <div class="col-4 col-sm-6 col-lg-5 text-center">

                         
                          </div>

                          <div class="col-8 col-sm-6 col-lg-7 text-md-end">

                            <del class="d-block fw-normal text-muted small"><?php echo $items['price']; ?></del>
                            <span class="d-block fw-medium"><?php echo $items['price']; ?></span>
                            
                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <!-- gift -->
                                                                                                  
                  </div>
                </div>
                <!-- /item -->
                <?php $i++; ?>

                <?php endforeach; ?>
              </div>

            </form>

           
          </div>


          <!-- summary -->
          <div class="col-lg-4 mb-4">

            <!-- #cart-summary -->
            <div class="card text-gray-800">
              <div class="card-header border-light fs-5 fw-bold mx-3 px-0 py-4">Order sumary</div>
              <div class="card-body p-md-4">

                              
              <div id="cart-summary">

                <div class="d-flex justify-content-between">
                  <span>Products:</span>
                  <span class="text-end">N<?php echo $this->cart->format_number($this->cart->total()); ?></span>
                </div>

              
                <hr class="bg-gray-300">

                <div class="fw-medium lh-1 mt-4">
                  <span class="fs-6 d-block">Total <small class="fw-normal">(vat excl.)</small>:</span> 
                  <span class="h3 d-block">N<?php echo $this->cart->format_number($this->cart->total()); ?></span>
                </div>

              
              </div>

              <!-- to checkout page -->
              <div class="d-grid my-4">
                <a href="shop-page-checkout.html" class="btn btn-primary">
                  <span>To checkout</span>
                  <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg>
                </a>
              </div>
            
              </div>
            </div>

            <!-- help/chat trigger -->
            <div class="py-3 text-end">
              <p class="d-inline-grid gap-auto-3">
                <span class="text-gray-600">
                  Need help? <a href="#" class="link-secondary text-dashed">Contact us</a>
                </span>
                <svg class="text-gray-500" width="28px" height="28px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.052 512.052" fill="currentColor">
                  <path d="M208.026,16.026c-114.7,0-208,78.9-208,176c0,39.8,15.7,77.9,44.5,108.9l-39.8,39.8c-4.6,4.6-6,11.5-3.5,17.4c2.5,6,8.3,9.9,14.8,9.9h192c114.7,0,208-78.9,208-176S322.726,16.026,208.026,16.026z"/>
                  <path opacity="0.5" d="M467.526,428.926c28.8-30.9,44.5-69.1,44.5-108.9c0-49.8-24.6-94.9-64-126.9c-0.9,114.1-108.2,206.9-240,206.9h-89.2c34.5,56.9,104.6,96,185.2,96h192c6.5,0,12.3-3.9,14.8-9.9c2.5-6,1.1-12.9-3.5-17.4L467.526,428.926z"/>
                  <path fill="#ffffff" d="M304.026,144.026h-192c-8.8,0-16,7.2-16,16s7.2,16,16,16h192c8.8,0,16-7.2,16-16S312.826,144.026,304.026,144.026z"/>
                  <path fill="#ffffff" d="M240.026,208.026h-128c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S248.826,208.026,240.026,208.026z"/>
                </svg>
              </p>
            </div>

          </div>

        </div>

			</div>
			<!-- /CART -->




      <!-- INFO BOX -->
      <div class="container py-3">

        <div class="row g-4">

          <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4">

            <img width="60" height="60" class="lazy" data-src="demo.files/svg/ecommerce/money_bag.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
            <div class="ps-3">
              <h3 class="fs-5 mb-1">Money Back</h3>
              <p class="m-0">Love it! Use it! Reuse it!</p>
            </div>

          </div>

          <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4">

            <img width="60" height="60" class="lazy" data-src="demo.files/svg/ecommerce/free-delivery-truck.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
            <div class="ps-3">
              <h3 class="fs-5 mb-1">Free Shipping</h3>
              <p class="m-0">Shipping is on us</p>
            </div>

          </div>

          <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4">

            <img width="60" height="60" class="lazy" data-src="demo.files/svg/ecommerce/24-hours-phone-service.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
            <div class="ps-3">
              <h3 class="fs-5 mb-1">Free Support</h3>
              <p class="m-0">24/24 available</p>
            </div>

          </div>

          <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4">

            <!-- link example -->
            <a href="#" class="text-dark text-decoration-none d-flex">

              <img width="60" height="60" class="lazy" data-src="demo.files/svg/ecommerce/handshake.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
              <div class="ps-3">
                <h3 class="fs-5 mb-1">Best Deal</h3>
                <p class="m-0">Quality guaranteed</p>
              </div>

            </a>

          </div>

        </div>

      </div>
      <!-- /INFO BOX -->

<?php
}
?>
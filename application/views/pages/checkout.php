  <!-- PAGE TITLE -->
      <section class="bg-light p-0">
        <div class="container py-5">

          <h1 class="h3">
            Checkout
          </h1>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs--14">
              <li class="breadcrumb-item"><a href="shop-page-checkout.html"><b>NOT LOGGED</b></a></li>
              <li class="breadcrumb-item"><a href="shop-page-checkout-logged.html">LOGGED</a></li>
            </ol>
          </nav>

        </div>
      </section>
      <!-- /PAGE TITLE -->





      <!-- CHECKOUT -->
      <section>
        <div class="container">

          <div class="row">

            <div class="col-12 col-lg-7 col-xl-6 order-2 order-lg-1">

              <form method="post" action="#">

                <!-- NOT LOGGED IN -->
                <div class="bg-light p-3 rounded mb-5">

                  <div class="fs--12 mb-2">
                    Already have an account? 
                    <a href="#" class="js-ajax-modal"
                      data-href="_ajax/modal_signin_md.html"
                      data-ajax-modal-size="modal-md"
                      data-ajax-modal-centered="false"
                      data-ajax-modal-backdrop="static">
                      Sign In
                    </a>
                  </div>

                  <div class="form-label-group mb-3">
                    <input required placeholder="Email Address" id="first_name" type="text" value="" class="form-control">
                    <label for="first_name">Email Address</label>
                  </div>

                  <div class="border-top pt-3 mt-2">

                    <label class="form-checkbox form-checkbox-primary d-block">
                      <input type="checkbox" name="checkbox" value="1">
                      <i></i> Keep me up to date on news and exclusive offers
                    </label>

                  </div>

                </div>
                <!-- /NOT LOGGED IN -->




                <!-- SHIPPING ADDRESS -->
                <h2 class="h5 mb-4">
                  Shipping Address
                  <span class="d-block fs--14 text-muted font-weight-normal">
                    Where would you like to send you the products?
                  </span>
                </h2>
                <div class="p-4 shadow-xs border rounded mb-5">

                  <div class="row">

                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input required placeholder="First Name" id="shipping_first_name" name="shipping_first_name" type="text" class="form-control">
                        <label for="shipping_first_name">First Name</label>
                      </div>

                    </div>
                    
                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input required placeholder="Last Name" id="shipping_last_name" name="shipping_last_name" type="text" class="form-control">
                        <label for="shipping_last_name">Last Name</label>
                      </div>

                    </div>


                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input placeholder="Phone Number" id="shipping_phone" name="shipping_phone" type="text" class="form-control">
                        <label for="shipping_phone">Phone Number</label>
                      </div>

                    </div>


                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input placeholder="Company Name" id="shipping_company_name" name="shipping_company_name" type="text" class="form-control">
                        <label for="shipping_company_name">Company Name <small class="text-info">(optional)</small></label>
                      </div>

                    </div>




                    <div class="col-12 col-sm-12 col-lg-12 mb--20">

                      <div class="form-label-group mb-3">
                        <input required placeholder="Street and Number, P.O. Box, c/o." id="shipping_address_1" name="shipping_address_1" type="text" class="form-control">
                        <label for="shipping_address_1">Street and Number, P.O. Box, c/o.</label>
                      </div>

                      <div class="form-label-group mb-3">
                        <input placeholder="Apt, Suite, Unit, Building, Floor, etc" id="shipping_address_2" name="shipping_address_2" type="text" class="form-control">
                        <label for="shipping_address_2">Apt, Suite, Unit, Building, Floor, etc <small class="text-info">(optional)</small></label>
                      </div>

                    </div>







                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input placeholder="City/Town" id="shipping_city" name="shipping_city" type="text" class="form-control">
                        <label for="shipping_city">City/Town</label>
                      </div>

                    </div>


                    <div class="col-12 col-sm-6 col-lg-6">

                      <div class="form-label-group mb-3">
                        <input placeholder="Zip / Postal Code" id="shipping_zipcode" name="shipping_zipcode" type="text" class="form-control">
                        <label for="shipping_zipcode">Zip / Postal Code</label>
                      </div>

                    </div>


                    <div class="col-12 col-sm-6 col-lg-6">

                      <!-- 
                        based on `SOW : Ajax Select` plugin 
                        documentation/plugins-sow-ajax-select.html
                      -->
                      <select name="shipping_country" class="form-control js-ajax bs-select" data-ajax-target="#shipping_state" data-live-search="true">
                        <option value="0">Select Contry...</option>
                        <option value="1">United States</option>
                        <option value="2">Romania</option>
                      </select>

                    </div>


                    <div class="col-12 col-sm-6 col-lg-6">

                      <!-- 
                        based on `SOW : Ajax Select` plugin 
                        documentation/plugins-sow-ajax-select.html
                      -->
                      <select name="shipping_state" id="shipping_state" class="form-control bs-select" disabled=""
                        data-ajax-url="_ajax/select_ajax_state_list.php" 
                        data-ajax-method="GET" 
                        data-ajax-params="['action','get_state_list']['param2','value2']" 
                        data-live-search="true">
                        <option value="">Select Country First</option>
                      </select>

                    </div>

                  </div>

                  <div class="border-top pt-4 mt-4">

                    <label class="form-checkbox form-checkbox-primary d-block">
                      <input type="checkbox" name="checkbox" value="1" checked="" data-toggle="collapse" data-target="#billing_address">
                      <i></i> <span class="font-weight-medium fs--16">Billing address &ndash; same as shipping</span>
                    </label>

                  </div>

                </div>
                <!-- /SHIPPING ADDRESS -->



                <!-- BILLING ADDRESS -->
                <div id="billing_address" class="collapse js-form-advanced-required">

                  <h2 class="h5 mb-4">
                    Billing Address
                    <span class="d-block fs--14 text-muted font-weight-normal">
                      Billing, different than shipping address
                    </span>
                  </h2>
                  <div class="p-4 shadow-xs border rounded mb-5">

                    <div class="row">

                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input required placeholder="First Name" id="billing_first_name" name="billing_first_name" type="text" class="form-control">
                          <label for="billing_first_name">First Name</label>
                        </div>

                      </div>
                      
                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input required placeholder="Last Name" id="billing_last_name" name="billing_last_name" type="text" class="form-control">
                          <label for="billing_last_name">Last Name</label>
                        </div>

                      </div>


                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input placeholder="Phone Number" id="billing_phone" name="billing_phone" type="text" class="form-control">
                          <label for="billing_phone">Phone Number <small class="text-info">(optional)</small></label>
                        </div>

                      </div>


                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input placeholder="Company Name" id="billing_company_name" name="billing_company_name" type="text" class="form-control">
                          <label for="billing_company_name">Company Name <small class="text-info">(optional)</small></label>
                        </div>

                      </div>




                      <div class="col-12 col-sm-12 col-lg-12 mb--20">

                        <div class="form-label-group mb-3">
                          <input required placeholder="Street and Number, P.O. Box, c/o." id="billing_address_1" name="billing_address_1" type="text" class="form-control">
                          <label for="billing_address_1">Street and Number, P.O. Box, c/o.</label>
                        </div>

                        <div class="form-label-group mb-3">
                          <input placeholder="Apt, Suite, Unit, Building, Floor, etc" id="billing_address_2" name="billing_address_2" type="text" class="form-control">
                          <label for="billing_address_2">Apt, Suite, Unit, Building, Floor, etc <small class="text-info">(optional)</small></label>
                        </div>

                      </div>







                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input placeholder="City/Town" id="billing_city" name="billing_city" type="text" class="form-control">
                          <label for="billing_city">City/Town</label>
                        </div>

                      </div>


                      <div class="col-12 col-sm-6 col-lg-6">

                        <div class="form-label-group mb-3">
                          <input placeholder="Zip / Postal Code" id="billing_zipcode" name="billing_zipcode" type="text" class="form-control">
                          <label for="billing_zipcode">Zip / Postal Code</label>
                        </div>

                      </div>


                      <div class="col-12 col-sm-6 col-lg-6">

                        <!-- 
                          based on `SOW : Ajax Select` plugin 
                          documentation/plugins-sow-ajax-select.html
                        -->
                        <select name="billing_country" class="form-control js-ajax bs-select" data-ajax-target="#billing_state" data-live-search="true">
                          <option value="0">Select Contry...</option>
                          <option value="1">United States</option>
                          <option value="2">Romania</option>
                        </select>

                      </div>


                      <div class="col-12 col-sm-6 col-lg-6">

                        <!-- 
                          based on `SOW : Ajax Select` plugin 
                          documentation/plugins-sow-ajax-select.html
                        -->
                        <select name="billing_state" id="billing_state" class="form-control bs-select" disabled=""
                          data-ajax-url="_ajax/select_ajax_state_list.php" 
                          data-ajax-method="GET" 
                          data-ajax-params="['action','get_state_list']['param2','value2']" 
                          data-live-search="true">
                          <option value="">Select Country First</option>
                        </select>

                      </div>

                    </div>

                  </div>
                  
                </div>
                <!-- /BILLING ADDRESS -->



                <!-- SHIPPING METHOD -->
                <h2 class="h5 mb-4">
                  Shipping Method
                  <span class="d-block fs--14 text-muted font-weight-normal">
                    How would you like to get your products?
                  </span>
                </h2>
                <div class="p-4 shadow-xs border rounded mb-5">


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="shipping_method" checked>
                    <i></i> Free Shipping
                    <span class="d-block fs--12 text-muted">
                      2-3 days delivery
                    </span>
                  </label>


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="shipping_method">
                    <i></i> FedEx <span class="float-end">$32.00</span>
                    <span class="d-block fs--12 text-muted">
                      Tomorrow delivery
                    </span>
                  </label>


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="shipping_method">
                    <i></i> Pickup in store 
                    <span class="d-block fs--12 text-success">
                      Road 741, No.44, New York
                    </span>
                  </label>

                </div>
                <!-- /SHIPPING METHOD -->





                <!-- PAYMENT METHOD -->
                <h2 class="h5 mb-4">
                  Payment Method
                  <span class="d-block fs--14 text-success font-weight-normal">
                    All online transactions are secure and encrypted.
                  </span>
                </h2>

                <div class="form-advanced-list p-4 shadow-xs border rounded mb-5">

                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="payment_method" class="form-advanced-list-reveal" checked>
                    <i></i> Pay in store
                  </label>


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="payment_method" class="form-advanced-list-reveal">
                    <i></i> Cash on delivery
                  </label>


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="payment_method" class="form-advanced-list-reveal" data-form-advanced-target="#bankdeposit_expand">
                    <i></i> Bank deposit
                  </label>

                  <!-- paypal info -->
                  <div id="bankdeposit_expand" class="form-advanced-list-reveal-item hide p-4 rounded mt--n10 bg-light bt-0">

                    Bank Name: ACME Bank <br>
                    Bank Branch: New York <br>
                    Account Name: John Smith <br>
                    Account Number: XXXXXXXXXXXX

                  </div>
                  <!-- /paypal info -->


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="payment_method" class="form-advanced-list-reveal" data-form-advanced-target="#payment_card_form">
                    <i></i> Credit Card

                    <span class="float-end mt--n3 ml--n10 mr--n10">
                      <img src="assets/images/credit_card/visa.svg" width="38" height="24" alt="cc">
                      <img src="assets/images/credit_card/mastercard.svg" width="38" height="24" alt="cc">
                      <span class="fs--11 d-block text-align-end">and more...</span>
                    </span>

                  </label>

                  <!-- CREDIT CARD FORM -->
                  <div id="payment_card_form" class="form-advanced-list-reveal-item hide bg-gradient-light px-4 pt-4 rounded mt--n10 border bt-0">
                    
                    <div class="row">

                      <div class="col-12 pl--5 pr--5 mb-3">

                        <div class="input-group-over">

                          <!-- 

                            credit card type 
                            autodetected on user type 

                            amex
                            diners
                            jcb
                            laser
                            visa
                            mastercard
                            maestro
                            discover

                          -->
                          <input type="hidden" name="cc_type" id="cc_type" value="">

                          <div class="form-label-group">
                            <input placeholder="Card Number" id="cc_number" type="text" data-card-type="#cc_type" class="form-control cc-format cc-number">
                            <label for="cc_number">Card Number</label>
                          </div>


                          <span class="px-3 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 47 47" xml:space="preserve">
                              <path fill="#bbbebf" d="M23.498,10.141c-2.094,0-3.796,1.709-3.796,3.807v3.706h7.596v-3.706C27.298,11.851,25.593,10.141,23.498,10.141z"></path>
                              <path fill="#bbbebf" d="M3.431,0v23.928C3.431,36.67,23.5,47,23.5,47s20.069-10.33,20.069-23.072V0H3.431z M34.351,30.148c0,1.571-1.286,2.856-2.855,2.856h-15.99c-1.57,0-2.855-1.285-2.855-2.856v-9.64c0-1.569,1.286-2.855,2.855-2.855h0.387v-3.706c0-4.198,3.413-7.613,7.606-7.613c4.195,0,7.609,3.415,7.609,7.613v3.706h0.388c1.57,0,2.855,1.286,2.855,2.855V30.148z"></path>
                            </svg>
                          </span>
                        </div>

                      </div>

                      <div class="col-12 col-md-5 pl--5 pr--5 mb-2">

                        <div class="form-label-group">
                          <input placeholder="Cardholder Name" id="cc_name" type="text" value="" class="form-control">
                          <label for="cc_name">Cardholder Name</label>
                        </div>

                      </div>

                      <div class="col-6 col-md-3 pl--5 pr--5 mb-4">

                        <div class="form-label-group">
                          <input placeholder="MM / YY" id="cc_date" type="text" value="" class="form-control cc-format cc-expire" maxlength="5">
                          <label for="cc_date">MM / YY</label>
                        </div>

                      </div>

                      <div class="col-6 col-md-4 pl--5 pr--5 mb-4">

                        <div class="form-fancy form-fancy-input mb--6">
                          
                          <div class="input-group-over">

                            <div class="form-label-group">
                              <input placeholder="CVV" id="cc_cvv" type="text" value="" class="form-control cc-format cc-cvc">
                              <label for="cc_cvv">CVV</label>
                            </div>

                            <span class="px-3 text-muted" title="" data-html="true" data-toggle="tooltip" data-original-title="<span class='fs--12'>3-digit security code on the back of your card.<br><span class='fs--11'>(amex = 4-digit code on the front)</</span>">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" xml:space="preserve" width="22px" height="22px">
                                <path fill="#bbbebf" d="M256,0C134.684,0,36,96.243,36,215.851c0,68.63,33.021,132.639,88.879,173.334V492c0,7.938,4.694,15.124,11.962,18.313c7.225,3.173,15.704,1.809,21.577-3.593l82.144-75.555c5.17,0.355,10.335,0.535,15.438,0.535c121.316,0,220-96.243,220-215.851C476,96.13,377.21,0,256,0z M256,391.701c-6.687,0-13.516-0.376-20.298-1.118c-5.737-0.634-11.466,1.253-15.715,5.161    l-55.108,50.687v-67.726c0-6.741-3.396-13.029-9.034-16.726C105.848,329.2,76,274.573,76,215.851C76,118.886,156.747,40,256,40    s180,78.886,180,175.851C436,312.814,355.252,391.701,256,391.701z"></path>
                                <path fill="#bbbebf" d="M266,98.877h-70c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h70c16.542,0,30,13.458,30,30c0,16.542-13.458,30-30,30h-20c-11.046,0-20,8.954-20,20v28.793c0,11.046,8.954,20,20,20s20-8.954,20-20v-8.793c38.598,0,70-31.401,70-70C336,130.279,304.598,98.877,266,98.877z"></path>
                                <circle fill="#bbbebf" cx="246" cy="319.16" r="27"></circle>
                              </svg>
                            </span>

                          </div>

                        </div>

                      </div>

                    </div>
                  </div>
                  <!-- /CREDIT CARD FORM -->


                  <label class="form-radio form-radio-primary d-block py-3 border-bottom">
                    <input type="radio" name="payment_method" class="form-advanced-list-reveal" data-form-advanced-target="#paypal_expand">
                    <i></i> Paypal
                  </label>

                  <!-- paypal info -->
                  <div id="paypal_expand" class="form-advanced-list-reveal-item hide text-center">

                    <div class="my-5">
                      <img width="150" src="demo.files/svg/vendors/vendor_paypal.svg" alt="...">
                    </div>

                    <p>
                      After clicking "Complete Order", you will be redirected to complete your purchase securely.
                    </p>

                  </div>
                  <!-- /paypal info -->

                </div>
                <!-- /PAYMENT METHOD -->




                <!-- CUSTOMER NOTE -->
                <h2 class="h5 mb-4">
                  Customer Note
                  <span class="d-block fs--14 text-muted font-weight-normal">
                    Not a clichee, we do care about our customers!
                  </span>
                </h2>

                <div class="form-label-group mb-5">
                  <textarea placeholder="Leave us a note about this order (optional)" id="description" class="form-control" rows="3"></textarea>
                  <label for="description">Leave a note about this order (optional)</label>
                </div>
                <!-- /CUSTOMER NOTE -->



                <!-- AGREE TERMS -->
                <label class="form-checkbox form-checkbox-primary d-block">
                  <input required type="checkbox" name="checkbox">
                  <i></i> I do agree with <a href="#!" target="_blank">Terms &amp; Conditions</a>
                </label>


                <!-- COMPLETE ORDER -->
                <div class="clearfix text-center-xs mt--60">

                  <div class="float-end ml-0 mr-0 float-none-xs mb-4">
                    <button type="submit" class="btn btn-primary btn-shadow btn-lg block-xs fs--16 py-3 pl--15 pr--15 ">
                      <span>
                        <i class="fi fi-check"></i>
                      </span>&nbsp;
                      COMPLETE ORDER
                    </button>
                  </div>

                  <div class="pt-4 mb-4">
                    <a href="shop-page-cart-1.html" class="fs--15 text-decoration-none">
                      <i class="fi fi-arrow-start-slim"></i>
                      return to cart
                    </a>
                  </div>

                </div>
                <!-- /COMPLETE ORDER -->


              </form>
            </div>



            <!-- SUMMARY COLUMN -->
            <div class="col-12 col-lg-5 col-xl-6 order-1 order-lg-2">

              <div class="sticky-kit">
                <div class="shadow-xs border rounded p-4 mb-5">


                  <!-- item -->
                  <div class="d-flex justify-content-center align-items-center border-bottom py-3">

                    <div class="w--100">
                      <img class="img-fluid max-h-80" src="demo.files/images/unsplash/products/thumb_330/barrett-ward-fYYUgvHYgpU-unsplash-min.jpg" alt="...">
                    </div>

                    <div class="w-100 pl-3 pr-3">
                      
                      <div class="float-end">
                        <p class="fs--13 text-weight-muted mb-0">
                          <del>$189.95</del>
                        </p>
                        <p class="fs--16 font-weight-medium mb-0"> 
                          $158.95
                        </p>
                      </div>

                      <h6>1 x Product title here</h6>

                    </div>
                  </div>
                  <!-- /item -->



                  <!-- item -->
                  <div class="d-flex justify-content-center align-items-center border-bottom py-3">

                    <div class="w--100">
                      <img class="img-fluid max-h-80" src="demo.files/images/unsplash/products/thumb_330/hardik-sharma-CrPAvN29Nhs-unsplash-min.jpg" alt="...">
                    </div>

                    <div class="w-100 pl-3 pr-3">
                      
                      <div class="float-end">
                        <p class="fs--13 text-weight-muted mb-0">
                          <del>$189.95</del>
                        </p>
                        <p class="fs--16 font-weight-medium mb-0"> 
                          $158.95
                        </p>
                      </div>

                      <h6>2 x Product title here</h6>

                    </div>
                  </div>
                  <!-- /item -->



                  <!-- summary -->
                  <div class="border-bottom pb-3 mb-3 mt-3 px-3">
                    
                    <div class="clearfix">
                      Subtotal:
                      <span class="float-end font-weight-medium">
                        $158.95
                      </span>
                    </div>

                    <div class="clearfix">
                      Discount:
                      <span class="float-end">
                       $0
                      </span>
                    </div>


                    <div class="clearfix">
                      Shipping:
                      <span class="float-end text-align-end">
                        <a href="#!" class="fs--14">calculate</a>
                      </span>
                    </div>

                  </div>
                  <!-- /summary -->



                  <!-- total -->
                  <div class="clearfix mb-3">
                    <h3 class="h4-xs float-start">Total:</h3>
                    <h3 class="h4-xs float-end">
                      $158.95
                    </h3>
                  </div>
                  <!-- /total -->



                  <!-- coupon code -->
                  <a href="#coupon_code" data-toggle="collapse" class="text-decoration-none m-0 text-dark">
                    <span class="group-icon float-start fs--16">
                      <i class="fi fs--15 fi-product-tag"></i>
                      <i class="fi fs--14 fi-close"></i>
                    </span>
                    <span>Add Coupon Code</span>
                  </a>

                  <div id="coupon_code" class="collapse w-100">

                    <div class="pt-3 w-100">
                      <form novalidate="" class="bs-validate" method="post" action="#">

                        <div class="input-group">

                          <input required type="text" name="coupon_code" value="" class="form-control" placeholder="coupon code">
                          
                          <div class="input-group-append">
                            <button class="btn btn-secondary">Redeem</button>
                          </div>

                        </div>

                      </form>
                    </div>

                  </div>
                  <!-- /coupon code -->


                </div>
              </div>

            </div>
            <!-- /SUMMARY COLUMN -->

          </div>







          <!-- ADDITIONAL LINKS -->
          <div class="border-top mt--100 pt-2">
            <ol class="breadcrumb bg-transparent px-0 m-0 fs--13">

              <li class="breadcrumb-item">
                <a href="#" target="_blank">Refund Policy</a>
              </li>

              <li class="breadcrumb-item">
                <a href="#" target="_blank">Privacy Policy</a>
              </li>

              <li class="breadcrumb-item">
                <a href="#" target="_blank">Terms of Service</a>
              </li>

            </ol>
          </div>
          <!-- /ADDITIONAL LINKS -->


        </div>
      </section>
      <!-- /CHECKOUT -->





      <!-- INFO BOX -->
      <section class="p-0 bg-primary-soft">
        <div class="container py-3">

          <div class="row">

            <div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs" data-aos="fade-in" data-aos-delay="150">

              <div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
                <img width="60" height="60" src="demo.files/svg/ecommerce/money_bag.svg" alt="...">
              </div>

              <div class="my-2">
                
                <h2 class="font-weight-medium fs--20 mb-0">
                  Money Back
                </h2>

                <p class="m-0">
                  30-days money back
                </p>

              </div>

            </div>

            <div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bt-0 br-0 bb-0 b--0-lg" data-aos="fade-in" data-aos-delay="250">

              <div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
                <img width="60" height="60" src="demo.files/svg/ecommerce/free-delivery-truck.svg" alt="...">
              </div>

              <div class="my-2">
                
                <h2 class="font-weight-medium fs--20 mb-0">
                  Free Shipping
                </h2>

                <p class="m-0">
                  Shipping is on us
                </p>

              </div>

            </div>

            <div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bl-0 br-0 bb-0 b--0-lg" data-aos="fade-in" data-aos-delay="350">

              <div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
                <img width="60" height="60" src="demo.files/svg/ecommerce/24-hours-phone-service.svg" alt="...">
              </div>

              <div class="my-2">
                
                <h2 class="font-weight-medium fs--20 mb-0">
                  Free Support
                </h2>

                <p class="m-0">
                  24/24 available
                </p>

              </div>

            </div>

            <div class="col-6 col-lg-3 p--15 d-flex d-block-xs text-center-xs border-dashed border-light bw--1 bb-0 br-0 b--0-lg" data-aos="fade-in" data-aos-delay="450">

              <div class="pl--10 pr--20 fs--50 line-height-1 pt--6">
                <img width="60" height="60" src="demo.files/svg/ecommerce/handshake.svg" alt="...">
              </div>

              <div class="my-2">
                
                <h2 class="font-weight-medium fs--20 mb-0">
                  Best Deal
                </h2>

                <p class="m-0">
                  Quality guaranteed
                </p>

              </div>


            </div>

          </div>

        </div>
      </section>
      <!-- /INFO BOX -->



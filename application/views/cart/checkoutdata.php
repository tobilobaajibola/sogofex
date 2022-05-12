
        <div class="sticky-kit">
                                <div class="mb-3 position-relative">
                                    <div class="bg-light p-3 rounded-xl">
                                      
                            <form id="purchase_product_forms">
                                 <script src="https://js.paystack.co/v1/inline.js"></script>
                        
                           <?php
                                //cart data
                                 foreach ($this->cart->contents() as $items){
                                    $data = array(
                                        'name[]'  => $items['name'],
                                        'amount[]' => $items['price'],
                                        'beneficiary_name[]' => $items['options']['beneficiary_name'],
                                        'beneficiary_email[]' => $items['options']['beneficiary_email'],
                                        'beneficiary_phone[]' => $items['options']['beneficiary_phone'],
                                        'product_id[]' => $items['options']['product_id'],
                                        'order_date[]' => date('YMD'),
                                        );
                                        
                                    echo form_hidden($data);
                                 }
                                 echo form_hidden('total_amount', $this->cart->total());
                                 echo form_hidden('payment_option', 1);
                                 // echo form_hidden('payment_method', 1);
                                ?>
                          

                                        <!-- mobile : top arrow : documentation/util-misc.html -->
                                        <i class="arrow arrow-lg arrow-top arrow-center border-light d-block d-md-none"></i>
                                        <!-- desktop side arrow : documentation/util-misc.html -->
                                        <i class="arrow arrow-lg arrow-start mt-3 border-light d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"></i>


                                        <h3 class="h5 border-bottom pb-3 mb-3">
                                            Order Summary
                                        </h3>


                                        <div class="border-bottom pb-3 mb-3">
                                            <div class="clearfix">
                                                Subtotal:
                                                <span class="float-end font-weight-medium">
                                                    N<?php echo $this->cart->format_number($this->cart->total()); ?>
                                                </span>
                                            </div>

                                            <div class="clearfix">
                                                Discount:
                                                <span class="float-end">
                                                 N0
                                                </span>
                                            </div>


                                            <!-- <div class="clearfix">
                                                Shipping:
                                                <span class="float-end text-align-end">
                                                    <a href="#!" class="fs--14">calculate</a>
                                                </span>
                                            </div> -->
                                        </div>


                                        <div class="clearfix mb-3">
                                            <h4 class="float-start fs--20">Total:</h4>
                                            <h4 class="float-end fs--20 ">
                                               <?php echo $this->cart->format_number($this->cart->total()); ?>
                                            </h4>
                                        </div>

                                          <div class="border-bottom pb-3 mb-2">
                                                    <?php
                                                 if(isset($_SESSION['user_account'])){
                                                     ?>
                                                    
                                                                <button class="btn btn-primary btn-block fs--14" type="submit" >
                                                                    <span>TO CHECKOUT</span>
                                                                    <i class="fi fi-arrow-end fs--12"></i>
                                                                </button>

                                                    <?php  echo form_close(); ?>
                                                <?php
                                                }
                                                else{
                                                    ?>
                                                      <a href="#" class="js-ajax-modal btn btn-primary btn-block fs--14"
                                                            data-href="<?php echo base_url()?>accountpage"
                                                            data-ajax-modal-size="modal-md"
                                                            data-ajax-modal-centered="false"
                                                            data-ajax-modal-backdrop="static">
                                                             <span>CHECKOUT</span>
                                                             <i class="fi fi-arrow-end fs--12"></i>
                                                        </a>

                                               <?php
                                                }
                                                ?>
                                            </div>


                                        <!-- COUPON CODE -->
                                        <a href="#coupon_code" data-toggle="collapse" class="text-decoration-none m-0 text-dark">
                                            <span class="group-icon float-start fs--16">
                                                <i class="fi fs--15 fi-product-tag"></i>
                                                <i class="fi fs--14 fi-close"></i>
                                            </span>
                                            <span>Add Coupon Code</span>
                                        </a>

                                        <div id="coupon_code" class="collapse w-100">

                                            <div class="pt-3 w-100">
                                                <form novalidate class="bs-validate" method="post" action="#">

                                                    <div class="input-group">

                                                        <input required type="text" name="coupon_code" value="" class="form-control form-control-sm" placeholder="coupon code">
                                                        
                                                        <div class="input-group-append">
                                                            <button class="btn btn-sm btn-secondary">Redeem</button>
                                                        </div>

                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!-- /COUPON CODE -->

                                    </div>
                                </div>
                            </div>
                           
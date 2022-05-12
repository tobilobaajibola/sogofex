
<!-- PAGE TITLE -->
            <section class="bg-light p-0">
                <div class="container py-5">

                    <h1 class="h3">
                       PRODUCT CART
                    </h1>

                </div>
            </section>
            <!-- /PAGE TITLE -->



                        <!-- PRODUCT GALLERY -->
              
                                        <div class="mb-60 box-border-shadow p-20 softhide" style="display: none" id="notifyaccount" >
                                   <div class="panel panel-default">
                        <div class="panel-body">

                            <strong>You are not logged in!</strong>
                            Please, <a href="<?php echo base_url();?>signin">login</a> or <a href="<?php echo base_url();?>signup">create an account</a> for later use.
                        </div>
                    </div>
                </div>
       <div></div>
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
    <section>
        <div class="container">

            <div class="row">
<!-- Left -->
<div class="col-12 col-md-8 col-lg-9 order-md-1 mb-5">

                    <form method="post" action="#">
                             <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $k=>$items): ?>

                        <?php echo form_hidden('rowid', $items['rowid']); ?>
                                    <!-- ITEM -->
                                <div class="cart-item shadow-xs p-3 mb-4 rounded border">

                                    <!-- PRODUCT -->
                                    <div class="row">

                                        <div class="col-4 col-sm-4 col-md-2 col-lg-2 text-center">
                                             <img class="img-fluid max-h-80" src="<?php echo base_url();?>assets/images/product/<?php echo $items['options']['product_image'];?>" alt="...">

                                        </div>

                                        <div class="col-8 col-sm-8 col-md-10 col-lg-10">

                                            <div class="row">

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                                                    <div class="clearfix my-2 d-block">
                                                        <a class="fs--18 text-dark font-weight-medium" href="#!">
                                                            <?php echo $items['name']; ?>
                                                        </a>

                                                        <span class="d-block text-muted fs--12">
                                                            Beneficiary: 
                                                             <?php echo $items['options']['beneficiary_name']; ?>
                                                        </span>

                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a class="js-ajax-confirm fs--13" href="#"
                                                                    data-href="<?php echo base_url();?>carts/remove_cart_item/<?php echo $items['rowid'];?>/1" 

                                                                    data-ajax-confirm-mode="regular" 
                                                                    data-ajax-confirm-size="modal-md" 
                                                                    data-ajax-confirm-centered="true" 

                                                                    data-ajax-confirm-title="Please Confirm" 
                                                                    data-ajax-confirm-body="Delete this item from your cart?" 

                                                                    data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
                                                                    data-ajax-confirm-btn-yes-text="Yes, Delete" 
                                                                    data-ajax-confirm-btn-yes-icon="fi fi-check" 

                                                                    data-ajax-confirm-btn-no-class="btn-sm btn-light" 
                                                                    data-ajax-confirm-btn-no-text="Cancel" 
                                                                    data-ajax-confirm-btn-no-icon="fi fi-close">
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            <!-- 
                                                            <li class="list-inline-item">
                                                                <a class="fs--13" href="#!">
                                                                    Save for later
                                                                </a>
                                                            </li> -->
                                                        </ul>

                                                    </div>

                                                </div>


                                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">

                                                    <div class="position-relative">
                                                        <span class="js-form-advanced-limit-info badge badge-warning hide animate-bouncein position-absolute absolute-top start-0 m-1">
                                                            please, order between 1 and 99.
                                                        </span>

                                                        <input type="number" name="qty[5][]" class="cart-qty form-control form-control-sm text-center js-form-advanced-limit" min="0" max="99" value="<?php echo $items['qty']; ?>" readonly>
                                                    </div>

                                                    <span class="d-block text-muted fs--11 mt-1">
                                                        Month(s)
                                                    </span>

                                                </div>


                                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-align-end">

                                                    <!-- <p class="fs--13 text-weight-muted mb-0">
                                                        <del>$189.95</del>
                                                    </p> -->

                                                    <p class="fs--16 font-weight-medium mb-0"> 
                                                        N <?php echo $items['price'] * $items['qty']; ?>
                                                    </p>

                                                    <!-- <span class="text-success d-block fs--12 mb-2">
                                                        You save:<br> 
                                                        $31.00
                                                    </span>
 -->
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- /PRODUCT -->



                                    

                                </div>
                                <!-- /ITEM -->

                <?php $i++; ?>

                <?php endforeach; ?>
                                <!-- UPDATE CART -->
                              <!--   <div class="clearfix mb-4 text-align-end">

                                    <button type="submit" class="btn btn-sm btn-secondary">
                                        <i class="fi fi-go-back"></i>
                                        Update Cart
                                    </button>

                                </div> -->
                                <!-- /UPDATE CART -->

                            </form>

                        </div>

<!-- RIGHT -->

                        <div class="col-12 col-md-4 col-lg-3 order-md-2 mb-5">
                            <?php $this->load->view('cart/checkoutdata');?>

                            <!-- <div  data-load-box="checkoutdata"></div> -->

                            

                        </div>

</div>
</div>
</section>
<?php echo form_open('path/to/controller/update/method'); ?>

<?php
}
?>

    

  



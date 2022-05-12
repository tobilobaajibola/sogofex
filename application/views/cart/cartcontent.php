 <!-- CART -->
        <form class="cartContent clearfix"  id="remove-item" >

                <!-- cart content -->
                 <div class="box-border-shadow">
                      
<!-- cart header -->
                <div class="item head clearfix">
                        <span class="cart_img"></span>
                        <span class="product_name size-13 bold">VOUCHER NAME</span>
                        <span class="remove_item size-13 bold"></span>
                        <span class="total_price size-13 bold">DELIVERY</span>
                        <span class="total_price size-13 bold">RECIPIENT</span>
                        <span class="qty size-13 bold">AMOUNT</span>
                </div>
                <!-- /cart header -->
                <div class="item"></div>

                        <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $k=>$items): ?>

        <?php echo form_hidden('rowid', $items['rowid']); ?>

                        <!-- cart item -->
                        <div class="item" id="item<?php echo $k; ?>">
                                <div class="cart_img float-left fw-100 p-10 text-left"><img src="<?php echo base_url();?>assets/images/home/home/<?php echo $items['options']['giftscards_images']?>" alt="" width="80"></div>
                                <a href="shop-single-left.html" class="product_name">
                                        <span><?php echo $items['name']; ?></span>
                                        <small><p> <?php echo $items['options']['recipient_email'];?></p></small>
                                </a>
                               
                                    <?php //echo form_hidden('qty', 0); ?>
                                        <a data-json='<?php echo json_encode($items); ?>' data-status="status<?php echo $k; ?>" data-index="item<?php echo $k; ?>" data-qty="0" data-row-id="<?php echo $items['rowid']; ?>" class="remove_item"><i class="fa fa-times"></i>
                                        </a>   
                               
                                <div class="total_price">N<span><?php echo $this->cart->format_number($items['subtotal']); ?></span></div>  
                                <div class="qty"> 
                                   <p> <?php echo $items['options']['recipient_email'];?></p>
                                </div>
                                 <div id="status<?php echo $k; ?>">N<span><?php echo $this->cart->format_number($items['subtotal']); ?></span></div>
                                <div class="clearfix"></div>
                        </div>
                        <!-- /cart item -->

                      
<?php $i++; ?>

<?php endforeach; ?>
</div>
                        

                        <!-- update cart -->
           
                        <!-- <button type="submit" class="btn btn-success margin-top-20 margin-right-10 pull-right" tabindex="4"><i class="glyphicon glyphicon-ok"></i>Update Cart</button> -->
                        <!-- <button class="btn btn-danger margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-remove"></i> CLEAR CART</button> -->
                        <!-- /update cart -->

                        <div class="clearfix"></div>
                

        </form>
        <!-- /CART -->
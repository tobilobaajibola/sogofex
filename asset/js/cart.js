var ab_url = "http://localhost/padimi/";

<script type="text/javascript">

 $(document).ready(function() {

   var $el_save = null;
   var url_save = '';
   var $wait_text_save = '';

     function call_get_cart_data($el,url,$wait_text){

       $el_save = $el;
       url_save = url;
       $wait_text_save = $wait_text;
        
        $el.html($wait_text);
         $.ajax({
           type: "get",
           url: ab_url+ url,
 
           success: function(data){
              $el.html(data);             
           }
 
         });  
     }

     call_get_cart_data($('#checkoutdata'),'carts/checkoutdata','Loading check out data ...');
     // call_get_cart_data($('#cartContent'),'carts/cartcontents','Loading cart contents...');
    

// function call_get_cart_content($el,url,$wait_text){

//        $el_save = $el;
//        url_save = url;
//        $wait_text_save = $wait_text;
        
//         $el.html($wait_text);
//          $.ajax({
//            type: "get",
//            url: "<?php echo base_url(); ?>"+ url,
 
//            success: function(data){
//               $el.html(data);             
//            }
 
//          });  
//      }

//      call_get_cart_content($('#cartContent'),'carts/cartcontents','Loading cart contents...');
    

    function add_to_cart(){
      dataString = $("#voucherform").serialize();
 
         $.ajax({
           type: "POST",
           url: ab_url+"carts/addtocart",
           data: dataString,
 
           success: function(data){  
             <?php echo '_toastr("Item Succesfully added to cart","top-right","success",false)'; ?>
           }
 
         });      
    }

    $("#voucherform").submit(function(){
         add_to_cart();
         return false;  
         //stop the actual form post !important!
      });
// clear cart item funtion
    function clear_cart_item(){

      // var status = $obj.data('status');
      console.log('wfw');

          jQuery.ajax({
           type: "POST",
           url: ab_url + "carts/clear_cart",
           success:function(){
            console.log('reached...');
                <?php echo '_toastr("Cart succesfully cleared","top-right","info",false);' ?>
                  call_get_cart_data();  
                setTimeout(function(){
               window.location.href = ab_url+"cart";
            },2000); 
              }
              })
    }
// clear cart 
     $(".clear_cart").on('click',function(event) {
         console.log('clickedcs.');
         clear_cart_item($(this));
        event.preventDefault();
      });

     function remove_cart_item($obj){

       // var data = $obj.data('json');
           // data = JSON.parse(data); 
       
       var row_id = $obj.data('row-id');
       var qty = 0; // $obj.data('qty');
       var status = $obj.data('status');
       console.log(status);
       var $status = jQuery('#' + status);

       $status.html('loading ..');

          jQuery.ajax({
           type: "POST",
           url: ab_url + "carts/update_cart",
           data: {
            rowid:row_id,
            qty:qty
           },
           success:function(data){
            console.log('reached...');
              // if(data){
                $status.html('');
                // alert('success'); 
                // $("#checkoutdata").load('<?php //echo base_url();?>carts');
                remove_cart_container($obj,function(){
                // call_get_cart_content($el_save,url_save,$wait_text_save);
                <?php echo '_toastr("Item Succesfully removed","top-right","info",false);' ?>
                  call_get_cart_data($el_save,url_save,$wait_text_save);  
                });
                // call_get_cart_data($el,url,$wait_text)
                setTimeout(function(){
               window.location.href = ab_url+"cart";
            },2000); 

              // }          
           }
 
         });


     }

     function remove_cart_container($obj,cb){

        $el = jQuery('#' + $obj.data('index'));

        $el.remove();

        if (cb){
          cb();
        }

     }

    // function get_checkout_data(){
   
    //     html("Hello <b>world!</b>");
    // }



        $(".remove_item").on('click',function(event) {
          // event.preventDefault();
         // dataString = $("#remove-item").serialize();
         console.log('clicked.');

         remove_cart_item($(this));
 
         //  jQuery.ajax({
         //   type: "POST",
         //   url: "<?php echo base_url();?>" + "carts/update_cart",
         //   dataType: 'json',
         //   data: dataString,
 
         //   success: function(data){
         //      if(data){
         //      alert('success'); 
         //      }          
         //   }
 
         // });

        event.preventDefault();


      });

        console.log('passed');
    });
                // _toastr("I am a test message","top-right","error",true);

  
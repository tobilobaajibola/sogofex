var ab_url = "http://localhost/padimi/";
  function purchase_product(){
         dataString = $("#purchase_product_forms").serialize();
         console.log('got_here');
              $.ajax({
           type: "POST",
           url: ab_url+"Products/purchase_products",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    // $("#tour_book_section").css('display', 'none');
                    $("#payment_gateway").css('display','block'); 
                console.log(data.email);
                   // alert(data);
                  // get variable value from response
                  var amount = $(this).data('data-amount');
                $(amount).val(data.total_amount);
                var pay_email = data.email;
                var pay_amount = data.total_amount;
                var pay_amount_paystack = data.total_amount_paystack;
                var pay_id = data.transaction_id;
                $('[data-ref]').val(data.transaction_id);
                // document.getElementsByClassName("paystack-trigger-btn")[0].click();
                // payWithPaystack(pay_email, pay_amount, pay_id)

                // trigger paystack payment button
        // var payment_option = $("select[name='payment_method[]']").val();
        var payment_option = 1;
                // alert(payment_option);
                payWithPaystack(pay_email, pay_amount_paystack, pay_id);
                        return false;
                        console.log('i am here');
                if (payment_option == 1) {
                    // call paystack click button
                  //   $(".paystack_click_button").css('display','block'); 
                  // $("#pay_stack_btn").click(function(){
                        payWithPaystack(pay_email, pay_amount_paystack, pay_id);
                        return false;
                        console.log('i am here');
                     // })
                  }

                if (payment_option == 2){
                    // $("#payment_gateway").css('display','block'); 
                    // $("#zilliongift_btn").click(function(){
                        var url = 'https://www.zilliongift.com/redemption'
                        var form = $('<form action="' + url + '" method="post">' +
                                    '<input type="hidden" name="amount" value="' + pay_amount + '" />' +
                                    '<input type="hidden" name="email" value="' + pay_email + '" />' +
                                    '<input type="hidden" name="merchant_ref" value="G2C2RS" />' +
                                    '<input type="hidden" name="response_url" value="http://tour.transport2camp.com/payments/process_payment_zillion" />' +
                                    '<input type="hidden" name="transaction_id" value="' + pay_id + '" />' +
                                    '</form>');
                            $('body').append(form);
                            form.submit();
                    
                         // SUBMIT FORM TO ZILLION
                        return false;
                     // })
                }
    
                }
                else{
                   
                    $('#response_msg').append('<div class="alert alert-danger" role="alert">'+ data.error +'</div>');
                }
                
            }
           });

     }

 $("#purchase_product_forms").submit(function(){
        purchase_product();
        return false;
     })
// pk_live_e34cc6ac22ac304ee4459b64f541ae5eea468c1d
// pk_test_9d00efc0d064cd130a7b7e6e1b6a96dd96e33b2a
function payWithPaystack(pay_email, pay_amount_paystack, pay_id){
    var handler = PaystackPop.setup({
      key: 'pk_live_e34cc6ac22ac304ee4459b64f541ae5eea468c1d',
      email: pay_email,
      amount: pay_amount_paystack,
      ref: pay_id, 
      // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      // metadata: {
      //    custom_fields: [
      //       {
      //           display_name: "Mobile Number",
      //           variable_name: "mobile_number",
      //           value: "+2348012345678"
      //       }
      //    ]
      // },
      callback: function(response){
          // alert('success. transaction ref is ' + response.reference);

            $.ajax({
           type: "POST",
           url: ab_url+"Payments/process_payment",
           // dataType: "json",
           data: response,   

           success:function(data){            
           var data = JSON.parse(data);
           console.log(data);
                    if($.isEmptyObject(data.error)){
                    // post data to pay result 
           console.log(data.transaction_id);
                 // post transaction_id to payresult page to display transaction result
                 $(function() {
                    $('<form action="'+ab_url+'order/result" method="post"><input type="hidden" name="transaction_id" value="'+data.transaction_id+'"></input></form>').appendTo('body').submit().remove();
                });              
              }
         else{

         }

           }
       });
           // setTimeout(function() {
           //  window.location.href = "account/tour/details/"+response.reference}, 
           //  3000);

      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }


    function login_user(formid, formurl){
         dataString = $(formid).serialize();
         // triger loading screen 
         $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(1000);　
          });
              $.ajax({
           type: "POST",
           url: formurl,
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){

                    $("#alert_fail").empty();
                    $("#alert_success").empty();
                    $("#alert_success").css('display', 'block');
                    $(".hide_after_submit").css('display', 'none');
                    $("#alert_success").append('<strong>'+ data.success+'</strong>');
                      // reload the page
                     window.setTimeout(function () {
                           location.reload();
                        }, 3000);

                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();
                    $("#alert_fail").empty();
                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');       

                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(1000);
      },5000);
      });
     }

     function forgot_password(){
         dataString = $("#reset_user_password").serialize();
        $.ajax({
           type: "POST",
           url: ab_url+"Accounts/forgot_passwords",
           // dataType: "json",
           data: dataString,          
  
            success:function(data){
                // var data = JSON.stringify(data);
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    
                    console.log('success');
                    $(".error_msg").css('display','none');
                     $(".success_msg").css('display','block');
                    $(".success_msg").html(data.success);
                    alert(data.success);
                       
                       window.setTimeout(function () {
                           location.reload();
                        }, 3000);

                  }else{

           
                    alert('failed');

                    $(".error_msg").css('display','block');
                    $(".error_msg").html(data.error);
                  
                  }
                  }  
                  });       
     }

 $("#login_user").submit(function(){
        alert('sds');
        login_user();
        return false;  //stop the actual form post !important!
      });

$("#reset_user_password").submit(function(){
        forgot_password();
        return false;  //stop the actual form post !important!
 
      });


// this is a universal function to submit most basic forms
     function form_submitter(formid, formurl){
         dataString = $(formid).serialize();
         // triger loading screen 
         $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(1000);　
          });
              $.ajax({
           type: "POST",
           url: formurl,
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){

                    $("#alert_fail").empty();
                    $("#alert_success").empty();
                    $("#alert_success").css('display', 'block');
                    $(".hide_after_submit").css('display', 'none');
                    $("#alert_success").append('<strong>'+ data.success+'</strong>');

                    $(".show_after_submit").css('display', 'block');
                    // clear everything inside the form
                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();
                    $("#alert_fail").empty();
                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');       

                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(1000);
      },5000);
      });
     }
         window.form_submitter=form_submitter;
      $("#setappraisal").submit(function(){
        setappraisal();
        return false;
     });

    $("#addkpi").submit(function(){
        form_submitter(formid, formurl);
        return false;
     });

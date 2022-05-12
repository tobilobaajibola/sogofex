<?php

function checkout_product_helper(){
			
			$ci = & get_instance();

			$product_id = $_REQUEST['product_id'];
	        $amount = $_REQUEST['amount'];
	        $beneficiary_name = $_REQUEST['beneficiary_name'];
	        $beneficiary_email = $_REQUEST['beneficiary_email'];
	        $beneficiary_phone = $_REQUEST['beneficiary_phone'];
	        $beneficiary_relationship = $_REQUEST['total_amount'];
	        $total_amount = $_REQUEST['total_amount'];
	        // $duration = $_REQUEST['duration'];
	        $duration = 2;
	       	$order_ref = uniqid();
	       	date_default_timezone_set('UTC');
	        $purchase_date =  date ("Y-m-d");
	        $purchase_time =  date("H:i");
	        $transaction_random_string= random_string('alnum', 5);
	        $transaction_id = 'subscribe'.$transaction_random_string.''.$order_ref;
	       

	    	
		
			// save beneficiary
			// save each product order
			// place order
	        foreach ($product_id as $k=>$v) {
	        $beneficiary_random_string = random_string('alnum', 5);
	        $beneficiary_random_string = $beneficiary_random_string.$beneficiary_phone[$k];
	        $beneficiary_array = array(
	        						'beneficiary_name' => $beneficiary_name[$k],
	        						'beneficiary_link_code' => $beneficiary_random_string,
	        						'phone' => $beneficiary_phone[$k],
	        						'email' => $beneficiary_email[$k],
	        						'relationship' => $beneficiary_relationship[$k]
	        						 );
	        // generate code link for beneficiary
	        $ci->Beneficiary->add_beneficiary($beneficiary_array);
	        $beneficiary_id = $ci->db->insert_id();

	      	$transaction_random_string= random_string('alnum', 5);     
			        $purchase_product_data = array(
			                            'product_id' => $product_id[$k],
			                            'user_id' => $_SESSION['user_account']['user_id'],
			                            'order_id'=>$order_ref,
			                            'amount'=>$amount[$k],
			                            'quantity'=>1,
			                            'beneficiary_id'=> $beneficiary_id,
			                            'order_date'=> $purchase_date,
			                            'order_time' => $purchase_time,
			                            'duration_month' => $duration
			                            );
	   				$ci->Product->purchase_product($purchase_product_data);
	       		}

	       		// Save the sum of all product order
	       		 $total_order_data=  array(
	 							'order_ref' => $order_ref,
	 							'user_id' => $_SESSION['user_account']['user_id'],
	 							'email' => $_SESSION['user_account']['email'],
	 							'total_amount' => $ci->input->post('total_amount'),
	 							'transaction_id' => $transaction_id,
	 							'payment_option' => $ci->input->post('payment_option'),
                				'order_status'=> 'processing',
               				 );
	 			$ci->Product->insert_total_order($total_order_data);
	       		
	       				
	         			if($ci->db->affected_rows() > 0)
	         		 {

	                // set the response and exit
	         		 $total_amount = $total_order_data['total_amount'];
	         		 $total_amount_paystack = $total_amount.'00';
	         		  echo  json_encode(['total_amount'=> $total_amount.'00', 'total_amount_paystack'=> $total_amount.'00', 'email'  => $_SESSION['user_account']['email'], 'transaction_id' => $transaction_id]);

           		 }
           	 else{
                //set the response and exit
                $ci->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
}

?>
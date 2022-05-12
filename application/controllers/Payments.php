<?php
/**
 * 
 */
class Payments extends CI_Controller
{
	
	function process_payment($page='')
	{

		verify_session_helper();
		$data= array('');
		//handle paystack response
			if(isset($_POST['reference'])){

       			$transtref=$_POST['reference'];
       			// $transtref='tour3v4lG1';
				$result = array();
				//The parameter after verify/ is the transaction reference to be verified
				// sk_live_bf5c62d154826928927856cf198f78704161cf4d
				// sk_test_7f41634abd2b73d79929d43ca76c2a86cc93f9dd
				$url = 'https://api.paystack.co/transaction/verify/'.$transtref;
				$hh=header('Content-type: application/json');
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, 
							['Authorization: Bearer sk_live_bf5c62d154826928927856cf198f78704161cf4d']
							);
		        curl_setopt($ch, CURLOPT_HEADER, $hh);

			$request = curl_exec($ch);
			curl_close($ch);

			if ($request) {
			  $result = json_decode($request, true);
			}

		if (array_key_exists('data', $result) && array_key_exists('status', $result['data'])) {
					  $data= array('');
				          $data['title'] = ucfirst($page); // Capitalize the first letter
							header('Content-type: text/html');

					

		 $transactionresults=$result; 

		 $transaction_id=$transactionresults["data"]["reference"];
		 
					           
	//store and update order data

				 //first check if amount returned is equal to amount stored
				 $amount_returned=$transactionresults["data"]["amount"];
                 $amount_returned=substr($amount_returned, 0, -2);
                 // put transaction result in an array
	                    $transaction_details = 
	                          array(  
	                          		'amount_returned' => $amount_returned,
	                              	'transaction_status' => $transactionresults["data"]["status"],
	                              	'returned_transaction_ref' =>$transactionresults["data"]["reference"],
	                              	'ip_address' => $transactionresults["data"]["ip_address"],
	                              	'channel' => $transactionresults["data"]["channel"],
	                              	'card_type' => $transactionresults["data"]["authorization"]["card_type"],
	                              	'bank' => $transactionresults["data"]["authorization"]["bank"],
	                              	// 'payment_status' => 1,
	                              	'transaction_date' =>$transactionresults["data"]["transaction_date"],
	                            ); 
	                    	 $data['order_transaction_details'] = $this->Order->get_transaction_order_details($transaction_id, $_SESSION['user_account']['user_id']);
			 					// get list and details of people ordered for
			 				$data['list_product_order'] = $this->Order->list_product_order($data['order_transaction_details']['order_ref']);   		

			 						// Payment helper
	                          		// a helper function to complete payment processing for different payment gateway
			             			process_payment_method_helper($transaction_details, $transaction_id, $transactionresults);
					         	}
					       }
					             else{
							echo json_encode(['response'=>'no posted data']);
					                   
					             	

					             }
								

	}


	function process_payment_zillion(){
	$this->load->library('phpqrcode/ciqrcode');
		$data= array('');
	$transaction_id = $_POST['transaction_reference'];
	// echo $transaction_id;
	$merchant_transaction_key =  'qxnxM8RKHQLR2krASVmp';
	$url = 'https://www.zilliongift.com/verify/'.$transaction_id.'/'.$merchant_transaction_key ;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);
	$result=curl_exec($ch);
	curl_close($ch);

	$transactionresults = json_decode($result, true);
	// var_dump($transactionresults);
	header('Content-type: text/html');

	/**********
					******************/
	// Transaction result parameters
					/******************
	**********/
	if ($transactionresults['response']='success') {
		$response_boolean = true;
	}
	else{
		$response_boolean = false;
	}
	 $transaction_details =  array (
	  'amount_returned' => $transactionresults['item_amount'],
	  'transaction_status' => $transactionresults['response'],
	  'returned_transaction_ref' => $transactionresults['transaction_id'],
	  'transaction_date' => $transactionresults['transaction_time'] );
	 
	$transactionresults =  array($transactionresults, 'status' => $transactionresults['response'], 'data' => array('status' => $response_boolean  ));

	process_payment_method_helper($transaction_details, $transaction_id, $transactionresults);
		
	}
}

?>
<?php

/**
 * 
 */
class Transactions extends CI_Controller
{
	
	function transactions_history()
	{
		$data['transaction_history'] = $this->Transaction->transaction_history($user_id);
		
	}
}

?>
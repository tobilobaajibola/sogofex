<?php
	/**
	 * 
	 */
	class Transaction extends CI_Model
	{
		
		function transaction_history($user_id)
		{
			return $this->db->query("SELECT * from wallet_transaction_history where customer_id = '$user_id'")-> result_array();
		}
	}
?>
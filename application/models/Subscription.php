<?php

class Subscription extends CI_Model
{
	
	function list_subscription($user_id)
	{
		$list_user_subscription = $this->db->query("select * from subscription left join product on (subscription.product_id = product.product_id) left join orders on (subscription.order_id = orders.orders_id) where (subscription.user_id ='$user_id')");
		return $list_user_subscription->result_array();
	}

	function subscription_detail($subscription_id, $user_id){
		$subscription_detail = $this->db->query("select * from subscription where subscription_id = '$subscription_id' and user_id = '$user_id' ");

		return $subscription_detail->row_array();
	}


	function create_subscription($subscription_data)
	{
		$this->db->insert('subscription', $subscription_data);
	}
}
?>
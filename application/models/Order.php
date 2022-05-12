<?php
/**
 * 
 */
class Order extends CI_Model
{
	
	function get_transaction_order_details($transaction_id, $user_id='')
	{	
				
		$order_transaction_details = $this->db->query("select * from orders left join user on (orders.user_id = user.user_id)  where (transaction_id ='$transaction_id' and orders.user_id = '$user_id')");
		return $order_transaction_details->row_array();
	}


	function list_product_order($order_id){
		$product_orders = $this->db->query("select * from product_order left join beneficiaries on (product_order.beneficiary_id = beneficiaries.id)  left join product on (product_order.product_id = product.product_id)  where (product_order.order_id = '$order_id')");
		return $product_orders->result_array();
	}


	function list_product_order_detail($order_id){
		$product_order_detail = $this->db->query("select *, product_order.order_id as product_order_id, product_order.product_id as product_product_id, product_order.beneficiary_id as product_order_beneficiary_id from product_order left join beneficiaries on (product_order.beneficiary_id = beneficiaries.id)  left join product on (product_order.product_id = product.product_id)  where (product_order.order_id = '$order_id')");
		return $product_order_detail->result_array();
	}


// this if function is not yet in use it from list_product_order()
	function list_product_order_subscription($order_id){
		$product_order_subscription = $this->db->query("select * from product_order left join beneficiaries on (product_order.beneficiary_id = beneficiaries.id)  left join product on (product_order.product_id = product.product_id) left join subscription on (product_order.order_id = subscription.product_order_id) where (product_order.order_id = '$order_id')");
		return $product_order_subscription->result_array();
	}

 function get_count_user_order() {
        // return $this->db->count_all($this->'orders')->row_array();
    }

	function list_user_order($user_id, $limit='', $filter=''){
   
		if(!empty($limit)){
			$limit = 'limit'.' '. $limit;
		}
		else{
			$limit = '';
		}

        $this->db->limit($limit);
		$list_user_order = $this->db->query("select * from orders where (user_id ='$user_id' $filter) order by order_date desc $limit ");
		return $list_user_order->result_array();
	}

	function update_transaction_order_details($transaction_details){
		$this->db->where('transaction_id', $transaction_details['returned_transaction_ref']);
		return $this->db->update('orders', $transaction_details);
	}

	function update_product_order($order_id, $response){
		$this->db->where('order_id', $order_id);
		return $this->db->update('product_order', $response);
	}

}
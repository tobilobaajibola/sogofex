<?php
/**
 * 
 */
class Orders extends CI_Controller
{
	

	function order_lists(){
		
		verify_session_helper();
		
		$data['list_order'] = $this->Order->list_user_order($_SESSION['user_account']['user_id'], $limit=5, $filter);
		$this->pagination->initialize($config);
		$data['page_layout']='pages/order/order_list';
		$this->load->view('page_layout', $data);
	}

	function order_details($transaction_id){
		verify_session_helper();
		$data =  array();
		$data['order_detail'] = $this->Order->get_transaction_order_details($transaction_id, $_SESSION['user_account']['user_id']);
		$data['list_product_order'] = $this->Order->list_product_order($data['order_detail']['order_ref']);
		$data['page_layout']='pages/order/order_detail';
		$this->load->view('page_layout', $data);
	}

	// clear cart
	// display order response page
	// list order page
	// order detail page
	// email page

}
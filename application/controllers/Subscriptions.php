<?php
/**
 * 
 */
class Subscriptions extends CI_Controller
{
	
	function subscription_lists(){
		verify_session_helper();
		$data =  array();

		$data['list_subscription'] = $this->Subscription->list_subscription($_SESSION['user_account']['user_id']);
		$data['page_layout']='pages/subscription/subscription_list';
		$this->load->view('page_layout', $data);
	}


	function subscription_details($subscription_id){
		verify_session_helper();
			$data = array();
			$data['subscription_detail'] = $this->Subscription->subscription_detail($subscription_id, $_SESSION['user_account']['user_id']);
			$this->load->view('pages/subscription/subscription_detail', $data);
		
	}
}
?>
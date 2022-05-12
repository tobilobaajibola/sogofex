<?php
class Account extends CI_Model
{
	
	function register_user($register_data, $email_validation_data ){
		$this->db->insert('providers', $register_data);
		// $this->db->insert('email_validate', $email_validation_data);
	}

	function login_user($email){

	$get_login_data = $this->db->get_where('providers',  array('email' =>$email));
			return $get_login_data->row_array();
	}

	function check_user_email($submitted_email){
			$query_check_email = $this->db->get_where('user', array('email' =>$submitted_email ));
			return $query_check_email->row_array();
	}


	function seller_account_detail($email, $reg_code){
		$query_seller_detail = $this->db->query("select * from providers where (email = '$email' and regcode = '$reg_code') ");
		return $query_seller_detail->row_array();
	}


	function account_activity($company_id, $limit){
		$query_activity = $this->db->get_where('activity', array('company_id' =>$company_id ), $limit);
			return $query_activity->result_array();
	}

	function update_user_password($user_email, $password_details){
		$this->db->where('email', $user_email);
		return $this->db->update('user',$password_details);
	}

	function update_seller($provider_id, $seller_data){
		$this->db->where('provider_id', $provider_id);
		return $this->db->update('providers', $seller_data);
	}

	function edit_user_profile($request_data, $user_id){
		$this->db->where('user_id', $user_id);
		return $this->db->update('user',$request_data);

	}

	function verify_email($validation_key){
		// $this->db->where('email', $email);
		$this->db->where('validation_key', $validation_key);
		return $this->db->update('email_validate', array('status'=>1));
	}
}
?>
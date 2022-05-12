<?php
/**
 * 
 */
class Beneficiary extends CI_Model
{
	
	function get_beneficiaries()
	{
		
	}


	function add_beneficiary($beneficiary_data){
		$this->db->insert('beneficiaries', $beneficiary_data);
	}


	function get_beneficiary($beneficiary_id){
		$get_beneficiary = $this->db->query("select * from beneficiaries where (id = $beneficiary_id)");
		return $get_beneficiary-> row_array();

	}

	function get_beneficiary_details($beneficiary_link_code){
		$get_beneficiary_detail = $this->db->query("select * from beneficiaries where (beneficiary_link_code = '$beneficiary_link_code')");
		return $get_beneficiary_detail-> row_array();
	}

	// function get_beneficiary_product_order_detail($beneficiary_id, $order_id){
	// 	$this->db->query("select * from product_order where beneficiary_id = $beneficiary_id and order_id = $order_id")
	// }

	function edit_beneficary($beneficiary_data){
		$this->db->where('beneficiary_link_code', $beneficiary_data['beneficiary_link_code']);
		return $this->db->update('beneficiaries', $beneficiary_data);
	}
}
?>
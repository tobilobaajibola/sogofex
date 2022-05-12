<?php
/**
 * 
 */
class Box extends CI_Model
{
	
	function list_provider()
	{
		$list_hospital = $this->db->query("select * from providers");
		return $list_hospital -> result_array();
	}

	function list_brand($limit = NULL){
		$list_brand = $this->db->query("select * from brand  limit $limit");
		return $list_brand -> result_array();
	}

	function add_brand(){

	}


}
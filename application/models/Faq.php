<?php
/** 
* 
*/
class Faq extends CI_Model
{
	
	function get_faq()
	{
		$query_faq = $this->db->get_where('faq', array('status'=> 1));
        return $query_faq->result_array();  	
	}

	function get_faq_category()
	{
        $query_faq_category=$this->db->group_by('category');
        $query_faq_category=$this->db->get('faq'); 
        return $query_faq_category->result_array();

	}
}
?>
<?php 
/**
 * 
 */
class AdminProduct extends CI_Model
{
	
	function list_product()
	{
		return $this->db->query('select * from product')->result_array();
	}


	function admin_list_product_category(){
		
		$list_product_category=$this->db->query("select *, product_category.category_id as product_category_id,
			product_category_description.name as category_name
			from product_category left join product_category_description on (product_category.category_id = product_category_description.category_id) where (product_category.status = 1 ) ");

		return $list_product_category -> result_array();
	}

	function count_seller_product($seller_id){
		return $this->db->query("select count(*) as count_product from product where (provider_id = '$seller_id')")->row_array();
	}

	function seller_product($seller_id, $offset=null, $limit = null){
		$this->db->limit($limit, $offset);
		// $this->db->order_by('product_id', 'desc');
		$this->db->join('brand', 'brand.brand_id = product.brand_id', 'left');
		$list_seller_product =$this->db->get_where('product', array('provider_id'=> $seller_id));
		return $list_seller_product-> result_array();
	}


	function seller_product_order($seller_id, $limit=''){
		$this->db->limit(4);
		$this->db->order_by('order_id', 'desc');
		$this->db->join('product', 'product.product_id = product_order.product_id', 'left');
		$list_seller_product =$this->db->get_where('product_order', array('product.provider_id'=> $seller_id));
		return $list_seller_product-> result_array();
	}

	// show the number of views accross all product for seller
	function seller_product_view(){
// 		SELECT
// MONTH(starttime),
// COUNT(*)
// FROM cc_calls
// GROUP BY MONTH(starttime)
	}

	// function seller_count_order(){
	// 	return $this->db->query("select count(*) as count_product from product where (provider_id = '$seller_id')")->row_array();
	// }


	function product_brand(){
		return $this->db->query("select * from brand")->result_array();

	}
}
?>
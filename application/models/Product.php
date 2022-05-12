<?php
/**
 * 
 */
class Product extends CI_Model
{
	

	function add_product($product_data){
		$this->db->insert('product', $product_data);
	}

	function add_product_image($product_image_data){
		$this->db->insert('product_images', $product_image_data);
	}

	function add_product_category($product_category_data){
		$this->db->insert('product_to_category', $product_category_data);
	}

	function list_product($offset ='', $limit='')
	{
		// if(!empty($product_category)){
		// 	$parmeters = 'where pr'
		// }
		$list_product = $this->db->query("select * from product limit $offset, $limit");
		return $list_product -> result_array();
	}

	function list_product_category_features($product_id){
		$list_product_category_features = $this->db->query("select p.features FROM product_features p, product_to_feature f where f.product_id = '$product_id' and p.id = f.product_feature_id");
		return $list_product_category_features -> result_array();
	}

	function list_product_category($product_category_id){
		// $list_product_category = $this->db->query("select * from product_category_description");
		// return $list_product_category -> result_array();

		$list_product_category=$this->db->query("select *, product_category.category_id as product_category_id, product_category_description.name as category_name from product_category left join product_category_description on (product_category.category_id = product_category_description.category_id) where (product_category.status = 1 AND (product_category.parent_id = 0 )) ");
		// product_category.parent_id = 0 OR  product_category.category_id = '$product_category_id'
		return $list_product_category -> result_array();
	}


	function list_product_sub_category($product_category_id){
		// $list_product_category = $this->db->query("select * from product_category_description");
		// return $list_product_category -> result_array();

		$list_product_category=$this->db->query("select *, product_category.category_id as product_category_id, product_category_description.name as category_name from product_category left join product_category_description on (product_category.category_id = product_category_description.category_id) where (product_category.status = 1 AND product_category.parent_id = '$product_category_id') ");

		return $list_product_category -> result_array();
	}


	function get_product_category($category){
         // $query = $this->db->get_where('product_category_description', array('slug_url' => $category));
         $query =$this->db->query("select *, product_category.category_id as product_category_id  from product_category_description 
         	left join product_category on (product_category_description.category_id = product_category.category_id) where (product_category.status = 1 AND product_category_description.slug_url = '$category') ");

         return $query -> row_array();
	}


	
	function get_products($product_category, $offset, $limit)
	{
		$query_get_products=$this->db->query("select *, 
			product.product_id as  product_id	 from product 
			left join product_to_category on (product.product_id = product_to_category.product_id )
			left join product_category on (product_to_category.category_id = product_category.category_id) 
			left join product_category_description on (product_category.category_id = product_category_description.category_id) 
			left join providers on (product.provider_id = providers.provider_id )
			left join brand on (product.brand_id = brand.brand_id )

			where (product_category_description.slug_url = '$product_category' OR 	providers.provider_slug = '$product_category' OR brand.brand_slug = '$product_category') LIMIT $offset,  $limit ");


		return $query_get_products -> result_array();
	}


	function list_product_history($user_id){
		$list_product_history = $this->db->query("select * from product_order where (user_id = '$user_id')");
		return $list_product_history -> result_array();
	}


	function product_detail($product_slug){
		$product_detail = $this->db->query("select * from product left join providers on (product.provider_id and providers.provider_id) where (product_slug_url = '$product_slug') ");
		return $product_detail->row_array();
	}

	function product_detail_by_id($product_id){
		$product_detail = $this->db->query("select * from product where (product_id = '$product_id') ");
		return $product_detail->row_array();
	}

	function  list_product_feature($product_id, $category_id){
		return  $this->db->query("select f.features, (SELECT count(*) FROM product_to_feature p where p.product_id = '$product_id' and f.id = p.product_feature_id )feature_count from product_features f where f.category_id = '$category_id'")->result_array();
	}


	function list_product_image($product_id){
		return  $this->db->query("select * from product_images where (product_id = '$product_id') ")->result_array();	
	}



	function list_product_by_seller($seller_id, $current_product_id){
		$list_product_by_seller = $this->db->query("select * from product where provider_id = $seller_id and product_id <> $current_product_id");
		return $list_product_by_seller -> result_array();
	}


	function purchase_product($purchase_product_data){
		$this->db->insert('product_order', $purchase_product_data);
	}


	function insert_total_order($total_order_data){
		$this->db->insert('orders', $total_order_data);
	}


	// featured product
	function add_featured_product($product_id){
		$this->db->insert('product_featured', array('product_id'=> $product_id));
	}

	function get_featured_product(){
		$product_featured = $this->db->query("select * from product_featured f left join product p on (f.product_id = p.product_id) order by rand() limit 4");
		return $product_featured->result_array();
	}

	function get_newly_added_product(){
		$product_newly_added = $this->db->query("select * from product order by product_id desc limit 6");
		return $product_newly_added->result_array();
	}


	function list_product_brand(){
		return $this->db->query("select brand_name, brand_slug, (select count(brand_id) from product where brand.brand_id = product.brand_id)brand_count from brand")->result_array();
	}

	function search_product($keyword){
		$search_product = $this->db->query("select product_name, product_slug_url from product  where product_name like '%$keyword%' limit 20");
		return $search_product->result_array();
	}
}
?>
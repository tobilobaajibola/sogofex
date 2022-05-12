<?php
/**
 * 
 */
class Products extends CI_Controller
{
// 	Purchase product
// list product
// product detail
// list product history 
	function list_products($product_category='' )
	{
		// set pagination
		if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
		$config['total_rows'] = 50;
		$limit = $config['per_page'] = 12;
		$offset = ($page-1)*$limit;


		$this->pagination->initialize($config);

		 $data= array(''); 
         // $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_title'] = $product_category;

		 // if its a  category list
		 $data['product_category'] = $product_category;
		 // get category data
		 $data['product_category_details']= $this->Product->get_product_category($product_category);
		 $product_category_id = $data['product_category_details']['category_id'];
		 $data['list_product_category']= $this->Product->list_product_category($product_category_id);
		 // list brands
		 $data['list_brand']=$this->Product->list_product_brand();

		 if(empty($product_category)){
		$data['list_product']= $this->Product->list_product($offset, $limit);
		}
		else{
		$data['list_product']= $this->Product->get_products($product_category, $offset, $limit);
	// foreach ($data['list_product'] as $list_productss) {
	// 	$data['list_feature'] = $this->Product->list_product_feature($list_productss['product_ids'], $list_productss['category_id']);	
	// 	}
	}

	

         $data['page_layout']='pages/product';    
         $this->load->view('page_layout', $data);
	}

	function product_categories(){
		$data= array();
		$data['page_layout']='pages/product_category';    
         $this->load->view('page_layout', $data);
	}

	function product_details($product_slug){
		 $data= array('');   


		 // trim the product slug url of the ?ajax=true
		 $product_slug = rtrim($product_slug, "-?"); 
		 $product_slug = rtrim($product_slug, "?"); 
		 $data['product_detail']= $this->Product->product_detail($product_slug);
		 $data['product_feature'] = $this->Product->list_product_category_features( $data['product_detail']['product_id']);
		 $data['product_image'] = $this->Product->list_product_image($data['product_detail']['product_id']);
		 $data['product_by_seller']=$this->Product->list_product_by_seller($data['product_detail']['provider_id'], $data['product_detail']['product_id']);
         $data['page_layout']='pages/product_detail';   
         $this->load->view('page_layout', $data);
	}

	function purchase_products(){

	    checkout_product_helper($_REQUEST, $_SESSION);
	}
}



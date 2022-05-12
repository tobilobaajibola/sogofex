<?php
/**
 * 
 */
class Pages extends CI_Controller
{
	
	function admin_indexes()
	{
		verify_session_helper();
		$data['page_layout']='pages/admin/index';    

		$data['count_product'] = $this->AdminProduct->count_seller_product($_SESSION['seller_account']['provider_id']);
		// latest products
		$data['list_seller_product'] = $this->AdminProduct->seller_product($_SESSION['seller_account']['provider_id'], 0,4);
		// latest order
		$data['list_seller_order'] = $this->AdminProduct->seller_product_order($_SESSION['seller_account']['provider_id']);
        $this->load->view('admin_page_layout', $data);
	}

	function admin_product_lists(){
		verify_session_helper();
		// $data['list_product'] = $this->AdminProduct->list_product();
		$data['count_product'] = $this->AdminProduct->count_seller_product($_SESSION['seller_account']['provider_id']);
		// set pagination
		if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
		$config['total_rows'] = $data['count_product']['count_product'];
		$limit = $config['per_page'] = 6;
		$offset = ($page-1)*$limit;
		$this->pagination->initialize($config);

		$data['list_seller_product'] = $this->AdminProduct->seller_product($_SESSION['seller_account']['provider_id'], $offset,  $limit);
		$data['page_layout']='pages/admin/product_list';    
        $this->load->view('admin_page_layout', $data);
	}


	function admin_products_add(){
		verify_session_helper();
		 $data['product_category']=$this->AdminProduct->admin_list_product_category();
		 $data['product_brand'] = $this->AdminProduct->product_brand();
		$data['page_layout']='pages/admin/product_add';    
        $this->load->view('admin_page_layout', $data);
	}


	function admin_products_edit($product_slug)
	{
		verify_session_helper();
		$data['product_detail']= $this->Product->product_detail($product_slug);
		$data['product_image'] = $this->Product->list_product_image($data['product_detail']['product_id']);
		$data['product_category']=$this->AdminProduct->admin_list_product_category();
		$data['page_layout']='pages/admin/product_edit';    
        $this->load->view('admin_page_layout', $data);
	}
	
}
?>
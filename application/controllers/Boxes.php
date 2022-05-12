<?php
/**
 * 
 */
class Boxes extends CI_Controller
{
	
	public function settings()
	{
		$data = array();
        $this->load->view('box/settings', $data);
	}

	function list_products($product_category = ''){
		$data = array();
		if(empty($product_category)){
		$data['list_product']= $this->Product->list_product();
	}
	else{
		
		$data['product_category_details']= $this->Product->get_product_category($product_category);
	   
		$data['list_product']= $this->Product->get_products($product_category, 100);
	foreach ($data['list_product'] as $list_productss) {
		$data['list_feature'] = $this->Product->list_product_feature($list_productss['product_ids'], $list_productss['category_id']);	
		}

}
		$this->load->view('box/list_product', $data);
	}



	function search_product(){
		$data['list_product']= $this->Product->list_product();
	}

	function search_product_category(){

		// $data['product_category_details']= $this->Product->get_product_category($product_category);
	}
	


	function list_product_histories(){
		$data = array();
		$user_id = '1';
		$data['product_history']= $this->Product->list_product_history($user_id);
		$this->load->view('box/list_product_history', $data);
	}

	function list_transaction_histories(){
		$data = array();
		$user_id = 1;
        $data['transaction_history']= $this->Transaction->transaction_history($user_id);
		$this->load->view('box/list_transaction_history', $data);
	}

	
	function checkoutdata(){
		$data = array();
		$this->load->view('cart/checkoutdata', $data);
	}


	function list_product_category_features($product_id, $category_id){
		$data = array();
		$data['list_feature'] = $this->Product->list_product_feature($product_id, $category_id);	
		$this->load->view('box/list_product_category_features', $data);
	}

	
	function product_sub_category($product_category_id){
		$data['product_category_id']= $product_category_id;
		$data['product_sub_category'] = $this->Product->list_product_sub_category($product_category_id);
		$this->load->view('box/list_product_sub_category', $data);
	}



	function product_main_category_header(){
		$product_category_id = '';
		$data['main_category_header'] = $this->Product->list_product_category($product_category_id);
		$data['product_sub_category'] = $this->Product->list_product_sub_category($product_category_id);
		$this->load->view('box/main_product_category_header', $data);
	}

	function product_sub_category_header($product_category_id){

		$data['product_sub_category'] = $this->Product->list_product_sub_category($product_category_id);
		$this->load->view('box/sub_product_category_header', $data);
	}

// ---------------
	function list_blog_box(){
		$page=1;
		$post_per_page = 5;
		$page_offset = 0;
		$category='';
	    $page_offset = $page * $post_per_page - $post_per_page;
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/posts?per_page=$post_per_page&&offset=$page_offset",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		  'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'
		));
		curl_setopt($curl, CURLOPT_HEADER, 0);
	  	$response = curl_exec($curl);
		curl_close($curl);
		$response = json_decode($response, true);
		$data['blogposts'] = $response;
		$this->load->view('box/list_blog_box', $data);
 }
	

function suggest_related_search(){
	$arrayName = array('label' => "Overview / Intro",
						'url' => "overview.html" );
	echo json_encode([$arrayName]);
}

function product_search_suggest(){
	$keyword = $_GET['user_keywords'];
	$data['search_result'] = $this->Product->search_product($keyword);
	if(!empty($data['search_result'])){
		foreach ($data['search_result'] as $search_results) {
			$search_results = array('label'=>$search_results['product_name'],
									'url' => $search_results['product_slug_url']);

		echo json_encode([$search_results]);
		}

	}

}

}
?>
<?php
/**
 * 
 */
class Products extends CI_Controller
{
	
	function add_products()
	{
		verify_session_helper();

		// sellers detail
	$data['seller_detail'] = $this->Account->seller_account_detail($_SESSION['seller_account']['email'], $_SESSION['seller_account']['regcode']);
var_dump($data['seller_detail']);
if (isset($_POST['add_product'])) {
	// code
		// get sellers details
	if($data['seller_detail']['max_qty'] > 0){
		$quantity_left =  $data['seller_detail']['max_qty'] - 1;
		$seller_data  = array('max_qty' => $quantity_left);
		$this->Account->update_seller($data['seller_detail']['provider_id']);
		$upload_dir='resource';
			
		   $_FILES['product_image']['name']= $_FILES['product_image']['name'];
		   $_FILES['product_image']['type']= $_FILES['product_image']['type'];
		   $_FILES['product_image']['tmp_name']= $_FILES['product_image']['tmp_name'];
		   $_FILES['product_image']['error']= $_FILES['product_image']['error'];
		   $_FILES['product_image']['size']= $_FILES['product_image']['size'];  

    		$config['encrypt_name']         = true;
			$config['upload_path']          = 'assets/images/product/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 100000;
			$config['max_width']            = 20024;
			$config['max_height']           = 20024;
		
			$this->upload->initialize($config);
			if ($this->upload->do_upload('product_image'))
			{
			 $data['file_name'] = $this->upload->data('file_name');
			    $success_response = array( 'success' => 200,
			        'filename' => $data['file_name'],
			        );
			}
			else
			{
			    $data['upload_error'] = $this->upload->display_errors();
			  echo  json_encode(['error' => $data['upload_error']]) ; 
			  print_r($_FILES['product_image']);
			}
    	// remove special character
		$product_slug_url = str_replace(' ', '-', $_POST['product_name']);
		$product_slug_url = stripslashes($product_slug_url);
		$product_slug_url = preg_replace('/[0-9\@\.\;\" ")(,]+/', '', $product_slug_url);
		$product_slug_url = str_replace('/', '', $product_slug_url);
		
		$product_data = array('product_name'=> $this->input->post('product_name'),
							  'product_image'=>$data['file_name'],
							  'product_price'=>$this->input->post('product_price'),
							  'product_description'=> $this->input->post('product_description'),
							  'brand_id'=> $this->input->post('product_brand_id'),
							  'product_slug_url'=>$product_slug_url,
							  'provider_id'=>$_SESSION['seller_account']['provider_id'],
							  'qty'=>$this->input->post('qty'),
							  'status'=>$this->input->post('product_status'),
							  'pricing_type'=>$this->input->post('pricing_type'),
							  'product_type'=>$this->input->post('product_type'),
							  'unit_measure'=>$this->input->post('unit_measure'),
							  'date_added'=>date('yyyy-mm-dd')
							  );
		$this->Product->add_product($product_data);

		if($this->db->affected_rows()>0){
		$product_id = $this->db->insert_id();
			// add to featured product if it is platinum and if add to featured is selected
		if($this->input->post('feature_product')==1){
			$this->Product->add_featured_product($product_id);
		}
		$product_category= $_POST['category_id'];
		foreach($product_category as $k=>$v){
			$product_category_data = array('category_id' =>	$_POST['category_id'][$k],
									'product_id' => $product_id );
			$this->Product->add_product_category($product_category_data);
		}

// POST TO TCP

			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://tcp.sogofextrade.com/tcphooks/rest/api/saveProductdsd',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			   CURLOPT_POSTFIELDS =>'{"productId":'.intval($product_id).',
			   						  "productName":"'.$product_data['product_name'].'",
			   						  "productQty":'.intval($product_data['qty']).',
			   						  "partyId":"'.intval($_SESSION['seller_account']['party_id']).'",
							"productPrice":'.floatval($product_data['product_price']).'}',
			  CURLOPT_HTTPHEADER => array(
			    'Content-Type: application/json'
			  ),	));
			// curl_setopt($curl, CURLOPT_HEADER, $hh);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			$response = curl_exec($curl);

			$response = json_decode($response, true);
			if ($response == NULL) {
    $response = curl_error($curl);
}
			curl_close($curl);
			// var_dump($response);
			// redirect(base_url().'admin/product_detail/'.$product_slug_url, 'refresh'); 
			
		// foreach($_FILES['product_image']['name']as $k=>$v){
		// $product_image_data = array('image' =>$_FILES['product_image']['name'][$k], 'product_id' => $product_id );
		// $this->Product->add_product_image($product_image_data);
		// }
}
}
	
}
	 $data['product_category']=$this->AdminProduct->admin_list_product_category();
		 $data['product_brand'] = $this->AdminProduct->product_brand();
		$data['page_layout']='pages/admin/product_add';    
        $this->load->view('admin_page_layout', $data);

	
}


function admin_product_detail($product_slug){
	 $product_slug = rtrim($product_slug, "-?"); 
		 $product_slug = rtrim($product_slug, "?"); 
		 $data['product_detail']= $this->Product->product_detail($product_slug);
		 $data['product_image'] = $this->Product->list_product_image($data['product_detail']['product_id']);
		  $data['page_layout']='pages/admin/product_detail';   
         $this->load->view('admin_page_layout', $data);
}


	function edit_products($product_id)
	{

	}


	function remove_products()
	{

	}

	function upload_product_image(){

	// 	if(isset($_POST) && !empty($_POST))
	// 	print_r($_POST); 	// params

	// if(isset($_FILES) && !empty($_FILES))
	// 	print_r($_FILES); 	// files

	// die;


			$data = array();
			$upload_dir='resource';
			
    		// $config['encrypt_name']         = true;
    		// $product_images = $_FILES['product_image'];
    		$count = count($_FILES['product_image']['name']);
    		$product_image = $_FILES['product_image'];
    			for($i = 0; $i < $count; $i++) {
    			 
    	if(!empty($_FILES['product_image']['name'][$i])){
    			
		   $_FILES['product_image']['name']= $_FILES['product_image']['name'][$i];
		   $_FILES['product_image']['type']= $_FILES['product_image']['type'][$i];
		   $_FILES['product_image']['tmp_name']= $_FILES['product_image']['tmp_name'][$i];
		   $_FILES['product_image']['error']= $_FILES['product_image']['error'][$i];
		   $_FILES['product_image']['size']= $_FILES['product_image']['size'][$i];  

			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|xlsx|csv';
			$config['max_size']             = 100000;
			$config['max_width']            = 20024;
			$config['max_height']           = 20024;
		
			$this->upload->initialize($config);
			if ($this->upload->do_upload('product_image'))
			{
			 $data['file_name'] = $this->upload->data('file_name');
			    $success_response = array( 'success' => 200,
			        'filename' => $data['file_name'],
			        );
			}
			else
			{
			    $data['upload_error'] = $this->upload->display_errors();
			  echo  json_encode(['error' => $data['upload_error']]) ; 
			  print_r($_FILES['product_image']);



			    // return response
			    // echo json_encode($_FILES["fileToUpload"]);
		// array_push($post_data, array('post_date' => date('Y-m-d')));

			}
		}
		}

	// }
}
}
?>

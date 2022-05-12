<?php
	function product_sub_category_header_helper($product_category_id){
			$ci = & get_instance();
		$data['product_sub_category'] = $ci->Product->list_product_sub_category($product_category_id);
		$ci->load->view('box/sub_product_category_header', $data);
	}
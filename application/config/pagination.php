<?php

	$config['page_query_string'] = TRUE;
	$config['use_page_numbers'] = TRUE;
	$config['query_string_segment'] = 'page';
	$config['reuse_query_string'] = FALSE;
	$config['attributes'] = array('class' => 'page-link');
	$config['first_tag_open'] = '<li class="page-item ">';
	$config['first_tag_close'] = '</li>';
	$config['prev_link'] = '<li class="page-item disabled">';
	$config['prev_tag_open'] = '</li>';
	$config['prev_link'] = 'Previous';
	$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li class="page-item">';
	$config['num_tag_close'] = '</li>';
	$config['next_link'] = 'Next';
	$config['next_tag_open'] ='<li class="page-item">';
	$config['next_tag_close'] = '</li>';
?>
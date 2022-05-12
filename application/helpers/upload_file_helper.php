<?php
 function file_upload_helper($upload_dir='')
{
	$ci =& get_instance();
	$config['upload_path']          = './'.$upload_dir.'/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 100000;
    $config['max_width']            = 20024;
    $config['max_height']           = 20024;
    // $config['encrypt_name']         = true;
                
     $ci->load->library('upload', $config);
    $ci->upload->initialize($config);

}
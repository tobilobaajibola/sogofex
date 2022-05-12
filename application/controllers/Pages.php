<?php
class Pages extends CI_Controller {

		  public function index($page = NULL)
        {
       
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
        $data['featured_product'] = $this->Product->get_featured_product();
        $data['newly_added'] = $this->Product->get_newly_added_product();
        $data['list_brand'] = $this->Box->list_brand(10);
         $data['page_layout']='pages/index';    
         $this->load->view('page_layout', $data);
        }



        public function view($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/'.$page;    
         $this->load->view('page_layout', $data);
        }


        



        function page_not_found(){
         $data['page_layout']='pages/404';    
         $this->load->view('page_layout', $data);

        }
      
    }
?>
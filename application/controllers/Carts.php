<?php

/**
* 
*/
class Carts extends CI_Controller
{
	public function __construct()
		{
				parent:: __construct();
               if(!isset($_SESSION)){
                // session_start();
            }
           		$this->load->library('cart');
          
		}

	function addtocart()
	{

    $product_id= $this->input->post('product_id');
        // $product_id = 3;
    $data['product'] = $this->Product->product_detail_by_id($product_id);
    $cart_id=sha1($product_id);

    // $cart_id=uniqid();
	$data = array(
        array(
                'id'      => $cart_id,
                'qty'     => 1,
                'price'   => $data['product']['product_price'],
                'name'    => $data['product']['product_name'],
                'options' => array( 'product_image' => $data['product']['product_image'],
                                    )
        )

        );

                $this->cart->insert($data);
                echo  json_encode(['success'=>'Successfully Added to Cart <br/><small><a href="'.base_url().'cart">view cart</a></small>']);  

                                        
          //        $data['page_layout']='cart/view_cart';
          //       $this->load->view('page_layout', $data);
          // redirect('cart', 'refresh') ; 
	}

	function view_cart(){
        $data['page_layout']='pages/cart';
		$this->load->view('page_layout', $data);
        
	}

        function update_cart(){
                $data = array(
                'rowid' => $this->input->post('rowid'),
                'qty'   => $this->input->post('qty')
                );

                $this->cart->update($data);
        }
        function remove_cart_item($rowid){
            $data = array(
                'rowid' => $rowid,
                'qty'   => 0
                );
                $this->cart->update($data);
                redirect(base_url().'cart', 'refresh');
        }

        function clear_cart(){
                $this->cart->destroy();
        }

    function checkoutdata(){
        $data=array();
        $this->load->view('cart/checkoutdata', $data);
    }

     function cartcontents(){
        $data=array();
        $this->load->view('cart/cartcontent', $data);
    }


}
?>
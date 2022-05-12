<?php
/**
 * 
 */
class Accounts extends CI_Controller
{

	function admin_account_settings(){
	
	verify_session_helper();
	$data['seller_detail'] = $this->Account->seller_account_detail($_SESSION['seller_account']['email'], $_SESSION['seller_account']['regcode']);
	$data['page_layout']='pages/admin/setting';    
        $this->load->view('admin_page_layout', $data);
	}

	function reset_password(){
		$password = password_hash('test123', PASSWORD_BCRYPT);
        // $password_details  = array('password' => $password);
        $username = 'taj00';
		$this->Account->update_user_password($username, $password);
	unset($_SESSION['seller_account']);
	redirect(base_url().'login', 'refresh'); 

	}
	
	function login()
	{
		$data =array();
		if(isset($_SESSION['seller_account'])){
		$username= $_SESSION['seller_account']['email'];
		$data['user_data'] = $this->Account->login_user($username);
			redirect(base_url().'admin', 'refresh'); 
		}
		else{
     		$this->load->view('pages/admin/login', $data);
		    }     
	}

	function login_account(){
		if(isset($_SESSION['seller_account'])){
		$username= $_SESSION['seller_account']['email'];
		$data['user_data'] = $this->Account->login_user($username);
			redirect(base_url().'statement', 'refresh'); 
		}
		
		elseif(isset($_REQUEST['login'])){
	 	$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
					echo "strings";

		}

		else{
	
			// check if username submitted exists
			$submitted_username=$this->input->post('username');
			$data['verify_username']=$this->Account->login_user($submitted_username);
			
			if ($data['verify_username']==TRUE) {
			
			$hashed_username=$data['verify_username']['password'];
			$password=password_verify($this->input->post('password'), $hashed_username);
		
 			if ($password >= 1){
 				$login_data =  array('regcode' =>$data['verify_username']['regcode'], 'provider_id' =>$data['verify_username']['provider_id'],  'party_id' =>$data['verify_username']['partyid'],'email' => $data['verify_username']['email'],'plan' => $data['verify_username']['plan'],  'name'=>$data['verify_username']['provider_name'] );
 				// hook the session to login data
				$_SESSION['seller_account'] = $login_data;
				
				// return true;
				// get user login info
				$username=$data['verify_username']['email'];
				// $data['user_data'] = $this->Account->login_user($username);
				// send response message
				// $data['response_msg'] = '<div class="alert alert-mini alert-success mb-30">												
				// <strong>Successfully logged in!</strong>
				// 						 </div>';
				// redirect(base_url().'statement', 'refresh');
				echo json_encode(['success' => '<div class=" alert-text text-success   mb-30" "><strong>Successfully Logged in </strong> </div>']);

				
			}
			else{
				// unset($_SESSION['access_seller_account']);
				// return false;
				echo json_encode(['error' => '<div class=" alert-text text-danger   mb-30" "><strong>Wrong Credentialss </strong> </div>']);
  
			}
			
}
       else{
				echo json_encode(['error' =>'<div class="alert-text text-danger   mb-30""><strong>Wrong Credentials </strong></div>']);
       }
   }


  }
  
  
	}

	function register_users(){
   		$data =array();

	// $this->form_validation->set_rules('last_name', 'Last name', 'required');
	// $this->form_validation->set_rules('first_name', 'First name', 'required');
	// $this->form_validation->set_rules('password', 'Password', 'required');
	// $this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
     // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
 //   if($this->form_validation->run()==FALSE)
 //     {
	// // $this->form_validation->set_message('username' , 'fkslhfjsad');

 //         $data['error']=validation_errors();
 //            echo json_encode(['error'=>$data['error']]);
 //            // echo json_encode(['error'=>$errors]);

 //     }
            
 //     else{
   // Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
    //     Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
    //     Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
   		header('Content-Type: application/json; charset=utf-8');
   		
     $this->form_validation->set_rules('partyEmail', 'Email', 'required|valid_email|is_unique[providers.email]');
	$password=password_hash($this->input->post('password'), PASSWORD_BCRYPT);
     	$register_data = array('provider_name'=>$this->input->post('partyName'),
   				'phone'=>$this->input->post('partyPhone'),
   				'city'=>$this->input->post('counterpartycity'),
   				'password'=>$password,
   				'confirm-password'=>$this->input->post('confirmpassword'),
   				'interest'=>$this->input->post('serviceofinterest'),
   				'email'=>$this->input->post('partyEmail'),
   				'partytype'=>$this->input->post('partyType'),
   				'partyid'=>$this->input->post('partyId'),
   				'country'=>$this->input->post('country'),
   				'goods-offered'=>$this->input->post('goodsoffered'),
   				'partyadd'=>$this->input->post('partyAdd'),
   				'refno'=>$this->input->post('refno'),
   				'regcode'=>$this->input->post('code'),
   				'tax-no'=>$this->input->post('taxno'),
   				'transact-date'=>$this->input->post('transactiondate'),
   				'plan-amount'=>$this->input->post('planamount'),
   				'expiry-date'=>$this->input->post('expirydate'),
   				'referer'=>$this->input->post('referer'),
   				'plan'=>$this->input->post('plan'));

	// generate a validation key
	$validation_key = md5(uniqid(rand(), true));
	$email_validation_data = array('email' => $register_data['email'],
									 'status' => 0,
									 'validation_key' => $validation_key);

	$data['register_data'] = $register_data;
	$data['email_validation_data']= $email_validation_data;
	// register the user 
	$this->Account->register_user($register_data, $email_validation_data);
       if ($this->db->affected_rows() > 0) {
  	echo  json_encode(['success'=>'Successfully Registered']);	
	

	    // // send Successfull registration email
	     $this->email->from('admin@sogofex.com', 'Sogofex');
            $this->email->to($register_data['email']);
            $this->email->subject('Ecommerce account Successfully Created');
            $this->email->message($this->load->view('email/welcome', $data, true ));
            // enable on live
            $this->email->send();

            // login with submitted details
          // login_after_register_helper($_REQUEST['password'], $_REQUEST['email']);
            }
            else{
  	echo  json_encode(['error'=>'Registration Unsuccessful']);	

            }
	// }
	// $data= array();
 //     $data['page_layout']='account/sign-up';
	// $this->load->view('page_layout', $data);

}


	function logout(){
		if(isset($_SESSION['seller_account'])){
			unset($_SESSION['seller_account']);
			// header("admin");
			echo "logged out";
			redirect(base_url(), 'refresh'); 
		}
	}
}
?>
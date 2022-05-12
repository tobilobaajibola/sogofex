<?php
/**
* 
*/
class Accounts extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		// $this->load->model(array('Account'));
		$data= array();

		// $this->load->library('session');
// $this->session
	}

	function account_page(){
		
		$data= array();
		$this->load->view('pages/account/account', $data);
	}

	function dashboards(){
		verify_session_helper();
		$data =  array();
		$data['list_order'] = $this->Order->list_user_order($_SESSION['user_account']['user_id'], $limit=10);
		$data['list_subscription'] = $this->Subscription->list_subscription($_SESSION['user_account']['user_id']);
	  $post_per_page = 5;
  $page_offset = 0;
  $category='';
  if(isset($_GET['page'])){
  $page_offset = $_GET['page'] * $post_per_page - $post_per_page ;
  }
  if(isset($_GET['categories'])){
    $category = $_GET['categories'];
  }
  // $post_category = 
  // $hh=header('Content-type: application/json');
$curl = curl_init();
//   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Content-Type: application/x-www-form-urlencoded'
// ));
curl_setopt_array($curl, array(
  // CURLOPT_URL => "http://padimi.com.ng/blog/wp-json/wp/v2/posts?_embed",
  CURLOPT_URL => "http://padimi.com.ng/blog/wp-json/wp/v2/posts?per_page=$post_per_page&&offset=$page_offset&&categories=$category",
  // CURLOPT_URL => "http://thel8bloomers.com/wp-json/wp/v2/posts",

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
  // curl_setopt($curl, CURLOPT_HEADER, $hh);

  $response = curl_exec($curl);


curl_close($curl);
$response = json_decode($response, true);
  $response = curl_exec($curl);

$data['blogposts'] = $response;

		// $data['list_articles'] = 
		$data['page_layout']='pages/account/dashboard';
		$this->load->view('page_layout', $data);
	}

	function account_settings(){
		verify_session_helper();
		$data =  array();
		$data['page_layout']='pages/account/setting';
		$this->load->view('page_layout', $data);
	}
		function login_users()
	{

   		$data =array();
	 if(isset($_SESSION['user_account'])){
		$email= $_SESSION['user_account']['email'];
		$data['user_data'] = $this->Account->login_user($email);
		// echo $data['user_data']['email'];
				// print_r($_SESSION);
		redirect(base_url().'account/profile', 'refresh'); 

		// $data['page_layout']= 'account/login';
  //    	$this->load->view('page_layout', $data);
		}
		else{
			if (isset($_REQUEST['login'])){
	 	$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();	
            echo json_encode(['error'=>$data['error']]);
		}
		else{
			// check if email submitted exists
			$submitted_email=$this->input->post('email');
				# code...
			$data['verify_email']=$this->Account->check_user_email($submitted_email);
			if ($data['verify_email']==TRUE) {
			$hashed_email_password=$data['verify_email']['password'];
			$password=password_verify($this->input->post('password'), $hashed_email_password);
			$login_data =  array('email' =>$data['verify_email']['email'],'first_name'=>$data['verify_email']['first_name'], 'last_name'=>$data['verify_email']['last_name'], 'phone'=>$data['verify_email']['phone'], 'user_id'=>$data['verify_email']['user_id'], 'profile_image'=>$data['verify_email']['profile_image']);
 			if ($password >= 1){
 				// hook the session to login data
				$_SESSION['user_account'] = $login_data;
				// return true;
				
				// get user login info
				$email=$data['verify_email']['email'];
				$data['user_data'] = $this->Account->login_user($email);
				// send response message
				$data['response_msg'] = '<div class="text-success text-center">Successfully logged in</div>';
				// echo $data['response_msg'];
				// return TRUE;

				// redirect($_POST['http_referer_url']);
		  echo  json_encode(['success'=>'Successfully logged in', 'email' =>$data['verify_email']['email'],'first_name'=>$data['verify_email']['first_name'], 'last_name'=>$data['verify_email']['last_name'],'user_id'=>$data['verify_email']['user_id']]);	
				}
			else{
				// unset($_SESSION['user_account']);
				// return false;
				$data['response_msg'] = 'Email or Password Incorrect';
           		echo json_encode(['error'=>$data['response_msg']]);		
			}
			// print_r($login_data);
			// echo 'pass.';

				}
       else{
				$data['response_msg'] = 'Email does not exist';
           		echo json_encode(['error'=>$data['response_msg']]);
       }
   }
}

else{
  // $data['page_layout']= 'pages/account/account';
  //    $this->load->view('page_layout', $data);
}
     }
   
}

 function register_users(){
   		$data =array();

	$this->form_validation->set_rules('last_name', 'Last name', 'required');
	$this->form_validation->set_rules('first_name', 'First name', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	// $this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
     $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
   if($this->form_validation->run()==FALSE)
     {
	// $this->form_validation->set_message('username' , 'fkslhfjsad');

         $data['error']=validation_errors();
            echo json_encode(['error'=>$data['error']]);
            // echo json_encode(['error'=>$errors]);

     }
            
     else{
			$register_data=$_REQUEST;
			$register_data['password']=password_hash($register_data['password'], PASSWORD_BCRYPT);
			// unset($register_data['confirm_password']);
			$register_data = array('first_name'=>$register_data['first_name'],
									'last_name' => $register_data['last_name'],
									'email' => $register_data['email'],
									'password' => $register_data['password']
									);
			// generate a validation key
			$validation_key = md5(uniqid(rand(), true));
			$email_validation_data = array('email' => $register_data['email'],
											 'status' => 0,
											 'validation_key' => $validation_key);

			$data['register_data'] = $register_data;
			$data['email_validation_data']= $email_validation_data;
			// register the user 
			$this->Account->register_user($register_data, $email_validation_data);

		  echo  json_encode(['success'=>'Successfully Registered<div class="text-center mt-5">
						<a href="#login_user" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
							Back to sign in
						</a>
					</div>
']);	

			// // send Successfull registration email
			$this->email->from('mypadi@padimi.com.ng', 'Padimi');
            $this->email->to($register_data['email']);
            $this->email->subject('WELCOME');
            $this->email->message($this->load->view('email/welcome', $data, true ));
            $this->email->attach(base_url().'assets/attachments/padimi_hmo.pdf');
            // enable on live
            $this->email->send();

            // login with submitted details
          // login_after_register_helper($_REQUEST['password'], $_REQUEST['email']);

	}
	// $data= array();
 //     $data['page_layout']='account/sign-up';
	// $this->load->view('page_layout', $data);

}

	function logout(){
		if(isset($_SESSION['user_account'])){
			unset($_SESSION['user_account']);
			// header("admin");
			echo "logged out";
			redirect(base_url(), 'refresh'); 
		}
	}


function change_passwords(){
        if (isset($_SESSION['user_account'])){
        
        if($_POST){
        $currentpassword=$_POST['currentpassword'];
        $newpassword=$_POST['newpassword'];

        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|matches[newpassword]');

        if($this->form_validation->run()==FALSE)
         {
         
		echo  json_encode(['error'=>validation_errors()]);

         }
     else{
         // check if the current password is equal to existing password
         $user_email = $_SESSION['user_account']['email'];
        $data['verify_user_email']= $this->Account->check_user_email($user_email);
        $current_db_password = $data['verify_user_email']['password'];
        $password_verify=password_verify($currentpassword, $current_db_password);
        if ($password_verify >= 1){
            if($currentpassword == $newpassword){
					echo  json_encode(['error'=>'New password can not be the same as current password']);

            }
            else{
                // hash new passwords
                $newpassword = password_hash($newpassword, PASSWORD_BCRYPT);
                $password_details  = array('password' => $newpassword, 'reset_password' => '' , 'reset_password_status' => 0 );
                $this->Account->update_user_password($user_email, $password_details);
                if ($this->db->affected_rows() > 0) {
	      			echo  json_encode(['success'=>'Password succesfully updated']);
	  				}
	  			else{
					echo  json_encode(['error'=>'We could not update your password, please try again']);
	  				}
        }
    }
    else{
           
			echo  json_encode(['error'=>'Incorrect current password']);


    }

        
    }
}
   }
    else{
            redirect(base_url().'login', 'refresh'); 
    }
}

function account_setting(){

	 if(isset($_SESSION['access_account_login'])){

	 $data['user_details']= $this->Account->login_user($_SESSION['access_account_login']['email']);
	$data['page_layout']='account/account_settings';
		$this->load->view('page_layout', $data);
	}
	else{
			redirect(base_url().'login', 'refresh'); 
	}
}


function view_profile(){
	
	  verify_session_helper();
		$data = array();
		$data['user_data'] = $this->Account->login_user($_SESSION['account_login']['email']);
		$data['page_layout']='pages/account/profile';
		$this->load->view('page_layout', $data);
	}
	

function edit_profile(){
	$user_id=$_SESSION['user_account']['user_id'];
	 		$this->form_validation->set_rules('first_name', 'First Name', 'required');
	 		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	 		$this->form_validation->set_rules('email', 'Email', 'required');
	 		$this->form_validation->set_rules('phone', 'Phone number', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();	
            echo json_encode(['error'=>$data['error']]);
		}
		else{
			unset($_REQUEST['/accounts/edit_profile']);
			unset($_REQUEST['ci_session']);
 		$this->Account->edit_user_profile($_REQUEST, $user_id);

			$data['response_msg'] = 'Profile successfully updated. Kindly check your mail';
       		echo json_encode(['success'=>$data['response_msg']]);

 	}
}

function email_validations($validation_key){
	$this->Account->verify_email($validation_key);
}


// reset user password
 function forgot_passwords(){
       if (isset($_REQUEST['user_password_reset'])){
         $this->form_validation->set_rules('user_email', 'User Email', 'required');
        if ($this->form_validation->run() == FALSE) {
         $response=validation_errors();    
         $data['response_msg'] = '<div class="alert alert-danger">'.$response.'</div>';
          echo json_encode(['error'=>$data['response_msg']]);
        }
        else{
            // check if email submitted exists
            $user_email=$this->input->post('user_email');
                # code...
            $data['verify_user_email']=$this->Account->check_user_email($user_email);
            if ($data['verify_user_email']==TRUE) {
                // update password
                $data['new_reset_password'] = random_string('alnum',10);
                $password = password_hash($data['new_reset_password'], PASSWORD_BCRYPT);
                $password_details  = array('password' => $password, 'reset_password' => $password , 'reset_password_status' => 1 );
                $this->Account->update_user_password($user_email, $password_details);

            // define variable for email data
            $data['account_email'] = $data['verify_user_email']['email'];
            $data['account_name'] = $data['verify_user_email']['first_name'];
            // send password reset to user email
            $this->email->from('info@padimi.com.ng', 'Padimi Password Reset');
            $this->email->to($data['account_email']);
            $this->email->subject('PASSWORD RESET');
            // $this->email->message($this->load->view('email/reset_password', $data, true ));
            // enable on live
            $this->email->send();
                // display response
              $data['response_msg'] = 'Password reset was successfully. Kindly check your mail';
           		echo json_encode(['success'=>$data['response_msg']]);
           		
            }

            else{
                $data['response_msg'] = 'User email does not exist';
           		echo json_encode(['error'=>$data['response_msg']]);


            }
        }
    }
    else{
        // $data['page_layout'] ='pages/forgot_password';
        //  $this->load->view('page_layout', $data);   
    }

   }


}
?>
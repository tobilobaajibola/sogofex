<?php
 function verify_session_helper(){
        if(isset($_SESSION['seller_account'])){
        return TRUE;
         }
      else{
        redirect(base_url().'admin/login', 'refresh'); 
            exit;
      }
       }
       ?>
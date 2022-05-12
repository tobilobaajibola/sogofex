<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

	
	<?php
     $this->load->view('general/admin_headtag');
     ?>
     <!-- <body class="smoothscroll enable-animation boxed"> -->

         <body class="layout-admin aside-sticky bg-lime header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle border-0">

    <div id="wrapper" class="d-flex align-items-stretch flex-column">




    <?php $this->load->view('general/admin_header'); ?>

		
      <div id="wrapper_content" class="d-flex flex-fill">


<!-- <a class="btn btn-default btn-lg lightbox specialBtn specialBtn-booking specialBtn-right" href="component/checkin" data-lightbox="iframe" data-plugin-options='{"type":"ajax", "closeOnBgClick":true}'>
	<span> <i class="fa fa-calendar left"></i> VISITOR CHECK IN </span></a
> -->
  <!-- -->
     
<?php 
    //side bar function
     $this->load->view('general/admin_side');
  ?>

       <div id="middle" class="flex-fill">
<?php

      if (isset($page_layout)){
       $this->view($page_layout);
      }
    ?>
</div>          
        </div>
     
      <!-- / -->

<?php  $this->load->view('general/admin_footer');?>
</div>
<?php $this->load->view('general/admin_foottag');?>

</body>
</html>



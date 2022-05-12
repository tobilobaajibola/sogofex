<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('general/headtag');   ?>
<body class="header-sticky">
	<div id="wrapper"> 
	<?php 
	$this->load->view('general/header');
      		if (isset($page_layout)){
       		$this->view($page_layout);
      	}
       $this->load->view('general/footer');
	
	?>
		</div>
       <?php

        $this->load->view('general/foottag');
      
 
?>

</body>
</html>



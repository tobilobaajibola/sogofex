<head>
		<meta charset="UTF-8">
		<title>Sogofex | Admin</title>
		<meta name="description" content="...">

        <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- up to 10% speed up for external res -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <!-- preloading icon font is helping to speed up a little bit -->
        <link rel="preload" href="<?php echo base_url();?>assets/admin/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

        <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->
        <?php 
        if($this->uri->segment(2)=="product_add"){
          ?>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/core.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/vendor_bundle.min.css">
        <?php 
    }
    else{
        ?>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css_new/core.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css_new/vendor_bundle.min.css">
<?php 
    }
    ?>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

		<!-- favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

		<link rel="manifest" href="<?php echo base_url();?>assets/admin/images/manifest/manifest.json">
		<meta name="theme-color" content="#377dff">

        <link rel="manifest" href="<?php echo base_url();?>push/manifest.json">

	</head>

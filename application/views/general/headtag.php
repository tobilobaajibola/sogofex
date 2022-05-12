<head>
    <title>Padimi</title>
    <meta name="description" content="Padimi your true friend in your time of need!">
    <meta name="Author" content="Tobiloba Ajibola" />

        <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->


 <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="<?php echo base_url();?>assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/core.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor_bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

    <link rel="manifest" href="<?php echo base_url();?>assets/images/manifest/manifest.json">
    <meta name="theme-color" content="#377dff">

  <script type="text/javascript">
            var Pusher = {};
(function($p){
   
   var listeners = [];

  $p.push = function(cb){
    listeners.push(cb);
  };

  $p.notify = function(){
    listeners.forEach(function(v){
      v();
    });
  }
  
})(Pusher);
        </script>
  </head>
    <?php 
                    function truncate($text, $chars = 25) {
    if (strlen($text) <= $chars) {
        return $text;
    }
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

?>
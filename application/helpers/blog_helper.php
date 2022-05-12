<?php 
function list_blog_helper($category){
    // $post_category = 
  // $hh=header('Content-type: application/json');
$curl = curl_init();
//   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Content-Type: application/x-www-form-urlencoded'
// ));
curl_setopt_array($curl, array(
  // CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/posts?_embed",
  CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/posts?per_page=$post_per_page&&offset=$page_offset$category",
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
return $response;
curl_close($curl);


}

 function convert_date($blog_post_date){
                $postdate  = substr($blog_post_date, 0, -9);
                $postdate = strtotime($postdate);
                //Get the day of the week using PHP's date function.
                $postdayOfWeek = date("l", $postdate);

                return $postdayOfWeek;
               } 

?>
<?php
/**
 * 
 */
class Blogs extends CI_Controller
{
	
	function list_posts($page='')
	{

  $post_per_page = 5;
  $page_offset = 0;
  $category='';
  if(isset($_GET['page'])){
  $page_offset = $_GET['page'] * $post_per_page - $post_per_page ;
  }
  if(isset($_GET['categories'])){
    $category = '&&categories='.$_GET['categories'];
  }
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

curl_close($curl);
// var_dump( $response);

$caturl = curl_init();

curl_setopt_array($caturl, array(
  CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/categories",
  // CURLOPT_URL => "http://thel8bloomers.com/wp-json/wp/v2/posts?_embed",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$category_response = curl_exec($caturl);

curl_close($caturl);
$response = json_decode($response, true);
$category_response = json_decode($category_response, true);

// var_dump($response[1]['_embedded']);


$data['blogposts'] = $response;
$data['blogcategories'] = $category_response;
$data['page_layout']='pages/blog';    
$this->load->view('page_layout', $data);
}

function post_details($slug){

	$curl = curl_init();

curl_setopt_array($curl, array(
  // CURLOPT_URL => "http://thel8bloomers.com/wp-json/wp/v2/posts?slug=$slug",
  // http://sogofextrade.com/blog/wp-json/wp/v2/comments?post=57
  CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/posts?slug=$slug&_embed",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);


$caturl = curl_init();

curl_setopt_array($caturl, array(
  CURLOPT_URL => "http://sogofextrade.com/blog/wp-json/wp/v2/categories",
  // CURLOPT_URL => "http://thel8bloomers.com/wp-json/wp/v2/posts?_embed",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$category_response = curl_exec($caturl);

curl_close($caturl);

$category_response = json_decode($category_response, true);

curl_close($curl);
$response = json_decode($response, true);
$data['blogdetail'] = $response;
$data['blogcategories'] = $category_response;
	$data['page_layout']='pages/blog_detail';    
    $this->load->view('page_layout', $data);	
}


	function list_comments(){

	}

	function list_categories(){

	}
}
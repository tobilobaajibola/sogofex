<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/




$route['products']='products/product_categories';
$route['products/category/(:any)']='products/list_products/$1';
$route['products/cart']='carts/addtocart';
$route['products/details/(:any)']='products/product_details/$1';
// $route['products/cart']='carts/view_cart';

$route['media']='blogs/list_posts';
$route['media/(:any)']='blogs/post_details/$1';

$route['beneficiary/update/(:any)'] = 'beneficiaries/edit_beneficiaries/$1';

$route['cart']='carts/view_cart';
$route['checkout']='orders/checkout';
$route['faq']='faqs/get_faqs';
$route['dashboard'] = 'accounts/dashboards';
$route['setting'] = 'accounts/account_settings';
$route['subscription_detail/(:any)'] = 'subscriptions/subscription_details/$1';
$route['subscriptions'] = 'subscriptions/subscription_lists';
$route['orders'] = 'orders/order_lists';
$route['order/result']='orders/order_results';
$route['order/(:any)'] = 'orders/order_details/$1';
$route['accountpage'] = 'accounts/account_page';
$route['account/emailvalidate/(:any)'] = 'accounts/email_validations/$1';
$route['logout'] = 'accounts/logout';
// Api
$route['api/register'] = 'admin/accounts/register_users';


// Admin
$route['admin'] = 'admin/pages/admin_indexes';
$route['admin/login'] = 'admin/accounts/login';
$route['admin/logout'] = 'admin/accounts/logout';
$route['admin/product_list'] = 'admin/pages/admin_product_lists';
$route['admin/product_add'] = 'admin/products/add_products';
// $route['admin/product_add'] = 'admin/pages/admin_products_add';
$route['admin/setting'] = 'admin/accounts/admin_account_settings';
$route['admin/product/edit/(:any)'] = 'admin/pages/admin_products_edit/$1';
$route['admin/product_detail/(:any)'] =  'admin/products/admin_product_detail/$1';


$route['product/(:any)'] = 'products/list_products/$1';
$route['product'] = 'products/list_products';
$route['box/(:any)']='boxes/$1';
$route['(:any)']='pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['404_override'] = 'pages/page_not_found';
// $route['translate_uri_dashes'] = FALSE;
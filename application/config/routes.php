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
$route['default_controller'] = 'Frontend_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/product'] = "Product_controller"; 
$route['admin/product/add'] = 'Product_controller/add_product'; 
$route['admin/product/add_view'] = 'Product_controller/add_product_view'; 
$route['admin/product/delete/(\d+)'] = 'Product_controller/delete_product/$1';
$route['upload'] = 'Upload';
$route['admin/product/edit/(\d+)'] = 'Product_controller/update_product_view/$1';

$route['admin/product/category'] = 'Product_controller/category_view';
$route['admin/product/add_category'] = 'Product_controller/add_category';
$route['admin/product/category_edit/(\d+)'] = 'Product_controller/edit_category/$1';
$route['admin/product/category_delete/(\d+)'] = 'Product_controller/delete_category/$1';
$route['admin/product/feature'] = 'Product_controller/feature_product';
$route['admin/feautred/update'] = 'Product_controller/update_featured_product';
$route['admin/feature/delete/(\d+)'] = 'Product_controller/delete_feature_product';
$route['admin/feautred/add'] = 'Product_controller/add_feature_product';
$route['admin/changepassword'] = 'Dashboard_controller/password';
$route['admin/updatepassword'] = 'Dashboard_controller/updatepassword';
$route['admin/leads'] = 'Dashboard_controller/enquiry';
$route['admin/contact'] = 'Dashboard_controller/contact_details';
$route['admin/login'] = "Login_controller"; 
$route['admin/logout'] = "Login_controller/logout"; 
$route['admin/panel'] = 'Dashboard_controller'; 

$route['contact']  = "Frontend_controller/contact"; 
$route['about']  = "Frontend_controller/about";
$route['product/(.*)']  = "Frontend_controller/product/$1";
$route['category/(.*)']  = "Frontend_controller/category/$1";



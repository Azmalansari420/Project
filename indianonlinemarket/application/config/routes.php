<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/index';
$route['forget-password'] = 'Admin/forget_password';
$route['create-password'] = 'Admin/create_password';

$route['super_admin/dashboard'] = 'Admin/dashboard';

$route['shop'] = 'Welcome/shop';
$route['checkout'] = 'Welcome/checkout';
$route['shop/(:any)'] = 'Welcome/shop/$1';
$route['product-details/(:any)'] = 'Welcome/product_details/$1';


$route['userinvoice/(:any)'] = 'User/userinvoice/$1';


$route['(:any)'] = 'Welcome/all/$1';
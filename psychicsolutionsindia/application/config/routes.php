<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/index';
$route['forget-password'] = 'Admin/forget_password';
$route['create-password'] = 'Admin/create_password';

$route['super_admin/dashboard'] = 'Admin/dashboard';


$route['service-details/(:any)'] = 'Welcome/service_details/$1';
$route['facalty-details/(:any)'] = 'Welcome/facalty_details/$1';
$route['special-details/(:any)'] = 'Welcome/special_details/$1';
$route['blog-details/(:any)'] = 'Welcome/blog_details/$1';
$route['diesese-details/(:any)'] = 'Welcome/diesese_details/$1';




$route['(:any)'] = 'Welcome/all/$1';
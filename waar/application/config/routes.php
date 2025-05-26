<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/index';
$route['super_admin/dashboard'] = 'Admin/dashboard';


$route['blog-details/(:any)'] = 'Welcome/blog_details/$1';
$route['service-details/(:any)'] = 'Welcome/service_details/$1';
$route['team-details/(:any)'] = 'Welcome/team_details/$1';




$route['(:any)'] = 'Welcome/all/$1';
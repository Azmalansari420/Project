<?php namespace Config;
use Config\Database;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->get('/', 'Home::index');

//$routes->setDefaultController('Home');
//$routes->setDefaultMethod('index');
//$routes->setDefaultMethod('default_f');
//$routes->add('/about-us', 'Home::about');
$routes->add('/c-panel', 'Home::admin_login');
$routes->add('/home', 'Home::index');

$routes->add('/dashboard', 'Cpdadmin::index');
$routes->add('/user-dashboard', 'User::index');

$routes->add('/cpdadmin/super_admin', 'Cpdadmin::super_admin');

$routes->add('/adminlogout', 'Home::adminlogout');
$routes->add('/userlogout', 'Home::userlogout');
$routes->add('/profile', 'User::profile');
$routes->add('/login', 'Home::login');
$routes->add('/register', 'Home::register');
$routes->add('/presentaddress', 'Home::presentaddress');
$routes->add('/physical', 'Home::physical');
$routes->add('/language', 'Home::language');
$routes->add('/personalattitude', 'Home::personalattitude');
$routes->add('/residency', 'Home::residency');
$routes->add('/spiritual', 'Home::spiritual');
$routes->add('/lifestyle', 'Home::lifestyle');
$routes->add('/astronomic', 'Home::astronomic');
$routes->add('/permanentaddress', 'Home::permanentaddress');
$routes->add('/additionalpersonal', 'Home::additionalpersonal');
$routes->add('/partnerexpectation', 'Home::partnerexpectation');
$routes->add('/thanks', 'Home::thanks');

$routes->add('/detail/(:any)', 'Home::detail/$1');
$routes->add('/cgi-sys/(:any)', 'Home::suspend/$1');
$routes->add('/bandwidth', 'Home::bandwidth');

$routes->add('/cpdadmin/manage_site/(:any)', 'Cpdadmin::manage_site/$1');
$routes->add('/cpdadmin/multiimage/(:any)', 'Cpdadmin::multiimage/$1');
$routes->add('/cpdadmin/galleryupload', 'Cpdadmin::galleryupload');
$routes->add('/cpdadmin/deletegallerymulimage', 'Cpdadmin::deletegallerymulimage');

$routes->add('/cpdadmin/deletewidthfile/(:any)/(:any)/(:any)', 'Cpdadmin::deletewidthfile/$1/$1/$1/$1/$1/$1');
$routes->add('/cpdadmin/status/(:any)/(:any)/(:any)', 'Cpdadmin::status/$1/$1/$1/$1/$1/$1');
$routes->add('/cpdadmin/multicheck', 'Cpdadmin::multicheck');
$routes->add('/cpdadmin/productimage', 'Cpdadmin::productimage');
$routes->add('/cpdadmin/upload', 'Cpdadmin::upload');
$routes->add('/cpdadmin/deletemulimage', 'Cpdadmin::deletemulimage');

$routes->add('/cpdadmin/page_list/(:any)', 'Cpdadmin::page_list/$1');
$routes->add('/cpdadmin/multigallery/(:any)', 'Cpdadmin::multigallery/$1');

$routes->add('/cpdadmin/galleryimage/(:any)', 'Cpdadmin::galleryimage/$1');
$routes->add('/cpdadmin/galleryimageup', 'Cpdadmin::galleryimageup');

$routes->add('/cpdadmin/page_add/(:any)', 'Cpdadmin::page_add/$1');
$routes->add('/cpdadmin/page_copy/(:any)', 'Cpdadmin::page_add/$1');
$routes->add('/cpdadmin/page_edit/(:any)', 'Cpdadmin::page_edit/$1');

$routes->add('/cpdadmin/media_list/(:any)', 'Cpdadmin::media_list/$1');
$routes->add('/cpdadmin/media_add/(:any)', 'Cpdadmin::media_add/$1');
$routes->add('/cpdadmin/media_edit/(:any)', 'Cpdadmin::media_edit/$1');

$routes->add('/cpdadmin/product_list', 'Cpdadmin::product_list');
$routes->add('/cpdadmin/product_add', 'Cpdadmin::product_add');
$routes->add('/cpdadmin/color_list', 'Cpdadmin::color_list');
$routes->add('/cpdadmin/size_list', 'Cpdadmin::size_list');
$routes->add('/cpdadmin/size_add', 'Cpdadmin::size_add');
$routes->add('/cpdadmin/color_add', 'Cpdadmin::color_add');
$routes->add('/cpdadmin/product_edit/(:any)', 'Cpdadmin::product_edit/$1');
$routes->add('/cpdadmin/page_edit/(:any)', 'Cpdadmin::page_edit/$1');
$routes->add('/cpdadmin/size_edit/(:any)', 'Cpdadmin::size_edit/$1');
$routes->add('/cpdadmin/color_edit/(:any)', 'Cpdadmin::color_edit/$1');

$db=Database::connect();
$query=$db->table('tbl_pages')->get();
$data=$query->getresult();
//echo "<pre>";
//print_r($data);exit;
if($data) { foreach($data as $values) { 
$routes->add($values->slug, 'Home::dynamic_pages/$1');
$routes->add($values->slug.'/(:any)', 'Home::dynamic_pages/$1/$1');
$routes->add('page/(:any)', 'Home::dynamic_pages/$1');
$routes->add('category/(:any)', 'Home::dynamic_pages/$1');
} } 



$routes->add('cpdadmin/admin_add', 'Cpdadmin::admin_add');
$routes->add('cpdadmin/admin_list', 'Cpdadmin::admin_list');
$routes->add('cpdadmin/admin_edit/(:any)', 'Cpdadmin::admin_edit/$1');
$routes->add('cpdadmin/admin_profile', 'Cpdadmin::admin_profile');
$routes->add('cpdadmin/admin_reset_password', 'Cpdadmin::admin_reset_password');

$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

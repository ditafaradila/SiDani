<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin_login', 'LoginAdmin::index');
$routes->post('/login/processs', 'LoginAdmin::processs');
$routes->get('/logout', 'LoginAdmin::logout');

$routes->get('/alumni_login', 'LoginAlumni::index');
$routes->post('/login/proces', 'LoginAlumni::proces');
$routes->get('/out', 'LoginAlumni::out');

$routes->get('/', 'Home::index');
$routes->get('/alumni', 'AdminController::index');
$routes->get('/alumnis', 'AdminController::indexx');
$routes->get('/create','AdminController::create');
$routes->post('/store','AdminController::store');
$routes->get('/edit/(:num)','AdminController::edit/$1');
$routes->post('/update/(:num)','AdminController::update/$1');
$routes->get('/cetakkartu/(:num)','AdminController::cetakkartu/$1');

$routes->get('/notification', 'Notif::index');
$routes->get('/notifications', 'Notif::indexxx');
$routes->get('/tambah_pengumuman','Notif::create');
$routes->post('/storeP','Notif::storeP');
$routes->delete('/delete/(:num)', 'Notif::delete/$1');
$routes->get('/download/(:num)', 'Notif::download/$1');
//$routes->delete('/delete/(:num)','AdminController::delete/$1');
$routes->get('/index','Pages::index');
$routes->get('/(:any)','Pages::view/$1');

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

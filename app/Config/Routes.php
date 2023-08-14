<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Admin::login');
$routes->get('/logout', 'Admin::logout');
$routes->post('/auth', 'Admin::auth');

$routes->get('/user', 'User::index');
$routes->get('/create_user', 'User::create');
$routes->post('/save_user', 'User::save');
$routes->get('/edit_user/(:num)', 'User::edit/$1');
$routes->post('/update_user/(:num)', 'User::update/$1');

$routes->get('/cuti', 'Cuti::index');

$routes->get('/tamu', 'Tamu::index');
$routes->get('/create_tamu', 'Tamu::create');
$routes->post('/save_tamu', 'Tamu::save');
$routes->get('/out/(:num)', 'Tamu::out/$1');

$routes->get('/tamu_security', 'Tamu::index_security');
$routes->get('/create_tamu_security', 'Tamu::create_security');
$routes->post('/save_tamu_security', 'Tamu::save_security');
$routes->get('/out_security/(:num)', 'Tamu::out_security/$1');


$routes->get('/cuti', 'Cuti::index');

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
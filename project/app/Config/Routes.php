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
$routes->get('/', 'Hello::about');
$routes->get('/forum','Hello::forum');
$routes->get('/forum/(:alphanum)','Hello::detail/$1');
$routes->post('upload/multiple','Forum::upload_multiple');
$routes->get('/register','Regis::register');
$routes->get('/login','Regis::login');
$routes->post('/submit','Regis::registerUser');
$routes->post('/signin','Regis::checklogin');
$routes->post('/rate','Forum::rateForum');
$routes->get('/newforum','Forum::displayForm');
$routes->get('/mahasiswa','Mahasiswa::index');
$routes->post('/ajax','Mahasiswa::ajax_page');
$routes->get('/test','ScrollController::index');
$routes->post('/fetch','Mahasiswa::fetch');

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
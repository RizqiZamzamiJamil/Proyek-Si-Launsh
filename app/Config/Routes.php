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
$routes->setAutoRoute(true);
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
$routes->get('/', 'Pages::index');
$routes->get('pages/cuci', 'Pages::cuci', ['filter' => 'pages/masuk']); // buat rute untuk memfilter halaman
$routes->get('pages/cuci/cuciSepatu', 'Pages::cuciSepatu', ['filter' => 'pages/masuk']);
$routes->get('pages/cuci/cuciHelm', 'Pages::cuciHelm,', ['filter' => 'pages/masuk']);
$routes->get('pages/cuci/cuciYellowing', 'Pages::cuciYellowing', ['filter' => 'pages/masuk']);
$routes->get('pages/profil', 'Pages::profil', ['filter' => 'pages/masuk']);
$routes->post('pemesanan/totalRealTime', 'Pemesanan::totalRealTime');


// Tambah Route Cabang
$routes->get('pages/cabangSurabaya', 'Pages::cabangSurabaya');



$routes->get('dashboard', 'Admin::index');
$routes->get('dashboard/adminCuciSepatu', 'CuciSepatuDashboard::index');
// $routes->get('dashboard/CuciSepatu/adminCuciSepatu', 'CuciSepatuDashboard::index');
$routes->get('dashboard/CuciHelm', 'CuciHelmDashboard::index');
$routes->get('dashboard/Unyellowing', 'UnyellowingDashboard::index');

//$routes->delete('auth/(:alphanumeric)', 'Auth::hapusAkun/$1');
/* $routes->get('/pages/daftar', 'Pages::index');
$routes->post('/register/save', 'Register::save');
$routes->get('/register/success', 'Register::success'); */


//$routes->get('/coba/(:any)', 'coba::about/$1'); //$1 berarti placeholder pertama muncul (any)

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

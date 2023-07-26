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

// routes sistem informasi akademik universitas teknologi jakarta selatan

// bagian admin 
// menu pengumuman
$routes->get('/', 'AdminController::index');
$routes->post('admin/pengumuman/tambah', 'AdminController::tambahPengumuman');
$routes->post('admin/pengumuman/update/(:num)', 'AdminController::updatePengumuman/$1');
$routes->get('admin/pengumuman/hapus/(:num)', 'AdminController::hapusPengumuman/$1');
// menu matkul
$routes->get('/matkul', 'AdminController::semuaMatkul');
$routes->post('admin/matkul/tambah', 'AdminController::tambahMatkul');
$routes->post('admin/matkul/update/(:num)', 'AdminController::updateMatkul/$1');
$routes->get('admin/matkul/hapus/(:num)', 'AdminController::hapusMatkul/$1');
// menu dosen
$routes->get('/dosen', 'AdminController::semuaDosen');
$routes->post('admin/dosen/tambah', 'AdminController::tambahDosen');
$routes->post('admin/dosen/update/(:num)', 'AdminController::updateDosen/$1');
$routes->get('admin/dosen/hapus/(:num)', 'AdminController::hapusDosen/$1');



// menu mahasiswa

// menu rekapitulasi data nilai benttuk pdf





// bagian user

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

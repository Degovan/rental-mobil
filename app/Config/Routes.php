<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->addRedirect('/', '/dashboard');

// Route with login filters
// Auto redirect to login page when user is not authenticated
$routes->group('', ['filter' => 'login'], function ($routes) {
	$routes->get('/dashboard', 'Home::index', ['as' => 'dashboard']);
	$routes->get('/orders', 'OrderController::index');

	$routes->group('/orders', function ($routes) {
		$routes->get('/', 'OrderController::index', ['as' => 'orders']);
		$routes->get('create', 'OrderController::create', ['as' => 'order.create']);
		$routes->post('/', 'OrderController::store');
		$routes->post('autocomplete', 'OrderController::autocomplete', ['as' => 'order.autocomplete']);
		$routes->post('hours', 'OrderController::getHours', ['as' => 'order.hours']);
		$routes->post('cost', 'OrderController::getCost', ['as' => 'order.cost']);
		$routes->delete('(:num)', 'OrderController::destroy/$1', ['as' => 'order.destroy']);
		$routes->get('datatable', 'OrderController::datatable');
	});
	// Santri Routes
	$routes->group('/santri', function ($routes) {
		$routes->get('/', 'SantriController::index', ['as' => 'santri']);
		$routes->post('/', 'SantriController::store');
		$routes->get('show/(:num)', 'SantriController::show/$1', ['as' => 'santri.show']);
		$routes->get('create', 'SantriController::create', ['as' => 'santri.create']);
		$routes->get('edit/(:num)', 'SantriController::edit/$1', ['as' => 'santri.edit']);
		$routes->post('edit/(:num)', 'SantriController::update/$1');
		$routes->post('excel', 'SantriController::excel', ['as' => 'santri.excel']);
		$routes->delete('(:num)', 'SantriController::destroy/$1', ['as' => 'santri.destroy']);
		$routes->get('datatable', 'SantriController::datatable');
	});
	// Car Routes
	$routes->group('/car', function ($routes) {
		$routes->get('/', 'CarController::index', ['as' => 'car']);
		$routes->get('create', 'CarController::create', ['as' => 'car.create']);
		$routes->post('/', 'CarController::store');
		$routes->get('edit/(:num)', 'CarController::edit/$1', ['as' => 'car.edit']);
		$routes->post('edit/(:num)', 'CarController::update/$1');
		$routes->delete('(:num)', 'CarController::destroy/$1', ['as' => 'car.destroy']);
		$routes->get('datatable', 'CarController::datatable', ['as' => 'car.datatable']);
	});

	// Price Routes
	$routes->group('/price', function ($routes) {
		$routes->get('/', 'PriceController::index', ['as' => 'price']);
		$routes->get('create', 'PriceController::create', ['as' => 'price.create']);
		$routes->post('/', 'PriceController::store');
		$routes->get('edit/(:num)', 'PriceController::edit/$1', ['as' => 'price.edit']);
		$routes->post('edit/(:num)', 'PriceController::update/$1');
		$routes->delete('(:num)', 'PriceController::destroy/$1', ['as' => 'price.destroy']);
		$routes->get('datatable', 'PriceController::datatable', ['as' => 'price.datatable']);
	});
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

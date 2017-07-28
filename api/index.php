<?php

/**
 * Return errors form page
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

define("DIR", dirname(__DIR__).'/');
define("APP", dirname(DIR).'/app/');

require_once DIR.'config/function.php';

if ( isset($_GET['token']) && $_GET['token'] == app('token') ) {
	/**
	 * Define real path folder
	 */

	/**
	 * Autoregister classes
	 */


	__autoload(array('Route', 'Database'));

	//
	/**
	 * @return Request method type
	 */
	$request = $_SERVER['REQUEST_METHOD'];
	include '../app/libs/Route.php';


	//
	if ( count($_GET) == 0 && empty($_GET) ) {
		return false;
	}

	if ( isset($_GET['url']) ) {
		$url = explode('/', $_GET['url']);
	}

	// Route::get('user', function(){
	// 	return view('user');
	// });

	// Route::url();
	Route::get('user');

	// Route::test('user/{user}', function($user){
	//   return "Hello " . $user;
	// });

} else {
	die('Nesto je zajebalo usput!!! Fali token2');
}


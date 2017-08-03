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

// if ( isset($_GET['token']) && $_GET['token'] == app('token') ) {
// 	/**
// 	 * Define real path folder
// 	 */

// 	/**
// 	 * Autoregister classes
// 	 */


// 	__autoload(array('Route', 'Database'));

// 	//
// 	/**
// 	 * @return Request method type
// 	 */
// 	$request = $_SERVER['REQUEST_METHOD'];
// 	include '../app/libs/Route.php';


// 	//
// 	if ( count($_GET) == 0 && empty($_GET) ) {
// 		return false;
// 	}

// 	if ( isset($_GET['url']) ) {
// 		$url = explode('/', $_GET['url']);
// 	}

// 	// Route::get('user', function(){
// 	// 	return view('user');
// 	// });

// 	// Route::url();
// 	Route::get('user');

// 	// Route::test('user/{user}', function($user){
// 	//   return "Hello " . $user;
// 	// });

// } else {
// 	die('Nesto je zajebalo usput!!! Fali token2');
// }

require_once 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<ul>
				<li><a href="#whatisapi">What is an API?</a></li>
				<li><a href="#findorgenerateapikey">Find or Generate Your API Key</a></li>
				<li><a href="#disableapikey">Disable API Key</a></li>
				<li><a href="#apikeysecurity">API Key Security</a></li>
				<li><a href="#apisupport">Api Support</a></li>
			</ul>
		</div>

		<div class="col-md-8">
			
			<h1>About API Keys</h1>
				<small>Updated: Jun 29, 2017</small>

			<p>In this article, we'll cover what an API is, how to use an API key to grant access to your Primer Progetto account, and where to go for support with any additional questions that you may have about the Primer Progetto API.</p>
			
			<h2 id="whatisapi">What Is an API?</h2>

			<p>API stands for application programming interface. It can be helpful to think of the API as a way for different apps to talk to one another. For many users, the main interaction with the API will be through API keys, which allow other apps to access your account without you giving out your password.</p>

			<h2 id="findorgenerateapikey">Find or Generate Your API Key</h2>

			<p>If you want to set up an integration with your Primer Progetto account, chances are high that you'll need to generate an API key. Users with Manager permissions can generate and view their own API keys. Users with Admin permissions can also see API keys for other account users. Below, you'll learn how to grab an existing API key or generate a new one.</p>
			
				<ul>
					<li>-Click your profile name to expand the Account Panel, and choose  Account.</li>
					<li>-Click the  Extras drop-down menu and choose  API keys.</li>
					<li>-Copy an existing API key or click the  Create A Key button.</li>
					<li>-Name your key descriptively, so you know what application uses that key.</li>
				</ul>
			    
			<h2 id="disableapikey">Disable an API Key</h2>

			<p>If you're worried that an API key has been compromised, or you no longer use the integration that was accessing your account through a particular API key, you can disable that API key. Follow the steps below to disable the API key.</p>
			
				<ul>
					<li>Click your profile name to expand the Account Panel, and choose Account. </li>
					<li>Click the Extras menu and choose API keys. </li>
					<li>Find the API key you want to disable, and toggle the slider in the  Status column for that API key. </li>
					<li>Find the API key you want to disable and click Disable.</li>
					<li>In the Are you sure? pop-up modal, click Disable.</li>
					<li>Popup confirmation modal to disable an API key.</li>
				</ul>

			<h2 id="apikeysecurity">API Key Security</h2>

			<p>API keys grant full access to your Primer Progetto account and should be protected the same way you would protect your password. In particular, there are a few common scenarios to keep in mind when working with API keys.</p>
				
				<ul>
					<li>Give each integration its own API key, and assign labels to each key so you know which key goes with which application. If a specific API key is compromised, you can disable that key without disabling access to all of your other integrations.</li>
					<li>Be careful not to expose the key to the public (such as in screenshots, videos, or help documentation). Remember that blurring your data isn't always enough. It's best to use "cut" functions in your graphics program to remove the data completely.</li>
					<li>If a key needs to be shared, generate a new key and label it accordingly so it can be disabled, if needed. Never email the API key, because it would allow access to your Primer Progetto account if hackers were to compromise your email account.</li>
					<li>If you revoke a user's access to your Primer Progetto account, any API keys created by the user will be Primer Progetto from your account.</li>
				</ul>

			<h2 id="apisupport">API Support</h2>

			<p>Our Primer Progetto Support Team isn't trained at in-depth API troubleshooting. If you need a developer to help you configure something using the API, check out our great Experts Directory, which lists third-party Primer Progetto experts who can be hired to help out.</p>

			<p>If you're a developer who wants to build your own integration with Primer Progetto, check out our API documentation.
			Was this article helpful?</p>
			

		</div>

	
	</div>
</div>
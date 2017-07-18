<?php

/**
* Define Routes
*/
class Route
{
	
	public static function url($url, $callback=false)
	{
		if ( !is_null($url) ) {

			if ( $callback==false ) {
				$get_data = $_GET;
				return_json($get_data);
				return;
			}

			$callback();
		} else {
			print_r('Nema vrednosi');
		}
	}

	public static function get($url, $callback=false)
	{
		if ( !is_null($url) ) {

			if ( $callback==false ) {
				return view($url);
			}

			$callback();
		} else {
			print_r('Nema vrednosi');
		}
	}


	public static function test($url, $callback)
	{
		$url_array = explode('/', $url);

		echo $callback($url_array[1]);
	}

}
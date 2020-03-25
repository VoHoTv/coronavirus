<?php

/**
 * The file that contains shared functionality.
 *
 * @link       https://mikezuidhoek.com/
 * @since      1.0.0
 *
 * @package    Coronavirus
 * @subpackage Coronavirus/includes
 */

/**
 *
 * @since      1.0.0
 * @package    Coronavirus
 * @subpackage Coronavirus/includes
 * @author     Mike Zuidhoek <vohotv@gmail.com>
 */

class Coronavirus_Shared_Functionality {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	
	/**
	 * Get the data of the API.
	 */
    public function get_corona_data(string $country) {
		$country_slug = str_replace(' ', '%20', $country);
		
		// // If country attribute is omitted display global data.
		$url = empty($country) ? "https://corona.lmao.ninja/all" : "https://corona.lmao.ninja/countries/$country_slug";

		$response = wp_remote_get( $url );
		$body = json_decode(wp_remote_retrieve_body( $response ));

		return $body;
	}
}

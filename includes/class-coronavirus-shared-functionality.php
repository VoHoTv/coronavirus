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
    
    public function get_corona_data(string $country) {
		$ch = curl_init();

		$country_slug = str_replace(' ', '%20', $country);
		$url = empty($country) ? "https://coronavirus-19-api.herokuapp.com/all" : "https://coronavirus-19-api.herokuapp.com/countries/$country_slug";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$response = json_decode(curl_exec($ch));

		curl_close($ch);

		return $response;
	}
}

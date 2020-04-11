<?php

/**
 * Fired during plugin activation
 *
 * @link       https://mikezuidhoek.com/
 * @since      1.0.0
 *
 * @package    Coronavirus
 * @subpackage Coronavirus/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Coronavirus
 * @subpackage Coronavirus/includes
 * @author     Mike Zuidhoek <vohotv@gmail.com>
 */
class Coronavirus_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		delete_option('display_flag');
		delete_option('corona_data_options');
		delete_option('header_background_color');
		delete_option('header_text_color');
		delete_option('general_background_color');
		delete_option('general_text_color');
		delete_option('border_color');
	}

}

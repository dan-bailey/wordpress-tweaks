<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.danbailey.net
 * @since      1.0.0
 *
 * @package    Wordpress_Tweaks
 * @subpackage Wordpress_Tweaks/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wordpress_Tweaks
 * @subpackage Wordpress_Tweaks/includes
 * @author     Dan Bailey <dbailey@danbailey.net>
 */
class Wordpress_Tweaks_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wordpress-tweaks',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<<<<<<< HEAD
<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Fuel Development Team
 * @license		MIT License
 * @copyright	2010 - 2011 Fuel Development Team
 * @link		http://fuelphp.com
 */

error_reporting(DEBUG ? E_ALL : 0);
ini_set('display_errors', DEBUG ? '1' : '0');

Fuel\Core\Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
));

// Register the autoloader
Fuel\Core\Autoloader::register();

// Initialize the framework with the config file.
Fuel::init(include(APPPATH.'config/config.php'));

// Generate the request, execute it and send the output.
Request::factory()->execute()->send_headers()->output();

Event::shutdown();
Fuel::finish();


/* End of file bootstrap.php */
=======
<?php

// Bootstrap the framework DO NOT edit this
require_once COREPATH.'bootstrap.php';

/**
 * Set the timezone to what you need it to be.
 */
date_default_timezone_set('UTC');

/**
 * Set the encoding you would like to use.
 */
Fuel::$encoding = 'UTF-8';


Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
));

// Register the autoloader
Autoloader::register();

// Initialize the framework with the config file.
Fuel::init(include(APPPATH.'config/config.php'));


/* End of file bootstrap.php */
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f

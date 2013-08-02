<?php
/**
 * This file is the main front controller of the framework
 *  
 */

/**
 * Define some of the constants here
 */

// Short form of directory seperetor
define('DS', DIRECTORY_SEPARATOR);

// Root of the installation
define('ROOT', dirname(dirname(__FILE__)));

// Document root of the application, from where the 
// Static content will be shared
define('DOC_ROOT', dirname(dirname(__FILE__)));


echo $_SERVER['REQUEST_URI'];
//echo "Hi";
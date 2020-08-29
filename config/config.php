<?php
/**
 * ---------------------------------------
 * KEYWORDS DEFINITION AND CONFIGURATION
 * ---------------------------------------
 *
 * Let us define all keywords and setup
 * all configurations used in the entire
 * application.
 *
 * ---------------------------------------
 * NOTICE!!!
 * ---------------------------------------
 * 
 * Setting an invalid or incorrect value or
 * configuration might break the entire 
 * application, be sure you know what you
 * are doing.
 *
 */


/**
 * ------------------------------------
 * APPLICATION
 * ------------------------------------
 * 
 * Let us define app version.
 */
define('APP_VERSION', '1.6.7');

// Site default app name or site name.
define('SITE_NAME', 'tm framework');

// Define site scheme://domain. e.g. define('SITE_URL', 'http://localhost');
define('SITE_URL', @$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST']);

// Site root folder after the "scheme://domain".
define('SROOT', '/projects/tm_framework/');

// Enable secure url
define('ENABLE_SECURE_SCHEME', false);



/**
 * -------------------------------------
 * DATABASE
 * -------------------------------------
 *
 * Configure database connection settings 
*/
define('DB_HOSTNAME', 'mysql:dbname=;host=127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');




/**
 * --------------------------------------
 * COOKIE
 * --------------------------------------
 * 
 * Configure cookie parameters and security
 */
define('ENABLE_SECURE_COOKIE', false);




/**
 * --------------------------------------
 * SESSION
 * --------------------------------------
 */
define('DEFAULT_SESSION_COOKIE_NAME', 'sessid');
define('ENABLE_SECURE_SESSION_COOKIE', false);




/**
 * ----------------------------------------
 * DATE AND TIME 
 * ----------------------------------------
 * 
 * Default timezone used. Make sure to refer 
 * to the PHP manual before making changes.
 */
define('SET_TIMEZONE', 'Africa/Lagos');




/**
 * -----------------------------------------
 * APP SECRETS 
 * -----------------------------------------
 * 
 * Define app secret token to access secure pages
 */
define('ACCESS_LEVEL_TOKEN', '');
define('DEFAULT_CIPHER_METHOD', 'AES-128-CTR');
define('DEFAULT_CRYPT_KEY', '');
define('DEFAULT_CRYPT_IV', '');

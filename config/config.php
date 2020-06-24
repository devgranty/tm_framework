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

//  APPLICATION
// Let us define app version.
define('APP_VERSION', '1.6.6');
// Site default app name or site name.
define('SITE_NAME', 'New Project');
// Define site scheme://domain.
// define('SITE_URL', 'http://localhost');
define('SITE_URL', @$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST']);
// Site root folder after the "scheme://domain".
define('SROOT', '/projects/project7/');
// Enable secure url
define('ENABLE_SECURE_SCHEME', false);

// DATABASE
// Configure database connection settings
define('DB_HOSTNAME', 'mysql:dbname=project7_db;host=127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
// define('DB_HOSTNAME', 'mysql:dbname=meanometer_db;unix_socket=/cloudsql/potent-zodiac-272018:europe-west1:meanometer-db-instance');
// define('DB_USERNAME', 'meanometer-db-admin');
// define('DB_PASSWORD', 'D3veloper!');

// COOKIE
// Configure cookie parameters and security
define('ENABLE_SECURE_COOKIE', false);

// SESSION
define('DEFAULT_SESSION_COOKIE_NAME', '_msid');
define('ENABLE_SECURE_SESSION_COOKIE', false);

// MAIL
// Configure from mailing API
define('MAIL_DEFAULT_FROM', '');
define('MAIL_DEFAULT_FROM_NAME', '');
define('MAIL_DEFAULT_HOST', 'smtp.mailgun.org');
define('MAIL_DEFAULT_PORT', 25);
define('MAIL_DEFAULT_SMTPSECURE', 'tls');
define('MAIL_DEFAULT_SMTPAUTH', false);
define('MAIL_DEFAULT_USERNAME', '');
define('MAIL_DEFAULT_PASSWORD', '');

// DATE/TIME
// Default timezone used. Make sure to refer to the PHP manual before making changes.
define('SET_TIMEZONE', 'Africa/Lagos');

// APP SECRETS
// Define app secret token to access secure pages
define('ACCESS_LEVEL_TOKEN', '');
define('DEFAULT_CIPHER_METHOD', 'AES-128-CTR');
define('DEFAULT_CRYPT_KEY', '');
define('DEFAULT_CRYPT_IV', '');

// API CONFIGS

// DEFINE DOMAIN/SUBDOMAIN CONFIGS USED IN APP
define('IMG_CDN_URL', '');

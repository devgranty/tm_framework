<?php

/**
 * @author Grant Adiele <grantobioma@gmail.com>
 * 
 * @version 1.6.5
 */

/**
 * ---------------------------------------
 * REGISTER OUR AUTOLOAD
 * ---------------------------------------
 * Composer provides a simple way to autoload
 * our vendor classes, that way we dont have to 
 * maunually require any class in our application
 * Oh, what a relief
 */
// require_once __DIR__.'/../vendor/autoload.php';

/**
 * -------------------------------------------
 * CREATE APPLICATION
 * -------------------------------------------
 * This provides a single environment where we can
 * bind all parts of our framework into a single
 * application.
 */
// Require config file.
require_once __DIR__.'/../config/config.php';

// Require autoload.
require_once __DIR__.'/../app/helpers/autoload.php';

// Require functions and helpers.
require_once __DIR__.'/../app/helpers/helpers.php';

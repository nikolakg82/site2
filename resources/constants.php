<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

/**
 * Define constants for app
 */

/**
 * path to folder
 */
    define('APP_LIB',               APP_ROOT        . 'lib/');
    define('APP_ABSTRACT',          APP_LIB         . 'abstract/');
    define('APP_PUBLIC',            APP_LIB         . 'public/');
    define('APP_STATIC',            APP_LIB         . 'static/');
    define('APP_MVC',               APP_LIB         . 'mvc/');

    define('APP_RESOURCES',         APP_ROOT        . 'resources/');
    define('APP_ROUTES',             APP_RESOURCES   . "routes/");

    define('APP_CONFIG',            APP_ROOT        . 'config/');
    define('APP_CONFIG_ADMIN',      APP_CONFIG      . 'admin/');

    define('APP_THEME',             APP_ROOT        . 'theme/');

    define('APP_CACHE',             APP_ROOT        . 'cache/');
    define('APP_CACHE_SMARTY',      APP_CACHE       . 'smarty/');
    define('APP_CACHE_SMARTY_COMPILE',APP_CACHE_SMARTY. 'compile/');
    define('APP_CACHE_SMARTY_CACHE',APP_CACHE_SMARTY. 'cache/');

    define('APP_LAB',               APP_ROOT        . 'lab/');

/**
 * Database prefix
 */
    define('APP_DB_PREFIX',         'app_');
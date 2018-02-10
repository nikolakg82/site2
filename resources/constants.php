<?php
/**
 * Ovde se definisu konstante vezane za APP
 */

/**
 * Putanje do foldera
 */
    define('APP_LIB',               APP_ROOT        . 'lib/');
    define('APP_ABSTRACT',          APP_LIB         . 'abstract/');
    define('APP_PUBLIC',            APP_LIB         . 'public/');
    define('APP_STATIC',            APP_LIB         . 'static/');
    define('APP_MVC',               APP_LIB         . 'mvc/');

    define('APP_RESOURCES',         APP_ROOT        . 'resources/');

    define('APP_CONFIG',            APP_ROOT        . 'config/');
    define('APP_CONFIG_ADMIN',      APP_CONFIG      . 'admin/');

    define('APP_THEME',             APP_ROOT        . 'theme/');

    define('APP_CACHE',             APP_ROOT        . 'cache/');
    define('APP_CACHE_SMARTY',      APP_CACHE       . 'smarty/');
    define('APP_CACHE_SMARTY_COMPILE',APP_CACHE_SMARTY. 'compile/');
    define('APP_CACHE_SMARTY_CACHE',APP_CACHE_SMARTY. 'cache/');

    define('APP_LAB',               APP_ROOT        . 'lab/');

/**
 * Prefix tabela baze
 */
    define('APP_DB_PREFIX',         'app_');
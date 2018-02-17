<?php

use fm\lib\help\ClassLoader;

/**
 * Staticne klase
 */


/**
 * Abstraktne klase
 */

/**
 * Public klase
 */
ClassLoader::addClass('AppStart',            APP_PUBLIC . 'AppStart.php',         'public',      'CmsStart');

/**
 * Registrovanje jezika
 */
Clang::add_lang(CMS_SR, CMS_SERBIAN);
Clang::add_lang(CMS_EN, CMS_ENGLISH);
//Clang::add_lang(CMS_FR, CMS_FRENCH);

Clang::set_default(CMS_SR);

/**
 * Registrovanje kontrolera
 */
//CregistryController::add_controller(CMS_C_INDEX, APP_MVC);
CregistryController::add_controller(CMS_C_NEWS, APP_MVC);
//CregistryController::add_controller(CMS_C_ADMIN, APP_MVC);

CregistryController::add_langs();
CregistryController::add_tables();

CMS::$db_prefix = APP_DB_PREFIX;
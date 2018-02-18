<?php

use fm\lib\help\ClassLoader, \cms\lib\help\Lang, cms\lib\help\ControllerLoader, cms\CMS;

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
Lang::addLang(CMS_SR, CMS_SERBIAN);
Lang::addLang(CMS_EN, CMS_ENGLISH);
//Clang::add_lang(CMS_FR, CMS_FRENCH);

Lang::setDefault(CMS_SR);

/**
 * Registrovanje kontrolera
 */
//CregistryController::add_controller(CMS_C_INDEX, APP_MVC);
ControllerLoader::addController(CMS_C_NEWS, APP_MVC);
//CregistryController::add_controller(CMS_C_ADMIN, APP_MVC);

ControllerLoader::addLang();
ControllerLoader::addTables();

CMS::$dbPrefix = APP_DB_PREFIX;
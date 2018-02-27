<?php

use fm\lib\help\ClassLoader, \cms\lib\help\Lang, cms\lib\help\ControllerLoader, cms\CMS, fm\lib\help\Router;

/**
 * Staticne klase
 */


/**
 * Abstraktne klase
 */

/**
 * Public klase
 */
ClassLoader::addClass('AppStart',            APP_PUBLIC . 'AppStart.php',         'public',      'cms\lib\abstracts\CmsStart');

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
ControllerLoader::addController(CMS_C_INDEX, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_INDEX), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_INDEX));
ControllerLoader::addController(CMS_C_NEWS, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_NEWS), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_NEWS));
//CregistryController::add_controller(CMS_C_ADMIN, APP_MVC);

Router::addRoute(CMS_C_INDEX, '/', 'run', FM_GET);

Router::addRoute(CMS_C_NEWS, '/', 'index', FM_GET);
Router::addRoute(CMS_C_NEWS, '/', 'create', FM_POST);
Router::addRoute(CMS_C_NEWS, '/categories', 'categoryList', FM_GET);
Router::addRoute(CMS_C_NEWS, '/categories', 'categoryCreate', FM_POST, CMS_ADMIN);
Router::addRoute(CMS_C_NEWS, '/categories/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}', 'categoryUpdate', FM_PUT, CMS_ADMIN);
Router::addRoute(CMS_C_NEWS, '/categories/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}', 'categoryDelete', FM_DELETE);
Router::addRoute(CMS_C_NEWS, '/news/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}', 'newsUpdate', FM_PUT);
Router::addRoute(CMS_C_NEWS, '/news/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}', 'newsDelete', FM_DELETE);
Router::addRoute(CMS_C_NEWS, '/{path|' . FM_REQUIRED . '}/{path}', 'run', FM_GET);

ControllerLoader::addLang();
ControllerLoader::addTables();

CMS::$dbPrefix = APP_DB_PREFIX;
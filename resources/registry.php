<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

use fm\lib\help\ClassLoader, \cms\lib\help\Lang, cms\lib\help\ControllerLoader, cms\CMS;

/**
 * Static class
 */


/**
 * Abstract class
 */

/**
 * Public class
 */
ClassLoader::addClass('AppStart',            APP_PUBLIC . 'AppStart.php',         'public',      'cms\lib\abstracts\CmsStart');

/**
 * Registry lang
 */
Lang::addLang(CMS_SR, CMS_SERBIAN);
Lang::addLang(CMS_EN, CMS_ENGLISH);
//Clang::add_lang(CMS_FR, CMS_FRENCH);

Lang::setDefault(CMS_SR);

/**
 * Registry controllers
 */
ControllerLoader::addController(CMS_C_INDEX, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_INDEX), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_INDEX));
ControllerLoader::addController(CMS_C_NEWS, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_NEWS), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_NEWS));
ControllerLoader::addController(CMS_C_USER, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_USER), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_USER));
ControllerLoader::addController(CMS_C_ADMIN, APP_MVC, 'cms\lib\mvc\controller\Controller' . ucfirst(CMS_C_ADMIN), 'cms\lib\mvc\model\Model' . ucfirst(CMS_C_ADMIN));
//CregistryController::add_controller(CMS_C_ADMIN, APP_MVC);

ControllerLoader::addLang();
ControllerLoader::addTables();

CMS::$dbPrefix = APP_DB_PREFIX;
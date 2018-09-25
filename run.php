<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

use fm\FM, fm\lib\help\ClassLoader, cms\CMS;

define('APP_ROOT', realpath(dirname(__FILE__)) . '/');

define('APP_CORE', '../../');

try{
    require_once(APP_CORE . 'cms-v1/cms.php');

    FM::includer(APP_ROOT . 'resources/constants.php');
    FM::includer(APP_RESOURCES . 'registry.php');
    ClassLoader::loadStaticClass();

    CMS::setDatabase(APP_CONFIG . 'db.php');
//    CMS::set_admin_theme(APP_THEME);

    $objApp = ClassLoader::load('AppStart');
    $objApp->run();
}
catch(Exception $e)
{
    print $e;
}
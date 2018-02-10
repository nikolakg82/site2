<?php
define('APP_ROOT', realpath(dirname(__FILE__)) . '/');

define('APP_CORE', '../../');

try{
    require_once(APP_CORE . 'cms-v1/cms.php');

    FM::includer(APP_ROOT . 'resources/constants.php');
    FM::includer(APP_RESOURCES . 'registry.php');
    Floader::load_static_class();

    CMS::set_db(APP_CONFIG . 'db.php');
//    CMS::set_admin_theme(APP_THEME);

    $objApp = Floader::load('Astart');
    $objApp->run();


}
catch(Exception $e)
{
    print $e;
}
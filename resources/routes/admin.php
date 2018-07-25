<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

use fm\lib\help\Router;

Router::addRoute(
    CMS_C_ADMIN,
    '/.{view|' . FM_REQUIRED . '|values:' . FM_HTML . '}',
    'index',
    FM_GET);

Router::addRoute(
    CMS_C_ADMIN,
    '/structure.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'structure',
    FM_GET,
    CMS_ADMIN);
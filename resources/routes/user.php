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
    CMS_C_USER,
    '/login.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'login',
    FM_POST);

Router::addRoute(
    CMS_C_USER,
    '/logout.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'logout',
    FM_GET,
    CMS_USER | CMS_ADMIN);

Router::addRoute(
    CMS_C_USER,
    '/get-admin-user.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'getAdminUser',
    FM_GET,
    CMS_GUEST | CMS_ADMIN);
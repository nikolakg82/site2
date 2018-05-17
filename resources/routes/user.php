<?php

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
    CMS_ADMIN);
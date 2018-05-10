<?php

use fm\lib\help\Router;

Router::addRoute(
    CMS_C_USER,
    '/login.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'login',
    FM_POST);
<?php

use fm\lib\help\Router;

Router::addRoute(
    CMS_C_ADMIN,
    '/.{view|' . FM_REQUIRED . '|values:' . FM_HTML . '}',
    'index',
    FM_GET);
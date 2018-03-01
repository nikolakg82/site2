<?php

use fm\lib\help\Router;

Router::addRoute(
    CMS_C_INDEX,
    '/',
    'run',
    FM_GET);
<?php

use fm\lib\help\Router;

Router::addRoute(
    CMS_C_NEWS,
    '/.{view|' . FM_REQUIRED . '|values:' . FM_JSON . ':' . FM_HTML . '}?{page|' . FM_INTEGER . '}&{perPage|' . FM_INTEGER . '}',
    'index',
    FM_GET);
Router::addRoute(
    CMS_C_NEWS,
    '/.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'create',
    FM_POST);
Router::addRoute(
    CMS_C_NEWS,
    '/categories.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'categoryList',
    FM_GET);
Router::addRoute(
    CMS_C_NEWS,
    '/categories.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'categoryCreate',
    FM_POST);
Router::addRoute(
    CMS_C_NEWS,
    '/categories/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'categoryUpdate',
    FM_PUT);
Router::addRoute(
    CMS_C_NEWS,
    '/categories/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'categoryDelete',
    FM_DELETE);
Router::addRoute(
    CMS_C_NEWS,
    '/news/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'newsUpdate',
    FM_PUT);
Router::addRoute(
    CMS_C_NEWS,
    '/news/{id|' . FM_INTEGER . '|' . FM_REQUIRED . '}.{view|' . FM_REQUIRED . '|values:' . FM_JSON . '}',
    'newsDelete',
    FM_DELETE);
Router::addRoute(
    CMS_C_NEWS,
    '/{path|' . FM_REQUIRED . '}.{view|' . FM_REQUIRED . '|values:' . FM_JSON . ':' . FM_HTML . '}?{page|' . FM_INTEGER . '}&{perPage|' . FM_INTEGER . '}',
    'run',
    FM_GET);
<?php

return array(
    'id'    => array(
        CMS_T_TITLE => 'Id',
        CMS_T_TYPE  => FM_AUTO,
        CMS_T_MODIFY=> false,
    ),
    'title'=> array(
        CMS_T_TITLE => 'Title',
        CMS_T_TYPE  => FM_MLC,
        'join'  => array(
            'table' => APP_DB_PREFIX . 'news_category_mlc',
            'field' => 'title',
            'where_join' => array(
                'sid' => 'my_table.id',
                'lang'=> "'" . Clang::get_default() . "'",
            ),
        ),
    ),
    'code'  => array(
        CMS_T_TITLE => 'Code',
        CMS_T_TYPE  => FM_TEXT,
    ),
    'category_id'=> array(
        CMS_T_TITLE => 'Category',
        CMS_T_TYPE  => FM_SELECT,
        'join'  => array(
            'table' => APP_DB_PREFIX . 'news_category_mlc',
            'field' => 'title',
            'key'   => 'sid',
            'where' => array(
                'lang'=> "'" . Clang::get_default() . "'",
            ),
            'where_join' => array(
                'sid' => 'my_table.category_id',
                'lang'=> "'" . Clang::get_default() . "'",
            ),
        ),
    ),
    'date'  => array(
        CMS_T_TITLE => 'Date',
        CMS_T_TYPE  => FM_DATE,
    ),
    'ordinance' => array(
        CMS_T_TITLE => 'Ordinance',
        CMS_T_TYPE  => FM_NUMERIC,
        CMS_T_DEFAULT_VALUE => 0,
        CMS_T_MIN_VALUE => 0,
        CMS_T_MAX_VALUE => 99999999
    ),
    'active'    => array(
        CMS_T_TITLE => 'Active',
        CMS_T_TYPE  => FM_SWITCH,
        CMS_T_DEFAULT_VALUE => 'y',

    ),
);
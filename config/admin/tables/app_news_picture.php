<?php

return array(
    FM_TITLE => 'News picture',
    FM_FIELDS => array(
        'id'    => array(
            CMS_T_TITLE => 'Id',
            CMS_T_TYPE  => FM_AUTO,
            CMS_T_MODIFY => false,
        ),
        'sid'  => array(
            CMS_T_TITLE => 'Sid',
            CMS_T_TYPE  => FM_TEXT,
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
    ),
);
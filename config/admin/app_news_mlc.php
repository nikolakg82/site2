<?php

return array(
    FM_TITLE => 'Text',
    FM_FIELDS => array(
        'id'    => array(
            CMS_T_TITLE => 'Id',
            CMS_T_TYPE  => FM_AUTO,
            CMS_T_MODIFY=> false,
        ),
        'lang'  => array(
            CMS_T_TITLE => 'Lang',
            CMS_T_TYPE  => FM_TEXT,
        ),
        'sid'  => array(
            CMS_T_TITLE => 'Sid',
            CMS_T_TYPE  => FM_TEXT,
        ),
        'path'  => array(
            CMS_T_TITLE => 'Path',
            CMS_T_TYPE  => FM_TEXT,
        ),
        'title'  => array(
            CMS_T_TITLE => 'Title',
            CMS_T_TYPE  => FM_TEXT_AREA,
        ),
        'text'  => array(
            CMS_T_TITLE => 'Text',
            CMS_T_TYPE  => FM_TEXT_EDITOR,
        ),
    ),
);
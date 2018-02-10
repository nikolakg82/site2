<?php

return array(
    CMS_C_NEWS => array(
        'title' => 'News',
        'icon'  => 'ico-23_news.gif',
        'tables'=> array(
            CMS::$db_prefix . 'news' => array(
                'title' => 'News',
                'icon'  => 'ico-23_news.gif',
                'mlc'   => CMS::$db_prefix . 'news_mlc',
                'subtables' => array(
                    CMS::$db_prefix . 'news_picture'  => array(
                        'title' => 'News picture',
                        'icon'  => 'ico-23_news.gif',
                        'mlc'   => CMS::$db_prefix . 'news_picture_mlc',
                    ),
                ),

            ),
            CMS::$db_prefix . 'news_category' => array(
                'title' => 'News category',
                'icon'  => 'ico-32_catalog_kat.gif',
                'mlc'   =>  CMS::$db_prefix . 'news_category_mlc',
            ),
        ),
    ),
);
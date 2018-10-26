<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 10/24/2018
 * Time: 3:32 PM
 */

use cms\CMS;

return array(
    'title' => 'News',
    'icon'  => 'ico-23_news.gif',
    'tables'=> array(
        CMS::$dbPrefix . 'news' => array(
            'title' => 'News',
            'icon'  => 'ico-23_news.gif',
            'mlc'   => CMS::$dbPrefix . 'news_mlc',
            'subtables' => array(
                CMS::$dbPrefix . 'news_picture'  => array(
                    'title' => 'News picture',
                    'icon'  => 'ico-23_news.gif',
                    'mlc'   => CMS::$dbPrefix . 'news_picture_mlc',
                ),
            ),

        ),
        CMS::$dbPrefix . 'news_category' => array(
            'title' => 'News category',
            'icon'  => 'ico-32_catalog_kat.gif',
            'mlc'   =>  CMS::$dbPrefix . 'news_category_mlc',
        ),
    ),
);
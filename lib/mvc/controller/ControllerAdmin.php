<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

namespace app\lib\mvc\controller;

class ControllerAdmin extends \cms\lib\mvc\controller\ControllerAdmin
{
    public function structure()
    {
        $arrData = array(
            [
                'news' => [
                    'Title' => 'News',
                    'sub'   => [
                        'news_category' => 'News category',
                        'news'          => 'News'
                    ]
                ]
            ]
        );

        return $this->getResponse()->setData($arrData)->setResponseCode(200);
    }
}
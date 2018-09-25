<?php

/**
 * @copyright Copyright (c) 2005-2018 MSD - All Rights Reserved
 * @link http://www.nikolamilenkovic.com
 * @email info@nikolamilenkovic.com
 * @author Nikola Milenkovic info@nikolamilenkovic.com dzoni82.kg@gmail.com http://www.nikolamilenkovic.com
 * Date: 5/3/2016
 * Time: 2:16 PM
 */

$time_start = microtime(true);
require_once ("../run.php");

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

//echo '<b>Total Execution Time:</b> '.$execution_time.' s<br />';
function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

//echo convert(memory_get_usage()); // 123 kb
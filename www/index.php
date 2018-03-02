<?php
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
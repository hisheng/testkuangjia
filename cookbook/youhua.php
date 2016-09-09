<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/9
 * Time: 11:42
 */



$start = microtime(true);

var_dump($start);
$longStr = uniqid('a');

echo $md5 = md5($longStr);

$a  = array('dd','fff');

var_dump(json_encode($a));

json_decode(json_encode($a));


$elapsed = microtime(true) - $start;

var_dump($elapsed);
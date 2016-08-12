<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/12
 * Time: 10:08
 */

$input = array("a", "b", "c", "d", "e");


//1 从数组中取出一段
$a = array_slice($input,1,3);
print_r($a);

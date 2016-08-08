<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/4
 * Time: 14:24
 */


var_dump($a = 3 == 'ffff');

$a = 1;
function add($a){
    $a = 3;
}
$a = add($a);
var_dump($a);

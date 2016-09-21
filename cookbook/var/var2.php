<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/21
 * Time: 14:28
 */
require 'var1.php';

function rr(){
    global $aa;
    $aa = 2;
}

rr();
var_dump($GLOBALS);
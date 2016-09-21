<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/21
 * Time: 14:24
 */
$aa = 1;



function test(){
    global $aa;
    var_dump($GLOBALS);
}

test();
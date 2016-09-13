<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/12
 * Time: 14:53
 */


function br(){
    echo '<br/>';
}


// 检查一个变量是否包含数组
var_dump(is_numeric('sss'));//false
var_dump(is_numeric(33));
var_dump(is_numeric('233'));
var_dump(is_numeric('23ddd3'));//false
var_dump(is_numeric('23 ddd 3'));//false

$a = '12 ddd' + 0;
var_dump($a);//2
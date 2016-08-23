<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/23
 * Time: 19:24
 */


//把$a 全部变成小写
$a = array('Android','Ios','MAC');
//方法，我们知道 strtolower()是一个小写函数


echo strtolower('APPLE'); //apple

//用数组回调函数

print_r(array_map('strtolower',$a));// Array('android','ios','mac');

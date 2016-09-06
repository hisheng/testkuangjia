<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 15:56
 */

//把一个数组 转化成 一个字符串
//方法一
$m1 = ['apple','bb','ff'];
$s = join(',',$m1);
var_dump($s);

//方法二
var_dump(implode($m1,','));



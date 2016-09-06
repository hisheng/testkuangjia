<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 17:06
 */

// 计算数组的并集

$a = [3,4,6,7,8,9,10];
$b = [22,33,45,6,788,99,7,555];

//并集
// 1 合并起来
var_dump(array_merge($a,$b));
//2 去掉重复的
var_dump(array_unique(array_merge($a,$b)));


//交集

var_dump(array_intersect($a,$b));


//差集  $a 的差集，$a 去掉相同的
var_dump(array_diff($a,$b));
var_dump(array_diff($b,$a));

//对称差集 ,全部的 除去交集的部分
var_dump(array_merge(array_diff($a,$b),array_diff($b,$a)));
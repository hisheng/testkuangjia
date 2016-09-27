<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 11:47
 */

// 主要研究集合

$a = ['hi','apple','na','ff','ggh'];
$b = ['hi','apple','ss','gg','hj'];

// 交集
var_dump(array_intersect($a,$b));// hi apple

//a 中 有 而b没有，的 a对b的差集
var_dump(array_diff($a,$b)); // na ff ggh

// $a 和 $b  合并
var_dump(array_merge($a,$b));//hi','apple','na','ff','ggh'  'hi','apple','ss','gg','hj'

//$a 和$b 的 并集
var_dump(array_unique(array_merge($a,$b)));//hi','apple','na','ff','ggh' ,'ss','gg','hj'


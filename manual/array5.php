<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 15:13
 */

// 处理key  或者 value

$kw = ['hisheng'=>21,'xiaomei'=>19,'gg'=>25];

// 返回所有的keys

var_dump(array_keys($kw));

// 返回 有 19岁的人，就是返回 值对应的 keys
var_dump(array_keys($kw,19)); //
/*
 * array (size=1)
  0 => string 'xiaomei' (length=7)*/






// 返回所有的 values
var_dump(array_values($kw));
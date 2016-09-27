<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 11:54
 */

//生成数组

// 1 生成一个范围内的数组
var_dump(range(1,6,1));
/*
 * array (size=6)
  0 => int 1
  1 => int 2
  2 => int 3
  3 => int 4
  4 => int 5
  5 => int 6*/

//2 用填充的方法，生成一个 重复值的数组
var_dump(array_fill(0,5,'hisheng'));
/*
 * array (size=5)
  0 => string 'hisheng' (length=7)
  1 => string 'hisheng' (length=7)
  2 => string 'hisheng' (length=7)
  3 => string 'hisheng' (length=7)
  4 => string 'hisheng' (length=7)*/

// 用指定 的 key 和value 生成一个 对应key数组   和值的数组
$people = ['hisheng','xiaozheng','xiao','ma'];
var_dump(array_fill_keys($people,'jiangsu'));
/*
 *   array (size=4)
  'hisheng' => string 'jiangsu' (length=7)
  'xiaozheng' => string 'jiangsu' (length=7)
  'xiao' => string 'jiangsu' (length=7)
  'ma' => string 'jiangsu' (length=7)*/

// 把现在的数组，增加到指定的增加的长度
$min = ['a','b'];
var_dump(array_pad($min,5,'value'));
/*array (size=5)
  0 => string 'a' (length=1)
  1 => string 'b' (length=1)
  2 => string 'value' (length=5)
  3 => string 'value' (length=5)
  4 => string 'value' (length=5)*/

//如果指定的长度 小于 数组的长度，然后数组
var_dump(array_pad($min,1,'value'));
/*array (size=2)
  0 => string 'a' (length=1)
  1 => string 'b' (length=1)*/


<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 11:21
 */

// 把key 全部大写或者小写
$input_array = array("FirSt" => 1, "SecOnd" =>4,'dd'=>'hish','name'=>'hisheng');
var_dump(array_change_key_case($input_array, CASE_UPPER));


//分割数组
var_dump(array_chunk($input_array,2,true));

//取出多维数组，某一栏,两栏，生成心的一维 数组
$people = [];
$people[] = ['name'=>'hisheng','age'=>21];
$people[] = ['name'=>'xiaomei','age'=>22];
var_dump(array_column($people,'age','name'));

// 把两个数组，一个数组作为其 key，一个数组作为 val ，生成一个新数组，两个大小要一样大，比如都三个
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
var_dump($c);


//统计数组中 所有值 出现的次数
$array = array(1, "hello", 1, "world", "hello");
var_dump(array_count_values($array));
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


// 检查 键 和 值
if(array_key_exists(2,$m1)){
    echo 'key';
}

if(in_array('bb',$m1)){
    var_dump('value');
}


// 查找一个 值 是否在 数组里，返回相应的key
var_dump(array_search('ff',$m1));

//多个打印
var_dump('sss',['apple','nddd'],536);



// 查看数组中最大值，最小值，列表好像都有 max，min方法
$nums = [2,44,77,89,33];
var_dump(max($nums));
var_dump(min($nums));



// 反转数组

var_dump(array_reverse($nums));


//对数组排序


//sort rsort 排序 不关联 key
var_dump(sort($nums));
var_dump($nums);

var_dump(rsort($nums));
var_dump($nums);

//guanliankey用 asort arsort  针对 key value数组
var_dump(asort($nums));
var_dump($nums);
var_dump(arsort($nums));
var_dump($nums);


//多维数组排序 array_multisort()

//用法一 对多个数组排序 ,就像 var_dump 打印多个数据一样



$num1 = [2,44,16,22,10];
$num2 = [1,37,15,21,9];

array_multisort($num1,$num2);
var_dump($num1);
var_dump($num2);

//用法二，一个多维数组，可以传入特定的数组元素
$num3 = ['a'=>[2,44,16,22,10],'b'=>[1,37,15,21,9]];
array_multisort($num3['a'],$num3['b']);
var_dump($num3);

// 如果顺序不一样呢，加入参数


array_multisort($num3['a'],SORT_NUMERIC,SORT_DESC,$num3['b'],SORT_NUMERIC,SORT_ASC);
var_dump($num3);



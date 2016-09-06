<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 15:35
 */

// 默认索引从 1开始
$a = [1=>'apple','blue'];
var_dump($a);

$d = [-1=>'apple','blue'];
var_dump($d);



// key 对多个元素
$c = [1=>['dd','ff'],'blue'];
var_dump($c);


// range 生成一些列数组
var_dump(range(0,20));


// 将所有单词变小写

$words = ['DFg','gg','Apple'];
$new = array_map('strtolower',$words);
var_dump($words);
var_dump($new);

//从数组删除元素
unset($words[0]);
var_dump($words);



//将数组填补到 指定的长度
$input = array(12, 10, 9);
$result = array_pad($input, 5, 'dd');
var_dump($result);



// 合并2个数组  按照值，在第一个数组，后加上

$m1 = ['apple','bb','ff'];
$m2 = ['ggg','apple'];
$m3 = [1=>['ggg','apple']];
$merge = array_merge($m1,$m2);
var_dump($merge);
$merge2 = array_merge($m1,$m3);
var_dump($merge2);




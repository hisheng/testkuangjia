<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 12:07
 */

// 数组 和 回调函数

//array_filter
//array_map
//array_walk

//array_reduce

//array_diff_uassoc
//array_walk_recursive   // 和array_walk 不同的地方在于  可以运用 到 多维
function is($var){
    if ($var == 'eee'){
        return true;
    }
}



$a = ['hi','gg','eee','fff'];

var_dump(array_filter($a,'add'));

var_dump($a);

// 只要 array_filter 里面的 回调函数 ，返回是 true 是就ok --- array_filter是返回数组的一部分





// array_map 可以操作 数组里面的数据，然后返回   一个新的数组
function add($var){
    return 'my name is'.$var;
}
var_dump(array_map('add',$a));
var_dump($a);


// 弄 val 和 key的  返回值为true或false,处理关联数组
$ab = array_flip($a);
var_dump($ab);
function val_key($val,$key){
    echo $val.' is '.$key.'<br/>';
}
var_dump(array_walk($a,'val_key'));
var_dump($a);



// array_reduce  相加 合并 成一个值
$num = [1,2,3];
function addnum($v,$w){
    $w = $v + $w;
    return $w;
}
function addstring($v,$w){
    return $v.$w;
}
var_dump(array_reduce($num,'addnum'));
var_dump($num);




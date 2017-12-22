<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/12/22
 * 快速排序
 * Time: 10:43
 */
srand(time());
$i = 1;
$nums = [];
do{
    $nums[] = rand(1,99);
    $i++;
}while($i <= 20);

var_dump($nums);
function quic_sort($arr)
{
    $len = count($arr);
    if($len <= 1){
        return $arr;
    }
    
    $left = [];
    $right = [];
    $pivot = array_pop($arr);
    foreach ($arr as $num){
        if($num <=  $pivot){
            $left[] = $num;
        }else{
            $right[] = $num;
        }
    }
    return array_merge(quic_sort($left),[$pivot],quic_sort($right));
}

$sortdNums = quic_sort($nums);
var_dump($sortdNums);
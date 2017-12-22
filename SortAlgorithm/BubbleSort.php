<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/12/22
 * Time: 12:10
 * 冒泡排序
 */
srand(time());
$i = 1;
$nums = [];
do{
    $nums[] = rand(1,99);
    $i++;
}while($i <= 20);

var_dump($nums);

function bubble_sort($arr)
{
    $len = count($arr);
    for ($i=0;$i<$len-1;$i++)
    {
        for ($j=0;$j<$len - $i -1;$j++){
            if($arr[$j] > $arr[$j+1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}

$sortdNums = bubble_sort($nums);
var_dump($sortdNums);
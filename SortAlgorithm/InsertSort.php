<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/12/22
 * Time: 11:07
 * 插入排序
 */
srand(time());
$i = 1;
$nums = [];
do{
    $nums[] = rand(1,99);
    $i++;
}while($i <= 20);

var_dump($nums);

function insert_sort($arr)
{
    foreach ($arr as $index => $num){
        for ($i=0;$i<$index;$i++){
            if($num < $arr[$i]){
                $tmp = $num;
                do{
                    $arr[$index] = $arr[$index-1];
                    $index-- ;
                }while($index > $i);
                $arr[$i] = $tmp;
            }
        }
    }
    return $arr;
}

$sortdNums = insert_sort($nums);
var_dump($sortdNums);
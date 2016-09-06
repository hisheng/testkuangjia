<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 10:21
 */

function br(){
    echo '<br/>';
}


//生成随机数 mt_rand 比  rand更快，更不可预测，所以跟随机，更推荐
echo rand(10,20);
br();
echo mt_rand(10,20);
br();


// 生成可预测的随机数 srand s代表 seed种子的意思  或者使用 mt_srand
function pick_color(){
    $colors = ['red','orange','yellow','blue','green','indigo','violet'];
    $i = mt_rand(0,count($colors) - 1);
    return $colors[$i];
}

mt_srand(34534);

$first = pick_color();
$second = pick_color();

echo "$first is red and $second is yellow.";

// 生成 偏随机数 ---不太懂
function rand_weighted($numbers){
    $total = 0;
    foreach ($numbers as $number => $weight) {
        $total += $weight;
        $distribution[$number] = $total;
    }
    $rand = mt_rand(0,$total - 1);

    foreach ($distribution as $number => $weights){
        if($rand < $weights){
            return $number;
        }
    }
}



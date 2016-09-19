<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/19
 * Time: 11:24
 */

// 生成随机数
var_dump(rand(1,100000));
var_dump(getrandmax());

// 生成可预见的随机数,保证可以重复的行为

var_dump(srand(32152));
var_dump(rand(1,100000)); // 有了上面的种子，都是 95267 ，放在其他的地方也是 95267


//生成 偏随机数  ----其实我还是不太了解原理
function rand_weighted($numbers){
    $total = 0;
    foreach ($numbers as $number => $weight) {
        $total += $weight;
        $distribution[$number] = $total;
    }
    var_dump($distribution);
    var_dump($total);
    $rand = mt_rand(0,$total - 1);
    var_dump($rand);
    foreach ($distribution as $number =>$weights) {
        var_dump($weights);
        if($rand < $weights ){
            return $number;
        }
        
    }
}

$ads = array('ford'=>12234,'att'=>33424,'ibm'=>16823);

$ad = rand_weighted($ads);
var_dump($ad);
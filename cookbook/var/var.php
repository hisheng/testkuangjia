<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 17:52
 */

// == 和 =
$a = 12;
if(13 == $a){
    echo 'yes';
}
var_dump($a);



$b = 12;
if($b == 13){
    echo 'yes';
}
var_dump($b);
if($b = 13){
    echo 'yes2';
}
var_dump($b);


// 交换2个变量的值
$a = 'alice';
$b = 'bob';
list($a,$b) = array($b,$a);
var_dump($a);
var_dump($b);

var_dump(pow(1.25,2));



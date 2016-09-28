<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/28
 * Time: 11:05
 */

//callback 调用其他函数

function sayHi($name){
    echo 'hi '.$name;
}


function excSayHi($func,$parm){
    call_user_func($func,$parm);
}


excSayHi('sayHi','hisheng');



// 匿名函数

//1
$anonyFunc = function ($name) {
    return 'Hello ' . $name;
};

echo $anonyFunc("Josh");

//2
$anonyFunc1 = function ($name) {
    echo 'hi '.$name;
};

$anonyFunc1('dd');



//3
$anonyFunc2 = function () {
    echo 'hi no $anonyFunc2';
};

$anonyFunc2();






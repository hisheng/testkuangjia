<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 15:34
 */

//可变函数 ，还有一种 可变变量 $$var 通过 $var 不同，调用不同的变量

// 主要是 $var();  $var 等于不同的值，调用不同的函数

function foo() {
    echo "In foo()<br />\n";
}

function bar($arg = '') {
    echo "In bar(); argument was '$arg'.<br />\n";
}

// 使用 echo 的包装函数
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()




// 可变变量

$a = 'value is a';
$b = 'value is b';
$c = 'value is c';



$val = 'a';
var_dump($$val);

// 全局变量 与 可变变量

function val($val){
    global $$val;
    echo $$val;
}
val('a');
var_dump($GLOBALS);

// 文件里的 变量 为 全局变量，调用的时候 用 global 关键字，类里面的变量，范围在类里，函数里的变量，返回在函数里



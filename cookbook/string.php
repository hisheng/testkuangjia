<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 9:58
 */

//1 utf8


$a = 'abc123 h$';
$b = '海生';
var_dump($a); //string 'abc123 h$' (length=9)
var_dump(utf8_encode($a));//string 'abc123 h$' (length=9)

//中文的问题
var_dump($b);//string '海生' (length=6)
var_dump(utf8_encode($b));//string 'æµ·ç' (length=12)
var_dump(utf8_decode(utf8_encode($b)));//string '海生' (length=6)


//二进制 安全
var_dump('01010111');//string '01010111' (length=8)

//单引号，需要转义 单引号
var_dump('I have gone to the store'); //string 'I have gone to the store' (length=24)
var_dump('i\'ve gone to the store');//string 'i've gone to the store' (length=22)
var_dump('would you pay $1.75 for 8 ounces of tap water?');//string 'would you pay $1.75 for 8 ounces of tap water?' (length=46)
var_dump('in double-quoted string , newline is represented by \n');//string 'in double-quoted string , newline is represented by \n' (length=54)

//双引号，需要转义 双引号 , $符合

var_dump("i've gone to the store"); //string 'i've gone to the store' (length=22)
var_dump("the sauce cost \$10.25"); //string 'the sauce cost $10.25' (length=21)
$cost = '$10.25';
var_dump("the cost is $cost"); //string 'the cost is $10.25' (length=18)


//获取单个字节
$neighbor = 'hilde';
var_dump($neighbor[3]); //string 'd' (length=1)



//字符串 插入函数
//1 .

$a = 2;
$b = array('name'=>'hisheng');

echo 'wo hava '.$a.' apple';

echo 'my name is '.$b['name'];

//双引号

echo "we have $a apple";
echo "my name is $b[name]"; // 用 $b[name] 代替 $b['name']

//或者用 {}

echo "we hava {$a} apple";
echo "my name is {$b['name']} ";
echo "select * from users where name = '{$b['name']}'"; // select * from users where name = 'hisheng'



//去除 字符串 首尾 空格


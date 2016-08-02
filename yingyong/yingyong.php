<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/1
 * Time: 17:02
 */
//引用示例



$b = '3';
echo $b; //3
$a = &$b;
echo $a;  //3
$b = 4;
echo $b ; //4
echo $a; //4
$a = 5;
echo $b ; //5
echo $a; //5

//
echo 'sss';
unset($b);
//echo $b;
echo $a;

/*

//赋值示例
$b = '3';
echo $b; //3
$a = $b;
echo $a; //3
$b = 4;
echo $b; //4
echo $a; //3
$a = 5;
echo $b; //4
echo $a; //5

*/






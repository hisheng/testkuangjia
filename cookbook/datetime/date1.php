<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/19
 * Time: 14:11
 */
//1 显示现在的时间 ---字符串
var_dump(date('Y-m-d H:i:s'));//string '2016-09-19 14:15:53' (length=19)
var_dump(date('Y-m-d H:i:s',time()));//string '2016-09-19 14:26:08' (length=19)

$dt = new DateTime();
var_dump($dt);
var_dump($dt->date);//string '2016-09-19 14:15:53' (length=19)
var_dump($dt->format('Y-m-d H:i:s'));//string '2016-09-19 14:15:53' (length=19)


// 现在的时间 数组
var_dump(getdate());
/*array (size=11)
  'seconds' => int 52
  'minutes' => int 18
  'hours' => int 14
  'mday' => int 19
  'wday' => int 1
  'mon' => int 9
  'year' => int 2016
  'yday' => int 262
  'weekday' => string 'Monday' (length=6)
  'month' => string 'September' (length=9)
  0 => int 1474265932*/
var_dump(localtime());
/*array (size=9)
  0 => int 52
  1 => int 18
  2 => int 14
  3 => int 19
  4 => int 8
  5 => int 116
  6 => int 1
  7 => int 262
  8 => int 0*/

 


//2 现在的 时间 -  unix时间戳
var_dump(time());//int 1474266137
var_dump($dt->getTimestamp());//int 1474266137

//2.1  字符串  转 unix时间戳
var_dump(strtotime('2016-09-19 14:15:53'));//int 1474265753
var_dump(strtotime('+1 day'));//int 1474352954
var_dump(date('Y-m-d H:i:s',strtotime('+1 day')));//string '2016-09-20 14:29:55' (length=19)

//2.2 unix 时间戳 转 字符串
var_dump(date('Y-m-d H:i:s',time()));//string '2016-09-19 14:31:48' (length=19)
var_dump(date('Y-m-d H:i:s',0));//string '1970-01-01 08:00:00' (length=19)  ---是8点，看到没有，有时区的概念
var_dump(date('Y-m-d H:i:s',1000));//string '1970-01-01 08:16:40' (length=19)

// 所有转换成 统一的 unix时间戳，这样时间就统一了，然后根据 不同的时区，转化成不同的时间



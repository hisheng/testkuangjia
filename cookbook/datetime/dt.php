<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 15:13
 */
function br(){
    echo '<br/>';
}





// 显示现在的时间 字符串
//方法一
echo date('r');
br();
//方法二
$when = new DateTime();
print $when->format('r');
br();

//显示现在的时间，数组

$now = getdate();
var_dump($now);
/*array (size=11)
  'seconds' => int 16
  'minutes' => int 19
  'hours' => int 15
  'mday' => int 6
  'wday' => int 2
  'mon' => int 9
  'year' => int 2016
  'yday' => int 249
  'weekday' => string 'Tuesday' (length=7)
  'month' => string 'September' (length=9)
  0 => int 1473146356*/


/// 时间 转 unix时间戳



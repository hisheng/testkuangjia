<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/12
 * Time: 14:29
 */


//替换 is 是

$a = 'heool  w eff  hao  aer  my name  is  hisheng  is ff is ';

$b = str_replace('is','是',$a);

echo $a;
echo '<br/>';
echo $b;
echo '<br/>';
echo substr_replace($a,'我',0,3);


//大写
echo '<br/>';
echo ucfirst($a);
echo '<br/>';
echo ucwords($a);
echo '<br/>';
echo strtoupper($a);
echo '<br/>';
echo strtolower($a);


<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 16:26
 */

//分解字符串  explode

$word = 'my name is hisheng';

var_dump(explode(' ',$word));

var_dump(explode(' ',$word,3));
/*
 * array (size=3)
  0 => string 'my' (length=2)
  1 => string 'name' (length=4)
  2 => string 'is hisheng' (length=10)
*/



// 英文空格 \s
$result = preg_split('/\s/',$word);
var_dump($result);
/*
 * array (size=4)
  0 => string 'my' (length=2)
  1 => string 'name' (length=4)
  2 => string 'is' (length=2)
  3 => string 'hisheng' (length=7)
*/


// 空格
$result = preg_split('/ /',$word);
var_dump($result);
/*array (size=4)
  0 => string 'my' (length=2)
  1 => string 'name' (length=4)
  2 => string 'is' (length=2)
  3 => string 'hisheng' (length=7)
*/

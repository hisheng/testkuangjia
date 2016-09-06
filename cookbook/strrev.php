<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 15:28
 */
function br(){
    echo '<br/>';
}
//反转字符串

//1. 按字节反转

$a = 'abc def ghi jkl mno pqrst';

echo strrev($a);

br();

// 按单词 反转
var_dump(implode(' ',array_reverse(explode(' ',$a))));



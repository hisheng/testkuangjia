<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 14:38
 */

function br(){
    echo '<br/>';
}

$a = 'i love write code,haha,how are you';

//处理每个字节

for($i = 0 ;$i< strlen($a);$i++){
    echo $a[$i];
}


/// 统计有多少个  数字 ,为什么不用 strpos，应该有可能会返回0
br();
$s = 'adfgf5gfghh54h';

$num = 0;
for($i = 0 ;$i< strlen($s);$i++){
    if(strstr('0123456789',$s[$i])){
        $num++;
    };
}
echo $num;

br();
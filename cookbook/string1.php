<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 11:11
 */

function br(){
    echo '<br/>';
}


// 1查找是否有  @

$a = '123456789@qq.com';

/*preg_match_all('/(.*?)(@)(.*?)/',$a,$match);
var_dump($match);*/

if(strpos($a,'@') === false){
    echo 'no';
}else{
    echo 'yes';
}

//2 抽取 字符串 字符串的前8个
echo substr($a,0,8);

//3 替换 ，信用卡除了后四位 模糊处理,还有多余的字符串，用省略号 ...
br();


$card = '32159631258962174568248fff84g';

echo substr_replace($card,'****',-4,4);//32159631258962174568248ff****





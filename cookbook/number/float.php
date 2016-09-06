<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/5
 * Time: 17:53
 */

function br(){
    echo '<br/>';
}

$a = 1.00000000001;
$b = 1.00000000000;


//不太推荐，这种方法
if($a === $b){
    echo 'yes';
}else{
    echo 'no';
}

br();
//推荐做法
if(abs($a - $b) > 0 ){
    echo 'no abs';
}


//四舍五入 round() 为一个整数
br();
echo round(204.55); //205
br();
// 保存小数点位数
echo round(204.55,1); //204.6


//向上取整 ceil 天花板
br();
echo ceil(204.55); //205


//向下取整 floor 地板
br();
echo floor(204.55); // 204






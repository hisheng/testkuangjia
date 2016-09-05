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





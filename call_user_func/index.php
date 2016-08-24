<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/24
 * Time: 14:27
 */
function sayhi(){
    echo 'hellossss';
}
call_user_func('sayhi');

function sayhi2($name){
    echo $name.' 您好';
}
$name = '周杰伦';
call_user_func('sayhi2',$name);

function say($name,$hi){
    echo $name.' '.$hi;
}
$name = '周杰伦';
$hi = '你好啊';
call_user_func('say',$name,$hi);//周杰伦 你好啊

function saynew($p){
    echo $p['name'].' '.$p['hi'];
}
$name = '周杰伦';
$hi = '你好啊';
$p = array('name'=>$name,'hi'=>$hi);
call_user_func('saynew',$p);

function myname($name){
    return '我的名字是'.$name;
}
$name = '周杰伦';
$myname = call_user_func('myname',$name);
echo $myname;


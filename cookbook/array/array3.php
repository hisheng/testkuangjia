<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/19
 * Time: 15:19
 */

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
var_dump($stack);
array_push($stack,'hisheng');
var_dump($stack);
/*
 * array (size=4)
  0 => string 'orange' (length=6)
  1 => string 'banana' (length=6)
  2 => string 'apple' (length=5)
  3 => string 'hisheng' (length=7)*/

unset($stack[0]);
var_dump($stack);
$stack[3]='new hisheng';
var_dump($stack);
array_splice($stack,2,2);// 删完后，索引重新生成了，要注意,注意有返回值，千万别取返回值，和原来的数组不一样的
//add
var_dump($stack);
$new=array_pad($stack,5,'new add array_pad');
var_dump($new);
//delete


//search
var_dump(in_array(0,$new));//boolean true
var_dump(in_array(0,$new,true));//boolean false

var_dump(array_search(0,$new));//int 0
var_dump(array_search('banana',$new));//int 0
if(array_search(0,$new) !== false){
    echo 'false1';// 没法区别啊，位置0和 没有值
}
if(array_search('banana',$new) !== false){
    echo 'false2';
}

var_dump(array_key_exists(2,$new));//boolean true


//删除数组中重复的值
var_dump(array_unique($new));
var_dump($new);

//找出含有 pp 字符的单词


function pp($v){
    if(strstr($v,'pp')){
        //var_dump($v);
        return $v;
    }

}
$flops = array_filter($new,'pp');
var_dump($flops);//
/*array (size=1)
  1 => string 'apple' (length=5)*/


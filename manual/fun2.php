<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 16:12
 */
// 学习递归函数
// static 静态变量 --- 这个下面的很难理解，特别是  $count-- 把递归次数变少来理解
function test()
{
    static $count = 0;

    var_dump($count);//0
    $count++;


    echo $count; //1
    var_dump($count);//1


    if ($count < 2 ) {
        test();// 在这个test里面，如果  不用 static的话，$count又会变成0 ，用了count会在现在的基础上 1，进行计算

    }


    $count--;
    var_dump($count);
}
test();
//var_dump($count);

<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/24
 * Time: 10:19
 */


function myCallback($p)
{
    echo 'World';
    echo $p;
    return 5;
}

function sayHello($callback){
    echo 'Hello ';
    $p = ' hisheng';

    $a=call_user_func($callback,$p); //代替 $this->myCallback() 多方便，$this只能在这个类，而这个没有限制
    //是的，当你知道函数名的时候是不建议用call_user_func ，因为用call_user_func反而更慢。
    //但是当你不知道函数名的时候，它的好处就显示出来了。

    var_dump($a);
}



sayHello('myCallback');



<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 15:45
 */

class MyClass{}
class NotMyClass{}

$a = new MyClass();

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);

function __autoload($className){
    require $className.'.php';
}


//测试自动加载
$f = new Father();
$f->test();
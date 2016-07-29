<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 11:20
 */

namespace Fred;

function my_autoload($class){
    require $class.'.php';
}
/*function __autoload($class){
    require $class.'.php';
}*/

spl_autoload_register('my_autoload');


$mono  = new Courier('Monospace');

var_dump($mono);
echo $mono::name;



/*echo Courier::name;
echo Courier::$hi;*/


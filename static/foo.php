<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/1
 * Time: 10:54
 */

class Foo{
    public static $hi;
    public function __construct($name){
        return self::$hi=$name;
    }
}
//echo Foo::$hi;
//$b = new Foo('haha');
//echo $b::$hi;


class Feo{
    public $hi;
    public function __construct($name){
        return $this->hi = $name;
    }
}
$b = new Feo('haha');
echo $b->hi;


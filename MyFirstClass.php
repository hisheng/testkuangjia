<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/21
 * Time: 18:14
 */

require_once 'Core.php';

class  MyFirstClass  extends \CorePhp\Core {


}

$a= new MyFirstClass();
$a->displayhisheng();
$a->sayhi();

echo $a::hi;


$b = new \BasicPhp\Basic();
$b->drink();



$c = new \CorePhp\ChildPhp\Child();

$c->displaychild();

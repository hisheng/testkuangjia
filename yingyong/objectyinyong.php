<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/2
 * Time: 14:28
 */

class A{
    public $test = 4;
}

class B{
    public $test = 8;
}

$b = new A();
echo $b->test; //4

$a = &$b;    // $a ,$b是引用
            // ($a,$b) = <id>
echo $a->test; //4
echo $b->test; //4
$a->test = 5;
echo $a->test; //5
echo $b->test; //5



$c = new B();
echo $c->test; //8
$a = $c;    // $a ,$b是引用;$a,$c是赋值
            // ($a,$b) = <id>
            // ($a,$b) = ($c) = <id2>
echo $a->test; //8
echo $b->test; //8
echo $c->test; //8
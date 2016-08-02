<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/2
 * Time: 10:25
 */

class A{
    public $testa = 3;

}

$a = new A();

$b = $a;

$b->testa = 2;

echo $b->testa;

echo $a->testa;

$a->testa = 5;
echo $b->testa;
echo $a->testa;

$c =  new A();
echo $c->testa;
$b =$c;
echo $b->testa;
echo $c->testa;



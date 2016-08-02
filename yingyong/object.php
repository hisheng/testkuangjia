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

class B{
    public $testa = 7;
}
$a = new A();
$b = $a;        // $a ,$b都是同一个标识符的拷贝
                // ($a) = ($b) = <id>

/*
 * 此时$a,$b的关系：
 *        +-----------+      +-----------------+
 * $a --> | object id | ---> | object(Class A) |
 *        +-----------+      +-----------------+
 *                               ^
 *        +-----------+          |
 * $b --> | object id | ---------+
 *        +-----------+
 *
 *
 */
$b->testa = 2;
echo $b->testa;  //2
echo $a->testa;  //2

$a->testa = 5;
echo $b->testa;  //5
echo $a->testa;  //5

$c =  new B();
$b =$c;

/*
 * 此时$a,$b,$c的关系：
 *        +-----------+      +-----------------+
 * $a --> | object id | ---> | object(Class A) |
 *        +-----------+      +-----------------+
 *
 *        +------------+
 * $b --> | object id2 | -------------+
 *        +------------+              |
 *                                    v
 *        +------------+      +-----------------+
 * $c --> | object id2 | ---> | object(Class B) |
 *        +------------+      +-----------------+
 */


echo $a->testa;  //5
echo $b->testa;  //7
echo $c->testa;  //7

//此时如果,把$a重新赋值呢

/*
 * 此时$a,$b,$c的关系：
 *        +-----------+
 * $a --> | object id | ----------------+
 *        +-----------+                 |
 *                                     |
 *        +------------+              v
 * $b --> | object id2 | -------------+
 *        +------------+              |
 *                                    v
 *        +------------+      +-----------------+
 * $c --> | object id2 | ---> | object(Class B) |
 *        +------------+      +-----------------+
 */

$a = $c;
echo $a->testa; //7

$a->testa = 8;
echo $a->testa;  //8
echo $b->testa;  //8
echo $c->testa;  //8

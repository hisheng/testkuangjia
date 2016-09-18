<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 10:27
 */

require 'Father.php';
require 'Grandfather.php';

$c = new Father();

$c->test();
echo father;

unset($c);
echo father;

$d = new Grandfather();
$d->t();


// 不能被继承，只能调用
class child1 extends Grandfather{

}





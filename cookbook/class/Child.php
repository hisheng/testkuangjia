<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 10:27
 */

require 'Father.php';

$c = new Father();

$c->test();
echo father;

unset($c);
echo father;
<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/1
 * Time: 10:27
 */

class MyClass{
    const hi = 'hello';
}
echo  MyClass::hi;
$b = new MyClass();
echo $b::hi;
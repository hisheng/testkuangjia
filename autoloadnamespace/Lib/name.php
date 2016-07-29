<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 17:00
 */

namespace  Lib;

class Name {

    public function __construct()
    {
        echo __NAMESPACE__ . "<br>";
    }
    public static function test()
    {
        echo  __NAMESPACE__ . ' static function test <br>';
    }

}


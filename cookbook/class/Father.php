<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 10:27
 */

class Father{
    function __construct(){
        define('father','hisheng');
    }

    function test(){
        echo 'test';
    }

    function __destruct(){
        //unset(father);
    }
}
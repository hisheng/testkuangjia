<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/22
 * Time: 14:54
 */
//预定义常量

var_dump($_COOKIE);

setcookie('name','hisheng',time()+4);
var_dump($_COOKIE);


var_dump(getenv('hishng'));

var_dump($_FILES);


var_dump($_SESSION);

var_dump($GLOBALS);

var_dump($http_response_header);

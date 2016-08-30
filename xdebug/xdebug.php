<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/30
 * Time: 11:27
 */

$a = array(1, 2, 3);
$b =& $a;
$c =& $a[2];

var_dump(xdebug_debug_zval_stdout('a'));


header( "X-Test", "Testing" );
setcookie( "TestCookie", "test-value" );
var_dump(xdebug_get_headers());



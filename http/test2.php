<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/8
 * Time: 15:23
 */

require 'http.php';

$s  = new \http\http();
//$url = "http://192.168.82.243/first/welcome/hello/3/4";
$url = "http://test.all-appp.com/sessiontest.php";
//$params = array('userid'=>105703,'type'=>5,'myid'=>105703,'customType'=>1,'page'=>0);
$params = array('ztid'=>2,'type'=>0,'userid'=>105703,'myid'=>4);
print_r($s->put($url,$params));
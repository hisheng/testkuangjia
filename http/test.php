<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/8
 * Time: 16:58
 */


require 'http.php';



/*
 *
 * // 1
$t = new \http\http();

$url = "http://api.all-appp.com/u90sye";
$params = array('currentPage'=>3,'pageSize'=>200);

print_r($t->get($url,$params));
*/




//2

$s  = new \http\http();
//$url = "http://192.168.82.243/first/welcome/hello/3/4";
$url = "http://api.all-appp.com:81/v1/api/zan";
//$params = array('userid'=>105703,'type'=>5,'myid'=>105703,'customType'=>1,'page'=>0);
$params = array('userid'=>4,'zuopinid'=>130037);
print_r($s->post($url,$params));








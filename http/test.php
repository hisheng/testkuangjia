<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/8
 * Time: 16:58
 */

namespace test;

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
$url = "http://192.168.82.243/first/welcome/hello/3/4";
$params = array('userid'=>3,'name'=>'奥运表情','version'=>'0.2.6');

print_r($s->post($url,$params));
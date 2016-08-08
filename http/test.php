<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/8
 * Time: 16:58
 */

namespace test;

require 'http.php';


// 1
$t = new \http\http();

$url = "https://mm.taobao.com/tstar/search/tstar_model.do?_input_charset=utf-8";

print_r($t->get($url));

//2

$s  = new \http\http();
$url = "https://mm.taobao.com/tstar/search/tstar_model.do?_input_charset=utf-8";
$params = array('currentPage'=>3,'pageSize'=>200);

print_r($s->post($url,$params));
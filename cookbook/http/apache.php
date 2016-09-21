<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/20
 * Time: 15:39
 */

//获得值
$session = apache_note('session');
var_dump($session);

//set value
apache_note('session',$session);
apache_note('session_id',session_id());

// 获取 apache 版本信息
var_dump(apache_get_version());

//
var_dump(apache_getenv('SERVER_ADDR'));


//获取 http 所有请求header信息 方法一
var_dump(apache_request_headers()); //如果没有装apche ，是没有用的
//获取 http 所有请求header信息 方法2
var_dump(getallheaders());



//获取 http 所有响应header信息
var_dump(apache_response_headers());




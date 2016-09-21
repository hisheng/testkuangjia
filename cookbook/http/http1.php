<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/20
 * Time: 15:05
 */
//返回 401页面
http_response_code(401);

//强迫进行 客户端认证 只在 apache模块有效
header('WWW-Authenticate : basic realm = "hisheng"');
echo 'you neew logi ';

var_dump($_SERVER['HTTP_USER_AGENT']);

//读取所有header首部
var_dump(getallheaders());



// 写一个http 首部 ,上面打印的都是一个图片
//var_dump(header('content-type: image/png'));
//var_dump(header('content-type: application/json'));
var_dump(header('content-type: text/html'));


//重定向
header('location: http://www.qq.com');


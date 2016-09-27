<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 18:18
 */

// http:// 协议
$url = 'http://localhost/testkuangjia/manual/yield.php';

$fp = fopen($url,'r');

$meta_data = stream_get_meta_data($fp);

var_dump($meta_data);
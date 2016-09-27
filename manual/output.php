<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 18:28
 */

// 检查是否开启了缓冲区
if (ob_get_level() == 0) ob_start();


echo 'oschina.net';
ob_flush();
flush();


sleep(1);
echo '红薯';
sleep(1);
echo '虫虫';

//文章理解
//https://my.oschina.net/whrlmc/blog/85782
//http://gywbd.github.io/posts/2015/1/php-output-buffer-in-deep.html
//http://www.cnblogs.com/liuzhang/p/4161213.html
//https://blog.phpgao.com/php_buffering.html





//http://gywbd.github.io/
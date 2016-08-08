<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/4
 * Time: 16:37
 */

define('BR','<br/>');

echo __FILE__.BR;
echo __DIR__.BR;

echo "1".basename(__FILE__).BR;
echo "2".dirname(__FILE__).BR;
echo '3'.realpath(__FILE__).BR;

if(is_dir(realpath(__DIR__))){
    echo 'yes';
}
$path_parts = pathinfo(__FILE__);
var_dump($path_parts);
echo pathinfo(__FILE__,PATHINFO_BASENAME);
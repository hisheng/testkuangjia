<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 16:28
 */

require './name.php';
echo name\info::get_info();

require './app/ios.php';
echo app\ios::hi();
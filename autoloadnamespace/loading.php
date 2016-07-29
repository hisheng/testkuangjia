<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 16:37
 */


namespace Autoloading;

class loading {
    public static function autoload($className)
    {
        //echo $className.BR;
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, DIR . '\\'. $className) . '.PHP';
        if (is_file($fileName)) {
            require $fileName;
        } else {
            echo $fileName . 'is not exit'; die;
        }
    }
}
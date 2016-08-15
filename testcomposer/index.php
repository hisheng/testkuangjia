<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/12
 * Time: 17:31
 */

include '../vendor/autoload.php';


use  Symfony\Component\HttpFoundation\Request as Res;

var_dump(Res::createFromGlobals());

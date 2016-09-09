<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/9
 * Time: 11:52
 */

//正则学习

$html = file_get_contents('http://www.qq.com/');
//print_r($html);


preg_match_all('[<a.+</a>]',$html,$match1);

var_dump($match1);
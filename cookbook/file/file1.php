<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/13
 * Time: 10:57
 */

// 写入w 追加a  读r
$fh = fopen('file.txt','r');
var_dump($fh);

fputs($fh,'新内容');

var_dump(fgets($fh));

//
$s=file_get_contents('file2.txt');
var_dump($s);

file_put_contents('file1.txt',strtolower($s));








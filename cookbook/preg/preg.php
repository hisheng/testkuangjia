<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/9
 * Time: 11:52
 */

//正则学习

$page = 0;

$index = $page*40;

$html = file_get_contents('https://movie.douban.com/celebrity/1018667/photos/?type=C&start='.$index.'&sortby=vote&size=a&subtype=a');
print_r($html);


preg_match_all("/<ul class=\"poster-col4 clearfix.*?<\/ul>/",$html,$match1);

var_dump($match1);
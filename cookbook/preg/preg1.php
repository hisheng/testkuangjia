<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/12
 * Time: 10:32
 */

// all words

$texts = "hi,wo are you !,hello. who's is";

$words = preg_match_all("/(?:\w'\w|\w)+/",$texts,$match);

var_dump($match);




// utf u
$t = '你好，和，哈哈、我的！等等';
$w2 = preg_match_all("/\w+/u",$t,$m2);
var_dump($m2);


//
$todo = "1.Get 2.Eat 3.Squash";
preg_match_all("/\d\.\w+/",$todo,$m3);
var_dump($m3);


//ss








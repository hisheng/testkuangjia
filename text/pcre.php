<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/9
 * Time: 17:44
 */

namespace text\pcre;

header("Content-Type:text/html; charset=utf8");

define('br','<br/>');
define('t','王菲\方大同
红豆
曲.柳重言词.林夕

<a>还没好好的感受</a>
雪花绽放的气候
我们一起颤抖
会更明白什么是温柔
还没跟你牵着手
走过荒芜的沙丘
可能从123此以后学会珍惜
天长和地久
有时候有时候
<p>我会相信一切有尽头</p>
相聚离开都有时候
没有什么会永垂不朽
可是我有时候
宁愿选择留恋不放手
等到风景都看透
也许你会陪我看细水长流
(music)
还没为你把红豆
熬成缠绵的伤口
<h1>然后一起分享</h1>
会更明白相思的哀愁
还没好好的感受
醒着亲吻的温柔
可能在aaa我左右
你才追求孤独的自由
有时候有时候
我会相信一切有尽头
相聚离开都有时候
没有123什么会永垂不朽
可是我有时候');


echo t;

preg_match_all('/<h1>(.*?)<\/h1>/',t,$match);

var_dump($match);

preg_match_all("/^[<h1>.*<\/h1>]$/",t,$match1);
var_dump($match1);

preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
    "<b>example: </b><div align=left>this is a test</div>",
    $out, PREG_PATTERN_ORDER);

var_dump($out);


$str = <<<FOO
a: 1
b: 2
c: 3
FOO;

preg_match_all('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches2);

var_dump($matches2);
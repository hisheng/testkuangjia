<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/10
 * Time: 14:05
 */

require 'D:/testkuangjia/http/http.php';


//采集知乎 https://www.zhihu.com/roundtable/rio2016 奥运相关的页面
$a = new \http\http();
$s=$a->get('https://www.zhihu.com/roundtable/rio2016',array());
print_r($s);

// 找出热门回答的人

preg_match_all('/<li class=\"item\"><a href=[|\"]\/people\/(.*?)[|\"] class=\"item-link\" data-hovercard=[|\'].*?src=[|\"].*?\" alt=\".*?[|\"] class="avatar d50">/',$s, $out);

var_dump($out);

 










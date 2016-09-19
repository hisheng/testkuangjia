<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 17:20
 */



$books = array(
    array('ele','fff',2007),
    array('ele','fff fff',287),
    array('ejj jjj le','fff',207),
    array('ele','fff',27)
);
// 1
foreach ($books as $book) {
    print pack('A15A5A4',$book[0],$book[1],$book[2]).'<br/>';
}


//2
echo str_pad('dddd',25,'.');


echo substr('abcdrfghhjjkuu',0,10);


//分解固定宽度的数组
var_dump(str_split('abcdrfghhjjkuu',10));


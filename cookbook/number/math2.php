<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/19
 * Time: 10:47
 */

var_dump(2-1.6);

echo log(8,2);//3
echo pow(2,3);//8

echo base_convert(1000008252,10,16);
                //3b9aea3c 十六进驻


for($i=0x1;$i<0x10;$i++){
    var_dump($i);// 输出是 10进制
}


//其他进制的 加减乘数
var_dump(0x10/0x3);//float 5.3333333333333 输出是 是进制，结果，都是10进制
var_dump(0x10*0x3);//int 48
var_dump(0x10+0x3);//int 19
var_dump(0x10-0x3);//int 13


//
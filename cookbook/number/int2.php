<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 11:11
 */
function br(){
    echo '<br/>';
}



// 求 1.25 的10次方
echo pow(1.25,10);



// 格式化数字，比如加 千位分号

//方法一
br();
$number = 1234.56;
$a = 1234568232536;
echo number_format($number,2); //1,234.56
br();
echo number_format($number, 2, '.', ',');//1,234.56
br();
echo number_format($a); //1,234,568,232,536

//方法二 NumberFormatter



//进制转换
br();
$hex = 'a1';
//从十六进制 转 十进制
echo base_convert($hex,16,10); //161
br();



$a = 100; //十进制
$b = 0144; // 0 表示八进制
$c = 0x64;// 0x 表示十六进制
$d = 0b1100100;// 0 表示二进制

if($a == $b){
echo 'yes';
}

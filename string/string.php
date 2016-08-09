<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/9
 * Time: 14:25
 */
namespace string\string;

define('br','<br/>');

class string{

    //将数组转化成字符串
    public function string1(){
        $parms = array('a'=>'apple','b'=>'banana');

        //1将一个一维数组转字符串
        echo implode(' means ',$parms).br;//apple means banana

        //2讲一个数组转化成 url参数
        echo http_build_query($parms).br;//a=apple&b=banana
    }

}




$a = new string();
$a->string1();
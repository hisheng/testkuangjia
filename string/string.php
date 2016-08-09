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

    // 大小写

    public function string2(){
        $s = 'Hello World , i love You , ha ha';

        //1 字符串的第一个字符 大写
        echo ucfirst($s).br;//Hello World , i love You , ha ha

        //2 字符串的第一个字符 小写
        echo lcfirst($s).br;//hello World , i love You , ha ha

        //3 每个单词首字母大写
        echo ucwords($s).br;//Hello World , I Love You , Ha Ha

        //4 字符串大写
        echo strtoupper($s).br;//HELLO WORLD , I LOVE YOU , HA HA

        //5 字符串小写
        echo strtolower($s).br;//hello world , i love you , ha ha

    }

    // 字符串的长度与索引,查找位置

    public function string3(){
        $s = 'Hello World , i love You , ha ha';

        //1 长度
        echo strlen($s).br;//32 空格，字符，标点，各占1个字符长度
        echo mb_strlen($s).br;//32 空格，字符，标点，各占1个字符长度

        echo strlen('你好世界').br; //12,一个中文字符，或者中文标点符号 3个字符长度，空格还是1个
        echo mb_strlen('你好世界').br; //12,一个中文字符，或者中文标点符号 3个字符长度，空格还是1个



        //2索引
        echo $s[0].br; //H
        echo $s[1].br; //e

        //3查找字符，在字符串首次出现的位置 ,返回 位置索引
        // 区分大小写
        echo strpos($s,'Y').br; //21
        //不区分大小写
        echo stripos($s,'Y').br;//21
        // 因为有可能是 0 所以用if 判断查找失败 用 === false 比较适合

        //4 找字符，在字符串首次出现的位置 ,返回 自己包括后面的字符串
        // 区分大小写
        echo strstr($s,'Y').br; //You , ha ha
        //不区分大小写
        echo stristr($s,'Y').br;//You , ha ha

        //5 查找字符，在字符串首次出现的位置 ,返回前面还有多少个字符串
        echo strcspn($s,'l').br; // 2
        //签名有多少个字符，竟然和这个字符所处的index是相等的，哦哦
        echo strcspn($s,'l').' = '.stripos($s,'l');//2 = 2


        //6




    }


}




$a = new string();
$a->string1();
$a->string2();
$a->string3();
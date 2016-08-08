<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/4
 * Time: 16:58
 */

define('br','<br/>');

$hello  = "Hello World";
$trimmed = trim($hello, "Hld");
var_dump($trimmed);


// 0 输出打印字符串

echo 'string'.br;


//1加转义
//1.1 给所有的字符加转义
echo addcslashes('foo[ ]', 'A..z');
//1.2 去掉所有的转义 \ 号
echo stripcslashes(addcslashes('foo[ ]', 'A..z'));


//1.3 转义单引号
$str = "Is your name 'Oreilly'?";
echo addslashes($str);
//1.4去掉单引号
$str1 = "Is your name O\'reilly?";
echo stripslashes($str1);

//1.5 转义元字符集
$str = "Hello world. (can you hear me?)";
echo quotemeta($str);

//2
echo br;

//2 字符串分割



// uu编码 解码
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");



//3 删除空格，首尾字符
$hello  = "Hello World";
$trimmed = trim($hello, "Hdle");

//删除首
ltrim($hello,'Hdle');

//删除末尾
$trimmed = rtrim($hello, "Hdle");

//删除 ASCII 码控制字符
$binary = "\x09Example string\x0A";
$clean = rtrim($binary, "\x00..\x1F");




//4 html 文章等相关

//4.2   nl2br — 在字符串所有新行之前插入 HTML 换行标记
echo nl2br("foo isn't\n bar");



//4.1 使用字符串断点将字符串打断为指定数量的字串。
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");
echo $newtext;
/*
The quick brown fox<br />
jumped over the lazy<br />
dog.
 */

//4.3 urlencode  编码 URL 字符串

//4.4  输出 html
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);


//4.5 大小写相关
//  使一个字符串的第一个字符大写
$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!
// 使一个字符串的第一个字符小写
$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

//ucwords — 将字符串中每个单词的首字母转换为大写
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

//strtoupper — 将字符串转化为大写
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // 打印 MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

//strtolower — 将字符串转化为小写
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // 打印 mary had a little lamb and she loved it so


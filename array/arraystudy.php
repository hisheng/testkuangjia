<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/12
 * Time: 10:08
 */

$input = array("a", "b", "c", "d", "e");


//1 从数组中取出一段
$a = array_slice($input,1,3);
print_r($a);


$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);

$info = array('coffee', 'brown', 'caffeine');

$infos = array('coffee'=>'coffee', 'brown'=>null, 'caffeine'=>'coffee');
// 列出所有变量
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";


if(isset($infos['brown'])){
    echo 'chongming';
}else{
    echo 'shabi';
}

$my['user_name'] = '画画是哪个';
$user['nickname'] = '画画是哪个';
$my['user_id'] = 222;

//安卓判断
if(true){
    $hi='hi '.$my['user_name'].' , '.$user['nickname'].' 点赞了您的作品';
    exec('/usr/local/php/bin/php jp.php '.$my['user_id'].'\"'.$hi.'\"');
    var_dump('/usr/local/php/bin/php jp.php '.$my['user_id'].' "'.$hi.'"');

}

$a = array('type'=>2,'zpid'=>1111);
var_dump(json_encode($a));

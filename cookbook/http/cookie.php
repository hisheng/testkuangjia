<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/19
 * Time: 17:42
 */

var_dump($_COOKIE);
setcookie('name1','hisheng1');// 浏览器关闭过期
setcookie('name','hisheng',time()+36);// 36秒后过期
var_dump($_COOKIE);

setcookie('name','hisheng',1);//删除一个cookie，只要把时间设置为过去的时间




// 2 用户登录状态 cookie认证
function validate($user,$pass){
    $users = array('david'=>'fads33','adam'=>'2233');
    if(isset($users[$user]) && $users[$user] == $pass){
        return true;
    }else{
        return false;
    }
}
$secret_word = 'if i ate spinach';
if(validate($_GET['username'],$_GET['pass'])){
    setcookie('login',$_GET['username'].','.md5($_GET['username'].$secret_word));
}

//var_dump($_SESSION);
// 3 需要在绘话$_SESSION中存储登录信息，否则这个cookie 可以伪装
session_start();
var_dump($_SESSION);
if(validate($_GET['username'],$_GET['pass'])){
    $_SESSION['login'] = $_GET['username'].','.md5($_GET['username'].$secret_word);
}

if(isset($_SESSION['login'])){
    list($c_usrname,$cookie_hash) = explode(',',$_SESSION['login']);
    var_dump($c_usrname);
    if($_SESSION['login'] == $_COOKIE['login']){
        var_dump('欢迎hisheng');
    }
}else{
    var_dump('请正确登录');
}

// 通过 session，就算仿制 cookie也没有用，因为 session不一样




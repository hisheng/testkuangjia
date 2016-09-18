<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 14:53
 */

class Person {
    //专门负责被重载的数据 属性
    private $data  = array();

    public function __set($name,$value){
        $this->data[$name] = $value;
    }

    public function __get($name){
        return $this->data[$name];
    }

}

$p = new Person();
$p->email = '465908774@qq.com';
var_dump($p->email);



class MethodTest{
    public function __call($name,$parmsArray){
        var_dump('MethodTest '.$name .'的 参数是'.implode(' ,',$parmsArray));
        var_dump($parmsArray);
        /*
         * array (size=2)
              0 => string 'hisheng' (length=7)
              1 => string 'hishneg2' (length=8)
        */

        // 用处比较多的是  生成固定格式的数据，比如 error之类的，提醒你用到的方法，不存在之类的
        var_dump('您调用的函数'.$name.'()'.'不存在');

        //还有一种用处，在于 call_user_func($class,$method,$parm) call_user_func_array()一起用
    }

    public function hi(){
        var_dump('this is hello');
    }
}

$m = new MethodTest();
$m->hello('hisheng','hishneg2');//这样的方式传递多个参数

//下面这样的错误的
//  $m->hello2(array('hisheng2'));

$m->hi(); // 有hi的话，就会调用原来的函数




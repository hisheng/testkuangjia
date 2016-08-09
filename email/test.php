<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/9
 * Time: 10:26
 */

namespace test;

class test{
    public $email;

    public function __construct(){
        require 'email.php';
        $this->email = new \email\email();
    }

    public function errorEmailTest(){
        $this->email->errorEmail();
    }
}

$e = new test();
$e->errorEmailTest();
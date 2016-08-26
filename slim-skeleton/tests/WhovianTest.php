<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/26
 * Time: 12:20
 */


require dirname(__DIR__).'\src\Whovian.php';
error_log(dirname(__DIR__).'\src\Whovian.php ',3,dirname(__DIR__).'\src\error.txt');

class WhovianTest extends PHPUnit_Framework_TestCase{
    public function testSetDoctorWithConstruct(){
        $whovian = new Whovian('hisheng');
        $this->assertAttributeEquals('hisheng','favoriteDoctor',$whovian);
    }
    public function testSay(){
        $whovian = new Whovian('hisheng');
        $this->assertEquals('the best doctor is hisheng',$whovian->say());
    }
    public function testRespondToInDisagreement(){
        $whovian = new Whovian('hisheng');
        $opinion = 'no hisheng';
        $whovian->respondTo($opinion);
    }
    public function testrespondTo(){
        $whovian = new Whovian('hisheng');
        $opinion = 'no hisheng';
        $whovian->respondTo($opinion);
    }
}


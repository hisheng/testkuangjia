<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/21
 * Time: 16:29
 */

namespace CorePhp;

class Core {
    public $name = 'hisheng';

    const hi = 'hello';

    public function displayhisheng(){
        echo $this->name;
        echo '<br/>';
    }

    public function sayhi(){
        echo self::hi;
        echo '<br/>';

    }

    // children;


}

namespace CorePhp\ChildPhp;

class Child {

    public $child = 'child';

    public function displaychild(){
        echo $this->child;
    }


}





namespace BasicPhp;

class Basic {
    public $water = 'water';

    public function drink(){
        echo $this->water;
        echo '<br/>';
    }
}





/*class  MyFirstClass  extends Core{


}

$a= new MyFirstClass();
$a->displayhisheng();
$a->sayhi();*/




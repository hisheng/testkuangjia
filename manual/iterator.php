<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/28
 * Time: 11:59
 */

class myIterator implements Iterator {
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );
    public function __construct() {
        $this->position = 0;
    }
    public function rewind(){
        var_dump(__METHOD__);
        $this->position = 0;
    }
    public function current(){
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }
    public function key(){
        var_dump(__METHOD__);
        return $this->position;
    }
    public function next(){
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid(){
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

}

$it = new myIterator();

foreach ($it as $key => $val) {
    var_dump($key,$val);
    echo "\n";
}



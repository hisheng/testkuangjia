<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 11:00
 */

namespace shipping;

class Courier {
    public $name;
    protected $pname;
    private $prname;
    public $home_country;

    const name = 'hello';

    public static $hi = 'pname';


    public function __construct($name){
        $this->name = $name;
        return true;
    }

    public function ship($parcel){
        return true;
    }

}
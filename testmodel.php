<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/27
 * Time: 18:56
 */

require('model.php');


class ps extends Model {
    function q($sql){
        return $this->dbh->query($sql);
    }

}





$a = new Model();

print_r($a->errorInfo());

/*print_r($a->query("SELECT * from t1")->fetchAll());



$b = new ps();

print_r($b->q("SELECT * from t1")->fetchAll());*/


$redis= new Redis;
$redis->connect('127.0.0.1',6379);

var_dump($redis::REDIS_SET);
<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/27
 * Time: 18:50
 */

class Model{
    public $dbh;

    public function __construct(){
        $user = 'root';
        $pass = '';
        $this->dbh = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
    }

    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    public function commit(){
        return $this->dbh->commit();
    }

    public function errorCode(){
        return $this->dbh->errorCode();
    }

    public function errorInfo(){
        return $this->dbh->errorInfo();
    }

    public function query($sql){
        return $this->dbh->query($sql);
    }
}
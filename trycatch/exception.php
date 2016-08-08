<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/3
 * Time: 16:38
 */
 class MyExpection extends Exception{

 }

function doStuff(){

}


try {
    //echo $a;
    throw new Exception("Some error message");
} catch(Exception $e) {
    echo 'this';
    echo '<br/>';
    echo $e->getFile();
    echo '<br/>';
    echo $e->getMessage();
    echo '<br/>';
    echo $e->getCode();
    echo '<br/>';
    echo $e->getLine();
    echo '<br/>';
    echo $e->getPrevious();
    echo '<br/>';
    echo $e->getTraceAsString();
    echo '<br/>';
}

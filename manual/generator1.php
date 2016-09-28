<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/28
 * Time: 10:37
 */


//最簡單的Generator
function myGenerator(){
    yield 'value1';
    yield 'value2';
    yield 'value3';
}

foreach (myGenerator() as $yieldedValue) {
    echo $yieldedValue, PHP_EOL;
}
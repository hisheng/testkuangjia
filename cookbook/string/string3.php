<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 17:43
 */


$words = explode(' ', 'i ha ff ghh ggh tt');
var_dump($words);




$words2 = preg_split('/  /','i ha ff ghh ggh tt');
var_dump($words2);
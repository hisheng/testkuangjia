<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/9
 * Time: 11:49
 */

namespace string\mbstring;

define('br','<br/>');

class Mbstring{

    public function echoConst(){
        echo MB_OVERLOAD_MAIL.br;
        echo MB_OVERLOAD_STRING.br;
        echo MB_OVERLOAD_REGEX.br;
        echo MB_CASE_UPPER.br;
        echo MB_CASE_LOWER.br;
        echo MB_CASE_TITLE.br;
    }






}
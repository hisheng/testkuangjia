<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/8
 * Time: 18:36
 */

namespace yibuhttp;

class yibuhttp{

    public function get(){

        $url = 'www.baidu.com';

        $fp =  fsockopen("www.baidu.com", 80, $errno, $errstr, 30);
        // resource(2,strem);
        //var_dump($fp);

        if(!$fp){
            echo 'error';
        }else{
            $out = "GET $url HTTP/1.1\r\n";
            $out .="Host: ".$url."\r\n";
            $out .="Connection: Close\r\n\r\n";

            $ss = fwrite($fp, $out);

            var_dump($fp);

            var_dump($ss);


            usleep(20000);
            fclose($fp);
        }
    }

}

$s  = new yibuhttp();
$s->get();

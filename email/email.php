<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/9
 * Time: 10:23
 */

namespace email;

class email{
    public function errorEmail(){
        error_log('sss',1,'465908774@qq.com');
    }

    public function sendemail(){
        //使用mail函数发送自定义邮件
        $to = '465908774@qq.com';
        $subject = 'love email';
        $message = 'how are you';
        mail($to,$subject,$message);
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/8
 * Time: 15:07
 */

class http{


    //1 模拟一个 有返回结果数据的  CURLOPT_RETURNTRANSFER = 1
    public function test(){
        // 创建一个cURL资源
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, "https://mm.taobao.com/tstar/search/tstar_model.do?_input_charset=utf-8");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出

        //当请求https的数据时，会要求证书，这时候，加上下面这两个参数，规避ssl的证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        // 抓取URL并把它传递给浏览器
        $result = curl_exec($ch);

        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);

        return $result;
    }

    public function get(){
        // 创建一个cURL资源
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, "https://mm.taobao.com/tstar/search/tstar_model.do?_input_charset=utf-8");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出

        //当请求https的数据时，会要求证书，这时候，加上下面这两个参数，规避ssl的证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        // 抓取URL并把它传递给浏览器
        $result = curl_exec($ch);

        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);

        return $result;
    }

    public function post(){
        // 创建一个cURL资源
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, "https://mm.taobao.com/tstar/search/tstar_model.do?_input_charset=utf-8");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出

        //当请求https的数据时，会要求证书，这时候，加上下面这两个参数，规避ssl的证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    // https请求 不验证证书和hosts
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);


        //post方式
        $params =  "currentPage=2";
        curl_setopt($ch, CURLOPT_POST, 1);    // post 提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);



        // 抓取URL并把它传递给浏览器
        $result = curl_exec($ch);

        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);

        return $result;
    }



}


$s  = new http();
print_r($s->post());
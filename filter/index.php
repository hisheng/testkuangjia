<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/16
 * Time: 18:19
 */
//1
$var='100 ssss f';

$int_options = array(
    "options"=>array
    (
        "min_range"=>0,
        "max_range"=>256
    )
);

if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
{
    echo("Integer is not valid");
}
else
{
    echo("Integer is valid");
}

//2
$string = "<script>window.location.href='http://www.baidu.com'</script>";
echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');






if(!filter_has_var(INPUT_GET, "email"))
{
    echo("Input type does not exist");
}
else
{
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
    {
        echo "E-Mail is not valid";
    }
    else
    {
        echo "E-Mail is valid";
    }
}

$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email_a) email address is considered valid.";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email_b) email address is no valid.";
}



$int_a = '1';
$int_b = '-1';
$int_c = '4';
$options = array(
    'options' => array(
        'min_range' => 0,
        'max_range' => 3,
    )
);
if (filter_var($int_a, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "This (int_a) integer is considered valid (between 0 and 3).\n";
}
if (filter_var($int_b, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "This (int_b) integer is considered valid (between 0 and 3).\n";
}
if (filter_var($int_c, FILTER_VALIDATE_INT, $options) !== FALSE) {
    echo "This (int_c) integer is considered valid (between 0 and 3).\n";
}

$options['options']['default'] = 1;
if (($int_c = filter_var($int_c, FILTER_VALIDATE_INT, $options)) !== FALSE) {
    echo "This (int_c) integer is considered valid (between 0 and 3) and is $int_c.";
}





$urls = "http://www.W3非o法ol.com.c字符n/";
var_dump(filter_var($urls, FILTER_SANITIZE_URL , $options));
//-----看一下输出后的内容，其实已经被过滤了
//string 'http://www.W3ool.com.cn/' (length=24)
if (filter_var($urls, FILTER_SANITIZE_URL , $options) !== FALSE) {
    echo "urls.\n";
}

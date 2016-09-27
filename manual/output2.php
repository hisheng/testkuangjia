<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 10:26
 */
echo "Hello ";

$out1 = ob_get_contents();

echo "World";

$out2 = ob_get_contents();


var_dump(ob_get_status());



//ob_end_clean();



var_dump($out1,$out2);
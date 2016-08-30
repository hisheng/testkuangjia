<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/30
 * Time: 11:00
 */


//获取函数的参数
function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br />\n";
    }
}

foo (1, 2, 3);


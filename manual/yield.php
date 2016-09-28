<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/27
 * Time: 17:38
 */
//一个生成器函数看起来像一个普通的函数，不同的是普通函数返回一个值，而一个生成器可以yield生成许多它所需要的值。

function xrange($start, $limit, $step = 1){
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

foreach (xrange(1, 9, 2) as $number) {
    echo "$number ";
}

var_dump(xrange(1, 9, 2));


function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        //注意变量$i的值在不同的yield之间是保持传递的。
        yield add($i);
    }

    // 上面的写法相当于
    /*
     *  yield add(1);
     *  yield add(2);
     *  yield add(3);
     *
     * // 在下面调用的时候，每次返回一个 yield 值
     *
     *
     * */
}

$generator = gen_one_to_three();
var_dump($generator);

foreach ($generator as $value) {
    echo "{$value}<br/>";
}

function add($var){
    return $var+10;
}
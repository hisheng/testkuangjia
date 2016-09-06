<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/6
 * Time: 9:59
 */
function br(){
    echo '<br/>';
}


// 遍历整个 整数 for

$start = 3;
$end = 7;

for ($i = $start ; $i < $end ;$i += 2){
    printf("%d squared is %d <br/>",$i,$i*$i);
}

br();

// 同样的方法2
$numbers = range(3,7);
foreach($numbers as $in){
    printf("%d squared is %d <br/>",$in,$in*$in);
}

br();

// 方法3 yield 生成器

function squares($start,$stop){
    if($start < $stop){
        for($i = $start;$i <= $stop;$i++){
            yield $i => $i * $i;
        }
    } else {
        for($i = $start;$i >= $stop;$i--){
            yield $i => $i * $i;
        }
    }
}

foreach (squares(3,15) as $n => $square){
    printf("%d squared is %d <br/>",$n,$square);
}


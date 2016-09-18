<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 15:58
 */
//写入
 $sales = array(
     array('bei','2002-2-4','2002-2-4',12.54),
     array('nan','2002-2-4','2002-2-4',12.54),
     array('dong','2002-2-4','2002-2-4',12.54),
     array('xi','2002-2-4','2002-2-4',12.54)
 );

$filename = 'sales.csv';

$fh = fopen($filename,'w');

foreach ($sales as $sale) {
    if(fputcsv($fh,$sale) === false){
        die("can not");
    }
}

fclose($fh);

$fh2 = fopen('php://output','w');
foreach ($sales as $sale) {
    if(fputcsv($fh2,$sale) === false){
        die("can not");
    }
}

//读取

$fh3 = fopen($filename,'r');
$csv = fgetcsv($fh3);
var_dump($csv);



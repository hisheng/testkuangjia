<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/12/22
 * Time: 17:26
 * 桶排序
 */
srand(time());
$i = 1;
$nums = [];
do{
    $nums[] = rand(1,99);
    $i++;
}while($i <= 20);

var_dump($nums);

function bucket_sort($arr)
{
    //生成桶
    $bucket = array_pad([],100,0);
    $len = count($arr);
    for ($i = 0;$i<$len;$i++)
    {
        $bucket[$arr[$i]] ++;
    }
    $lenBucket = count($bucket);
    $sort = [];
    for ($i=0;$i<$lenBucket;$i++)
    {
        if($bucket[$i] > 0)
        {
            $j = 0;
            do{
                $sort[] = $i;
                $j++;
            }while($j < $bucket[$i]);
            
        }
    }
    
    return $sort;
    
}

$sortdNums = bucket_sort($nums);
var_dump($sortdNums);

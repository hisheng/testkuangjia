<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 16:29
 */


$array =array('1'=>'one', '2'=>'two', '3'=>'three');

$arrayobject = new ArrayObject($array);//构造一个ArrayObject对象
var_dump($arrayobject);

for($iterator= $arrayobject->getIterator();//构造一个迭代器
    //var_dump($iterator);
    $iterator->valid();//检查是否还含有元素
    $iterator->next()){ //指向下个元素
    var_dump($iterator);
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";//打印数组元素
}
  //重置数组指针
$arrayobject =new ArrayObject();
$arrayobject[] = 'zero';
$arrayobject[] = 'one';
$arrayobject[] = 'two';
$iterator= $arrayobject->getIterator();
$iterator->next();
echo $iterator->key(); // 1
$iterator->rewind(); //重置指针到头部
echo $iterator->key(); // 0
var_dump($iterator);



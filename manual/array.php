<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/22
 * Time: 15:55
 */
function explain($fuction){
    echo "<br/><br/><em>{$fuction} 示例:</em>";
}


var_dump(array());
var_dump(array('ss'));
var_dump(array('name'=>'hisheng'));

// array_change_key_case

var_dump(array_change_key_case(array('name'=>'hisheng'),CASE_UPPER));


//array_chunk
$a = ['s','sa','gg','tt'];
var_dump(array_chunk($a,2)); // 这个可以用来分页

// array_column
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'first_name','id');
var_dump($first_names);

//array_combine
$name = array('hisheng', 'xiaozheng', 'mei','hi');
$age = array('12', '33', '44','hi');
$people = array_combine($name, $age);
var_dump($people);


//array_count_values
explain('array_count_values');
$array = array(1, "hello", 1, "world", "hello");
var_dump(array_count_values($array));


//array_diff;
explain('array_diff 差集');
var_dump(array_diff($name,$age));


//array_diff_assoc
explain('array_diff_assoc 带索引检查计算数组的差集');
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
var_dump($result);

//array_diff_key
explain('array_diff_key  使用键名比较计算数组的差集');
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
var_dump(array_diff_key($array1, $array2));

//array_fill
var_dump(array_fill(0,5,'hisheng'));

//array_fill_keys
$keys = ['name1','n2','n3'];
var_dump(array_fill_keys($keys,'hisheng'));

//array_flip
var_dump(array_flip(array_fill_keys($keys,'hisheng')));

//array_intersect
var_dump(array_intersect($array1,$array2));


//array_intersect_assoc 带索引检查交集
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red",'gf'=>array('hi','hi2'),'d'=>'blue');
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
var_dump($result_array);


//array_intersect_key  用键名检查数组的交集 $array1 中 和 $array2 相交的集
var_dump(array_intersect_key($array1,$array2));

// 返回数组中所有的键名
var_dump(array_keys($array1));
var_dump(array_keys($array1,'blue'));
//S
echo 'ss';
var_dump(array_search('blue',$array1)); //array_search 没有 array_keys方便
var_dump(array_keys($array1,'hi')); //空


$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
var_dump(array_rand($input,1));
var_dump($input);





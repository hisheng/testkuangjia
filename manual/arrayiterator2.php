<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 16:59
 */
$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=huihua', $user, $pass);
    /*foreach($dbh->query('SELECT * from users') as $row) {
        var_dump($row);
    }*/
    $sth = $dbh->prepare("SELECT * FROM users");
    $sth->execute();

    /* 获取第一列所有值 */
    $results = $sth->fetchAll();
    //var_dump($results);

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$resultsObject = new ArrayObject($results);
//var_dump($resultsObject);


//现在开始遍历 $resultsObject  对象数组

// 方法一 先用 foreach 测试一下
foreach ($resultsObject as $resultObject) {
   // var_dump($resultObject);
}


//方法二 用迭代器有啥优势呢？？？？？ 迭代 对象数组
$iterator = $resultsObject->getIterator();

while($iterator->valid()){
    //var_dump($iterator->valid());
    //var_dump($iterator->count());
   // var_dump($iterator->current());
    //var_dump($iterator->key());
    //var_dump($iterator->getFlags());
    //var_dump($iterator->asort());

    $iterator->next();
}
//$iterator->ksort();
//var_dump($iterator->offsetGet(5));
var_dump($iterator);

//



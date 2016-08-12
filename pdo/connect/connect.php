<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/12
 * Time: 11:27
 */

define('BR','<br/>');

/*try {
    $dbh = new PDO('mysql:host=localhost;dbname=huihua', 'root', '');
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}*/


//持久化连接
$db = new PDO('mysql:host=localhost;dbname=huihua','root','',array(PDO::ATTR_PERSISTENT => true));
//sleep(1);
echo 's';

$name = '\'hisheng3\'';

$stmt = $db->prepare('SELECT nickname , name , touxiang from users  WHERE name = '.$name);
var_dump($stmt); // object(PDOStatement)

echo $stmt->queryString; // SELECT * from users

$result = $stmt->execute();
var_dump($result); // true

var_dump($stmt);// object(PDOStatement)


// 下面这四个渠道的 结果 数据库显示的数据，为什么都是一样的，有什么区别呢
//var_dump($stmt->fetchAll()); //array (size=17)
//var_dump($stmt->fetch()); // 取得了一栏 数组 有index
//var_dump($stmt->fetchColumn());// 3
//var_dump($stmt->fetchObject()); //object(stdClass)没有index更干净 和 fetch


//

//var_dump($stmt->columnCount()); //11 多少列，是 列，就是 多少个列的意思


/*  通过列号绑定  */
/*$stmt->bindColumn(1, $nickname);
$stmt->bindColumn(2, $name);

/*  通过列名绑定  */
/*$stmt->bindColumn('touxiang', $touxiang);*/

var_dump($stmt->fetchAll());

/*while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
    $data = $name . "\t" . $nickname . "\t" . $touxiang . "\n";
    print $data;
}*/



echo ' next'.BR;




$stmt2 = $db->prepare('SELECT nickname , name , touxiang from users WHERE name = :name');
var_dump($stmt2); // object(PDOStatement)

$stmt2->bindParam(':name', $name, PDO::PARAM_STR);

echo $stmt2->queryString; // SELECT * from users

$result2 = $stmt2->execute();


var_dump($stmt2->fetchAll());














$db = null;







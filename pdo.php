<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/27
 * Time: 16:53
 */

$user = 'root';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);

    foreach($dbh->query('SELECT * from t1')->fetchAll() as $row) {
        print_r($row);
    }

    $pdostatement = $dbh->query('SELECT * from t1');
    print_r($pdostatement);
    print_r($pdostatement->execute());
    echo '<br/>';
    print_r($pdostatement->fetchAll());


    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

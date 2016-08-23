<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/19
 * Time: 18:53
 */

require '../vendor/autoload.php';

$userid = $_GET['userid'];
$note = $_GET['note'];

use \JPush\Client as JPush;



if(empty($note)){
    $note = '您有一条消息';
}



echo $userid;
echo $userid;
exit;


$client = new JPush('ff1e98f29a1840eacd241bcb', '7f86f27389f9a042e8c0f7e1');



$pusher = $client->push();
$pusher->setPlatform('all');
$pusher->addAllAudience(array('alias'=>array(intval($userid))));
$pusher->setNotificationAlert($note);


try {
    $pusher->send();
} catch (\JPush\Exceptions\JPushException $e) {
    // try something else here
    print $e;
}

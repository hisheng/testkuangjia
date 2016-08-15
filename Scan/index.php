<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/15
 * Time: 11:59
 */

require '../vendor/autoload.php';

//1
use \GuzzleHttp\Client;
use \League\Csv\Reader;

//2
$client = new Client();

print_r($argv);
//3
$csv = Reader::createFromPath($argv[1]);



foreach ($csv->fetchAll() as $csvRow) {

    try {
        //4
        $httpRespone = $client->get($csvRow[0]);


        //5
        if ($httpRespone->getStatusCode() >= 400) {
            echo 'ss';
            throw new \Exception();
        }
    } catch (\Exception $e) {
        echo $csvRow[0].PHP_EOL;
    }
}

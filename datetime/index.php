<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/15
 * Time: 14:59
 */


// 今天 17点
$dt = new DateTime('17:00');


echo $dt->format('Y 年 m 月 d 日 H:i:s'); //2016 年 08 月 30 日 17:00:00
echo '<br/>';
echo $dt->format('U'); //1472547600

$dt2 = new DateTime('2016-05-12');

$s = $dt->diff($dt2);
var_dump($s);
/*
 * object(DateInterval)[3]
  public 'y' => int 0
  public 'm' => int 3
  public 'd' => int 18
  public 'h' => int 17
  public 'i' => int 0
  public 's' => int 0
  public 'weekday' => int 0
  public 'weekday_behavior' => int 0
  public 'first_last_day_of' => int 0
  public 'invert' => int 1
  public 'days' => int 110
  public 'special_type' => int 0
  public 'special_amount' => int 0
  public 'have_weekday_relative' => int 0
  public 'have_special_relative' => int 0
 *
 * */


$dt->add(new DateInterval('PT130S')); //增加 130秒
echo $dt->format('Y 年 m 月 d 日 H:i:s'); //2016 年 08 月 30 日 17:02:10
echo '<br/>';
$dt->modify('-1 month');
echo $dt->format('Y 年 m 月 d 日 H:i:s');//2016 年 07 月 30 日 17:02:10

echo '<br/> d3';
echo '<br/>';

$d3 = new DateTimeImmutable('17:00'); //不可变的时间，初始化后，就没法再变了
echo $d3->format('Y 年 m 月 d 日 H:i:s');//2016 年 08 月 30 日 17:00:00
$d3->modify('-1 month');
echo '<br/>';
echo $d3->format('Y 年 m 月 d 日 H:i:s'); //2016 年 08 月 30 日 17:00:00

//interface 界面接口
echo '<br/>';
echo $d3->getOffset(); //28800
echo '<br/>';
echo $d3->getTimestamp(); //1472547600
echo '<br/>';
$d3a = $d3->getTimezone();
var_dump($d3a);
/*
 * object(DateTimeZone)[5]
  public 'timezone_type' => int 3
  public 'timezone' => string 'Asia/ShangHai' (length=13)
*/

// 时间地区相关
$dz = new DateTimeZone($d3a->timezone);
var_dump($dz);
/*
 * object(DateTimeZone)[5]
  public 'timezone_type' => int 3
  public 'timezone' => string 'Asia/ShangHai' (length=13)
*/
var_dump($dz->getLocation());
/*
 * array (size=4)
  'country_code' => string 'CN' (length=2)
  'latitude' => float 31.23333
  'longitude' => float 121.46666
  'comments' => string 'east China - Beijing, Guangdong, Shanghai, etc.' (length=47)
*/
var_dump($dz->getName());//string 'Asia/ShangHai' (length=13)

//Period 时期  a period of time   //DatePeriod

$begin = new DateTime( '2012-08-01' );
$end = new DateTime( '2012-08-10' );
$end = $end->modify( '+1 day' );

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
    echo $date->format("Ymd") . "<br>";
}
/*
20120801
20120802
20120803
20120804
20120805
20120806
20120807
20120808
20120809
20120810
*/
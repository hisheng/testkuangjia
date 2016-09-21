<?php

  // 定义变量并设置为空值
    $nameErr = "";
    $username = $password =  "";
    $comArray=  $returnArray=array();
    // 查询用户是否存在
    if(is_array($_POST)&&count($_POST)>0)//先判断是否通过get传值了
    {
$username=$_POST["username"];
$password=$_POST["password"];


if (!$username || !$password) {

} else {
  // 连接数据库
include('conn.php');
$check_query = mysql_query("SELECT *FROM user where u_name='{$username}' and u_pwd='{$password}' ");
while ($line = mysql_fetch_assoc($check_query)) {
       $comArray[] = $line;
    }
    if (count($comArray)<=0) {
      $returnArray= array('rtcode'=>'1000','msg'=>'账号密码不正确');
      echo json_encode($returnArray);
}else {
  // session_start();
  // $_SESSION['username'] = $username;
  // $_SESSION['userid'] = $result['userid'];
  $returnArray= array('rtcode'=>'0000','msg'=>'登录成功');
  echo json_encode($returnArray);

}


}




    }
    ?>

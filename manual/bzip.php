<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 15:59
 */
//把下面的字符串 压缩 bzip2 编码数据
$str = "hisheng";
$bzstr = bzcompress($str, 9);
echo $bzstr;


//二进制安全地写入 bzip2 文件
$str = "uncompressed data";
$bz = bzopen("bzip2test.bz2", "w");
bzwrite($bz, $str, strlen($str));
bzclose($bz);


<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 15:29
 */

$za = new ZipArchive();

$za->open('zip.txt.zip');

var_dump($za);
echo "numFiles: " . $za->numFiles . "\n";
echo "status: " . $za->status  . "\n";
echo "statusSys: " . $za->statusSys . "\n";
echo "filename: " . $za->filename . "\n";
echo "comment: " . $za->comment . "\n";

for ($i=0; $i<$za->numFiles;$i++) {
    echo "index: $i\n";
    var_dump($za->statIndex($i));
}
echo "numFile:" . $za->numFiles . "\n";



//解压一个文件夹
$za->extractTo('testzip');


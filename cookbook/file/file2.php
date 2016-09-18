<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/13
 * Time: 11:37
 */



var_dump(fileatime('file.txt')); //文件的最后访问时间


var_dump(stat('file.txt')) ;//读取文件的元数据，例如权限和所有者
/*
 *  'dev' => int 3
  'ino' => int 0
  'mode' => int 33206
  'nlink' => int 1
  'uid' => int 0
  'gid' => int 0
  'rdev' => int 3
  'size' => int 45
  'atime' => int 1473735547
  'mtime' => int 1473736634
  'ctime' => int 1473735542
  'blksize' => int -1
  'blocks' => int -1*/


//下面是 linux目录大全，可以对应的学习一下，比如 stat，linux上也有
http://man.linuxde.net/par/1/page/3
<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/7/29
 * Time: 16:42
 */

//定义当前的目录绝对路径
define('DIR',dirname(__FILE__));
define('BR','<br/>');

echo '__LINE__'.__LINE__.BR;
echo '__FILE__'.__FILE__.BR;
echo '__DIR__'.__DIR__.BR;
echo '__FUNCTION__'.__FUNCTION__.BR;
echo '__CLASS__'.__CLASS__.BR;
echo '__TRAIT__'.__TRAIT__.BR;
echo '__METHOD__'.__METHOD__.BR;
echo '__NAMESPACE__'.__NAMESPACE__.BR;


//加载这个文件

require DIR . '/loading.php';

//采用 `命名空间` 的方式注册
//也必须的事 static 精通方法调用 然后就像加载namespace方  式调用

spl_autoload_register("\\Autoloading\\loading::autoload");

//调用三个namespace

//1 定位到 Lib 目录下的 Name.php
Lib\Name::test();

//2 定位到 App 目录下的 Android 目录下的 Name.php
App\Android\Name::test();

//定位到App目录下Ios目录下的Name.php
App\Ios\Name::test();

 



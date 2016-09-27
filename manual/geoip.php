<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/26
 * Time: 18:03
 */


// 需要安装 geoip扩展
print geoip_database_info(GEOIP_COUNTRY_EDITION);

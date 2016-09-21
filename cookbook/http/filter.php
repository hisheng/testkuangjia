<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/20
 * Time: 14:47
 */
$filter = array(
        'name'=>array('filter'=>FILTER_VALIDATE_REGEXP,'options'=>array('regexp'=>'/^[a-z]+$/i')),
        'age'=>array('filter'=>FILTER_VALIDATE_INT,'options'=>array('min_range'=>13))
    );

$clean = filter_input_array(INPUT_POST,$filter);
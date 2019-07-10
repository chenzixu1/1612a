<?php
/**
 * Created by PhpStorm.
 * User: zixuchen
 * Date: 2019/7/9
 * Time: 17:24
 */
function calSteps($n){
    if($n ==1) return 1;
    if($n ==2) return 2;
    return calSteps($n-1)+calSteps($n-2);
}
echo calSteps(10);
?>
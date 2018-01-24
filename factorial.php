<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 24.01.2018
 * Time: 18:41
 */
function factorial ($n){
    static $step = 0;
    $step ++;
    var_dump($step);
    if($n > 2) {
        return factorial($n - 1) * $n;
    }else{
        return $n;
    }
}
echo factorial(1);
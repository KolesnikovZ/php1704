<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 24.01.2018
 * Time: 19:27
 */
function fibonachi($n){
    static $number = 0;
    $number ++;
    var_dump($number);
    if($n >= 2){
        return fibonachi($n - 1) + ($n - 2);
    }else{
        return $n;
    }
}
fibonachi(8);
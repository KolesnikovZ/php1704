<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 24.01.2018
 * Time: 19:27
*/
function fibonachi($n){
    /**static $number = 0;
    $number ++;
    var_dump($number);
     */
    if($n < 2){
        return $n;
    }else{
        return fibonachi($n - 1) + fibonachi($n - 2);
    }
}
echo fibonachi(32);


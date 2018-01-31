<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 24.01.2018
 * Time: 21:18
 */
function primeNumber($n){
    static $number = 0;
    $number ++;
    var_dump($number);
    if(gmp_prob_prime($n) != 2){
        echo "Fals";
    }else{
        echo $n;
    }
}
echo primeNumber(23);
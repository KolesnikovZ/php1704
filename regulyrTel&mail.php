<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 08.02.2018
 * Time: 15:02
 */
$tel = '+38 093 9488814';
$pattern = '#^((\+38|38)[\- ]?)?\(?\d{3}\)?[\- ]?[\d\- ]{7,9}$#';
$count = preg_replace($pattern, $tel);
var_dump($tel);
var_dump($pattern);
var_dump($count);


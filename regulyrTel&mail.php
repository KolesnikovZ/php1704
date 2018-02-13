<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 08.02.2018
 * Time: 15:02
 */
$tel = '+38 093 9488814';
$pattern = '#^((\+38|38)[\- ]?)?\(?\d{3}\)?[\- ]?[\d\- ]{7,9}$#';
$count = preg_match($pattern, $tel);
var_dump($tel);
var_dump($pattern);
var_dump($count);

$mail = 'info@company.com.ua';
$pattern = '#^(([0-9A-Za-z]{1,}[\-\_\.0-9A-Za-z]{1,}[0-9A-Za-z])@(0-9A-Za-z\-]{1,}\.){1,2}[A-Za-z]{2,})$#';
$count = preg_match($pattern, $mail);
var_dump($mail);
var_dump($pattern);
var_dump($count);


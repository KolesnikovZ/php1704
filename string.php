<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 1/30/2018
 * Time: 7:28 PM
 */
$lang = $_GET['lang'] ?: 'en';
$texts = [
    'en' => 'Hi %1$s %2$s %3$s',
    'ru' => 'Привет, %3$s, %1$s, %2$s',
    'cz' => 'Czeck, %1$s, %3$s'
];
$user = 'Logan Lodan Ofar';
list($name, $sname, $lastname)
    = explode(' ', $user);

echo sprintf($texts[$lang], $name, $sname, $lastname);
echo "<br/>\n";

$langs = array_filter(array_keys($texts),
    function($item) use ($lang){
        return strcmp($item, $lang);
    });

echo "\" '";
echo '\' "';
?>
<ul class="langs">
    <?php
    foreach ($langs AS $l){
        echo "<li><a href='/?lang=$l'>$l</a></li>";
    }
    ?>
</ul>

<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 31.01.2018
 * Time: 17:06

function cmp($a, $b)
{
    return strcmp($a["parents"], $b["parent"]);
}
$items = [
    4 => ['parent'=>3, 'title'=>'third'],
    2 => ['parent'=>1, 'title'=>'first'],
    3 => ['parent'=>1, 'title'=>'second'],
];
usort($items, "cmp");
while (list($key, $value) = each($parents)) {
    echo "[$key]:" . $value["parent"] . "\n";
}
*/
$items = [
    4 => ['parent' => 3, 'title' => 'third'],
    2 => ['parent' => 1, 'title' => 'first'],
    3 => ['parent' => 1, 'title' => 'second']
];
$parents = [];
foreach ($items AS $id => &$item) {
    $parents[$item['parent']][] = $id;
}

function sorting($parents){
    return function ($a, $b) use ($key){
        return strnatcmp($a[$key], $b[$key]);
    };
}
usort($items, sorting($key));
foreach ($items as $item => &$key) {
    echo $item['$parent'] . '- ' .$item['$title'] ."\n";
}
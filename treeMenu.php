<?php
/**
 * Created by PhpStorm.
 * User: zhenia
 * Date: 25.01.2018
 * Time: 16:46
 */
$items = [
    2 => ['parent'=>1, 'title'=>'first'],
    3 => ['parent'=>1, 'title'=>'second'],
    4 => ['parent'=>3, 'title'=>'third']
];
$parents = [];
foreach ($items AS $id => &$item) {
    $parents[$item['parent']][] = $id;
}

function Menu($items, $parents, $parent = 1){
    $html = '';
    if($parents[$parent])
    {
        $html .= "<ui>\n";
        foreach ($parents[$parent] AS $id){
            $item = $items[$id];
            $html .= "<li><a>".$item['title']."</a>\n";
            $html .= Menu($items, $parents, $id);
            $html .= "</li>\n";
        }
        $html .= "</ul>\n";
    }
    return $html;
}
echo Menu($items, $parents, 1);


$items = array_filter($items, function($product) use ($period)
    {
    return time() - strtotime($product['added']) <= $period;
});


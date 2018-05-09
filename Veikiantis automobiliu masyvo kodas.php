<?php

$prekes = [
    'Sviestas',
    'duona',
    'desra',
    'desreles',
    'suris',
    'pienas',
];

$automobiliai = [
    [
        'id' => 23,
        'marke' => 'Audi',
        'model' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'id' => 54,
        'marke' => 'BMW',
        'model' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
];

$automobiliai1 = [
    [
        'id' => 24,
        'marke' => 'Renault',
        'model' => 'Espace',
        'kubatura' => 1598,
        'metai' => 2013,
    ],
    [
        'id' => 55,
        'marke' => 'Peugeot',
        'model' => '206',
        'kubatura' => 1300,
        'metai' => 2000,
    ],
];

echo '<pre>';
print_r($prekes);
print_r(array_chunk($prekes, 2));
$arrayColumn = array_column(
    $automobiliai,
    'model',
    'marke'
);
print_r($arrayColumn);
var_dump(array_key_exists(6, $prekes));
print_r(array_keys($arrayColumn));
print_r(array_merge($automobiliai, $automobiliai1));
array_pop($prekes);
print_r($prekes);
array_push($prekes, 'suris');
array_push($prekes, 'sausainiai');
array_push($prekes, ['suris', 'sausainiai']);
print_r($prekes);

print_r(array_search('suris',$prekes));
array_shift($prekes);
print_r($prekes);
$prekiuKainos = [5,4.3, 3,6,8,3];
print_r(array_sum($prekiuKainos));
$prekes1 = ['suris', 'desra', 'suris','duona','3', 3 ];
print_r(array_unique($prekes1));
print_r(array_values($automobiliai[0]));
print_r(count($prekes1));
var_dump(in_array('BMW',$automobiliai[0]));
$vaisiai =['obolys', 'kriause','vynuoge','braske'];
sort($vaisiai);
print_r($vaisiai);
print_r($automobiliai[1]['model']);

echo '</pre>';
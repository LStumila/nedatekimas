<?php
// Pirma uzduotis- VEIKIA
//pirmas skaicius nurodo masyva, antras kuris elementas masyve.
$masyvas =[
    [
    '1 kabinetas ',
    '2 kabinetas ',
    '3 kabinetas ',
    ],
    [
        '4 kabinetas ',
        '5 kabinetas ',
        '6 kabinetas ',
        ],
];

    echo '<pre>';
echo $masyvas[0][0];
echo '</pre>';
echo '<pre>';
echo $masyvas[0][1];
echo '</pre>';
echo '<pre>';
echo $masyvas[0][2];
echo '</pre>';
echo '<pre>';
echo $masyvas[1][0];
echo '</pre>';
echo '<pre>';
echo $masyvas[1][1];
echo '</pre>';
echo '<pre>';
echo $masyvas[1][2];
echo '</pre>';
// antra uzduotis -


$padalinys1=[
    [
    'vardas' => 'Petras' ,
    'pavarde' => 'Petraitis',
    'amzius' => '75',
        ],
    [

    'vardas' => 'Jonas' ,
    'pavarde' => 'Jonaitis',
    'amzius' => '64',
    ],



];
$padalinys2 = [
    [
        'vardas' => 'Ona' ,
        'pavarde' => 'Petraitiene',
        'amzius' => '22',
    ],
    [

        'vardas' => 'Zigmunda' ,
        'pavarde' => 'Jonaitiene',
        'amzius' => '26',
    ],

];
$pilnassarasas= array_merge($padalinys1,$padalinys2);

echo '<pre>';
print_r(array_chunk($pilnassarasas, 3));
echo '</pre>';
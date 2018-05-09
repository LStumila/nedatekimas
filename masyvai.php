<?php
$masyvas1 = [

    'isplauti indus',
    'isvalyti grindis',
    'isnesti siuksles',
    'pavedzioti suni',
    ];
$masyvas2 = [

   5 => 'isplauti indus',
   7 => 'isvalyti grindis',
  8 => 'isnesti siuksles',
    4=> 'pavedzioti suni',
];


 $masyvas3 =[
     'pavadinimas' => 'Automobiliai'
[
    'marke' => 'audi',
    'model' => 'bulka',
    'kubatura'=> '1995'
    'metai' => '2016',

],

[
    'marke'=> 'bmw',
    'model'=> 'slyva' ,
'kubatura' => 3 'd',
'metai'=> 1998,
],
    ];
// kazkodel neveikia tie automobiliai, kad juos kur galas. nu kur tau veiks kai audi ir bmw

echo "<pre>";
print_r($masyvas1);
print_r(array_column($masyvas2,));
var_dump(array_key_exists(6), $masyvas1) ;
echo "</pre>";
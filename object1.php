<?php

$data =(object)[
  'auto1'=> 'BMW',
  'auto2'=> 'Audi',
  'auto3'=> 'MB',


];
//objekto atvaizdavimas
$data1 = new stdClass();

$data1->auto1='BMW';
$data1->auto2='Audi';
$data1->auto3='MB';
echo '<pre>';
print_r($data);
print_r($data1);
echo '</pre>';




echo $data->auto1;
echo '<br>';
echo $data->auto2;
echo '<br>';
echo $data -> auto3;

// objekto ciklo sukimas
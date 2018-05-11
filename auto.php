<?php
$auto = [
[
'marke' => 'Audi',
'model' => 'A6',
'kubatura' => 1995,
'metai' => 2016,
],
[

'marke' => 'BMW',
'model' => 'M3',
'kubatura' => 2995,
'metai' => 2018,
],

[
'marke' => 'BMW',
'model' => '320',
'kubatura' => 1998,
'metai' => 2013,
    ],
];
autoList($auto);
    function autoList($autos)
    {
        echo '<ul>';
        foreach ($autos as $auto){
            echo '<li>'. $auto['marke']. ' '. $auto['model']. ' '.
                transformYeartoHuman($auto['metai']) .'</li>';
           }
        echo '</ul>';
    }
    //transformyeartohuman yra tiesiog lempinis funkcijos pavadinimas kuri gali pasirinkti koki tik sau nori,
function transformYeartoHuman($year)
{
    return $year . 'm.' ;
}
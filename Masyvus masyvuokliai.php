<?php
$prekes = [


    'sviestas',
    'duona',
    'desra',
    'suris',
    'pienas',

];
echo '<pre>';
print_r($prekes) ;
print_r(array_chunk($prekes,2));
echo '</pre>';
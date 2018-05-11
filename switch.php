<?php
$countries = [
    'indija',
    'kinija',
    'japonija',
];
foreach ($countries as $country) {
    // foreach suka ratu pasirinkta masyva kiekvienai reiksmei pritaiko funkcija
switch ($country) {
    case 'indija':
    echo 'Keliaujam paganyti karviu.<br>';
    break;
    case 'kinija':
    travelToChinia();
        break;
    default:
        echo'samsung <br>';
        break;

}
}
function travelToChinia()
{
    echo 'Valgysim daug ryziu.<br>';
}
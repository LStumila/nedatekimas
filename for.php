<ul>
    <li>klaipeda</li>
    <li>kaunas</li>
    <li>vilnius</li>
</ul>

<select name="miestas">
    <option value="54">Vilnius</option>
    <option value="36" selected="selected">Kaunas</option>
    <option value="12">Klaipeda</option>
</select>


<?php
$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];
for ($i = 0; $i < 5; $i++) {
    echo 'Labas <br>';
}
// Kiekis
$c = count($masyvas);
// <UL>
echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    echo '<li>' . $masyvas[$i] . '</li>';
}
echo '</ul>';
// SELECT
echo '<select name="kabinetai">';
for ($i = 0; $i < $c; $i++) {
    echo '<option value=' . $i . '>' . $masyvas[$i] . '</option>';
}
echo '</select>';
// Letters
for ($i = 'A'; $i != 'AD'; $i++) {
    echo $i . ' ';
}
$automobiliai = [
    0 => [
        'id' => 23,
        'marke' => 'Audi',
        'model' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    1 => [
        'id' => 54,
        'marke' => 'BMW',
        'model' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
];
$c = count($automobiliai);
echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    echo '<li>' . $automobiliai[$i]['marke'] . '</li>';
}
echo '</ul>';
$kabinetai = [
    0 => [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    1 => [
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];
$c = count($kabinetai);
echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    $k = count ($kabinetai[$i]);
    for ($j = 0; $j < $k; $j++) {
        echo '<li>'.$kabinetai[$i][$j].'</li>';
    }
}
echo '</ul>';
<?php
$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];
$i = 0;
echo '<ul>';
while ($i < count($masyvas)) {
    echo '<li>' . $masyvas[$i] . '</li>';
    $i++;
}
echo '</ul>';
$i = count($masyvas);
echo '<ul>';
while ($i > 0) {
    echo '<li>' . $masyvas[$i - 1] . '</li>';
    $i--;
}
echo '</ul>';
echo $i . '<br>';
unset($i);
echo $i . '<br>';
unset($masyvas[2], $masyvas[4]);
echo '<pre>';
print_r($masyvas);
echo '</pre>';
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
$i = 0;
echo '<ul>';
while ($i < count($kabinetai)) {
    $j = 0;
    while ($j < count($kabinetai[$i])) {
        echo '<li>' . $kabinetai[$i][$j] . '</li>';
        $j++;
    }
    $i++;
}
echo '</ul>';
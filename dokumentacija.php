<?php
/*
 * FOR
 */
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
for($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
for($col = 'A'; $col != 'AD'; $col++) {
    echo $col.' ';
}
/*
 * WHILE
 */
$arr = array("orange", "banana", "apple", "raspberry");
$i = 0;
while ($i < count($arr)) {
    $a = $arr[$i];
    echo $a ."\n";
    $i++;
}
/*
 * FOREACH
 */
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
unset($value);
foreach ($arr as $key => $value) {
    echo "{$key} => {$value} ";
    print_r($arr);
}
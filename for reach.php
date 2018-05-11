<table>
    <tr>
        <th>name</th>
        <th>lasname</th>
    </tr>
    <tr>
        <td>Petras</td>
        <td>Petraitis</td>
    </tr>
    <tr>
        <td>Jonas</td>
        <td>Jonaitis</td>
    </tr>
</table>

<?php
$kabinetai = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];
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
echo '<ul>';
foreach ($kabinetai as $value) {
//    echo '<li>' . $value . '</li>';
    echo sprintf('<li>%s</li>', $value);
}
echo '</ul>';
echo '<ul>';
foreach ($kabinetai as $key => $value) {
    echo '<li>' . $key . ' = ' . $value . '</li>';
}
echo '</ul>';
echo '<select name="kabinetai">';
foreach ($kabinetai as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
}
echo '</select>';
foreach ($kabinetai as $key => $value) {
    $kabinetai[$key] = $value . '!';
}
foreach ($kabinetai as &$value) {
    $value = $value . '!';
}
echo '<pre>';
print_r($kabinetai);
echo '</pre>';
echo '<table border="1">';
echo '<tr>
<th>ID</th>
<th>Marke</th>
<th>Modelis</th>
<th>Darbinis turis</th>
<th>Pagaminimo metai</th>
</tr>';
foreach ($automobiliai as $automobilis) {
    echo '<tr>';
//        echo '<td>' . $automobilis['id'] . '</td>';
//        echo '<td>' . $automobilis['marke'] . '</td>';
    foreach ($automobilis as $tekstas) {
        echo '<td>' . $tekstas . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
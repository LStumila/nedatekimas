<?php
$masyvas1 = [0, 4, 1, 2, 2, 65, 3, 3, 4, 2];
$masyvas2 = ['Jonas', 'Petras', 'Antanas',];
$masyvas3 = [
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
$masyvas4 = [
    [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'amzius' => 23,
    ],
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'amzius' => 24,
    ],
    [
        'vardas' => 'Tomas',
        'pavarde' => 'Pavardenis',
        'amzius' => 33,
    ],
    [
        'vardas' => 'Vardas',
        'pavarde' => 'Jonusas',
        'amzius' => 28,
    ],
];
$masyvas5 = [
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
        'kubatura' => 1999,
        'metai' => 2017
    ]
];
$masyvas6 = [
    [
        'bank' => 'swed',
        'payment_title' => 'Mokejimas uz prekes 1',
        'total' => 21.32,
    ],
    [
        'bank' => 'seb',
        'payment_title' => 'Mokejimas uz paslaugas',
        'total' => 32.52,
    ],
    [
        'bank' => 'dnb',
        'payment_title' => 'Mokejimas uz prekes 2',
        'total' => 12.84,
    ],
];
echo '<pre>';
echo $masyvas2 [1];
echo '</pre>';
echo '<pre>';
echo $masyvas1 [5];
echo '</pre>';
echo '<pre>';
echo $masyvas3[0][1];
echo '</pre>';
echo '<pre>';
echo $masyvas3[1][2];
echo '</pre>';

///uzduotys 5 paskaita
/// pirma uzduotis

echo '<pre>';
echo $masyvas2[0];
echo '</pre>';
echo '<pre>';
echo $masyvas2[1];
echo '</pre>';
echo '<pre>';
echo $masyvas2[2];
echo '</pre>';


//antra uzduotis-- (paciam nepaejo)


printMas($masyvas2);
function printMas($array)
{
    echo '<pre>';
    echo $array[0];
    echo '</pre>';
    echo '<pre>';
    echo $array[1];
    echo '</pre>';
    echo '<pre>';
    echo $array[2];
    echo '</pre>';

};


foreach ($masyvas2 as $array)
{

    echo $array . '<br>';

    };


paymentInfo($masyvas6);
function paymentInfo($payments)
{
foreach ($payments as $payment) {
if ($payment['bank'] == 'swed') {
echo $payment['payment_title'];
echo '<br>';
} elseif ($payment['bank']== 'seb')
{
printPaymentData($payment); }
else { echo 'Mokejimas siuo banku negalimas!'.'<br>';



}}}
function printPaymentData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' .
        $paymentData['total'] . '<br>';
}




{
    foreach ($payments as $payment){
        switch ($payment['bank']) {

            case 'swed' :
                echo 'Mokejimas uz prekes 1.<br>';
                break;
            case 'seb':
                echo printPaymentData($payment);
                break;
            default:
                echo 'Mokejimas negalimas.<br>';
                break;
        }}}
};
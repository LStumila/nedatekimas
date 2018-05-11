<?php


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
];
paymentInfo($masyvas6);
function paymentInfo($payments)
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
}
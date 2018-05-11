<?php
/**
 * Funkcija priima viena argumenta - masyva
 * padvigubina visu masyvo elementu reiksmes
 * ir grazina padvigubinta masyva kaip rezultata
 *
 * @param array $array
 * @return array
 */
function doubleIt($array)
{
    // ...
}
/**
 * Funkcija priima viena argumenta - masyva
 * ir isveda i ekrana pilnai sugeneruota lista
 * Pvz.:
 * <ul>
 *	<li>element</li>
 *	...
 *	<li>element 88</li>
 * </ul>
 *
 * @param array $array
 * @return void
 */
function printList($array)
{
    // ...
}
/**
 * Funkcija priima viena argumenta - masyva
 * ir grazina nauja masyva su 2 reiksmem - pirma ir paskutine
 * duoto masyvo reiksmes. Funkcija neisradineja savo algoritmu
 * ir tai padaro su array_shift ir array_pop
 *
 * @param array $array
 * @return array
 */
function firstAndLast($array)
{
    // ...
}
/**
 * Funkcija 10 kartu isveda i ekrana "Hello world" uzrasa (naujuose eilutese)
 *
 * @return void
 */
function helloWorldX10()
{
    // ...
}
/**
 * Funkcija priima 2 argumentus - masyvus, prijungia
 * visas $array2 reiksmes ir $array1 masyvo gala
 * ir grazina naujai sukonstruota masyva kaip rezultata
 *
 * @param array $array1
 * @param array $array2
 * @return array
 */
function arrayConcat($array1, $array2)
{
    // ...
}
/**
 * Funkcija priima viena paramentra - eilute
 * pakeicia visus tarpus i taskus ir grazina
 * naujai sukonstruota eilute
 *
 * @param string $string
 * @return string
 */
function space2dot($string)
{
    // ...
}
/**
 * Funkcija priima 1 argumenta - masyva eiuciu (string`u)
 * ir visuose eilutese pakeicia tarpus i tasku ir grazina
 * naujai sukonstruota masyva kaip rezultata
 *
 * @param array $array
 * @return array
 */
function transform($array)
{
    // ...
}
/*  -------------------------------------------------------------------- */
/*							PROGRAMOS KODAS                              */
helloWorldX10();
$arr = [8, 16, 32];
$arr = doubleIt($arr);
print_r($arr); // Expected result -> 0 => 16, 1 => 32, 2 => 64
echo "<br/>";
$a = ['element 1', 'element 2', 'element 3'];
printList($a);
$b = ['list element 3', 'list element 5', 'list element 6'];
$new = arrayConcat($a, $b);
printList($new);
printList(firstAndLast($new));
$transformed = transform($new);
printList($transformed);
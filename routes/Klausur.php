<?php
/**
 * Created by PhpStorm.
 * User: rindr
 * Date: 30.11.2017
 * Time: 17:32
 */

$number1 = 5;
$number2 = 4;

zusammen($number1, $number2);

function zusammen($zahl, $zahl2){
    global $number1;
    global $number2;

    $zahl = $number1 + $number2;
    return $zahl;
}
?>
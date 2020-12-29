<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) . '<br>';
echo ($a - $b) . '<br>';
echo ($a * $b) . '<br>';
echo ($a / $b) . '<br>';
echo ($a % $b) . '<br>';


// Assignment with math operators

$a += $b;
echo ($a) . '<br>';
$a *= $b;
$a -= $b;
echo ($a) . '<br>';
// Increment operator
echo (++$a) . '<br>';
echo ($a) . '<br>';


// Decrement operator

// Number checking functions
is_float(1.25); //true
is_double(5.33); //true
is_int(5); //true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion

$strNumber = '12.34';
$number = (float)$strNumber; //casting
var_dump($number);

echo ('<br>');
echo ('<br>');
// Number functions

echo "abs(-15) = " . abs(-15) . '<br>';
echo "pow(2, 3) = " . pow(2, 3) . '<br>';
echo "sqrt(36) = " . sqrt(36) . '<br>';
echo "max(2, 4, 8, 6) = " . max(2, 4, 8, 6) . '<br>';
echo "min(5, 3, 2, 6, 1) = " . min(5, 3, 2, 6, 1) . '<br>';
echo "round(2.3) = " . round(2.3) . '<br>';
echo "round(2.6) = " . round(2.6) . '<br>';
echo "floor(2.5) = " . floor(2.5) . '<br>';
echo "ceil(2.5) = " . ceil(2.5) . '<br>';

// Formatting numbers

echo ('<br>');
echo ('<br>');
echo ('Formatting numbers:') . '<br>';

$number = 122345465476556.234234;
//     value,  how many decimals, separator between the decimal, separator between the thousands
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php

<?php

// What is a variable
// The types of variables in PHP are: String, Integer, Float, Boolean, Null, Array, Object, Resource

// Variable types - dynamically typed: 
$name = 'Daniel';
$age = 34;
$isDope = true;
$height = 6.0;
$salary = null;




// Declare variables

// Print the variables. Explain what is concatenation

echo $name . '<br>';
echo $age . '<br>';
echo $isDope . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

echo '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isDope) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

echo '<br>';

// Print the whole variable
echo 'Print the whole variable' . '<br>';
echo var_dump($name) . '<br>';
echo var_dump($age) . '<br>';
echo var_dump($isDope) . '<br>';
echo var_dump($height) . '<br>';
echo var_dump($salary) . '<br>';

echo '<br>';
echo '<br>';

// Change the value of the variable
echo 'Change the value of the variable' . '<br>';


//change name into a boolean, even though it was a string
$name = false;

// Variable checking functions
echo is_string($name) . '<br>';
// is_int($age);
// is_bool($isDope);
// is_double($height);

// Check if variable is defined
echo '<br>';
echo '<br>';

isset($name);
isset($banana);

// Constants

define('PI', 3.14);
echo PI . '<br>';



// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';

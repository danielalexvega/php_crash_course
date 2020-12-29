<?php

// Create array
$fruits = ['apple', 'banana', 'grapes', 'orange'];
$veggies = array("Cucumber", "Lettuce");

// Print the whole array

var_dump($fruits);

echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[2] . '<br>';

// Set element by index

// Check if array has element at index 2

echo isset($fruits[2]); //true
echo isset($fruits[6]); //false

// Append element
$fruits[] = 'peach';

echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits) . '<br>';

// Add element at the end of the array

array_push($fruits, 'strawberry');

echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits);

echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, 'pineapple');

// Remove element from the beginning of the array

array_shift($fruits);

// Split the string into an array   like split in JavaScript
$string = "Banana, Apple, Peach";
echo $string . "<br>";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string  
echo implode("& ", $fruits) . '<br>';

// Check if element exist in the array



// Search element index in the array

array_search('Apple', $fruits);

// Merge two arrays
$vegetables = ['Potato', 'Spinach'];

echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';


// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits);  // reverse


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array - it's an object in JS
$person = [
  'name' => 'Daniel',
  'surname' => 'Vega',
  'age' => 34,
  'hobbies' => ['Basketball', 'Cooking', 'Coding']
];

echo '<br>';
echo '<br>';

echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['recordLabel'] = 'Full Court Press';

// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])){
//   $person['address'] = 'unknown';
// };

$person['address'] ??= 'unknown';

// Check if array has specific key



// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
// ksort($person); // this will sort by keys
// asort($person); // this will sort by values

// Two dimensional arrays

$todos = [
  ['title' => 'Todo title 1', 'completed' => true],
  ['title' => 'Todo title 2', 'completed' => false]
];

echo '<pre>';
var_dump($todos);
echo '</pre>';

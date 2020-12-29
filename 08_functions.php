<?php

// Function which prints "Hello I am Zura"
function hello()
{
  echo "Hello I am Daniel" . '<br>';
}

hello();

// Function with argument

function helloArg($name)
{
  return "Hello I am $name" . '<br>';
}

echo helloArg("Tim");

// Create sum of two functions

// function sum($a, $b)
// {
//   return $a + $b;
// }

// echo sum(4, 5) . '<br.';

// Create function to sum all numbers using ...$nums

// function sumArgs(...$nums)
// {
//   $sum = 0;
//   for ($i = 0; $i < count($nums); $i++) {
//     $sum = $sum + $nums[$i];
//   }
//   return $sum;
// }

// echo sumArgs(1, 2, 3, 4, 5, 6, 7) . '<br>'; //28

// Arrow functions

function sumArrow(...$nums)
{
  return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}

echo sumArrow(1, 2, 3, 4, 5, 6);

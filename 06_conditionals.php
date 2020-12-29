<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
  echo "1";
}

// Without circle braces
if ($age === 20) echo "2";

// Sample if-else
if ($age > 20) {
  echo "too old";
} else {
  echo "too young";
}

// Difference between == and ===
// just like JS
if ($age == 20) {
  echo "1";
}
if ($age == '20') {
  echo "1";
}

// if AND
if ($age > 20 && $salary === 300000) {
  echo "Do Something because of the AND";
}


// if OR

if ($age > 20 || $salary === 300000) {
  echo "Do Something because of the AND";
}

// Ternary if
echo $age < 22 ? 'Fresh out of school' : 'Too old';

// Short ternary

$age ?: 18;

// Null coalescing operator

$myName = isset($name) ? $name : "John";
$myName = $name ?? "John";

// switch
$userRole = 'admin'; //editor, user, admin

switch ($userRole) {
  case 'admin':
    echo 'admin';
    break;
  case 'editor':
    echo 'editor';
    break;
  case 'user':
    echo 'user';
    break;
  default:
    echo 'Invalid role';
}

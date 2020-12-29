<?php

// while


// Loop with $counter
$counter = 0;

// while($counter < 10) {
//   echo $counter . '<br>';
//   $counter++;
// }

// do - while
// do {
//   echo $counter.'<br>';
//   $counter++;
// } while ($counter < 0);


// for
for ($i = 0; $i < 10; $i++) {
  echo $i . '<br>';
}

// foreach

$fruits = ['Apple', 'Banana', 'Peach', 'Orange', 'Grape'];
// foreach ($fruits as $fruit) {
//   echo $fruit . '<br>';
// }
foreach ($fruits as $i => $fruit) {
  echo $i . ' - ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
  'name' => 'Daniel',
  'surname' => 'Vega',
  'age' => 34,
  'hobbies' => ['Basketball', 'Cooking', 'Coding']
];

echo '<br>';
echo '<br>';
echo '<br>';

foreach ($person as $key => $value) {
  if (is_array($value)) {
    echo $key . ' - ' . implode(", ", $value) . '<br>';
  } else {
    echo $key . ' - ' . $value . '<br>';
  }
}

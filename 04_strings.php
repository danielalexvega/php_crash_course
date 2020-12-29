<?php

// Create simple string
$string = 'Hello Daniel';
$string2 = "Hello Daniel";

// echo $string . '<br>';

// String concatenation

// String functions
// $string = "        Hello World          ";

// echo "1 - " . strlen($string) . '<br>';
// echo "2 - " . trim($string) . '<br>';
// echo "3 - " . ltrim($string) . '<br>';
// echo "4 - " . rtrim($string) . '<br>';
// echo "5 - " . str_word_count($string) . '<br>';
// echo "6 - " . strrev($string) . '<br>';
// echo "7 - " . strtoupper($string) . '<br>';
// echo "8 - " . strtolower($string) . '<br>';
// echo "9 - " . ucfirst('hello') . '<br>';
// echo "10 - " . lcfirst('HELLO') . '<br>';
// echo "11 - " . ucwords('hello world') . '<br>';
// echo "12 - " . strpos($string, 'world') . '<br>';
// echo "13 - " . stripos($string, 'world') . '<br>';
// echo "14 - " . substr($string, 8) . '<br>';
// echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
// echo "15 - " . str_ireplace("world", 'PHP', $string) . '<br>';




// Multiline text and line breaks
$longText = "
  Hello, my name is Daniel
  I am 34,
  I love tacos.
";
//nl2br is a function that adds the new lines
echo nl2br($longText);

$nextText = "
  Hello, my name is <b>Daniel</b>
  I am <b>34</b>
  I love sandwiches.
";

echo "1 - " . $nextText . '<br>' . '<br>';
echo "2 - " . nl2br($nextText) . '<br>' . '<br>';
echo "3 - " . htmlentities($nextText) . '<br>' . '<br>';
echo "4 - " . nl2br(htmlentities($nextText)) . '<br>' . '<br>';



// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php
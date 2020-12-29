<?php

// Print current date
date_default_timezone_set("America/Chicago");
echo date('Y-m-d h:i:s') . '<br>';

// Print yesterday
echo date('Y-m-d h:i:s', time() - 60 * 60 * 24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php

echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp

echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parsedDate = date_parse('2020-10-12 09:00:00');

echo ('<pre>');
var_dump($parsedDate);
echo ('</pre>');

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

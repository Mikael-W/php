<?php

// Print current date
echo date('Y-m-d H:i:s'). '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time()- 60*60*24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php

echo date ('F j Y, H:i:s'). '<br>';
// Print current timestamp

echo time().'<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parsedDate = date_parse('2021-06-30 09:00:00');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'June 30 2021 16:30:00';

$parseDate = date_parse_from_format('F y j H:i:s', $dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
<?php

// Create simple string

$name = 'Mika';
$string = 'Hello I am '.$name.' I am 35';
$string2 = "Hello Iam $name I am 35";
echo $string. '<br>';
echo $string2. '<br>';

// String concatenation

echo 'Hello'.' World'.' and PHP'.'<br>';

// String functions

$string = "    Hello World     ";

echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world and php') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>';// take car of lower or upper case
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . str_replace('world', 'PHP', $string) . '<br>'; // take car of lower or upper case
echo "16 - " . str_ireplace('World', 'PHP', $string) . '<br>';

// Multiline text and line breaks

$longText = "
    Hello, my name is Mika,
    I am 35,
    I love my childs
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';
// Multiline text and reserve html tags

$longText = "
    Hello, my name is <b>Mika</b>,
    I am <b>35</b>,
    I love my childs
";
echo "1 - " .$longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "3 - " . nl2br(htmlentities($longText)) . '<br>';
echo html_entity_decode('&lt;b&gt;Mika&lt;/b&gt');

// https://www.php.net/manual/en/ref.strings.php
<?php

// Create array

$fruits = ["Banana", "Apple", "Orange"];
$oldVersion= array();

// Print the whole array

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1] . '<br>';

// Set element by index

$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

isset($fruits[2]); //true
isset($fruits[3]); //false

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits). '<br>';

// Add element at the end of the array

array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Add element at the beginning of the array

array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

echo array_shift($fruits);

// Split the string into an array

$string = "Banana, Apple, Peach";
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';

// Combine array elements into string

echo implode(" & ", $fruits);

// Check if element exist in the array

echo '<pre>';
var_dump(in_array("Mango",$fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Apple",$fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
// PHP 8 update => var_dump([...$fruits, ...$vegetables]);
echo '</pre>';
 

// Sorting of array (Reverse order also)

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person= [
    'name' => 'Mika',
    'surname' => 'Arry',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video games']   
];
echo '<pre>';
var_dump($person);
echo '</pre>';
echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key

echo $person['name']. '<br>';

// Set element by key
$person['website'] = "www.mikaelW.com";
echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

if (!isset($person['addresse'])){
    $person['adresse'] = "unknown";
}
//$person['adresse'] ??= "unkown";
echo '<pre>';
print_r($person);
echo '</pre>';

// Check if array has specific key

echo '<pre>';
print_r(array_keys($person));
echo '</pre>';

// Print the keys of the array

echo '<pre>';
print_r(array_values($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
print_r(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

// by index

asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// by keys

Ksort($person);
echo '<pre>';
print_r($person);
echo '</pre>';



// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed', true],
    ['title' => 'Todo title 2', 'completed', false]
];
echo '<pre>';
var_dump($todos);
echo '</pre>';
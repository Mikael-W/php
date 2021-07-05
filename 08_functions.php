<?php

// Function which prints "Hello I am Zura"
//function hello(){
//    echo "Hello i am Mika";
//};
//hello();

// Function with argument
function hello($name){
    return "Hello i am $name";
};
echo hello('Mika').'<br>';

// Create sum of two functions

function sum($a, $b){
    return $a + $b;
}
echo sum(4, 5);

// Create function to sum all numbers using ...$nums

//function bigSum(...$nums){
//    $sum = 0;
//    foreach ($nums as $num){
//         $sum += $num;
//    }
//    return $sum;
//}
//echo bigSum(1, 2, 3, 4, 5, 6);

// Arrow functions

//function bigSum(...$nums){
//   return array_reduce($nums, fn($carry, $num)=> $carry + $num);
//}
//echo bigSum(1, 2, 3, 4, 5, 6);


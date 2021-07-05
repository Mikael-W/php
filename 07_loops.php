<?php

// while
//while(true){
//    "do something"
//}

// Loop with $counter

//$counter = 0;
//while ($counter <10){
//    echo $counter. '<br>';
//    if($counter === 5){
//        break;
//    }
//    $counter++;
//}

// do - while
//do{
//    echo $counter. '<br>'; 
//    $counter++;
//} while ($counter < 0);

// for
for($i = 0; $i <10; $i++){
    echo $i. '<br>';
}

// foreach
$fruits= ["Banana", "Apple", "Orange"];

foreach ($fruits as $i => $fruit){
    echo $i. ' ' .$fruit. '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Mika',
    'surname' => 'Arry',
    'age' => 35,
    'hobbies' => ['Tennis', 'Video games']
];
foreach ($person as $key => $value){
    if(is_array($value)){
    echo $key. ' '. implode(",",$value). '<br>';
}else{
    echo $key. ' '. $value. '<br>';
}
}
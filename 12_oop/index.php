<?php

require_once "Person.php";
require_once "Student.php";

$student = new Student('Mika', 'Arry', '12345');

echo '<pre>';
var_dump($student);
echo '<pre>';

//$p = new Person('Mika', 'Arry');
//$p->setAge(30);
//$p2 = new Person('Lucile', 'Lulu');
//$p3 = new Person('Solal', 'Soso' ); 
//$p4 = new Person('Rajah', 'Sanka' ); 
//
//echo '<pre>';
//var_dump($p);
//echo '<pre>';
//
//echo $p->getAge();
//
//echo '<pre>';
//var_dump($p2);
//echo '<pre>';
//
//echo '<pre>';
//var_dump($p3);
//echo '<pre>';
//
//echo Person::getCounter();
//



// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
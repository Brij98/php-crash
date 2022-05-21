<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

$nl = "<br />\n";

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
echo $nl;  // creating new line
var_dump($numbers);
echo $nl;  // creating new line

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1];

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
echo $nl;  // creating new line
echo $hex['red'];
echo $nl;  // creating new line
var_dump($hex);
echo $nl;  // creating new line

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

echo $nl;  // creating new line
var_dump($people);
echo $nl;  // creating new line

// Accessing values in a multi-dimensional array
echo $nl;  // creating new line
echo $people[0]['first_name'];
echo $nl;  // creating new line
echo $people[2]['email'];
echo $nl;  // creating new line

// Encode to JSON
echo $nl;  // creating new line
var_dump(json_encode($people));
echo $nl;  // creating new line

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
echo $nl;  // creating new line
var_dump(json_decode($jsonobj));
echo $nl;  // creating new line


$test_array = array();

echo $nl;
var_dump($test_array);


$test_array[10] = "2.0";
$test_array[] = "str";
echo $nl;
var_dump($test_array);


?>
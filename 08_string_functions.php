<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
$nl = "<br />\n";
$string = 'Hello World';

// Get the length of a string
echo strlen($string);
echo $nl;  // creating new line

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo $nl;  // creating new line

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo $nl;  // creating new line

// Reverse a string
echo strrev($string);
echo $nl;  // creating new line

// Convert all characters to lowercase
echo strtolower($string);
echo $nl;  // creating new line

// Convert all characters to uppercase
echo strtoupper($string);
echo $nl;  // creating new line

// Uppercase the first character of each word
echo ucwords($string);
echo $nl;  // creating new line

// String replace
echo str_replace('World', 'Everyone', $string);
echo $nl;  // creating new line

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo $nl;  // creating new line
echo substr($string, 5);
echo $nl;  // creating new line

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
  echo $nl;  // creating new line
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
  echo $nl;  // creating new line
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
echo $nl;  // creating new line

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
echo $nl;  // creating new line
printf('1 + 1 = %f', 1 + 1); // float
echo $nl;  // creating new line

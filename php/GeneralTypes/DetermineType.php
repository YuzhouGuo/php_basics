<?php

// what happens when we actually need to know what kind of value we have?
// build-in functions!

define('CHECK_CONSTANT', "Yes, I am a constant");

$intVar = 1234;
$stringVar = "I'm a String";
$boolVar = false;
$floatVar = 12.34;

is_int($intVar); 
// this built-in function is gonna return us a value
// 1 --> success
// nothing --> false
// we can use this inside a if statement, or print it out directly

echo is_int($intVar); 
//echo is_int($floatVar); 
echo is_string($stringVar);

echo defined('CHECK_CONSTANT'); 
// so this constant has been defined, or it will return nothing
<?php

$bool = true; // no quotation mark around it
$bool = false;

var_dump($bool);

// you can actually convert any value to a boolean

$hasValue = 123;

var_dump($hasValue);
var_dump((bool)$hasValue); //prints true because this is not an empty value

$hasValue = ""; // now change it to an empty string
var_dump((bool)$hasValue);

// same goes to an empty array, or a value of zero

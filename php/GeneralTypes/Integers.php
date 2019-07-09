<?php

$regInt = -1234;
$octNum = 01234;
$hexNum = 0xABC;
$binaryNum = 0b1000;

//echo $regInt;

// in order to print this out so we can see the value of our variable
// and the type of variable it is, we are gonna use a built-in PHP function

var_dump($regInt);
var_dump($octNum);
var_dump($hexNum);
var_dump($binaryNum);

// PHP does not support unsigned integers, PHP automatically convert it to a float

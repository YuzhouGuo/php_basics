<?php

var_dump(8 == "8");
var_dump(8 === "8"); // identical comparison operator

// not equal --> <>

var_dump(7 <> "7");
var_dump(7 != "7"); // no difference

// !== not identical operator, check the value as well as the type
var_dump(7 !== "7");

var_dump(7 > 7);
var_dump(7 >= 7);

//spaceship! -- -1, 0, 1
// echo 1 <=> 1; 
// three alltogether -- zero meaning they are equal to each other
// echo 1 <=> 2  -- -1, meaning one is less than 2s


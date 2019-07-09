<?php

// takes a string and convert it to an array

$quote = "It is a melancholy truth that even great men have their poor relations.";

//$varArray = str_split($quote);

// to print out an array in php, we need to use a specific function

//print_r($varArray);

// sometimes we want to split a chunk of characters
$varArray = str_split($quote, 8);
print_r($varArray);
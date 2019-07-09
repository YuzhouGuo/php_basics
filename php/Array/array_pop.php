<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

//the array_pop method removes the very last element of the array as default
$lastValue = array_pop($authors);
echo $lastValue;

print_r($authors);

// and we use unset() to specify the element we wanna remove
<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

echo array_push($authors, "Louisa May Alcott")."\n";
//return the number of elements in the array (after pushing)
//array_push only add indexed values
//so for associative arrays, the value you pushed in will be assigned to the next integer

$authors[] = "Montgomery";
$authors['nice'] = "Montgomery";

print_r($authors);

// [] is preferred. In case the array has not been declared, an error will be thrown


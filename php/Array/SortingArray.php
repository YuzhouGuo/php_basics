<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "poetic" => "William Shakespeare",
    "brilliant" => "Jane Austin"
);

//sort($authors); // you can also use flags as the second parameter

asort($authors); // the keys are reserved
print_r($authors);

//sort($authorsAssociative);
//asort($authorsAssociative);
ksort($authorsAssociative);     //now sorted by its key value
print_r($authorsAssociative);
// notice that the associative array will be reorganized to an indexed array
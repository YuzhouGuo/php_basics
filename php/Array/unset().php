<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

// the unset() method is not only for arrays, but any variable type
// kick out the specified VALUE
// the pair will be removed, and the other pairs remain the same

unset($authors[1], $authors[0]);
print_r($authors);

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

//unset($authors);
// like this array has never been created
unset($authorsAssociative["poetic"]);
print_r($authors); 
print_r($authorsAssociative);
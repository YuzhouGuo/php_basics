<?php

// indexed
$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

//associated
$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

echo $authors[1];
echo $authorsAssociative["quarky"]; // but sometimes we're not sure if the key exists

echo array_key_exists(5, $authors)."\n";
//nothing printed, meaning returns false
echo array_key_exists(2, $authors)."\n";
echo array_key_exists("poetic", $authorsAssociative);

//now we know how to check keys, how about values?
<?php

// every time you change the key of the array, you have turned the index array into an associative array

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

print_r($authors);

$authors = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain" // notice that the key assigned to this value is 11
    // automatically increased by one from the last integer assigned
);

print_r($authors);
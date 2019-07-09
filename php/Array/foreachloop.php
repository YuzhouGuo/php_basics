<?php

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "poetic" => "William Shakespeare",
    "brilliant" => "Jane Austin"
);

foreach($authorsAssociative as $var)
{
    echo $var."\n"; //each of the value has been printed out
}

foreach($authorsAssociative as $key => $var)
{
    echo "the key is ".$key." and the value is ".$var."\n"; //each of the value has been printed out
}
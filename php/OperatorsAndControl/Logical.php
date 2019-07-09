<?php

// $var1 = (7 > 6);
// $var2 = (8 == 8);

$var1 = true;
$var2 = false;

var_dump($var1);
var_dump($var2);

var_dump($var1 and $var2);
// or 
var_dump($var1 && $var2);

var_dump($var1 or $var2);
var_dump($var1 || $var2);

var_dump(!$var1);
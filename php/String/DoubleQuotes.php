<?php

$currency = "penny";

$sampleString = "A $currency saved is a $currency earned. \n";

echo $sampleString;

$var = 2;
echo "{$var}nd place \n";  // not work with the single quote string
echo $var."nd place \n";     
// concat the variable with the string, work with the dingle quote

// Everything will be evaluated within the double quotes
// Remember that we use the period in PHP!

$misc = "St. Patrick's Day \n";
echo $misc;

// Even though single quote is not an issue within double quotes
// Double quotes itself is an issue... 

$misc = "St. Patrick\"s Day";
echo $misc;

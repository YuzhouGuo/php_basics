<?php

function booksByAuthorYear ($tempAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

$year = 1920;
$authorName = "William Shakespeare";

booksByAuthorYear($authorName, $year);
booksByAuthorYear($authorName);
// notice that there's no warning, 
// this is because we have a default setting for the second parameter

// ALL default parameters need to be at the end of the function declaration
// ALL required parameters need to be at the beginning of the function declaration
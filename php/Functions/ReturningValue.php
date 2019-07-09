<?php

function booksByAuthorYear ($tempAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

function getAuthor()
{
    return "Charles Dickens";
}
// since it is returning a value, we need to store that value somewhere

$year = 1920;
//$authorName = "William Shakespeare";
$authorName = getAuthor();

booksByAuthorYear($authorName, $year);
booksByAuthorYear($authorName);


<?php

function bookByAuthor ($authorName, $year)
{
    echo $year;
    echo "\n";
    echo $authorName;
}

bookByAuthor("William Shakespeare \n", 1910);

$v1 = "me";
bookByAuthor($v1, 2019);
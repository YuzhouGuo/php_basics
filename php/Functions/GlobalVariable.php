<?php

$authorName = "William Shakespeare";

function setAuthorName()
{
    global $authorName; // need to use the word "global" inside the function
    $authorName = "Charles Dickens";
    // notice that we have two variables having the same name
    // local variable here
}

setAuthorName();
echo $authorName;

// the same goes to global classes

?>


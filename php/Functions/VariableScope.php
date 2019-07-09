<?php

$authorName = "William Shakespeare";

function setAuthorName()
{
    $authorName = "Charles Dickens";
    // notice that we have two variables having the same name
    // local variable here
}

setAuthorName();
echo $authorName;

?>
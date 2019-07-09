<?php

$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare", 
    "Mark Twain", 
    "Louisa May Alcott",
    "13"
);

//echo in_array("Jane Austin", $authors);
echo in_array(13, $authors, true); 
//saying not only the value, but the type has to be the same
// if not, then "13" count the same as the integer 13
<?php

$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Alcott"];
$count = count($authors);

if($count == 1)
{
    echo "There's one author";
}
elseif($count >= 2 ){
    echo "There is a total of ".$count." authors";
}
else 
{
    echo "There are no authors";
}

// if($count == 1) :
//     echo "There's one author";
// elseif($count >= 2 ) :
//     echo "There is a total of ".$count." authors";
// else :
//     echo "There are no authors";
// endif;

switch($count) 
{ //spaceship works perfectly for this!
    case 0: 
        echo "There's no author".PHP_EOL;
        break;
    case 1:
        echo "There's only one author".PHP_EOL;
        break;
    default:
        echo "There is a total of ".$count." authors".PHP_EOL;
        break; //anyway
}

//Ternary operator
$outcome = ($count > 0) ? "Author total: ".$count : "No authors";
echo $outcome;

// $outcome = $count ?? "count unavailable";
// $outcome = $count ?? $anotherVariable ?? "count unavailable";
// echo $outcome;
// asking whether variable "count" has been set or not 
// is this set? then our next one? then ... 
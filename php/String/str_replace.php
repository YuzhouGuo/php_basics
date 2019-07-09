<?php

$quote = "To be or not to be, this is the question.";

$replaced = str_replace("be", "know", $quote, $count);
// the word you wanna replace, the candidate, and the string itself
// count --> passed by reference, we don't need to declare it in advance
// how many times the word has been replaced

//echo $replaced;
echo $count;
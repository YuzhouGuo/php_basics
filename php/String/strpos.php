<?php

$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

echo strpos($quote, "fear"); // the word appears, where "f" starts
echo strpos($quote, "fear", 26); // we will start finding at position 26

echo strpos($quote, "c"); // string position is case sensitive!
echo strpos($quote, "C");

echo strpos($quote, "z"); // the result will be an empty string
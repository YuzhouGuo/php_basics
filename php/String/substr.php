<?php

$quote = "Only those who will risk going too far can possibly find out how far one can go.";

echo substr($quote, 4)."\n";
//1. the string value you are gonna create a substring from
//2. start location (where the sub to start)
// zero if you wanna the entire string

// negative? -- 4 letters from the end!

echo substr($quote, 3, 5)."\n";
echo substr($quote, 3, -5);
// and we ends five letters from the end
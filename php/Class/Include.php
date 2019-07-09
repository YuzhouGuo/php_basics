<?php

include 'Person.php';
include_once 'Author.php'; //single or double quote
// in case there's error, ideal with files containing classes and functions

// can also include from another directory, subfolder, or HTTP address

// -----  require 'randomFile.php' -----
// if the file is not found, the scirpt will be terminated with "Fatal error"
// for "include" case, the scirpt will be continue runnings

$newAuthor = new Author("Johnathan", "Cool", 1899);
echo $newAuthor->getCompleteName();


<?php

//Actaully an instance of this class

class Person
{
    // we can use some evaluations here, but not from "yearBorn" or something like that
    // only accessable through this Person class
    const AVG_LIFE_SPAN = 79;
    // public properties can be accessed outside of this class through object variable
    // can be accessed by other classes
    public $firstName = "Jonathan";
    public $lastName = "Cool";
    public $yearBorn = 1899;

    // the default value cannot be acted upon
}

$myObject = new Person();

echo $myObject->firstName."\n";

$myObject->firstName = "Jona";

echo $myObject->firstName."\n";

//echo $myObject::AVG_LIFE_SPAN;
echo Person::AVG_LIFE_SPAN;
// this is called "scope resolution operator"
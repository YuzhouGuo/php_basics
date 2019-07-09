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

    // when we create a function inside a class, we call it method
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
    // default as public, but just for uniformaty
}

$myObject = new Person();
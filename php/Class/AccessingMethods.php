<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName;
    public $lastName;
    public $yearBorn;

    // the contrcutor is really just a default method
    function __construct()
    {
        //echo "I'm the constrcutor";
        $this->firstName = "Jonathan";
        $lastName = "Cool";
        $yearBorn = 1899;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person();

// $myObject->setFirstName("Sam");

// echo $myObject->firstName."\n";
// echo $myObject->getFirstName();
echo $myObject->firstName;
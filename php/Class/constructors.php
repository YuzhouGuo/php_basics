<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName;
    public $lastName;
    public $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        //in case there's an error --> set default value
        $this->firstName = $tempFirst;
        $lastName = $tempLast;
        $yearBorn = $tempYear;
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

$myObject = new Person("Johnathan", "Cool", 1899);
echo $myObject->getFirstName();
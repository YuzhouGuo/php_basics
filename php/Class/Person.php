<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        echo "Person Constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear; 
    }

    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }

    protected function getFullName()
    {
        echo "Person->getFullName".PHP_EOL; 
        return $this->firstName." ".$this->lastName;
    }
}
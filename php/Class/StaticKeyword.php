<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        //in case there's an error --> set default value
        echo "Person Constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear; //have to use keyword this here
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
        echo "Person->getFullName".PHP_EOL; // this is just \n
        return $this->firstName." ".$this->lastName;
    }
}

class Author extends Person 
{
    public static $centuryPopular = "19th";  //must be assigned some value
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
        // protected: called in the family
    }

    public static function getCenturyAuthorWasPopular()
    {
        // they must be self-contained, can't reply on other non-static properties/methods

        // use "self" to access static properties inside a class 
        // use "parent" to access static properties from an inherited class
        return self::$centuryPopular;
    }
}

echo Author::$centuryPopular;
echo Author::getCenturyAuthorWasPopular();
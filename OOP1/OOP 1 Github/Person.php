<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function setPerson($postFirstName)
    {
        $this->firstName = ucfirst($postFirstName);
    }

    public function getlastName()
    {
        return ucfirst($this->lastName);
    }
}

$piet = new Person();
$piet->firstName = "Piet";
$piet->lastName = "berkhout";
$piet->age = 66;

// echo "de voornaam = " .$piet->firstName;
// $piet->firstName = "pete";
// echo "de voornaam =" .$piet->firstName;

echo $piet->getlastName();
echo $piet->lastName;
echo "<pre>";
var_dump($piet);

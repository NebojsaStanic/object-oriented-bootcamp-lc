<?php

class PersonTest
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('PersonTest to young');
        }

        $this->age = $age;
    }
}

$john = new PersonTest('John Doe');

$john->setAge(30);


var_dump($john->getAge());
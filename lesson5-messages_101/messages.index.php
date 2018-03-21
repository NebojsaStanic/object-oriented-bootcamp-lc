<?php

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

class Business {

    protected $staff;

    public function __construct($staff = [])
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaff()
    {
        return $this->staff->getMembers();
    }

}

class Staff {

    protected $members;

    public function __construct($members)
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
    }

}

$jefrey = new Person('Jefrey Way');

$staff = new Staff([$jefrey]);

$laracast = new Business($staff);

$laracast->hire(new Person('Jane Doe'));

var_dump($laracast->getStaff());




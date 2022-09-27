<?php

namespace Structural\Proxy;

class Proxy implements PersonInterface
{
    private $person;
    private string $name;
    private string $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        $this->makePerson();
        return $this->person->getName();
    }

    public function getAge(): string
    {
        $this->makePerson();
        return $this->age;
    }

    public function makePerson(): Person
    {
        if ($this->person == null) {
            $this->person = new Person($this->name, $this->age);
        }

        return $this->person;
    }
}

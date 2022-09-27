<?php

namespace Structural\Flyweight;

class FlyweightSoldiers
{
    private array $soldiers;

    public function getSoldier(int $key)
    {
        if (empty($this->soldiers[$key])) {
            $this->soldiers[$key] = $this->makeSoldier();
        }

        return $this->soldiers[$key];
    }

    public function makeSoldier(): Soldier
    {
        $names = [
            'Matheus S. Jose',
            'Ze bob'
        ];

        $name = array_rand($names, 1);
        $name = $names[$name];

        $ages = [
            24,
            30
        ];

        $age = array_rand($ages, 1);
        $age = $ages[$age];

        return new Soldier($name, $age);
    }
}

<?php

namespace Creation\Builder\Rocket;

use PHPUnit\Framework\TestCase;

class RocketModelITest extends TestCase
{
    public function testRocketModelIShouldBeInstanceOfRocketProductWhenBuildFuelTankIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildFuelTank());
    }

    public function testRocketModelIShouldBeReturnWithCorrectValuesWhenGetFuelTankIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertEquals(1000, $rocketProduct->buildFuelTank()->getFuelTank());
    }

    public function testRocketModelIShouldBeInstanceOfRocketProductWhenBuildModelIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildModel());
    }

    public function testRocketModelIShouldBeReturnWithCorrectValuesWhenGetModelIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertEquals('Foguete de Modelo I', $rocketProduct->buildModel()->getModel());
    }

    public function testRocketModelIShouldBeInstanceOfRocketProductWhenBuildEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildEngineNumbers());
    }

    public function testRocketEngineNumbersIShouldBeReturnWithCorrectValuesWhenGetEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertEquals(3, $rocketProduct->buildEngineNumbers()->getEngineNumbers());
    }

    public function testRocketModelIShouldBeInstanceOfRocketProductWhenBuildPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildPlacesNumbers());
    }

    public function testRocketPlacesNumbersIShouldBeReturnWithCorrectValuesWhenGetPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIBuilder();

        $this->assertEquals(8, $rocketProduct->buildPlacesNumbers()->getPlacesNumbers());
    }
}

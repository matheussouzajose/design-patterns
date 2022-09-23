<?php

namespace Creation\Builder\Rocket;

use PHPUnit\Framework\TestCase;

class RocketModelIITest extends TestCase
{
    public function testRocketModelIIShouldBeInstanceOfRocketProductWhenBuildFuelTankIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildFuelTank());
    }

    public function testRocketModelIIShouldBeReturnWithCorrectValuesWhenGetFuelTankIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertEquals(850, $rocketProduct->buildFuelTank()->getFuelTank());
    }

    public function testRocketModelIIShouldBeInstanceOfRocketProductWhenBuildModelIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildModel());
    }

    public function testRocketModelIIShouldBeReturnWithCorrectValuesWhenGetModelIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertEquals('Foguete de Modelo II', $rocketProduct->buildModel()->getModel());
    }

    public function testRocketModelIIShouldBeInstanceOfRocketProductWhenBuildEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildEngineNumbers());
    }

    public function testRocketEngineNumbersIShouldBeReturnWithCorrectValuesWhenGetEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertEquals(2, $rocketProduct->buildEngineNumbers()->getEngineNumbers());
    }

    public function testRocketModelIIShouldBeInstanceOfRocketProductWhenBuildPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertInstanceOf('Creation\Builder\Rocket\RocketProduct', $rocketProduct->buildPlacesNumbers());
    }

    public function testRocketPlacesNumbersIShouldBeReturnWithCorrectValuesWhenGetPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketModelIIBuilder();

        $this->assertEquals(6, $rocketProduct->buildPlacesNumbers()->getPlacesNumbers());
    }
}

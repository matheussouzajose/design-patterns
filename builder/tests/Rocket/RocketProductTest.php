<?php

namespace Builder\Rocket;

use PHPUnit\Framework\TestCase;

class RocketProductTest extends TestCase
{

    public function testRocketProductShouldBeInstanceOfRocketProductWhenSetFuelTankIsCalled()
    {
        $rocketProduct = new RocketProduct();

        $this->assertInstanceOf('Builder\Rocket\RocketProduct', $rocketProduct->setFuelTank(100.00));
    }

    public function testRocketProductShouldBeReturnWithCorrectValueWhenGetFuelTankIsCalled()
    {
        $rocketProduct = new RocketProduct();
        $rocketProduct->setFuelTank(100.00);

        $this->assertEquals(100.00, $rocketProduct->getFuelTank());
    }

    public function testRocketProductShouldBeInstanceOfRocketProductWhenSetModelIsCalled()
    {
        $rocketProduct = new RocketProduct();

        $this->assertInstanceOf('Builder\Rocket\RocketProduct', $rocketProduct->setModel('ModelI'));
    }

    public function testRocketProductShouldBeReturnWithCorrectValueWhenSetModelIsCalled()
    {
        $rocketProduct = new RocketProduct();
        $rocketProduct->setModel('ModelI');

        $this->assertEquals('ModelI', $rocketProduct->getModel());
    }

    public function testRocketProductShouldBeInstanceOfRocketProductWhenSetEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketProduct();

        $this->assertInstanceOf('Builder\Rocket\RocketProduct', $rocketProduct->setEngineNumbers(2));
    }

    public function testRocketProductShouldBeReturnWithCorrectValueWhenSetEngineNumbersIsCalled()
    {
        $rocketProduct = new RocketProduct();
        $rocketProduct->setEngineNumbers(2);

        $this->assertEquals(2, $rocketProduct->getEngineNumbers());
    }

    public function testRocketProductShouldBeInstanceOfRocketProductWhenSetPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketProduct();

        $this->assertInstanceOf('Builder\Rocket\RocketProduct', $rocketProduct->setPlacesNumbers(5));
    }

    public function testRocketProductShouldBeReturnWithCorrectValueWhenSetPlacesNumbersIsCalled()
    {
        $rocketProduct = new RocketProduct();
        $rocketProduct->setPlacesNumbers(5);

        $this->assertEquals(5, $rocketProduct->getPlacesNumbers());
    }
}

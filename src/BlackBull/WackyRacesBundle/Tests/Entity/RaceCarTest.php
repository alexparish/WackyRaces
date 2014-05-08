<?php

namespace BlackBull\WackyRacesBundle\Tests\Entity;

use BlackBull\WackyRacesBundle\Entity\RaceCar;
use BlackBull\WackyRacesBundle\Entity\RaceCarDriver;

class RaceCarTest extends \PHPUnit_Framework_TestCase
{
    public function testDrivingWithoutDriver()
    {
    	$this->setExpectedException('BlackBull\WackyRacesBundle\Exception\NobodyBehindTheWheelException');
    	
    	$car = new RaceCar("Buzzwagon");
    	$car->drive();
    }

    public function testHornWithoutDriver()
    {
    	$this->setExpectedException('BlackBull\WackyRacesBundle\Exception\NobodyBehindTheWheelException');
    	
    	$car = new RaceCar("Buzzwagon");
    	$car->honkHorn();
    }

    public function testDriving()
    {
    	$driver = new RaceCarDriver("Alex", "Parish");

    	$car = new RaceCar("Buzzwagon");
    	$car->setDriver($driver);
    	$car->drive();

    	$this->assertGreaterThan(0, $car->distanceTravelled);
    }
}
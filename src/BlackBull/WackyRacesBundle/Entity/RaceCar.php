<?php

namespace BlackBull\WackyRacesBundle\Entity;

use BlackBull\WackyRacesBundle\Exception\NobodyBehindTheWheelException;

class RaceCar
{
    public $name;
    public $distanceTravelled = 0;
    protected $driver;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setDriver(RaceCarDriver $driver)
    {
    	$this->driver = $driver; 

    	/* More logic here... send an email to race organisers etc */
    }

    public function drive()
    {
    	if ($this->driver === null) {
    		throw new NobodyBehindTheWheelException("The car needs somebody to drive it");
    	}

    	/* Do some driving */
    	$this->distanceTravelled += 10;
    }

    public function honkHorn()
    {
    	if ($this->driver === null) {
    		throw new NobodyBehindTheWheelException("The car needs a driver to honk the horn");
    	}

    	/* Do the horn honking here */
    }
}
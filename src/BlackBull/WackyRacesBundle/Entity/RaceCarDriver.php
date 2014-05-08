<?php

namespace BlackBull\WackyRacesBundle\Entity;

class RaceCarDriver
{
	protected $forename, $surname;

    public function __construct($forename, $surname)
    {
        $this->forename = $forename;
        $this->surname = $surname;
    }

    public function name()
    {
    	return $this->forename . " " . $this->surename();
    }
}
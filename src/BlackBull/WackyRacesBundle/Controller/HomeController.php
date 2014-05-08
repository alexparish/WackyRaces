<?php

namespace BlackBull\WackyRacesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use BlackBull\WackyRacesBundle\Entity\RaceCarDriver;
use BlackBull\WackyRacesBundle\Entity\RaceCar;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render(
		    'BlackBullWackyRacesBundle:Home:index.html.twig',
		    array()
		);
    }
}

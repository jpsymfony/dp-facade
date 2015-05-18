<?php

namespace DP\FacadeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DP\FacadeBundle\Entity\Facade\HomeCinema;
use DP\FacadeBundle\Entity\Amplifier;
use DP\FacadeBundle\Entity\CdPlayer;
use DP\FacadeBundle\Entity\DvdPlayer;
use DP\FacadeBundle\Entity\PopcornPopper;
use DP\FacadeBundle\Entity\Projector;
use DP\FacadeBundle\Entity\Screen;
use DP\FacadeBundle\Entity\TheatherLights;
use DP\FacadeBundle\Entity\Tuner;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $amplifier = new Amplifier("Top-O-Line Amplifier");
        $tuner = new Tuner("Top-O-Line AM/FM Tuner", $amplifier);
        $dvdPlayer = new DvdPlayer("Top-O-Line DVD Player", $amplifier);
        $cdPlayer = new CdPlayer("Top-O-Line CD Player", $amplifier);
        $projector = new Projector("Top-O-Line Projector", $dvdPlayer);
        $screen = new Screen("Theater Screen");
        $theatherLights = new TheatherLights("Theater Ceiling Lights");
        $popcornPopper = new PopcornPopper("Popcorn Popper");
        $homeCinema = new HomeCinema($amplifier, $tuner, $dvdPlayer, $cdPlayer, $projector, $screen, $theatherLights,
            $popcornPopper);
        $homeCinema->regarderFilm("Hôtel du Nord");
        $homeCinema->arreterFilm();

        return array();
    }
}
<?php

namespace DP\FacadeBundle\Entity\Facade;

use DP\FacadeBundle\Entity\Amplifier;
use DP\FacadeBundle\Entity\Tuner;
use DP\FacadeBundle\Entity\DvdPlayer;
use DP\FacadeBundle\Entity\CdPlayer;
use DP\FacadeBundle\Entity\Projector;
use DP\FacadeBundle\Entity\Screen;
use DP\FacadeBundle\Entity\TheatherLights;
use DP\FacadeBundle\Entity\PopcornPopper;

class HomeCinema
{
    private $amplifier;
    private $tuner;
    private $dvdPlayer;
    private $cdPlayer;
    private $projector;
    private $screen;
    private $popcornPopper;
    private $theatherLights;

    public function __construct(Amplifier $amplifier, Tuner $tuner, DvdPlayer $dvdPlayer, CdPlayer $cdPlayer,
                                Projector $projector, Screen $screen, TheatherLights $theatherLights,
                                PopcornPopper $popcornPopper)
    {
        $this->amplifier = $amplifier;
        $this->tuner = $tuner;
        $this->dvdPlayer = $dvdPlayer;
        $this->cdPlayer = $cdPlayer;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->theatherLights = $theatherLights;
        $this->popcornPopper = $popcornPopper;
    }

    public function regarderFilm($film)
    {
        echo "Vous allez voir un bon film..." . "<br>";
        $this->popcornPopper->on();
        $this->popcornPopper->pop();
        $this->theatherLights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amplifier->on();
        $this->amplifier->setDvd($this->dvdPlayer);
        $this->amplifier->setSurroundSound();
        $this->amplifier->setVolume(5);
        $this->dvdPlayer->on();
        $this->dvdPlayer->playMovie($film);
    }

    public function arreterFilm()
    {
        echo "C'est la fin du film..." . "<br>";
        $this->popcornPopper->off();
        $this->theatherLights->on();
        $this->screen->up();
        $this->projector->off();
        $this->dvdPlayer->off();
        $this->dvdPlayer->eject();
        $this->dvdPlayer->off();
    }
}
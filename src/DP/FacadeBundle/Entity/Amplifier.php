<?php

namespace DP\FacadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DP\FacadeBundle\Entity\DvdPlayer;
use DP\FacadeBundle\Entity\Tuner;
use DP\FacadeBundle\Entity\CdPlayer;

/**
 * Amplifier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Amplifier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     *
     * @var DP\FacadeBundle\Entity\Tuner
     */
    private $tuner;

    /**
     *
     * @var DP\FacadeBundle\Entity\DvdPlayer
     */
    private $dvd;

    /**
     *
     * @var DP\FacadeBundle\Entity\CdPlayer
     */
    private $cd;

    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function on()
    {
        echo($this->description . " on" . "<br>");
    }

    public function off()
    {
        echo($this->description . " off" . "<br>");
    }

    public function setStereoSound()
    {
        echo($this->description . " stereo mode on" . "<br>");
    }

    public function setSurroundSound()
    {
        echo($this->description . " surround sound on (5 speakers, 1 subwoofer)" . "<br>");
    }

    public function setVolume($level)
    {
        echo($this->description . " setting volume to " . $level . "<br>");
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Amplifier
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    function getTuner()
    {
        return $this->tuner;
    }

    function getDvd()
    {
        return $this->dvd;
    }

    function getCd()
    {
        return $this->cd;
    }

    function setTuner(Tuner $tuner)
    {
        echo($this->description . " setting tuner to " . $this->dvd . "<br>");
        $this->tuner = $tuner;
    }

    function setDvd(DvdPlayer $dvd)
    {
        echo($this->description . " setting DVD player to " . $this->dvd . "<br>");
        $this->dvd = $dvd;
    }

    function setCd(CdPlayer $cd)
    {
        echo($this->description . " setting CD player to " . $this->cd . "<br>");
        $this->cd = $cd;
    }

    public function __toString()
    {
        return $this->description;
    }

}
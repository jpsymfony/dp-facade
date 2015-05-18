<?php

namespace DP\FacadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DvdPlayer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DvdPlayer
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
     * @var integer
     *
     * @ORM\Column(name="currentTrack", type="integer")
     */
    private $currentTrack;

    /**
     * @var string
     *
     * @ORM\Column(name="movie", type="string", length=255)
     */
    private $movie;

    /**
     *
     * @var DP\FacadeBundle\Entity\Amplifier
     */
    private $amplifier;

    public function __construct($description, \DP\FacadeBundle\Entity\Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier   = $amplifier;
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

    /**
     * Set description
     *
     * @param string $description
     * @return DvdPlayer
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

    /**
     * Set $currentTrack
     *
     * @param integer $currentTrack
     * @return DvdPlayer
     */
    public function setCurrentTrack($currentTrack)
    {
        $this->$this->currentTrack = $currentTrack;

        return $this;
    }

    /**
     * Get $currentTrack
     *
     * @return integer 
     */
    public function getCurrentTrack()
    {
        return $this->currentTrack;
    }

    /**
     * Set $movie
     *
     * @param string $movie
     * @return DvdPlayer
     */
    public function setMovie($movie)
    {
        $this->$this->movie = $movie;

        return $this;
    }

    function getAmplifier()
    {
        return $this->amplifier;
    }

    function setAmplifier(DP\FacadeBundle\Entity\Amplifier $amplifier)
    {
        $this->amplifier = $amplifier;
    }

    /**
     * Get $movie
     *
     * @return string 
     */
    public function getMovie()
    {
        return $this->movie;
    }

    public function on()
    {
        echo($this->description . " on" . "<br>");
    }

    public function off()
    {
        echo($this->description . " off" . "<br>");
    }

    public function eject()
    {
        $this->movie = null;
        echo($this->description . " eject" . "<br>");
    }

    public function playMovie($movie)
    {
        $this->movie        = $movie;
        $this->currentTrack = 0;
        echo($this->description . " playing \"" . $this->movie . "\"" . "<br>");
    }

    public function playTrack($track)
    {
        if ($this->movie == null) {
            echo($this->description . " can't play track " . $track ." no dvd inserted" . "<br>");
        } else {
            $this->currentTrack = $track;
            echo($this->description . " playing track " . $this->currentTrack . " of \"" . $this->movie . "\"" . "<br>");
        }
    }

    public function stop()
    {
        $this->currentTrack = 0;
        echo($this->description . " stopped \"" . $this->movie . "\"" . "<br>");
    }

    public function pause()
    {
        echo($this->description . " paused \"" . $this->movie + "\"" . "<br>");
    }

    public function setTwoChannelAudio()
    {
        echo($this->description . " set two channel audio" . "<br>");
    }

    public function setSurroundAudio()
    {
        echo($this->description . " set surround audio" . "<br>");
    }

    public function __toString()
    {
        return $this->description;
    }

}
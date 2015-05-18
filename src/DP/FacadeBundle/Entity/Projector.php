<?php

namespace DP\FacadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * projector
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Projector
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
     * @var DP\FacadeBundle\Entity\DvdPlayer
     */
    private $dvdPlayer;

    function __construct($description, $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
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
     * @return projector
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

    public function __toString()
    {
        return $this->description;
    }

    public function on()
    {
        echo($this->description . " on" . "<br>");
    }

    public function off()
    {
        echo($this->description . " off" . "<br>");
    }

    public function wideScreenMode()
    {
        echo($this->description . " in widescreen mode (16x9 aspect ratio)" . "<br>");
    }

    public function tvMode()
    {
        echo($this->description . " in tv mode (4x3 aspect ratio)" . "<br>");
    }
}
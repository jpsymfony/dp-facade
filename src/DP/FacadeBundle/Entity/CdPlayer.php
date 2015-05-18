<?php

namespace DP\FacadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CdPlayer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CdPlayer
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    function __construct($description)
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

    /**
     * Set description
     *
     * @param string $description
     * @return CdPlayer
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
     * Set currentTrack
     *
     * @param integer $currentTrack
     * @return CdPlayer
     */
    public function setCurrentTrack($currentTrack)
    {
        $this->currentTrack = $currentTrack;

        return $this;
    }

    /**
     * Get currentTrack
     *
     * @return integer 
     */
    public function getCurrentTrack()
    {
        return $this->currentTrack;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CdPlayer
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function __toString()
    {
        return $this->description;
    }
}

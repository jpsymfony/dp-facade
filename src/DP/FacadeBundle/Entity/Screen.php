<?php

namespace DP\FacadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Screen
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Screen
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
     * @return Screen
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

    public function up()
    {
        echo($this->description . " going up" . "<br>");
    }

    public function down()
    {
        echo($this->description . " going down" . "<br>");
    }

    public function __toString()
    {
        return $this->description;
    }
}
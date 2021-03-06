<?php

namespace Admin\DistrictBundle\Entity;

use Admin\StateBundle\Entity\State;
use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\DistrictBundle\Repository\DistrictRepository")
 */
class District
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var State
     * @ORM\ManyToOne(targetEntity="Admin\StateBundle\Entity\State")
     * @ORM\JoinColumn(name="state", referencedColumnName="id")
     */
    private $state;

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
     * Set name
     *
     * @param string $name
     * @return District
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set state
     *
     * @param State $state
     * @return District
     */
    public function setState(State $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}

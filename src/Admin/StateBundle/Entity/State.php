<?php

namespace Admin\StateBundle\Entity;

use Admin\DistrictBundle\Entity\District;
use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\StateBundle\Repository\StateRepository")
 */
class State
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
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $name;

    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return State
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}

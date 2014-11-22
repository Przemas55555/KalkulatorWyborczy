<?php

namespace Admin\OKWBundle\Entity;

use Admin\DistrictBundle\Entity\District;
use Doctrine\ORM\Mapping as ORM;

/**
 * OKW
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\OKWBundle\Entity\OKWRepository")
 */
class OKW
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
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Admin\DistrictBundle\Entity\District")
     * @ORM\JoinColumn(name="district", referencedColumnName="id")
     */
    private $district;

    /**
     * @var string
     * @ORM\Column(name="max_votes", type="integer")
     */
    private $maxVotes;

    /**
     * @return string
     */
    public function getMaxVotes()
    {
        return $this->maxVotes;
    }

    /**
     * @param string $maxVotes
     */
    public function setMaxVotes($maxVotes)
    {
        $this->maxVotes = $maxVotes;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param District $district
     */
    public function setDistrict(District $district)
    {
        $this->district = $district;
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
     * Set name
     *
     * @param string $name
     * @return OKW
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
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}

<?php

namespace OKW\VotesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OKW\VotesBundle\Entity\VotesRepository")
 */
class Votes
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
     * @var integer
     *
     * @ORM\Column(name="num_votes", type="integer")
     */
    private $numVotes;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\OKWBundle\Entity\OKW")
     * @ORM\JoinColumn(name="okw", referencedColumnName="id")
     */
    private $OKW;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\CandidateBundle\Entity\Candidate")
     * @ORM\JoinColumn(name="candidate", referencedColumnName="id")
     */
    private $candidate;

    /**
     * @return mixed
     */
    public function getOKW()
    {
        return $this->OKW;
    }

    /**
     * @param mixed $OKW
     */
    public function setOKW($OKW)
    {
        $this->OKW = $OKW;
    }

    /**
     * @return mixed
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param mixed $candidate
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
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
     * Set numVotes
     *
     * @param integer $numVotes
     * @return Votes
     */
    public function setNumVotes($numVotes)
    {
        $this->numVotes = $numVotes;

        return $this;
    }

    /**
     * Get numVotes
     *
     * @return integer 
     */
    public function getNumVotes()
    {
        return $this->numVotes;
    }
}

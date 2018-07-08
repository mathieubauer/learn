<?php

namespace dsw\AmpliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="ampli_participation")
 * @ORM\Entity(repositoryClass="dsw\AmpliBundle\Repository\ParticipationRepository")
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="temps", type="integer", nullable=true)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="competence", type="string", length=255, nullable=true)
     */
    private $competence;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\AmpliBundle\Entity\Idee", inversedBy="participations", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $idee;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set temps
     *
     * @param integer $temps
     *
     * @return Participation
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return int
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set competence
     *
     * @param string $competence
     *
     * @return Participation
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return string
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Participation
     */
    public function setUser(\dsw\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \dsw\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set idee
     *
     * @param \dsw\AmpliBundle\Entity\Idee $idee
     *
     * @return Participation
     */
    public function setIdee(\dsw\AmpliBundle\Entity\Idee $idee)
    {
        $this->idee = $idee;

        return $this;
    }

    /**
     * Get idee
     *
     * @return \dsw\AmpliBundle\Entity\Idee
     */
    public function getIdee()
    {
        return $this->idee;
    }
}

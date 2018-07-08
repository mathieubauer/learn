<?php

namespace dsw\AmpliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coeur
 *
 * @ORM\Table(name="ampli_coeur")
 * @ORM\Entity(repositoryClass="dsw\AmpliBundle\Repository\CoeurRepository")
 */
class Coeur
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
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\AmpliBundle\Entity\Idee", inversedBy="coeurs", cascade={"persist"})
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
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Coeur
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
     * @return Coeur
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

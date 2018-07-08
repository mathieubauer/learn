<?php

namespace dsw\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texte
 *
 * @ORM\Table(name="eval_texte")
 * @ORM\Entity(repositoryClass="dsw\EvalBundle\Repository\TexteRepository")
 */
class Texte
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
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255)
     */
    private $reponse;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\EvalBundle\Entity\Evaluation", inversedBy="textes")
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
    */
    private $evaluation;


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
     * Set reponse
     *
     * @param string $reponse
     *
     * @return Texte
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Texte
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
     * Set evaluation
     *
     * @param \dsw\EvalBundle\Entity\Evaluation $evaluation
     *
     * @return Texte
     */
    public function setEvaluation(\dsw\EvalBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \dsw\EvalBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }
}

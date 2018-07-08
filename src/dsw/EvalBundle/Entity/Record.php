<?php

namespace dsw\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Record
 *
 * @ORM\Table(name="eval_record")
 * @ORM\Entity(repositoryClass="dsw\EvalBundle\Repository\RecordRepository")
 */
class Record
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
     * @ORM\Column(name="points", type="integer")
     */
    private $points;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\EvalBundle\Entity\Question")
    * @ORM\JoinColumn(nullable=false)
    */
    private $question;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\EvalBundle\Entity\Enregistrement", inversedBy="records")
    * @ORM\JoinColumn(nullable=false)
    */
    private $enregistrement;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\EvalBundle\Entity\Evaluation", inversedBy="records")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
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
     * Set points
     *
     * @param integer $points
     *
     * @return Record
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Record
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
     * Set question
     *
     * @param \dsw\EvalBundle\Entity\Question $question
     *
     * @return Record
     */
    public function setQuestion(\dsw\EvalBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \dsw\EvalBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set enregistrement
     *
     * @param \dsw\EvalBundle\Entity\Enregistrement $enregistrement
     *
     * @return Record
     */
    public function setEnregistrement(\dsw\EvalBundle\Entity\Enregistrement $enregistrement)
    {
        $this->enregistrement = $enregistrement;

        return $this;
    }

    /**
     * Get enregistrement
     *
     * @return \dsw\EvalBundle\Entity\Enregistrement
     */
    public function getEnregistrement()
    {
        return $this->enregistrement;
    }

    /**
     * Set evaluation
     *
     * @param \dsw\EvalBundle\Entity\Evaluation $evaluation
     *
     * @return Record
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

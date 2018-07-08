<?php

namespace dsw\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attempt
 *
 * @ORM\Table(name="quiz_attempt")
 * @ORM\Entity(repositoryClass="dsw\QuizBundle\Repository\AttemptRepository")
 */
class Attempt
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
    * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\QuizBundle\Entity\Answer", inversedBy="attempts")
    * @ORM\JoinColumn(nullable=false)
    */
    private $answer;

    

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
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Attempt
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
     * Set answer
     *
     * @param \dsw\QuizBundle\Entity\Answer $answer
     *
     * @return Attempt
     */
    public function setAnswer(\dsw\QuizBundle\Entity\Answer $answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \dsw\QuizBundle\Entity\Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}

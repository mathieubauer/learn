<?php

namespace dsw\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="quiz_answer")
 * @ORM\Entity(repositoryClass="dsw\QuizBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="string", length=255, nullable=true)
     */
    private $feedback;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;
    
    /**
     * @var string
     *
     * @ORM\Column(name="axe", type="string", nullable=true)
     */
    private $axe;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\QuizBundle\Entity\Question", inversedBy="answers")
    * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $question;
    
    /**
     * @ORM\OneToMany(targetEntity="Attempt", mappedBy="answer", cascade={"persist"})
     */
    private $attempts;
    
    /**
     * Constructor
     */
    // public function __construct()
    // {
    //     $this->score = 0;
    // }

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
     * Set answer
     *
     * @param string $answer
     *
     * @return Answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     *
     * @return Answer
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Answer
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set question
     *
     * @param \dsw\QuizBundle\Entity\Question $question
     *
     * @return Answer
     */
    public function setQuestion(\dsw\QuizBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \dsw\QuizBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attempts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add attempt
     *
     * @param \dsw\QuizBundle\Entity\Attempt $attempt
     *
     * @return Answer
     */
    public function addAttempt(\dsw\QuizBundle\Entity\Attempt $attempt)
    {
        $this->attempts[] = $attempt;

        return $this;
    }

    /**
     * Remove attempt
     *
     * @param \dsw\QuizBundle\Entity\Attempt $attempt
     */
    public function removeAttempt(\dsw\QuizBundle\Entity\Attempt $attempt)
    {
        $this->attempts->removeElement($attempt);
    }

    /**
     * Get attempts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set axe
     *
     * @param string $axe
     *
     * @return Answer
     */
    public function setAxe($axe)
    {
        $this->axe = $axe;

        return $this;
    }

    /**
     * Get axe
     *
     * @return string
     */
    public function getAxe()
    {
        return $this->axe;
    }
}

<?php

namespace dsw\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="quiz_questionnaire")
 * @ORM\Entity(repositoryClass="dsw\QuizBundle\Repository\QuestionnaireRepository")
 */
class Questionnaire
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
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true, nullable=true)
     */
    private $code;
    
    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", nullable=true)
     */
    private $intro;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\QuizBundle\Entity\Question", mappedBy="questionnaire", cascade={"persist"})
     */
    private $questions;
    
    /**
    * @ORM\Column(name="dateCrea", type="datetime", nullable=true)
    */
    private $dateCrea;

    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Questionnaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateCrea
     *
     * @param \DateTime $dateCrea
     *
     * @return Questionnaire
     */
    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    /**
     * Get dateCrea
     *
     * @return \DateTime
     */
    public function getDateCrea()
    {
        return $this->dateCrea;
    }

    /**
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Questionnaire
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
     * Add question
     *
     * @param \dsw\QuizBundle\Entity\Question $question
     *
     * @return Questionnaire
     */
    public function addQuestion(\dsw\QuizBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \dsw\QuizBundle\Entity\Question $question
     */
    public function removeQuestion(\dsw\QuizBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Questionnaire
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set intro
     *
     * @param string $intro
     *
     * @return Questionnaire
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }
}

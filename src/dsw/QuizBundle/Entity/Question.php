<?php

namespace dsw\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="quiz_question")
 * @ORM\Entity(repositoryClass="dsw\QuizBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\QuizBundle\Entity\Questionnaire", inversedBy="questions")
    * @ORM\JoinColumn(nullable=false)
    */
    private $questionnaire;
    
    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question", cascade={"persist"})
     */
    private $answers;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Question
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set questionnaire
     *
     * @param \dsw\QuizBundle\Entity\Questionnaire $questionnaire
     *
     * @return Question
     */
    public function setQuestionnaire(\dsw\QuizBundle\Entity\Questionnaire $questionnaire)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \dsw\QuizBundle\Entity\Questionnaire
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Add answer
     *
     * @param \dsw\QuizBundle\Entity\Answer $answer
     *
     * @return Question
     */
    public function addAnswer(\dsw\QuizBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \dsw\QuizBundle\Entity\Answer $answer
     */
    public function removeAnswer(\dsw\QuizBundle\Entity\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }
    
    /* public function __toString() {
        return $this->intitule;
    } */
    

}

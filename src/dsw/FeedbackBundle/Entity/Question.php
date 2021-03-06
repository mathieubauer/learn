<?php

namespace dsw\FeedbackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="feedback_question")
 * @ORM\Entity(repositoryClass="dsw\FeedbackBundle\Repository\QuestionRepository")
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\FeedbackBundle\Entity\Seance", inversedBy="questions")
    * @ORM\JoinColumn(nullable=false)
    */
    private $seance;


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
     * Set type
     *
     * @param string $type
     *
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set seance
     *
     * @param \dsw\FeedbackBundle\Entity\Seance $seance
     *
     * @return Question
     */
    public function setSeance(\dsw\FeedbackBundle\Entity\Seance $seance)
    {
        $this->seance = $seance;

        return $this;
    }

    /**
     * Get seance
     *
     * @return \dsw\FeedbackBundle\Entity\Seance
     */
    public function getSeance()
    {
        return $this->seance;
    }
}

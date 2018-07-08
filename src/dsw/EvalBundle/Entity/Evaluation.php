<?php

namespace dsw\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eval
 *
 * @ORM\Table(name="eval_evaluation")
 * @ORM\Entity(repositoryClass="dsw\EvalBundle\Repository\EvaluationRepository")
 */
class Evaluation {
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
     * @ORM\Column(name="sexe", type="smallint")
     */
    private $sexe;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $animateur;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $evalue;
    
    /**
    * @ORM\ManyToMany(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
    */
    private $evaluateurs;
    
    /**
     * @ORM\OneToMany(targetEntity="Record", mappedBy="evaluation", cascade={"persist"})
     */
    private $records;
    
    /**
     * @ORM\OneToMany(targetEntity="Texte", mappedBy="evaluation", cascade={"persist"})
     */
    private $textes;


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
     * Set sexe
     *
     * @param integer $sexe
     *
     * @return Eval
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return int
     */
    public function getSexe()
    {
        return $this->sexe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evaluateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set animateur
     *
     * @param \dsw\UserBundle\Entity\User $animateur
     *
     * @return Evaluation
     */
    public function setAnimateur(\dsw\UserBundle\Entity\User $animateur)
    {
        $this->animateur = $animateur;

        return $this;
    }

    /**
     * Get animateur
     *
     * @return \dsw\UserBundle\Entity\User
     */
    public function getAnimateur()
    {
        return $this->animateur;
    }

    /**
     * Set evalue
     *
     * @param \dsw\UserBundle\Entity\User $evalue
     *
     * @return Evaluation
     */
    public function setEvalue(\dsw\UserBundle\Entity\User $evalue)
    {
        $this->evalue = $evalue;

        return $this;
    }

    /**
     * Get evalue
     *
     * @return \dsw\UserBundle\Entity\User
     */
    public function getEvalue()
    {
        return $this->evalue;
    }

    /**
     * Add evaluateur
     *
     * @param \dsw\UserBundle\Entity\User $evaluateur
     *
     * @return Evaluation
     */
    public function addEvaluateur(\dsw\UserBundle\Entity\User $evaluateur)
    {
        $this->evaluateurs[] = $evaluateur;

        return $this;
    }

    /**
     * Remove evaluateur
     *
     * @param \dsw\UserBundle\Entity\User $evaluateur
     */
    public function removeEvaluateur(\dsw\UserBundle\Entity\User $evaluateur)
    {
        $this->evaluateurs->removeElement($evaluateur);
    }

    /**
     * Get evaluateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluateurs()
    {
        return $this->evaluateurs;
    }

    /**
     * Add record
     *
     * @param \dsw\EvalBundle\Entity\Record $record
     *
     * @return Evaluation
     */
    public function addRecord(\dsw\EvalBundle\Entity\Record $record)
    {
        $this->records[] = $record;

        return $this;
    }

    /**
     * Remove record
     *
     * @param \dsw\EvalBundle\Entity\Record $record
     */
    public function removeRecord(\dsw\EvalBundle\Entity\Record $record)
    {
        $this->records->removeElement($record);
    }

    /**
     * Get records
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Add texte
     *
     * @param \dsw\EvalBundle\Entity\Texte $texte
     *
     * @return Evaluation
     */
    public function addTexte(\dsw\EvalBundle\Entity\Texte $texte)
    {
        $this->textes[] = $texte;

        return $this;
    }

    /**
     * Remove texte
     *
     * @param \dsw\EvalBundle\Entity\Texte $texte
     */
    public function removeTexte(\dsw\EvalBundle\Entity\Texte $texte)
    {
        $this->textes->removeElement($texte);
    }

    /**
     * Get textes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTextes()
    {
        return $this->textes;
    }
}

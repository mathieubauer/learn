<?php

namespace dsw\AmpliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="ampli_categorie")
 * @ORM\Entity(repositoryClass="dsw\AmpliBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(max=30, maxMessage = "Le titre de l'idée ne peut pas dépasser les {{ limit }} caractères")
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre_long", type="string", length=255)
     */
    private $titreLong;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\AmpliBundle\Entity\Idee", mappedBy="categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $idees;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\AmpliBundle\Entity\Espace", inversedBy="categories")
    * @ORM\JoinColumn(nullable=true)
    */
    private $espace;
    // nullable = false en réalité mais c'est pouu permettre l'implémentation snas tout casser


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Categorie
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
     * Constructor
     */
    public function __construct()
    {
        $this->idees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idee
     *
     * @param \dsw\EvalBundle\Entity\Idee $idee
     *
     * @return Categorie
     */
    // public function addIdee(\dsw\EvalBundle\Entity\Idee $idee)
    // {
    //     $this->idees[] = $idee;
    // 
    //     return $this;
    // }

    /**
     * Remove idee
     *
     * @param \dsw\EvalBundle\Entity\Idee $idee
     */
    // public function removeIdee(\dsw\EvalBundle\Entity\Idee $idee)
    // {
    //     $this->idees->removeElement($idee);
    // }

    /**
     * Get idees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdees()
    {
        return $this->idees;
    }

    /**
     * Set titreLong
     *
     * @param string $titreLong
     *
     * @return Categorie
     */
    public function setTitreLong($titreLong)
    {
        $this->titreLong = $titreLong;

        return $this;
    }

    /**
     * Get titreLong
     *
     * @return string
     */
    public function getTitreLong()
    {
        return $this->titreLong;
    }

    /**
     * Add idee
     *
     * @param \dsw\AmpliBundle\Entity\Idee $idee
     *
     * @return Categorie
     */
    public function addIdee(\dsw\AmpliBundle\Entity\Idee $idee)
    {
        $this->idees[] = $idee;

        return $this;
    }

    /**
     * Remove idee
     *
     * @param \dsw\AmpliBundle\Entity\Idee $idee
     */
    public function removeIdee(\dsw\AmpliBundle\Entity\Idee $idee)
    {
        $this->idees->removeElement($idee);
    }

    /**
     * Set espace
     *
     * @param \dsw\AmpliBundle\Entity\Espace $espace
     *
     * @return Categorie
     */
    public function setEspace(\dsw\AmpliBundle\Entity\Espace $espace = null)
    {
        $this->espace = $espace;

        return $this;
    }

    /**
     * Get espace
     *
     * @return \dsw\AmpliBundle\Entity\Espace
     */
    public function getEspace()
    {
        return $this->espace;
    }
}

<?php

namespace dsw\AmpliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Espace
 *
 * @ORM\Table(name="ampli_espace")
 * @ORM\Entity(repositoryClass="dsw\AmpliBundle\Repository\EspaceRepository")
 */
class Espace
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
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $animateur;
    
    /**
     * @var int
     *
     * @ORM\Column(name="etape", type="smallint", nullable=true)
     */
    private $etape;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withIdees", type="smallint", nullable=true)
     */
    private $withIdees;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withModeration", type="smallint", nullable=true)
     */
    private $withModeration;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withCoeurs", type="smallint", nullable=true)
     */
    private $withCoeurs;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withFooter", type="smallint", nullable=true)
     */
    private $withFooter;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withCommentaires", type="smallint", nullable=true)
     */
    private $withCommentaires;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withTemps", type="smallint", nullable=true)
     */
    private $withTemps;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withArgent", type="smallint", nullable=true)
     */
    private $withArgent;
    
    /**
     * @var int
     *
     * @ORM\Column(name="withEquipe", type="smallint", nullable=true)
     */
    private $withEquipe;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\AmpliBundle\Entity\Categorie", mappedBy="espace", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $categories;
    
    /**
     * @var string
     *
     * @ORM\Column(name="objectifs_alias", type="string", length=255)
     */
    private $objectifsAlias;
    
    /**
     * @var string
     *
     * @ORM\Column(name="methode_alias", type="string", length=255)
     */
    private $methodeAlias;
    
    /**
     * @var string
     *
     * @ORM\Column(name="calendrier_alias", type="string", length=255)
     */
    private $calendrierAlias;
    
    // ##########
    // voir s'il faut mettre des alias à view, vote et develop
    // ##########
    
    /**
     * @var string
     *
     * @ORM\Column(name="propulser_alias", type="string", length=255)
     */
    private $propulserAlias;
    
    /**
     * @var string
     *
     * @ORM\Column(name="public_question", type="string", length=255)
     */
    private $publicQuestion;
    


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
     * @return Espace
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
     * Set etape
     *
     * @param integer $etape
     *
     * @return Espace
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return integer
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Set withCoeurs
     *
     * @param integer $withCoeurs
     *
     * @return Espace
     */
    public function setWithCoeurs($withCoeurs)
    {
        $this->withCoeurs = $withCoeurs;

        return $this;
    }

    /**
     * Get withCoeurs
     *
     * @return integer
     */
    public function getWithCoeurs()
    {
        return $this->withCoeurs;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \dsw\AmpliBundle\Entity\Categorie $category
     *
     * @return Espace
     */
    public function addCategory(\dsw\AmpliBundle\Entity\Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \dsw\AmpliBundle\Entity\Categorie $category
     */
    public function removeCategory(\dsw\AmpliBundle\Entity\Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set animateur
     *
     * @param \dsw\UserBundle\Entity\User $animateur
     *
     * @return Espace
     */
    public function setAnimateur(\dsw\UserBundle\Entity\User $animateur = null)
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
     * Set withIdees
     *
     * @param integer $withIdees
     *
     * @return Espace
     */
    public function setWithIdees($withIdees)
    {
        $this->withIdees = $withIdees;

        return $this;
    }

    /**
     * Get withIdees
     *
     * @return integer
     */
    public function getWithIdees()
    {
        return $this->withIdees;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Espace
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set withModeration
     *
     * @param integer $withModeration
     *
     * @return Espace
     */
    public function setWithModeration($withModeration)
    {
        $this->withModeration = $withModeration;

        return $this;
    }

    /**
     * Get withModeration
     *
     * @return integer
     */
    public function getWithModeration()
    {
        return $this->withModeration;
    }

    /**
     * Set withCommentaires
     *
     * @param integer $withCommentaires
     *
     * @return Espace
     */
    public function setWithCommentaires($withCommentaires)
    {
        $this->withCommentaires = $withCommentaires;

        return $this;
    }

    /**
     * Get withCommentaires
     *
     * @return integer
     */
    public function getWithCommentaires()
    {
        return $this->withCommentaires;
    }

    /**
     * Set withTemps
     *
     * @param integer $withTemps
     *
     * @return Espace
     */
    public function setWithTemps($withTemps)
    {
        $this->withTemps = $withTemps;

        return $this;
    }

    /**
     * Get withTemps
     *
     * @return integer
     */
    public function getWithTemps()
    {
        return $this->withTemps;
    }

    /**
     * Set withArgent
     *
     * @param integer $withArgent
     *
     * @return Espace
     */
    public function setWithArgent($withArgent)
    {
        $this->withArgent = $withArgent;

        return $this;
    }

    /**
     * Get withArgent
     *
     * @return integer
     */
    public function getWithArgent()
    {
        return $this->withArgent;
    }

    /**
     * Set withEquipe
     *
     * @param integer $withEquipe
     *
     * @return Espace
     */
    public function setWithEquipe($withEquipe)
    {
        $this->withEquipe = $withEquipe;

        return $this;
    }

    /**
     * Get withEquipe
     *
     * @return integer
     */
    public function getWithEquipe()
    {
        return $this->withEquipe;
    }

    /**
     * Set objectifsAlias
     *
     * @param string $objectifsAlias
     *
     * @return Espace
     */
    public function setObjectifsAlias($objectifsAlias)
    {
        $this->objectifsAlias = $objectifsAlias;

        return $this;
    }

    /**
     * Get objectifsAlias
     *
     * @return string
     */
    public function getObjectifsAlias()
    {
        return $this->objectifsAlias;
    }

    /**
     * Set methodeAlias
     *
     * @param string $methodeAlias
     *
     * @return Espace
     */
    public function setMethodeAlias($methodeAlias)
    {
        $this->methodeAlias = $methodeAlias;

        return $this;
    }

    /**
     * Get methodeAlias
     *
     * @return string
     */
    public function getMethodeAlias()
    {
        return $this->methodeAlias;
    }

    /**
     * Set calendrierAlias
     *
     * @param string $calendrierAlias
     *
     * @return Espace
     */
    public function setCalendrierAlias($calendrierAlias)
    {
        $this->calendrierAlias = $calendrierAlias;

        return $this;
    }

    /**
     * Get calendrierAlias
     *
     * @return string
     */
    public function getCalendrierAlias()
    {
        return $this->calendrierAlias;
    }

    /**
     * Set propulserAlias
     *
     * @param string $propulserAlias
     *
     * @return Espace
     */
    public function setPropulserAlias($propulserAlias)
    {
        $this->propulserAlias = $propulserAlias;

        return $this;
    }

    /**
     * Get propulserAlias
     *
     * @return string
     */
    public function getPropulserAlias()
    {
        return $this->propulserAlias;
    }

    /**
     * Set withFooter
     *
     * @param integer $withFooter
     *
     * @return Espace
     */
    public function setWithFooter($withFooter)
    {
        $this->withFooter = $withFooter;

        return $this;
    }

    /**
     * Get withFooter
     *
     * @return integer
     */
    public function getWithFooter()
    {
        return $this->withFooter;
    }

    /**
     * Set publicQuestion
     *
     * @param string $publicQuestion
     *
     * @return Espace
     */
    public function setPublicQuestion($publicQuestion)
    {
        $this->publicQuestion = $publicQuestion;

        return $this;
    }

    /**
     * Get publicQuestion
     *
     * @return string
     */
    public function getPublicQuestion()
    {
        return $this->publicQuestion;
    }
}

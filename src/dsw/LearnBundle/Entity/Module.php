<?php

namespace dsw\LearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="learn_module")
 * @ORM\Entity(repositoryClass="dsw\LearnBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="chat", type="boolean", nullable=true)
     */
    private $chat;

    /**
     * @var bool
     *
     * @ORM\Column(name="open", type="boolean", nullable=true)
     */
    private $open;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\LearnBundle\Entity\Course", inversedBy="modules")
    * @ORM\JoinColumn(nullable=false)
    */
    private $course;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\LearnBundle\Entity\Unit", mappedBy="module")
     */
    private $units;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\LearnBundle\Entity\Message", mappedBy="module")
     */
    private $messages;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\LearnBundle\Entity\Track", mappedBy="module")
     */
    private $tracks;
    
    /**
     * @var string
     *
     * @ORM\Column(name="picto", type="string", length=255, nullable=true)
     */
    private $picto;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="titre", type="boolean", nullable=true)
     */
    private $titre;
    
    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;


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
     * Set name
     *
     * @param string $name
     *
     * @return Module
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set chat
     *
     * @param boolean $chat
     *
     * @return Module
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return bool
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set open
     *
     * @param boolean $open
     *
     * @return Module
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return bool
     */
    public function getOpen()
    {
        return $this->open;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->units = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add unit
     *
     * @param \dsw\LearnBundle\Entity\Unit $unit
     *
     * @return Module
     */
    public function addUnit(\dsw\LearnBundle\Entity\Unit $unit)
    {
        $this->units[] = $unit;

        return $this;
    }

    /**
     * Remove unit
     *
     * @param \dsw\LearnBundle\Entity\Unit $unit
     */
    public function removeUnit(\dsw\LearnBundle\Entity\Unit $unit)
    {
        $this->units->removeElement($unit);
    }

    /**
     * Get units
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set course
     *
     * @param \dsw\LearnBundle\Entity\Course $course
     *
     * @return Module
     */
    public function setCourse(\dsw\LearnBundle\Entity\Course $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \dsw\LearnBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Add message
     *
     * @param \dsw\LearnBundle\Entity\Message $message
     *
     * @return Module
     */
    public function addMessage(\dsw\LearnBundle\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \dsw\LearnBundle\Entity\Message $message
     */
    public function removeMessage(\dsw\LearnBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set picto.
     *
     * @param string $picto
     *
     * @return Module
     */
    public function setPicto($picto)
    {
        $this->picto = $picto;

        return $this;
    }

    /**
     * Get picto.
     *
     * @return string
     */
    public function getPicto()
    {
        return $this->picto;
    }

    /**
     * Add track.
     *
     * @param \dsw\LearnBundle\Entity\Track $track
     *
     * @return Module
     */
    public function addTrack(\dsw\LearnBundle\Entity\Track $track)
    {
        $this->tracks[] = $track;

        return $this;
    }

    /**
     * Remove track.
     *
     * @param \dsw\LearnBundle\Entity\Track $track
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTrack(\dsw\LearnBundle\Entity\Track $track)
    {
        return $this->tracks->removeElement($track);
    }

    /**
     * Get tracks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Set titre.
     *
     * @param bool|null $titre
     *
     * @return Module
     */
    public function setTitre($titre = null)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return bool|null
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set displayOrder.
     *
     * @param int|null $displayOrder
     *
     * @return Module
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int|null
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }
}

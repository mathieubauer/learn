<?php

namespace dsw\LearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Unit
 *
 * @ORM\Table(name="learn_unit")
 * @ORM\Entity(repositoryClass="dsw\LearnBundle\Repository\UnitRepository")
 */
class Unit
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\LearnBundle\Entity\Module", inversedBy="units", cascade={"persist"}) 
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
    */
    private $module;
    
    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    private $image;
    
    /**
     * @Assert\File(mimeTypes={ "application/pdf", "image/gif", "image/jpeg", "image/png", "video/mp4", "video/x-m4v" })
     */
    private $imageFile;


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
     * @return Unit
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
     * Set content
     *
     * @param string $content
     *
     * @return Unit
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Unit
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
     * Set module
     *
     * @param \dsw\LearnBundle\Entity\Module $module
     *
     * @return Unit
     */
    public function setModule(\dsw\LearnBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \dsw\LearnBundle\Entity\Module
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return Unit
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return Unit
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder
     *
     * @return integer
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Unit
     */
    //public function setImage(UploadedFile $image = null)
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    
    
    // AJOUTS MANUELS
    // TRAITEMENT DES UPLOADS D'IMAGE
    
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile(UploadedFile $imageFile = null)
    {
        $this->imageFile = $imageFile;
    }
    
    
}

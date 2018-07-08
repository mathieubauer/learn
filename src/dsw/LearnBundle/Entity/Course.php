<?php

namespace dsw\LearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="learn_course")
 * @ORM\Entity(repositoryClass="dsw\LearnBundle\Repository\CourseRepository")
 */
class Course
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true, unique=true)
     */
    private $code;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\LearnBundle\Entity\Module", mappedBy="course")
     */
    private $modules;
    
    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true, unique=false)
     */
    private $logo;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="open", type="boolean", nullable=true)
     */
    private $open;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;
    
    /**
    * @ORM\ManyToMany(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
    * @ORM\JoinTable(name="learn_course_user")
    */
    private $learners;

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
     * @return Course
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
     * Set code
     *
     * @param string $code
     *
     * @return Course
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
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add module
     *
     * @param \dsw\LearnBundle\Entity\Module $module
     *
     * @return Course
     */
    public function addModule(\dsw\LearnBundle\Entity\Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \dsw\LearnBundle\Entity\Module $module
     */
    public function removeModule(\dsw\LearnBundle\Entity\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set logo.
     *
     * @param string|null $logo
     *
     * @return Course
     */
    public function setLogo($logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo.
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Course
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set public.
     *
     * @param bool|null $public
     *
     * @return Course
     */
    public function setPublic($public = null)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public.
     *
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Add learner.
     *
     * @param \dsw\UserBundle\Entity\User $learner
     *
     * @return Course
     */
    public function addLearner(\dsw\UserBundle\Entity\User $learner)
    {
        $this->learners[] = $learner;

        return $this;
    }

    /**
     * Remove learner.
     *
     * @param \dsw\UserBundle\Entity\User $learner
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeLearner(\dsw\UserBundle\Entity\User $learner)
    {
        return $this->learners->removeElement($learner);
    }

    /**
     * Get learners.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLearners()
    {
        return $this->learners;
    }

    /**
     * Set open.
     *
     * @param bool|null $open
     *
     * @return Course
     */
    public function setOpen($open = null)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open.
     *
     * @return bool|null
     */
    public function getOpen()
    {
        return $this->open;
    }
}

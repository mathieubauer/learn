<?php

namespace dsw\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="ampli_user")
 * @ORM\Entity(repositoryClass="dsw\UserBundle\Repository\UserRepository")
 * @ORM\AttributeOverrides({
 *     @ORM\AttributeOverride(name="emailCanonical",
 *          column=@ORM\Column(
 *              unique     = false
 *          )
 *      )
 * })
 */
class User extends BaseUser
{
    
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    protected $firstname;
    
    /**
     * @var string
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    protected $lastname;
    
    
    // OVERRIDE FOSUSER
    // Enregistre automatiquement un password
    protected $plainPassword = 'azerty';
    
    
    // GETTERS ET SETTERS AJOUTES MANUELLEMENT
    
    
    // OVERRIDE FOSUSER
    // donne automatiquement l'email comme nom d'utilisateur
    public function setEmail($email)
    {
        
        $split = explode('@', $email);
        $this->setUsername($split[0]);
        return parent::setEmail($email);
        
    }
    
    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstname;
    }
    
    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastname;
    }
    
    
}
<?php

namespace dsw\EvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table(name="eval_enregistrement")
 * @ORM\Entity(repositoryClass="dsw\EvalBundle\Repository\EnregistrementRepository")
 */
class Enregistrement
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
     * @ORM\OneToMany(targetEntity="dsw\EvalBundle\Entity\Record", mappedBy="enregistrement", cascade={"persist"})
     */
    private $records;

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
     * Constructor
     */
    public function __construct()
    {
        $this->records = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add record
     *
     * @param \dsw\EvalBundle\Entity\Record $record
     *
     * @return Enregistrement
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
}

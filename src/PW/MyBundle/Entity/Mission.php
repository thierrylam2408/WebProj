<?php

namespace PW\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="PW\MyBundle\Repository\MissionRepository")
 */
class Mission
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="exec", type="boolean")
     */
    private $exec;

    /**
     * @var int
     *
     * @ORM\Column(name="idHomme", type="integer")
     */
    private $idHomme;


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
     * Set type
     *
     * @param string $type
     *
     * @return Mission
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Mission
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set exec
     *
     * @param boolean $exec
     *
     * @return Mission
     */
    public function setExec($exec)
    {
        $this->exec = $exec;
    
        return $this;
    }

    /**
     * Get exec
     *
     * @return boolean
     */
    public function getExec()
    {
        return $this->exec;
    }

    /**
     * Set idHomme
     *
     * @param integer $idHomme
     *
     * @return Mission
     */
    public function setIdHomme($idHomme)
    {
        $this->idHomme = $idHomme;
    
        return $this;
    }

    /**
     * Get idHomme
     *
     * @return integer
     */
    public function getIdHomme()
    {
        return $this->idHomme;
    }
}


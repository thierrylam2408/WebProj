<?php

namespace PW\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Homme
 *
 * @ORM\Table(name="homme")
 * @ORM\Entity(repositoryClass="PW\MyBundle\Repository\HommeRepository")
 */
class Homme
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;

    /**
     * @var int
     *
     * @ORM\Column(name="idGroupe", type="integer")
     */
    private $idGroupe;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Homme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return Homme
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return Homme
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return int
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }
}


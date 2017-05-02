<?php

namespace PW\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="PW\MyBundle\Repository\GroupeRepository")
 */
class Groupe
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
     * @ORM\Column(name="nomGroupe", type="string", length=255)
     */
    private $nomGroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="idJoueur", type="integer")
     */
    private $idJoueur;

    /**
     * @var int
     *
     * @ORM\Column(name="argent", type="integer")
     */
    private $argent;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return Groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set idJoueur
     *
     * @param integer $idJoueur
     *
     * @return Groupe
     */
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }

    /**
     * Get idJoueur
     *
     * @return int
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * Set argent
     *
     * @param integer $argent
     *
     * @return Groupe
     */
    public function setArgent($argent)
    {
        $this->argent = $argent;

        return $this;
    }

    /**
     * Get argent
     *
     * @return int
     */
    public function getArgent()
    {
        return $this->argent;
    }
}


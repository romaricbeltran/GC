<?php

namespace RB\ParcoursBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SousPartie
 *
 * @ORM\Table(name="sous_partie")
 * @ORM\Entity(repositoryClass="RB\ParcoursBundle\Repository\SousPartieRepository")
 */
class SousPartie
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
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     * 
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="RB\ParcoursBundle\Entity\Periode", inversedBy="sousParties")
     * @ORM\JoinColumn(nullable=false)
     */
    private $periode;

    /**
     * @ORM\OneToMany(targetEntity="RB\ParcoursBundle\Entity\Oeuvre", mappedBy="sousPartie")
     */
    private $oeuvres;

    /**
     * @ORM\Column(name="nb_oeuvres", type="integer")
     */
    private $nbOeuvres = 0;

    /**
     * Constructeur
     * 
     * Permet de récupèrer un tableau de sousParties.
     */
    public function __construct()
    {
        $this->oeuvres = new ArrayCollection();
    }

    /**
     * @ORM\PrePersist
     */
    public function increase()
    {
        $this->getPeriode()->increaseSousPartie();
    }

    /**
     * @ORM\PreRemove
     */
    public function decrease()
    {
        $this->getPeriode()->decreaseSousPartie();
    }

    /**
     * Callback qui met à jour la date de la dernière édition.
     *
     * @ORM\PreUpdate
     */
    public function updateDate()

    {

        $this->setUpdatedAt(new \Datetime());

    }

    /**
     * Incrémente nbOeuvres.
     *
     * 
     */
    public function increaseOeuvre()
    {
        $this->nbOeuvres++;
    }

    /**
     * Décrémente nbOeuvres.
     *
     * 
     */
    public function decreaseOeuvre()
    {
        $this->nbOeuvres--;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre.
     *
     * @param string|null $titre
     *
     * @return SousPartie
     */
    public function setTitre($titre = null)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string|null
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return SousPartie
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
     * Set periode.
     *
     * @param \RB\ParcoursBundle\Entity\Periode $periode
     *
     * @return SousPartie
     */
    public function setPeriode(\RB\ParcoursBundle\Entity\Periode $periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode.
     *
     * @return \RB\ParcoursBundle\Entity\Periode
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return SousPartie
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set nbOeuvres.
     *
     * @param int $nbOeuvres
     *
     * @return SousPartie
     */
    public function setNbOeuvres($nbOeuvres)
    {
        $this->nbOeuvres = $nbOeuvres;

        return $this;
    }

    /**
     * Get nbOeuvres.
     *
     * @return int
     */
    public function getNbOeuvres()
    {
        return $this->nbOeuvres;
    }

    /**
     * Add oeuvre.
     *
     * @param \RB\ParcoursBundle\Entity\Oeuvre $oeuvre
     *
     * @return SousPartie
     */
    public function addOeuvre(\RB\ParcoursBundle\Entity\Oeuvre $oeuvre)
    {
        $this->oeuvres[] = $oeuvre;

        return $this;
    }

    /**
     * Remove oeuvre.
     *
     * @param \RB\ParcoursBundle\Entity\Oeuvre $oeuvre
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOeuvre(\RB\ParcoursBundle\Entity\Oeuvre $oeuvre)
    {
        return $this->oeuvres->removeElement($oeuvre);
    }

    /**
     * Get oeuvres.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }
}

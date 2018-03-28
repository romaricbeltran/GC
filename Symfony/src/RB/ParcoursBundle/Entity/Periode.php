<?php

namespace RB\ParcoursBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 * @ORM\Table(name="periode")
 * @ORM\Entity(repositoryClass="RB\ParcoursBundle\Repository\PeriodeRepository")
 */
class Periode
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
     * @ORM\Column(name="date", type="string", nullable=true)
     */
    private $date;
    
    /**
     * @var \DateTime|null
     * 
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;
    
    /**
     * @ORM\OneToMany(targetEntity="RB\ParcoursBundle\Entity\SousPartie", mappedBy="periode")
     */
    private $sousParties;

    /**
     * @ORM\Column(name="nb_sous_parties", type="integer")
     */
    private $nbSousParties = 0;


    /**
     * Constructeur
     * 
     * Permet de récupèrer un tableau de sousParties.
     */
    public function __construct()
    {
        $this->sousParties = new ArrayCollection();
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
     * Incrémente nbSousParties.
     *
     * 
     */
    public function increaseSousPartie()
    {
        $this->nbSousParties++;
    }

    /**
     * Décrémente nbSousParties.
     *
     * 
     */
    public function decreaseSousPartie()
    {
        $this->nbSousParties--;
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
     * @return Periode
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
     * Set date.
     *
     * @param \DateTime|null $date
     *
     * @return Periode
     */
    public function setDate($date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Periode
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
     * Set nbSousParties.
     *
     * @param int $nbSousParties
     *
     * @return Periode
     */
    public function setNbSousParties($nbSousParties)
    {
        $this->nbSousParties = $nbSousParties;

        return $this;
    }

    /**
     * Get nbSousParties.
     *
     * @return int
     */
    public function getNbSousParties()
    {
        return $this->nbSousParties;
    }

    /**
     * Add sousParty.
     *
     * @param \RB\ParcoursBundle\Entity\SousPartie $sousParty
     *
     * @return Periode
     */
    public function addSousParty(\RB\ParcoursBundle\Entity\SousPartie $sousParty)
    {
        $this->sousParties[] = $sousParty;

        return $this;
    }

    /**
     * Remove sousParty.
     *
     * @param \RB\ParcoursBundle\Entity\SousPartie $sousParty
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSousParty(\RB\ParcoursBundle\Entity\SousPartie $sousParty)
    {
        return $this->sousParties->removeElement($sousParty);
    }

    /**
     * Get sousParties.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousParties()
    {
        return $this->sousParties;
    }
}

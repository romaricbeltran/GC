<?php

namespace RB\ParcoursBundle\Entity;

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
     * @ORM\ManyToOne(targetEntity="RB\ParcoursBundle\Entity\Periode", inversedBy="sousPartie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $periode;

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
}

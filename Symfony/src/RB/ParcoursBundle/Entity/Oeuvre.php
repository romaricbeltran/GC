<?php

namespace RB\ParcoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="oeuvre")
 * @ORM\Entity(repositoryClass="RB\ParcoursBundle\Repository\OeuvreRepository")
 */
class Oeuvre
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
     * @ORM\OneToOne(targetEntity="RB\ParcoursBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="technique", type="string", length=255, nullable=true)
     */
    private $technique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dimension", type="string", length=255, nullable=true)
     */
    private $dimension;

    /**
     * @var text|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * @return Oeuvre
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
     * @return Oeuvre
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
     * Set technique.
     *
     * @param string|null $technique
     *
     * @return Oeuvre
     */
    public function setTechnique($technique = null)
    {
        $this->technique = $technique;

        return $this;
    }

    /**
     * Get technique.
     *
     * @return string|null
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Set dimension.
     *
     * @param string|null $dimension
     *
     * @return Oeuvre
     */
    public function setDimension($dimension = null)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension.
     *
     * @return string|null
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Oeuvre
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
     * Set image.
     *
     * @param \RB\ParcoursBundle\Entity\Image|null $image
     *
     * @return Oeuvre
     */
    public function setImage(\RB\ParcoursBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return \RB\ParcoursBundle\Entity\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }
}

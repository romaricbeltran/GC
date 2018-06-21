<?php

namespace RB\EcritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texte
 *
 * @ORM\Table(name="texte")
 * @ORM\Entity(repositoryClass="RB\EcritBundle\Repository\TexteRepository")
 */
class Texte
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
     * @ORM\Column(name="chemin", type="string", length=255)
     */
    private $chemin;

    /**
     * @ORM\ManyToOne(targetEntity="RB\EcritBundle\Entity\Categorie")
     */
    private $categorie;

    public function setCategorie(Categorie $categorie)
    {
      $this->categorie = $categorie;

      return $this;
    }

    public function getCategorie()
    {
      return $this->categorie;
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
     * Set chemin.
     *
     * @param string $chemin
     *
     * @return Texte
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin.
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }
}

<?php 
//Remplissage de la table Categorie avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use RB\EcritBundle\Entity\Categorie;

class LoadCategorie       
extends AbstractFixture 
implements OrderedFixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

//Periode 1
    //SousPartie 1
        $categorie = array(
            "Ecrits Théoriques",
            "Poèmes",
            "Romans et Nouvelles",
        );

        foreach($categorie as $cle)
        {
            $categorie = new Categorie();
            $categorie->setNom($cle);

            $manager->persist($categorie);
        }

        //on enregistre tout
        $manager->flush();
    }

    /**
    * Get the order of this fixture
    * 
    * @return integer
    */
    public function getOrder()
    {
        return 4;
    }
}

?>
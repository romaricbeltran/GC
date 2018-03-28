<?php 
//Remplissage de la table Periode avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RB\ParcoursBundle\Entity\Periode;

class LoadPeriode implements FixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        $periodes = array(
            'Objets et surfaces' => '1958 - 1970',
            'La recherche de structures' => '1970 - 1975',
            'Ecritures-Signes' => '1975 - 1985',
            'Dialogue de la Peinture et de la Poesie' => '1900 - 2005',
            'Les Formes intuitives' => '2005',
            'Construction des objets mentaux' => null,
            'Narration fantastique' => null,
        );


        foreach($periodes as $cle1 => $valeur1)
        {
            $periode1 = new Periode();
            $periode1->setTitre($cle1);
            $periode1->setDate($valeur1);

            $manager->persist($periode1);
        }

        //on enregistre tout
        $manager->flush();
    }
}

?>
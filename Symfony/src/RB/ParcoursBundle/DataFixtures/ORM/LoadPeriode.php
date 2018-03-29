<?php 
//Remplissage de la table Periode avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use RB\ParcoursBundle\Entity\Periode;

class LoadPeriode        
       extends AbstractFixture 
       implements OrderedFixtureInterface
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

        $i=1;

        foreach($periodes as $cle1 => $valeur1)
        {
            $periode = new Periode();
            $periode->setTitre($cle1);
            $periode->setDate($valeur1);


            $this->addReference('periode'.$i.'' , $periode);

            $manager->persist($periode);

            $i++;
        }

        //on enregistre tout
        $manager->flush();
    }
  /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 1;
  }
}


?>
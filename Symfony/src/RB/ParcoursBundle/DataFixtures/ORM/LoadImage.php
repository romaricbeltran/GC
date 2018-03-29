<?php 
//Remplissage de la table Image avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use RB\ParcoursBundle\Entity\Image;
use RB\ParcoursBundle\Entity\Oeuvre;

class LoadImage       
    extends AbstractFixture 
    implements OrderedFixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

//Periode 1
        $images = array(
            "1.jpg" => "battage_du_ble",
            "2.jpg" => "fonds_marins",
            "3.jpg" => "paysanne",
            "4.jpg" => "pecheurs",
            "5.jpg" => "silhouettes",

//Periode 2
            "6.jpg" => "allegorie_de_la_femme_fregate",
            "7.jpg" => "amazone",
            "8.jpg" => "amethystes",
            "9.jpg" => "bois_et_sous-bois",
            "10.jpg" => "la_foret",
            "11.jpg" => "le_brasier",
            "12.jpg" => "sans_titre",
            "13.jpg" => "",
            "14.jpg" => "",
            "15.jpg" => "",
            "16.jpg" => "",
            "17.jpg" => "",
            "18.jpg" => "sans_titre",
            "19.jpg" => "sans_titre",
            "20.jpg" => "structures",
            "21.jpg" => "totem",
            "22.jpg" => "totem",
            "23.jpg" => "la_chevalerie",

//Periode 3
            "24.jpg" => "ecriture",
            "25.jpg" => "grattages",
            "26.jpg" => "la_guerre_fleurie",
            "27.jpg" => "le_jeu_de_pelote",
            "28.jpg" => "masque_musique",
            "29.jpg" => "mimogramme",
            "30.jpg" => "mimogramme",
            "31.jpg" => "mimogramme",
            "32.jpg" => "mimogramme",
            "33.jpg" => "",
            "34.jpg" => "",
            "35.jpg" => "sans_titre",
            "36.jpg" => "tenochtitlan",
            "37.jpg" => "tracages_et_empreintes",
            "38.jpg" => "tracages_et_empreintes",

//Periode 4
            "39.jpg" => "",
            "40.jpg" => "",
            "41.jpg" => "",
            "42.jpg" => "",
            "43.jpg" => "coques",
            "44.jpg" => "le_chardon",
            "45.jpg" => "attelages",
            "46.jpg" => "apparition",
            "47.jpg" => "",
            "48.jpg" => "",
            "49.jpg" => "",
            "50.jpg" => "",
            "51.jpg" => "",

//Periode 5
            "52.jpg" => "Le Robot",
            "53.jpg" => "",
            "54.jpg" => "",
            "55.jpg" => "",
            "56.jpg" => "",
            "57.jpg" => "",
            "58.jpg" => "",
            "59.jpg" => "",
            "60.jpg" => "",
            "61.jpg" => "",
            "62.jpg" => "",
            "63.jpg" => "",
            "64.jpg" => "",
            "65.jpg" => "",
            "66.jpg" => "",

//Periode 6
            "67.jpg" => "bois_flottants",
            "68.jpg" => "foot_ball",
            "69.jpg" => "la_meule",
            "70.jpg" => "paysage_au_pin",
            "71.jpg" => "pink_floyd",
            "72.jpg" => "",
            "73.jpg" => "",
            "74.jpg" => "",
            "75.jpg" => "sans_titre",
            "76.jpg" => "",
            "77.jpg" => "",

//Periode 7

            "78.jpg" => "",
            "79.jpg" => "",
            "80.jpg" => "",
            "81.jpg" => "",
            "82.jpg" => "",
            "83.jpg" => "",
            "84.jpg" => "",
            "85.jpg" => "",
            "86.jpg" => "",
        );

        $i=1;

        foreach($images as $cle1 => $valeur1)
        {
            $image = new Image();
            $image->setChemin($cle1);
            $image->setAlt($valeur1);

            $oeuvre = new Oeuvre();
            $oeuvre->setTitre($valeur1);
            $oeuvre->setImage($image);

            $this->addReference('oeuvre'.$i.'' , $oeuvre);

            $manager->persist($oeuvre);

            $i++;
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
    return 1;
  }

}

?>
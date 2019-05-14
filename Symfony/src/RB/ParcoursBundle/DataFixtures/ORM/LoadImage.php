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


        $sousPartie1 = $this->getReference('sous_partie1');
        $sousPartie2 = $this->getReference('sous_partie2');
        $sousPartie3 = $this->getReference('sous_partie3');
        $sousPartie4 = $this->getReference('sous_partie4');
        $sousPartie5 = $this->getReference('sous_partie5');
        $sousPartie6 = $this->getReference('sous_partie6');
        $sousPartie7 = $this->getReference('sous_partie7');
        $sousPartie8 = $this->getReference('sous_partie8');
        $sousPartie9 = $this->getReference('sous_partie9');
        $sousPartie10 = $this->getReference('sous_partie10');
        $sousPartie11 = $this->getReference('sous_partie11');
        $sousPartie12 = $this->getReference('sous_partie12');
        $sousPartie13 = $this->getReference('sous_partie13');
        $sousPartie14 = $this->getReference('sous_partie14');
        $sousPartie15 = $this->getReference('sous_partie15');

//Periode 1
    //SousPartie 1
        $images1 = array(
            "1.jpg" => "battage_du_ble",
            "2.jpg" => "fonds_marins",
            "3.jpg" => "paysanne",
            "4.jpg" => "pecheurs",
            "5.jpg" => "silhouettes",
        );

//Periode 2
    //SousPartie 1
        $images2 = array(
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
            "24.jpg" => "ecriture",
        );

//Periode 3
    //SousPartie 1
        $images3 = array(
            "25.jpg" => "grattages",
            "26.jpg" => "la_guerre_fleurie",
            "27.jpg" => "le_jeu_de_pelote",
            "28.jpg" => "masque_musique",
            "29.jpg" => "mimogramme",
            "30.jpg" => "mimogramme",
        );
    //SousPartie 2
        $images4 = array(
            "31.jpg" => "mimogramme",
            "32.jpg" => "mimogramme",
            "33.jpg" => "",
            "34.jpg" => "",
            "35.jpg" => "sans_titre",
        );
    //SousPartie 3
        $images5 = array(
            "36.jpg" => "tenochtitlan",
            "37.jpg" => "tracages_et_empreintes",
            "38.jpg" => "tracages_et_empreintes",
            "39.jpg" => "",
        );

//Periode 4
    //SousPartie 1
        $images6 = array(
            "40.jpg" => "",
            "41.jpg" => "",
            "42.jpg" => "",
            "43.jpg" => "coques",
        );
    //SousPartie 2
        $images7 = array(
            "44.jpg" => "le_chardon",
            "45.jpg" => "attelages",
            "46.jpg" => "apparition",
            "47.jpg" => "",
        );
    //SousPartie 3
        $images8 = array(
            "48.jpg" => "",
            "49.jpg" => "",
        );
    //SousPartie 4
        $images9 = array(
            "50.jpg" => "",
            "51.jpg" => "",
            "52.jpg" => "Le Robot",
        );

//Periode 5
    //SousPartie 1
        $images10 = array(
            "53.jpg" => "",
            "54.jpg" => "",
            "55.jpg" => "",
            "56.jpg" => "",
        );
    //SousPartie 2
        $images11 = array(
            "57.jpg" => "",
            "58.jpg" => "",
            "59.jpg" => "",
            "60.jpg" => "",
            "61.jpg" => "",
            "62.jpg" => "",
            "63.jpg" => "",
        );
    //SousPartie 3
        $images12 = array(
            "64.jpg" => "",
            "65.jpg" => "",
            "66.jpg" => "",
        );

//Periode 6
    //SousPartie 1
        $images13 = array(
            "67.jpg" => "pink_floyd",
            "68.jpg" => "foot_ball",
            "69.jpg" => "bois_flottants",
            "70.jpg" => "la_meule",
            "71.jpg" => "",
        );
    //SousPartie 2
        $images14 = array(
            "72.jpg" => "",
            "73.jpg" => "",
            "74.jpg" => "",
            "75.jpg" => "sans_titre",
        );

    //SousPartie 3
        $images15 = array(
            "76.jpg" => "",
            "77.jpg" => "",
            "78.jpg" => "",
            "79.jpg" => "",
            "80.jpg" => "",
            "81.jpg" => "",
            "82.jpg" => "",
            "83.jpg" => "",
            "84.jpg" => "",
        );


    

    $i=0;
        foreach($images1 as $cle => $valeur)
        {
            $image1 = new Image();
            $image1->setChemin($cle);
            $image1->setAlt($valeur);

            $oeuvre1 = new Oeuvre();
            $oeuvre1->setTitre($valeur);
            $oeuvre1->setImage($image1);

            $oeuvre1->setSousPartie($sousPartie1);
            $oeuvre1->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre1);
            $i++;

            if ($i >= 5)
                {
                    break 1;
                }
        }

        foreach($images2 as $cle => $valeur)
        {
    
            $image2 = new Image();
            $image2->setChemin($cle);
            $image2->setAlt($valeur);

            $oeuvre2 = new Oeuvre();
            $oeuvre2->setTitre($valeur);
            $oeuvre2->setImage($image2);

            $oeuvre2->setSousPartie($sousPartie2);
            $oeuvre2->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre2);
            $i++;

            if ($i >= 24)
                {
                    break 1;
                }
        }

        foreach($images3 as $cle => $valeur)
        {
    
            $image3 = new Image();
            $image3->setChemin($cle);
            $image3->setAlt($valeur);

            $oeuvre3 = new Oeuvre();
            $oeuvre3->setTitre($valeur);
            $oeuvre3->setImage($image3);

            $oeuvre3->setSousPartie($sousPartie3);
            $oeuvre3->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre3);
            $i++;

            if ($i >= 30)
                {
                    break 1;
                }
        }

        foreach($images4 as $cle => $valeur)
        {   
    
            $image4 = new Image();
            $image4->setChemin($cle);
            $image4->setAlt($valeur);

            $oeuvre4 = new Oeuvre();
            $oeuvre4->setTitre($valeur);
            $oeuvre4->setImage($image4);

            $oeuvre4->setSousPartie($sousPartie4);
            $oeuvre4->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre4);
            $i++;

            if ($i >= 35)
                {
                    break 1;
                }
        }

        foreach($images5 as $cle => $valeur)
        {
    
            $image5 = new Image();
            $image5->setChemin($cle);
            $image5->setAlt($valeur);

            $oeuvre5 = new Oeuvre();
            $oeuvre5->setTitre($valeur);
            $oeuvre5->setImage($image5);

            $oeuvre5->setSousPartie($sousPartie5);
            $oeuvre5->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre5);
            $i++;

            if ($i >= 39)
                {
                    break 1;
                }
        }

        foreach($images6 as $cle => $valeur)
        {
        
            $image6 = new Image();
            $image6->setChemin($cle);
            $image6->setAlt($valeur);

            $oeuvre6 = new Oeuvre();
            $oeuvre6->setTitre($valeur);
            $oeuvre6->setImage($image6);

            $oeuvre6->setSousPartie($sousPartie6);
            $oeuvre6->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre6);
            $i++;

            if ($i >= 43)
                {
                    break 1;
                }
        }

        foreach($images7 as $cle => $valeur)
        {
    
            $image7 = new Image();
            $image7->setChemin($cle);
            $image7->setAlt($valeur);

            $oeuvre7 = new Oeuvre();
            $oeuvre7->setTitre($valeur);
            $oeuvre7->setImage($image7);

            $oeuvre7->setSousPartie($sousPartie7);
            $oeuvre7->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre7);
            $i++;

            if ($i >= 47)
                {
                    break 1;
                }
        }

        foreach($images8 as $cle => $valeur)
        {
    
            $image8 = new Image();
            $image8->setChemin($cle);
            $image8->setAlt($valeur);

            $oeuvre8 = new Oeuvre();
            $oeuvre8->setTitre($valeur);
            $oeuvre8->setImage($image8);

            $oeuvre8->setSousPartie($sousPartie8);
            $oeuvre8->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre8);
            $i++;

            if ($i >= 49)
                {
                    break 1;
                }
        }

        foreach($images9 as $cle => $valeur)
        {
    
            $image9 = new Image();
            $image9->setChemin($cle);
            $image9->setAlt($valeur);

            $oeuvre9 = new Oeuvre();
            $oeuvre9->setTitre($valeur);
            $oeuvre9->setImage($image9);

            $oeuvre9->setSousPartie($sousPartie9);
            $oeuvre9->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre9);
            $i++;

            if ($i >= 52)
                {
                    break 1;
                }
        }

        foreach($images10 as $cle => $valeur)
        {
    
            $image10 = new Image();
            $image10->setChemin($cle);
            $image10->setAlt($valeur);

            $oeuvre10 = new Oeuvre();
            $oeuvre10->setTitre($valeur);
            $oeuvre10->setImage($image10);

            $oeuvre10->setSousPartie($sousPartie10);
            $oeuvre10->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre10);
            $i++;

            if ($i >= 56)
                {
                    break 1;
                }
        }

        foreach($images11 as $cle => $valeur)
        {
    
            $image11 = new Image();
            $image11->setChemin($cle);
            $image11->setAlt($valeur);

            $oeuvre11 = new Oeuvre();
            $oeuvre11->setTitre($valeur);
            $oeuvre11->setImage($image11);

            $oeuvre11->setSousPartie($sousPartie11);
            $oeuvre11->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre11);
            $i++;

            if ($i >= 63)
                {
                    break 1;
                }
        }

        foreach($images12 as $cle => $valeur)
        {
    
            $image12 = new Image();
            $image12->setChemin($cle);
            $image12->setAlt($valeur);

            $oeuvre12 = new Oeuvre();
            $oeuvre12->setTitre($valeur);
            $oeuvre12->setImage($image12);

            $oeuvre12->setSousPartie($sousPartie12);
            $oeuvre12->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre12);
            $i++;

            if ($i >= 66)
                {
                    break 1;
                }
        }

        foreach($images13 as $cle => $valeur)
        {
    
            $image13 = new Image();
            $image13->setChemin($cle);
            $image13->setAlt($valeur);

            $oeuvre13 = new Oeuvre();
            $oeuvre13->setTitre($valeur);
            $oeuvre13->setImage($image13);

            $oeuvre13->setSousPartie($sousPartie13);
            $oeuvre13->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre13);
            $i++;

            if ($i >= 71)
                {
                    break 1;
                }
        }

        foreach($images14 as $cle => $valeur)
        {
    
            $image14 = new Image();
            $image14->setChemin($cle);
            $image14->setAlt($valeur);

            $oeuvre14 = new Oeuvre();
            $oeuvre14->setTitre($valeur);
            $oeuvre14->setImage($image14);

            $oeuvre14->setSousPartie($sousPartie14);
            $oeuvre14->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre14);
            $i++;

            if ($i >= 77)
                {
                    break 1;
                }
        }

        foreach($images15 as $cle => $valeur)
        {
    
            $image15 = new Image();
            $image15->setChemin($cle);
            $image15->setAlt($valeur);

            $oeuvre15 = new Oeuvre();
            $oeuvre15->setTitre($valeur);
            $oeuvre15->setImage($image15);

            $oeuvre15->setSousPartie($sousPartie15);
            $oeuvre15->getSousPartie()->increaseOeuvre();

            $manager->persist($oeuvre15);
            $i++;

            if ($i >= 83)
                {
                    break 1;
                }
        }

        $image16 = new Image();
        $image16->setChemin('85.jpg');
        $image16->setAlt('');
        $manager->persist($image16);

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
    return 3;
}

}

?>
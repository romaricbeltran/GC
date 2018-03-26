<?php 
//Remplissage de la table Image avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RB\ParcoursBundle\Entity\Image;
use RB\ParcoursBundle\Entity\Oeuvre;

class LoadImage implements FixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        $images1 = array(
            "1.jpg" => "battage_du_ble",
            "2.jpg" => "fonds_marins",
            "3.jpg" => "paysanne",
            "4.jpg" => "pecheurs",
            "5.jpg" => "silhouettes"
        );

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
        );

        $images3 = array(
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
        );

        $images4 = array(
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

        );

        $images5 = array(
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
        );

        $images6 = array(
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
        );

        $images7 = array(
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

        foreach($images1 as $cle1 => $valeur1)
        {
            $image1 = new Image();
            $image1->setChemin($cle1);
            $image1->setAlt($valeur1);

            $oeuvre1 = new Oeuvre();
            $oeuvre1->setTitre($valeur1);
            $oeuvre1->setImage($image1);

            $manager->persist($oeuvre1);
        }

        foreach($images2 as $cle1 => $valeur1)
        {
            $image2 = new Image();
            $image2->setChemin($cle1);
            $image2->setAlt($valeur1);

            $oeuvre2 = new Oeuvre();
            $oeuvre2->setTitre($valeur1);
            $oeuvre2->setImage($image2);
            
            $manager->persist($oeuvre2);
        }

        foreach($images3 as $cle1 => $valeur1)
        {
            $image3 = new Image();
            $image3->setChemin($cle1);
            $image3->setAlt($valeur1);

            $oeuvre3 = new Oeuvre();
            $oeuvre3->setTitre($valeur1);
            $oeuvre3->setImage($image3);
            
            $manager->persist($oeuvre3);
        }

        foreach($images4 as $cle1 => $valeur1)
        {
            $image4 = new Image();
            $image4->setChemin($cle1);
            $image4->setAlt($valeur1);

            $oeuvre4 = new Oeuvre();
            $oeuvre4->setTitre($valeur1);
            $oeuvre4->setImage($image4);
            
            $manager->persist($oeuvre4);
        }

        foreach($images5 as $cle1 => $valeur1)
        {
            $image5 = new Image();
            $image5->setChemin($cle1);
            $image5->setAlt($valeur1);

            $oeuvre5 = new Oeuvre();
            $oeuvre5->setTitre($valeur1);
            $oeuvre5->setImage($image5);
            
            $manager->persist($oeuvre5);
        }

        foreach($images6 as $cle1 => $valeur1)
        {
            $image6 = new Image();
            $image6->setChemin($cle1);
            $image6->setAlt($valeur1);

            $oeuvre6 = new Oeuvre();
            $oeuvre6->setTitre($valeur1);
            $oeuvre6->setImage($image6);
            
            $manager->persist($oeuvre6);
        }

        foreach($images7 as $cle1 => $valeur1)
        {
            $image7 = new Image();
            $image7->setChemin($cle1);
            $image7->setAlt($valeur1);

            $oeuvre7 = new Oeuvre();
            $oeuvre7->setTitre($valeur1);
            $oeuvre7->setImage($image7);
            
            $manager->persist($oeuvre7);
        }        
        //on enregistre tout
        $manager->flush();
    }
}

?>
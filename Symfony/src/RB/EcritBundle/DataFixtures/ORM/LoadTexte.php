<?php 
//Remplissage de la table Texte avec les assets

namespace RB\ParcoursBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use RB\EcritBundle\Entity\Texte;
use RB\EcritBundle\Entity\Categorie;

class LoadTexte       
extends AbstractFixture 
implements OrderedFixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

//Ecrits Théoriques
        $ecrits_theoriques = array(
            "Articles.pdf",
            "L_art n_est_pas_un_langage_la_rupture_creative_2010.pdf",
            "Peinture_et_Poesie_1984.pdf",
            "Sémiologie_de_l_image_dans_la_publicité_1990.pdf",
        );

//Poemes
        $poemes = array(
            "Cosmiques_2002.pdf",
            "La_Queue_de_l_Ange_2005.pdf",
            "Le_Corps_du_Causse_2005.pdf",
            "Meme_sous_l_eau_elle_fait_encore_des_bulles_2009.pdf",
            "Miroitements_des_espaces_sans_tain_2008.pdf",
            "Paysage_au_chien_2003.pdf",
            "Pierres_lentes_1984.pdf",
            "Sables_astringents_2009.pdf",
        );

//Romans et Nouvelles
        $romans = array(
            "La_Semence_d_Eva.pdf",
            "Les_Fantomes_de_Clara.pdf",
            "Robe_d_Antoinette.pdf",
        );

        foreach($ecrits_theoriques as $cle)
        {
            $ecrits_theoriques = new Texte();
            $ecrits_theoriques->setChemin($cle);

            $categorie = $manager->getRepository('RBEcritBundle:Categorie')->findOneByNom('Ecrits Théoriques');
            $ecrits_theoriques->setCategorie($categorie);

            $manager->persist($ecrits_theoriques);
        }

        foreach($poemes as $cle)
        {
            $poemes = new Texte();
            $poemes->setChemin($cle);

            $categorie = $manager->getRepository('RBEcritBundle:Categorie')->findOneByNom('Poèmes');
            $poemes->setCategorie($categorie);

            $manager->persist($poemes);
        }

        foreach($romans as $cle)
        {
            $romans = new Texte();
            $romans->setChemin($cle);

            $categorie = $manager->getRepository('RBEcritBundle:Categorie')->findOneByNom('Romans et Nouvelles');
            $romans->setCategorie($categorie);

            $manager->persist($romans);
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
        return 5;
    }
}

?>
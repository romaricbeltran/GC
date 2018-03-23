<?php
// ici on génére l'utilisateur Geneviève Cornu dans la BDD automatiquement

namespace RB\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RB\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
    /*
     * Charge les users en base de données, $manager est l'entityManager !
     */
    public function load(ObjectManager $manager)
    {
        $names = array(
            'Genevieve',
        );

        $password = $manager
        ->getRepository('RBUserBundle:User')
        ->crypto('password'); // on fera une fonction setPassword dans le controleur

        foreach($names as $name) {

            $user = new User;

            $user->setUsername($name);
            $user->setPassword($password);
            $user->setSalt('sha12');
            $user->setRoles(array('ROLE_ADMIN'));

            $manager->persist($user);
        }

        $manager->flush();
    }
}

?>
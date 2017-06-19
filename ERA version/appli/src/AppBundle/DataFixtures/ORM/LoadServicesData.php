<?php

/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 14:14
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Services;
use AppBundle\Entity\Sitter;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Acl\Model\FieldEntryInterface;

class LoadServicesData extends AbstractFixture
{


    public function load(ObjectManager $manager)
    {
        for($i=0;$i<6;$i++)
        {
        $service = new Services();

        $service->setTitle('Service ménage');
        $service->setDescription('Plateforme de mise en relation entre aides-ménagers à Paris et particuliers, Helpling est présent à Paris et également dans la petite couronne parisienne. Proposant différents services ménagers comme le repassage, le nettoyage de vos vitres');
        $service->setTarif('35 euros');

        $manager->persist($service);

        $sitter = new Sitter();
        $sitter->setFirstname('Marine');
        $sitter->setLastname('Lucie');
        $sitter->setBirthdate('2010-12-12');
        $sitter->setAdresse("20 rue Alexandre dumas");
        $sitter->setCp("92400");
        $sitter->setEmail("lucie.$i@gmail.com");
        $sitter->setDispo(true);
        $sitter->setTel("0751024365");
        $sitter->setVille("Courbevoie");

         $manager->persist($sitter);


        }
        $manager->flush();

    }


}
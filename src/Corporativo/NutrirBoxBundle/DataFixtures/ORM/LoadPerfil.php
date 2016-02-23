<?php

namespace Corporativo\NutrirBoxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Corporativo\NutrirBoxBundle\Entity\Perfil;

class LoadPerfil extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $arrPerfil = array(
            array('role' => 'ROLE_ADMIN'),
            array('role' => 'ROLE_USER'),
        );
        foreach ($arrPerfil as $perfil) {
            $objPerfil = new Perfil();
            $objPerfil->setNoNome($perfil['role'])
                    ->setIsAtivo(TRUE);
            $manager->persist($objPerfil);
            $this->addReference('coPerfil' . $perfil['role'], $objPerfil);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 1;
    }

}

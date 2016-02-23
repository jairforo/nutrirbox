<?php

namespace Corporativo\NutrirBoxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Corporativo\NutrirBoxBundle\Entity\Pessoa;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadPessoa extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface {


    private $container;

    public function load(ObjectManager $manager) {

        $arrPessoa = array(
            array('role' => 'ROLE_ADMIN', 'id' => 'admin', 'noNome' => 'Administrador', 'noSenha' => 'user', 'noEmail' => 'admin@gmail.com'),
            array('role' => 'ROLE_USER', 'id' => 'user', 'noNome' => 'Usuario', 'noSenha' => 'user', 'noEmail' => 'user@gmail.com'),
        );
        
        foreach ($arrPessoa as $pessoa) {
            $ObjPessoa = new Pessoa();
            $ObjPessoa->setNoEmail($pessoa['noEmail'])
            ->setNoSenha($this->encodePassword($ObjPessoa, $pessoa['noSenha']))
            ->setNoNome($pessoa['noNome'])
            ->setDtCadastro(new \DateTime('now'))
            ->setNuCelular('444')
            ->setCoPerfil($this->getReference('coPerfil'.$pessoa['role']))
            ->setIsAtivo(TRUE);

            $manager->persist($ObjPessoa);
            $manager->flush();
            $this->addReference('coPessoa_'.$pessoa['id'], $ObjPessoa);
        }
    }
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    private function encodePassword($pessoa, $plainPassword){
        $encoder = $this->container->get("security.encoder_factory")
                ->getEncoder($pessoa);
        return $encoder->encodePassword($plainPassword, $pessoa->getNoSalt());
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 2;
    }
}

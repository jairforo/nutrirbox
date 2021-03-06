<?php

namespace Corporativo\NutrirBoxBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

/**
 * PessoaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PessoaRepository extends EntityRepository implements UserProviderInterface
{
    public function findOneByNoEmail($username) {
        $pessoaRet = $this->createQueryBuilder('p')
                ->where('p.noEmail = :noEmail')
                ->setParameter('noEmail', $username)
                ->getQuery()
                ->getOneOrNullResult();
        
        return $pessoaRet;
    }

    public function loadUserByUsername($username) {
        $pessoa = $this->findOneByNoEmail($username);
        if (!$pessoa) {
            throw new UsernameNotFoundException("Usuário não encontrado: ". $username);
        }
        return $pessoa;
    }

    public function refreshUser(UserInterface $user) {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException('Erro. Classe não suportada');
        }
        
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return $this->getEntityName() == $class || is_subclass_of($class, $this->getEntityName());
    }

}

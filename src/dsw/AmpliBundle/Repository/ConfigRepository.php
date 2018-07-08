<?php

namespace dsw\AmpliBundle\Repository;

/**
 * ConfigRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConfigRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function getZZZ($user, $idee) {
        
        $qb = $this->createQueryBuilder('c');
        
        $qb
            // A MODIFIER
            ->where('c.user = :user')
            ->setParameter('user', $user)
            ->andWhere('c.idee = :idee')
            ->setParameter('idee', $idee)
        ;
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    
}
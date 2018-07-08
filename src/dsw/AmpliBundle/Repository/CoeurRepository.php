<?php

namespace dsw\AmpliBundle\Repository;

/**
 * CoeurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CoeurRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function match($user, $idee) {
        
        $qb = $this->createQueryBuilder('c');
        
        $qb
            // ->select('i')
            // ->from('dswAmpliBundle:Idee', 'i')
            //->addSelect('COUNT(c.id) AS HIDDEN mycount')
            // ->groupBy('i.id')
            ->where('c.user = :user')
            ->setParameter('user', $user)
            ->andWhere('c.idee = :idee')
            ->setParameter('idee', $idee)
        ;
        
        return $qb->getQuery()->getOneOrNullResult();
        
        // getOneOrNullResult()
        
    }
    
    public function countCoeurs($idee) {
        
        $qb = $this->_em->createQueryBuilder();
        
        $qb
            ->select('COUNT(c)')
            ->from('dswAmpliBundle:Coeur', 'c')
            ->where('c.idee = :idee')
            ->setParameter('idee', $idee)
        ;
        
        return $qb->getQuery()->getSingleScalarResult();
        
    }
    
}

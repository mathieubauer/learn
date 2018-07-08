<?php

namespace dsw\AmpliBundle\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;


/**
 * IdeeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IdeeRepository extends \Doctrine\ORM\EntityRepository
{
    
    
    
    public function getIdeesWithNbCoeurs($id)
      {
        
        //$qb = $this->createQueryBuilder('i');
        $qb = $this->_em->createQueryBuilder();

        $qb
            ->select('i')
            ->from('dswAmpliBundle:Idee', 'i')
            ->leftJoin('i.coeurs', 'c')
            ->leftJoin('i.user', 'u')
            ->addSelect('u')
            ->addSelect('c')
            // ->groupBy('i.id')
            ->where('i.espace = :id')
            ->setParameter('id', $id)
            // ->addSelect('COUNT(c.id) AS HIDDEN nbCoeurs') // celui là nique l'array si pas HIDDEN
            ->orderBy('i.id', 'DESC')
            
        ;
        
        return $qb->getQuery()->getResult();
        
      }
    
    public function findOrdered($id) {
        
        // $id est l'espace
        
        $qb = $this->_em->createQueryBuilder();

        $qb
            
            ->from('dswAmpliBundle:Idee', 'i')
            ->leftJoin('i.coeurs', 'c')
            ->select('i')
            ->groupBy('i.id')
            ->addSelect('COUNT(c) as nbCoeurs')
            ->where('i.espace = :id')
            ->setParameter('id', $id)
            ->orderBy('nbCoeurs', 'DESC')
            ->addOrderBy('i.selection', 'DESC')
            
        ;
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function findOrderedAndSelected($id) {
        
        // $id est l'espace
        
        $qb = $this->_em->createQueryBuilder();

        $qb
            
            ->from('dswAmpliBundle:Idee', 'i')
            ->leftJoin('i.coeurs', 'c')
            ->select('i')
            ->groupBy('i.id')
            ->addSelect('COUNT(c) as nbCoeurs')
            ->where('i.espace = :id')
            ->andWhere('i.selection = 1')
            ->setParameter('id', $id)
            ->orderBy('nbCoeurs', 'DESC')
            ->addOrderBy('i.selection', 'DESC')
            
        ;
        
        return $qb->getQuery()->getResult();
        
    }
    
    /*
    public function findExceptLiked($id_espace, $id_user) {
        
        $qb = $this->_em->createQueryBuilder();

        $qb
            
            ->from('dswAmpliBundle:Idee', 'i')
            ->leftJoin('i.coeurs', 'c')
            ->select('i, c')
            
            // ->addSelect('COUNT(c) as nbCoeurs')
            ->where('i.espace = :id_espace')
            ->setParameter('id_espace', $id_espace)
            
            ->andWhere($qb->expr()->orX(
                $qb->expr()->not('c.user = :id_user'),
                $qb->expr()->isNull('c.user')
            ))
            ->setParameter('id_user', $id_user)
            
            
            //->andWhere($qb->expr()->not('c.user = :id_user'))
            //->setParameter('id_user', $id_user)
            //->orWhere($qb->expr()->isNotNull('c.user'))
            
            //->orderBy('nbCoeurs', 'DESC')
            //->addOrderBy('i.selection', 'DESC')
            //->groupBy('i.id')
            
        ;
        
        return $qb->getQuery()->getResult();
        
    }
    */
    
    
    
}
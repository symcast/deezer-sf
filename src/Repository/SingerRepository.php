<?php

namespace App\Repository;

use App\Entity\Singer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Singer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Singer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Singer[]    findAll()
 * @method Singer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SingerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Singer::class);
    }

    // /**
    //  * @return Singer[] Returns an array of Singer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Singer
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

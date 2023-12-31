<?php

namespace App\Repository;

use App\Entity\ApiEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ApiEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApiEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApiEntity[]    findAll()
 * @method ApiEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApiEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApiEntity::class);
    }

    // /**
    //  * @return ApiEntity[] Returns an array of ApiEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ApiEntity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

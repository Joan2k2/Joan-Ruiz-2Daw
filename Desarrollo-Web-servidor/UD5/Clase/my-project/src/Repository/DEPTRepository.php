<?php

namespace App\Repository;

use App\Entity\DEPT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DEPT>
 *
 * @method DEPT|null find($id, $lockMode = null, $lockVersion = null)
 * @method DEPT|null findOneBy(array $criteria, array $orderBy = null)
 * @method DEPT[]    findAll()
 * @method DEPT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DEPTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DEPT::class);
    }

//    /**
//     * @return DEPT[] Returns an array of DEPT objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DEPT
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

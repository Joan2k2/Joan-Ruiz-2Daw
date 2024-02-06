<?php

namespace App\Repository;

use App\Entity\PAGOSJoan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAGOSJoan>
 *
 * @method PAGOSJoan|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAGOSJoan|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAGOSJoan[]    findAll()
 * @method PAGOSJoan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAGOSJoanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAGOSJoan::class);
    }

//    /**
//     * @return PAGOSJoan[] Returns an array of PAGOSJoan objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PAGOSJoan
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

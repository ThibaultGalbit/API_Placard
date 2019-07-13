<?php

namespace App\Repository;

use App\Entity\DocumentTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DocumentTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentTest[]    findAll()
 * @method DocumentTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentTestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DocumentTest::class);
    }

    // /**
    //  * @return DocumentTest[] Returns an array of DocumentTest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocumentTest
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

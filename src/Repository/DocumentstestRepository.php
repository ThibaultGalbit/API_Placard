<?php

namespace App\Repository;

use App\Entity\Documentstest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Documentstest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Documentstest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Documentstest[]    findAll()
 * @method Documentstest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentstestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Documentstest::class);
    }

    // /**
    //  * @return Documentstest[] Returns an array of Documentstest objects
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
    public function findOneBySomeField($value): ?Documentstest
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

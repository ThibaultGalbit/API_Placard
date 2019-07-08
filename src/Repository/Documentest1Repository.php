<?php

namespace App\Repository;

use App\Entity\Documentest1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Documentest1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Documentest1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Documentest1[]    findAll()
 * @method Documentest1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Documentest1Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Documentest1::class);
    }

    // /**
    //  * @return Documentest1[] Returns an array of Documentest1 objects
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
    public function findOneBySomeField($value): ?Documentest1
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

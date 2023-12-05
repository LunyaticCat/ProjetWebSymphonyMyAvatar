<?php

namespace App\Repository;

use App\Entity\UserMyAvatar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserMyAvatar>
 *
 * @method UserMyAvatar|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserMyAvatar|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserMyAvatar[]    findAll()
 * @method UserMyAvatar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserMyAvatarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserMyAvatar::class);
    }

//    /**
//     * @return UserMyAvatar[] Returns an array of UserMyAvatar objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UserMyAvatar
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

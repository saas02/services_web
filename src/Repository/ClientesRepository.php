<?php

namespace App\Repository;

use App\Entity\Clientes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Clientes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clientes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clientes[]    findAll()
 * @method Clientes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clientes::class);
    }
    
     /**
     * @return Product[]
     */
    public function findAllInfoClient($domain)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c, a
            FROM App\Entity\Clientes c            
            INNER JOIN App\Entity\Aliados a WITH a.id_cliente = c.id
            WHERE c.dominio = :dominio
            AND c.estado = :estado
            AND a.estado = :estado            
            ORDER BY c.id ASC'
        )->setParameter('dominio', $domain)
        ->setParameter('estado', 1);

        // returns an array of Product objects
        return $query->getResult();
    }

    // /**
    //  * @return Clientes[] Returns an array of Clientes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clientes
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

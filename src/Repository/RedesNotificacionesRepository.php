<?php

namespace App\Repository;

use App\Entity\RedesNotificaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RedesNotificaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method RedesNotificaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method RedesNotificaciones[]    findAll()
 * @method RedesNotificaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RedesNotificacionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RedesNotificaciones::class);
    }
    
     /**
     * @return Product[]
     */
    public function findDayNetworkNotificacion($domain)
    {
        $entityManager = $this->getEntityManager();
        $now = date("Y-m-d");
        
        $query = $entityManager->createQuery(
            'SELECT r, c
            FROM App\Entity\RedesNotificaciones r
            INNER JOIN App\Entity\Clientes c WITH r.id_cliente = c.id
            WHERE c.dominio = :dominio OR c.dominio = :dominio2
            AND c.estado = :estado            
            AND r.fecha > :fechaini AND r.fecha < :fechafin
            ORDER BY c.id ASC'
        )->setParameter('dominio', $domain)
        ->setParameter('dominio2', 'www.'.$domain)
        ->setParameter('fechaini', $now.' 00:00:00')
        ->setParameter('fechafin', $now.' 23:59:00')
        ->setParameter('estado', 1);

        // returns an array of Product objects
        return $query->getResult();
    }

    // /**
    //  * @return RedesNotificaciones[] Returns an array of RedesNotificaciones objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RedesNotificaciones
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

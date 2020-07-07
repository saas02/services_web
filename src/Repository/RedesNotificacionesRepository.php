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
        
        $sub = $entityManager->createQueryBuilder()
            ->select('cli.id')
            ->from('App\Entity\Clientes', 'cli')
            ->where("cli.dominio = '".$domain."' OR cli.dominio = 'www.".$domain."'");
            $fechaIni = $now." 00:00:00";
            $fechaFin = $now." 23:59:00";
        $query = $entityManager->createQueryBuilder()
            ->select('r')
            ->from('App\Entity\RedesNotificaciones', 'r')        
            ->where("r.fecha >= '".$fechaIni."'")
            ->andWhere("r.fecha <= '".$fechaFin."'")
            ->andWhere($sub->expr()->In('r.id_cliente', $sub->getDQL()));                
        
        //echo $query->getDQL();die;
        
        // returns an array of Product objects
        return $query->getQuery()->getResult();
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

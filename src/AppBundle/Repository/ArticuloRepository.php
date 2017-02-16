<?php

namespace AppBundle\Repository;

/**
 * ArticuloRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticuloRepository extends \Doctrine\ORM\EntityRepository
{

    public function EncuentraPorNombre(string $nombre)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery("select a from AppBundle:Articulo a WHERE a.nombre like :nombre");
        $query->setParameter('nombre', '%'. $nombre .'%');


        return $query->getResult();
    }

    public function totalPuntos()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery("select 10 from AppBundle:Articulo a group by a");

        return $query->getFirstResult();
    }
}

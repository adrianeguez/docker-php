<?php

namespace FactelBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FacturaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FacturaRepository extends EntityRepository {

    public function findFacturaById($id) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("factura, emisor, establecimiento, ptoEmision, facturasHasProducto, producto, impuestos, cliente")
                ->from("FactelBundle:Factura", "factura")
                ->join("factura.emisor", "emisor")
                ->join("factura.establecimiento", "establecimiento")
                ->join("factura.cliente", "cliente")
                ->join("factura.ptoEmision", "ptoEmision")
                ->join("factura.facturasHasProducto", "facturasHasProducto")
                ->join("facturasHasProducto.producto", "producto")
                ->join("facturasHasProducto.impuestos", "impuestos")
                ->where('factura.id = :id')
                ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function cantidadFacturas($idPtoEmision, $idEmisor) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("COUNT(factura.id)")
                ->from("FactelBundle:Factura", "factura");
        if ($idEmisor == null) {
            $qb->join("factura.ptoEmision", "ptoEmision");
            $qb->where('ptoEmision.id = :idPtoEmision');
            $qb->setParameter("idPtoEmision", $idPtoEmision);
        } else {
            $qb->join("factura.emisor", "emisor");
            $qb->where('emisor.id = :idEmisor');
            $qb->setParameter("idEmisor", $idEmisor);
        }

        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return 0;
        }
    }

    public function cantidadFacturasEstados($idPtoEmision, $idEmisor) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("factura.estado,COUNT(factura.estado) as cantidad")
                ->from("FactelBundle:Factura", "factura");
        if ($idEmisor == null) {
            $qb->join("factura.ptoEmision", "ptoEmision");
            $qb->where('ptoEmision.id = :idPtoEmision');
            $qb->setParameter("idPtoEmision", $idPtoEmision);
        } else {
            $qb->join("factura.emisor", "emisor");
            $qb->where('emisor.id = :idEmisor');
            $qb->setParameter("idEmisor", $idEmisor);
        }
        
        $qb->groupBy("factura.estado");
        return $qb->getQuery()->getResult();
    }
    
    public function ventaTotal($idPtoEmision, $idEmisor, $anno) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("SUM(factura.valorTotal) as ventaTotal, MONTH(factura.fechaEmision) AS mes")
                ->from("FactelBundle:Factura", "factura");
        $qb->where("YEAR(factura.fechaEmision) = :anno");
        if ($idEmisor == null) {
            $qb->join("factura.ptoEmision", "ptoEmision");
            $qb->andWhere('ptoEmision.id = :idPtoEmision');
            $qb->setParameter("idPtoEmision", $idPtoEmision);
        } else {
            $qb->join("factura.emisor", "emisor");
            $qb->andWhere('emisor.id = :idEmisor');
            $qb->setParameter("idEmisor", $idEmisor);
        }
        $qb->setParameter("anno", $anno);
        $qb->groupBy("mes");
        $qb->orderBy("mes");
        return $qb->getQuery()->getResult();
    }
    
    public function ventaTotalXDia($idPtoEmision, $idEmisor) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("SUM(factura.valorTotal) as ventaTotal, DAY(factura.fechaEmision) AS dia")
                ->from("FactelBundle:Factura", "factura");
        $qb->where("YEAR(factura.fechaEmision) = :anno");
        $qb->andWhere("MONTH(factura.fechaEmision) = :mes");
        if ($idEmisor == null) {
            $qb->join("factura.ptoEmision", "ptoEmision");
            $qb->andWhere('ptoEmision.id = :idPtoEmision');
            $qb->setParameter("idPtoEmision", $idPtoEmision);
        } else {
            $qb->join("factura.emisor", "emisor");
            $qb->andWhere('emisor.id = :idEmisor');
            $qb->setParameter("idEmisor", $idEmisor);
        }
        $qb->setParameter("anno", date("Y"));
        $qb->setParameter("mes", date("m"));
        $qb->groupBy("dia");
        $qb->orderBy("dia");
        return $qb->getQuery()->getResult();
    }
    
    public function findFacturas($search, $start, $limit, $idPtoEmision, $idEmisor) {
        $datos = explode("&", $search);
        $fechaInicial = "";
        $fechaFinal = "";
        if (count($datos) == 3) {
            $search = $datos[2];
            $fechaInicial = $datos[0];
            $fechaFinal = $datos[1];
        }

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("factura, estab, ptoEmision, cliente")
                ->from("FactelBundle:Factura", "factura")
                ->join("factura.emisor", "emisor")
                ->join("factura.establecimiento", "estab")
                ->join("factura.ptoEmision", "ptoEmision")
                ->join("factura.cliente", "cliente");
        $qb->setMaxResults($limit);
        $qb->setFirstResult($start);
        if ($search != "") {
            $qb->where(
                            $qb->expr()->like('factura.estado', $qb->expr()->literal('%' . $search . '%'))
                    )
                    ->orWhere(
                            $qb->expr()->like('factura.claveAcceso', $qb->expr()->literal('%' . $search . '%'))
                    )
                    ->orWhere(
                            $qb->expr()->like('factura.secuencial', $qb->expr()->literal('%' . $search . '%'))
                    )
                    ->orWhere(
                            $qb->expr()->like('cliente.nombre', $qb->expr()->literal('%' . $search . '%'))
                    )
                    ->orWhere(
                            $qb->expr()->like('factura.numeroAutorizacion', $qb->expr()->literal('%' . $search . '%'))
                    )
                    ->orWhere(
                            $qb->expr()->like('cliente.identificacion', $qb->expr()->literal('%' . $search . '%'))
            );
        }

        if ($idEmisor == null) {
            $qb->andWhere('ptoEmision.id = :idPtoEmision');
            $qb->setParameter("idPtoEmision", $idPtoEmision);
        } else {
            $qb->andWhere('emisor.id = :idEmisor');
            $qb->setParameter("idEmisor", $idEmisor);
        }
        if ($fechaInicial != "" && $fechaFinal) {
            $qb->andWhere("factura.fechaEmision BETWEEN :fechaInicial AND :fechaFinal")
                    ->setParameter('fechaInicial', $fechaInicial)
                    ->setParameter('fechaFinal', $fechaFinal);
        }
        $qb->orderBy("factura.secuencial", "DESC");
        return $qb->getQuery()->getResult();
    }

}

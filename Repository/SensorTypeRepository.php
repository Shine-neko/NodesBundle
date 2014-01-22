<?php

namespace Ydle\NodesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SensorTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SensorTypeRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT rt FROM YdleNodesBundle:SensorType rt ORDER BY rt.name ASC'
            )
            ->getResult();
    }
}

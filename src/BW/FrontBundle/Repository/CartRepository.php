<?php

namespace BW\FrontBundle\Repository;

/**
 * CartRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CartRepository extends \Doctrine\ORM\EntityRepository
{
    public function loadByUsers($id){
        $queryBuilder = $this
            ->createQueryBuilder('c')
            ->leftJoin('c.products', 'p')
            ->leftJoin('c.users', 'u')
            ->where('u.id = :id')
            ->setParameter('id', $id)


        ;
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();

        // On récupère les résultats à partir de la Query
        $results =  $query->getResult();
//var_dump($results);
       // exit;
        // On retourne ces résultats
        return $results;

    }

    public function loadByUsersAndProducts($products, $users){
        $queryBuilder = $this
            ->createQueryBuilder('c')
            ->leftJoin('c.products', 'p')
            ->leftJoin('c.users', 'u')
            ->where('u.id = :users')
            ->andWhere('p.id = :products')
            ->setParameters(array(
                'users' => $users,
                'products' => $products
            ))


        ;
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();

        // On récupère les résultats à partir de la Query
        $results =  $query->getResult();
//var_dump($results);
  //      exit;
        // On retourne ces résultats
        return $results;

    }
}
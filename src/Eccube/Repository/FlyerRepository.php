<?php

namespace Eccube\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FlyerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FlyerRepository extends EntityRepository
{

    /**
     * get query builder.
     *
     * @param  array $searchData
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilderBySearchDataForAdmin($searchData)
    {
        $qb = $this->createQueryBuilder('f')
            ->innerJoin('f.ProductTraining', 'pt')
            ->innerJoin('pt.Product', 'p');

        // id
        if (isset($searchData['id']) && Str::isNotBlank($searchData['id'])) {
            $id = preg_match('/^\d+$/', $searchData['id']) ? $searchData['id'] : null;
            $qb
                ->andWhere('f.id = :id OR f.id LIKE :likeid')
                ->setParameter('id', $id)
                ->setParameter('likeid', '%' . $searchData['id'] . '%');
        }

        // link_label
        if (!empty($searchData['link_label']) && $searchData['link_label']) {
            $qb
                ->andWhere('f.link_label', ':link_label')
                ->setParameter('link_label', $searchData['link_label']);
        }

        // disp
        if (!empty($searchData['disp_from']) && $searchData['disp_from']) {
            $date = $searchData['disp_from']
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.disp_from >= :disp_from')
                ->setParameter('disp_from', $date);
        }

        if (!empty($searchData['disp_to']) && $searchData['disp_to']) {
            $date = clone $searchData['disp_to'];
            $date = $date
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.disp_to < :disp_to')
                ->setParameter('disp_to', $date);
        }

        // target
        if (!empty($searchData['training_name']) && $searchData['training_name']) {
            $keywords = preg_split('/[\s�@]+/u', $searchData['training_name'], -1, PREG_SPLIT_NO_EMPTY);
            foreach ($keywords as $keyword) {
                $qb
                    ->andWhere('p.name LIKE :target')
                    ->setParameter('name', '%' . $keyword . '%');
            }
        }

        // place
        if (!empty($searchData['place']) && $searchData['place']) {
            $keywords = preg_split('/[\s�@]+/u', $searchData['place'], -1, PREG_SPLIT_NO_EMPTY);
            foreach ($keywords as $keyword) {
                $qb
                    ->andWhere('pt.place LIKE :place')
                    ->setParameter('place', '%' . $keyword . '%');
            }
        }

        // training_date
        if (!empty($searchData['training_date_from']) && $searchData['training_date_from']) {
            $date = $searchData['training_date_from']
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('pt.training_date_start >= :training_date_from')
                ->setParameter('training_date_from', $date);
        }

        if (!empty($searchData['training_date_to']) && $searchData['training_date_to']) {
            $date = clone $searchData['training_date_to'];
            $date = $date
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('pt.training_date_start < :training_date_to')
                ->setParameter('training_date_to', $date);
        }

        // crate_date
        if (!empty($searchData['create_date_start']) && $searchData['create_date_start']) {
            $date = $searchData['create_date_start']
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.create_date >= :create_date_start')
                ->setParameter('create_date_start', $date);
        }

        if (!empty($searchData['create_date_end']) && $searchData['create_date_end']) {
            $date = clone $searchData['create_date_end'];
            $date = $date
                ->modify('+1 days')
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.create_date < :create_date_end')
                ->setParameter('create_date_end', $date);
        }

        // update_date
        if (!empty($searchData['update_date_start']) && $searchData['update_date_start']) {
            $date = $searchData['update_date_start']
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.update_date >= :update_date_start')
                ->setParameter('update_date_start', $date);
        }
        if (!empty($searchData['update_date_end']) && $searchData['update_date_end']) {
            $date = clone $searchData['update_date_end'];
            $date = $date
                ->modify('+1 days')
                ->format('Y-m-d H:i:s');
            $qb
                ->andWhere('f.update_date < :update_date_end')
                ->setParameter('update_date_end', $date);
        }


        // Order By
        $qb
            ->orderBy('f.update_date', 'DESC');

        return $qb;
    }

    /**
     * �`���V�ꗗ���擾����.
     *
     * @return \Eccube\Entity\Flyer[] �`���V���̔z��
     */
    public function getList($disp_date = null, $disp_status = null)
    {
        $options = $this->app['config']['doctrine_cache'];
        $lifetime = $options['result_cache']['lifetime'];

        $qb = $this->createQueryBuilder('f')
            ->innerJoin('f.ProductTraining', 'pt')
            ->innerJoin('pt.Product', 'p');

        if (!is_null($disp_date)) {
            $qb->andWhere('f.disp_from <= :disp_date')
                ->andWhere('f.disp_to >= :disp_date')
                ->setParameter('disp_date', $disp_date);
        }
        if (is_null($disp_status)) {
            $qb->andWhere('f.Status = 1');
        } else {
            $qb->andWhere($qb->expr()->in('f.Status', ':Status'))
                ->setParameter('Status', $disp_status);
        }
        $flyies = $qb->getQuery()
            ->useResultCache(true, $lifetime)
            ->getResult();

        return $flyies;
    }
}
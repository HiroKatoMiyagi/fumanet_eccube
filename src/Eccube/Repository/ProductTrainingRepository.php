<?php

namespace Eccube\Repository;

use Doctrine\ORM\EntityRepository;
use Eccube\Application;

/**
 * ProductTrainingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductTrainingRepository extends EntityRepository
{
    /**
     * @var \Eccube\Application
     */
    protected $app;

    public function setApplication(Application $app)
    {
        $this->app = $app;
    }

    /**
     * 講習会一覧検索用対象年情報を取得する.
     *
     * 引数 $history=true を指定した場合は, 履歴検索用を取得する.
     *
     * @param bool $history trueの場合, 履歴検索用対象年情報を配列にまとめる
     *
     * @return Array 対象年配列
     */
    public function getYearList($history = false)
    {
        $Years = array();

        $em = $this->getEntityManager();
        $sql = 'SELECT year(training_date_start) as training_date_year FROM dtb_product_training';
        if ($history) {
            $sql .= ' WHERE (accept_limit_date IS NULL) OR (accept_limit_date IS NOT NULL AND accept_limit_date <= :now) AND (training_date_start IS NULL) OR (training_date_start IS NOT NULL AND training_date_start <= :now)';
        } else {
            $sql .= ' WHERE (accept_limit_date IS NOT NULL AND accept_limit_date > :now) OR (training_date_start IS NOT NULL AND training_date_start > :now)';
        }
        $sql .= ' GROUP BY year(training_date_start) ORDER BY year(training_date_start);';
        $YearsResult = $em->getConnection()->fetchAll($sql, array(':now' => date('Y-m-d h H:i:s')));
        foreach ($YearsResult as $result) {
            $Years[$result['training_date_year']] = $result['training_date_year'];
        }
        return $Years;
    }

    /**
     * 講習会一覧検索用地域情報を取得する.
     *
     * 引数 $history=true を指定した場合は, 履歴検索用を取得する.
     *
     * @param bool $history trueの場合, 履歴検索用対象地域情報を配列にまとめる
     *
     * @return Array 対象地域配列
     */
    public function getAreaList($history = false)
    {
        $Areas = array();

        $options = $this->app['config']['doctrine_cache'];
        $lifetime = $options['result_cache']['lifetime'];

        $qb = $this->createQueryBuilder('pt')
            ->select('pt.addr01')
            ->groupBy('pt.addr01')
            ->orderBy('pt.Pref', 'ASC');

        $now = date('Y-m-d h H:i:s');
        if ($history) {
            $qb->andWhere('(pt.accept_limit_date IS NULL ) OR (pt.accept_limit_date IS NOT NULL AND pt.accept_limit_date <= :now) AND (pt.training_date_start IS NULL) OR (pt.training_date_start IS NOT NULL AND pt.training_date_start <= :now)');
        } else {
            $qb->andWhere('(pt.accept_limit_date IS NOT NULL AND pt.accept_limit_date > :now) OR (pt.training_date_start IS NOT NULL AND pt.training_date_start > :now)');
        }
        $qb->setParameter('now', $now);
        $AreasResult = $qb->getQuery()
            ->useResultCache(true, $lifetime)
            ->getResult();
        foreach ($AreasResult as $result) {
            $Areas[$result['addr01']] = $result['addr01'];
        }
        return $Areas;
    }

    public function getProductTrainingByProductId($pruductId)
    {
        return $this->createQueryBuilder('pt')
                ->leftJoin('pt.Product', 'p')
                ->where('p.id = :pruductId')
                ->setParameter('pruductId', $pruductId)
                ->getQuery()
                ->getOneOrNullResult();
    }
}
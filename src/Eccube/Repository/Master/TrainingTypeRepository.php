<?php

namespace Eccube\Repository\Master;

use Doctrine\ORM\EntityRepository;
use Eccube\Util\Str;

/**
 * TrainingTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrainingTypeRepository extends EntityRepository
{
    /**
     * 講習会種別一覧を取得する.
     *
     * @return \Eccube\Entity\TrainingType[] 講習会種別の配列
     */
    public function getList()
    {
        $qb = $this->createQueryBuilder('tt')
            ->select('tt')
            ->orderBy('tt.rank', 'ASC');

        $TrainingTypes = $qb->getQuery()
            ->getResult();
        return $TrainingTypes;
    }

    /**
     * 講習会種別を検索する.
     *
     * @param  array $searchData
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilderBySearchData($searchData)
    {
        $qb = $this->createQueryBuilder('tt');

        // training_type_name
        if (isset($searchData['training_type_name']) && Str::isNotBlank($searchData['training_type_name'])) {
            $qb
                ->andWhere('tt.name LIKE :training_type_name')
                ->setParameter('training_type_name', '%' . $searchData['training_type_name'] . '%');
        }

        // Order By
        $qb
            ->orderBy('tt.rank', 'ASC');

        return $qb;
    }
}

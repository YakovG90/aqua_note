<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 11.05.2018
 * Time: 19:47
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class SubFamilyRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        $this->createQueryBuilder('sub_family')
            ->orderBy('sub_family.name', 'ASC');
    }
}
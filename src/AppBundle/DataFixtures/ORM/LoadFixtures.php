<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 11.05.2018
 * Time: 19:20
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;


class LoadFixtures implements ORMFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objects = Fixtures::load(
            __DIR__.'/fixtures.yml',
            $manager,
            [
                'providers' => [$this]
            ]);
    }

    public function genus()
    {
        $genera = [
            'Octopus',
            'Balaena',
            'Orcinus',
            'Hippocampus',
            'Asterias',
            'Amphiprion',
            'Carcharodon',
            'Aurelia',
            'Cucumaria',
            'Balistoides',
            'Paralithodes',
            'Chelonia',
            'Trichechus',
            'Eumetopias'
        ];

        $key = array_rand($genera);

        return $genera[$key];
    }
}
<?php

namespace App\DataFixtures;

use App\Factory\CarFactory;
use App\Factory\MotoFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        CarFactory::createMany(10);
        MotoFactory::createMany(10);

        $manager->flush();
    }
}

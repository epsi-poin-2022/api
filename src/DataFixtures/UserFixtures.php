<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Enum\RoleEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $samuel = new User();
        $samuel->setEmail('samuel.challe@epsi.fr');
        $samuel->setPassword('$2y$13$xx5mdJIxx5HAfzxkfiFgbua/ghQJp8CoZVKEmk0HVJuPJVi8MfqmG');
        $samuel->setRoles([RoleEnum::ROLE_ADMIN()]);
        $manager->persist($samuel);

        $loris = new User();
        $loris->setEmail('loris.cocco@epsi.fr');
        $loris->setPassword('$2y$13$xx5mdJIxx5HAfzxkfiFgbua/ghQJp8CoZVKEmk0HVJuPJVi8MfqmG');
        $loris->setRoles([RoleEnum::ROLE_ADMIN()]);
        $manager->persist($loris);

        $erwann = new User();
        $erwann->setEmail('erwann.duclos@gmail.com');
        $erwann->setPassword('$2y$13$xx5mdJIxx5HAfzxkfiFgbua/ghQJp8CoZVKEmk0HVJuPJVi8MfqmG');
        $erwann->setRoles([RoleEnum::ROLE_ADMIN()]);
        $manager->persist($erwann);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['dev', 'prod'];
    }
}

<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\Skill;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class SkillFixtures extends Fixture implements FixtureGroupInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $autonomy = new Skill();
        $autonomy->setName('Autonomie dans l’exécution des tâches');
        $autonomy->setQuestion('Aimez-vous travailler en autonomie ?');
        $manager->persist($autonomy);
        $this->addReference(FixtureEnum::SKILL_AUTONOMY_REFERENCE(), $autonomy);

        $watch = new Skill();
        $watch->setName('Veille technologique');
        $watch->setQuestion('Vous aimez suivre techniquement l’évolution des nouvelles technologies ?');
        $manager->persist($watch);
        $this->addReference(FixtureEnum::SKILL_WATCH_REFERENCE(), $watch);

        $rigorous = new Skill();
        $rigorous->setName('Rigueur et méthodologie');
        $rigorous->setQuestion('Êtes-vous calme et méthodique ?');
        $manager->persist($rigorous);
        $this->addReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE(), $rigorous);

        $social = new Skill();
        $social->setName('Sociale');
        $social->setQuestion('Êtes-vous très social(e) ?');
        $manager->persist($social);
        $this->addReference(FixtureEnum::SKILL_SOCIAL_REFERENCE(), $social);

        $logic = new Skill();
        $logic->setName('Logique');
        $logic->setQuestion('Vous aimez résoudre des énigmes ?');
        $manager->persist($logic);
        $this->addReference(FixtureEnum::SKILL_LOGIC_REFERENCE(), $logic);

        $english = new Skill();
        $english->setName('Anglais');
        $english->setQuestion('Vous savez parler anglais ?');
        $manager->persist($english);
        $this->addReference(FixtureEnum::SKILL_ENGLISH_REFERENCE(), $english);

        $drawing = new Skill();
        $drawing->setName('Dessin');
        $drawing->setQuestion('Vous faites du dessin ?');
        $manager->persist($drawing);
        $this->addReference(FixtureEnum::SKILL_DRAWING_REFERENCE(), $drawing);

        $design = new Skill();
        $design->setName('Design');
        $design->setQuestion('Le graphisme et l’esthétique sont importants pour vous ?');
        $manager->persist($design);
        $this->addReference(FixtureEnum::SKILL_DESIGN_REFERENCE(), $design);

        $pedagogy = new Skill();
        $pedagogy->setName('Pédagogie');
        $pedagogy->setQuestion('Vous aimez prendre le temps pour expliquer aux autres ?');
        $manager->persist($pedagogy);
        $this->addReference(FixtureEnum::SKILL_PEDAGOGY_REFERENCE(), $pedagogy);

        $marketing = new Skill();
        $marketing->setName('Marketing');
        $marketing->setQuestion('Vous aimez les notions de marketing ?');
        $manager->persist($marketing);
        $this->addReference(FixtureEnum::SKILL_MARKETING_REFERENCE(), $marketing);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['dev', 'prod'];
    }
}
